<?php

namespace app\controllers;

use vendor\core\base\Controller;

class Page extends Controller
{
    public function viewAction()
    {
        echo 'Page::view';
    }

    public function indexAction()
    {
        echo 'Page::index';
    }
}