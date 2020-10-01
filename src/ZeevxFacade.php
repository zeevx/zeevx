<?php

namespace Zeevx\Zeevx;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Zeevx\Zeevx\Skeleton\SkeletonClass
 */
class ZeevxFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zeevx';
    }
}
