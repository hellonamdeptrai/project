<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        //phan trang
//        $users = User::paginate(5);
        return view('backend.users.index')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function showProducts($user_id)
    {
        $products = User::find($user_id)->products;
        foreach ($products as $product){
            echo $product->name."\n";
        }
    }

    public function test()
    {
//        $user = User::find(1);
//        $userInfo = $user->userInfo;
//        dd($userInfo->fullname);

//        $category = Category::find(1);
////        dd($category);
//        $products = $category->products;
////        dd($products);
//        foreach ($products as $product){
//            echo $product->name."\n";
//        }

//        $products = Category::find(1)->products()->where('status',1)->get();
////        dd($products);
//        foreach ($products as $product){
//            echo $product->name."\n";
//        }


//        $category = Category::find(1);
//
//        $product = $category->products()->create([
//            'name' => 'san pham create',
//            'slug' => 'asda',
//            'discount_percent' => 12,
//            'origin_price' => '10000',
//            'sale_price' => '5000',
//            'content' => 'Noi dung demo',
//            'user_id' => 1,
//            'status' => 1
//        ]);

//        $order = Order::find(1);
//
//        $product_id_1 =1;
//        $product_id_2 = 2;
//        $product_id_3 = 3;
//        $order->products()->attach([
//            $product_id_1,
//            $product_id_2,
//            $product_id_3
//        ]);

    }
}
