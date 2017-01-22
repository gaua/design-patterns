<?php declare(strict_types = 1);

namespace Impl\Creational\Singleton;

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

    public static function getInstance() : Config
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $key)
    {
        if (!array_key_exists($key, $this->options)) {
            throw new \Exception('Option does not exist');
        }

        return $this->options[$key];
    }

    public function set(string $key, $value) : void
    {
        $this->options[$key] = $value;
    }
}
