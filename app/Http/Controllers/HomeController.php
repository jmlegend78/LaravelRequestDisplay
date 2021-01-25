<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*
class HomeController extends Controller
{
    public function login(){
    	return view ('login');
    }
    public function home(){
    	return view ('home');
    }
    public function updateaccount(){
    	return view ('updateaccount');
    }
    public function booklist(){
    	return view ('booklist');
    }
    public function edititem(){
    	return view ('edititem');
    }
    public function addbook(){
    	return view ('addbook');
    }
}
*/
class HomeController extends Controller
{
    public function regform(){
        return view ('regform');
    }


    public function displayData(Request $request){

        $name = $request->input('name');
        $father_name = $request->input('father_name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $state = $request->input('state');
        $city = $request->input('city');
        $birth_date = $request->input('birth_date');
        $pincode = $request->input('pincode');
        $course = $request->input('course');
        $email = $request->input('email');

        return view ('outputform',['name' => $name , 'father_name' => $father_name , 'address' => $address , 'gender' => $gender , 'state' => $state , 'city' => $city , 'birth_date' => $birth_date , 'pincode' => $pincode , 'course' => $course , 'email' => $email]);
    }
}