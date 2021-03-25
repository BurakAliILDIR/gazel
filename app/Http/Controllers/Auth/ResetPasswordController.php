<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Foundation\Auth\ResetsPasswords;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;

    class ResetPasswordController extends Controller
    {

        use ResetsPasswords;

        protected $redirectTo = RouteServiceProvider::HOME;

        protected function guard()
        {
            return Auth::guard('admin');
        }

        public function showResetForm(Request $request)
        {
            $token = $request->route()->parameter('token');

            return view('panel.auth.passwords.reset')->with(
                ['token' => $token, 'email' => $request->email]
            );
        }
    }
