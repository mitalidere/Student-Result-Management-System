<html>
<script>
	function back()
{
window.location="studentlogin2.php";
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
$_GET['rollno12'];
$_GET['seatno2'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch2'];
$_GET['semester2'];
$_GET['gender'];

$_GET['EEC1'];
$_GET['EEC2'];
$_GET['EEC3'];
$_GET['EEC4'];
$_GET['EEC5'];
$_GET['EEC6'];
$_GET['EEC7'];

$_GET['AMI1'];
$_GET['AMI2'];
$_GET['AMI3'];
$_GET['AMI4'];

$_GET['BEC1'];
$_GET['BEC2'];
$_GET['BEC3'];
$_GET['BEC4'];
$_GET['BEC5'];
$_GET['BEC6'];
$_GET['BEC7'];

$_GET['PCI1'];
$_GET['PCI2'];
$_GET['PCI3'];
$_GET['PCI4'];
$_GET['PCI5'];
$_GET['PCI6'];
$_GET['PCI7'];

$_GET['BCC1'];
$_GET['BCC2'];
$_GET['BCC3'];
$_GET['BCC4'];

$_GET['CPH1'];
$_GET['CPH2'];
$_GET['CPH3'];
$_GET['CPH4'];

$_GET['WPD1'];
$_GET['WPD2'];
$_GET['WPD3'];
$_GET['WPD4'];

$_GET['TC2'];
$_GET['percentage2'];
$_GET['marks2'];
$_GET['credits2'];

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
				<td><input class="a" type="text" name="rollno12" value="<?php echo $_GET['rollno12'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspSeat no. </td>
				<td><input class="a" type="text" name="seatno2" value="<?php echo $_GET['seatno2'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch2" value="<?php echo $_GET['batch2'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester2" value="<?php echo $_GET['semester2'];?>"/></td>
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
		<td>MAX</td>
		<td>OBT.</td>
	</tr>
	<tr>
		<th rowspan=4>ELEMENTS OF ELECTRICAL ENGINEERING</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input  class="b" type="text" name="EEC1" value="<?php echo $_GET['EEC1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input  class="b" type="text" name="EEC2" value="<?php echo $_GET['EEC2'];?>"/></td>
		<td rowspan=4><input  class="b" type="text" name="EEC3" value="<?php echo $_GET['EEC3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input  class="b" type="text" name="EEC4" value="<?php echo $_GET['EEC4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="EEC5" value="<?php echo $_GET['EEC5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input  class="b" type="text" name="EEC6" value="<?php echo $_GET['EEC6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="EEC7" value="<?php echo $_GET['EEC7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">APPLIED MATHEMATICS</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input  class="b" type="text" name="AMI1" value="<?php echo $_GET['AMI1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input  class="b" type="text" name="AMI2" value="<?php echo $_GET['AMI2'];?>"/></td>
		<th rowspan="2"><input  class="b" type="text" name="AMI3" value="<?php echo $_GET['AMI3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input  class="b" type="text" name="AMI4" value="<?php echo $_GET['AMI4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>BASIC ELECTRONICS</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input  class="b" type="text" name="BEC1" value="<?php echo $_GET['BEC1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="BEC2" value="<?php echo $_GET['BEC2'];?>"/></td>
		<td rowspan=4><input  class="b" type="text" name="BEC3" value="<?php echo $_GET['BEC3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input  class="b" type="text" name="BEC4" value="<?php echo $_GET['BEC4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="BEC5" value="<?php echo $_GET['BEC5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="BEC6" value="<?php echo $_GET['BEC6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="BEC7" value="<?php echo $_GET['BEC7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan=4>PROGRAMMING IN 'C'</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input  class="b" type="text" name="PCI1" value="<?php echo $_GET['PCI1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input  class="b" type="text" name="PCI2" value="<?php echo $_GET['PCI2'];?>"/></td>
		<td rowspan=4><input  class="b" type="text" name="PCI3" value="<?php echo $_GET['PCI3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input  class="b" type="text" name="PCI4" value="<?php echo $_GET['PCI4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="PCI5" value="<?php echo $_GET['PCI5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input  class="b" type="text" name="PCI6" value="<?php echo $_GET['PCI6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input  class="b" type="text" name="PCI7" value="<?php echo $_GET['PCI7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">BUSINESS COMMUNICATIONS USING COMPUTERS</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>035</td>
		<td>014</td>
		<td><input  class="b" type="text" name="BCC1" value="<?php echo $_GET['BCC1'];?>"/></td> <td rowspan="2">050</td>
		<td rowspan="2"><input  class="b" type="text" name="BCC2" value="<?php echo $_GET['BCC2'];?>"/></td>
		<th rowspan="2"><input  class="b" type="text" name="BCC3" value="<?php echo $_GET['BCC3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>015</td>
		<td>006</td>
		<td><input  class="b" type="text" name="BCC4" value="<?php echo $_GET['BCC4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">COMPUTER PERIPHERAL AND HARDWARE MAINTENANCE</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input  class="b" type="text" name="CPH1" value="<?php echo $_GET['CPH1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input  class="b" type="text" name="CPH2" value="<?php echo $_GET['CPH2'];?>"/></td>
		<th rowspan="2"><input  class="b" type="text" name="CPH3" value="<?php echo $_GET['CPH3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input  class="b" type="text" name="CPH4" value="<?php echo $_GET['CPH4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">WEB PAGE DESIGNING WITH HTML</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input  class="b" type="text" name="WPD1" value="<?php echo $_GET['WPD1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input  class="b" type="text" name="WPD2" value="<?php echo $_GET['WPD2'];?>"/></td>
		<th rowspan="2"><input  class="b" type="text" name="WPD3" value="<?php echo $_GET['WPD3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input  class="b" type="text" name="WPD4" value="<?php echo $_GET['WPD4'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input  class="b" type="text" name="TC2" value="<?php echo $_GET['TC2'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input  class="b" type="text" name="percentage2" value="<?php echo $_GET['percentage2'];?>"/></td>
				<th>TOTAL</th>
				<td>800</td>
				<td><input  class="b" type="text" name="marks2" value="<?php echo $_GET['marks2'];?>"/></td>
				<td><input class="b" type="text" name="credits2" value="<?php echo $_GET['credits2'];?>"/></td>
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
	$rollno12=$_GET['rollno12'];
	$seatno2=$_GET['seatno2'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch2=$_GET['batch2'];
	$semester2=$_GET['semester2'];
	$gender=$_GET['gender'];

	$EEC1=$_GET['EEC1'];
	$EEC2=$_GET['EEC2'];
	$EEC3=$_GET['EEC3'];
	$EEC4=$_GET['EEC4'];
	$EEC5=$_GET['EEC5'];
	$EEC6=$_GET['EEC6'];
	$EEC7=$_GET['EEC7'];

	$AMI1=$_GET['AMI1'];
	$AMI2=$_GET['AMI2'];
	$AMI3=$_GET['AMI3'];
	$AMI4=$_GET['AMI4'];

	$BEC1=$_GET['BEC1'];
	$BEC2=$_GET['BEC2'];
	$BEC3=$_GET['BEC3'];
	$BEC4=$_GET['BEC4'];
	$BEC5=$_GET['BEC5'];
	$BEC6=$_GET['BEC6'];
	$BEC7=$_GET['BEC7'];

	$PCI1=$_GET['PCI1'];
	$PCI2=$_GET['PCI2'];
	$PCI3=$_GET['PCI3'];
	$PCI4=$_GET['PCI4'];
	$PCI5=$_GET['PCI5'];
	$PCI6=$_GET['PCI6'];
	$PCI7=$_GET['PCI7'];

	$BCC1=$_GET['BCC1'];
	$BCC2=$_GET['BCC2'];
	$BCC3=$_GET['BCC3'];
	$BCC4=$_GET['BCC4'];

	$CPH1=$_GET['CPH1'];
	$CPH2=$_GET['CPH2'];
	$CPH3=$_GET['CPH3'];
	$CPH4=$_GET['CPH4'];

	$WPD1=$_GET['WPD1'];
	$WPD2=$_GET['WPD2'];
	$WPD3=$_GET['WPD3'];
	$WPD4=$_GET['WPD4'];

	$TC2=$_GET['TC2'];
	$percentage2=$_GET['percentage2'];
	$marks2=$_GET['marks2'];
	$credits2=$_GET['credits2'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno12='$rollno12',seatno2='$seatno2',scheme='$scheme',email='$email',phoneno='$phoneno',batch2='$batch2',semester2='$semester2',gender='$gender',EEC1='$EEC1',EEC2='$EEC2',EEC3='$EEC3',EEC4='$EEC4',EEC5='$EEC5',EEC6='$EEC6',EEC7='$EEC7',AMI1='$AMI1',AMI2='$AMI2',AMI3='$AMI3',AMI4='$AMI4',BEC1='$BEC1',BEC2='$BEC2',BEC3='$BEC3',BEC4='$BEC4',BEC5='$BEC5',BEC6='$BEC6',BEC7='$BEC7',PCI1='$PCI1',PCI2='$PCI2',PCI3='$PCI3',PCI4='$PCI4',PCI5='$PCI5',PCI6='$PCI6',PCI7='$PCI7',BCC1='$BCC1',BCC2='$BCC2',BCC3='$BCC3',BCC4='$BCC4',CPH1='$CPH1',CPH2='$CPH2',CPH3='$CPH3',CPH4='$CPH4',WPD1='$WPD1',WPD2='$WPD2',WPD3='$WPD3',WPD4='$WPD4',TC2='$TC2',percentage2='$percentage2',marks2='$marks2',credits2='$credits2'
	 WHERE enrollmentno='$enrollmentno'";
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
</div>
</center>
</body>
</html>