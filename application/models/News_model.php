<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    //构造方法
    public function __construct()
    {
        $this->load->database();
    }
    //获取新闻
    public function get_news($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('news');
            return $query->result_array();
        }

        $query = $this->db->get_where('news', array('slug' => $slug));
        return $query->row_array();
    }
    //插入新闻
    public function set_news()
    {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'),'dash',true);//将字符串 中的所有空格替换成连接符（-），并将所有字符转换为小写。

        $data = array(
            'title'=>$this->input->post('title'),//post()过数据进行过滤，防止恶意攻击。
            'slug'=>$slug,
            'text'=>$this->input->post('text')
        );
        //插入到数据库
        return $this->db->insert('news',$data);
    }
}

/* End of file News_model.php */
/* Location: ./application/models/News_model.php */