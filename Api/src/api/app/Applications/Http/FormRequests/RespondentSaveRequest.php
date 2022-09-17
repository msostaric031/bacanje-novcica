<?php

namespace src\Applications\Http\FormRequests;

class RespondentSaveRequest extends FormRequest
{
    public function rules(): array
    {
        $maxCharsTwenty = 'max:20';

        return [
            'uniqueIdentifier' => [
                'required',
                'string',
                $maxCharsTwenty
            ],
            'gender' => [
                'required',
                'string',
                'min:1',
                'max:1'
            ],
            'age' => [
                'required',
                'string',
                $maxCharsTwenty
            ],
            'educationLevel' => [
                'required',
                'string',
                $maxCharsTwenty
            ],
            'employmentStatus' => [
                'required',
                'string',
                $maxCharsTwenty
            ],
            'socioEconomicStatus' => [
                'required',
                'string',
                $maxCharsTwenty
            ],
            'researchName' => [
                'required',
                'string',
                $maxCharsTwenty
            ]
        ];
    }

    public function validationData(): array
    {
        return [
            'uniqueIdentifier' => $this->input('uniqueIdentifier'),
            'gender' => $this->input('gender'),
            'age' => $this->input('age'),
            'educationLevel' => $this->input('educationLevel'),
            'employmentStatus' => $this->input('employmentStatus'),
            'socioEconomicStatus' => $this->input('socioEconomicStatus'),
            'researchName' => $this->input('researchName')
        ];
    }
}