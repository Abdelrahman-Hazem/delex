<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Webmail;
class WebmailController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth')->except('store');
    }
    
    public function index( )
    {
       $webmails = Webmail::all();
      return view('dashboard/webmails/list' ,compact('webmails'));

    }

    public function store(Request $request)
    {
      $webmail = new Webmail();
     
      $webmail->name = $request->name ;
      $webmail->email = $request->email ;
      $webmail->phone = $request->phone ;
      $webmail->service_choosen = $request->service_choosen ;
      $webmail->message = $request->message ;
      $webmail->save();
      
    }

    public function show(Webmail $webmail)
    {
      return view ('dashboard.webmails.show',compact('webmail'));
    }

    public function destroy(Webmail $webmail)
    {
      $webmail->delete();
      return redirect('webmails');
    }
}
