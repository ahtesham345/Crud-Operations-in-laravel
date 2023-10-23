<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class employeecontroller extends Controller
{
    public function index() {
        $employee = employee::all();
        return view('employee.index' ,compact('employee'));
    }
    public function create() {
        return view('employee.create');
    }
    public function store(Request $request) {
        $employee = new employee;
        $employee->name = $request->input('name');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/employee/',$filename);
            $employee->image = $filename;

        }

        $employee->save();
        return redirect()->back()->with('status','Data inserted');
    }
    public function update($id){
            $employee = employee::find($id);
            return view('employee.update',compact('employee'));
    }

    public function edit(Request $request,$id){
        $employee = employee::find($id);
        $employee->name = $request->input('name');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $destination = 'upload/employee/'.$employee->image;
        if(Storage::exists($destination))
        {
            Storage::delete($destination);
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('upload/employee/',$filename);
            $employee->image = $filename;

        }

        $employee->update();
        return redirect()->back()->with('status','Data updated');
    }
    public function delete($id){
        $employee = employee::find($id);
        $destination = 'upload/employee/'.$employee->image;
        if(Storage::exists($destination))
        {
            Storage::delete($destination);
        }
        $employee->delete();
        return redirect()->back()->with('status','Data Deleted');
    }
}
