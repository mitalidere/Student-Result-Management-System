<html>
<style>
body
{
		background-image:url("GPR blur11.jpg");
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
		width:600px;
		background-color:rgb(255,255,255,0.5);
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
	<br><br><br><br><br><center><div class="div1">Kt list<br></div>
	<form action="ktlist.php" method="post">
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
$query1="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND ENG2<='40'";
$data1=mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
if($total1!=0)
{
	?>
		KT in English Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data1))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['ENG2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query2="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND ENG6<='20'";
$data2=mysqli_query($conn,$query2);
$total2=mysqli_num_rows($data2);
if($total2!=0)
{
	?>
		KT in English Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data2))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['ENG6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query3="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND BSC2<='40'";
$data3=mysqli_query($conn,$query3);
$total3=mysqli_num_rows($data3);
if($total3!=0)
{
	?>
		KT in Basic Science Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data3))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['BSC2']."</td>
		</tr>";

	}
echo"</table><br>";
}
$query4="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND BSC6<='40'";
$data4=mysqli_query($conn,$query4);
$total4=mysqli_num_rows($data4);
if($total4!=0)
{
	?>
		KT in Basic Science Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data4))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['BSC6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query5="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND BMS2<='40'";
$data5=mysqli_query($conn,$query5);
$total5=mysqli_num_rows($data5);
if($total5!=0)
{
	?>
		KT in Basic Mathematics Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data5))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['BMS2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query6="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND ICT2<='20'";
$data6=mysqli_query($conn,$query6);
$total6=mysqli_num_rows($data6);
if($total6!=0)
{
	?>
		KT in Fundamentals of ICT Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data6))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['ICT2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query7="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND EGE2<='40'";
$data7=mysqli_query($conn,$query7);
$total7=mysqli_num_rows($data7);
if($total7!=0)
{
	?>
		KT in Engineering Graphics Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data7))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['EGE2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query8="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2' AND WPC2<='40'";
$data8=mysqli_query($conn,$query8);
$total8=mysqli_num_rows($data8);
if($total8!=0)
{
	?>
		KT in Workshop Practice Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data8))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno1']."</td>
			<td>".$result1['WPC2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query9="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND EEC2<='40'";
$data9=mysqli_query($conn,$query9);
$total9=mysqli_num_rows($data9);
if($total9!=0)
{
	?>
		KT in Elements of Electrical Engineering Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data9))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['EEC2']."</td>
		</tr>";

	}
echo"</table><br>";
}
$query10="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND EEC6<='20'";
$data10=mysqli_query($conn,$query10);
$total10=mysqli_num_rows($data10);
if($total10!=0)
{
	?>
		KT in Elements of Electrical Engineering Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data10))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['EEC6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query11="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND AMI2<='40'";
$data11=mysqli_query($conn,$query11);
$total11=mysqli_num_rows($data11);
if($total11!=0)
{
	?>
		KT in Applied Mathematics Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data11))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['AMI2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query12="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND BEC2<='40'";
$data12=mysqli_query($conn,$query12);
$total12=mysqli_num_rows($data12);
if($total12!=0)
{
	?>
		KT in Basic Electronics Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data12))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['BEC2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query13="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND BEC6<='20'";
$data13=mysqli_query($conn,$query13);
$total13=mysqli_num_rows($data13);
if($total13!=0)
{
	?>
		KT in Basic Electronics practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data13))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['BEC6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query14="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND PCI2<='40'";
$data14=mysqli_query($conn,$query14);
$total14=mysqli_num_rows($data14);
if($total14!=0)
{
	?>
		KT in Programmig in 'C' theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data14))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['PCI2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query15="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND PCI6<='20'";
$data15=mysqli_query($conn,$query15);
$total15=mysqli_num_rows($data15);
if($total15!=0)
{
	?>
		KT in Programmig in 'C' practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data15))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['PCI6']."</td>
			</tr>";
	}
echo"</table><br>";
}
$query16="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND BCC2<='20'";
$data16=mysqli_query($conn,$query16);
$total16=mysqli_num_rows($data16);
if($total16!=0)
{
	?>
		KT in Business Communication using Computer practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data16))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['BCC2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query17="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND CPH2<='40'";
$data17=mysqli_query($conn,$query17);
$total17=mysqli_num_rows($data17);
if($total17!=0)
{
	?>
		KT in Computer Peripheral and Hardware Maintenance practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data17))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['CPH2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query18="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2' AND WPD2<='40'";
$data18=mysqli_query($conn,$query18);
$total18=mysqli_num_rows($data18);
if($total18!=0)
{
	?>
		KT in Web Page Designing with HTML practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data18))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno12']."</td>
			<td>".$result1['seatno2']."</td>
			<td>".$result1['WPD2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query19="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND OOP2<='40'";
$data19=mysqli_query($conn,$query19);
$total19=mysqli_num_rows($data19);
if($total19!=0)
{
	?>
		KT in OOP Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data19))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['OOP2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query20="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND OOP6<='20'";
$data20=mysqli_query($conn,$query20);
$total20=mysqli_num_rows($data20);
if($total20!=0)
{
	?>
		KT in OOP Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data20))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['OOP6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query21="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DSU2<='40'";
$data21=mysqli_query($conn,$query21);
$total21=mysqli_num_rows($data21);
if($total21!=0)
{
	?>
		KT in DSU Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data21))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DSU2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query22="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DSU6<='20'";
$data22=mysqli_query($conn,$query22);
$total22=mysqli_num_rows($data22);
if($total22!=0)
{
	?>
		KT in DSU Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data22))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DSU6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query23="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND CGR2<='40'";
$data23=mysqli_query($conn,$query23);
$total23=mysqli_num_rows($data23);
if($total23!=0)
{
	?>
		KT in CGR Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data23))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['CGR2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query24="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND CGR6<='20'";
$data24=mysqli_query($conn,$query24);
$total24=mysqli_num_rows($data24);
if($total24!=0)
{
	?>
		KT in CGR Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data24))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['CGR6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query25="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DMS2<='40'";
$data25=mysqli_query($conn,$query25);
$total25=mysqli_num_rows($data25);
if($total25!=0)
{
	?>
		KT in DMS Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data25))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DMS2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query26="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DMS6<='20'";
$data26=mysqli_query($conn,$query26);
$total26=mysqli_num_rows($data26);
if($total26!=0)
{
	?>
		KT in DMS Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data26))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DMS6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query27="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DTE2<='40'";
$data27=mysqli_query($conn,$query27);
$total27=mysqli_num_rows($data27);
if($total27!=0)
{
	?>
		KT in DTE Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data27))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DTE2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query28="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2' AND DTE6<='20'";
$data28=mysqli_query($conn,$query28);
$total28=mysqli_num_rows($data28);
if($total28!=0)
{
	?>
		KT in DTE Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data28))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno3']."</td>
			<td>".$result1['DTE6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query29="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND JPR2<='40'";
$data29=mysqli_query($conn,$query29);
$total29=mysqli_num_rows($data29);
if($total29!=0)
{
	?>
		KT in JPR Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data29))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['JPR2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query30="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND JPR6<='40'";
$data30=mysqli_query($conn,$query30);
$total30=mysqli_num_rows($data30);
if($total30!=0)
{
	?>
		KT in JPR Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data30))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['JPR6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query31="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND SEN2<='40'";
$data31=mysqli_query($conn,$query31);
$total31=mysqli_num_rows($data31);
if($total31!=0)
{
	?>
		KT in SEN Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data31))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['SEN2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query32="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND SEN6<='20'";
$data32=mysqli_query($conn,$query32);
$total32=mysqli_num_rows($data32);
if($total32!=0)
{
	?>
		KT in SEN Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data32))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['SEN6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query33="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND DCC2<='40'";
$data33=mysqli_query($conn,$query33);
$total33=mysqli_num_rows($data33);
if($total33!=0)
{
	?>
		KT in DCC Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data33))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['DCC2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query34="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND DCC6<='20'";
$data34=mysqli_query($conn,$query34);
$total34=mysqli_num_rows($data34);
if($total34!=0)
{
	?>
		KT in DCC Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data34))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['DCC6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query35="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND MIC2<='40'";
$data35=mysqli_query($conn,$query35);
$total35=mysqli_num_rows($data35);
if($total35!=0)
{
	?>
		KT in MIC Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data35))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['MIC2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query36="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND MIC6<='20'";
$data36=mysqli_query($conn,$query36);
$total36=mysqli_num_rows($data36);
if($total36!=0)
{
	?>
		KT in MIC Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data36))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['MIC6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query37="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2' AND GAD2<='40'";
$data37=mysqli_query($conn,$query37);
$total37=mysqli_num_rows($data37);
if($total37!=0)
{
	?>
		KT in GAD Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data37))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno34']."</td>
			<td>".$result1['seatno4']."</td>
			<td>".$result1['GAD2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query38="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND EST2<='40'";
$data38=mysqli_query($conn,$query38);
$total38=mysqli_num_rows($data38);
if($total38!=0)
{
	?>
		KT in EST Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data38))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['GAD6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query39="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND OSY2<='40'";
$data39=mysqli_query($conn,$query39);
$total39=mysqli_num_rows($data39);
if($total39!=0)
{
	?>
		KT in OSY Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data39))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['OSY2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query40="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND OSY6<='20'";
$data40=mysqli_query($conn,$query40);
$total40=mysqli_num_rows($data40);
if($total40!=0)
{
	?>
		KT in OSY Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data40))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['OSY6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query41="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND AJP2<='40'";
$data41=mysqli_query($conn,$query41);
$total41=mysqli_num_rows($data41);
if($total41!=0)
{
	?>
		KT in AJP Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data41))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['AJP2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query42="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND AJP6<='20'";
$data42=mysqli_query($conn,$query42);
$total42=mysqli_num_rows($data42);
if($total42!=0)
{
	?>
		KT in AJP Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data42))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['AJP6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query43="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND STE2<='40'";
$data43=mysqli_query($conn,$query43);
$total43=mysqli_num_rows($data43);
if($total43!=0)
{
	?>
		KT in STE Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data43))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['STE2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query44="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND STE6<='20'";
$data44=mysqli_query($conn,$query44);
$total44=mysqli_num_rows($data44);
if($total44!=0)
{
	?>
		KT in STE Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data44))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['STE6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query45="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND CSS_ACN_ADM2<='40'";
$data45=mysqli_query($conn,$query45);
$total45=mysqli_num_rows($data45);
if($total45!=0)
{
	?>
		KT in CSS_ACN_ADM Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data45))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['CSS_ACN_ADM2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query46="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND CSS_ACN_ADM6<='20'";
$data46=mysqli_query($conn,$query46);
$total46=mysqli_num_rows($data46);
if($total46!=0)
{
	?>
		KT in CSS_ACN_ADM Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data46))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['CSS_ACN_ADM6']."</td>
		</tr>";

	}
echo"</table><br>";
}
$query47="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND ITR2<='50'";
$data47=mysqli_query($conn,$query47);
$total47=mysqli_num_rows($data47);
if($total47!=0)
{
	?>
		KT in ITR Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data47))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['ITR2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query48="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2' AND CPP2<='20'";
$data48=mysqli_query($conn,$query48);
$total48=mysqli_num_rows($data48);
if($total48!=0)
{
	?>
		KT in CPP Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data48))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno5']."</td>
			<td>".$result1['CPP2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query49="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND MGT2<='40'";
$data49=mysqli_query($conn,$query49);
$total49=mysqli_num_rows($data49);
if($total49!=0)
{
	?>
		KT in MGT Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data49))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['MGT2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query50="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND PWP2<='40'";
$data50=mysqli_query($conn,$query50);
$total50=mysqli_num_rows($data50);
if($total50!=0)
{
	?>
		KT in PWP Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data50))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['PWP2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query51="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND PWP6<='20'";
$data51=mysqli_query($conn,$query51);
$total51=mysqli_num_rows($data51);
if($total51!=0)
{
	?>
		KT in PWP Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	<?php
	while($result1=mysqli_fetch_assoc($data51))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['PWP6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query52="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND MAD2<='40'";
$data52=mysqli_query($conn,$query52);
$total52=mysqli_num_rows($data52);
if($total52!=0)
{
	?>
		KT in MAD Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data52))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['MAD2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query53="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND MAD6<='20'";
$data53=mysqli_query($conn,$query53);
$total53=mysqli_num_rows($data53);
if($total53!=0)
{
	?>
		KT in MAD Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data53))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['MAD6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query54="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND ETI2<='40'";
$data54=mysqli_query($conn,$query54);
$total54=mysqli_num_rows($data54);
if($total54!=0)
{
	?>
		KT in ETI Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data54))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['ETI2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query55="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND WBP_NIS_DWM2<='40'";
$data55=mysqli_query($conn,$query55);
$total55=mysqli_num_rows($data55);
if($total55!=0)
{
	?>
		KT in WBP_NIS_DWM Theory
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data55))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['WBP_NIS_DWM2']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query56="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND WBP_NIS_DWM6<='20'";
$data56=mysqli_query($conn,$query56);
$total56=mysqli_num_rows($data56);
if($total56!=0)
{
	?>
		KT in WBP_NIS_DWM Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data56))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['WBP_NIS_DWM6']."</td>
		</tr>";
	}
echo"</table><br>";
}
$query57="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND EDE2<='40'";
$data57=mysqli_query($conn,$query57);
$total57=mysqli_num_rows($data57);
if($total57!=0)
{
	?>
		KT in EDP Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data57))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['EDE2']."</td>
		</tr>";

	}
echo"</table><br>";
}
$query58="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2' AND CPE2<='40'";
$data58=mysqli_query($conn,$query58);
$total58=mysqli_num_rows($data58);
if($total58!=0)
{
	?>
		KT in CPE Practical
	<table border=1>
		<tr>
			<th>Student name</th>
			<th>Enrollment no.</th>
			<th>Roll no.</th>
			<th>Seat no.</th>
			<th>Marks</th>
		</tr>
	
	<?php
	while($result1=mysqli_fetch_assoc($data58))
	{
		echo"<tr>
			<td>".$result1['studentname']."</td>
			<td>".$result1['enrollmentno']."</td>
			<td>".$result1['rollno56']."</td>
			<td>".$result1['seatno6']."</td>
			<td>".$result1['CPE2']."</td>
		</tr>";
	}
}
echo"</table></div>";
}
?>
</html>