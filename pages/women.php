<html>

    <head>
        <title>OneStop - Women</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/products.css">
        <link rel="stylesheet" type="text/css" href="../css/footer.css">
        <script src="../js/jquery-3.6.0.min.js"></script>
        <script src="../js/header.js"></script>
        <script src="../js/product.js"></script>
        <script src="../js/filter.js"></script>
    </head>
 
<body>
    <div class="container-fluid">

        <!--Header-->
        <?php
        include("header.php")
        ?>
        <!-- End of header -->

        <!--Products section-->
        <div class="row mens">
            <div class="mens-header">
                <div class="mens-title">
                    Women
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
                            <label class="form-check-label text-muted filter-label" for="shirt">Kurtas & Suits</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="jeans" />
                            <label class="form-check-label text-muted filter-label" for="jeans">Sarees</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="tshirts" />
                            <label class="form-check-label text-muted filter-label" for="tshirts">Ethnic wear</label>
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
                            <label class="form-check-label text-muted filter-label" for="suits">Skirts & Palazzos</label>
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
                            <label class="form-check-label text-muted filter-label" for="ucb">Here & Now</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="gap" />
                            <label class="form-check-label text-muted filter-label" for="gap">Nike</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="puma" />
                            <label class="form-check-label text-muted filter-label" for="puma">Max</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="adidas" />
                            <label class="form-check-label text-muted filter-label" for="adidas">Fabindia</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="nike" />
                            <label class="form-check-label text-muted filter-label" for="nike">Indo Era</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="roadster" />
                            <label class="form-check-label text-muted filter-label" for="roadster">GoSriki</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="max" />
                            <label class="form-check-label text-muted filter-label" for="max">Vaamsi</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="aeropostale" />
                            <label class="form-check-label text-muted filter-label" for="aeropostale">Varanga</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="hm" />
                            <label class="form-check-label text-muted filter-label" for="hm">H & M</label>
                        </div>
                        <div class="filter-options">
                            <input type="checkbox" class="form-check-input" id="gap" />
                            <label class="form-check-label text-muted filter-label" for="gap">Roadster</label>
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
                                <img src="../images/product/here&now.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Here & Now
                                </div>
                                <div class="product-label">
                                    Printed Cotton Kurta
                                </div>
                                <div class="product-price">
                                    $10 <sub class="text-muted"><del>$25</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/indoera.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Indo Era
                                </div>
                                <div class="product-label">
                                    Muted Hazelnut Kurta Set
                                </div>
                                <div class="product-price">
                                    $20 <sub class="text-muted"><del>$45</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/fabindia.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Fabindia
                                </div>
                                <div class="product-label">
                                    Printed Kurta
                                </div>
                                <div class="product-price">
                                    $50
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/max.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Max
                                </div>
                                <div class="product-label">
                                    Embroidered Straight Kurta
                                </div>
                                <div class="product-price">
                                    $10
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/here&now1.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Hero & Now
                                </div>
                                <div class="product-label">
                                    Printed Kurta With Palazzos
                                </div>
                                <div class="product-price">
                                    $25 <sub class="text-muted"><del>$50</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/saree.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    GoSriki
                                </div>
                                <div class="product-label">
                                    Embroidered Saree
                                </div>
                                <div class="product-price">
                                    $20 <sub class="text-muted"><del>$60</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/vaamsi.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Vaamsi
                                </div>
                                <div class="product-label">
                                    Printed Saree
                                </div>
                                <div class="product-price">
                                    $12 <sub class="text-muted"><del>$30</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/varanga.jpg" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Varanga
                                </div>
                                <div class="product-label">
                                    Women Tiered Skirt
                                </div>
                                <div class="product-price">
                                    $15 <sub class="text-muted"><del>$35</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/roadster2.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Roadster
                                </div>
                                <div class="product-label">
                                    Women Striped Sweatshirt
                                </div>
                                <div class="product-price">
                                    $20
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/nike1.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Nike
                                </div>
                                <div class="product-label">
                                    Printed SWOOSH Run Sweatshirt
                                </div>
                                <div class="product-price">
                                    $58
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/h&m2.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    H & M
                                </div>
                                <div class="product-label">
                                    Women Formal Blazer
                                </div>
                                <div class="product-price">
                                    $52
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="subproduct.php" target="_blank" class="product-link">
                        <div class="clothing-grid-item">
                            <div class="clothing-image">
                                <img src="../images/product/roadster3.webp" alt="Image not found" class="product-img" />
                            </div>
                            <div class="product-info">
                                <div class="brand-label">
                                    Roadster
                                </div>
                                <div class="product-label">
                                    Women Skinny Fit Crop Jeans
                                </div>
                                <div class="product-price">
                                    $28 <sub class="text-muted"><del>$35</del></sub>
                                </div>
                            </div>
                        </div>
                    </a>



                </div>
            </div>

            <!--End of products section-->
            
            <!--footer-->
            <?php include("footer.php");?>
            <!--End of footer-->

    </div>
</body>

</html>