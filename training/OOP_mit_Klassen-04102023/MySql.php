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
        
        if ($art == "fach")
        {
            if(isset($_POST["kurscode"]))
            $resFach = $this->conn->query($res);
            return $resFach;
        }

        if ($art == "note")
        {
            if(isset($_POST["note"]))
            $resNote = $this->conn->query($res);
            return $resNote;
        }
    }

    public function update ($res)
    {
        //bearbeiten
        if (isset($_POST['id']) && $_POST['send'])
        {
            $update = $this->conn->query($res);
            return $update;
        }
    }
    

    public function delete($del)
    {
        //löschen
        if(isset($_POST["id"]))
            //$studentLoeschen = $this->conn->query("DELETE FROM studenten WHERE studenten.id =".$_POST["id"]);
            $studentLoeschen = $this->conn->query($del);
            return $studentLoeschen;
        
    }


    //public function durchschnitt($sql)
    //{
    //    //durchschnitt berechnen
    //    //Noten durch anzahl der Fächer
    //    $noten = $this->conn->query($sql);
    //    
    //    return $noten;
    //    
    //}

    function average($a, $b) 
    {

        $summe = $a / $b; 
        return $summe;
    } 
    

}
