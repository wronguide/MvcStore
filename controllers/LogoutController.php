<?php

namespace controllers;

class LogoutController
{
    function index()
    {
        unset($_SESSION['auth']);
    }
}