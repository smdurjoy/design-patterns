<?php

include "UndoableCommand.php";

class BoldCommand implements UndoableCommand
{
    private $prevContent, $document, $history;

    public function __construct(HtmlDocument $document, History $history)
    {
        $this->document = $document;
        $this->history = $history;
    }

    public function execute()
    {
        $this->prevContent = $this->document->getContent();
        $this->document->makeBold();
        $this->history->add($this);
    }

    public function unexecute()
    {
        $this->document->setContent($this->prevContent);
    }
}