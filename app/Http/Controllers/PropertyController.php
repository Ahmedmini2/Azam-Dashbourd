<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PropertyController extends Controller
{

        public function report()
        {

        $query = DB::table('properties')->select()->get();
        return view('propertyData',compact('query'));

        }


        public function save(Request $Request)
        {
            $data = [

                'name'          =>   $Request->name,
                'taxnumber'          =>   $Request->tax,
                'refnumber'          =>   $Request->ref,
                'phone'          =>   $Request->phone,
                'address'          =>   $Request->address,
                'email'          =>   $Request->email,

            ];

            DB::table('properties')->insert($data);
            return redirect()->back()->with('success','Has been update successfully!');
            // return dd($data);
        }

    }

