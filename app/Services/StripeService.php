<?php

namespace App\Services;


class StripeService {

    public $key;
    public $amount;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function charge($amount){

        $this->amount = $amount*rand(1,10);

        dump('montant chargé :'.$amount*rand(1,10));
    }
}

