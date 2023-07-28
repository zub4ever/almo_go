<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Str;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View

    {
        $roles = Role::pluck('name','name')->all();
        return view('auth.register',compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'avatar' => ['required', 'image' ,'mimes:jpg,jpeg,png','max:4096'],
        ]);


        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');


            $originalAvatarPath = public_path('/images/');
            $avatarName = time() . '.' . $avatar->getClientOriginalExtension();
            $avatar->move($originalAvatarPath, $avatarName);

            // Pasta adicional para criar a cópia do avatar
            $additionalAvatarPath = public_path('/imagem_adicional/');
            $copiedAvatarName = time() . '.' . $avatar->getClientOriginalExtension();
            copy($originalAvatarPath . $avatarName, $additionalAvatarPath . $copiedAvatarName);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'avatar' => "/images/" . $avatarName,
        ]);

        // Atribuir a role "Client" ao usuário
        $clientRole = Role::where('name', 'Client')->first();
        $user->assignRole($clientRole);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
