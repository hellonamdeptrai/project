<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index(){
        // $thamsochuyenvao = Storage::disk('public')->put('test.txt', 'erfsdfsfdf');
        // Storage::disk('public')->put('file.txt', 'Nam hihi haha');

        // $contents = Storage::disk('public')->get('test.txt');

        // $url = Storage::disk('public')->exists('test.txt');

        // $url = Storage::disk('public')->url('test.txt');

        // $coppy = Storage::disk('public')->copy('test.txt', 'coppy/test3.txt');

        // $move = Storage::disk('public')->move('file.txt', 'coppy/file2.txt');

        // $path = Storage::disk('public')->move('file.txt', 'coppy/file2.txt');

        // $delete = Storage::disk('public')->delete('coppy/test3.txt');

        // dd($url);

        //Download
        // return Storage::disk('public')->download('test.txt');

        return view('frontend.home');
    }
}
