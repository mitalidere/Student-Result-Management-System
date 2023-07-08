<html>
<script>
	function back()
{
window.location="studentlogin3.php";
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
$_GET['seatno3'];
$_GET['scheme'];
$_GET['email'];
$_GET['phoneno'];
$_GET['batch3'];
$_GET['semester3'];
$_GET['gender'];

$_GET['OOP1'];
$_GET['OOP2'];
$_GET['OOP3'];
$_GET['OOP4'];
$_GET['OOP5'];
$_GET['OOP6'];
$_GET['OOP7'];

$_GET['DSU1'];
$_GET['DSU2'];
$_GET['DSU3'];
$_GET['DSU4'];
$_GET['DSU5'];
$_GET['DSU6'];
$_GET['DSU7'];

$_GET['CGR1'];
$_GET['CGR2'];
$_GET['CGR3'];
$_GET['CGR4'];
$_GET['CGR5'];
$_GET['CGR6'];
$_GET['CGR7'];

$_GET['DMS1'];
$_GET['DMS2'];
$_GET['DMS3'];
$_GET['DMS4'];
$_GET['DMS5'];
$_GET['DMS6'];
$_GET['DMS7'];

$_GET['DTE1'];
$_GET['DTE2'];
$_GET['DTE3'];
$_GET['DTE4'];
$_GET['DTE5'];
$_GET['DTE6'];
$_GET['DTE7'];

$_GET['TC3'];
$_GET['percentage3'];
$_GET['marks3'];
$_GET['credits3'];

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
				<td><input class="a" type="text" name="rollno34" value="<?php echo $_GET['rollno34'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspSeat no. </td>
				<td><input class="a" type="text" name="seatno3" value="<?php echo $_GET['seatno3'];?>"/></td>
			</tr>
			<tr>
				<td>Scheme </td>
				<td><input class="a" type="text" name="scheme" value="<?php echo $_GET['scheme'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspEmail </td>
				<td><input class="a" type="text" name="email" value="<?php echo $_GET['email'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspPhone no. </td>
				<td><input class="a" type="text" name="phoneno" value="<?php echo $_GET['phoneno'];?>"/></td>
				<td>&nbsp&nbsp&nbsp&nbsp&nbspBatch </td>
				<td><input class="a" type="text" name="batch3" value="<?php echo $_GET['batch3'];?>"/></td>
			</tr>
			<tr>
				<td>Semester </td>
				<td><input class="a" type="text" name="semester3" value="<?php echo $_GET['semester3'];?>"/></td>
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
		<th rowspan=4>OBJECT ORIENTED PROGRAMMING USING C++</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="OOP1" value="<?php echo $_GET['OOP1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="OOP2" value="<?php echo $_GET['OOP2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="OOP3" value="<?php echo $_GET['OOP3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="OOP4" value="<?php echo $_GET['OOP4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="OOP5" value="<?php echo $_GET['OOP5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="OOP6" value="<?php echo $_GET['OOP6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="OOP7" value="<?php echo $_GET['OOP7'];?>"/></td>
	</tr>
<tr>
		<th rowspan=4>DATA STRUCTURE USING 'C'</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="DSU1" value="<?php echo $_GET['DSU1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="DSU2" value="<?php echo $_GET['DSU2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="DSU3" value="<?php echo $_GET['DSU3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="DSU4" value="<?php echo $_GET['DSU4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DSU5" value="<?php echo $_GET['DSU5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="DSU6" value="<?php echo $_GET['DSU6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DSU7" value="<?php echo $_GET['DSU7'];?>"/></td>
	</tr><tr>
		<th rowspan=4>COMPUTER GRAPHICS</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="CGR1" value="<?php echo $_GET['CGR1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="CGR2" value="<?php echo $_GET['CGR2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="CGR3" value="<?php echo $_GET['CGR3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="CGR4" value="<?php echo $_GET['CGR4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="CGR5" value="<?php echo $_GET['CGR5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="CGR6" value="<?php echo $_GET['CGR6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="CGR7" value="<?php echo $_GET['CGR7'];?>"/></td>
	</tr><tr>
		<th rowspan=4>DATABASE MANAGEMENT SYSTEM</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="DMS1" value="<?php echo $_GET['DMS1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="DMS2" value="<?php echo $_GET['DMS2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="DMS3" value="<?php echo $_GET['DMS3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="DMS4" value="<?php echo $_GET['DMS4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DMS5" value="<?php echo $_GET['DMS5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="DMS6" value="<?php echo $_GET['DMS6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DMS7" value="<?php echo $_GET['DMS7'];?>"/></td>
	</tr><tr>
		<th rowspan=4>DIGITAL TECHNIQUES</th>
		<td rowspan=2>TH</td>
		<td>ESE</td>
		<td>070</td>
		<td>028</td>
		<td><input class="b" type="text" name="DTE1" value="<?php echo $_GET['DTE1'];?>"/></td>
		<td rowspan=2>100</td>
		<td rowspan=2><input class="b" type="text" name="DTE2" value="<?php echo $_GET['DTE2'];?>"/></td>
		<td rowspan=4><input class="b" type="text" name="DTE3" value="<?php echo $_GET['DTE3'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>030</td>
		<td>000</td>
		<td><input class="b" type="text" name="DTE4" value="<?php echo $_GET['DTE4'];?>"/></td>
	</tr>
	<tr>
		<td rowspan=2>PR</td>
		<td>ESE</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DTE5" value="<?php echo $_GET['DTE5'];?>"/></td>
		<td rowspan=2>050</td>
		<td rowspan=2><input class="b" type="text" name="DTE6" value="<?php echo $_GET['DTE6'];?>"/></td>
	</tr>
	<tr>
		<td>PA</td>
		<td>025</td>
		<td>010</td>
		<td><input class="b" type="text" name="DTE7" value="<?php echo $_GET['DTE7'];?>"/></td>
	</tr>
	<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td><input class="b" type="text" name="TC3" value="<?php echo $_GET['TC3'];?>"/></td>
				<th colspan=2>PERCENTAGE</th>
				<td><input class="b" type="text" name="percentage3" value="<?php echo $_GET['percentage3'];?>"/></td>
				<th>TOTAL</th>
				<td>750</td>
				<td><input class="b" type="text" name="marks3" value="<?php echo $_GET['marks3'];?>"/></td>
				<td><input class="b" type="text" name="credits3" value="<?php echo $_GET['credits3'];?>"/></td>
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
	$seatno3=$_GET['seatno3'];
	$scheme=$_GET['scheme'];
	$email=$_GET['email'];
	$phoneno=$_GET['phoneno'];
	$batch3=$_GET['batch3'];
	$semester3=$_GET['semester3'];
	$gender=$_GET['gender'];

	$OOP1=$_GET['OOP1'];
	$OOP2=$_GET['OOP2'];
	$OOP3=$_GET['OOP3'];
	$OOP4=$_GET['OOP4'];
	$OOP5=$_GET['OOP5'];
	$OOP6=$_GET['OOP6'];
	$OOP7=$_GET['OOP7'];

	$DSU1=$_GET['DSU1'];
	$DSU2=$_GET['DSU2'];
	$DSU3=$_GET['DSU3'];
	$DSU4=$_GET['DSU4'];
	$DSU5=$_GET['DSU5'];
	$DSU6=$_GET['DSU6'];
	$DSU7=$_GET['DSU7'];

	$CGR1=$_GET['CGR1'];
	$CGR2=$_GET['CGR2'];
	$CGR3=$_GET['CGR3'];
	$CGR4=$_GET['CGR4'];
	$CGR5=$_GET['CGR5'];
	$CGR6=$_GET['CGR6'];
	$CGR7=$_GET['CGR7'];

	$DMS1=$_GET['DMS1'];
	$DMS2=$_GET['DMS2'];
	$DMS3=$_GET['DMS3'];
	$DMS4=$_GET['DMS4'];
	$DMS5=$_GET['DMS5'];
	$DMS6=$_GET['DMS6'];
	$DMS7=$_GET['DMS7'];

	$DTE1=$_GET['DTE1'];
	$DTE2=$_GET['DTE2'];
	$DTE3=$_GET['DTE3'];
	$DTE4=$_GET['DTE4'];
	$DTE5=$_GET['DTE5'];
	$DTE6=$_GET['DTE6'];
	$DTE7=$_GET['DTE7'];


	$TC3=$_GET['TC3'];
	$percentage3=$_GET['percentage3'];
	$marks3=$_GET['marks3'];
	$credits3=$_GET['credits3'];

	$query="UPDATE result1 SET studentname='$studentname',enrollmentno='$enrollmentno',rollno34='$rollno34',seatno3='$seatno3',scheme='$scheme',email='$email',phoneno='$phoneno',batch3='$batch3',semester3='$semester3',gender='$gender',OOP1='$OOP1',OOP2='$OOP2',OOP3='$OOP3',OOP4='$OOP4',OOP5='$OOP5',OOP6='$OOP6',OOP7='$OOP7',DSU1='$DSU1',DSU2='$DSU2',DSU3='$DSU3',DSU4='$DSU4',DSU5='$DSU5',DSU6='$DSU6',DSU7='$DSU7',CGR1='$CGR1',CGR2='$CGR2',CGR3='$CGR3',CGR4='$CGR4',CGR5='$CGR5',CGR6='$CGR6',CGR7='$CGR7',DMS1='$DMS1',DMS2='$DMS2',DMS3='$DMS3',DMS4='$DMS4',DMS5='$DMS5',DMS6='$DMS6',DMS7='$DMS7',DTE1='$DTE1',DTE2='$DTE2',DTE3='$DTE3',DTE4='$DTE4',DTE5='$DTE5',DTE6='$DTE6',DTE7='$DTE7',TC3='$TC3',percentage3='$percentage3',marks3='$marks3',credits3='$credits3'
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