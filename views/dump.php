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
  <form>
    <?php foreach($data1 as $med):?>
      <tr>
        <td><?=$med['med_id']?></td>
        <td><?=$med['med_name']?></td>
        <td><?=$med['med_cost']?></td>
        <td><?=$med['med_quant']?></td>
        <td></td>
        <td><a href="#">[Add To Cart]</a></td>
      </tr>
    <?php endforeach ?>
  </form> 
</table>
