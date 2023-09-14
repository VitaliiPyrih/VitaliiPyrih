<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendForm;
use App\Mail\ContactForm;
use App\Models\UsersForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendFormController extends Controller
{
    public function __invoke(SendForm $request)
    {
        try {
            DB::beginTransaction();
            $user = UsersForm::where('ip',$request->ip())->first();
            if($user && $user->block) {
                DB::rollBack();
                return redirect()->route('home')->withErrors(['blocked' => __('messages.blocked')]);
            }
            $data = $request->validated();
            unset($data['g-recaptcha-response']);
            $data['ip'] = $request->ip();

            UsersForm::updateOrCreate(
                ['ip' => $data['ip']],
                [
                    'email' => $data['email'],
                    'phone' => $data['phone'],
                ]
            );
            Mail::to(env('ADMIN_EMAIL'))->send(new ContactForm($data));
            DB::commit();
            return to_route('home')->with(['success' => true]);
        } catch (\Exception $error) {
            DB::rollBack();
            return to_route('home')->withErrors(['sending_error' => "code {$error->getCode()}"]);
        }
    }
}
