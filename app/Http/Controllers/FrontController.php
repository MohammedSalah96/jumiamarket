<?php

namespace App\Http\Controllers;

use App\Traits\Basic;

class FrontController extends Controller
{

    use Basic;
    protected $data = [];

    public function __construct() {
     
    }

    public function _view($main_content, $type = 'front') {
        $main_content = "main_content/$type/$main_content";
        return view($main_content, $this->data);
    }

    public function getPhoneDetails($phone)
    {
        return [
            'country_code' => explode(')', (explode('(', $phone)[1]))[0],
            'phone' => explode(')', $phone)[1]
        ];
    }

    public function err404()
    {
        return $this->_view('err404');
    }


}
