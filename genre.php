<!DOCTYPE html>
<html>
<head>
<title> Genre </title>
<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
.bottom-right {
  position: absolute;
  bottom: 8px;
  right: 16px;
}
</style>
</head>
<body>

<h2>Genre</h2>
 <form>
         <input type="button" onclick="window.location.href = 'bookstore.php';" value="Home"/>
      </form>

<div class="row">
  <div class="column">
    <img src="comedy.png" alt="Chetan Bhagat" style="width:80%">
	<div class="bottom-left">Comedy</div>
  </div>
  <div class="column">
    <img src="th.jpg" alt="Durjoy Datta" style="width:80%">
	<div class="bottom-left">Thriller</div>
  </div>
  <div class="column">
    <img src="romance.jpg" alt="Nikita Singh" style="width:80%">
	<div class="bottom-left">Romance</div>
  </div>
  <div class="column">
    <img src="horror.jpg" alt="Nikita Singh" style="width:80%">
	<div class="bottom-left">Horror</div>
  </div>
</div>


</div>

</body>
</html>
