<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Property;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::orderBy('id', 'ASC')->where('role', User::ADMIN_ROLE)->orWhere('role', User::AGENT_ROLE);

        $action = $request->input('action');
        $page = $request->input('page');


 
        if ($page && $page === 'client') {

            $filter = $request->input('filter');

            $users = User::orderBy('id', 'ASC');

            if ($filter === 'client') {
                $users = $users->where('role', User::CLIENT_ROLE);
            } else if ($filter === 'special') {
                $users = $users->where('role', User::SPECIAL_CLIENT_ROLE);
            } else {
                $users = $users->where('role', User::CLIENT_ROLE)->orWhere('role', User::SPECIAL_CLIENT_ROLE);
            }

            if ($action && $action === 'print') {

                return view('admin.users.users-print', [
                    'users' => $users->get()
                ]);
            }

            return view('admin.clients', [
                'users' => $users->paginate(10)
            ]);
        }

        if ($action && $action === 'print') {

            return view('admin.users.users-print', [
                'users' => $users->get()
            ]);
        }
        return view('admin.users.index', [
            'users' => $users->paginate(10)
        ]);
    }


    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }

    public function create()
    {
        return view('admin.users.add');
    }

    public function edit(User $user)
    {
        // $quarters = User::orderBy('name', 'ASC')->get();

        return view('admin.users.edit', [
            // 'quarters' => $quarters,
            'user' => $user,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'photo' => 'sometimes|image'
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'role' => $request->input('role'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if ($request->hasFile('photo')) {
            if (!is_null($user->photo)) {
                $fullPath = 'public' . DIRECTORY_SEPARATOR . $property->image;

                Storage::delete($fullPath);
            }
            $path = $request->file('photo')->store('users', 'public');

            $user->photo = $path;
        }

        $user->save();

        flash('Successfully saved');

        return redirect()->back();
    }

    public function update(User $user, Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'photo' => 'sometimes|image'
        ]);

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        if ($request->hasFile('photo')) {
            if (!is_null($user->photo)) {
                $fullPath = 'public' . DIRECTORY_SEPARATOR . $property->image;

                // Storage::delete($fullPath);
            }
            $path = $request->file('photo')->store('users', 'public');

            $user->photo = $path;
        }

        $user->save();

        flash('Successfully updated');

        return redirect(route('users.index'));
    }
}
