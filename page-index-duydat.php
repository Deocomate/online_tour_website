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
    <?php
    include "./component-header.php"
        ?>
    <!-- End Include Header -->
    <main>
        <section id="special-offer" class="component-top-tour">
            <div class="container">
                <h2>Ưu đãi đặc biệt</h2>
                <div class="owl-carousel owl-theme owl-carousel-one">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="item">
                            <a href="#"><img src="/assets/imgs/special_offer.jpg" alt=""></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section id="new-event" class="component-top-tour">
            <div class="container">
                <h2>Tin tức và sự kiện</h2>
                <div class="owl-carousel owl-theme owl-carousel-two">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="item">
                            <div class="item-img">
                                <a href="#"><img src="/assets/imgs/special_offer.jpg" alt=""></a>
                            </div>
                            <div class="item-content">
                                <p class="item__date">24-09-2024</p>
                                <h3 class="item__title">Cập nhật thời tiết hàn quốc và kinh nghiệm du lịch theo mùa không
                                    thể bỏ lỡ</h3>
                                <p class="item__des">Hàn Quốc luôn là điểm đến thu hút khách du lịch từ khắp nơi đến tham
                                    quan bởi thời tiết bốn mùa đều có sự thay đổi đa dạng, tạo nên nhiều cảnh quan xinh đẹp.
                                    Để đảm bảo chuyến đi của du khách trở nên trọn vẹn hơn, việc cập nhật thời tiết Hàn Quốc
                                    là điều vô cùng cần thiết. Dù là mùa xuân hoa anh ...</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="new-event_button">
                    <button type="button" class="btn btn-style">Xem Thêm</button>
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