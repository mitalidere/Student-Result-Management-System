<html>
<head>
<title></title>
<head>
<style>
body
{
background-image:url("GPR blur22.jpg");
background-repeat:no-repeat;
background-size:100%;
}
.div1
{
border-radius:15px 15px 0px 0px;
width:600px;
background-color:rgb(0,0,0,0.8);
color:white;
padding:10px 0px 10px 0px;
text-align:center;
font-size:35px;
}
.div2
{
border-radius:0px 0px 15px 15px;
width:600px;
background-color:rgb(0,0,0,0.6);
color:white;
padding:40px 0px 40px 0px;
}
.s
{
line-height:25px;
border-radius:5px;
padding:0 20px;
background-color:lightblue;
}
</style>
<script language="Javascript" type="text/javascript">
function fs()
{
window.location="studentlogin1.php";

}
function ss()
{
window.location="studentlogin2.php";
}
function back()
{
window.location="teacherlogin1.php";
}
</script>
</head>
<body>
<br><br><br><br><br><center><div class="div1">Select Semester<br></div></center>
<center>
<div class="div2">
<input class="s" type="button" name="b1" value="First Semester" onclick="fs()">
<input class="s" type="button" name="b2" value="Second Semester" onclick="ss()"><br><br>
<input class="s" type="button" name="b3" value="Back" onclick="back()">
</center>
</div>
</center>
</body>
</html>