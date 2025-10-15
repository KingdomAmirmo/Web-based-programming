<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $filePath;
    public function __construct()
    {
        $this->filePath = public_path('users.json');
    }


    public function index()
    {
        $users = $this->readUsers();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users = $this->readUsers();

        $newUser = [
            'id' => time(),
            'name' => $request->name,
            'email' => $request->email,
        ];

        $users[] = $newUser;

        $this->writeUsers($users);

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت اضافه شد!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = $this->readUsers();
        $user = collect($users)->firstWhere('id', $id);

        if (!$user) {
            abort(404);
        }

        return view('users.edit', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = $this->readUsers();
        $user = collect($users)->firstWhere('id', $id);

        if (!$user) {
            abort(404);
        }

        return view('users.edit', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $users = $this->readUsers();

        foreach ($users as &$user) {
            if ($user['id'] == $id) {
                $user['name'] = $request->name;
                $user['email'] = $request->email;
                break;
            }
        }

        $this->writeUsers($users);

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ویرایش شد!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = $this->readUsers();
        $users = array_filter($users, fn($user) => $user['id'] != $id);
        $this->writeUsers(array_values($users));

        return redirect()->route('users.index')->with('success', 'کاربر حذف شد!');
    }

    // read json data from file
    private function readUsers()
    {
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([]));
        }

        return json_decode(file_get_contents($this->filePath), true);
    }
    // write in json file
    private function writeUsers($users)
    {
        file_put_contents($this->filePath, json_encode($users, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }

}
