<?php
session_start();
$Artist_ID = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart'))
{

if(isset($_SESSION['ticket_cart'])){
//keep track of how mnay products are in the shopping cart
$count = count($_SESSION['ticket_cart']);
        
        //create sequantial array for matching array keys to products id's
        $Artist_ID = array_column($_SESSION['ticket_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $Artist_ID)){
        $_SESSION['ticket_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($Artist_ID); $i++){
                if ($Artist_ID[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['ticket_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['ticket_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['ticket_cart'] as $key => $product){
        if ($product['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['ticket_cart'][$key]);
        }
    }
    //reset session array keys so they match with $Artist_ID numeric array
    $_SESSION['ticket_cart'] = array_values($_SESSION['ticket_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<!DOCTYPE html>
<html>
  <head>
<meta charset="UTF-8">
<title>Cart </title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



<link type="text/css" href="../styles.css" rel="stylesheet">   

</head>
<body>


<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
<button class="navbar-toggler" type="button"
data-toggle="collapse" data-target="#nav-content" 
aria-controls="nav-content" aria-expanded="false"
aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="index.html">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="events.php">Events</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cart.php">Cart</a>
</li>

<li class="nav-item">
<a class="nav-link" href="../Logedin/cms/cms.php">CMS</a>
</li>

</ul>
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="btn btn-primary" href="../logic/logout.php" role="button">logout</a>
</li>


</ul>



</nav>

<?php


if(isset($_SESSION['login']))
{ include('../includes/session-logout.inc.php');
}else{ include('../includes/session-login.inc.php');
}

?>


?>
    <body>
        <div class="container">

        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table" style = "margin-top:18px">  
            <tr><th colspan="5"><h3>Order Details</h3></th></tr>   
        <tr>  
             <th width="40%">Product Name</th>  
             <th width="10%">Quantity</th>  
             <th width="20%">Price</th>  
             <th width="15%">Total</th>  
             <th width="5%">Action</th>  
        </tr>  




        <?php   
        if(!empty($_SESSION['ticket_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['ticket_cart'] as $key => $product): 
        ?>  
        <tr>  
           <td><?php echo $product['name']; ?></td>  
           <td><?php echo $product['quantity']; ?></td>  
           <td>£ <?php echo $product['price']; ?></td>  
           <td>£ <?php echo number_format($product['quantity'] * $product['price'], 2); ?></td>  
           <td>
               <a href="cart.php?action=delete&id=<?php echo $product['id']; ?>">
                    <div class="btn-danger">Remove</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($product['quantity'] * $product['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right">£ <?php echo number_format($total, 2); ?></td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['ticket_cart'])):
                if (count($_SESSION['ticket_cart']) > 0):
?>
                             
  
        <form  action="../functions/charge.php" method="POST">
           <input name="total" type="hidden"value="<?php echo $total; ?>">
        <script

      
          src="https://checkout.stripe.com/checkout.js"class="stripe-button"
          data-key="pk_test_r8rYKYySFEUY1JbMdRKRpcl7"
          data-amount= <?php echo ($total *100)?>;
          data-currency="GBP"
          data-name="Banks"
          data-description="Banks"
          data-image="../images/daveeast.jpg"
          data-locale="auto">



        </script>
   
                </form>

             <?php endif; endif; ?>
                     <a href="events.php" style="margin-top:8px" class="btn btn-warning"> Continue Shopping</a>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div>
        </div>
    </body>
</html>
