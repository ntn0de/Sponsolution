<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use App\Brand;

class AdminController extends Controller
{
    protected $event = null;
    protected $user = null;
    protected $brand = null;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Event $event,User $user,Brand $brand)
    {
        $this->middleware('auth:admin');
        $this->event = $event;
        $this->user = $user;
        $this->brand = $brand;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $levents = $this->event->orderBy('id', 'desc')->take(3)->get();
        $lusers = $this->user->orderBy('id', 'desc')->take(3)->get();
        $lbrands = $this->brand->orderBy('id', 'desc')->take(5)->get();
        $events = $this->event->all();
        return view('admin.dashboard',compact('levents','lusers','lbrands'));
    }

    public function events()
    {
        $events = $this->event->all();
        return view('admin.events',compact('events'));
    }
    public function brands()
    {
        $brands = $this->brand->all();
        return view('admin.brands',compact('brands'));
    }
    public function users()
    {
        $users = $this->user->all();
        return view('admin.users',compact('users'));
    }
}
