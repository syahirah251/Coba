<?php
class Admin extends Controller{
    public function index()
    {
        $data['admin'] = $this->model('Admin_model')->getAll_admin();
        $data['post'] = $this->model('Post_model')->getAll_post(); 
        $data['user'] = $this->model('user_model')->getAll_user();
        
        $data['judul'] = 'Dashboard';
        $this->view('templates/header_admin', $data);
        $this->view('admin/index', $data);
        $this->view('templates/footer', $data);
    }

    public function tambah()
    {
        if( $this->model('Post_model')->create_post($_POST) > 0){
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            header('Location: ' . BASEURL .'/admin?message=Gagal tambah post');
            exit();
        }
    }

    public function hapus($id)
    {
        if( $this->model('Post_model')->delete_post($id) > 0){
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            header('Location: ' . BASEURL .'/admin?message=Gagal delete post' . $id);
            exit();
        }
    }

    public function update()
    {
        
        if( $this->model('Post_model')->update_post($_POST) > 0){
            var_dump($_POST);
            header('Location: ' . BASEURL . '/admin');
            exit;
        } else {
            header('Location: ' . BASEURL .'/admin?message=Gagal update post' . $_POST['post_id']);
            exit();
        }
    }

    
}
