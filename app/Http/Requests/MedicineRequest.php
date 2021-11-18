<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'active_principle' => 'required',
        'pharmaceutical_form' => 'required',
        'indications' => 'required',
        'route_dosage' => 'required',
        'management_rules' => 'required',
        'observations' => 'required',
        ];
    }
}
