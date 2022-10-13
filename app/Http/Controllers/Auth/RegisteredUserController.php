<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Districts;
use App\Models\States;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $states = States::select(['id','name'])->get();
        return view('auth.register',compact('states') );
    }

    public function getState(Request $request)
    {
        if(isset( $request->id ) ){
            $state = Districts::where('state_id', $request->id)->select(['id','name']) ->get();
            return response()->json($state,200);
        }
        return response()->json(['status' => false, 'message' => 'not found'], 404);
    }
    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'state' => ['required',],
            'district' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $password= $request->email.$request->password;
        $hash = hash('sha512',$request->email.$request->password);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'state_id' => $request->state,
            'district_id' => $request->district,
            'password' => $hash,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME)->with('password', $password);
    }
}
