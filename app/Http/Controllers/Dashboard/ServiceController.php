<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $services = Service::all();
        return view('dashboard/services/list',compact('services'));
    }

    public function validateRequest()
    {
        return(request()->validate([
       'service_title' => 'required',
        'service_desc' => 'required',
    ]));
    }

    public function create()
    {
        return view('dashboard/services/create');
    }
    public function store()
    {

      Service::create($this->validateRequest());

        return redirect('services');  
    }

    public function edit(Service $service)
    {
        return view('dashboard/services/edit' , compact('service'));
    }

   

    public function update(Service $service)
    {
        $service ->update($this->validateRequest());
        return redirect('services'); 
    }

    public function destroy(Service $service)
    {
      $service->delete();
      return redirect('services');
    }
}

