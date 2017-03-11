<?php

class ErrorController
{
    public function index()
    {
        $smarty = SmartyRun::connect();

        $smarty->display('error.tpl');
    }
}