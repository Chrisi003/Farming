<?php
echo '<section class="container-fluid">';
echo '<section class="row">';
$product = $Product->get_product();
for ($i = 0; $i < count($product); $i++) {
    echo '<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">';
    echo '<div class="product_box">';
    echo '<figure><img src="' . $product[$i]->image . '" alt="#"/></figure>';
    echo '<h3 class="black">' . $product[$i]->name . '</h3>';
    echo '</div>';
    echo '</div>';
}
echo '</section>';
echo '</section>';
?>