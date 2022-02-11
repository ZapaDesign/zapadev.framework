<?php

namespace vendor\core\base;

class View
{
    /**
     * Current route
     * @var array
     */
    public $route = [];

    /**
     * Current view
     * @var string
     */
    public $view;

    /**
     * Current layout
     * @var string
     */
    public $layout;


    public function __construct($route, $layout = '', $view = '')
    {
        $this->route  = $route;
        $this->layout = $layout ? : LAYOUT;
        $this->view   = $view;
    }

    public function render()
    {
        $file_view = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if (is_file($file_view)) {
            return $file_view;
        } else {
            echo "<p>Not found view <b>$file_view</b></p>";
        }
    }
}