<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;
use App\Repositories\Front\Customer\CustomerRepositoryInterface;

class PhoneNumbersController extends FrontController
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository) {
        parent::__construct();
        $this->customerRepository = $customerRepository;
    }


    /**
     * @return DataTable
     */
    public function dataTable(Request $request)
    {
        $phoneNumbers = $this->customerRepository->phoneNumbersList($request);

        return \DataTables::of($phoneNumbers)
            ->addColumn('country', function ($item) {
                $countryCode = $this->getPhoneDetails($item->phone)['country_code'];
                return $this->countryCodes[$countryCode]['country'];
            })
            ->addColumn('country_code', function ($item) {
                return '+' . $this->getPhoneDetails($item->phone)['country_code'];
            })
            ->addColumn('state', function ($item) {
                $countryCode = $this->getPhoneDetails($item->phone)['country_code'];
                $regex = $this->countryCodes[$countryCode]['regex'];
                return preg_match($regex, $item->phone) ? 'Valid' : 'NValid';
            })
            ->editColumn('phone', function ($item) {
                return $this->getPhoneDetails($item->phone)['phone'];
            })
            ->filter(function ($instance) use ($request) {
                if (!empty($request->get('state'))) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return $row['state'] == $request->get('state') ? true : false;
                    });
                }
                if (!empty($request->get('country'))) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        return $row['country'] == $request->get('country') ? true : false;
                    });
                }
            })
            ->make();
    }
}
