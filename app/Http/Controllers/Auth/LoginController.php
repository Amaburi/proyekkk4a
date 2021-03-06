<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected function authenticated() {
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/indexx';
    protected function redirectTo(){
        if(Auth()->user()->role == 1){
            return route('admin.indexx');
        }elseif(Auth()->user() == 2 ){
            return route('user.home');
        }
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $input = $request->all();
        $this->validate($request,['email'=>'required|email',
        'password'=>'required'
     ]);
     if(auth()->attempt(array('email'=>$input['email'],'password'=>$input['password']))){
         if(auth()->user()->role == 1){
             return redirect()->route('admin.indexx');
         }elseif(auth()->user()->role == 2){
             return redirect()->route('user.home');
         }
     }else{
         return redirect()->route('login')->with('error','Email And password are wrong');
     }
    
    }
}
 