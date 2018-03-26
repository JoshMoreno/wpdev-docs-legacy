<?php

namespace WPDev\Docs;

class MenuItem {
    public $text;
    public $url;
    public $children = [];

    public function __construct(string $text, string $url = '#')
    {
        $this->text = $text;
        $this->url = $url;
    }

    public static function create(string $text, string $url = '#')
    {
        return new static($text, $url);
    }

    /**
     * @param \WPDev\Docs\MenuItem[] $menuItems
     *
     * @return $this
     */
    public function children(array $menuItems)
    {
        $this->children = collect($menuItems);
        return $this;
    }
}