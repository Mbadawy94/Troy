<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    
    public function create()
    {
        return view('admin.users.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|string',
            'phone' => 'required|numeric',
            'country' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        $email_data = array(
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
        );

        $pdf = PDF::loadView('BC', $email_data);

        Mail::send('WelcomeMail', $email_data, function ($message) use ($email_data, $pdf) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome')
                ->from('info@troy.com', 'Troy')
                ->attachData($pdf->output(), 'BusinessCard.pdf');
        });

        return redirect()->back();
    }

    
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }
    
    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'nullable|string',
            'phone' => 'required|numeric',
            'country' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
        ]);
        

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'country' => $request->country,
            'city' => $request->city,
            'address' => $request->address,
        ]);

        if ($request->password) {
            $user->password = $request->password;
        }
        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users.index')->with('success','User deleted success');
    }
}
