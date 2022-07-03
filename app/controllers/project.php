<?php
    class project extends Controller{
        public function index(){

            $data['judul']="Daftar Project";
            $data['project']= $this->model('project_model')->getProject();
            $this->view('templates/header', $data);
            $this->view('project/index', $data);
            $this->view('templates/footer');

        }
    }
?>