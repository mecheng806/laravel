<?php
namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
class TestController extends Controller{
	public function show(){
		$data =array('name'=>'jack');
		return view('admin.test',$data);
	}
	public function create(){

	}
	public function store(){

	}
}