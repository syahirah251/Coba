<?php
class About extends Controller{
    public function index()
    {
        $data['admin'] = $this->model('Admin_model')->getAll_admin();
        $data['post'] = $this->model('Post_model')->getAll_post(); 
        $data['user'] = $this->model('user_model')->getAll_user();
        $data['judul'] = 'Articles'; 
        
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer', $data);
    }

}