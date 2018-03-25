<?php

namespace App\Exceptions;

use SessionHandlerInterface;
class MongoHandler implements SessionHandlerInterface
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    public function open($savePath, $sessionName)
    {

    }

    public function close()
    {

    }

    public function read($sessionId)
    {

    }

    public function write($sessionId, $data)
    {

    }

    public function destroy($sessionId)
    {

    }

    public function gc($lifetime)
    {

    }
}
