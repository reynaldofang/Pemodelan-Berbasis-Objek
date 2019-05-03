<?php
session_start();
require_once ("Product.php");
$product = new Product();
$productArray = $product->getAllProduct();
if(!empty($_POST["action"])) {
switch($_POST["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {
		    $productByCode = $productArray[$_POST["code"]];
		    $itemArray = array($productByCode["code"]=>array('name'=>$productByCode["name"], 'code'=>$productByCode["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode["price"]));
			
			if(!empty($_SESSION["cart_item"])) {
			    $cartCodeArray = array_keys($_SESSION["cart_item"]);
			    if(in_array($productByCode["code"],$cartCodeArray)) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode["code"] == $k) {
							    $_SESSION["cart_item"][$k]["quantity"] = $_SESSION["cart_item"][$k]["quantity"]+$_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_POST["code"] == $k)
						unset($_SESSION["cart_item"][$k]);
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;		
}
}
?>
<?php
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>	
<table class="tutorial-table" align="center">
<tbody>
<tr>
<th><center><strong>Name</strong></center></th>
<th><strong>Code</strong></th>
<th class="align-right"><strong>Quantity</strong></th>
<th class="align-right"><strong>Price</strong></th>
<th></th>
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item){
		?>
				<tr>
				<td><center><strong><?php echo $item["name"]; ?> &nbsp </strong></center></td>
				<td><center> <?php echo $item["code"]; ?></td><center>
				<td align="center"> <?php echo $item["quantity"]; ?></td>
				<td align="center"><?php echo "$".$item["price"]; ?></td>
				<td align="center"><a onClick="cartAction('remove','<?php echo $item["code"]; ?>')" class="btnRemoveAction cart-action"><img src="gambar/icon-delete.png" /></a></td>
				</tr>
				<?php
        $item_total += ($item["price"]*$item["quantity"]);
		}
		?>

<tr>
<td colspan="3" align=right><strong>Total:</strong></td>
<td align=right><?php echo "$". number_format($item_total,2); ?></td>

 <br> <center><a href= "kurir.php"><input type="button" value="Pesan" ></center>


<script>
function msg() {
  alert("Pemesanan Berhasil ");
}
</script>
<td></td>
</tr>
</tbody>
</table>		
  <?php
}
?>