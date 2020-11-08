<?php

namespace App\Http\Requests;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        //Cách 2:
        $categories = Category::get();
        $string = '';
        foreach ($categories as $category) {
            $string .= $category->id.',';
        }
        return [
            'name' => 'required|min:2|max:100',
            'category_id' => 'in:'.$string,
            'brand' => 'required',
            'origin_price' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'content' => 'required',
            'status' => 'in:0,1,-1',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'min' => ':attribute phải có dữ liệu',
            'max' => ':attribute quá lớn',
            'numeric' => ':attribute phải là số',
            'in' => ':attribute phải chọn mục',
        ];
    }

    public function attributes()
    {

        return [
            'name' => 'Tên điện thoại',
            'category_id' => 'Danh mục',
            'brand' => 'Thương hiệu',
            'origin_price' => 'Giá bán',
            'sale_price' => 'Giá sale',
            'content' => 'Mô tả điện thoại',
            'status' => 'Trạng thái',
        ];
    }
}
