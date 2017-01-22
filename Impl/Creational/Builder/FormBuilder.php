<?php declare(strict_types = 1);

namespace Impl\Creational\Builder;

class FormBuilder
{
    /**
     * @var Form
     */
    protected $form;

    public function __construct(string $action)
    {
        $this->form = new Form($action);
    }

    public function method(string $method) : FormBuilder
    {
        $this->form->setMethod($method);

        return $this;
    }

    public function input(string $name, string $type) : FormBuilder
    {
        $this->form->addItem(new Input($name, $type));

        return $this;
    }

    public function submit() : FormBuilder
    {
        $this->form->addItem(new Input('submit', Input::TYPE_SUBMIT));

        return $this;
    }

    public function build() : Form
    {
        return $this->form;
    }
}