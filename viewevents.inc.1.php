<?php
class viewEvents extends Events
{
    public function showEvent()
    {
        
        $datas = $this->event();
       
        foreach($datas as $data)
        {  
           echo 
'
      <div class="carousel-item col-sm-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="../Artists/'.$data["Description"].'.jpg" alt="Card image cap">
          <div class="card-body">
            <p> '.$data["Artist"].'</p>
            </p> <p> Venue:
            '.$data["Venue"].  '
        <p> Location:'.$data["Location"].' </p>
             <p> Date:'.$data["Date"].'
           Age:'.$data["Age"].
            '  Start:'. $data["StartTime"].' 
      End:'.$data["EndTime"].'</p> 
            <p> 
            price:'.$data["Price"].'</p>
            
            
                          <form method="post" action="../LogedOut/cart.php?action=add&id='.$data['EventID'].'">
                          <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value='.$data['Artist'].'" />
                            <input type="hidden" name="price" value="'.$data['Price'].'" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"value="Add to Cart" />
                        </form>
   

    
          </div>
        </div>
      </div>';
            
            
         
        }
    }

}
?>
