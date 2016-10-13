<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

      /**
     * Redirect the user to the social provider authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
 
    /**
     * Obtain the user information from social provider.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try 
        {
            $user = Socialite::driver($provider)->user();
        } 
        catch (Exception $e) 
        {
            return Redirect::to('/auth/login');
        }
 
        $authUser = $this->findOrCreateUser($user, $provider);
 
        auth()->login($authUser, true);
 
        return redirect()->to('/property/my-properties');
    }
 
    /**
     * Return user if exists; create and return if doesn't
     *
     * @param $socialLiteUser
     * @param $key
     * @return User
     */
    private function findOrCreateUser($socialLiteUser, $key)
    {
        // echo $socialLiteUser->name;
        // echo $socialLiteUser->id;
        // echo $socialLiteUser->email;
        $userEmail="";
        if ($socialLiteUser->email=="") 
        {
          $userEmail=$socialLiteUser->name.'@gmail.com';
        }
        else
        {
            $userEmail= $socialLiteUser->email;
        }
         $user = User::updateOrCreate([
            'email' => $userEmail,
        ], [
            $key . '_id' => $socialLiteUser->id,
            'firstname' => $socialLiteUser->name
        ]);
 
 
        return $user;
    }
}
