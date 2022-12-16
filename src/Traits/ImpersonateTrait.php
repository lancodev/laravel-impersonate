<?php

namespace Lancodev\LaravelImpersonate\Traits;

use Illuminate\Support\Facades\Crypt;

trait ImpersonateTrait
{
    public function impersonate()
    {
        $encryptedToken = Crypt::encrypt('impersonate');

        return redirect()->to(route('impersonate', ['userId' => $this->id, 'token' => $encryptedToken]));
    }

    public function stopImpersonating()
    {
        return redirect()->to(route('leave-impersonation'));
    }
}
