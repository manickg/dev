<?php

/*namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;*/

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   /* protected $fillable = [
        'name', 'email', 'password',
    ];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /* protected $hidden = [
        'password', 'remember_token',
    ];
}*/

/*use Laravel\Cashier\Src\Billable;
use Laravel\Cashier\Src\Billable as BillableContract;
use Illuminate\Database\Eloquent\Model; 


class User extends Model implements BillableContract
{
    use Billable;
    protected $dates = ['trial_ends_at', 'subscription_ends_at'];
}*/

    use Laravel\Cashier\Billable;

    class User extends Authenticatable
    {
        use Billable;
        //Protected etc.
    }

