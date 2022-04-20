<?php
namespace App\Providers;

use App\Common\Validators\Validator;
use Illuminate\Support\ServiceProvider;


class ValidatorServiceProvider extends ServiceProvider{


    public function boot()
    {

       Validator::registerCustomValidator();

    }


    public function register()
    {


    }

}
