<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class ContactController extends Controller
{
    public function store(Request $request){
    	if($request->ajax()){
    		$rules = [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required'
            ];
            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                return response()->json(['success' => false, 'status' => 200, 'message' => $validator->errors()->first()]);
            }

            $input = [
            	'name' => $request->name,
            	'email' => $request->email,
            	'subject' => $request->subject,
            	'message' => $request->message,
            	'created_at' => Date('Y-m-d H:i:s'),
            	'updated_at' => Date('Y-m-d H:i:s')
            ];
            $user = DB::table('users')->insert($input);
            if($user){
            	return 'OK';
            }else{
            	return false;
            }
    	}
    }
}