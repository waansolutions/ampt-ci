<?php

/**
 * Home Controller
 * ----------------------------------------------------------------
 * @package    \App\Controllers\Home
 * @author     Waan <admin@waan.email>
 * @copyright  Copyright (c) 2022, www.waan.io
 * @license    MIT License
 * @link       https://www.waan.io
 * @version    Version 1.0.0
 * @source     Home.php
 * ----------------------------------------------------------------
 */

/**
 * Namespace (Package) Definition
 * ----------------------------------------------------------------
 */

namespace App\Controllers;

/**
 * Use (Import) Statement(s) Definition
 * ----------------------------------------------------------------
 */

use App\Core\MyController;

/**
 * Class Home
 * ----------------------------------------------------------------
 * Home controller is the initialization point of the application.
 * Providing a loader for index page.
 */
class Home extends MyController
{
    public function index(): void
    {
        $content = array(
            "page_title" => "Welcome to AMPT-CI",
            "data" => "Welcome to AMPT-CI."
        );

        $smarty = MyController::SmartyInstance();
        $smarty->assign("c", $content);
        $smarty->display("home.tpl");
    }
}
/* End of the file Home.php */
/* Location: ./app/Controllers/Home.php */
