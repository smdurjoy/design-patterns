<?php

include "AuditTrail.php";

abstract class Task
{
    private AuditTrail $auditTrail;

    public function __construct()
    {
        $this->auditTrail = new AuditTrail();
    }

    public function execute()
    {
        $this->auditTrail->record();
        $this->doExecute();
    }

    protected abstract function doExecute();
}