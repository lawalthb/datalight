<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('users.index', compact('users')); // Assuming a Blade file at resources/views/users/index.blade.php
  }

  public function create()
  {
    return view('users.create'); // Blade form to create a new user
  }

  public function store(UserRequest $request)
  {
    User::create($request->validated());
    return redirect()->route('users.index')->with('success', 'User created successfully.');
  }

  public function show(User $user)
  {
    return view('users.show', compact('user')); // Show single user details
  }

  public function edit(User $user)
  {
    return view('users.edit', compact('user')); // Blade form to edit a user
  }

  public function update(UserRequest $request, User $user)
  {
    $user->update($request->validated());
    return redirect()->route('users.index')->with('success', 'User updated successfully.');
  }

  public function destroy(User $user)
  {
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
  }
}
