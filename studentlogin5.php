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
	<form action="studentlogin5.php" method="post">
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
				<td><a href='update5.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno56=$result1[rollno56] & seatno5=$result1[seatno5] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch5=$result1[batch5] & semester5=$result1[semester5] & gender=$result1[gender] & EST1=$result1[EST1] & EST2=$result1[EST2] & EST3=$result1[EST3] & EST4=$result1[EST4] & OSY1=$result1[OSY1] & OSY2=$result1[OSY2] & OSY3=$result1[OSY3] & OSY4=$result1[OSY4] & OSY5=$result1[OSY5] & OSY6=$result1[OSY6] & OSY7=$result1[OSY7] & AJP1=$result1[AJP1] & AJP2=$result1[AJP2] & AJP3=$result1[AJP3] & AJP4=$result1[AJP4] & AJP5=$result1[AJP5] & AJP6=$result1[AJP6] & AJP7=$result1[AJP7] & STE1=$result1[STE1] & STE2=$result1[STE2] & STE3=$result1[STE3] & STE4=$result1[STE4] & STE5=$result1[STE5] & STE6=$result1[STE6] & STE7=$result1[STE7] & CSS_ACN_ADM1=$result1[CSS_ACN_ADM1] & CSS_ACN_ADM2=$result1[CSS_ACN_ADM2] & CSS_ACN_ADM3=$result1[CSS_ACN_ADM3] & CSS_ACN_ADM4=$result1[CSS_ACN_ADM4] & CSS_ACN_ADM5=$result1[CSS_ACN_ADM5] & CSS_ACN_ADM6=$result1[CSS_ACN_ADM6] & CSS_ACN_ADM7=$result1[CSS_ACN_ADM7]  & ITR1=$result1[ITR1] & ITR2=$result1[ITR2] & ITR3=$result1[ITR3] & ITR4=$result1[ITR4] & CPP1=$result1[CPP1] & CPP2=$result1[CPP2] & CPP3=$result1[CPP3] & CPP4=$result1[CPP4] & TC5=$result1[TC5] & percentage5=$result1[percentage5] & marks5=$result1[marks5] & credits5=$result1[credits5]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>