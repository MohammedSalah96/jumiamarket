<?php

namespace App\Models;

class Customer extends MyModel
{
    protected $table = "customer";

    protected $casts = [  
        
    ];

    public function frontDataTableTransform()
    {
       $transformer = new \stdClass();
       
       return $transformer;

    }
    
}
