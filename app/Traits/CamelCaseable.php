<?php


namespace App\Traits;


use Illuminate\Support\Arr;
use Illuminate\Support\Str;

trait CamelCaseable
{
    public function getAttribute($key)
    {
        $snakeKey = Str::snake($key);
        if($this->isRelation($snakeKey)) return $this->getRelation($snakeKey);
        return Arr::exists($this->attributes, $snakeKey) ? $this->attributes[$snakeKey] : "";
    }

    public function setAttribute($key, $value)
    {
        $snakeKey = Str::snake($key);
        if($this->isRelation($snakeKey)) return $this;
        parent::setAttribute($snakeKey, $value);
    }
}
