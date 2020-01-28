<!DOCTYPE html>
<html>
<head>
<title> Bestsellers </title>
<style>
 body {
	 background-image: url("5.jpg");
     background-size: cover;
 }

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
.text {
	 -webkit-text-stroke-width: 0.2px;
     -webkit-text-stroke-color: black;
    }
</style>
</head>
<body>

<font color="white" size="6"><center><h1>Bestsellers</h1></center></font>

 <div class="text">
 <form><input type="button" onclick="window.location.href = 'bookstore.php';" value="Home"/></form>
 <b>
<font color="white" size="5">
<div class="row">
  <div class="column">
    <img src="girl.jpg" alt="Chetan Bhagat" style="width:80%">
	<div class="bottom-left">One Indian Girl</div>
  </div>
  <div class="column">
    <img src="half.jpg" alt="Durjoy Datta" style="width:80%">
	<div class="bottom-left">Half Girlfriend</div>
  </div>
  <div class="column">
    <img src="notebook.jpg" alt="Nikita Singh" style="width:80%">
	<div class="bottom-left">The Notebook</div>
  </div>
</div>

<div class="row">
  <div class="column">
    <img src="perfect.jpg" alt="Preety Shenoy" style="width:80%">
	<div class="bottom-left">The Perfect Us</div>
  </div>
  <div class="column">
    <img src="wedding.jpg" alt="Nicholas Sparks" style="width:80%">
	<div class="bottom-left">The Wedding</div>
  </div>
    <div class="column">
    <img src="room.jpg" alt="Nicholas Sparks" style="width:80%">
	<div class="bottom-left">The Girl in Room 105</div>
  </div>
  </div></font></b>

</div></div>

</body>
</html>
