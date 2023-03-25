<?php

include "CustomerService.php";
include "AddCustomerCommand.php";
include "fx/Button.php";

class Main 
{
    public function action()
    {
        $customerService = new CustomerService();
        $command = new AddCustomerCommand($customerService);
        $button = new Button($command);

        $button->click();
    }
}

(new Main())->action();