<?php
namespace App\Common\Validators;

use Illuminate\Support\Facades\Validator as LumenValidator;

class Validator extends LumenValidator
{

    public static function registerCustomValidator()
    {

        LumenValidator::extend('card', function ($attribute, $value, $parameters) {

            if ($value == 1) {
                return true;
            } else {
                return false;
            }

        });

    }

}

