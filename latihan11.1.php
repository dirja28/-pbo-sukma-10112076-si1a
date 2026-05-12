<?php
class HtmlElement{
    private $attributes =[];
    private $tag;

    public function __construct($tag){
        $this->tag = $tag;
    }

    public function __set($name, $value){
        $this->attributes[$name] = $value;
    }

    public function __get($name){
        return $this->attributes[$name] ?? null;
    }

    public function html($innerHTML = ''){
        $attributes = '';
        foreach ($this->attributes as $name => $value) {
            $attributes .= " $name=\"$value\"";
        }
        return "<{$this->tag}{$attributes}>$innerHTML</{$this->tag}>";
    }

}
$article = new HtmlElement('article');

$article->id = 'main';
$article->class = 'light';

echo $article->class, "<br />"; // light
echo $article->id; // main
