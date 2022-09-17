<?php

namespace src\Applications\Http\FormRequests;

use Illuminate\Foundation\Http\FormRequest as BaseFormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Factory as ValidationFactory;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Config\Repository as Config;
use Illuminate\Translation\Translator;
use src\Applications\Exceptions\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

abstract class FormRequest extends BaseFormRequest
{
    /**
     * The config repository instance
     *
     * @var \Illuminate\Config\Repository
     */
    protected $config;

    /**
     * The translator instance
     *
     * @var \Illuminate\Translation\Translator
     */
    protected $lang;
    protected Str $str;

    public function __construct(Str $str)
    {
        $this->str = $str;
        parent::__construct();
    }

    /**
     * Create the default validator instance.
     *
     * @param \Illuminate\Validation\Factory $validationFactory
     * @param \Illuminate\Config\Repository $config
     * @param \Illuminate\Translation\Translator $lang
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(ValidationFactory $validationFactory, Config $config, Translator $lang)
    {
        $this->config = $config;
        $this->lang = $lang;

        return $this->createDefaultValidator($validationFactory);
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     *
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $validationException = new ValidationException($validator, $this->errorCodes());

        throw new HttpResponseException(response()->json([
            'errors' => $validationException->errors()
        ], $validationException->status));
    }

    /**
     * Get the validation error codes for the request.
     *
     * @return array
     */
    public function errorCodes() : array
    {
        return [];
    }
}