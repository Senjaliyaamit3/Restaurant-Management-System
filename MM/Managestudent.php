<?php
$con=mysqli_connect('localhost','root','','imca');
if($con)
{
		$select="select * from tbl_student";
		$res=mysqli_query($con,$select);
		$record=mysqli_num_rows($res);
		if($record>0)
		{
			echo"<table border='2' bgcolor='yellow' width='100%'>";
			echo "<tr><td colspan='3' align='center'><b>Student Data</b></td> <td colspan='2'><a href='Addstudent.php'>Add Student</a></td>";
			echo "<tr><td>Id</td> <td>Name</td> <td>Class</td> <td>Edit</td> <td>Delete</td></tr>";
			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>".$row['Id']."</td>";
				echo "<td>".$row['Name']."</td>";
				echo "<td>".$row['Class']."</td>";
				echo "<td>";
				echo '<a href="editstudent.php?id='.$row['Id'].'">Edit</a>';
				echo "</td>";
				echo "<td>";
				echo '<a href="deletestudent.php?id='.$row['Id'].'">Delete</a>';
				echo "</td>";
				echo "</tr>";
			}
			echo"</table>";
		}
		else
		{
				echo $record."Record Found";
		}
		
}
else
{
		echo "connection not success";
}
?>