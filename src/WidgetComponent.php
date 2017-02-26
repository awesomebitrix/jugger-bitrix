<?php

namespace jugger\bitrix;

abstract class WidgetComponent extends \CBitrixComponent
{
    public function executeComponent()
    {
        $this->initProperties();
        $this->init();
        $this->run();
    }

    public function init()
    {

    }

    public function initProperties()
    {
        foreach ($this->arParams as $name => $value) {
            if (property_exists($this, $name)) {
                $this->$name = $value;
            }
        }
    }

    public function run()
    {
        $this->includeComponentTemplate();
    }
}
