<?php

namespace App\Http\Controllers;
use App\Models\Emp_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Employee extends Controller
{
    public function index(){
        $data['result']=DB::table('Emp_details')->get();
        // echo "<pre>";
        // print_r($result['data']);
        // die();
        return view('Homepage',$data);
    }

    public function manage(Request $request, $id){
            $data['result']=Emp_details::where(['id'=>$id])->get(); 
            // echo "<pre>";
            // print_r($data['result']['0']);
            // die(); 
        return view('edit',$data);
    }

    public function submit(Request $request){
        $request->validate([
			'email'=>'required|unique:emp_details',
			'image'=>'required|mimes:jpeg,jpg,png',
		]);

        if($request->hasfile('image')){
            $image=$request->file('image');
            $ext=$image->extension();
            $file=time().'.'.$ext;
            $image->storeAs('/public/post/',$file);
            }

            $data=array(
                'name'=>$request->input('name'),
                'dob'=>$request->input('dob'),
                'gender'=>$request->input('gender'),
                'image'=>$file,
                'email'=>$request->input('email'),
                'mobile'=>$request->input('mobile'),
                'skills'=>$request->input('skills'),
                'address'=>$request->input('address'),
                'status'=>1,
                'created_at'=>date('Y-m-d h:i:s')
            );

        DB::table('emp_details')->insert($data);
		$request->session()->flash('msg','Entry Saved');
		return redirect('/');

    }

    public function update(Request $request, $id){
        $request->validate([
			'image'=>'mimes:jpeg,jpg,png',
		]);

       

        $data=array(
            'name'=>$request->input('name'),
            'dob'=>$request->input('dob'),
            'gender'=>$request->input('gender'),
            'email'=>$request->input('email'),
            'mobile'=>$request->input('mobile'),
            'skills'=>$request->input('skills'),
            'address'=>$request->input('address'),
            'status'=>1,
            'created_at'=>date('Y-m-d h:i:s')
        );
        if($request->hasfile('image')){
			// $image=$request->file('image');
			$image=$request->file('image');
			$ext=$image->extension();
			$file=time().'.'.$ext;
			
			$image->storeAs('/public/post',$file);
			
			$data['image']=$file;
		}

        

        DB::table('emp_details')->where('id',$id)->update($data);
		$request->session()->flash('msg','Entry Updated');
		return redirect('/');
    }

    public function delete(Request $request, $id){
        DB::table('emp_details')->where('id',$id)->delete();
		$request->session()->flash('msg','Entry Deleted');
		return redirect('/');
    }
}
