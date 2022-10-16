<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Gateway\Mellat;
use App\Http\Controllers\Gateway\Saman;
use Exception;
/**
 * Class Tickets
 *
// * @method static FrotelTicketService frotel()
 *
 * @package App\Services\Tickets
 */
class Gateways
{
    /**
     * @var array|string[]
     */
    private array $providers = [
        'saman',
        'mellat'
    ];

    public function __construct($gateway=null)
    {
        $this->gateway=$gateway;

        // throw new Exception('Provider not found!', 400);
    }

    /**
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        $class_name = __NAMESPACE__ . DIRECTORY_SEPARATOR .'Gateway'.DIRECTORY_SEPARATOR.ucfirst($name);
        if (in_array($name, $this->providers) && class_exists($class_name)) {
            return new $class_name;
        }
        abort(400);
        // throw new Exception('Provider not found!', 400);
    }

    public function getProviders(): array
    {
        return $this->providers;
    }
}
