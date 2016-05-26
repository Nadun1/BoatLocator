<?php

class data_retrive_tmptable
{
    public $host = 'localhost';
    public $user = 'root';
    public $pass = '';
    public $db = 'BoatLocator';



    public $tbl_name="10001";
    public $return_arr = array();

    function get_data(){
        $connection = mysqli_connect($this->host, $this->user,$this->pass,$this->db );
        $sect_data_query = "SELECT `latitude`,`longitude` FROM `$this->tbl_name`";

        if ($result = mysqli_query($connection,$sect_data_query)) {

            while ($row = mysqli_fetch_assoc($result)) {
                $row_array['lat'] = floatval($row['latitude']);
                $row_array['lng'] = floatval($row['longitude']);

                array_push($this->return_arr, $row_array);
            }
        }

        echo json_encode($this->return_arr);
    }
}
?>
