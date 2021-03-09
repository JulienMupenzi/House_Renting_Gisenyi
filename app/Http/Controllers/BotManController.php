<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\OrderConversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    protected $botman;

    public function __construct()
    {
        $this->botman = app('botman');
    }

    public function handle()
    {
        // $this->botman = app('botman');

        $this->botman->startConversation(new OrderConversation);


        // $this->botman->fallback('App\Http\Controllers\FallbackController@index');

        $this->botman->listen();
    }


    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     */
    public function startConversation()
    {
        $this->botman->startConversation(new OrderConversation);
    }
}
