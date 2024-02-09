<?php

namespace BasementChat\Basement\Http\Controllers;

use BasementChat\Basement\Facades\Basement;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

class MessagesController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function __invoke(): View
    {
         $echoOptions = Basement::getBroadcastOptions();
		 return view('basement::messages', ['echoOptions' => $echoOptions]);
    }
}
