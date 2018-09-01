<?php

namespace App\Http\Controllers\API;

use App\Event;
use App\Http\Controllers\Controller;
use App\Libraries\JDF;
use App\User;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function save(Request $request)
    {
        $body = $request->get('body');
        $key = $request->get('key');
        $user = (new User)->where("key", $key)->first();

        $jdf = new JDF();

        $event = new Event();
        $event->user_id = $user->id;
        $event->body = $body;
        $event->create_date = $jdf->getTimestamp();
        $event->save();

        return response()->json([
            "error" => false
        ], 201);
    }
}
