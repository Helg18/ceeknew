<?php 
use RainLab\Translate\Models\Message;
class Cms58a30e08ef44e368588791_557037939Class extends \Cms\Classes\LayoutCode
{
public function onStart() {
    $this['baseUrl'] = Config::get('app.url');
    Message::setContext(App::getLocale(), $this->page->url);
}
}
