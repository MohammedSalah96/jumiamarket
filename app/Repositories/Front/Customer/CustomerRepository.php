<?php

namespace App\Repositories\Front\Customer;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Repositories\Front\BaseRepository;

class CustomerRepository extends BaseRepository implements CustomerRepositoryInterface
{

   private $customer;

   public function __construct(Customer $customer)
   {
      parent::__construct();
      $this->customer =  $customer;
   }

   public function phoneNumbersList(Request $request)
   {
      return  $this->customer->select('phone')->get();
   }

   
}
