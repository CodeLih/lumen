<?php
namespace App\Filter;
use Closure;
 interface Filter {
     public function handle($content,Closure $next);
 }
