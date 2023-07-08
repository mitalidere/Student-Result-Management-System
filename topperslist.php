<html>
<script>
	function back()
{
window.location="homepage.php";
}
</script>
<style>
body
{
		background-image:url("GPR blur22.jpg");
		background-repeat:no-repeat;
		background-size:100%;
}
.a
{
line-height:25px;
border-radius:5px;
padding:0 30px;
}
.s
{
line-height:25px;
border-radius:5px;
padding:0 20px;
background-color:skyblue;
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
		font-size:20px;
}
.div3
{
		border-radius:15px 15px 15px 15px;
		width:800px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;

}
</style>
<body>
	<br><br><br><br><br><center><div class="div1">Toppers List<br></div>
	<form action="topperslist.php" method="post">
	<div class="div2">Enter Batch <input class="a" type="text" name="t1"><br><br>
	Enter Semester <input class="a" type="text" name="t2"><br><br>
	<input class="s" type="button" name="b2" value="Back" onclick="back()">
	<input class="s" type="submit" name="b1" value="Search"></div>
	</form>
	<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="project";
if(isset($_POST['b1']))
{
$t1=$_POST['t1'];
$t2=$_POST['t2'];
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
echo"<div class=div3>";
echo"<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Percentage</th>
			<th>Batch</th>
			<th>Semester</th>
		</tr>";
$query1="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' ORDER BY percentage1 DESC LIMIT 3";
$data1=mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
if($total1!=0)
{
	while($result1=mysqli_fetch_assoc($data1))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['percentage1']."</td>
			<td>".$result1['batch1']."</td>
			<td>".$result1['semester1']."</td>
		</tr>";
	}
}
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query2="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' ORDER BY percentage2 DESC LIMIT 3";
$data2=mysqli_query($conn,$query2);
$total2=mysqli_num_rows($data2);
if($total2!=0)
{
	while($result1=mysqli_fetch_assoc($data2))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['percentage2']."</td>
			<td>".$result1['batch2']."</td>
			<td>".$result1['semester2']."</td>
		</tr>";
	}
}
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query3="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' ORDER BY percentage3 DESC LIMIT 3";
$data3=mysqli_query($conn,$query3);
$total3=mysqli_num_rows($data3);
if($total3!=0)
{
	while($result1=mysqli_fetch_assoc($data3))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['percentage3']."</td>
			<td>".$result1['batch3']."</td>
			<td>".$result1['semester3']."</td>
		</tr>";
	}
}
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query4="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' ORDER BY percentage4 DESC LIMIT 3";
$data4=mysqli_query($conn,$query4);
$total4=mysqli_num_rows($data4);
if($total4!=0)
{
	while($result1=mysqli_fetch_assoc($data4))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['percentage4']."</td>
			<td>".$result1['batch4']."</td>
			<td>".$result1['semester4']."</td>
		</tr>";
	}
}
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query5="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' ORDER BY percentage5 DESC LIMIT 3";
$data5=mysqli_query($conn,$query5);
$total5=mysqli_num_rows($data5);
if($total5!=0)
{
	while($result1=mysqli_fetch_assoc($data5))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['percentage5']."</td>
			<td>".$result1['batch5']."</td>
			<td>".$result1['semester5']."</td>
		</tr>";
	}
}
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query6="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' ORDER BY percentage6 DESC LIMIT 3";
$data6=mysqli_query($conn,$query6);
$total6=mysqli_num_rows($data6);
if($total6!=0)
{
	while($result1=mysqli_fetch_assoc($data6))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['percentage6']."</td>
			<td>".$result1['batch6']."</td>
			<td>".$result1['semester6']."</td>
		</tr>";
	}
}
}
echo"</table></div>";
?>
</center></body></html>
