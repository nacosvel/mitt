<?php

namespace Nacosvel\Mitt\Facades;

use Nacosvel\Mitt\Contracts\EmitterInterface;
use Nacosvel\Facades\Facade;
use RuntimeException;

/**
 * @method static array getEventsKeys(string $eventKey = null, bool $wildcard = false);
 * @method static bool hasEventsKeys(string $eventKey = null, bool $wildcard = false);
 * @method static array getEvents(string $eventKey = null, bool $wildcard = false);
 * @method static \Nacosvel\Mitt\Emitter clear();
 * @method static \Nacosvel\Mitt\Emitter reset();
 * @method static string getHash();
 * @method static \Nacosvel\Mitt\Emitter setHash(string $hash);
 * @method static string getEventKey(string $key);
 * @method static void on(string|array $keys, callable $handler);
 * @method static void once(string|array $keys, callable $handler);
 * @method static void off(string|array $keys, ?callable $handler = null);
 * @method static array emit(string|array $keys, mixed ...$args);
 *
 * @see \Nacosvel\Mitt\Emitter
 * @see EmitterInterface
 */
class Emitter extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws RuntimeException
     */
    protected static function getFacadeAccessor(): string
    {
        return \Nacosvel\Mitt\Emitter::class;
    }

    /**
     * Get a resolved facade instance.
     *
     * @return EmitterInterface
     */
    protected static function getFacadeInstance(): EmitterInterface
    {
        return new \Nacosvel\Mitt\Emitter();
    }
}
