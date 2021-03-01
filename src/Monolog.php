<?php

namespace Monolog\Handler\SyslogUdp {
    function is_resource($resource)
    {
        if (defined('SWOOLE_HOOK_SOCKETS') && (\Swoole\Runtime::getHookFlags() & SWOOLE_HOOK_SOCKETS)) {
            return \is_resource($resource) || $resource instanceof \Swoole\Coroutine\Socket;
        }
        return \is_resource($resource);
    }
}
