<?php
class Home extends Controller {
    public function index()
    {
        $data['admin'] = $this->model('Admin_model')->getAll_admin();
        $data['post'] = $this->model('Post_model')->getAll_post(); 
        $data['user'] = $this->model('user_model')->getAll_user();
        
        $url_global_positiv = "https://api.kawalcorona.com/positif/";
        $url_global_sembuh = "https://api.kawalcorona.com/sembuh/";
        $url_global_meninggal = "https://api.kawalcorona.com/meninggal/";

        $url_indo = "https://api.kawalcorona.com/indonesia/";

        // persiapkan curl
        $ch_glopos = curl_init($url_global_positiv);
        $ch_glosem = curl_init($url_global_positiv);
        $ch_glomen = curl_init($url_global_positiv);

        $ch_indpos = curl_init($url_indo);
        $ch_indsem = curl_init($url_indo);
        $ch_indmen = curl_init($url_indo);

        // set url 
        curl_setopt($ch_glopos, CURLOPT_URL, $url_global_positiv);
        curl_setopt($ch_glosem, CURLOPT_URL, $url_global_sembuh);
        curl_setopt($ch_glomen, CURLOPT_URL, $url_global_meninggal);

        curl_setopt($ch_indpos, CURLOPT_URL, $url_indo);
        curl_setopt($ch_indsem, CURLOPT_URL, $url_indo);
        curl_setopt($ch_indmen, CURLOPT_URL, $url_indo);

        // return the transfer as a string 
        curl_setopt($ch_glopos, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_glosem, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_glomen, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch_indpos, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_indsem, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch_indmen, CURLOPT_RETURNTRANSFER, true);

        // $output contains the output string global
        $output_glopos = curl_exec($ch_glopos); 
        $global_positiv = json_decode($output_glopos);

        $output_glosem = curl_exec($ch_glosem); 
        $global_sembuh = json_decode($output_glosem);

        $output_glomen = curl_exec($ch_glomen); 
        $global_meninggal = json_decode($output_glomen);

        //$output contains the output string indo
        $output_indpos = curl_exec($ch_indpos); 
        $indo_positiv = json_decode($output_indpos);

        $output_indsem = curl_exec($ch_indsem); 
        $indo_sembuh = json_decode($output_indsem);

        $output_indmen = curl_exec($ch_indmen); 
        $indo_meninggal = json_decode($output_indmen);

        // tutup curl 
        curl_close($ch_glopos);
        curl_close($ch_glosem);
        curl_close($ch_glomen);

        curl_close($ch_indpos);
        curl_close($ch_indsem);
        curl_close($ch_indmen);

        // buat var
        $data['global_positiv'] = $global_positiv->value;
        $data['global_sembuh'] = $global_sembuh->value;
        $data['global_meninggal'] = $global_meninggal->value;

        $data['indo_positiv'] = $indo_positiv[0]->positif;
        $data['indo_sembuh'] = $indo_sembuh[0]->sembuh;
        $data['indo_meninggal'] = $indo_meninggal[0]->meninggal;

        $data['judul'] = 'Home'; 
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
        
    }
}