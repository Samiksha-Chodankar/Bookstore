<!DOCTYPE html>
<html>
<head>
<title> Authors </title>
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

<font color="white" size="6"><center><h1>Authors</h1></center></font>

<form><input type="button" onclick="window.location.href = 'bookstore.php';" value="Home"/></form>

<div class="text"><font color="white" size="5">
<div class="row">
  <div class="column">
    <img src="chetan.jpg" alt="Chetan Bhagat" style="width:80%">
	<div class="bottom-left">Chetan Bhagat</div>
  </div>
  <div class="column">
    <img src="durjoy.jpg" alt="Durjoy Datta" style="width:80%">
	<div class="bottom-left">Durjoy Datta</div>
  </div>
  <div class="column">
    <img src="nikita.jpg" alt="Nikita Singh" style="width:80%">
	<div class="bottom-left">Nikita Singh</div>
  </div>
</div>

<div class="row">
  <div class="column">
    <img src="shenoy.jpg" alt="Preety Shenoy" style="width:80%">
	<div class="bottom-left">Preety Shenoy</div>
  </div>
  <div class="column">
    <img src="sparks.jpg" alt="Nicholas Sparks" style="width:80%">
	<div class="bottom-left">Nicholas Sparks</div>
  </div>
 
  </div></div></font></div>

</body>
</html>
