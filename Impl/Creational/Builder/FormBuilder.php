<?php

namespace Impl\Creational\Builder;

class FormBuilder
{
    /**
     * @var Form
     */
    protected $form;

    /**
     * @param $action
     */
    public function __construct($action)
    {
        $this->form = new Form($action);
    }

    /**
     * @param string $method
     * @return $this
     */
    public function method($method)
    {
        $this->form->setMethod($method);

        return $this;
    }

    /**
     * @param string $name
     * @param string $type
     * @return $this
     */
    public function input($name, $type)
    {
        $this->form->addItem(new Input($name, $type));

        return $this;
    }

    /**
     * @return $this
     */
    public function submit()
    {
        $this->form->addItem(new Input('submit', Input::TYPE_SUBMIT));

        return $this;
    }

    /**
     * @return Form
     */
    public function build()
    {
        return $this->form;
    }
}