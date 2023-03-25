<?php

include "Command.php";

interface UndoableCommand extends Command
{
    public function unexecute();
}