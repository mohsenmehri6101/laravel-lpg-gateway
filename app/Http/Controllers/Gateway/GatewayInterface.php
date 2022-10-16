<?php

namespace App\Http\Controllers\Gateway;

interface GatewayInterface
{
    public function pay();

    public function callback();

    public function verify();

    public function reject();
}
