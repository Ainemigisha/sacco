<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class EditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        switch($this->method())
        {
            case 'DELETE':
            case 'PATCH':
            case 'PUT':
            case 'GET':
            case 'POST':
            {
                        // where 'posts' is the placeholder for the post id of the route
                //$user = User::find(Auth::user()->id);

                return Auth::user()->type =="financial manager";
            }
            default:
            {
                break;
            }
        }
        return false;
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
}
