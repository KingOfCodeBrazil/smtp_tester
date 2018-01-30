<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\MailConfig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
        try {

            $smtpData = $request->all();

            (new MailConfig($smtpData))->setConfig();
            $sent = Mail::to($smtpData['to'])->send(new TestMail($smtpData));
            
            return response()->json(['sent' => true, 'message' => 'E-mail sent with success. Please verify your inbox.']);

        } catch (\Exception $e) {
            throw $e;
        }
    }
}
