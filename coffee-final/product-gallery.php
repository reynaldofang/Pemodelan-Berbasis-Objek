<?php
require_once ("Product.php");
$product = new Product();
$productArray = $product->getAllProduct();
?>
<div id="product-grid">
    <div class="txt-heading"></div>
	<br><br><br> <p id='dummy'><font face= 'Palatino' size='6' color='silver'><center><u>OUR PRODUCTS</u></center></p></font>
	
<?php
if (! empty($productArray)) {
    foreach ($productArray as $k => $v) {
        ?>
		<div class="product-item">
        <form id="frmCart">
            <div class="product-image">
     <center><img src="<?php echo $productArray[$k]["image"]; ?>" width="250" height="250"></center>
            </div>
            <div>
                <div class="product-info">
              <center><strong><?php echo $productArray[$k]["name"]; ?></strong></center>
                </div>
                <center><div class="product-info product-price">Price : <?php echo "$".$productArray[$k]["price"]; ?></div></center>
                <div class="product-info">
                     <center><button type="button"
                        id="add_<?php echo $productArray[$k]["code"]; ?>"
                        class="btnAddAction cart-action"
                        onClick="cartAction('add','<?php echo $productArray[$k]["code"]; ?>')"> <center>
                         <center><img src="gambar/add-to-cart.png" /> <center>
                    </button>
                    <input type="text"
                        id="qty_<?php echo $productArray[$k]["code"]; ?>"
                        name="quantity" value="0" size="2" /><br><br>
                </div>
            </div>
        </form>
    </div>
	<?php
    }
}
?>
</div>