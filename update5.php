<html>
<script>
	function back()
{
window.location="studentlogin5.php";
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
padding:0 10px;
width: 180px;
background-color:rgb(255,255,255,0);
}
.b
{
width: 80px;
background-color:rgb(255,255,255,0);

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
		width:1200px;
		background-color:rgb(0,0,0,0.8);
		color:white;
		padding:10px 0px 10px 0px;
		text-align:center;
		font-size:35px;
}
.div2
{
		border-radius:0px 0px 15px 15px;
		width:1200px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;

}
</style>
<center>
<?php
$_GET['studentname'];
$_GET['enrollmentno'];
$_GET['rollno56'];
$_GET['seatno5'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch5'];
$_GET['semester5'];
$_GET['gender'];

$_GET['EST1'];
$_GET['EST2'];
$_GET['EST3'];
$_GET['EST4'];

$_GET['OSY1'];
$_GET['OSY2'];
$_GET['OSY3'];
$_GET['OSY4'];
$_GET['OSY5'];
$_GET['OSY6'];
$_GET['OSY7'];

$_GET['AJP1'];
$_GET['AJP2'];
$_GET['AJP3'];
$_GET['AJP4'];
$_GET['AJP5'];
$_GET['AJP6'];
$_GET['AJP7'];

$_GET['STE1'];
$_GET['STE2'];
$_GET['STE3'];
$_GET['STE4'];
$_GET['STE5'];
$_GET['STE6'];
$_GET['STE7'];

$_GET['CSS_ACN_ADM1'];
$_GET['CSS_ACN_ADM2'];
$_GET['CSS_ACN_ADM3'];
$_GET['CSS_ACN_ADM4'];
$_GET['CSS_ACN_ADM5'];
$_GET['CSS_ACN_ADM6'];
$_GET['CSS_ACN_ADM7'];

$_GET['ITR1'];
$_GET['ITR2'];
$_GET['ITR3'];
$_GET['ITR4'];

$_GET['CPP1'];
$_GET['CPP2'];
$_GET['CPP3'];
$_GET['CPP4'];

$_GET['TC5'];
$_GET['percentage5'];
$_GET['marks5'];
$_GET['credits5'];

$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="project";
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
?>
<body>
	<div class="div1">Update data</div>
	<div class="div2">
	<form action="" method="GET">
		<table>
			<tr>
				<td>Student name </td>
				<td><input class="a" type="text" name="studentname" value="<?php echo $_GET['studentname'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEnrollment no. </td>
				<td><input class="a" type="text" name="enrollmentno" value="<?php echo $_GET['enrollmentno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspRoll no. </td>
				<td><input class="a" type="text" name="rollno56" value="<?php echo $_GET['rollno56'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspSeat no. </td>
				<td><input class="a" type="text" name="seatno5" value="<?php echo $_GET['seatno5'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch5" value="<?php echo $_GET['batch5'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester5" value="<?php echo $_GET['semester5'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspGender </td>
				<td><input class="a" type="text" name="gender" value="<?php echo $_GET['gender'];?>"/></td>
			</tr>
		</table><br>
		<table border=1>
			<tr>
		<th rowspan=2>TITLE OF COURSES</th>
		<th rowspan=2>TH/PR</th>
		<th rowspan=2>COURSE HEAD</th>
		<th colspan=3>MARKS</th>
		<th colspan=2>TOTAL MARKS</th>
		<th rowspan=2>CREDITS</th>
	</tr>
	<tr>
		<td>MAX</td>
		<td>MIN.</td>
		<td>OBT.</td>
		<td>MAX.</td>
		<td>OBT.</td>
	</tr>
	<tr>
		<th rowspan="2">ENVIRONMENTAL STUDIES</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>035</td>
		<td>014</td>
		<td><input class="b" type="text" name="EST1" value="<?php echo $_GET['EST1'];?>"/></td>
		<td rowspan="2">050</td>
		<td rowspan="2"><input class="b" type="text" name="EST2" value="<?php echo $_GET['EST2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="EST3" value="<?php echo $_GET['EST3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>015</td>
		<td>006</td>
		<td><input class="b" type="text" name="EST4" value="<?php echo $_GET['EST4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>OPERATING SYSTEM</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="OSY1" value="<?php echo $_GET['OSY1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="OSY2" value="<?php echo $_GET['OSY2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="OSY3" value="<?php echo $_GET['OSY3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="OSY4" value="<?php echo $_GET['OSY4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="OSY5" value="<?php echo $_GET['OSY5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="OSY6" value="<?php echo $_GET['OSY6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="OSY7" value="<?php echo $_GET['OSY7'];?>"/></td>
	</tr>
<tr>
		<th rowspan=4>ADVANCED JAVA PROGRAMMING</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="AJP1" value="<?php echo $_GET['AJP1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="AJP2" value="<?php echo $_GET['AJP2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="AJP3" value="<?php echo $_GET['AJP3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="AJP4" value="<?php echo $_GET['AJP4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="AJP5" value="<?php echo $_GET['AJP5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="AJP6" value="<?php echo $_GET['AJP6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="AJP7" value="<?php echo $_GET['AJP7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>SOFTWARE TESTING</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="STE1" value="<?php echo $_GET['STE1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="STE2" value="<?php echo $_GET['STE2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="STE3" value="<?php echo $_GET['STE3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="STE4" value="<?php echo $_GET['STE4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="STE5" value="<?php echo $_GET['STE5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="STE6" value="<?php echo $_GET['STE6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="STE7" value="<?php echo $_GET['STE7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>CLIENT SIDE SCRIPTING LANGUAGE/<br>ADVANCED COMPUTER NETWORK/<br>ADVANCED DATABASE MANAGEMENT SYSTEM</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="CSS_ACN_ADM1" value="<?php echo $_GET['CSS_ACN_ADM1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="CSS_ACN_ADM2" value="<?php echo $_GET['CSS_ACN_ADM2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="CSS_ACN_ADM3" value="<?php echo $_GET['CSS_ACN_ADM3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="CSS_ACN_ADM4" value="<?php echo $_GET['CSS_ACN_ADM4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="CSS_ACN_ADM5" value="<?php echo $_GET['CSS_ACN_ADM5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="CSS_ACN_ADM6" value="<?php echo $_GET['CSS_ACN_ADM6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="CSS_ACN_ADM7" value="<?php echo $_GET['CSS_ACN_ADM7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">INDUSTRIAL TRAINING</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>035</td>
		<td>014</td>
		<td><input class="b" type="text" name="ITR1" value="<?php echo $_GET['ITR1'];?>"/></td>
		<td rowspan="2">050</td>
		<td rowspan="2"><input class="b" type="text" name="ITR2" value="<?php echo $_GET['ITR2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="ITR3" value="<?php echo $_GET['ITR3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>015</td>
		<td>006</td>
		<td><input class="b" type="text" name="ITR4" value="<?php echo $_GET['ITR4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">CAPSTONE PROJECT PLANNING</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>035</td>
		<td>014</td>
		<td><input class="b" type="text" name="CPP1" value="<?php echo $_GET['CPP1'];?>"/></td>
		<td rowspan="2">050</td>
		<td rowspan="2"><input class="b" type="text" name="CPP2" value="<?php echo $_GET['CPP2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="CPP3" value="<?php echo $_GET['CPP3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>015</td>
		<td>006</td>
		<td><input class="b" type="text" name="CPP4" value="<?php echo $_GET['CPP4'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input class="b" type="text" name="TC5" value="<?php echo $_GET['TC5'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input class="b" type="text" name="percentage5" value="<?php echo $_GET['percentage5'];?>"/></td>
				<th>TOTAL</th>
				<td>750</td>
				<td><input class="b" type="text" name="marks5" value="<?php echo $_GET['marks5'];?>"/></td>
				<td><input class="b" type="text" name="credits5" value="<?php echo $_GET['credits5'];?>"/></td>
			</tr>
		</table><br>
		<input class="s" type="button" name="button" value="Back" onclick="back()">
		<input class="s" type="submit" name="submit" value="Update">
	</form>
<?php
if($_GET['submit'])
{
	$studentname=$_GET['studentname'];
	$enrollmentno=$_GET['enrollmentno'];
	$rollno56=$_GET['rollno56'];
	$seatno5=$_GET['seatno5'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch5=$_GET['batch5'];
	$semester5=$_GET['semester5'];
	$gender=$_GET['gender'];

	$EST1=$_GET['EST1'];
	$EST2=$_GET['EST2'];
	$EST3=$_GET['EST3'];
	$EST4=$_GET['EST4'];

	$OSY1=$_GET['OSY1'];
	$OSY2=$_GET['OSY2'];
	$OSY3=$_GET['OSY3'];
	$OSY4=$_GET['OSY4'];
	$OSY5=$_GET['OSY5'];
	$OSY6=$_GET['OSY6'];
	$OSY7=$_GET['OSY7'];

	$AJP1=$_GET['AJP1'];
	$AJP2=$_GET['AJP2'];
	$AJP3=$_GET['AJP3'];
	$AJP4=$_GET['AJP4'];
	$AJP5=$_GET['AJP5'];
	$AJP6=$_GET['AJP6'];
	$AJP7=$_GET['AJP7'];

	$STE1=$_GET['STE1'];
	$STE2=$_GET['STE2'];
	$STE3=$_GET['STE3'];
	$STE4=$_GET['STE4'];
	$STE5=$_GET['STE5'];
	$STE6=$_GET['STE6'];
	$STE7=$_GET['STE7'];

	$CSS_ACN_ADM1=$_GET['CSS_ACN_ADM1'];
	$CSS_ACN_ADM2=$_GET['CSS_ACN_ADM2'];
	$CSS_ACN_ADM3=$_GET['CSS_ACN_ADM3'];
	$CSS_ACN_ADM4=$_GET['CSS_ACN_ADM4'];
	$CSS_ACN_ADM5=$_GET['CSS_ACN_ADM5'];
	$CSS_ACN_ADM6=$_GET['CSS_ACN_ADM6'];
	$CSS_ACN_ADM7=$_GET['CSS_ACN_ADM7'];

	$ITR1=$_GET['ITR1'];
	$ITR2=$_GET['ITR2'];
	$ITR3=$_GET['ITR3'];
	$ITR4=$_GET['ITR4'];

	$CPP1=$_GET['CPP1'];
	$CPP2=$_GET['CPP2'];
	$CPP3=$_GET['CPP3'];
	$CPP4=$_GET['CPP4'];

	$TC5=$_GET['TC5'];
	$percentage5=$_GET['percentage5'];
	$marks5=$_GET['marks5'];
	$credits5=$_GET['credits5'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno56='$rollno56',seatno5='$seatno5',scheme='$scheme',email='$email',phoneno='$phoneno',batch5='$batch5',semester5='$semester5',gender='$gender',EST1='$EST1',EST2='$EST2',EST3='$EST3',EST4='$EST4', OSY1='$OSY1',OSY2='$OSY2',OSY3='$OSY3',OSY4='$OSY4',OSY5='$OSY5',OSY6='$OSY6',OSY7='$OSY7', AJP1='$AJP1',AJP2='$AJP2',AJP3='$AJP3',AJP4='$AJP4',AJP5='$AJP5',AJP6='$AJP6',AJP7='$AJP7', STE1='$STE1',STE2='$STE2',STE3='$STE3',STE4='$STE4',STE5='$STE5',STE6='$STE6',STE7='$STE7', CSS_ACN_ADM1='$CSS_ACN_ADM1',CSS_ACN_ADM2='$CSS_ACN_ADM2',CSS_ACN_ADM3='$CSS_ACN_ADM3',CSS_ACN_ADM4='$CSS_ACN_ADM4',CSS_ACN_ADM5='$CSS_ACN_ADM5',CSS_ACN_ADM6='$CSS_ACN_ADM6',CSS_ACN_ADM7='$CSS_ACN_ADM7', ITR1='$ITR1',ITR2='$ITR2',ITR3='$ITR3',ITR4='$ITR4', CPP1='$CPP1',CPP2='$CPP2',CPP3='$CPP3',CPP4='$CPP4', TC5='$TC5',percentage5='$percentage5',marks5='$marks5',credits5='$credits5' WHERE enrollmentno='$enrollmentno'";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		echo'<script>alert("Record updated successfully")</script>';
	}
	else
	{
		echo'<script>alert("Record not updated")</script>';
	}
}
?>
</body>
</html>