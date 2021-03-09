<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SendSuggest;
use Bmatovu\MtnMomo\Products\Collection;

class SendSuggestionController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arr['send_suggestion'] = SendSuggest::all();
        return view ('send_suggestion')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('send_suggestion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,SendSuggest $sendsuggest)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'telephone' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $sendsuggest->fname = $request->input('fname');
        $sendsuggest->lname = $request->input('lname');
        $sendsuggest->telephone = $request->input('telephone');
        $sendsuggest->email = $request->input('email');
        $sendsuggest->subject = $request->input('subject');
        $sendsuggest->message = $request->input('message');
        $sendsuggest->save();
        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(request $request)
    {
        return redirect(route('sugestion'));
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
