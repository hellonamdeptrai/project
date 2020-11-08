<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('backend.products.index')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        return view('backend.products.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //Cách 1:

        // $categories = Category::get();
        // $string = '';
        // foreach ($categories as $category) {
        //     $string .= $category->id.',';
        // }
        // $validatedData = $request->validate([
        //     'name' => 'required|min:10|max:255',
        //     'category_id' => 'int:'.$string,
        //     'origin_price' => 'required',
        //     'sale_price' => 'required',
        //     'content' => 'required',
        //     'status' => 'required',
        // ]);


        //Cách 3:

        // $validator = Validator::make($request->all(),
        //     [
        //         'name'         => 'required|min:10|max:255',
        //         'origin_price' => 'required|numeric',
        //         'sale_price'   => 'required|numeric',
        //     ],
        //     [
        //         'required' => ':attribute Không được để trống',
        //         'min' => ':attribute Không được nhỏ hơn :min',
        //         'max' => ':attribute Không được lớn hơn :max'
        //     ],
        //     [
        //         'name' => 'Tên sản phẩm',
        //         'origin_price' => 'Giá gốc',
        //         'sale_price' => 'Giá bán'
        //     ]
        // );

        // if ($validator->errors()){
        //     return back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        $product = new Product();

        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->brand = $request->get('brand');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->discount_percent = 100;
        $product->save();

        return redirect()->route('backend.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::get();
        $product = Product::find($id);
        return view('backend.products.edit')->with([
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {
        $product = Product::find($id);

        $product->name = $request->get('name');
        $product->slug = \Illuminate\Support\Str::slug($request->get('name'));
        $product->category_id = $request->get('category_id');
        $product->brand = $request->get('brand');
        $product->origin_price = $request->get('origin_price');
        $product->sale_price = $request->get('sale_price');
        $product->content = $request->get('content');
        $product->status = $request->get('status');
        $product->user_id = Auth::user()->id;
        $product->discount_percent = 100;
        $product->save();

        return redirect()->route('backend.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showImages($id)
    {
        $images = Product::find($id)->images;
        foreach ($images as $image){
            echo $image->name."\n";
        }
    }
}
