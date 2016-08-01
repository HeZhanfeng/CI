<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Test是个Controller
 * 默认方法是index()，它是public的。
 * 
 */

class Test extends CI_Controller {

    public function index()
    {
        echo "Hello World！";
    }

    public function fuck($somebody = 'japs')
    {
        echo "Fuck ". $somebody ."!";
    }
}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */