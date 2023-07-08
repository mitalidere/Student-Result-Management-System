<html>
<script>
function myfunction()
{
 	document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event)
{
	if (!event.target.matches('.dropbtn'))
	{
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++)
		{
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show'))
			{
				openDropdown.classList.remove('show');
			}
		}
	}
}
</script>
<style>
*
{
	margin: 0;
	padding: 0;
	-webkit-box-sizing:border-box;
}
body
{
	background-image:url("GPR blur22.jpg");
	background-repeat:no-repeat;
	background-size:100%;
}
.menu-area li a
{
	text-decoration:none;
	color:black;
	letter-spacing: 1px;
	text-transform: uppercase;
	display: block;
	padding: 0 25px;
	font-size: 17px;
	line-height: 30px;
	position: relative;
	z-index: 1;
	border-radius:10px 10px 10px 10px;

}
.menu-area li
{
	list-style: none;
	display: inline-block;
}
.custom-padding
{
	padding-top: 25px;
	width: 1535px;
	height: 80px;
	background-color:rgb(255,255,255,0.7);
}
.nav
{
	position: relative;
	padding: 10px 20px 10px 10px;
	text-align: right;
	z-index: 1;
	background: #333;
}
.menu-area li a:hover
{
	background: tomato;
	color: #fff;
}
.div1
{
	border-radius:15px 15px 0px 0px;
	width:700px;
	background-color:rgb(0,0,0,0.8);
	color:white;
	padding:40px 0px 40px 0px;
	text-align:center;
}
.div2
{
	width:700px;
	background-color:rgb(255,255,255,0.7);
	color:black;
	padding:20px 0px 20px 0px;
	font-size:35px;
}
.div3
{
	border-radius:0px 0px 15px 15px;
	width:700px;
	background-color:rgb(255,255,255,0.7);
	color:black;
	padding:0px 0px 20px 0px;
	font-size:20px;
}
.dropdown
{
	position: relative;
	display: inline-block;
}
.dropdown-content
{
	display: none;
	position: absolute;
	background-color: #f1f1f1;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	border-radius:10px 10px 10px 10px;

}
.dropdown-content a
{
	color: black;
	padding: 12px 16px;
}
.show
{
	display: block;
}
.dropbtn
{
	border-radius:5px;
	padding:0 30px;
	text-transform: uppercase;
	background-color:rgb(255,255,255,0);
	border:none;
	font-size: 17px;
	font-family: serif;
	letter-spacing: 1px;
}
</style>
<body>
<div class="custom-padding">
	<nav>
		<ul class="menu-area">
		<li><button onclick="myfunction()" class="dropbtn">Teacher's login</button>
		<div id="myDropdown" class="dropdown-content">
		<a href="teacherlogin1.php">Insert/Update Result</a>
		<a href="teacherlogin2.php">Delete</a>
		<a href="teacherlogin3.php">Register</a></li>
		<li><a href="search.php">Student info</a></li>
		<li><a href="marksheets.php">Marksheets</a></li>
		<li><a href="grade.php">Student Result Analysis</a></li>
		<li><a href="topperslist.php">Toppers List</a></li>
		<li><a href="ktlist.php">kt list</a></li>
		</ul>
	</nav>
</div>
<center><br><br><br><br><br><div class="div1">
<img src="GPR logo.jpg"><br></div>
<div class="div2">Government Polytechnic Ratnagiri</div>
<div class="div3">Near Thiba Palace, Ratnagiri, Maharashtra 415612</div></center>
</body>
</html>