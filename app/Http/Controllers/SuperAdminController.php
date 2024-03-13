<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{

    // public function dashboard()
    // {
    //     return view('SuperAdmin.dashboard');
    // }
    public function index()
    {
        return view('SuperAdmin.index');
    }

    public function dashboard()
    {
        return view('SuperAdmin.index');
    }

    public function superadminList()
    {
        $admins = User::where('is_delete',0)->get();
        return view('SuperAdmin.list',compact('admins'));
    }

    public function addAdmin()
    {
        return view('SuperAdmin.create');
    }
    public function storeAdmin(Request $request)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|digits:10',
            'email' => 'required|string|email|max:255|unique:users',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ];

        $messages = [
            'end_date.after' => 'End date must be a date after start date.',
        ];

        $validatedData = $request->validate($rules, $messages);
        $admin = new User;
        $admin->name = $request->name;
        $admin->phone_number = $request->phone_number;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->email);
        $admin->start_date = $request->start_date;
        $admin->end_date = $request->end_date;
        $admin->role = 2;
        $admin->is_lock = 0;
        $admin->is_delete = 0;
        $admin->save();

        return redirect()->route('superadmin.adminList')->with('success', 'Admin Created Successfully.');
    }

    public function editAdmin($id)
    {
        $admin = User::find($id);
        return view('SuperAdmin.edit', compact('admin'));
    }
    public function deleteAdmin($id)
    {
        $admin = User::find($id);
        $admin->is_delete = 1;
        $admin->update();
        return back()->with('delete_success', "Admin deleted successfully.");
    }
    public function lockAdmin($id)
    {
        $admin = User::find($id);
        $admin->is_lock = 1;
        $admin->update();
        return back()->with('lock_success', "Admin locked successfully.");
    }


}
