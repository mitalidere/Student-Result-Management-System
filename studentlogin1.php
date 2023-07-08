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
	<form action="studentlogin1.php" method="post">
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
				<td><a href='update1.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno12=$result1[rollno12] & seatno1=$result1[seatno1] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch1=$result1[batch1] & semester1=$result1[semester1] & gender=$result1[gender] & ENG1=$result1[ENG1] & ENG2=$result1[ENG2] & ENG3=$result1[ENG3] & ENG4=$result1[ENG4] & ENG5=$result1[ENG5] & ENG6=$result1[ENG6] & ENG7=$result1[ENG7] & BSC1=$result1[BSC1] & BSC2=$result1[BSC2] & BSC3=$result1[BSC3] & BSC4=$result1[BSC4] & BSC5=$result1[BSC5] & BSC6=$result1[BSC6] & BSC7=$result1[BSC7] & BMS1=$result1[BMS1] & BMS2=$result1[BMS2] & BMS3=$result1[BMS3] & BMS4=$result1[BMS4] & ICT1=$result1[ICT1] & ICT2=$result1[ICT2] & ICT3=$result1[ICT3] & ICT4=$result1[ICT4] & EGE1=$result1[EGE1] & EGE2=$result1[EGE2] & EGE3=$result1[EGE3] & EGE4=$result1[EGE4] & WPC1=$result1[WPC1] & WPC2=$result1[WPC2] & WPC3=$result1[WPC3] & WPC4=$result1[WPC4] & TC1=$result1[TC1] & percentage1=$result1[percentage1] & marks1=$result1[marks1] & credits1=$result1[credits1]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>