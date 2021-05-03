<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;
use Validator;
use Auth;

class MainController extends Controller
{
    function  index(){
    	return view('login');
	}

	function checklogin(Request $request){
		$this->validate($request, [
			'email'	=> 'required|email',
			'password'	=>	'required|alphaNum|min:3'
		]);

		$user_data = array(
			'email'	=>	$request->get('email'),
			'password'	=>	$request->get('password')
		);


		if(Auth:: attempt($user_data))
		{
			return redirect('/main');
		}else{			
			return back()->with('error', 'Wrong Login Details');
		}
	}
	function logout(){
		Auth::logout();
		return redirect('admin');
	}

	function successlogin(){	
		 	$applications = Applications::all();    		
    		return view('Dashboard', ['applications' => $applications]);
    }

    function update($id){
    	$applications = Applications::find($id);
    	return view('update', ['applications' => $applications]);
    }

    function edit(Request $request, $id){
    	 $this->validate($request,[
    		'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'gender' => 'required',
    	]);
    	$data = array(
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'address'=> $request->input('address'),
            'contact'=> $request->input('contact'),
            'gender'=> $request->input('gender'),
            'education'=> $request->input('education'),
            'board'=> $request->input('board'),
            'year'=> $request->input('year'),
            'result'=> $request->input('result'),
            'we_company'=> $request->input('we_company'),
            'we_designation'=> $request->input('we_designation'),
            'we_date_from'=> $request->input('we_date_from'),
            'we_date_to'=> $request->input('we_date_to'),
            'known_lang'=> "",
            'rws'=> "",
            'technical_expirience'=> "",
            'bme'=> "",
            'preference_location'=> $request->input('preference_location'),
            'expected_ctc'=> $request->input('expected_ctc'),
            'current_ctc'=> $request->input('current_ctc'),
            'notice_period'=> $request->input('notice_period'),
            'status'=> 0,
        );
    	Applications::where('id', $id)->update($data);
    	return redirect('/main')->with('info','Job Application Updated Successfully!');
    	
    }

    function read($id){
		$applications = Applications::find($id);
    	return view('read', ['applications' => $applications]);
    }

    function delete($id){    	
    	Applications::where('id', $id)->delete();
    	return redirect('/main')->with('info','Job Application Deleted Successfully!');    	
    }


	


}
