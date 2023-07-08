<html>
<style>
body
{
		background-image:url("GPR blur22.jpg");
		background-repeat:no-repeat;
		background-size:120%;
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
		width:1100px;
		background-color:rgb(255,255,255,0.5);
		color:white;
		padding:40px 0px 40px 0px;
		font-size:20px;

}

</style>
<script language="Javascript" type="text/javascript">
function back()
{
window.location="sem34.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Student marksheet<br></div>
	<form action="studentlogin4.php" method="post">
	<div class="div2">
		Enrollment no. <input class="a" type="text" name="t1" id="t1"><br><br>
		<input class="s" type="button" name="b1" value="Back" onclick="back()">
		<input class="s" type="submit" name="b2" value="Login"></div>
	</form>
	<?php
$servername="localhost";
$db_user="root";
$db_pass="";
$db_name="project";
if(isset($_POST['b2']))
{
$t1=$_POST['t1'];
$conn=new mysqli($servername,$db_user,$db_pass,$db_name);
$query="SELECT * FROM result1 WHERE enrollmentno='$t1'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>
	<div class="div3">
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
	
	<?php
	while($result1=mysqli_fetch_assoc($data))
	{
		echo"<tr>
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
				<td><a href='update4.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno34=$result1[rollno34] & seatno4=$result1[seatno4] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch4=$result1[batch4] & semester4=$result1[semester4] & gender=$result1[gender] & JPR1=$result1[JPR1] & JPR2=$result1[JPR2] & JPR3=$result1[JPR3] & JPR4=$result1[JPR4] & JPR5=$result1[JPR5] & JPR6=$result1[JPR6] & JPR7=$result1[JPR7] & SEN1=$result1[SEN1] & SEN2=$result1[SEN2] & SEN3=$result1[SEN3] & SEN4=$result1[SEN4] & SEN5=$result1[SEN5] & SEN6=$result1[SEN6] & SEN7=$result1[SEN7] & DCC1=$result1[DCC1] & DCC2=$result1[DCC2] & DCC3=$result1[DCC3] & DCC4=$result1[DCC4] & DCC5=$result1[DCC5] & DCC6=$result1[DCC6] & DCC7=$result1[DCC7] &  MIC1=$result1[MIC1] & MIC2=$result1[MIC2] & MIC3=$result1[MIC3] & MIC4=$result1[MIC4] & MIC5=$result1[MIC5] & MIC6=$result1[MIC6] & MIC7=$result1[MIC7]  & GAD1=$result1[GAD1] & GAD2=$result1[GAD2] & GAD3=$result1[GAD3] & GAD4=$result1[GAD4] & TC4=$result1[TC4] & percentage4=$result1[percentage4] & marks4=$result1[marks4] & credits4=$result1[credits4]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>