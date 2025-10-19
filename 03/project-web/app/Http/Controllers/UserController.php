<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // GET /users
    public function index()
    {
        // اگر می‌خوای pagination: User::orderBy('id','desc')->paginate(10)
        $users = User::orderBy('id', 'desc')->get();
        return view('users.index', compact('users'));
    }

    // GET /users/create
    public function create()
    {
        return view('users.create');
    }

    // POST /users
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        User::create($validated);

        return redirect()->route('users.index')->with('success', 'کاربر جدید با موفقیت اضافه شد.');
    }

    // GET /users/{user}
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // GET /users/{user}/edit
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // PUT/PATCH /users/{user}
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name' => 'required|string',
            'email' => "required|email|unique:users,email,{$id}",
            'password' => 'nullable|min:4',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ویرایش شد!');
    }


    // DELETE /users/{user}
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'کاربر حذف شد.');
    }
}
