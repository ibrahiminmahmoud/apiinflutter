<?php

class BD {
    public $dbconn;
    private $dbuser = 'root';
    private $dbpass = '';
    private $dbhost = 'localhost';
    private $dbname = 'servar';

    public function connect() {
        $this->dbconn = mysqli_connect( $this->dbhost, $this->dbuser, $this->dbpass, $this->dbname );
        if ( $this->dbconn == null ) {
            die( 'datebases error' );
        }
    }

    public function getuser() {
        $sql_quer = "SELECT * FROM users";
        $query_reuslt =  mysqli_query( $this->dbconn, $sql_quer );
        $date = [];
        while( $row = $query_reuslt->fetch_assoc()) {
            $date[] = $row;
        }
        return $date ;
    }

    public function createusers($usersname,$email){
      $sql_quer= "INSERT INTO users(username, email) VALUE('{$usersname}','{$email}')";
      $query_reuslt =  mysqli_query( $this->dbconn, $sql_quer );
     return $query_reuslt;

    }
}

?>
