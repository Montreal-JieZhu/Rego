<?php

namespace App\Http\Controllers;

use DummyFullModelClass;
use App\lain;
use Illuminate\Http\Request;
use Mail;
class MailController extends Controller
{
    
     public function basic_email(){
      $data = array('name'=>"Virat Gandhi");
   
      Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('zhujie8088@gmail.com', 'Tutorials Point')->subject
            ('Laravel Basic Testing Mail');
         $message->from('abigailwilliams831@gmail.com','basic email');
      });
      echo "Basic Email Sent. Check your inbox.";
   }
   public function html_email(){
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('13471148660@139.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('abigailwilliams831@gmail.com','html_email');
      });
      echo "HTML Email Sent. Check your inbox.";
   }
   public function attachment_email(){
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('122745780@qq.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('D:\XAMPP\htdocs\assets\img\avatar.jpg');         
         $message->from('abigailwilliams831@gmail.com','attachment_email');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
    /**
     * Display a listing of the resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function index(lain $lain)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function create(lain $lain)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, lain $lain)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function show(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function edit(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lain  $lain
     * @param  \DummyFullModelClass  $DummyModelVariable
     * @return \Illuminate\Http\Response
     */
    public function destroy(lain $lain, DummyModelClass $DummyModelVariable)
    {
        //
    }
}
