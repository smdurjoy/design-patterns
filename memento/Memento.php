<?php

include "Editor.php";

class Memento {
    public function action()
    {
        $editor = new Editor();
        $editor->setContent('test');
        $editor->setContent('test1');
        $editor->setContent('test2');

        echo $editor->getContent();
    }
}

$memento = new Memento();
$memento->action();