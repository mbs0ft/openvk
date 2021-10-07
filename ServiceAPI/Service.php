<?php declare(strict_types=1);
namespace openvk\ServiceAPI;
use openvk\Web\Models\Entities\User;
use openvk\Web\Util\DateTime;

class Service implements Handler
{
    protected $user;
    
    function __construct(?User $user)
    {
        $this->user = $user;
    }
    
    function getTime(callable $resolve, callable $reject): void
    {
        $resolve(trim((new DateTime)->format("%e %B %G" . tr("time_at_sp") . "%X")));
    }
    
    function getServerVersion(callable $resolve, callable $reject): void
    {
        $resolve("OVK " . OPENVK_VERSION);
    }
}
