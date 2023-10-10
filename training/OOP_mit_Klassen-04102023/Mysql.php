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
        //select, select where
        $vorhandeneStudenten = $this->conn->query($sql);
        $row= $vorhandeneStudenten->fetch_assoc();


        $res = $this->conn->query($sql);
        if(!$data = $res->fetch_assoc())
            {
                die("Die ID ist falsch oder existiert nicht.");
            }

        return $data;
    }

    public function delete($res)
    {
        //löschen
        foreach ($_POST as $key => $value) 
        {
            if ($key == "save") continue;
        
           $res = $this->conn->query("DELETE FROM studenten WHERE studenten.martnummer =".$key);

        }
        return $res;
    }

    public function update($update)
    {
        //bearbeiten
        
            $martnummer = $_POST['martnummer'];
            $vorname = $_POST['vorname'];
            $nachname = $_POST['nachname'];
           
            $update = $this->conn->query("UPDATE studenten SET martnummer='$martnummer', vorname='$vorname', nachname='$nachname' WHERE martnummer='$martnummer'");
            
            if ($update)
            {
                echo "\nData Updated in Database- Reloading Page in 3 sec.\n ";
           //     sleep(5);
                header('Refresh: 3; url=index.php');
            }
            else 
            {
                echo "Data could not be Updated";
            }



    }

    public function create($add)
    {

        $resStudent = $this->conn->query($add);
        return $resStudent;

    }


}
?>