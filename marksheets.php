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
		width:1100px;
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
	<form action="marksheets.php" method="post">
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
$query1="SELECT * FROM result1 WHERE batch1='$t1' AND semester1='$t2'";
$data1=mysqli_query($conn,$query1);
$total1=mysqli_num_rows($data1);
if($total1!=0)
{
	while($result1=mysqli_fetch_assoc($data1))
	{
		echo"<table border=1>
		<tr>
		<br><td colspan=2>Name:".$result1['studentname']."</td>
		<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
		</tr>
		<tr>
		<td>Examination:".$result1['batch1']."</td>
		<td colspan=4>Seat no.:".$result1['seatno1']."</td>
		<td colspan=4>Semester:".$result1['semester1']."</td>
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
				<td>".$result1['ENG1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['ENG2']."</td>
				<th rowspan=4>".$result1['ENG3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['ENG4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['ENG5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['ENG6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['ENG7']."</td>
			</tr>

			<tr>
				<th rowspan=4>BASIC SCIENCE</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['BSC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['BSC2']."</td>
				<th rowspan=4>".$result1['BSC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['BSC4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['BSC5']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['BSC6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['BSC7']."</td>
			</tr>
			<tr>
				<th rowspan=2>BASIC MATHEMATICS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['BMS1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['BMS2']."</td>
				<th rowspan=2>".$result1['BMS3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['BMS4']."</td>
			</tr>
				<tr>
				<th rowspan=2>FUNDAMENTALS OF ICT</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['ICT1']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['ICT2']."</td>
				<th rowspan=2>".$result1['ICT3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['ICT4']."</td>
			</tr>
				<tr>
				<th rowspan=2>ENGINEERING GRAPHICS</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['EGE1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['EGE2']."</td>
				<th rowspan=2>".$result1['EGE3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['EGE4']."</td>
			</tr>
			<tr>
				<th rowspan=2>WORKSHOP PRACTICE</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['WPC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['WPC2']."</td>
				<th rowspan=2>".$result1['WPC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['WPC4']."</td>

		</tr>
		<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC1']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage1']."</td>
				<th>TOTAL</th>
				<td>700</td>
				<td>".$result1['marks1']."</td>
				<td>".$result1['credits1']."</td>
		</tr>";
	}
}
echo"</table>";
$query2="SELECT * FROM result1 WHERE batch2='$t1' AND semester2='$t2'";
$data2=mysqli_query($conn,$query2);
$total2=mysqli_num_rows($data2);
if($total2!=0)
{
	while($result1=mysqli_fetch_assoc($data2))
	{
		echo"<table border=1>
		<tr>
		<br><td colspan=2>Name:".$result1['studentname']."</td>
		<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
		</tr>
		<tr>
		<td>Examination:".$result1['batch2']."</td>
		<td colspan=4>Seat no.:".$result1['seatno2']."</td>
		<td colspan=4>Semester:".$result1['semester2']."</td>
		<tr>
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
				<td>".$result1['EEC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['EEC2']."</td>
				<th rowspan=4>".$result1['EEC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['EEC4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['EEC5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['EEC6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['EEC7']."</td>
			</tr>
			<tr>
				<th rowspan=2>APPLIED MATHEMATICS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['AMI1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['AMI2']."</td>
				<th rowspan=2>".$result1['AMI3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['AMI4']."</td>
			</tr>
			<tr>
				<th rowspan=4>BASIC ELECTRONICS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['BEC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['BEC2']."</td>
				<th rowspan=4>".$result1['BEC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['BEC4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['BEC5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['BEC6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['BEC7']."</td>
			</tr>
			<tr>
				<th rowspan=4>PROGRAMMING IN 'C'</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['PCI1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['PCI2']."</td>
				<th rowspan=4>".$result1['PCI3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['PCI4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['PCI5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['PCI6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['PCI7']."</td>
			</tr>
			<tr>
				<th rowspan=2>BUSINESS COMMUNICATIONS USING COMPUTERS</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>035</td>
				<td>014</td>
				<td>".$result1['BCC1']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['BCC2']."</td>
				<th rowspan=2>".$result1['BCC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>015</td>
				<td>006</td>
				<td>".$result1['BCC4']."</td>
			</tr>
				<tr>
				<th rowspan=2>COMPUTER PERIPHERAL AND HARDWARE MAINTENANCE</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPH1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['CPH2']."</td>
				<th rowspan=2>".$result1['CPH3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPH4']."</td>
			</tr>
			<tr>
				<th rowspan=2>WEB PAGE DESIGNING WITH HTML</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['WPD1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['WPD2']."</td>
				<th rowspan=2>".$result1['WPD3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['WPD4']."</td>
			</tr>
			<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC2']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage2']."</td>
				<th>TOTAL</th>
				<td>800</td>
				<td>".$result1['marks2']."</td>
				<td>".$result1['credits2']."</td>
			</tr>";
	}
}
echo"</table>";
$query3="SELECT * FROM result1 WHERE batch3='$t1' AND semester3='$t2'";
$data3=mysqli_query($conn,$query3);
$total3=mysqli_num_rows($data3);
if($total3!=0)
{
	while($result1=mysqli_fetch_assoc($data3))
	{
		echo"<table border=1>
		<tr>
			<br><td colspan=2>Name:".$result1['studentname']."</td>
			<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
		</tr>
		<tr>
		<td>Examination:".$result1['batch3']."</td>
		<td colspan=4>Seat no.:".$result1['seatno3']."</td>
		<td colspan=4>Semester:".$result1['semester3']."</td>
		<tr>
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
				<th rowspan=4>OBJECT ORIENTED PROGRAMMING USING C++</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['OOP1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['OOP2']."</td>
				<th rowspan=4>".$result1['OOP3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['OOP4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['OOP5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['OOP6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['OOP7']."</td>
			</tr>
			<tr>
				<th rowspan=4>DATA STRUCTURE USING 'C'</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['DSU1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['DSU2']."</td>
				<th rowspan=4>".$result1['DSU3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['DSU4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DSU5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['DSU6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DSU7']."</td>
			</tr>
			<tr>
				<th rowspan=4>COMPUTER GRAPHICS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['CGR1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['CGR2']."</td>
				<th rowspan=4>".$result1['CGR3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['CGR4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['CGR5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['CGR6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['CGR7']."</td>
			</tr>
			<tr>
				<th rowspan=4>DATABASE MANAGEMENT SYSTEM</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['DMS1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['DMS2']."</td>
				<th rowspan=4>".$result1['DMS3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['DMS4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DMS5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['DMS6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DMS7']."</td>
			</tr>
			<tr>
				<th rowspan=4>DIGITAL TECHNIQUES</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['DTE1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['DTE2']."</td>
				<th rowspan=4>".$result1['DTE3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['DTE4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DTE5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['DTE6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DTE7']."</td>
			</tr>
		<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC3']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage3']."</td>
				<th>TOTAL</th>
				<td>750</td>
				<td>".$result1['marks3']."</td>
				<td>".$result1['credits3']."</td>
			</tr>";
	}
}
echo"</table>";
$query4="SELECT * FROM result1 WHERE batch4='$t1' AND semester4='$t2'";
$data4=mysqli_query($conn,$query4);
$total4=mysqli_num_rows($data4);
if($total4!=0)
{
	while($result1=mysqli_fetch_assoc($data4))
	{
		echo"<table border=1>
			<tr>
				<br><td colspan=2>Name:".$result1['studentname']."</td>
				<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
			</tr>
			<tr>
		<td>Examination:".$result1['batch4']."</td>
		<td colspan=4>Seat no.:".$result1['seatno4']."</td>
		<td colspan=4>Semester:".$result1['semester4']."</td>
		<tr>
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
				<th rowspan=4>JAVA PROGRAMMING</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['JPR1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['JPR2']."</td>
				<th rowspan=4>".$result1['JPR3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['JPR4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['JPR5']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['JPR6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['JPR7']."</td>
			</tr>
			<tr>
				<th rowspan=4>SOFTWARE ENGINEERING</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['SEN1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['SEN2']."</td>
				<th rowspan=4>".$result1['SEN3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['SEN4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['SEN5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['SEN6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['SEN7']."</td>
			</tr>
			<tr>
				<th rowspan=4>DATA COMMUNICATION AND COMPUTER NETWORK</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['DCC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['DCC2']."</td>
				<th rowspan=4>".$result1['DCC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['DCC4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DCC5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['DCC6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['DCC7']."</td>
			</tr>
			<tr>
				<th rowspan=4>MICROPROCESSORS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['MIC1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['MIC2']."</td>
				<th rowspan=4>".$result1['MIC3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['MIC4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['MIC5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['MIC6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['MIC7']."</td>
			</tr>
			<tr>
				<th rowspan=2>GUI APPLICATION DEVELOPMENT USING VB.NET</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['GAD1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['GAD2']."</td>
				<th rowspan=2>".$result1['GAD3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['GAD4']."</td>
				
			</tr>
		<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC4']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage4']."</td>
				<th>TOTAL</th>
				<td>750</td>
				<td>".$result1['marks4']."</td>
				<td>".$result1['credits4']."</td>
			</tr>";
	}
}
echo"</table>";
$query5="SELECT * FROM result1 WHERE batch5='$t1' AND semester5='$t2'";
$data5=mysqli_query($conn,$query5);
$total5=mysqli_num_rows($data5);
if($total5!=0)
{
	while($result1=mysqli_fetch_assoc($data5))
	{
		echo"<table border=1>
			<tr>
				<br><td colspan=2>Name:".$result1['studentname']."</td>
				<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
				</tr>
				<tr>
		<td>Examination:".$result1['batch5']."</td>
		<td colspan=4>Seat no.:".$result1['seatno5']."</td>
		<td colspan=4>Semester:".$result1['semester5']."</td>
		<tr>
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
						<th rowspan=2>ENVIRONMENTAL STUDIES</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['ITR1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['ITR2']."</td>
				<th rowspan=2>".$result1['ITR3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['ITR4']."</td>
				
			</tr><tr>
				<th rowspan=4>OPERATING SYSTEMS</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['OSY1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['OSY2']."</td>
				<th rowspan=4>".$result1['OSY3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['OSY4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['OSY5']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['OSY6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['OSY7']."</td>
			</tr>
			<tr>
				<th rowspan=4>ADVANCED JAVA PROGRAMMING</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['AJP1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['AJP2']."</td>
				<th rowspan=4>".$result1['AJP3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['AJP4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['AJP5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['AJP6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['AJP7']."</td>
			</tr>
			<tr>
				<th rowspan=4>SOFTWARE TESTING</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['STE1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['STE2']."</td>
				<th rowspan=4>".$result1['STE3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['STE4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['STE5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['STE6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['STE7']."</td>
			</tr>
			<tr>
				<th rowspan=4>CLIENT SIDE SCRIPTING LANGUAGE/<br>ADVANCED COMPUTER NETWORK/<br>ADVANCED DATABASE MANAGEMENT SYSTEM</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['CSS_ACN_ADM1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['CSS_ACN_ADM2']."</td>
				<th rowspan=4>".$result1['CSS_ACN_ADM3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['CSS_ACN_ADM4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['CSS_ACN_ADM5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['CSS_ACN_ADM6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['CSS_ACN_ADM7']."</td>
			</tr>
			<tr>
				<th rowspan=2>INDUSTRIAL TRAINING</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['ITR1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['ITR2']."</td>
				<th rowspan=2>".$result1['ITR3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['ITR4']."</td>
				
			</tr>
			<tr>
				<th rowspan=2>CAPSTONE PROJECT PLANNING</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPP1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['CPP2']."</td>
				<th rowspan=2>".$result1['CPP3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPP4']."</td>
				
			</tr>
			<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC5']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage5']."</td>
				<th>TOTAL</th>
				<td>750</td>
				<td>".$result1['marks5']."</td>
				<td>".$result1['credits5']."</td>
			</tr>";
	}
}
echo"</table>";
$query6="SELECT * FROM result1 WHERE batch6='$t1' AND semester6='$t2'";
$data6=mysqli_query($conn,$query6);
$total6=mysqli_num_rows($data6);
if($total6!=0)
{
	while($result1=mysqli_fetch_assoc($data6))
	{
		echo"<table border=1>
			<tr>
				<br><td colspan=2>Name:".$result1['studentname']."</td>
				<td colspan=7>Enrollment no.:".$result1['enrollmentno']."</td>
			</tr>
			<tr>
		<td>Examination:".$result1['batch6']."</td>
		<td colspan=4>Seat no.:".$result1['seatno6']."</td>
		<td colspan=4>Semester:".$result1['semester6']."</td>
		<tr>
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
				<th rowspan=2>MANAGEMENT</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['MGT1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['MGT2']."</td>
				<th rowspan=2>".$result1['MGT3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['MGT4']."</td>
				
			</tr>
			<tr>
				<th rowspan=4>PROGRAMMING WITH PYTHON</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['PWP1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['PWP2']."</td>
				<th rowspan=4>".$result1['PWP3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['PWP4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['PWP5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['PWP6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['PWP7']."</td>
			</tr>
			<tr>
				<th rowspan=4>MOBILE APPLICATION DEVELOPMENT</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['MAD1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['MAD2']."</td>
				<th rowspan=4>".$result1['MAD3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['MAD4']."</td>
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['MAD5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['MAD6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['MAD7']."</td>
			</tr>
			<tr>
				<th rowspan=2>EMERGING TRENDS IN COMPUTER AND INFORMATION TECHNOLOGY</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['ETI1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['ETI2']."</td>
				<th rowspan=2>".$result1['ETI3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['ETI4']."</td>
			</tr>
			<tr>
				<th rowspan=4>WEB BASED APPLICATION DEVELOPMENT USING PHP/<br>NETWORK AND INFORMATION SECURITY/<br>DATA WAREHOUSING WITH MINING TECHNIQUES</th>
				<td rowspan=2>TH</td>
				<td>ESE</td>
				<td>070</td>
				<td>028</td>
				<td>".$result1['WBP_NIS_DWM1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['WBP_NIS_DWM2']."</td>
				<th rowspan=4>".$result1['WBP_NIS_DWM3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>030</td>
				<td>000</td>
				<td>".$result1['WBP_NIS_DWM4']."</td>
				
			</tr>
			<tr>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['STE5']."</td>
				<td rowspan=2>050</td>
				<td rowspan=2>".$result1['STE6']."</td>
			</tr>
			<tr>
				<td>PA</td>
				<td>025</td>
				<td>010</td>
				<td>".$result1['STE7']."</td>
			</tr>
			<tr>
				<th rowspan=2>ENTERPRENEURSHIP DEVELOPMENT</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['EDE1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['EDE2']."</td>
				<th rowspan=2>".$result1['EDE3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['EDE4']."</td>
				
			</tr>
			<tr>
				<th rowspan=2>CAPSTONE PROJECT-EXECUTION & REPORT WRITING</th>
				<td rowspan=2>PR</td>
				<td>ESE</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPE1']."</td>
				<td rowspan=2>100</td>
				<td rowspan=2>".$result1['CPE2']."</td>
				<th rowspan=2>".$result1['CPE3']."</th>
			</tr>
			<tr>
				<td>PA</td>
				<td>050</td>
				<td>020</td>
				<td>".$result1['CPE4']."</td>
				
			</tr>
			<tr>
				<th>TOTAL CREDITS ACQUIRED IN LOWER SEMESTER EXAMS</th>
				<td>".$result1['TC6']."</td>
				<th colspan=2>PERCENTAGE</th>
				<td>".$result1['percentage6']."</td>
				<th>TOTAL</th>
				<td>850</td>
				<td>".$result1['marks6']."</td>
				<td>".$result1['credits6']."</td>
			</tr>";

	}
}
}
echo"</table></div>";
?>
</center></body></html>