<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\User;

class UsersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index() {
    $users = User::orderBy('created_at', 'desc')->paginate(10);
    return view('back.users.index')->with('users', $users);
  }

  public function show($id) {
    $user = User::find($id);
    return view('back.users.show')->with('user', $user);
  }

  public function edit($id) {
    $user = User::find($id);
    return view('back.users.edit')->with('user', $user);
  }

  public function update(Request $request, $id) {
    $user = User::find($id);
    $user->fill($request->all());
    if($request->hasFile('profile_image')) {
      $fileWithExt = $request->file('profile_image')->getClientOriginalName();
      $fileName = pathinfo($fileWithExt, PATHINFO_FILENAME);
      $ext = $request->file('profile_image')->getClientOriginalExtension();
      $fileNameToStore = $fileName.'_'.time().'_'.$ext;
      $path = $request->file('profile_image')->storeAs('public/profile_images', $fileNameToStore);
      $user->profile_image = $fileNameToStore;
    } else {
      $user->profile_image = 'noimage.png';
    }
    $user->save();
    return redirect('/admin/users');
  }

  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect("/admin/users");
  }

}
