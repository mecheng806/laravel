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
	public function list(){
		//$list = DB::select('select * from user order by id asc');
		$list = DB::table('user')->get();
		//echo '<pre>';
		//var_dump($list);
		return view('admin.test2',['lists'=>$list]);
		
	}
	public function edit(Request $request){
		$input = $request->all();
		//var_dump($input);
		$username = $input['username'];
		$age = $input['age'];
		$id = $input['id'];
		$result = DB::table('user')
		->where('id',$id)
		->update(['username'=>$username,'age'=>$age]);
		if($result){
			return response()->json([
					'status'=>1,
					'msg'=>'修改数据成功',
					'data'=>$input
				]);
		}
	}
}