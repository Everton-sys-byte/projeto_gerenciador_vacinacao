<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class RecuperarSenhaController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate(
            ['email' => 'required|email']
        );

        $status = Password::sendResetLink($request->only('email'));

        if($status === Password::RESET_LINK_SENT){
            Log::channel('password_reset')->info('Foi enviado um email para '. request('email') . ' em tentativa de recuperar sua senha');
            return back()->with('message', 'Email enviado para recuperação de senha');
        }
        else {
            Log::channel('password_reset')->warning('Não foi possível enviar o email para '. request('email') . ' em tentativa de recuperar sua senha, status: '. __($status));
            return back()->withErrors(['email' => __($status)]);
        }
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

        if($status === Password::PASSWORD_RESET){
            Log::channel('password_reset')->info('O usuário de email: '.request('email').' teve êxito ao resetar a senha');
            return redirect()->route('logar');
        }else {
            Log::channel('password_reset')->warning('O usuário de email: '.request('email').' não obteve êxito em resetar a senha, status: '.__($status));
            return back()->withErrors('status', __($status));
        }
    }
}
