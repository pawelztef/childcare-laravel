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
  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect("/admin/users");
  }

}
