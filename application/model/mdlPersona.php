<?php
//CREAR LA CLASE PRINCIPAL
class mdlPersona{
    //CREAR LOS ATRIBUTOS PRINCIPALES
    public $idPersona;
    public $documento;
    public $idTipoDocumento;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $direccion;
    public $email;
    public $fechaNacimiento;
    public $db;

//crear metodo fijar datos


    public funtion __SET($atributo,$valor){
        $this->$atributo=$valor;
    }


    //coneccion

    public function __construct8($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Error al conectar");
        }
    }
    //METODO PARA GUARDAR EL REGISTRO PARA LA CONSULTA
    public function registrarPersona(){
        $sql = "INSER INTO personas(Documento, Nombres, Apellidos, Email, Telefono, Direccion, Fecha_Nacimiento, idTipoDocuemnto)VALUES
        (?,?,?,?,?,?,?,?)";

        //CREAR VARIABLE PARA PREPARASR LA CONSILTA
        $stm = $this->db->prepare($sql);
        $stm -> Dindparam(1, $this-> docuemntos);
        $stm -> Dindparam(1, $this-> nombres);
        $stm -> Dindparam(1, $this-> apellidos);
        $stm -> Dindparam(1, $this-> email);
        $stm -> Dindparam(1, $this-> telefono);
        $stm -> Dindparam(1, $this-> );
        $stm -> Dindparam(1, $this-> docuemntos);
        $stm -> Dindparam(1, $this-> docuemntos);




    }
}




?>

