<?php

namespace Impl\Singleton;

/**
 * Class Config
 * @package impl\singleton
 */
class Config
{
    /**
     * @var self
     */
    private static $instance = null;

    /**
     * @var array
     */
    private $options = [
        'foo' => 'aaa',
        'bar' => 'aaa'
    ];

    /**
     * Must be private to prevent direct creation
     */
    private function __construct() {}

    /**
     * @return Config
     */
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $key
     * @return mixed
     * @throws \Exception
     */
    public function get($key)
    {
        if (!array_key_exists($key, $this->options)) {
            throw new \Exception('Option does not exist');
        }

        return $this->options[$key];
    }

    /**
     * @param string $key
     * @param mixed $value
     * @throws \Exception
     */
    public function set($key, $value)
    {
        if (!array_key_exists($key, $this->options)) {
            throw new \Exception('Option does not exist');
        }

        $this->options[$key] = $value;
    }
}
