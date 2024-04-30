<?php

namespace App\Services;

class StripeService {

    public $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function charge($amount){

        dd('montant chargé :'.$amount);
    }
}

