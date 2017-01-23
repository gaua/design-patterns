<?php declare(strict_types = 1);

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

    public function __construct()
    {
        $this->classMap = include 'config.php';
    }

    public function get(string $name) : Service
    {
        if (!$this->has($name)) {
            $class = $this->getClass($name);
            $this->services[$name] = new $class;
        }

        return $this->services[$name];
    }

    public function has(string $name) : bool
    {
        return isset($this->services[$name]);
    }

    protected function getClass(string $name)
    {
        if (!array_key_exists($name, $this->classMap)) {
            throw new \Exception("Service '$name' is not configured!");
        }

        return $this->classMap[$name];
    }
}
