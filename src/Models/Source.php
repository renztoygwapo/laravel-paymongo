<?php

namespace Luigel\LaravelPaymongo\Models;

class Source {
    public $id;
    public $type;

    public function __construct($source)
    {
        $this->id = $source['id'];
        $this->type = $source['type'];
    }
}