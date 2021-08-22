<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');

class Notes extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model("Note");
    }

    public function index_json(){
        $data['posts'] = $this->Note->all();
        echo json_encode($data);
    }

    public function index_html()
    {
        $data["posts"] = $this->Note->all();
        $this->load->view("partials/posts", $data);
    }

    public function create()    
    {
        $new_post = $this->input->post();
        $this->Note->create($new_post);
        $data["posts"] = $this->Note->all();
        $this->load->view("partials/posts", $data);
    }

    public function index()
    {
        $this->load->view('posts');
    }
}

?>