<?php 
use RainLab\Translate\Models\Message;class Cms58a5b4dd94b46366870471_1169083418Class extends \Cms\Classes\LayoutCode
{

public function onStart() {
    $this['baseUrl'] = Config::get('app.url');
    Message::setContext(App::getLocale(), $this->page->url);
}
}
