<?php

namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feature;
class FeatureController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $features = Feature::all();
        return view('dashboard/features/list',compact('features'));
    }

    public function validateRequest()
    {
        return(request()->validate([
       'feature_title' => 'required',
        'feature_desc' => 'required',
    ]));
    }

    public function create()
    {
        return view('dashboard/features/create');
    }
    public function store(Request $request)
    {
       Feature::create($this->validateRequest());
        return redirect('features');  
    }

    public function edit(Feature $feature)
    {
        return view('dashboard/features/edit' , compact('feature'));
    }

    public function update(Feature $feature)
    {
        $feature ->update($this->validateRequest());
        return redirect('features'); 
    }

    public function destroy(Feature $feature)
    {
      $feature->delete();
      return redirect('features');
    }
}
