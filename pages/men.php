<html>

<head>
    <title>OneStop - Men</title>
    <link rel="icon" type="img/ico" href="../images/One1.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/products.css">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
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
                    Men
                </div>

                <div class="filter-main-title">
                    FILTERS
                </div>
            </div>

        </div>

        <div class="row mens-content">
            <div class="col-lg-2 filter-section-body">
                <div class="filter-section">
                    <div class="filter-title" id="category-title">
                        Categories <span id="plus"><i class="fa fa-angle-down"></i></span>
                    </div>
                    <div id="category-options">
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="shirt" />
                            <label class="form-check-label text-muted filter-label" for="shirt">Shirts</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="jeans" />
                            <label class="form-check-label text-muted filter-label" for="jeans">Jeans</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="tshirts" />
                            <label class="form-check-label text-muted filter-label" for="tshirts">T-Shirts</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="jackets" />
                            <label class="form-check-label text-muted filter-label" for="jackets">Jackets</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="sweatshirts" />
                            <label class="form-check-label text-muted filter-label" for="sweatshirts">Sweatshirts</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="suits" />
                            <label class="form-check-label text-muted filter-label" for="suits">Suits</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="blazers" />
                            <label class="form-check-label text-muted filter-label" for="blazers">Blazers & Coats</label>
                        </div>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-title" id="brand-title">
                        Brand <span id="plus"><i class="fa fa-angle-down"></i></span>
                    </div>
                    <div id="brand-options">
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="ucb" />
                            <label class="form-check-label text-muted filter-label" for="ucb">United Colors of Benetton</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="puma" />
                            <label class="form-check-label text-muted filter-label" for="puma">Puma</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="adidas" />
                            <label class="form-check-label text-muted filter-label" for="adidas">Adidas</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="nike" />
                            <label class="form-check-label text-muted filter-label" for="nike">Nike</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="roadster" />
                            <label class="form-check-label text-muted filter-label" for="roadster">Roadster</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="max" />
                            <label class="form-check-label text-muted filter-label" for="max">Max</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="aeropostale" />
                            <label class="form-check-label text-muted filter-label" for="aeropostale">Aeropostale</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="hm" />
                            <label class="form-check-label text-muted filter-label" for="hm">H & M</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="gap" />
                            <label class="form-check-label text-muted filter-label" for="gap">GAP</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="levis" />
                            <label class="form-check-label text-muted filter-label" for="levis">Levis</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="park-avenue" />
                            <label class="form-check-label text-muted filter-label" for="park-avenue">Park Avenue</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="louis" />
                            <label class="form-check-label text-muted filter-label" for="louis">Louis Philippe</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="louis" />
                            <label class="form-check-label text-muted filter-label" for="louis">Raymond</label>
                        </div>
                    </div>
                </div>

                <div class="filter-section">
                    <div class="filter-title" id="price-title">
                        Price <span id="plus"><i class="fa fa-angle-down"></i></span>
                    </div>
                    <div id="price-options">
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="ucb" />
                            <label class="form-check-label text-muted filter-label" for="ucb">Under $25</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="jeans" />
                            <label class="form-check-label text-muted filter-label" for="jeans">$25 to $50</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="tshirts" />
                            <label class="form-check-label text-muted filter-label" for="tshirts">$50 to $100</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="jackets" />
                            <label class="form-check-label text-muted filter-label" for="jackets">$100 to $200</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="sweatshirts" />
                            <label class="form-check-label text-muted filter-label" for="sweatshirts">$200 & Above</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md clothing">
                <div class="clothing-grid-container">

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/puma.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Puma
                                </div>
                                <div class="product-label">
                                    Solid Round Neck T-shirt
                                </div>
                                <div class="product-price">
                                    $17 <sub class="text-muted"><del>$25</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/h&m.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    H & M
                                </div>
                                <div class="product-label">
                                    Hooded Sweatshirt
                                </div>
                                <div class="product-price">
                                    $27
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/aeropostale.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Aeropostale
                                </div>
                                <div class="product-label">
                                    Printed Round Neck T-shirt
                                </div>
                                <div class="product-price">
                                    $18 <sub class="text-muted"><del>$25</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/levis.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Levis
                                </div>
                                <div class="product-label">
                                    Men 511 Slim Fit Jeans
                                </div>
                                <div class="product-price">
                                    $47 <sub class="text-muted"><del>$52</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/gap.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    GAP
                                </div>
                                <div class="product-label">
                                    Printed Sweatshirt
                                </div>
                                <div class="product-price">
                                    $30 <sub class="text-muted"><del>$60</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/raymond.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Ethnix By Raymond
                                </div>
                                <div class="product-label">
                                    Solid Kurta Set
                                </div>
                                <div class="product-price">
                                    $30 <sub class="text-muted"><del>$60</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/ucb.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    United Colors of Benneton
                                </div>
                                <div class="product-label">
                                    Solid Round Neck T-shirt
                                </div>
                                <div class="product-price">
                                    $10 <sub class="text-muted"><del>$15</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/ucb1.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    United Colors of Benneton
                                </div>
                                <div class="product-label">
                                    Men Slim Fit Casual Shirt
                                </div>
                                <div class="product-price">
                                    $26 <sub class="text-muted"><del>$65</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/parkavenue.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Park Avenue
                                </div>
                                <div class="product-label">
                                    Super Slim Fit Formal Blazer
                                </div>
                                <div class="product-price">
                                    $120
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/louis.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Louis Philippe
                                </div>
                                <div class="product-label">
                                    Men Single-Breasted Suit
                                </div>
                                <div class="product-price">
                                    $140
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/puma1.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Puma
                                </div>
                                <div class="product-label">
                                    Sporty Jacket
                                </div>
                                <div class="product-price">
                                    $52 <sub class="text-muted"><del>$88</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/roadster1.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Roadster
                                </div>
                                <div class="product-label">
                                    Men Solid Denim Jacket
                                </div>
                                <div class="product-price">
                                    $35 <sub class="text-muted"><del>$58</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>



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