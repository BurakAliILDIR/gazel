<?php

    namespace App\Http\Controllers\Auth;

    use App\Http\Controllers\Controller;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Foundation\Auth\VerifiesEmails;
    use Illuminate\Http\Request;

    class VerificationController extends Controller
    {
        use VerifiesEmails;

        protected $redirectTo = RouteServiceProvider::HOME;

        public function __construct()
        {
            $this->middleware('auth');
            $this->middleware('signed')->only('verify');
            $this->middleware('throttle:6,1')->only('verify', 'resend');
        }

        public function show(Request $request)
        {
            return $request->user()->hasVerifiedEmail()
                ? redirect($this->redirectPath())
                : view('panel.auth.verify');
        }
    }
