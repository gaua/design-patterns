<?php

namespace Impl\Creational\Builder;

class Input extends FormItem
{
    const TYPE_TEXT = 'text';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_DATE = 'date';
    const TYPE_EMAIL = 'email';
    const TYPE_PASSWORD = 'password';
    const TYPE_RADIO = 'radio';
    const TYPE_SUBMIT = 'submit';

    /**
     * @var string
     */
    protected $type;

    /**
     * @param string $name
     * @param string $type
     */
    public function __construct($name, $type = self::TYPE_TEXT)
    {
        $this->name = $name;
        $this->type = $type;
    }


    public function render()
    {
        return "<input name='$this->name' type='$this->type'/>";
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
