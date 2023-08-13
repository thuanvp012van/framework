<?php

namespace Penguin\Server;

class ServerFactory
{
    /**
     * Get server by server type
     *
     * @param string $serverType
     *
     * @return Server
     */
    public function getServer(string $serverType = ''): Server
    {
        $serviceName = $serverType ? $serverType : config('app.server.type');
        return service($serviceName)->build();
    }
}
