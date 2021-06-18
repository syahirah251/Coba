<?php
class Create extends Controller{
    public function index()
    {
        $data['admin'] = $this->model('Admin_model')->getAll_admin();
        $data['post'] = $this->model('Post_model')->getAll_post(); 
        $data['user'] = $this->model('user_model')->getAll_user();
        
        $data['judul'] = 'Form Artikel';
        $this->view('templates/header_login', $data);
        $this->view('create/index', $data);
        $this->view('templates/footer');
    }
}