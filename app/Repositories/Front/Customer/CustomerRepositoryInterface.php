<?php

namespace App\Repositories\Front\Customer;

use Illuminate\Http\Request;

interface CustomerRepositoryInterface{

    public function dataTable(Request $request);

}