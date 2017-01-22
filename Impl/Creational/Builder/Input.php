<?php declare(strict_types = 1);

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

    public function __construct(string $name, string $type = self::TYPE_TEXT)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public function render() : string
    {
        return "<input name='$this->name' type='$this->type'/>";
    }

    public function getType() : string
    {
        return $this->type;
    }

    public function setType(string $type) : Input
    {
        $this->type = $type;

        return $this;
    }
}
