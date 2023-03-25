<?php

include "fx/Command.php";

class AddCustomerCommand implements Command
{
    private CustomerService $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function execute()
    {
        $this->customerService->addCustomer();
    }
}