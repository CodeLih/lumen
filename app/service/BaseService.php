<?php
namespace  App\Service;
use Closure;
use Illuminate\Support\Facades\DB;
abstract class BaseService {

    /**
     * @param Closure $callback
     * @param Closure|null $errorCallback
     * @return mixed
     * @throws \Exception
     */
    public function transaction(Closure $callback, Closure $errorCallback = null) {
        DB::beginTransaction();
        try {
            $result = $callback($this);
            DB::commit();
            return $result;

        }catch (\Exception $e) {
            DB::rollBack();
            if (@is_callable($errorCallback)) {

                $errorCallback($this);
            }
            throw $e;
        }
    }
}

