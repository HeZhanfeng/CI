<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    //构造方法
    public function __construct()
    {
        $this->load->database();
    }
    //获取博客
    public function get_blog($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('blog');
            return $query->result_array();
        }

        $query = $this->db->get_where('blog', array('id' => $slug));
        return $query->row_array();
    }
    //发表博客
    public function set_blog()
    {
        //$sql="insert into blog (time) values(now())";

         $sql="select now()";

        $this->load->helper('url');

        //$writer = url_title($this->input->post('writer'),'dash',true);//将字符串中的所有空格替换成连接符（-），并将所有字符转换为小写。

        
        $data = array(
            'title'=>$this->input->post('title'),//post()过数据进行过滤，防止恶意攻击。
            'text'=>$this->input->post('text'),
            'writer'=>$this->input->post('writer'),
            'time'=>$sql
        );

        //插入到数据库
        return $this->db->insert('blog',$data);
    }

    public function login()
    {
        $this->load->helper('url');

        $data = array(
            'username'=>$this->input->post('username'),//post()过数据进行过滤，防止恶意攻击。
            'password'=>$this->input->post('password')
        );

        //插入到数据库
        return $this->db->insert('blog_info',$data);
    }

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */