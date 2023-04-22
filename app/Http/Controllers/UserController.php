<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
  public function index()
  {
    $user = User::findOrFail(Auth::user()->id);
    $profile = Profile::findOrFail(Auth::user()->id);
    return view('users.index', [
      'user'    => $user,
      'profile' => $profile,
    ]);
  }
  public function create()
  {
    return view('register');
  }
  public function store(Request $request)
  {
  }

  public function show(User $user)
  {
    return view('users.show', [
      'user' => $user
    ]);
  }
  public function edit(User $user)
  {
    return view('users.edit', [
      'user' =>  $user,
      'profile' => Profile::find($user->id)
    ]);
  }
  public function update(Request $request)
  {
    $profile = Profile::where('id', auth()->user()->id)->first();
    $user = User::where('id', auth()->user()->id)->first();

    $avatar = $request->file('avatar');
    $validatedData = $request->validate([
      'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    if ($request->file('avatar')) {
      $avatar_file_name = Str::random(40) . '.' . $avatar->getClientOriginalExtension();
      Storage::delete('public/' . $profile->avatar);
      $avatar->storePubliclyAs('avatars', $avatar_file_name, 'public');
      $profile->avatar = 'avatars/' . $avatar_file_name;
    }
    $profile->skills = $request->skills;
    $profile->header = $request->header;
    $profile->save();

    $user->name = $request->name;
    $user->username = $request->username;
    $user->save();
    return redirect('/user');
  }
  public function destroy(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
  }
}
