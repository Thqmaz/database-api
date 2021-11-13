<?php
require './api/config/Database.php';
class Access
{
    function __construct($dbConn)
    {
        $this->db = $dbConn;
    }

    function validateAPIkey($key)
    {
        $sql = "SELECT `apikey` FROM `access` WHERE `apikey` = '$key'";
        $result = $this->db->query($sql);
        $num = $result->num_rows;
        if ($num > 0) {
            $validate = true;
        } else {
            $validate = false;
        }
        return $validate;
    }
}