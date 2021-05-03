<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applications;

class CreatesController extends Controller
{
    function index(Request $request){
        
    	 $this->validate($request,[
    		'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'gender' => 'required',
            /*'education' => 'required',
            'board' => 'required',
            'year' => 'required',
            'result' => 'required',
            'company' => 'required',
            'designation' => 'required',
            'date_from' => 'required',
            'date_to' => 'required',*/
            /*'known_lang' => 'required',
            'rws' => 'required',
            'technical_expirience' => 'required',
            'bme' => 'required',*/

            // 'preference_location' => 'required',
            // 'expected_ctc' => 'required',
            // 'current_ctc' => 'required',
            // 'notice_period' => 'required',                        

            /*'status' => 'required',*/
    	]);
    	 
    	$applications = new Applications;
    	$applications->name = $request->input('name');
        $applications->email = $request->input('email');
        $applications->address = $request->input('address');
        $applications->contact = $request->input('contact');
        $applications->gender = $request->input('gender');
        $applications->education = $request->input('education');
        $applications->board = $request->input('board');
        $applications->year = $request->input('year');
        $applications->result = $request->input('result');
        $applications->we_company = $request->input('we_company');
        $applications->we_designation = $request->input('we_designation');
        $applications->we_date_from = $request->input('we_date_from');
        $applications->we_date_to = $request->input('we_date_to');
       /*$applications->education = $request->input('education');
        $applications->board = $request->input('board');
        $applications->year = $request->input('year');
        $applications->result = $request->input('result');
        $applications->we_company = $request->input('we_company');
        $applications->we_designation = $request->input('we_designation');
        $applications->we_date_from = $request->input('we_date_from');
        $applications->we_date_to = $request->input('we_date_to');
      /*  $applications->known_lang = $request->input('known_lang');
        $applications->rws = $request->input('rws');
        $applications->technical_expirience = $request->input('technical_expirience');
        $applications->bme = $request->input('bme');*/

        $applications->known_lang = "";
        $applications->rws = "";
        $applications->technical_expirience = "";
        $applications->bme = "";

        $applications->preference_location = $request->input('preference_location');
        $applications->expected_ctc = $request->input('expected_ctc');
        $applications->current_ctc = $request->input('current_ctc');
        $applications->notice_period = $request->input('notice_period');
        $applications->status = 0;
        /*$applications->status = $request->input('status');*/
    	$applications->save();
    	return redirect('/')->with('info','Job Application Saved Successfully!');    	
    }

}
