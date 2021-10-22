<?php

namespace Php\Package;

use Tightenco\Collect\Support\Collection;

class User
{
    private $name;
    private $children;

    public function __construct(string $name, array $children = [])
    {
        $this->name = $name;
        $this->children = collect($children);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChildren(): Collection
    {
        return $this->children;
    }
}
