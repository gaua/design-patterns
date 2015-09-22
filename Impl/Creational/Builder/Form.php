<?php

namespace Impl\Creational\Builder;

class Form implements Renderable
{
    const ACTION_GET = 'GET';
    const ACTION_POST = 'POST';

    /**
     * @var FormItem[]
     */
    protected $items = [];

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $action;

    /**
     * @param string $method
     * @param string $action
     */
    public function __construct($action, $method = self::ACTION_POST)
    {
        $this->method = $method;
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function render()
    {
        $html = addnl("<form action='$this->action' method='$this->method'>");

        foreach ($this->items as $item) {
            $html .= $item->render();
        }

        $html .= addnl("</form>");

        return $html;
    }

    /**
     * @return FormItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param FormItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param FormItem $item
     * @return $this
     */
    public function addItem(FormItem $item)
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }
}
