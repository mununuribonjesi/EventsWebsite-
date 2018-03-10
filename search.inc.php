<?php

class searchForm extends dbh
{
    protected function searchArtist()
    {    
        $search = mysqli_real_escape_string($this->connect(),$_POST['search']);
        $address = mysqli_real_escape_string($this->connect(),$_POST['address']);
        $date =  mysqli_real_escape_string($this->connect(),$_POST['date']);
    
        $sql = "SELECT * FROM Events WHERE Artist like'%$search%'";
        $result = mysqli_query($this->connect(),$sql);
        
        $queryResult = mysqli_num_rows($result);

        if ($queryResult>0)
        {
                while ($row = mysqli_fetch_assoc($result))

                {
                    $data[] = $row;

                }

                return $data;
            }
        }
    }
        
?>