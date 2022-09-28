<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.img_title' => 'required|string|max:50',
            'post.img_comment' => 'required|string|max:200',
            
            //ファイルパスのバリデーションが設定できない
            //stringではエラーと判定されてしまう．
            // 'post.img_path' => 'required',
            // 'post.img_path' => 'max:255'
            
        ];
    }
}
