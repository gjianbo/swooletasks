<?php


namespace pangzi;


class ChatRoom extends BaseCommand
{
    protected $name = '';

    protected function init()
    {
        $this->name = strtolower(substr(strrchr(get_class($this), "\\"), 1));
        $this->config = $this->app->config->get($this->name);
    }
}