<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content ="width-device-width,initial-scale=1,user-scalable=yes" />
<head>
<title> Home  </title>

<style>
body{
   background-image: url("5.jpg");
   background-color: White;
   background-repeat: no-repeat;
   background-size: cover;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: BLACK;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: Grey;
}
.active {
     background-color: #4CAF50;
    }
.box{
	background: rgba(255,255,255,0.6);
	border: 1px solid white;
	padding: 40px;
	margin: 40px;
	border-radius: 5px;
}
.text {
	-webkit-text-stroke-width: 0.5px;
	-webkit-text-stroke-color: black;
}
.column {
	float: left;
	width: 50%;
}
.row:after{
	content:"";
	display: table;
	clear:both;
}
.homepage
{
	background: BLACK;
	color: white;
	font-size: 30px;
	width: 100%
}

input[type=password] {
	width:40%;
	padding:12px 20px;
	margin:8px 0;
	border:1px solid black;
	border-radius:4px;
	box-sizing: border-box;
}
input[type=text] {
	width:40%;
	padding:12px 20px;
	margin:8px 0;
	border:1px solid black;
	border-radius:4px;
	box-sizing: border-box;
}
input[type=submit] {
	width=20%;
	background-color: red;
	color:black;
	padding:12px 20px;
	margin: 8px 0;
	border:none;
	border-radius:4px;
	cursor: pointer;
}
</style>
</head>
<body>
<ul>
  <li><a class="active" href="bookstore.php">Home</a></li>
  <li><a href="bestseller.php">Bestsellers</a></li>
  <li><a href="authors.php">Authors</a></li>
  <li><a href="genre.php">Genre</a></li>
  
</ul>
<header>
<font color="white" size="5" face="Arial"><u><center><h1>Crossread Bookstore</h1></center></u></font>

<font color="BLACK" size="5" face="Arial"><b><center><div class="box">

<div class="text">
<form><div class="row">
<div class="column">
<label for="email">Email:</label>
<input type="text" id="email" name="Email">
</div>
<div class="column">
<label for="pw">Password:</label>
<input type="password" id="pw" name="Password">
</div>
</div>
<br><br>
<form><div class="row">
<div class="column">
<label for="lang">Language:</label>
<input type="text" id="lang" name="Language">
</div>
<div class="column">
<label for="gen">Genre:</label>
<input type="text" id="gen" name="Genre">
</div></div>
<input type="submit" value="Sign in">
</form></div></center></b></font>

<div class="homepage">
	<center><b>Address:Panjim, Goa. Email:onlinebookstore@yahoo.com</b></center>
	</div>
</form></div></center>

<br><br><br><hr>

<font color="white" face="Bookman Old Style" size="2"><footer>&copy; Created by Samiksha Chodankar</footer></font>
</body>
</html>