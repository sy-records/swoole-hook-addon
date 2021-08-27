<?php

namespace Oss\OssClient {

    use Swoole\Runtime;

    function is_resource($resource)
    {
        if (Runtime::getHookFlags() & SWOOLE_HOOK_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Curl\Handler;
        }
        if (Runtime::getHookFlags() & SWOOLE_HOOK_NATIVE_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Coroutine\Curl\Handle;
        }
        return \is_resource($resource);
    }
}

namespace Oss\Http {

    use Swoole\Runtime;

    function is_resource($resource)
    {
        if (Runtime::getHookFlags() & SWOOLE_HOOK_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Curl\Handler;
        }
        if (Runtime::getHookFlags() & SWOOLE_HOOK_NATIVE_CURL) {
            return \is_resource($resource) || $resource instanceof \Swoole\Coroutine\Curl\Handle;
        }
        return \is_resource($resource);
    }
}