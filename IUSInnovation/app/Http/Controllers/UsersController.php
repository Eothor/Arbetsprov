<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view ('view_log', compact('users'));

    }
    public function create(){
      return view('add_new');
    }
    public function store(Request $request){
      User::create($request->all());
      return redirect('view_log');
      return $request->all();
    }
    public function edit($id){
      $users = User::findorFail($id);
      return view('edit_page', compact('users'));
    }
    public function update(Request $request, $id){
      $users = User::findorFail($id);
      $users->update($request->all());
    }
    public function delete($id){
      $users = User::where('id',$id);
      $users->delete();
      return redirect('view_log');
    }

}
