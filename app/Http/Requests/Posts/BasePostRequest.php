<?php

namespace App\Http\Requests\Posts;

use App\Post;
use Auth;
use Illuminate\Foundation\Http\FormRequest;

class BasePostRequest extends FormRequest
{
    /**
     * @var Post
     */
    public $postModel;

    protected function prepareForValidation()
    {
        $this->postModel = Post::findBySlugOrFail($this->post);
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::id() === $this->postModel->user_id;
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
