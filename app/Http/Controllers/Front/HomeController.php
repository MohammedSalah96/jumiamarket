<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\FrontController;

class HomeController extends FrontController
{

    public function __construct() {
        parent::__construct();
    }

    /**
     * Show the application home.
     * @return view
     */
    public function index(Request $request)
    {
        try {
            $this->data['countryCodes'] = $this->countryCodes;
            return $this->_view("index");
        } catch (\Exception $ex) {
            abort(404, 'Ops!, Something went wrong!');
        }
    }
}
