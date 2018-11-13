<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TestController extends Controller{
	public function show(){
		$data =array('name'=>'jack');
		return view('admin.test',$data);
	}
	public function create(){
		return view('post.create');
	}
	public function store(Request $request){
		$input=$request->all();
        //var_dump($input['username']);exit;
        $username = $input['username'];
        $age = $input['age'];
        $sex = $input['sex'];
        $register_time = time();
        DB::insert('insert into user (username,age,sex,register_time) values (?,?,?,?)',[$username,$age,$sex,$register_time]);
        
	}
}