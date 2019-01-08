<?php
declare(strict_types=1);

namespace App;

/**
 * @method \DateTime magicFactoryMethod
 */
class SomeServiceProvider
{
    public function ordinaryFactoryMethod(): \DateTime
    {
        return new \DateTime();
    }

    public function __call($name, $arguments)
    {
        if ($name === 'magicFactoryMethod') {
            return new \DateTime();
        }
        throw new \Exception("Unknown method '$name'");
    }
}
