<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function view($page = "home")
    {
        if (! file_exists(APPPATH.'/views/pages/'.$page.".php")) {
            show_404();
        }

        $data['title'] = ucfirst($page);//首字母大写

        $this->load->view('templates/header', $data);

        $this->load->view('pages/'.$page, $data);

        $this->load->view('templates/footer', $data);
    }

}

/* End of file Pages.php */
/* Location: ./application/controllers/Pages.php */
 ?>