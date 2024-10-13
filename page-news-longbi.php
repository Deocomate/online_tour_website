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
        <div class="container">
            <ul class="navigation-new-list">
                <li>
                    <a href="" class="nav-home-link">
                        <i class="bi bi-house-door"></i>
                    </a>
                    <i class="bi bi-chevron-right"></i>
                </li>
                <li>
                    <span> Tin tức và sự kiện </span>
                </li>
            </ul>
        </div>
        <section id="new-list">
            <div class="new-label container">
                <span>
                    tin tức và sự kiện
                </span>
            </div>
            <!-- news -->
            <ul class="item-list container">
                <?php for ($i = 0; $i < 20; $i++): ?>
                    <li>
                        <a href="" class="item-link">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="item-img">
                                        <img src="./assets/imgLbi/europe.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-8">
                                    <div class="item-info">
                                        <div class="uknow">
                                            <div class="uknow-cat">
                                                Những điều cần biết
                                            </div>
                                            <div class="uknow-date">
                                                24-10-2024
                                            </div>
                                        </div>
                                        <div class="item-title">
                                            Khám Phá Vẻ Đẹp Lãng Mạn và Di Sản Văn Hóa Độc Đáo Của Paris, Thủ Đô Ánh Sáng
                                        </div>
                                        <div class="item-des">
                                            Paris, thủ đô của nước Pháp, không chỉ nổi tiếng với vẻ đẹp lãng mạn mà còn là trung tâm của nghệ thuật, văn hóa và lịch sử. Thành phố này được biết đến với những biểu tượng huyền thoại như tháp Eiffel, một trong những công trình kiến trúc nổi tiếng nhất thế giới, đứng sừng sững bên dòng sông Seine thơ mộng. Mỗi năm, hàng triệu du khách từ khắp nơi trên thế giới ghé thăm để chiêm ngưỡng vẻ đẹp của nó.

                                            Bảo tàng Louvre, nơi lưu giữ hàng triệu tác phẩm nghệ thuật, bao gồm cả bức tranh Mona Lisa nổi tiếng, là một điểm dừng chân không thể thiếu. Không chỉ vậy, Paris còn nổi bật với các khu phố cổ kính như Montmartre, nơi từng là chốn dừng chân của những nghệ sĩ vĩ đại như Picasso và Van Gogh. Dạo bước trên những con phố lát đá, bạn sẽ cảm nhận được không khí nghệ thuật và sự sáng tạo đang ngập tràn trong từng góc phố.

                                            Ẩm thực Paris cũng là một trải nghiệm tuyệt vời. Từ những quán cà phê nhỏ xinh, nơi bạn có thể thưởng thức bánh croissant nóng hổi và café au lait, đến các nhà hàng sang trọng phục vụ món ăn tinh tế, thành phố này mang đến cho bạn một hành trình ẩm thực không thể nào quên. Đừng quên ghé thăm các cửa hàng bánh ngọt để thưởng thức các món đặc sản như macarons và éclairs.

                                            Paris còn là thiên đường mua sắm với những thương hiệu thời trang danh tiếng thế giới, từ Chanel đến Louis Vuitton. Bạn có thể dễ dàng tìm thấy những bộ sưu tập mới nhất tại các cửa hàng cao cấp trên đại lộ Champs-Élysées.

                                            Với lịch sử phong phú, văn hóa đa dạng và bầu không khí nghệ thuật tràn đầy, Paris chắc chắn sẽ để lại những kỷ niệm khó quên trong lòng mọi du khách. Hãy để mình bị cuốn hút bởi vẻ đẹp của thành phố ánh sáng và trải nghiệm những điều tuyệt vời mà Paris mang lại.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endfor; ?>
            </ul>
            <div class="row">
                <nav aria-label="Page navigation example" class="home-pagination">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link page-link-active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
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