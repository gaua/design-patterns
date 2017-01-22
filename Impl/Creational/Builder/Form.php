<?php declare(strict_types = 1);

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

    public function __construct(string $action, string $method = self::ACTION_POST)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function render() : string
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
    public function getItems() : array
    {
        return $this->items;
    }

    /**
     * @param FormItem[] $items
     */
    public function setItems(array $items)
    {
        $this->items = $items;
    }

    public function addItem(FormItem $item) : Form
    {
        $this->items[] = $item;

        return $this;
    }

    public function getAction() : string
    {
        return $this->action;
    }

    public function setAction(string $action) : void
    {
        $this->action = $action;
    }

    public function getMethod() : string
    {
        return $this->method;
    }

    public function setMethod(string $method) : void
    {
        $this->method = $method;
    }
}
