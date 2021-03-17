<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;

class ReviewController extends Controller
{
    public function store(Request $request){
    	
    		$rules = [
                'name' => 'required',
                'email' => 'required',
                'rating3' => 'required',
                'feedback' => 'required'
            ];
            $validator = Validator::make($request->all(),$rules);

            if($validator->fails()){
                return response()->json(['success' => false, 'status' => 200, 'message' => $validator->errors()->first()]);
            }

            $input = [
            	'name' => $request->name,
            	'email' => $request->email,
            	'star' => $request->rating3,
            	'feedback' => $request->feedback,
            	'created_at' => Date('Y-m-d H:i:s'),
            	'updated_at' => Date('Y-m-d H:i:s')
            ];
            $user = DB::table('rating')->insert($input);
            if($user){
            	return redirect()->back()->with('Success' ,'Your Review Submited Successfully'); 
            }else{
            	return redirect()->back()->with('Error' ,'Faild To Submit Your Review');
            }

    }
}
