<?php

class AddressableBehaviorObjectBuilderModifier
{
    protected $behavior, $builder;

    public function __construct($behavior)
    {
        $this->behavior = $behavior;
    }

    public function objectFilter(&$script)
    {
        $pattern = '/abstract class (\w+) extends (\w+) implements (\w+)/i';
        $replace = 'abstract class ${1} extends ${2} implements ${3}, Addressable';
        $script = preg_replace($pattern, $replace, $script);
    }

    protected function setBuilder($builder)
    {
        $this->builder = $builder;
        $this->builder->declareClasses(
            '\\Addressable'
        );
    }

    public function objectMethods($builder)
    {
        $this->setBuilder($builder);
        $script = '';

        return $script;
    }
}
