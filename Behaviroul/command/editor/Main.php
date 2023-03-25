<?php

include "HtmlDocument.php";
include "BoldCommand.php";
include "History.php";
include "UndoCommand.php";

class Main 
{
    public function action()
    {
        $document = new HtmlDocument();
        $history = new History();
        $document->setContent('Hello World!');

        echo $document->getContent().PHP_EOL;

        $boldCommand = new BoldCommand($document, $history);
        $boldCommand->execute();

        echo $document->getContent().PHP_EOL;

        $undoCommand = new UndoCommand($history);
        $undoCommand->execute();

        echo $document->getContent().PHP_EOL;
    }
}

(new Main())->action();