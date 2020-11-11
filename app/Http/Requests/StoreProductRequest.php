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
            'images' => 'required||max:2048',
            // 'images' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'min' => ':attribute dữ liệu phải lớn hơn 2',
            'max' => ':attribute kích thước quá lớn',
            'numeric' => ':attribute phải là số',
            'in' => ':attribute phải chọn mục',
            'mimes' => ':attribute phải là định dang jpeg,jpg,png',
            'image' => ':attribute phải chọn đúng định dạng ảnh',
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
            'images' => 'Ảnh',
        ];
    }
}
