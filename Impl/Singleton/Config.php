<?php

namespace Impl\Singleton;

/**
 * Class Config
 * @package Impl\Singleton
 */
class Config
{
    /**
     * @var Config
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
     * @param $key
     * @param $value
     */
    public function set($key, $value)
    {
        $this->options[$key] = $value;
    }
}
