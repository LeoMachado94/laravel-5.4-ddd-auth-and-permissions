<?php
namespace App\Applications\Admin\Http\Controllers;

use App\Domains\Usuario\Usuario;
use Illuminate\Http\Request;

class AdminController extends BaseController {


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role', ['admin']);
    }

    public function index(){
        $user = Usuario::find(1);
//        $user->assign('super-admin');
//        $user->allow('create-post');
//        $user->allow('update-post');
    }

    public function add(){

    }

    public function create(Request $request){

    }

    public function show($id){}

    public function edit(Request $request, $id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy(Request $request, $id){

    }
}