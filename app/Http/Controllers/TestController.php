<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Gateway\GatewayInterface;
use App\Http\Requests\GatewayRequest;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //public Gateways $gateways;
//   $gateways public function __construct(Gateways $gateways)
//    {
//        $this->gateways=$gateways;
//    }

    public function index(GatewayInterface $gateway)
    {
        Gateway::pay();

        Gateway::pay();
        dd($gateway);
//        return new Gateways($gateway,'pay');
        return  (new Gateways($gateway))->pay();
    }
}
