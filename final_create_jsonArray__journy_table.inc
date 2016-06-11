<?php

class path_history
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'BoatLocator';

    function history($id,$date)
    {

        $connection = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        $query = "SELECT full_path_details FROM `journy` WHERE `boat_id`='$id' && `started_date` ='$date' ";
        $connection->query($query);

        if ($result = mysqli_query($connection, $query)) {
            $row = mysqli_fetch_assoc($result);
        }
        return ($row["full_path_details"]);
    }
}

/*
$hello =new path_history();
$par1 = "TEST";
$par2 = "2016-06-4";
$data =  ($hello->history($par1,$par2));
*/
