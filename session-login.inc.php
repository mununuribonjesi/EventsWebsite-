
<?php 

$_SESSION['count'] =0;
if($_SESSION['count'] > 0 && $_SESSION['count'] <= 3 )
{ echo "<p class=\"error\">Sorry incorrect</p>";
}
if($_SESSION['count'] > 3){
echo "<p class=\"error\">Too many attempts</p>"; }else{
}
{
?>

<div class="modal fade" id="popUpWindow">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- header -->
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>

      <h3 class="modal-title">LogIn</h3>
    </div>
    <!-- body -->
    <div class="modal-header">
      <form role="form" method = "post" action="http://homepages.shu.ac.uk/~b6016268/banks/includes/checklogin.php">
        <div class="form-group" >
          <input type="username" name = "username" class="form-control" placeholder="username"/>
          <input type="password" name = "password" class="form-control" placeholder="Password" />
        </div>
 <div class="modal-footer">
<button class="btn btn-primary btn-block">Log In</button>
    </div>
    
                  
      </form>
    </div>
    <!-- footer -->

  </div>
</div>
</div>

</div>
<?php 
// closing curly 
}
?>
