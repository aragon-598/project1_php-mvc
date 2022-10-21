<?php 

    class Connection{
        private $con;

        public function __construct()
        {
            $this->con = new mysqli('localhost','root','12345','mvc_php');
        }

        /**
         * Get all users from table USER
         */
        public function getUsers()
        {
            $query = $this->con->query('SELECT * from user');

            $userList=[];

            $index=0;

            while ($row =$query->fetch_assoc()) {
                $userList[$index]= $row;

                $index++;
            }

            return $userList;
        }
    }

?>