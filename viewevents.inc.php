<?php
class viewEvents extends Events
{
    public function showEvent()
    {
        
        $datas = $this->event();
       
        foreach($datas as $data)
        {  
            echo '  <div class="d-flex align-items-start flex-column">
            <div class="card" style="width: 100rem length: 0rem;">'
            .'<img class="card-img-top" src="Artists/'.$data["Description"].
            '.jpg" alt="Card image cap">'.'
            <div class="card-body">
            <h4 class="card-title"> <p> Artist:'.  $data["Artist"].
            '</p> <p> Venue:
            '.$data["Venue"].  '</p> 
            <p> Location:'.$data["Location"].' 
            </p> <p> Date:'.$data["Date"].' </p> 
            <p> Age:'.$data["Age"].
            ' </p> <p> Start:'. $data["StartTime"].' </p> 
            <p> End:'.$data["EndTime"].'</p> </h4></div></div>';
        }
    }

}




echo 
'
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="Artists/'.$data["Description"].' alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>';
?>