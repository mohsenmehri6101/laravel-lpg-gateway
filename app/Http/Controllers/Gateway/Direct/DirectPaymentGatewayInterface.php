<?php

namespace App\Http\Controllers\Gateway\Direct;

/**
 * Interface DirectPaymentGatewayInterface
 *
 *
 *      رابط درگاه پرداخت های مستقیم
 */
interface DirectPaymentGatewayInterface
{
    public function pya();

    public function callback();
}
