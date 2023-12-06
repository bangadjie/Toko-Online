<section class="hero_section">
    <div class="container">
        <h1>Welcome to Gostore</h1>
        <p>Discover the latest and greatest products at unbeatable prices.</p>
        <a href="#product_section" class="cta-button">Explore Products</a>
    </div>
</section>
<section id="product_section" class="product_section">
    <div class="container">
        <div class="product_heading">
            <h2>Featured Products</h2>
        </div>
        <div class="row">
            <?php 
            include "koneksi.php";
            $qry_produk=mysqli_query($conn,"select * from produk");
            while($dt_produk=mysqli_fetch_array($qry_produk)){
            ?>
            <div class="col-md-4">
                <div class="product_box">
                    <img src="images/foto_produk/<?=$dt_produk['foto_produk']?>" alt="<?=$dt_produk['nama_produk']?>">
                    <h3><?=$dt_produk['nama_produk']?></h3>
                    <p><?=$dt_produk['deskripsi']?></p>
                    <p class="price">Rp. <?=$dt_produk['harga']?></p>
                    <div class="action_buttons">
                        <?php 
                        if($_SESSION['status_login'] != true) {
                        ?>
                            <a href="login.php" class="cta-button">Login To Buy</a>
                        <?php
                        } else {
                        ?>
                            <a href="beli_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="cta-button">Add To Cart</a>
                        <?php
                        }
                        ?>
                        <a href="detail_produk.php?id_produk=<?=$dt_produk['id_produk']?>" class="cta-button">View Details</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<section class="footer_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://php.design/">Free php Templates & Saya</a></p>
            </div>
            <div class="col-md-6">
                <div class="social_links">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

