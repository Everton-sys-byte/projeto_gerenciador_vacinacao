<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class RecuperarSenhaController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate(
            ['email' => 'required|email']
        );

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
                            ? back()->with('status', __($status))
                            : back()->withInput($request->only('email'))
                                    ->withErrors(['email' => __($status)]);
    }          
    
    public function renderFormPasswordReset($token,$email){
        return view('authentication/senha/resetar_senha', [
            'token' => $token,
            'email' => $email
        ]);
    } 

    public function resetPassword(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $status = Password::reset(
            $request->only('email','password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET 
                    ? redirect()->route('logar')
                    : back()->withErrors('errors', 'Não foi possível realizar sua ação');
    }
}
