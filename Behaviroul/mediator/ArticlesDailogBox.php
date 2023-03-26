<?php

include "UIControl.php";
include "DailogBox.php";
include "ListBox.php";
include "TextBox.php";
include "Button.php";

class ArticlesDailogBox extends DailogBox
{
    private ListBox $articlesListBox;
    private TextBox $titleTextBox;
    private Button $button;

    public function __construct()
    {
        $this->articlesListBox = new ListBox($this);
        $this->titleTextBox = new TextBox($this);
        $this->button = new Button($this);
    }

    public function simulateUserInteraction(string $selection): void
    {
        $this->articlesListBox->setSelection($selection);
        // $this->titleTextBox->setContent("");
        echo "TextBox: " . $this->titleTextBox->getContent() . PHP_EOL;
        echo "Button: " . $this->button->isEnabled();
    }

    public function changed(UIControl $control): void
    {
        if ($control == $this->articlesListBox)
            $this->articleSelected();
        else if ($control == $this->titleTextBox)
            $this->titleChanged();
    }

    private function titleChanged(): void
    {
        $content = $this->titleTextBox->getContent();
        $isEmpty = ($content == null || $content == "");
        $this->button->setEnabled(!$isEmpty);
    }

    private function articleSelected(): void
    {
        $this->titleTextBox->setContent($this->articlesListBox->getSelection());
        $this->button->setEnabled(true);
    }
}