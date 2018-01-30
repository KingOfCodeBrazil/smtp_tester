<?php

namespace App\Mail;

use Illuminate\Support\Facades\Config;

class MailConfig {
    
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function setConfig()
    {
        Config::set('mail.host', $this->data['host']);
        Config::set('mail.port', $this->data['port']);

        if($this->data['secured']) {
            Config::set('mail.encryption', $this->data['encryption']);
        }

        if($this->data['authentication']) {
            Config::set('mail.username', $this->data['login']);
            Config::set('mail.password', $this->data['password']);
        }
    }

}