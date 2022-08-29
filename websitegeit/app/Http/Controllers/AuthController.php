<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbcustomer;
use App\Models\Tbproduct;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('log-sign.login');
    }

    public function registration()
    {
        return "registration";
    }

    public function registerUser(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:16',
            'fullname' => 'required|min:8|max:32',
            'phone' => 'required|min:9|max:11',
        ]);
        $customer = new Tbcustomer();
        $customer->customerAccount = $request->username;
        $customer->customerPassword = Hash::make($request->password);
        $customer->customerName = $request->fullname;
        $customer->customerPhone = $request->phone;
        $rel = $customer->save();
        if($rel){
            return back()->with('success','You have registered new account');
        }else{
            return back()->with('error','Registration failed');
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:16',
        ]);

        $customer = Tbcustomer::where('customerAccount', '=', $request->username)->first();
        if($customer){
            if(Hash::check($request->password, $customer->customerPassword)){
                $request->session()->put('loginId', $customer->customerID);
                return redirect('dashboard');
            }else{
                return back()->with('fail','This passwords do not match');
            }
        }else{
            return back()->with('fail','This account does not exist');
        }
    }

    public function dashboard()
    {
        $data = array();
        $data1 = Tbproduct::get();
        if(Session::has('loginId')){
            $data = Tbcustomer::where('customerID', '=', Session::get('loginId'))->first();
        }
        return view('Frontend.index', compact('data', 'data1'));
    }

    public function logOut(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');   
        }
    }
}