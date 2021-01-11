<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class FormExampleRequest extends FormRequest
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
            'email' => 'required',
            'Password' => 'required',
        ];
    }
    public function messages()
    {
        $messages =[
            'email.required' => 'Yêu cầu nhập Email!',
            'Password.required' => 'Yêu cầu nhập mật khẩu!',
        ];
        return $messages;
    }
}
