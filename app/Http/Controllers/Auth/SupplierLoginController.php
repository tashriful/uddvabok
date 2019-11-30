<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class SupplierLoginController extends Controller
{
    
    public function __construct(){
        
        $this->middleware('guest:supplier');    
    }
    
    public function showLoginForm()
    {
        
        return view('auth.supplier-login');
    }
    
    public function login(Request $request)
    {
    // Validate the form data
    $this->validate($request, [
    'email' => 'required|email',
    'password' => 'required|min:3'
    ]);

    // Attempt to log the user in
    if (Auth::guard('supplier')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
    // if successful, then redirect to their intended location
    return redirect()->intended(route('supplier.dashboard')); }

    // if unsuccessful, then redirect back to the login with the form data
    return redirect()->back()->withInput($request->only('email', 'remember'));
    }
    
    
}