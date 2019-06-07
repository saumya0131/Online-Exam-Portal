<?php

include "../class/users.php";
$cat=new users;
$category=$cat->cat_shows();
//print_r($category);
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container"><br>
<?php
if(isset($_GET['msg']) && !empty($_GET['msg']))
{
	echo "<p><mark>data inserted successfully</mark></p>";
}
	
?>
  <form method="post" action="add_quiz.php">
  <h2>Admin Panel</h2>
    <div class="form-group"><br>
      <label for="text">Question:</label>
      <input type="text" class="form-control" name="qus" placeholder="Enter question">
    </div>
	
	<div class="form-group">
      <label for="text">option 1:</label>
      <input type="text" class="form-control"  name="op1" placeholder="Enter option 1">
    </div>
	
	<div class="form-group">
      <label for="text">option 2:</label>
      <input type="text" class="form-control"  name="op2" placeholder="option 2">
    </div>
	
	<div class="form-group">
      <label for="text">option 3:</label>
      <input type="text" class="form-control" name="op3"  placeholder="option 3">
    </div>
	
	
	<div class="form-group">
      <label for="text">option 4:</label>
      <input type="text" class="form-control"  name="op4" placeholder="option 4">
    </div>
	
	<div class="form-group">
      <label for="text">answer:</label>
      <input type="text" class="form-control"  name="ans" placeholder="answer">
    </div>
    <div class="form-group">

	<select class="form-control" id="sell" name="cat">
	<option value="" >choose category</option>
	<?php
	foreach($category as $c)
	{
		echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
	}
	?>
	</select><br>
    
    <button type="submit" class="btn btn-default">Submit</button><br>
  </form>
</div>







    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
