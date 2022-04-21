<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once('../includes/templates/ProductOps.php');

$prod = new ProductOps();

$subCatId = 3;
$checkedCategory = [];
$checkedBrand = [];
if (isset($_GET['category'])) {
    $checkedCategory = $_GET['category'];
}
if (isset($_GET['brand'])) {
    $checkedBrand = $_GET['brand'];
}
if (isset($_GET['price'])) {
    $checkedPrice = true;
    $price = $_GET['price'];
} else {
    $checkedPrice = false;
    $price = '0,99999';
}
?>
<html>

<head>
    <title>OneStop - Kids</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/products.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/filter.js"></script>
    <script src="../js/product.js"></script>
    <script src="../js/header.js"></script>
</head>

<body>
    <div class="container-fluid">
        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->
        <!--products section-->
        <div class="row mens">
            <div class="mens-header">
                <div class="mens-title">
                    Kids
                </div>
                <div class="filter-main-title">
                    FILTERS
                </div>
            </div>
        </div>
        <div class="row mens-content">
            <div class="col-lg-2 filter-section-body">
                <form action="" method="GET" id="filterForm">
                    <div class="filter-section">

                        <div class="filter-title" id="category-title">
                            Categories <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="category-options">
                            <?php
                            $data = $prod->getAllCategory();
                            foreach ($data as $row) {
                                $cat = $row["cat_name"];
                            ?>
                                <div class="filter-options">
                                    <input type="checkbox" class="form-check-input" id="<?php echo $cat ?>" value="<?php echo $cat ?>" name="category[]" <?php if (in_array($cat, $checkedCategory)) {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?> />
                                    <label class="form-check-label text-muted filter-label"><?php echo $cat ?></label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="filter-section">
                        <div class="filter-title" id="brand-title">
                            Brand <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="brand-options">
                            <?php
                            $data = $prod->getAllBrand();
                            foreach ($data as $row) {
                                $brand = $row["brand_name"];
                            ?>
                                <div class="filter-options">
                                    <input type="checkbox" class="form-check-input" id="<?php echo $brand ?>" value="<?php echo $brand ?>" name="brand[]" <?php if (in_array($brand, $checkedBrand)) {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?> />
                                    <label class="form-check-label text-muted filter-label"><?php echo $brand ?></label>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                    <div class="filter-section">
                        <div class="filter-title" id="price-title">
                            Price <span id="plus"><i class="fa fa-angle-down"></i></span>
                        </div>
                        <div id="price-options">
                            <div class="filter-options">
                                <input type="radio" class="form-check-input" name="price" value="0,24" <?php if ($price == '0,24') {
                                                                                                            echo 'checked';
                                                                                                        } ?> />
                                <label class="form-check-label text-muted filter-label" for="ucb">Under $25</label>
                            </div>
                            <div class="filter-options">
                                <input type="radio" class="form-check-input" name="price" value="25,49" <?php if ($price == '25,49') {
                                                                                                            echo 'checked';
                                                                                                        } ?> />
                                <label class="form-check-label text-muted filter-label" for="jeans">$25 to $49</label>
                            </div>
                            <div class="filter-options">
                                <input type="radio" class="form-check-input" name="price" value="50,99" <?php if ($price == '50,99') {
                                                                                                            echo 'checked';
                                                                                                        } ?> />
                                <label class="form-check-label text-muted filter-label" for="tshirts">$50 to $99</label>
                            </div>
                            <div class="filter-options">
                                <input type="radio" class="form-check-input" name="price" value="100,199" <?php if ($price == '100,199') {
                                                                                                                echo 'checked';
                                                                                                            } ?> />
                                <label class="form-check-label text-muted filter-label" for="jackets">$100 to $199</label>
                            </div>
                            <div class="filter-options">
                                <input type="radio" class="form-check-input" name="price" value="200,99999" <?php if ($price == '200,99999') {
                                                                                                                echo 'checked';
                                                                                                            } ?> />
                                <label class="form-check-label text-muted filter-label" for="sweatshirts">$200 & Above</label>
                            </div>
                        </div>
                    </div>

                    <div class="filter-section">
                    <br>
                        <button type="submit" class="btn btn-danger filter-btn">Filter</button>&nbsp;&nbsp;
                        <a href="kids.php"><button type="button" class="btn btn-danger filter-btn">Reset All</button></a>
                    </div>
                </form>
            </div>

            <div class="col-md clothing">
                <div class="clothing-grid-container">
                    <?php
                    if (isset($_GET['category']) || isset($_GET['brand']) || $checkedPrice) {
                        $priceArr = explode(',', $price);
                        $data = $prod->filterProd($checkedCategory, $subCatId, $checkedBrand, $priceArr);
                        if ($data) {
                            foreach ($data as $row) {
                                $prodId = $row["product_id"];
                                $prodName = $row["product_name"];
                                $prodBrand = $row["brand_name"];
                                $prodPhoto = $row["product_img"];
                                $prodImg = explode(",", $prodPhoto);
                                $prodPrice = $row["product_price"];
                                $prodMrp = $row["product_mrp"];
                    ?>
                                <a href="subproduct.php?id=<?php echo $prodId; ?>" target="_blank" class="product-link">
                                    <div class="fade clothing-grid-item">
                                        <div class="clothing-image">
                                            <img src="../images/product/<?php echo $prodBrand . "/" . $prodImg[0]; ?>" alt="Image not found" class="product-img" />
                                        </div>
                                        <div class="product-info">
                                            <div class="brand-label">
                                                <?php echo $prodBrand; ?>
                                            </div>
                                            <div class="product-label">
                                                <?php echo ucwords(strtolower($prodName)); ?>
                                            </div>
                                            <div class="product-price">
                                                <?php
                                                if ($prodPrice == $prodMrp) {
                                                    echo "$$prodMrp";
                                                } else {
                                                    echo "$$prodPrice <sub class='text-muted'><del>$$prodMrp</del></sub>";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            <?php
                            }
                        } else { ?>
                            <div class="col-md clothing" style="text-align: center;">
                                <br><br>
                                <h4>Matching product not found, try other options</h4><br><br>
                                <h4>Need help?</h4>
                                Visit the <a href="contact.php" style="text-decoration:none;">contact us </a>page
                            </div>
                        <?php }
                    } else {
                        $data = $prod->displayProdBySub($subCatId);
                        foreach ($data as $row) {
                            $prodId = $row["product_id"];
                            $prodName = $row["product_name"];
                            $prodBrand = $row["brand_name"];
                            $prodPhoto = $row["product_img"];
                            $prodImg = explode(",", $prodPhoto);
                            $prodPrice = $row["product_price"];
                            $prodMrp = $row["product_mrp"];
                        ?>
                            <a href="subproduct.php?id=<?php echo $prodId; ?>" target="_blank" class="product-link">
                                <div class="fade clothing-grid-item">
                                    <div class="clothing-image">
                                        <img src="../images/product/<?php echo $prodBrand . "/" . $prodImg[0]; ?>" alt="Image not found" class="product-img" />
                                    </div>
                                    <div class="product-info">
                                        <div class="brand-label">
                                            <?php echo $prodBrand; ?>
                                        </div>
                                        <div class="product-label">
                                            <?php echo ucwords(strtolower($prodName)); ?>
                                        </div>
                                        <div class="product-price">
                                            <?php
                                            if ($prodPrice == $prodMrp) {
                                                echo "$$prodMrp";
                                            } else {
                                                echo "$$prodPrice <sub class='text-muted'><del>$$prodMrp</del></sub>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--End of products section-->
        <!--footer-->
        <?php include("footer.php"); ?>
        <!--End of footer-->
    </div>
</body>

</html>