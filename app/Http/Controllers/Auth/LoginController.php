<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('getLogout');
        $this->middleware('guest:lender')->except('getLogout');
    }

    public function mainIndex(){

        return view('home', ['url' => 'home']);

    }
    public function adminIndex()
    {
        return view('admin', ['url' => 'admin']);
    }
    public function lenderIndex()
    {
      //  dd('here');
        return view('lender', ['url' => 'lender']);
    }


    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:5'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'remember'));
    }


    public function showLenerLoginForm()
    {
        return view('auth.login', ['url' => 'lender']);
    }

    public function lenderLogin(Request $request)
    {  

        if (Auth::guard('lender')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

        //    dd('here');
            return redirect()->intended('/lender');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function getLogout(){

        
          Auth::guard('admin')->logout();

          Auth::guard('lender')->logout();


          return redirect()->route('home');
      }
}
