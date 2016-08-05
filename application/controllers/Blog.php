<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

   
    public function __construct()
    {
        parent::__construct();
        $this->load->model('blog_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->load->view('blog/welcome');
    }

    public function get()
    {
        $data['blog'] = $this->blog_model->get_blog();
        // $data['title'] = '欢迎来到KCN的博客';

        $this->load->view('templates/header');
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $this->load->view('blog/about');
    }

    public function view($slug = NULL)
    {
        $data['blog_item'] = $this->blog_model->get_blog($slug);

        if (empty($data['blog_item']))
        {
            show_404();
        }

        $data['title'] = $data['blog_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('blog/view', $data);
        $this->load->view('templates/footer');

    }

    public function login()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '登录';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('blog/login');
            $this->load->view('templates/footer');

        }
        else 
        {
            $this->blog_model->login();
            $this->load->view('blog/success');
        }
    }

    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = '发表文章';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
        $this->form_validation->set_rules('writer', 'Writer', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('blog/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->blog_model->set_blog();
            $this->load->view('blog/success');
        }
    }
 
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */