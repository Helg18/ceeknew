<?php 
use RainLab\Translate\Models\Message;class Cms58a472e734aff223902003_1744672673Class extends \Cms\Classes\LayoutCode
{

public function onStart() {
    $this['baseUrl'] = Config::get('app.url');
    Message::setContext(App::getLocale(), $this->page->url);
}
}
