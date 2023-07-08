<html>
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
</style>
<script language="Javascript" type="text/javascript">
function back()
{
window.location="homepage.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Result<br></div>
	<form action="grade.php" method="post">
	<div class="div2">Enter Batch <input class="a" type="text" name="t1"><br><br>
	Enter Semester <input class="a" type="text" name="t2"><br><br>
	<input class="s" type="button" name="b1" value="Back" onclick="back()">
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
$query1="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND percentage1>='75' AND percentage1<='100'";
$data1=mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
echo"<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Percentage</th>
			<th>Batch</th>
			<th>Semester</th>
			<th>Grade</th>
		</tr>";
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
			<td>Distinction</td>
		</tr>";
	}
}
$query2="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND percentage1>='65' AND percentage1<'75'";
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
			<td>".$result1['seatno1']."</td>
			<td>".$result1['percentage1']."</td>
			<td>".$result1['batch1']."</td>
			<td>".$result1['semester1']."</td>
			<td>First class</td>
		</tr>";
	}
}
$query3="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND percentage1>='40' AND percentage1<'65'";
$data3=mysqli_query($conn,$query3);
$total3=mysqli_num_rows($data3);
if($total3!=0)
{
	while($result1=mysqli_fetch_assoc($data3))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['percentage1']."</td>
			<td>".$result1['batch1']."</td>
			<td>".$result1['semester1']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query4="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND percentage1=''";
$data4=mysqli_query($conn,$query4);
$total4=mysqli_num_rows($data4);
if($total4!=0)
{
	while($result1=mysqli_fetch_assoc($data4))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['percentage1']."</td>
			<td>".$result1['batch1']."</td>
			<td>".$result1['semester1']."</td>
			<td>Fail</td>
		</tr>";
	}
}
$query5="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND percentage2>='75' AND percentage2<='100'";
$data5=mysqli_query($conn,$query5);
$total5=mysqli_num_rows($data5);
if($total5!=0)
{
	while($result1=mysqli_fetch_assoc($data5))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['percentage2']."</td>
			<td>".$result1['batch2']."</td>
			<td>".$result1['semester2']."</td>
			<td>Distinction</td>
		</tr>";
	}
}
$query6="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND percentage2>='65' AND percentage2<'75'";
$data6=mysqli_query($conn,$query6);
$total6=mysqli_num_rows($data6);
if($total6!=0)
{
	while($result1=mysqli_fetch_assoc($data6))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['percentage2']."</td>
			<td>".$result1['batch2']."</td>
			<td>".$result1['semester2']."</td>
			<td>First class</td>
		</tr>";

	}
}
$query7="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND percentage2>='40' AND percentage2<'65'";
$data7=mysqli_query($conn,$query7);
$total7=mysqli_num_rows($data7);
if($total7!=0)
{
	while($result1=mysqli_fetch_assoc($data7))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['percentage2']."</td>
			<td>".$result1['batch2']."</td>
			<td>".$result1['semester2']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query8="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND percentage2=''";
$data8=mysqli_query($conn,$query8);
$total8=mysqli_num_rows($data8);
if($total8!=0)
{
	while($result1=mysqli_fetch_assoc($data8))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['percentage2']."</td>
			<td>".$result1['batch2']."</td>
			<td>".$result1['semester2']."</td>
			<td>Fail</td>
		</tr>";
	}
}
$query9="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND percentage3>='75' AND percentage3<='100'";
$data9=mysqli_query($conn,$query9);
$total9=mysqli_num_rows($data9);
if($total9!=0)
{
	while($result1=mysqli_fetch_assoc($data9))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['percentage3']."</td>
			<td>".$result1['batch3']."</td>
			<td>".$result1['semester3']."</td>
			<td>Distinction</td>
		</tr>";
	}
}
$query10="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND percentage3>='65' AND percentage3<'75'";
$data10=mysqli_query($conn,$query10);
$total10=mysqli_num_rows($data10);
if($total10!=0)
{
	while($result1=mysqli_fetch_assoc($data10))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['percentage3']."</td>
			<td>".$result1['batch3']."</td>
			<td>".$result1['semester3']."</td>
			<td>First class</td>
		</tr>";

	}
}
$query11="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND percentage3>='40' AND percentage3<'65'";
$data11=mysqli_query($conn,$query11);
$total11=mysqli_num_rows($data11);
if($total11!=0)
{
	while($result1=mysqli_fetch_assoc($data11))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['percentage3']."</td>
			<td>".$result1['batch3']."</td>
			<td>".$result1['semester3']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query12="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND percentage3=''";
$data12=mysqli_query($conn,$query12);
$total12=mysqli_num_rows($data12);
if($total12!=0)
{
	while($result1=mysqli_fetch_assoc($data12))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['percentage3']."</td>
			<td>".$result1['batch3']."</td>
			<td>".$result1['semester3']."</td>
			<td>Fail</td>
		</tr>";
	}
}
$query13="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND percentage4>='75' AND percentage4<='100'";
$data13=mysqli_query($conn,$query13);
$total13=mysqli_num_rows($data13);
if($total13!=0)
{
	while($result1=mysqli_fetch_assoc($data13))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['percentage4']."</td>
			<td>".$result1['batch4']."</td>
			<td>".$result1['semester4']."</td>
			<td>Distinction</td>
		</tr>";
	}
}
$query14="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND percentage4>='65' AND percentage4<'75'";
$data14=mysqli_query($conn,$query14);
$total14=mysqli_num_rows($data14);
if($total14!=0)
{
	while($result1=mysqli_fetch_assoc($data14))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['percentage4']."</td>
			<td>".$result1['batch4']."</td>
			<td>".$result1['semester4']."</td>
			<td>First class</td>
		</tr>";
	}
}
$query15="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND percentage4>='40' AND percentage4<'65'";
$data15=mysqli_query($conn,$query15);
$total15=mysqli_num_rows($data15);
if($total15!=0)
{
	while($result1=mysqli_fetch_assoc($data15))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['percentage4']."</td>
			<td>".$result1['batch4']."</td>
			<td>".$result1['semester4']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query16="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND percentage4=''";
$data16=mysqli_query($conn,$query16);
$total16=mysqli_num_rows($data16);
if($total16!=0)
{
	while($result1=mysqli_fetch_assoc($data16))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['percentage4']."</td>
			<td>".$result1['batch4']."</td>
			<td>".$result1['semester4']."</td>
			<td>Fail</td>
		</tr>";
	}
}
$query17="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND percentage5>='75' AND percentage5<='100'";
$data17=mysqli_query($conn,$query17);
$total17=mysqli_num_rows($data17);
if($total17!=0)
{
	while($result1=mysqli_fetch_assoc($data17))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['percentage5']."</td>
			<td>".$result1['batch5']."</td>
			<td>".$result1['semester5']."</td>
			<td>Distinction</td>
		</tr>";
	}
}
$query18="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND percentage5>='65' AND percentage5<'75'";
$data18=mysqli_query($conn,$query18);
$total18=mysqli_num_rows($data18);
if($total18!=0)
{
	while($result1=mysqli_fetch_assoc($data18))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['percentage5']."</td>
			<td>".$result1['batch5']."</td>
			<td>".$result1['semester5']."</td>
			<td>First class</td>
		</tr>";
	}
}
$query19="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND percentage5>='40' AND percentage5<'65'";
$data19=mysqli_query($conn,$query19);
$total19=mysqli_num_rows($data19);
if($total19!=0)
{
	while($result1=mysqli_fetch_assoc($data19))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['percentage5']."</td>
			<td>".$result1['batch5']."</td>
			<td>".$result1['semester5']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query20="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND percentage5=''";
$data20=mysqli_query($conn,$query20);
$total20=mysqli_num_rows($data20);
if($total20!=0)
{
	while($result1=mysqli_fetch_assoc($data20))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['percentage5']."</td>
			<td>".$result1['batch5']."</td>
			<td>".$result1['semester5']."</td>
			<td>Fail</td>
		</tr>";
	}
}
$query21="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND percentage6>='75' AND percentage6<='100'";
$data21=mysqli_query($conn,$query21);
$total21=mysqli_num_rows($data21);
if($total21!=0)
{
	while($result1=mysqli_fetch_assoc($data21))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['percentage6']."</td>
			<td>".$result1['batch6']."</td>
			<td>".$result1['semester6']."</td>
			<td>Distinction</td>
		</tr>";
	}
}
$query22="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND percentage6>='65' AND percentage6<'75'";
$data22=mysqli_query($conn,$query22);
$total22=mysqli_num_rows($data22);
if($total22!=0)
{
	while($result1=mysqli_fetch_assoc($data22))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['percentage6']."</td>
			<td>".$result1['batch6']."</td>
			<td>".$result1['semester6']."</td>
			<td>First class</td>
		</tr>";
	}
}
$query23="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND percentage6>='40' AND percentage6<'65'";
$data23=mysqli_query($conn,$query23);
$total23=mysqli_num_rows($data23);
if($total23!=0)
{
	while($result1=mysqli_fetch_assoc($data23))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['percentage6']."</td>
			<td>".$result1['batch6']."</td>
			<td>".$result1['semester6']."</td>
			<td>Second class</td>
		</tr>";
	}
}
$query24="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND percentage6=''";
$data24=mysqli_query($conn,$query24);
$total24=mysqli_num_rows($data24);
if($total24!=0)
{
	while($result1=mysqli_fetch_assoc($data24))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['percentage6']."</td>
			<td>".$result1['batch6']."</td>
			<td>".$result1['semester6']."</td>
			<td>Fail</td>
		</tr>";
	}
}
}
echo"</table></div>";
?>
</center></body></html>