<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SmtpTesterRequest;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Send the smtp e-mail.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(SmtpTesterRequest $request)
    {
        
    }
}
