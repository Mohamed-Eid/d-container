<?php

namespace Bluex\DContainer;

use Exception;
use ReflectionClass;

class Container
{
    private array $bindings = [];

    public function set($abstract, callable $factory): void
    {
        $this->bindings[$abstract] = $factory;
    }

    public function get($abstract)
    {
        //create reflcation class
        $reflection = new ReflectionClass($abstract);

        //build dependacies
        $dependencies = $this->buildDependencies($reflection);

        //new instance with args
        return $reflection->newInstanceArgs($dependencies);
    }

    private function buildDependencies(ReflectionClass $reflection)
    {
        $constructor = $reflection->getConstructor();
        if (!$constructor) {
            return [];
        }

        $params = $constructor->getParameters();

        return array_map(function ($param) {
            $type = $param->getType()->getName();
            if (!$type) {
                //required param
                throw new Exception("No Type Hint For This param");
            }
            return $this->get($type);
        }, $params);
    }
}
