<?php

/**
 * @see       https://github.com/laminasframwork/laminas-code for the canonical source repository
 * @copyright https://github.com/laminasframwork/laminas-code/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminasframwork/laminas-code/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Code\TestAsset\Proxy;

use Laminas\Code\Scanner\CachingFileScanner;

class CachingFileScannerProxy extends CachingFileScanner
{
    /**
     * @var CachingFileScanner
     */
    protected $cfs;

    public function __construct(CachingFileScanner $cfs)
    {
        $this->cfs = $cfs;
    }

    public function getCache()
    {
    }
}
