<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base Template</title>
    <!-- Include Stylesheet -->
    <?php include "./component-styles.php" ?>
    <!-- End Include Stylesheet -->
</head>

<body>
    <!-- Include Header -->
    <!-- <?php
    include "./component-header.php"
    ?> -->
    <!-- End Include Header -->
    <main>

        <section id="component-prominent-tour">
            <div class="component-prominent-tour_content container">
                <h2 class="component-prominent-tour_content-header">
                    tour nổi bật
                </h2>

                <div class="component-card-list-prominent-tour">
                    <div class="row">
                        <?php for ($i = 0; $i < 6; $i++): ?>
                            <div class="col-12 col-md-4">
                                <div class="prominent-tour-card">
                                    <div class="component-card-tour_img">
                                        <div class="card-tour-img">
                                            <img src="./assets/imgLbi/japan.jpg" class="card-img-top tour-card-img" alt="...">
                                        </div>
                                        <div class="prominent-tour-card_standard">
                                            <i class="bi bi-star"></i>
                                            <span>Tiêu chuẩn</span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <span class="time-limit">thời lượng: 5N5Đ</span>
                                        <h5 class="card-title">NHẬT BẢN MÙA LÁ VÀNG 5N5Đ | OSAKA – NARA – KYOTO – YAMANASHI – TOKYO – NARITA</h5>
                                        <div class="prominent-tour-card_id">
                                            <p class="prominent-tour-card_id-tittle"><i class="bi bi-ticket-perforated"></i> Mã Tour: </p>
                                            <p class="prominent-tour-card_id-txt"> JAPANWAVE</p>
                                        </div>
                                        <div class="prominent-tour-card_start">
                                            <p class="prominent-tour-card_start-tittle"><i class="bi bi-geo-alt"></i> Nơi Khởi Hành: </p>    
                                            <p class="prominent-tour-card_start-txt"> TP Hà Nội</p>
                                        </div>
                                        <div class="prominent-tour-card_price">
                                            <p>24.000.000 </p>
                                            <p class="prominent-tour-card_price-VND">VNĐ</p>
                                        </div>
                                        <a href="#" class="btn detail-btn">Chi Tiết</a>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                        <button type="button" class="btn prominent-tour-button_show-more">Xem Thêm</button>
                    </div>
                </div>
            </div>
        </section>

        <section id="component-favourist-tour">
            <div class="component-favourist-tour-content container">
                <h2 class="component-prominent-tour_content-header">
                    điểm đến yêu thích
                </h2>

                <div class="component-card-list-favourist-tour">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="favourist-tour-item">
                                <div class="favourist-tour-item-overlay">
                                    <img src="./assets/imgLbi/americas.jpg" alt="" class="favourist-img">
                                    <div class="favourist-name-left">
                                        <i class="bi bi-airplane-engines"></i>
                                        <span>Châu Mỹ</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-6 col-md-6">
                                    <div class="favourist-tour-item">
                                        <div class="favourist-tour-item-overlay">
                                            <img src="./assets/imgLbi/austrailia.webp" alt="" class="favourist-img">
                                            <div class="favourist-name-right">
                                                <i class="bi bi-airplane-engines"></i>
                                                <span>Châu Úc</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-6 col-md-6">
                                    <div class="favourist-tour-item">
                                        <div class="favourist-tour-item-overlay">
                                            <img src="./assets/imgLbi/europe.jpg" alt="" class="favourist-img">
                                            <div class="favourist-name-right">
                                                <i class="bi bi-airplane-engines"></i>
                                                <span>Châu Âu</span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="favourist-tour-item ">
                                        <div class="favourist-tour-item-overlay">
                                            <img src="./assets/imgLbi/japan3.jpg" alt="" class="favourist-img">
                                            <div class="favourist-name-right-bottom">
                                                <i class="bi bi-airplane-engines"></i>
                                                <span>Nhật Bản</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>                    


    </main>
    <!-- Include Footer -->
    <?php include "./component-footer.php" ?>
    <!-- End Include Footer -->

    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>