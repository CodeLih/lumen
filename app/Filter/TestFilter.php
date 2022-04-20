<?php
namespace App\Filter;
use Closure;
class TestFilter implements Filter{
    /**
     * @param $content
     * @param Closure $next
     * @return mixed
     */
    public function handle($content, Closure $next)
    {
         return $next($content);
    }
}
