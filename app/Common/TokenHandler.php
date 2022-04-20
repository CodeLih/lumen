<?php
namespace App\Contracts;

interface TokenHandler
{
    public function createToken($user);

    public function getTokenUser($toekn);

    public function removeToken($token);
}
