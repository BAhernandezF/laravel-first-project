<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /* protected function prepareForValidation()
    {
        $this->merge([
           //'slug' => Str::slug($this->title)
           //'slug' => Str::of($this->title)->slug()->append("-adicional")
           'slug' => str($this->title)->slug()->append("-slug")
        ]);
    } */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {

        return [
            "title" => "required|min:5|max:500",
            "slug" => "required|min:5|max:500|unique:posts,slug,".$this->route("post")->id,
            "category_id" => "required|integer",
            "content" => "required|min:10",
            "description" => "required|min:10",
            "posted" => "required",
            "image" => "mimes:jpeg,jpg,png|max:10240"
        ];
    }
}
