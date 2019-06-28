<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use function GuzzleHttp\json_encode;
use App\User;
use App\Event;
use Carbon\Carbon;

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
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contactsIndex()
    {
        return view('contacts');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pricingIndex    ()
    {
        return view('pricing');
    }

    public function getEvents()
    {
        $events = Event::orderBy('started_at', 'desc')->get();
        foreach ($events as $event){
             $eventsResponse[] = [
              'title' =>$event->name,
              'color' => $event->calendar->color,
              'start' => Carbon::parse($event->started_at)->toDateTimeString(),
              'end' => Carbon::parse($event->ended_at)->toDateTimeString(),
              'allDay' => $event->allday,
              'description' => $event->description
        ];}

        return json_encode($eventsResponse);
    }
}
