<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Customer;
use Session;
use Mail;

class CustomerController extends Controller
{
    public function Register()
    {
        return view('front.customer.register');
    }
    public function NewCustomer(Request $request)
    {
        $this->validate($request,[
            'fname' => 'required|max:30|min:2',
            'lname' => 'required|max:30|min:2',
            'phone' => 'required|size:11',
            'email' => 'required|email|unique:customers',
            'password' => ['required', 'string', 'min:5', 'confirmed']
        ]);

        $cust = new Customer();
        $cust->fname = $request->fname;
        $cust->lname = $request->lname;
        $cust->phone = $request->phone;
        $cust->email = $request->email;
        $cust->verification_code = sha1(time());
        $cust->password = Hash::make($request->password);
        $cust->save();

        $cust_id = $cust->id;
        Session::put('cust_id',$cust_id);
        Session::put('cust_name',$cust->fname.' '.$cust->lname);

        $email = $cust['email'];
        $messageData = ['email'=>$cust['email'],'fname'=>$cust['fname'],'lname'=>$cust['lname'],'verification_code'=>$cust['verification_code']];
        Mail::send('front.customer.mail', $messageData, function($message) use ($email){
          $message->to($email);
          $message->subject('Mail confirmation');

        });

        return redirect()->back()->with(session()->flash('alert-success', 'Please check email for verification link.'));
    }
    public function Verify($code)
    {
        $cust = Customer::where('verification_code',$code)->first();
        if($cust != null)
        {
            $cust->is_verified = 1;
            $cust->save();
            Session::flash('success','Your account is verified');
            return redirect('customer_login')->with(session()->flash('alert-success','Your account is verified. Now you can login'));

        }
        return redirect('customer_register')->with(session()->flash('alert-danger','Invalid verification code!'));
    }

    public function Login()
    {
        return view('front.customer.login');
    }
    public function LoginCustomer(Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $pass = $request->input('password');

        $customer = Customer::where('email',$request->email)->first();
        if($customer && password_verify($pass,$customer->password))
        {
            if($customer->is_verified == 1)
            {
                Session::put('custId',$customer->id);
                Session::put('custName',$customer->fname);
                Session::put('custEmail',$customer->email);
                Session::put('custPhone',$customer->phone);
                return redirect('/');
            }
            else
            {
                return redirect('customer_login')->with(session()->flash('alert-warning','Please verify your email!!!'));
            }
            
        }
        else
        {
            return redirect('customer_login')->with(session()->flash('alert-warning','Invelid credentials'));
        }
    }
    public function LogoutCustomer()
    {
        Session::forget('custId');
        Session::forget('custName');

        return redirect('/');
    }
}
