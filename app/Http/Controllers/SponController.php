<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class SponController extends Controller
{
    protected $event = null;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sideevents = $this->event->take(3)->get();
        return view('front.home',compact('sideevents'));
    }

    public function event()
    {
        $events = $this->event->all();
        $sideevents = $this->event->take(3)->get();
        return view('front.events', compact('events','sideevents'));
    }

    
    public function spotlight()
    {
        $events = $this->event->where( 'featured','=','1')->get();
        $sideevents = $this->event->take(3)->get();
        return view('front.spotlight', compact('events','sideevents'));
    }

    public function about()
    {
        $sideevents = $this->event->take(3)->get();
        return view('front.about',compact('sideevents'));
    }

    public function contact()
    {
        $sideevents = $this->event->take(3)->get();
        return view('front.contact',compact('sideevents'));
    }

    public function submitEvent()
    {
        $sideevents = $this->event->take(3)->get();
        return view('events.submitevent',compact('sideevents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
}
