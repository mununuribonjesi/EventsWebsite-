<?php
class Events extends dbh
{
    protected function event()
    {
        $sql = "SELECT * FROM Events";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        
        if ($numRows > 0 )
            {
                 while($row = $result -> fetch_assoc())
                    {
                        $data[] = $row;
                    }
                        return $data;
             }   
    }
}
?>

