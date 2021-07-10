<?php

namespace App\Repositories\Front\Customer;

use Illuminate\Http\Request;

interface CustomerRepositoryInterface{

    public function phoneNumbersList(Request $request);

}