<?php


class DBController
{
    //Database Connection Properties
    // protected $host = 'sql306.epizy.com';
    // protected $user = 'epiz_28311962';
    // protected $password = 'O5XEUFYk6M';
    // protected $database = "epiz_28311962_hamrombl";

    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "hamrombl";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
?>