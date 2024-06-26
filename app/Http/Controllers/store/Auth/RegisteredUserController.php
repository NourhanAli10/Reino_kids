<?php

namespace App\Http\Controllers\store\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\store\auth\RegisterRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */

    public function create() :view
    {
        return view('store.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */

    public function store(RegisterRequest $request) : RedirectResponse
    {
        $data = $request->validated();

        $data['password'] = Hash::make($request->password);

        $user = User::create($data);

        event (new Registered( $user ));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);

    }


}
