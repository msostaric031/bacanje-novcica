<?php

namespace src\Applications\Exceptions;

use Illuminate\Validation\ValidationException as BaseValidationException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class ValidationException extends BaseValidationException
{
    /**
     * The status code to use for the response.
     *
     * @var int
     */
    public $status = Response::HTTP_BAD_REQUEST;

    /**
     * The error codes list from form request.
     *
     * @var array
     */
    public $errorCodes = [];

    /**
     * Create a new exception instance.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @param  array  $errorCodes
     * @param  \Symfony\Component\HttpFoundation\Response  $response
     * @param  string  $errorBag
     *
     * @return void
     */
    public function __construct($validator, array $errorCodes = [], $response = null, $errorBag = 'default')
    {
        parent::__construct($validator, $response, $errorBag);

        $this->setErrorCodes($errorCodes);
    }

    /**
     * Get all of the validation error messages.
     *
     * @return array
     */
    public function errors() : array
    {
        $errors = [];

        foreach ($this->validator->failed() as $field => $rule) {
            $fullRuleName = $this->getFullRuleName($field, $rule);

            $errors[] = [
                'message' => $this->validator->errors()->first($field),
                'code'    => $this->getErrorCode($fullRuleName),
            ];
        }

        return $errors;
    }

    /**
     * Get full rule name from field and rule.
     *
     * @param  string  $field
     * @param  array  $rule
     *
     * @return string
     */
    protected function getFullRuleName(string $field, array $rule) : string
    {
        return $field . '.' . strtolower(key($rule));
    }

    /**
     * Get error code from field and rule name.
     *
     * @param  string  $ruleName
     *
     * @return string|null
     */
    protected function getErrorCode(string $ruleName) : string
    {
        return Arr::get($this->errorCodes, $ruleName, '');
    }

    /**
     * Set error codes
     *
     * @param array $errorCodes
     *
     * @return void
     */
    protected function setErrorCodes(array $errorCodes) : void
    {
        foreach ($errorCodes as $key => $errorCode) {
            if (Str::contains($key, '*')) {
                $this->setErrorCodesForWildcardKey($key, $errorCode);
            } else {
                $this->setErrorCode($key, $errorCode);
            }
        }
    }

    /**
     * Set error codes for wildcard key
     *
     * @param string $key
     * @param string $errorCode
     *
     * @return void
     */
    protected function setErrorCodesForWildcardKey(string $key, string $errorCode) : void
    {
        // get field name without rule
        $field = substr($key, 0, strrpos($key, '.'));

        $fieldRegexp = '/^'.str_replace('.*.', '.([0-9]*).', $field).'$/';

        $keyMatches = [];

        foreach ($this->validator->getMessageBag()->keys() as $messageBagKey) {
            if (preg_match($fieldRegexp, $messageBagKey, $matches)) {
                $keyMatches[] = $matches[1];
            }
        }

        foreach ($keyMatches as $keyMatch) {
            $fullRuleName = str_replace('.*.', ".$keyMatch.", $key);

            $this->setErrorCode($fullRuleName, $errorCode);
        }
    }

    /**
     * Set error code with key
     *
     * @param string $key
     * @param string $errorCode
     *
     * @return void
     */
    protected function setErrorCode(string $key, string $errorCode) : void
    {
        if (! Arr::exists($this->errorCodes, $key)) {
            $this->errorCodes[$key] = $errorCode;
        }
    }
}