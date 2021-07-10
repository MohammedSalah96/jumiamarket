<?php

namespace App\Models;

use App\Traits\ModelTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {
    use Notifiable;
    use ModelTrait;

    protected $casts = [
        
    ];
    

}
