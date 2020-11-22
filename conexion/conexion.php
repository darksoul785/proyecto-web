<?php
class conexion{

    private $conexion;
    private $server = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'mds';
    private $usuario;
    private $password;

    public function __construct(){
        $this -> conexion = new mysqli($this-> server, $this ->user, $this->pass, $this->db);
        
        if($this->conexion->connect_errno){

            die('fallo al tratar con mysql: ('. $this->conexion->connect_errno.')');

        }
    }
    
    public function cerrar(){

        $this -> conexion-> close();

    }
    public function login($usuario, $password){

        $this -> usuario = $usuario;
        $this -> password = $password;
        $query = "select IdUser, Email, UserType, Password from users where Email = '".$this->usuario."'and Password = '".$this->password."'";

        $consulta = $this->conexion->query($query);

        if($row = mysqli_fetch_array($consulta)){
            session_start();
            $_SESSION['estado'] = 'Autenticado';

            $_SESSION['id'] = $row['IdUser'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['UserType'] = $row['UserType'];
            
            echo 'Has iniciado Sesion';
            echo $_SESSION['id'];
            echo $_SESSION['email'];
            echo $_SESSION['UserType'];

            header("location: ../index.php");
        }
        else{
            echo 'Usuario o Contraseña incorrectos';
        }  
    }
}
?>