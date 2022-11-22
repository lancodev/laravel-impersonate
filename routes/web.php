<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

Route::get('/impersonate/{userId}/{token}', function ($userId, $token) {
    try {
        $decryptedToken = Crypt::decrypt($token);
        if ($decryptedToken === 'impersonate') {
            session()->put('impersonating', true);
            session()->put('original_user_id', auth()->id());
            session()->put('previous_route', URL::previous());
            Auth::loginUsingId($userId);

            return redirect()->route('home');
        }
    } catch (Exception $e) {
        logger($e);

        return abort(404);
    }
})->name('impersonate');

Route::get('/leave-impersonation', function () {
    try {
        if (session()->get('impersonating') === true) {
            $originalUserId = session()->get('original_user_id');
            $previousRoute = session()->get('previous_route');
            session()->remove('impersonating');
            session()->remove('original_user_id');
            session()->remove('previous_route');
            Auth::loginUsingId($originalUserId);

            return redirect($previousRoute);
        }
    } catch (Exception $e) {
        logger($e);

        return abort(404);
    }
})->name('leave-impersonation');
