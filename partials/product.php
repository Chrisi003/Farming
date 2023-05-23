<div class="container-fluid">
    <div class="row">
        <?php
        $products = $Product->get_product(); 
        if (!empty($products)) {
            foreach ($products as $product) {
                $productName = $product->name;
                $productImage = $product->image;
        ?>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 padding_left0">
                <div class="product_box">
                    <?php echo '<figure><img src="' . $productImage . '" alt="#"/></figure>'; ?>
                    <?php echo '<h3 class="black">' . $productName . '</h3>'; ?>
                </div>
            </div>
        <?php
            }
        } else {
            echo "<p>No products found.</p>";
        }
        ?>
    </div>
</div>