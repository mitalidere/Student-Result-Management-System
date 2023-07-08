<html>
<script>
	function back()
{
window.location="studentlogin1.php";
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
$_GET['seatno1'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch1'];
$_GET['semester1'];
$_GET['gender'];

$_GET['ENG1'];
$_GET['ENG2'];
$_GET['ENG3'];
$_GET['ENG4'];
$_GET['ENG5'];
$_GET['ENG6'];
$_GET['ENG7'];

$_GET['BSC1'];
$_GET['BSC2'];
$_GET['BSC3'];
$_GET['BSC4'];
$_GET['BSC5'];
$_GET['BSC6'];
$_GET['BSC7'];

$_GET['BMS1'];
$_GET['BMS2'];
$_GET['BMS3'];
$_GET['BMS4'];

$_GET['ICT1'];
$_GET['ICT2'];
$_GET['ICT3'];
$_GET['ICT4'];

$_GET['EGE1'];
$_GET['EGE2'];
$_GET['EGE3'];
$_GET['EGE4'];

$_GET['WPC1'];
$_GET['WPC2'];
$_GET['WPC3'];
$_GET['WPC4'];

$_GET['TC1']; 
$_GET['percentage1'];
$_GET['marks1'];
$_GET['credits1'];

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
				<td><input class="a" type="text" name="seatno1" value="<?php echo $_GET['seatno1'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch1" value="<?php echo $_GET['batch1'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester1" value="<?php echo $_GET['semester1'];?>"/></td>
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
		<th rowspan=4>ENGLISH</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="ENG1" value="<?php echo $_GET['ENG1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="ENG2" value="<?php echo $_GET['ENG2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="ENG3" value="<?php echo $_GET['ENG3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="ENG4" value="<?php echo $_GET['ENG4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="ENG5" value="<?php echo $_GET['ENG5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="ENG6" value="<?php echo $_GET['ENG6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="ENG7" value="<?php echo $_GET['ENG7'];?>"/></td>
	</tr>

	<tr>
		<th rowspan=4>BASIC SCIENCE</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="BSC1" value="<?php echo $_GET['BSC1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="BSC2" value="<?php echo $_GET['BSC2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="BSC3" value="<?php echo $_GET['BSC3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="BSC4" value="<?php echo $_GET['BSC4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="BSC5" value="<?php echo $_GET['BSC5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="BSC6" value="<?php echo $_GET['BSC6'];?>"/></td>
	</tr>

	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="BSC7" value="<?php echo $_GET['BSC7'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">BASIC MATHEMATICS</th>
		<td rowspan="2">TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="BMS1" value="<?php echo $_GET['BMS1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="BMS2" value="<?php echo $_GET['BMS2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="BMS3" value="<?php echo $_GET['BMS3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="BMS4" value="<?php echo $_GET['BMS4'];?>"/></td>
	</tr>
			
	<tr>
		<th rowspan="2">FUNDAMENTALS OF ICT</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="ICT1" value="<?php echo $_GET['ICT1'];?>"/></td>
		<td rowspan="2">050</td>
		<td rowspan="2"><input class="b" type="text" name="ICT2" value="<?php echo $_GET['ICT2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="ICT3" value="<?php echo $_GET['ICT3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="ICT4" value="<?php echo $_GET['ICT4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">ENGINEERING GRAPHICS</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="EGE1" value="<?php echo $_GET['EGE1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="EGE2" value="<?php echo $_GET['EGE2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="EGE3" value="<?php echo $_GET['EGE3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="EGE4" value="<?php echo $_GET['EGE4'];?>"/></td>
	</tr>
	<tr>
		<th rowspan="2">WORKSHOP PRACTICE</th>
		<td rowspan="2">PR</td>
		<td>ESE</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="WPC1" value="<?php echo $_GET['WPC1'];?>"/></td>
		<td rowspan="2">100</td>
		<td rowspan="2"><input class="b" type="text" name="WPC2" value="<?php echo $_GET['WPC2'];?>"/></td>
		<th rowspan="2"><input class="b" type="text" name="WPC3" value="<?php echo $_GET['WPC3'];?>"/></th>
	</tr>
	<tr>
		<td>PA</td>
		<td>050</td>
		<td>020</td>
		<td><input class="b" type="text" name="WPC4" value="<?php echo $_GET['WPC4'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input class="b" type="text" name="TC1" value="<?php echo $_GET['TC1'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input class="b" type="text" name="percentage1" value="<?php echo $_GET['percentage1'];?>%"/></td>
				<th>TOTAL</th>
				<td>700</td>
				<td><input class="b" type="text" name="marks1" value="<?php echo $_GET['marks1'];?>"/></td>
				<td><input class="b" type="text" name="credits1" value="<?php echo $_GET['credits1'];?>"/></td>
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
	$seatno1=$_GET['seatno1'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch1=$_GET['batch1'];
	$semester1=$_GET['semester1'];
	$gender=$_GET['gender'];

	$ENG1=$_GET['ENG1'];
	$ENG2=$_GET['ENG2'];
	$ENG3=$_GET['ENG3'];
	$ENG4=$_GET['ENG4'];
	$ENG5=$_GET['ENG5'];
	$ENG6=$_GET['ENG6'];
	$ENG7=$_GET['ENG7'];

	$BSC1=$_GET['BSC1'];
	$BSC2=$_GET['BSC2'];
	$BSC3=$_GET['BSC3'];
	$BSC4=$_GET['BSC4'];
	$BSC5=$_GET['BSC5'];
	$BSC6=$_GET['BSC6'];
	$BSC7=$_GET['BSC7'];

	$BMS1=$_GET['BMS1'];
	$BMS2=$_GET['BMS2'];
	$BMS3=$_GET['BMS3'];
	$BMS4=$_GET['BMS4'];

	$ICT1=$_GET['ICT1'];
	$ICT2=$_GET['ICT2'];
	$ICT3=$_GET['ICT3'];
	$ICT4=$_GET['ICT4'];

	$EGE1=$_GET['EGE1'];
	$EGE2=$_GET['EGE2'];
	$EGE3=$_GET['EGE3'];
	$EGE4=$_GET['EGE4'];

	$WPC1=$_GET['WPC1'];
	$WPC2=$_GET['WPC2'];
	$WPC3=$_GET['WPC3'];
	$WPC4=$_GET['WPC4'];

	$TC1=$_GET['TC1'];
	$percentage1=$_GET['percentage1'];
	$marks1=$_GET['marks1'];
	$credits1=$_GET['credits1'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno12='$rollno12',seatno1='$seatno1',scheme='$scheme',email='$email',phoneno='$phoneno',batch1='$batch1',semester1='$semester1',gender='$gender',ENG1='$ENG1',ENG2='$ENG2',ENG3='$ENG3',ENG4='$ENG4',ENG5='$ENG5',ENG6='$ENG6',ENG7='$ENG7',BSC1='$BSC1',BSC2='$BSC2',BSC3='$BSC3',BSC4='$BSC4',BSC5='$BSC5',BSC6='$BSC6',BSC7='$BSC7', BMS1='$BMS1',BMS2='$BMS2',BMS3='$BMS3',BMS4='$BMS4', ICT1='$ICT1',ICT2='$ICT2',ICT3='$ICT3',ICT4='$ICT4', EGE1='$EGE1',EGE2='$EGE2',EGE3='$EGE3',EGE4='$EGE4', WPC1='$WPC1',WPC2='$WPC2',WPC3='$WPC3',WPC4='$WPC4', TC1='$TC1',percentage1='$percentage1',marks1='$marks1',credits1='$credits1'
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