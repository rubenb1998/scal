<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\CalendarInvite;
use App\Mail\InviteCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CreateCalendarInviteRequest;

class CalendarInviteController extends Controller
{
    public function invite()
    {
        return view('invites.index');
    }

    public function process(CreateCalendarInviteRequest $request)
    {
        do {
            $token = str_random(32);
        }
        while (CalendarInvite::where('token', $token)->first());

        $invite = CalendarInvite::create([
            'name' => $request->name,
            'email' => $request->email,
            'calendar_id' => $request->calendar_id,
            'token' => $token
        ]);

        // send the email
        Mail::to($request->get('email'))->send(new InviteCreated($invite));

        // redirect back where we came from
        return redirect()
            ->back();
    }

    public function accept($token)
    {
        // Look up the invite
        if (!$invite = Invite::where('token', $token)->first()) {
            //if the invite doesn't exist do something more graceful than this
            abort(404);
        }

        // create the user with the details from the invite
        User::create(['email' => $invite->email]);

        // delete the invite so it can't be used again
        $invite->delete();

        // here you would probably log the user in and show them the dashboard, but we'll just prove it worked

        return 'Good job! Invite accepted!';
    }

    public function list() {

        //$user = Auth::user();

        $events = auth()->user()->events()
            ->whereDate('started_at', '>=', Carbon::today()->toDateString())
            ->orderBy('started_at', 'asc')
            ->get();

        return view('invites.list', compact('events'));
    }
}
