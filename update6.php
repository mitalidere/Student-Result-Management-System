<html>
<script>
	function back()
{
window.location="studentlogin6.php";
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
$_GET['seatno6'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch6'];
$_GET['semester6'];
$_GET['gender'];

$_GET['MGT1'];
$_GET['MGT2'];
$_GET['MGT3'];
$_GET['MGT4'];

$_GET['PWP1'];
$_GET['PWP2'];
$_GET['PWP3'];
$_GET['PWP4'];
$_GET['PWP5'];
$_GET['PWP6'];
$_GET['PWP7'];

$_GET['MAD1'];
$_GET['MAD2'];
$_GET['MAD3'];
$_GET['MAD4'];
$_GET['MAD5'];
$_GET['MAD6'];
$_GET['MAD7'];

$_GET['ETI1'];
$_GET['ETI2'];
$_GET['ETI3'];
$_GET['ETI4'];

$_GET['WBP_NIS_DWM1'];
$_GET['WBP_NIS_DWM2'];
$_GET['WBP_NIS_DWM3'];
$_GET['WBP_NIS_DWM4'];
$_GET['WBP_NIS_DWM5'];
$_GET['WBP_NIS_DWM6'];
$_GET['WBP_NIS_DWM7'];

$_GET['EDE1'];
$_GET['EDE2'];
$_GET['EDE3'];
$_GET['EDE4'];

$_GET['CPE1'];
$_GET['CPE2'];
$_GET['CPE3'];
$_GET['CPE4'];

$_GET['TC6'];
$_GET['percentage6'];
$_GET['marks6'];
$_GET['credits6'];

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
				<td><input class="a" type="text" name="seatno6" value="<?php echo $_GET['seatno6'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch6" value="<?php echo $_GET['batch6'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester6" value="<?php echo $_GET['semester6'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspGender </td>
				<td><input class="a" type="text" name="gender" value="<?php echo $_GET['gender'];?>"/></td>
			</tr>
		</table><br>		<table border=1>
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
		<th rowspan="2">MANAGEMENT</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="MGT1" value="<?php echo $_GET['MGT1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="MGT2" value="<?php echo $_GET['MGT2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="MGT3" value="<?php echo $_GET['MGT3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="MGT4" value="<?php echo $_GET['MGT4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>PROGRAMMING WITH PYTHON</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="PWP1" value="<?php echo $_GET['PWP1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="PWP2" value="<?php echo $_GET['PWP2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="PWP3" value="<?php echo $_GET['PWP3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="PWP4" value="<?php echo $_GET['PWP4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="PWP5" value="<?php echo $_GET['PWP5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="PWP6" value="<?php echo $_GET['PWP6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="PWP7" value="<?php echo $_GET['PWP7'];?>"/></td>
	</tr>
<tr>
		<th rowspan=4>MOBILE APPLICATION DEVELOPMENT</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="MAD1" value="<?php echo $_GET['MAD1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="MAD2" value="<?php echo $_GET['MAD2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="MAD3" value="<?php echo $_GET['MAD3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="MAD4" value="<?php echo $_GET['MAD4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="MAD5" value="<?php echo $_GET['MAD5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="MAD6" value="<?php echo $_GET['MAD6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="MAD7" value="<?php echo $_GET['MAD7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">EMERGING TRENDS IN COMPUTER AND INFORMATION TECHNOLOGY</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b"type="text" name="ETI1" value="<?php echo $_GET['ETI1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="ETI2" value="<?php echo $_GET['ETI2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="ETI3" value="<?php echo $_GET['ETI3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="ETI4" value="<?php echo $_GET['ETI4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>WEB BASED APPLICATION DEVELOPMENT USING PHP/<br>NETWORK AND INFORMATION SECURITY/<br>DATA WAREHOUSING WITH MINING TECHNIQUES</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="WBP_NIS_DWM1" value="<?php echo $_GET['WBP_NIS_DWM1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="WBP_NIS_DWM2" value="<?php echo $_GET['WBP_NIS_DWM2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="WBP_NIS_DWM3" value="<?php echo $_GET['WBP_NIS_DWM3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="WBP_NIS_DWM4" value="<?php echo $_GET['WBP_NIS_DWM4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="WBP_NIS_DWM5" value="<?php echo $_GET['WBP_NIS_DWM5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="WBP_NIS_DWM6" value="<?php echo $_GET['WBP_NIS_DWM6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="WBP_NIS_DWM7" value="<?php echo $_GET['WBP_NIS_DWM7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">ENTERPRENEURSHIP DEVELOPMENT</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="EDE1" value="<?php echo $_GET['EDE1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="EDE2" value="<?php echo $_GET['EDE2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="EDE3" value="<?php echo $_GET['EDE3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="EDE4" value="<?php echo $_GET['EDE4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">CAPSTONE PROJECT-EXECUTION & REPORT WRITING</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="CPE1" value="<?php echo $_GET['CPE1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="CPE2" value="<?php echo $_GET['CPE2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="CPE3" value="<?php echo $_GET['CPE3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="CPE4" value="<?php echo $_GET['CPE4'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input class="b" type="text" name="TC6" value="<?php echo $_GET['TC6'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input class="b" type="text" name="percentage6" value="<?php echo $_GET['percentage6'];?>"/></td>
				<th>TOTAL</th>
				<td>850</td>
				<td><input class="b" type="text" name="marks6" value="<?php echo $_GET['marks6'];?>"/></td>
				<td><input class="b" type="text" name="credits6" value="<?php echo $_GET['credits6'];?>"/></td>
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
	$seatno6=$_GET['seatno6'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch6=$_GET['batch6'];
	$semester6=$_GET['semester6'];
	$gender=$_GET['gender'];

	$MGT1=$_GET['MGT1'];
	$MGT2=$_GET['MGT2'];
	$MGT3=$_GET['MGT3'];
	$MGT4=$_GET['MGT4'];

	$PWP1=$_GET['PWP1'];
	$PWP2=$_GET['PWP2'];
	$PWP3=$_GET['PWP3'];
	$PWP4=$_GET['PWP4'];
	$PWP5=$_GET['PWP5'];
	$PWP6=$_GET['PWP6'];
	$PWP7=$_GET['PWP7'];

	$MAD1=$_GET['MAD1'];
	$MAD2=$_GET['MAD2'];
	$MAD3=$_GET['MAD3'];
	$MAD4=$_GET['MAD4'];
	$MAD5=$_GET['MAD5'];
	$MAD6=$_GET['MAD6'];
	$MAD7=$_GET['MAD7'];

	$ETI1=$_GET['ETI1'];
	$ETI2=$_GET['ETI2'];
	$ETI3=$_GET['ETI3'];
	$ETI4=$_GET['ETI4'];

	$WBP_NIS_DWM1=$_GET['WBP_NIS_DWM1'];
	$WBP_NIS_DWM2=$_GET['WBP_NIS_DWM2'];
	$WBP_NIS_DWM3=$_GET['WBP_NIS_DWM3'];
	$WBP_NIS_DWM4=$_GET['WBP_NIS_DWM4'];
	$WBP_NIS_DWM5=$_GET['WBP_NIS_DWM5'];
	$WBP_NIS_DWM6=$_GET['WBP_NIS_DWM6'];
	$WBP_NIS_DWM7=$_GET['WBP_NIS_DWM7'];

	$EDE1=$_GET['EDE1'];
	$EDE2=$_GET['EDE2'];
	$EDE3=$_GET['EDE3'];
	$EDE4=$_GET['EDE4'];

	$CPE1=$_GET['CPE1'];
	$CPE2=$_GET['CPE2'];
	$CPE3=$_GET['CPE3'];
	$CPE4=$_GET['CPE4'];

	$TC6=$_GET['TC6'];
	$percentage6=$_GET['percentage6'];
	$marks6=$_GET['marks6'];
	$credits6=$_GET['credits6'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno56='$rollno56',seatno6='$seatno6',scheme='$scheme',email='$email',phoneno='$phoneno',batch6='$batch6',semester6='$semester6',gender='$gender',MGT1='$MGT1',MGT2='$MGT2',MGT3='$MGT3',MGT4='$MGT4', PWP1='$PWP1',PWP2='$PWP2',PWP3='$PWP3',PWP4='$PWP4',PWP5='$PWP5',PWP6='$PWP6',PWP7='$PWP7', MAD1='$MAD1',MAD2='$MAD2',MAD3='$MAD3',MAD4='$MAD4',MAD5='$MAD5',MAD6='$MAD6',MAD7='$MAD7', ETI1='$ETI1',ETI2='$ETI2',ETI3='$ETI3',ETI4='$ETI4', WBP_NIS_DWM1='$WBP_NIS_DWM1',WBP_NIS_DWM2='$WBP_NIS_DWM2',WBP_NIS_DWM3='$WBP_NIS_DWM3',WBP_NIS_DWM4='$WBP_NIS_DWM4',WBP_NIS_DWM5='$WBP_NIS_DWM5',WBP_NIS_DWM6='$WBP_NIS_DWM6',WBP_NIS_DWM7='$WBP_NIS_DWM7', EDE1='$EDE1',EDE2='$EDE2',EDE3='$EDE3',EDE4='$EDE4', CPE1='$CPE1',CPE2='$CPE2',CPE3='$CPE3',CPE4='$CPE4', TC6='$TC6',percentage6='$percentage6',marks6='$marks6',credits6='$credits6' WHERE enrollmentno='$enrollmentno'";
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