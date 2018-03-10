<?php
class viewSearch extends searchForm
{
    public function searchView()

{   
    $datas = $this->searchArtist();
    foreach($datas as $data)
    {
        echo '  <div class="d-flex justify-content-between">
                <div class="card" style="width: 100rem length: 0rem;">'
                .'<img class="card-img-top" src="../Artists/'.$data["Description"].
                '.jpg" alt="Card image cap">'.'
                <div class="card-body">
                <h4 class="card-title"> <p> Artist:'.$data["Artist"]. 
                '</p> <p> Venue:'.$data["Venue"].  '</p> 
                <p> Location:'.$data["Location"].' </p> <p> Date:'
                .$data["Date"].' </p> 
                <p> Age:'.$data["Age"].' </p> <p> Start:'. 
                $data["StartTime"].' </p> 
                <p> End:'.$data["EndTime"].'</p> </h4></div></div>';
    }
    }
    }
?>



