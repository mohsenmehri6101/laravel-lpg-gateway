<?php


namespace App\Http\Controllers\Gateway;


class Saman implements GatewayInterface
{
    public string $callback_url;

    public function pay()
    {
        return "pay funciton saman";
        // TODO: Implement pay() method.
    }

    public function callback()
    {
        // TODO: Implement callback() method.
    }

    public function verify()
    {
        // TODO: Implement verify() method.
    }

    public function reject()
    {
        // TODO: Implement reject() method.
    }
}
