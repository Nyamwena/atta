<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\studentDetails;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.index');
    }

    public function addStudent(){
        return view('admin.register_doc');
    }

    public function studentSave(Request $request){
        $request->validate([
            "shop_name"     =>  "required",
            "location"      =>  "required",
            "filename"      =>  "required|mimes:jpeg,png,jpg,bmp|max:2048"
        ]);


        $saveDoc = new medicalPractitioner();
         $saveDoc->name = $request->input('name');
        $saveDoc->surname = $request->input('surname');
        $saveDoc->title = $request->input('title');
        $saveDoc->dob = $request->input('dob');
        $saveDoc->in_service = $request->input('in_service');
        $saveDoc->specialisation = $request->input('specialisation');
        $saveDoc->qualifications = $request->input('qualifications');
        $saveDoc->province = $request->input('province');
        $saveDoc->street_address = $request->input('address');
        $saveDoc->mobile = $request->input('mobile');
        $saveDoc->longitude = $request->input('longi');
        $saveDoc->latitude = $request->input('lat');
        $saveDoc->save();
        return redirect()->back()->with('message', 'Successfully Saved.');

    }


}
