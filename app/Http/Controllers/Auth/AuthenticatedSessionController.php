<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {

        // Rate Limiting using email and IP
        $key = Str::transliterate(
            Str::lower($request->input('email')) . '|' . $request->ip()
        );

        if (RateLimiter::tooManyAttempts($key, 5)) {
            $seconds =  RateLimiter::availableIn($key);

            return back()->withErrors([
                'email' => "Too many login attempts. Try again in {$seconds} seconds."
            ])->onlyInput('email');
        }

        //Attempting Login
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Check user is_active status

        $user = User::where('email', $credentials['email'])->first();

        if ($user && ! $user->is_active) {
            return back()->withErrors([
                'email' => 'Your account has been deactivated.'
            ])->onlyInput('email');
        }

        $credentials['is_active'] = true;

        if (Auth::attempt(
            $credentials,
            $request->boolean(('remember'))
        )) {

            RateLimiter::clear($key);

            $request->session()->regenerate();

            // Redirect based on role
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->intended(route('admin.dashboard'));
            }

            if ($role === 'agent') {
                return redirect()->intended(route('agent.dashboard'));
            }

            return redirect()->intended(route('customer.dashboard'));
        }

        RateLimiter::hit($key, 60);

        $remaining = RateLimiter::remaining($key, 5);

        return back()->withErrors([
            'email' => "The provided credentials do not match our records. Remaining attempts: {$remaining}",
        ])->onlyInput('email');
    }

    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
