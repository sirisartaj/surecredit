<table>
	<tr><td>Loan Nmae</td><td>Loan status</td><td>Due Date</td></tr>
<?php 
foreach($list as $l){ ?>
<tr>
	<td><?php echo $l['loan_name'];?></td>
	<td><?php echo $l['admin_approved_status'];?></td>
	<td><?php echo $l['due_date'];?></td>
</tr>
<?php }

?>
</table>