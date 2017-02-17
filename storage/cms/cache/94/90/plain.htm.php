<?php 
use RainLab\Translate\Models\Message;class Cms58a75fc21edae749814278_1208993805Class extends \Cms\Classes\LayoutCode
{

public function onStart() {
    $this['baseUrl'] = Config::get('app.url');
    Message::setContext(App::getLocale(), $this->page->url);
}
}
