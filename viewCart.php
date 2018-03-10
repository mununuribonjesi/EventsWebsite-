<?php
// initializ shopping cart class
include 'Cart.php';
include 'dbconfig.php';
$cart = new Cart;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>



    <style>
    .container{padding: 50px;}
    input[type="number"]{width: 20%;}
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
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
<a class="nav-link" href="viewCart.php">Cart</a>
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





</nav>
<div class="container">
    <h1>Shopping Cart</h1>
    <table class="table">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <tr>
            <td><?php echo $item["Artist"]; ?></td>
            <td><?php echo '$'.$item["Price"].' USD'; ?></td>
            <td><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td><?php echo '$'.$item["subtotal"].' USD'; ?></td>
            <td>
                <a href="cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="glyphicon glyphicon-trash"></i></a>
            </td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>Your cart is empty.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total().' USD'; ?></strong></td>
            <td><a href="checkout.php" class="btn btn-success btn-block">Checkout <i class="glyphicon glyphicon-menu-right"></i></a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
</div>
</body>
</html>