<?php

include "Editor.php";
include "History.php";

class Memento {
    public function action()
    {
        $editor = new Editor();
        $history = new History();

        $editor->setContent('a');
        $history->push($editor->createState());

        $editor->setContent('b');
        $history->push($editor->createState());

        $editor->setContent('c');
        $history->push($editor->createState());

        $editor->setContent('d');
        $editor->restore($history->pop());
        $editor->restore($history->pop());

        echo $editor->getContent().PHP_EOL;

        print_r($history->getStates());
    }
}

$memento = new Memento();
$memento->action();