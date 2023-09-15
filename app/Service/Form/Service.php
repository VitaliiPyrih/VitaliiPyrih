<?php

declare(strict_types=1);

namespace App\Service\Form;

use App\Mail\ContactForm;
use App\Models\UsersForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Service
{
    public function save($request)
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

            if($user) {
                UsersForm::updateOrCreate(
                    ['ip' => $data['ip']],
                    [
                        'email' => $data['email'],
                        'phone' => $data['phone'],
                    ]
                );
            } else {
                UsersForm::create($data);
            }

            Mail::to(env('ADMIN_EMAIL'))->send(new ContactForm($data));
            DB::commit();
            return to_route('home')->with(['success' => true]);
        } catch (\Exception $error) {
            DB::rollBack();
            return to_route('home')->withErrors(['sending_error' => "code {$error->getCode()}"]);
        }
    }
}
