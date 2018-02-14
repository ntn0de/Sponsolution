<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:brand', ['except' => ['showRegisterForm','store']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('brands.dashboard');
    } 
    public function showRegisterForm()
    {
        return view('brands.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validation($request);
        //Brand::create($request->all());
        return Brand::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'job_title' => $request->input('job_title'),
            'password' => bcrypt($request->input('password')),
        ]);
       // return redirect()->route('brand.login');
    }

    public function validation($request)
    {
        return $this->validate($request,[
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:brands',
            'job_title' => 'required|max:255',
            'password' => 'required|min:6|confirmed',
        ]);
    }
    protected function create(array $data)
    {
        return Brand::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'job_title' => $data['job_title'],
            'password' => bcrypt($data['password']),
        ]);
    }
    public function test()
    {
        return view('brands.test');
    } 
}
