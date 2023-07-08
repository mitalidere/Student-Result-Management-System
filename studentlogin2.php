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
window.location="sem12.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Student marksheet<br></div>
	<form action="studentlogin2.php" method="post">
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
				<td><a href='update2.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno12=$result1[rollno12] & seatno2=$result1[seatno2] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch2=$result1[batch2] & semester2=$result1[semester2] & gender=$result1[gender] & EEC1=$result1[EEC1] & EEC2=$result1[EEC2] & EEC3=$result1[EEC3] & EEC4=$result1[EEC4] & EEC5=$result1[EEC5] & EEC6=$result1[EEC6] & EEC7=$result1[EEC7] & AMI1=$result1[AMI1] & AMI2=$result1[AMI2] & AMI3=$result1[AMI3] & AMI4=$result1[AMI4] & BEC1=$result1[BEC1] & BEC2=$result1[BEC2] & BEC3=$result1[BEC3] & BEC4=$result1[BEC4] & BEC5=$result1[BEC5] & BEC6=$result1[BEC6] & BEC7=$result1[BEC7] & PCI1=$result1[PCI1] & PCI2=$result1[PCI2] & PCI3=$result1[PCI3] & PCI4=$result1[PCI4] & PCI5=$result1[PCI5] & PCI6=$result1[PCI6] & PCI7=$result1[PCI7]  & BCC1=$result1[BCC1] & BCC2=$result1[BCC2] & BCC3=$result1[BCC3] & BCC4=$result1[BCC4]  & CPH1=$result1[CPH1] & CPH2=$result1[CPH2] & CPH3=$result1[CPH3] & CPH4=$result1[CPH4]  & WPD1=$result1[WPD1] & WPD2=$result1[WPD2] & WPD3=$result1[WPD3] & WPD4=$result1[WPD4] & TC2=$result1[TC2] & percentage2=$result1[percentage2] & marks2=$result1[marks2] & credits2=$result1[credits2]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>