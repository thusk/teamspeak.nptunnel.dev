<?php

namespace NpTS\Domain\Client\Requests;

use NpTS\Http\Requests\Request;

class ChangeVirtualServerBannerRequest extends Request
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
            //
        ];
    }

    /**
     * custom messages for validation
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
