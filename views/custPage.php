<style type="text/css">
	table, td
	{
		border: 		1px solid black;
	}
</style>
<a href="../home/logout">[LOGOUT]</a><br>
<table>
	<tr>
		<td>Medicine ID</td>
		<td>Medicine Name</td>
		<td>Medicine Cost</td>
		<td>Medicine Quantity</td>
		<td>Order(Max 10)</td>
		<td>Add to Cart</td>
	</tr>
	<form action="../home/calculatePrice" method="post">
		<?php foreach($data1 as $med):?>
			<tr>
				<td><?=$med['med_id']?></td>
				<td><?=$med['med_name']?></td>
				<td><?=$med['med_cost']?></td>
				<td><?=$med['med_quant']?></td>
				<td><input type="text" name="<?=$med['med_id']?>"/></td>
				<td><a href="#">[Add To Cart]</a></td>
			</tr>
		<?php endforeach ?>
				<input type="submit" value="SUBMIT">
				<br><br>
	</form>	
</table>

