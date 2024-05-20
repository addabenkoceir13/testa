<?php

namespace App\Http\Controllers\dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $users = User::whereRoles('user')->get();
        return view('dashboard.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name'  => 'required|max:255',
            'email' => 'required',
            'status' => 'required|in:1,0',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status == 1 ? 'active' : 'inactive';
        if ($user->save())
        {
            toastr()->success('The user has been update in successfully.');
            return redirect()->route('dashboard');
        }
        else {
            toastr()->error('The user has not been update in successfully.');
            return redirect()->back();
        }

    }
    public function destroy(Request $request){
        $user = User::find($request->id);

        if ($user->delete()) {
            toastr()->success('User deleted successfully.');
            return redirect()->back();
        }
    }
}
