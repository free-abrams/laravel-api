<?php

namespace App\Http\Requests;

use App\Models\Admin;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $route = $this->route();
        $data = $this->request->all();
        switch ($route) {
            case 'lists':
                $rule = [
                    'page' => 'required|numeric',
                    'limit' => 'required|numeric',
                    'search_name' => 'nullable|string'
                ];
                break;
            case 'create':
                $rule = [
                    'nickname',
                    'username',
                    'password',
                    'avatar',
                    'status'
                ];
                break;
            case 'update':
                $rule = [
                    'nickname' => ['required', Rule::unique(Admin::class, 'nickname')->ignore($data['id'])],
                    'username' => ['required', Rule::unique(Admin::class, 'username')->ignore($data['id'])],
                    'password' => 'required',
                    'password_confirmed' => ['required', 'confirmed:password'],
                    'avatar'   => 'required',
                    'status'   => 'required',
                ];
                break;
            default:
                $rule = [];
                break;
        }
        return $rule;
    }


    protected function failedValidation(Validator $validator)
    {
        $res = [
            'code' => 400,
            'msg' => $validator->errors()->first(),
            'result' => []
        ];
        return response()->json($res, 200);
    }
}
