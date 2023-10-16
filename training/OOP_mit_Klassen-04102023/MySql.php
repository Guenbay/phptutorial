<?php

class Mysql
{
    //Eigenschaften
    private $conn;
    //Funktionen bzw. Methoden

    function __construct()
    {
        $serverName='localhost';
        $userName='root';
        $password='';
    
        $this->conn=mysqli_connect($serverName,$userName,$password);
        if(!$this->conn)
            {
                die('There is a problem connection'.mysqli_connect_error());
            }
    
        $this->conn->select_db("studium");
        
    }

    public function read($sql)
    {
        //lesen
        $vorhandeneStudenten = $this->conn->query($sql);
        return $vorhandeneStudenten;
    }
    
    public function create($res, $art)
    {
        //erstellen
        if ($art == "student")
        {
            if(isset($_POST["vorname"]))
            $resStudent= $this->conn->query($res);
            return $resStudent;
        }
        
        if ($art == "kurs")
        {
            if(isset($_POST["kursname"]))
            $resKurs = $this->conn->query($res);
            return $resKurs;
        }
        
    }

    public function update ()
    {
        //bearbeiten
    }

    public function delete($del)
    {
        //löschen
        if(isset($_POST["id"]))
            //$studentLoeschen = $this->conn->query("DELETE FROM studenten WHERE studenten.id =".$_POST["id"]);
            $studentLoeschen = $this->conn->query($del);
            return $studentLoeschen;
        
    }


}