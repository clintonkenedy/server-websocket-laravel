<?php

namespace App\Http\Controllers;

use App\Events\PrivateWebSocket;
use App\Events\testWebsocket;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function test() {
        event(new testWebsocket);
    }
    public function private() {
        event(new PrivateWebSocket);
    }
}
