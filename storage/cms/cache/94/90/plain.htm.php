<?php 
use RainLab\Translate\Models\Message;class Cms58a5fe6f079df716626386_779358500Class extends \Cms\Classes\LayoutCode
{

public function onStart() {
    $this['baseUrl'] = Config::get('app.url');
    Message::setContext(App::getLocale(), $this->page->url);
}
}
