<html>
<script>
	function back()
{
window.location="studentlogin4.php";
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
$_GET['rollno34'];
$_GET['seatno4'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch4'];
$_GET['semester4'];
$_GET['gender'];

$_GET['JPR1'];
$_GET['JPR2'];
$_GET['JPR3'];
$_GET['JPR4'];
$_GET['JPR5'];
$_GET['JPR6'];
$_GET['JPR7'];

$_GET['SEN1'];
$_GET['SEN2'];
$_GET['SEN3'];
$_GET['SEN4'];
$_GET['SEN5'];
$_GET['SEN6'];
$_GET['SEN7'];

$_GET['DCC1'];
$_GET['DCC2'];
$_GET['DCC3'];
$_GET['DCC4'];
$_GET['DCC5'];
$_GET['DCC6'];
$_GET['DCC7'];

$_GET['MIC1'];
$_GET['MIC2'];
$_GET['MIC3'];
$_GET['MIC4'];
$_GET['MIC5'];
$_GET['MIC6'];
$_GET['MIC7'];

$_GET['GAD1'];
$_GET['GAD2'];
$_GET['GAD3'];
$_GET['GAD4'];

$_GET['TC4'];
$_GET['percentage4'];
$_GET['marks4'];
$_GET['credits4'];

$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="project";
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
?>

<html>
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
				<td><input class="a" type="text" name="rollno34" value="<?php echo $_GET['rollno34'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspSeat no. </td>
				<td><input class="a" type="text" name="seatno4" value="<?php echo $_GET['seatno4'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch4" value="<?php echo $_GET['batch4'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester4" value="<?php echo $_GET['semester4'];?>"/></td>
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
		<th rowspan=4>JAVA PROGRAMMING</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="JPR1" value="<?php echo $_GET['JPR1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="JPR2" value="<?php echo $_GET['JPR2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="JPR3" value="<?php echo $_GET['JPR3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="JPR4" value="<?php echo $_GET['JPR4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="JPR5" value="<?php echo $_GET['JPR5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="JPR6" value="<?php echo $_GET['JPR6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="JPR7" value="<?php echo $_GET['JPR7'];?>"/></td>
	</tr>
<tr>
		<th rowspan=4>SOFTWARE ENGINEERING</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="SEN1" value="<?php echo $_GET['SEN1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="SEN2" value="<?php echo $_GET['SEN2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="SEN3" value="<?php echo $_GET['SEN3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="SEN4" value="<?php echo $_GET['SEN4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="SEN5" value="<?php echo $_GET['SEN5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="SEN6" value="<?php echo $_GET['SEN6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="SEN7" value="<?php echo $_GET['SEN7'];?>"/></td>
	</tr><tr>
		<th rowspan=4>DATA COMMUNICATION AND COMPUTER NETWORK</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="DCC1" value="<?php echo $_GET['DCC1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="DCC2" value="<?php echo $_GET['DCC2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="DCC3" value="<?php echo $_GET['DCC3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="DCC4" value="<?php echo $_GET['DCC4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DCC5" value="<?php echo $_GET['DCC5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="DCC6" value="<?php echo $_GET['DCC6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DCC7" value="<?php echo $_GET['DCC7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>MICROPROCESSORS</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="MIC1" value="<?php echo $_GET['MIC1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="MIC2" value="<?php echo $_GET['MIC2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="MIC3" value="<?php echo $_GET['MIC3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="MIC4" value="<?php echo $_GET['MIC4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="MIC5" value="<?php echo $_GET['MIC5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="MIC6" value="<?php echo $_GET['MIC6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="MIC7" value="<?php echo $_GET['MIC7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">GUI APPLICATION DEVELOPMENT USING VB.NET</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>035</td>
		<td>014</td>
		<td><input class="b" type="text" name="GAD1" value="<?php echo $_GET['GAD1'];?>"/></td>
		<td rowspan="2">050</td>
		<td rowspan="2"><input class="b" type="text" name="GAD2" value="<?php echo $_GET['GAD2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="GAD3" value="<?php echo $_GET['GAD3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>015</td>
		<td>006</td>
		<td><input class="b" type="text" name="GAD4" value="<?php echo $_GET['GAD4'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input class="b" type="text" name="TC4" value="<?php echo $_GET['TC4'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input class="b" type="text" name="percentage4" value="<?php echo $_GET['percentage4'];?>"/></td>
				<th>TOTAL</th>
				<td>750</td>
				<td><input class="b" type="text" name="marks4" value="<?php echo $_GET['marks4'];?>"/></td>
				<td><input class="b" type="text" name="credits4" value="<?php echo $_GET['credits4'];?>"/></td>
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
	$rollno34=$_GET['rollno34'];
	$seatno4=$_GET['seatno4'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch4=$_GET['batch4'];
	$semester4=$_GET['semester4'];
	$gender=$_GET['gender'];

	$JPR1=$_GET['JPR1'];
	$JPR2=$_GET['JPR2'];
	$JPR3=$_GET['JPR3'];
	$JPR4=$_GET['JPR4'];
	$JPR5=$_GET['JPR5'];
	$JPR6=$_GET['JPR6'];
	$JPR7=$_GET['JPR7'];

	$SEN1=$_GET['SEN1'];
	$SEN2=$_GET['SEN2'];
	$SEN3=$_GET['SEN3'];
	$SEN4=$_GET['SEN4'];
	$SEN5=$_GET['SEN5'];
	$SEN6=$_GET['SEN6'];
	$SEN7=$_GET['SEN7'];

	$DCC1=$_GET['DCC1'];
	$DCC2=$_GET['DCC2'];
	$DCC3=$_GET['DCC3'];
	$DCC4=$_GET['DCC4'];
	$DCC5=$_GET['DCC5'];
	$DCC6=$_GET['DCC6'];
	$DCC7=$_GET['DCC7'];

	$MIC1=$_GET['MIC1'];
	$MIC2=$_GET['MIC2'];
	$MIC3=$_GET['MIC3'];
	$MIC4=$_GET['MIC4'];
	$MIC5=$_GET['MIC5'];
	$MIC6=$_GET['MIC6'];
	$MIC7=$_GET['MIC7'];

	$GAD1=$_GET['GAD1'];
	$GAD2=$_GET['GAD2'];
	$GAD3=$_GET['GAD3'];
	$GAD4=$_GET['GAD4'];

	$TC4=$_GET['TC4'];
	$percentage4=$_GET['percentage4'];
	$marks4=$_GET['marks4'];
	$credits4=$_GET['credits4'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno34='$rollno34',seatno4='$seatno4',scheme='$scheme',email='$email',phoneno='$phoneno',batch4='$batch4',semester4='$semester4',gender='$gender',JPR1='$JPR1',JPR2='$JPR2',JPR3='$JPR3',JPR4='$JPR4',JPR5='$JPR5',JPR6='$JPR6',JPR7='$JPR7',SEN1='$SEN1',SEN2='$SEN2',SEN3='$SEN3',SEN4='$SEN4',SEN5='$SEN5',SEN6='$SEN6',SEN7='$SEN7',DCC1='$DCC1',DCC2='$DCC2',DCC3='$DCC3',DCC4='$DCC4',DCC5='$DCC5',DCC6='$DCC6',DCC7='$DCC7',MIC1='$MIC1',MIC2='$MIC2',MIC3='$MIC3',MIC4='$MIC4',MIC5='$MIC5',MIC6='$MIC6',MIC7='$MIC7',GAD1='$GAD1',GAD2='$GAD2',GAD3='$GAD3',GAD4='$GAD4',TC4='$TC4',percentage4='$percentage4',marks4='$marks4',credits4='$credits4' WHERE enrollmentno='$enrollmentno'";
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