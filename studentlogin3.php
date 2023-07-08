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
	<form action="studentlogin3.php" method="post">
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
				<td><a href='update3.php? 
						studentname=$result1[studentname] & enrollmentno=$result1[enrollmentno] & rollno34=$result1[rollno34] & seatno3=$result1[seatno3] & scheme=$result1[scheme] & email=$result1[email] & phoneno=$result1[phoneno] & batch3=$result1[batch3] & semester3=$result1[semester3] & gender=$result1[gender] & OOP1=$result1[OOP1] & OOP2=$result1[OOP2] & OOP3=$result1[OOP3] & OOP4=$result1[OOP4] & OOP5=$result1[OOP5] & OOP6=$result1[OOP6] & OOP7=$result1[OOP7] & DSU1=$result1[DSU1] & DSU2=$result1[DSU2] & DSU3=$result1[DSU3] & DSU4=$result1[DSU4] & DSU5=$result1[DSU5] & DSU6=$result1[DSU6] & DSU7=$result1[DSU7] & CGR1=$result1[CGR1] & CGR2=$result1[CGR2] & CGR3=$result1[CGR3] & CGR4=$result1[CGR4] & CGR5=$result1[CGR5] & CGR6=$result1[CGR6] & CGR7=$result1[CGR7] & DMS1=$result1[DMS1] & DMS2=$result1[DMS2] & DMS3=$result1[DMS3] & DMS4=$result1[DMS4] & DMS5=$result1[DMS5] & DMS6=$result1[DMS6] & DMS7=$result1[DMS7] & DTE1=$result1[DTE1] & DTE2=$result1[DTE2] & DTE3=$result1[DTE3] & DTE4=$result1[DTE4] & DTE5=$result1[DTE5] & DTE6=$result1[DTE6] & DTE7=$result1[DTE7] & TC3=$result1[TC3] & percentage3=$result1[percentage3] & marks3=$result1[marks3] & credits3=$result1[credits3]'>Edit</a></td>
			</tr>";
	}
}
}
?>
</table></div>
</center>
</body>
</html>