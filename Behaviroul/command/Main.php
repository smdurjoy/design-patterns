<?php

include "CustomerService.php";
include "AddCustomerCommand.php";
include "BlackAndWhiteCommand.php";
include "ResizeCommand.php";
include "CompositeCommand.php";
include "fx/Button.php";

class Main 
{
    public function action()
    {
        $customerService = new CustomerService();
        $command = new AddCustomerCommand($customerService);
        $button = new Button($command);
        $button->click();

        echo PHP_EOL;

        $composite = new CompositeCommand();
        $composite->add(new BlackAndWhiteCommand());
        $composite->add(new ResizeCommand());
        $composite->execute();
    }
}

(new Main())->action();