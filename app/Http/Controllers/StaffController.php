<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StaffController extends Controller
{
    //view employee
    public function viewEmployee()
    {
        $role = DB::table('staff')->get();
            // dd($query);
        return view('form.employee',compact('role'));
    }
    // insert
    public function save(Request $Request)
    {

        $Request->validate([
            'name'          => 'required',
            'gender'        => 'required',
            'dob'           => 'required',
            'phone'         => 'required',
            'eid'           => 'required',
            'nationality'   => 'required',
            'salary'        => 'required',
        ]);


        $data = [

            'name'          =>   $Request->name,
            'gender'        =>   $Request->gender,
            'dob'           =>   $Request->dob,
            'phone'         =>   $Request->phone,
            'eid'           =>   $Request->eid,
            'nationality'   =>   $Request->nationality,
            'salary'        =>   $Request->salary,
        ];
        DB::table('staff')->insert($data);
        return redirect()->route('staff')->with('success','Has been insert successfully!');
    }

    // report
    public function report()
    {
        $query = DB::table('staff')->select()->get();
            // dd($query);
        return view('report.report',compact('query'));
    }
    // update
    public function update(Request $request)
    {
        $update = [

            'name'          =>   $Request->name,
            'gender'        =>   $Request->gender,
            'dob'           =>   $Request->dob,
            'phone'         =>   $Request->phone,
            'eid'           =>   $Request->eid,
            'nationality'   =>   $Request->nationality,
            'salary'        =>   $Request->salary,
        ];
        DB::table('staff')->where('id',$request->id)->update($update);
        return redirect()->back()->with('success','Has been update successfully!');
    }
     // delete
     public function delete($id)
     {
         DB::table('staff')->where('id',$id)->delete();
         return redirect()->back()->with('success','Has been update successfully!');
    }

    // search
    // public function search(Request $request)
    // {
    //     $fromDate = $request->input('fromDate');
    //     $toDate   = $request->input('toDate');
    //     $other    = $request->input('other');

    //     $query = DB::table('employees')->select()
    //         ->where('date_of_birth', '>=', $fromDate)
    //         ->where('date_of_birth', '<=', $toDate)
    //         ->where('name', 'LIKE','%' .$other.'%')
    //         ->orWhere('sex', 'LIKE','%' .$other.'%')
    //         ->orWhere('email', 'LIKE','%' .$other.'%')
    //         ->orWhere('phone', 'LIKE','%' .$other.'%')
    //         ->orWhere('job_position', 'LIKE','%' .$other.'%')
    //         ->orWhere('salary', 'LIKE','%' .$other.'%')
    //         ->get();

    //     // dd($query);

    //     $role = DB::table('users')
    //         ->select('users.role_id_user','role_name.role_id','role_name.promission')
    //         ->join('role_name','users.role_id_user','=','role_name.role_id')
    //         ->get();
    //     return view('report.report',compact('query','role'));
    // }
}
