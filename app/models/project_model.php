<?php
    class project_model{
    
        private $table = 'project';
        private $db;

        public function __construct()
        {
            $this->db= new Database;
        }

        public function getProject(){
            $this->db->query('SELECT * FROM '. $this->table);
            return $this->db->resultSet();
        }

        public function getProjectById($id){
            $this->db->query('SELECT * FROM '. $this->table .' where id=:id');
            $this->db->bind('id', $id);
            return $this->db->single();
        }
    }
?>