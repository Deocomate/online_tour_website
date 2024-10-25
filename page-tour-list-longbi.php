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
            <ul class="navigation-list">
                <li>
                    <a href="" class="nav-home-link">
                        <i class="bi bi-house-door"></i>
                    </a>
                    <i class="bi bi-chevron-right"></i>
                </li>
                <li>
                    <span> Du Lịch </span>
                </li>
            </ul>
        </div>
        <section id="page-tour-list">
            <div class="page-tour-list-content container">
                <div class="row">
                    <!-- side bar -->
                    <div class="col-md-3 d-none d-md-block" style=" background-color: #f6f8fa">
                        <div class="tour-list-side-bar">
                            <div class="tour-list-radio">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Tour Nước Ngoài
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Tour Trong Nước
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Tour Cao Cấp
                                    </label>
                                </div>
                            </div>
                            <ul class="side-bar-list">
                                <li class="side-bar-item">
                                    <p class="item-tittle">
                                        điểm đi
                                    </p>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-dropdown-item" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Chọn điểm đi
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Hà Nội</a></li>
                                            <li><a class="dropdown-item" href="#">Hồ Chí Minh</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-bar-item">
                                    <p class="item-tittle">
                                        điểm đến
                                    </p>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-dropdown-item" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Chọn điểm đến
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Mỹ</a></li>
                                            <li><a class="dropdown-item" href="#">Úc</a></li>
                                            <li><a class="dropdown-item" href="#">Tokyo - Nhật Bản</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-bar-item">
                                    <p class="item-tittle">
                                        dòng tour
                                    </p>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-dropdown-item" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Chọn dòng tour
                                            <i class="bi bi-chevron-down"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">Tiết kiệm</a></li>
                                            <li><a class="dropdown-item" href="#">Tiêu chuẩn</a></li>
                                            <li><a class="dropdown-item" href="#">Cao cấp</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <div class="side-bar-day-input" id="dayDropdown">
                                <a class="btn-dropdown-input">
                                    <p class="item-tittle">số ngày</p>
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                                <div class="dropdown-items" style="display: none;">
                                    <div class="dropdown-container">
                                        <a href="#" class="dropdown-item">1-3 ngày</a>
                                        <a href="#" class="dropdown-item">4-7 ngày</a>
                                        <a href="#" class="dropdown-item">8-14 ngày</a>
                                        <a href="#" class="dropdown-item">Trên 14 ngày</a>
                                    </div>
                                </div>
                            </div>

                            <div class="side-bar-group-input" id="peopleDropdown">
                                <a class="btn-dropdown-input">
                                    <p class="item-tittle">số người</p>
                                    <i class="bi bi-chevron-down"></i>
                                </a>
                                <div class="dropdown-items" style="display: none;">
                                    <div class="dropdown-container">
                                        <a href="#" class="dropdown-item">1 người</a>
                                        <a href="#" class="dropdown-item">2 người</a>
                                        <a href="#" class="dropdown-item">3-5 người</a>
                                        <a href="#" class="dropdown-item">5+ người</a>
                                    </div>
                                </div>
                            </div>
                            <div class="side-bar-budget">
                                <label for="customRange1" class="form-label item-tittle">Ngân sách</label>
                                <input type="range" class="form-range" id="customRange1" min="0" max="100" step="1">
                                <div class="label-range">
                                    <span id="range-value1">0 triệu</span>
                                </div>
                            </div>
                            <div class="side-bar-check">
                                <p class="item-tittle">
                                    hiển thị những chuyến đi
                                </p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Khuyến mãi
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Còn chỗ
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- list tour -->
                    <div class="col-md-9">
                        <div class="row">
                            <div class="home-filter">
                                <span class="home-filter-label">
                                    du lịch
                                </span>
                                <div class="dropdown dropdown-arrange">
                                    <button class="btn btn-dropdown-arrange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span>
                                            <i class="bi bi-list"></i>
                                            Sắp xếp theo
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" style="color: red;" href="#">Mới nhất</a></li>
                                        <li><a class="dropdown-item" href="#">Giá thấp <i class="bi bi-arrow-right"></i> cao</a></li>
                                        <li><a class="dropdown-item" href="#">Giá cao <i class="bi bi-arrow-right"></i> thấp</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="home-product">
                                <div class="row">
                                    <?php for ($i = 0; $i < 9; $i++): ?>
                                        <div class="col-6 col-md-4">
                                            <div class="home-product-card">
                                                <div class="home-product-card_img">
                                                    <div class="card-img">
                                                        <img src="./assets/imgLbi/japan.jpg" class="card-img-top tour-card-img" alt="...">
                                                    </div>
                                                    <div class="home-product-card_standard">
                                                        <i class="bi bi-star"></i>
                                                        <span>Tiêu chuẩn</span>
                                                    </div>
                                                </div>
                                                <div class="home-product-card-body">
                                                    <span class="time-limit">thời lượng: 5N5Đ</span>
                                                    <h5 class="card-title">NHẬT BẢN MÙA LÁ VÀNG 5N5Đ | OSAKA – NARA – KYOTO – YAMANASHI – TOKYO – NARITA</h5>
                                                    <div class="home-product-card_id">
                                                        <p class="home-product-card_id-tittle"><i class="bi bi-ticket-perforated"></i> Mã Tour: </p>
                                                        <p class="home-product-card_id-txt"> JAPANWAVE</p>
                                                    </div>
                                                    <div class="home-product-card_start">
                                                        <p class="home-product-card_start-tittle"><i class="bi bi-geo-alt"></i> Nơi Khởi Hành: </p>
                                                        <p class="home-product-card_start-txt"> TP Hà Nội</p>
                                                    </div>
                                                    <div class="home-product-card_price">
                                                        <p>24.000.000 </p>
                                                        <p class="home-product-card_price-VND">VNĐ</p>
                                                    </div>
                                                    <a href="#" class="btn detail-btn">Chi Tiết</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
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
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <i class="bi bi-chevron-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="home-favourist">
                                <span class="home-favorist-label">
                                    điểm đến yêu thích
                                </span>
                                <div class="row mb-5">
                                    <?php for ($i = 0; $i < 4; $i++): ?>
                                        <div class="col-6 col-md-3">
                                            <div class="home-favorist-item">
                                                <div class="home-favorist-item-overlay">
                                                    <img src="./assets/imgLbi/americas.jpg" alt="" class="home-favorist-img">
                                                    <div class="home-favorist-name">
                                                        <i class="bi bi-airplane-engines"></i>
                                                        <span>Châu Mỹ</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endfor; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        document.querySelectorAll('.btn-dropdown-input').forEach(button => {
            button.addEventListener('click', function() {
                const dropdownItems = this.nextElementSibling; // Lấy phần tử kế tiếp
                const toggleIcon = this.querySelector('i'); // Lấy biểu tượng trong nút bấm

                // Toggle hiển thị các thẻ a
                if (dropdownItems.style.display === 'none' || dropdownItems.style.display === '') {
                    dropdownItems.style.display = 'block';
                    toggleIcon.classList.remove('bi-chevron-down');
                    toggleIcon.classList.add('bi-chevron-up');
                } else {
                    dropdownItems.style.display = 'none';
                    toggleIcon.classList.remove('bi-chevron-up');
                    toggleIcon.classList.add('bi-chevron-down');
                }
            });
        });

        // Lấy các phần tử cần thiết
        const rangeInput = document.getElementById('customRange1');
        const rangeValue = document.getElementById('range-value1');

        // Cập nhật giá trị khi thanh trượt thay đổi
        rangeInput.addEventListener('input', function() {
            rangeValue.textContent = `${rangeInput.value} triệu`;
        });
    </script>
    <!-- Include Footer -->
    <?php include "./component-footer.php" ?>
    <!-- End Include Footer -->

    <!-- Include Javascript -->
    <?php include "./component-javascripts.php" ?>
    <!-- End Include Javascript -->
</body>

</html>