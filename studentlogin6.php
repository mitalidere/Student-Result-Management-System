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
window.location="sem56.php";
}
</script>
<body>
	<br><br><br><br><br><center><div class="div1">Student marksheet<br></div>
	<form action="studentlogin6.php" method="post">
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
				<td><a href='update6.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno56=$result1[rollno56] & seatno6=$result1[seatno6] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch6=$result1[batch6] & semester6=$result1[semester6] & gender=$result1[gender] & MGT1=$result1[MGT1] & MGT2=$result1[MGT2] & MGT3=$result1[MGT3] & MGT4=$result1[MGT4] & PWP1=$result1[PWP1] & PWP2=$result1[PWP2] & PWP3=$result1[PWP3] & PWP4=$result1[PWP4] & PWP5=$result1[PWP5] & PWP6=$result1[PWP6] & PWP7=$result1[PWP7] & MAD1=$result1[MAD1] & MAD2=$result1[MAD2] & MAD3=$result1[MAD3] & MAD4=$result1[MAD4] & MAD5=$result1[MAD5] & MAD6=$result1[MAD6] & MAD7=$result1[MAD7] & ETI1=$result1[ETI1] & ETI2=$result1[ETI2] & ETI3=$result1[ETI3] & ETI4=$result1[ETI4] & WBP_NIS_DWM1=$result1[WBP_NIS_DWM1] & WBP_NIS_DWM2=$result1[WBP_NIS_DWM2] & WBP_NIS_DWM3=$result1[WBP_NIS_DWM3] & WBP_NIS_DWM4=$result1[WBP_NIS_DWM4] & WBP_NIS_DWM5=$result1[WBP_NIS_DWM5] & WBP_NIS_DWM6=$result1[WBP_NIS_DWM6] & WBP_NIS_DWM7=$result1[WBP_NIS_DWM7] & EDE1=$result1[EDE1] & EDE2=$result1[EDE2] & EDE3=$result1[EDE3] & EDE4=$result1[EDE4] & CPE1=$result1[CPE1] & CPE2=$result1[CPE2] & CPE3=$result1[CPE3] & CPE4=$result1[CPE4] & TC6=$result1[TC6] & percentage6=$result1[percentage6] & marks6=$result1[marks6] & credits6=$result1[credits6]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>