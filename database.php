<?php 

namespace server_database
{
    class init_database 
    {
        private $sever_name;
        private $datbase_name;
        private $administrator_name;
        private $adminstrator_password;
     
        public function __construct()
        {
            $this->server_name = "127.0.0.1";
            $this->administrator_name = "root";
            $this->administrator_password = "";
            $this->database_name = "mydesk2";
        }
        public function knockDb()
        {
            $mysqli = new \mysqli($this->server_name,
                                    $this->administrator_name,
                                        $this->administrator_password,
                                            $this->database_name);
            if(!$mysqli)
                echo 'ooops!...Server Error';
            else 
            {   
                return $mysqli;
            }
        }

        public function __destruct()
        {
            $close_db_connec = $this->knockDb();
            $close_db_connec->close();
        }
    }
}

