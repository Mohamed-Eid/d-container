<?php

namespace Bluex\DContainer\Test;

class User
{

    protected Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getName()
    {
        return $this->logger->log("Hello I am a user");
    }
}
