<?php

namespace App\Services;

use App\Services\StripeService;


class OrderService {

    public $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }


    public function discount(){

        dump('relise sur le montant : '.$this->stripeService->amount);
    }
}

