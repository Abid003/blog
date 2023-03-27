<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.index');
    }

    public function about()
    {

        return view('about');
    }

    public function userindex()
    {

        $slider = DB::table('sliders')->get();
        return view('fontend.index', ['slider' => $slider]);
    }


    public function home()
    {

        return view('home');
    }

    public function slider()
    {

        $slider = DB::table('sliders')->get();
        return view('admin.sliderform', ['slider' => $slider]);
    }


    public function add(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'desc' => 'required',
        ]);

        $image = file_get_contents($request->image);
        $base64 = base64_encode($image);


        $querry = DB::table('sliders')->insert([
            'title' => $request->title,
            'image' =>  $base64,
            'desc' => $request->desc,
        ]);

        if ($querry) {
            dd('hm');
            return redirect('admin.sliderform')->with('success', 'new slider added successfully.');
        }else{
            return redirect('admin.home')->with('failed', 'failed.');
        }
        
    }
}
