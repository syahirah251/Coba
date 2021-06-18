<?php
class Update extends Controller{
    public function index($id)
    {
        $data['judul'] = 'Update Artikel';
        
        
        $data['post_id'] = $this->model('Post_model')->getPostById($id);
        $data['post'] = $this->model('Post_model')->getAll_post();
        $data['user'] = $this->model('user_model')->getAll_user();
        
        $this->view('templates/header_admin', $data);
        $this->view('update/index', $data);
        $this->view('templates/footer');
    }
    
}