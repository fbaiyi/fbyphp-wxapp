<?php

declare(strict_types=1);

namespace Firstphp\FirstphpWxapp\Facades;


use Firstphp\FirstphpWxapp\WxappClient;
use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;


class WxappFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $contents = $container->get(ConfigInterface::class);
        $config = $contents->get("wxapp");
        return $container->make(WxappClient::class, compact('config'));
    }

}

