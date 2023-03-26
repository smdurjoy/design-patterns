<?php

include "ArticlesDailogBox.php";

class Main 
{
    public function action()
    {
        $dailog = new ArticlesDailogBox();
        $dailog->simulateUserInteraction('Article 1');
    }
}

(new Main())->action();