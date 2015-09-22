<?php

namespace Impl\Creational\LazyInitialization;

class ServiceProvider
{
    /**
     * @var array
     */
    protected $classMap = [];

    /**
     * @var Service[]
     */
    protected $services = [];

    /**
     * sets up class map
     */
    public function __construct()
    {
        $this->classMap = include 'config.php';
    }

    /**
     * @param string $name
     * @return Service
     */
    public function get($name)
    {
        if (!$this->has($name)) {
            $class = $this->getClass($name);
            $this->services[$name] = new $class;
        }

        return $this->services[$name];
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has($name)
    {
        return isset($this->services[$name]);
    }

    /**
     * @param string $name
     * @return mixed
     * @throws \Exception
     */
    protected function getClass($name)
    {
        if (!array_key_exists($name, $this->classMap)) {
            throw new \Exception("Service '$name' is not configured!");
        }

        return $this->classMap[$name];
    }
}
