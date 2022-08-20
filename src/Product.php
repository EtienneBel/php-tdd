<?php

declare(strict_types=1);

namespace Entity;

class Product
{
    protected string $name;
    protected array $tags;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function addTags(array|string $tags)
    {
        if (!isset($this->tags)) {
            $this->tags = [];
        }

        if (!is_array($tags)) {
            $tags = [$tags];
        }

        foreach ($tags as $tag) {
            $this->tags[] = $tag;
        }
    }

    public function hasTags(): bool
    {
        return isset($this->tags) && is_array($this->tags) && count($this->tags) > 0;
    }

    public function clearTags(): void
    {
        $this->tags = [];
    }
}
