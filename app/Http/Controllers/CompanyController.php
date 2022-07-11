<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Company;

use App\Jobs\SendEmailJob;
class CompanyController extends Controller
{
     
     public function index(){

     	$company = Company::all();

     	return view('company.index',compact('company'));
     }

     public function create(){ 

     	return view('company.create');
     }

     public function store(Request $request){ 

     	$this->validate($request,[

     		'cname'=>'required',
     		'owner'=>'required',
     		'address'=>'required',
     		'phone1'=>'required',
     		'phone2'=>'required',
     		'pin'=>'required',
     		'tin'=>'required',

     	]);

     	Company::create([

     		'cname'=> request('cname'),
    		'owner'=> request('owner'),
    		'address'=> request('address'),
    		'phone1'=> request('phone1'),
    		'phone2'=> request('phone2'),
    		'website'=> request('website'),
    		'pin'=> request('pin'),
    		'tin'=> request('tin') 

     	]);

     	return redirect()->back()->with('message','Company Created Successfully !');

     	 
     }

      public function edit($id,Company $company){
 
      $company = Company::findOrFail($id);  
      return view('company.edit',compact('company'));

     }

      public function update(){
 
       
      Company::where('id',request('cid'))->update([

      		'cname'=> request('cname'),
    		'owner'=> request('owner'),
    		'address'=> request('address'),
    		'phone1'=> request('phone1'),
    		'phone2'=> request('phone2'),
    		'website'=> request('website'),
    		'pin'=> request('pin'),
    		'tin'=> request('tin') 


      ]);

       return redirect()->back()->with('message','Company Update Successfully');
      
     }

      public function show($id)
    {
    	$company = Company::find($id);

	    return response()->json([
	      'data' => $company
	    ]);
    }

    public function sendTestEmails()
    {
         

        $details['to'] = 'vikas.saxena16@gmail.com';
        $details['name'] = 'vikas saxena';
        $details['subject'] = 'Hello Laravel Email';
        $details['message'] = 'Here goes all message body.';

        SendEmailJob::dispatch($details);


        return response('Email sent successfully');
    }
}
