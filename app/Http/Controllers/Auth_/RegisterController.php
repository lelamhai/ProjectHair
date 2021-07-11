<?php

namespace App\Http\Controllers\Auth_;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
	use RegistersUsers;

	public function getRegistrationForm()
    {
        return view('_auth.register');
    }

    public function register(Request $request)
    {
        //$this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all(), $request)));

        //$this->guard()->login($user);

        return $this->registered($request, $user)
                        ?: redirect('/');//$this->redirectPath()
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'phone' => ['required', 'string', 'min:10','max:11', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data, Request $request)
    {
        $newImageName = "";
        if($request->avatar != "")
        {
            $newImageName = time() .'-'.$data['name'].'.'.$data['avatar']->extension();
            $data['avatar']->move(public_path('avatars'), $newImageName);
        }
        
        $arrUser = $services = DB::table('user')->get();
        foreach ($arrUser as $item) {
            if ($data['email'] == $item->email || $data['phone'] == $item->phone){
                return;
            }
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'token' => '',
            'avata' => $newImageName,
            'human_rights' => 2,
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
    	
        //
    }
    //
}
