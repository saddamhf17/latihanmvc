<?php
    class project_model{
    
        private $dbh;//database hendler
        private $stmt;

        public function __construct()
        {
            //data source name
            $dsn = 'mysql:host=localhost; dbname=db_porto';
            try{
                $this->dbh = new PDO($dsn, 'root', '');
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }
        public function getProject(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM project');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>