<div class="container Outer">
        <div class="show-slide">
            <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="3"></li>
                    <li data-target="#carousel-example-1z" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/slide1.jpg"
                          alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide2.jpg"
                          alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide3.jpg"
                          alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide4.jpg"
                          alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide5.jpg"
                          alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <br class="clear">
        <div class="home-pagelist">
            <div class="page-list">
                <h2 class="page-list-h2">DỊCH VỤ TẠI HC MEDIA</h2>
                <div class="title-under_h2">
                    <div class="title-img"></div>
                    <p class="title-text">
                        <strong>
                            Dịch vụ sản phẩm hoàn hảo với các gói chụp ảnh ấn tượng độc lạ đẹp và được lựa chọn nhiều nhất năm 2020
                        </strong>
                    </p>
                </div>
                <div class="BlockContent">
                <?php 
                    $sql = "SELECT*FROM album";
                    $query =mysqli_query($conn,$sql);

                ?>
                <?php
                    $i = 0;
                    while ($rows = mysqli_fetch_array($query)) {
                        if ($i == 0) {
                    ?>
                    <div class="row">
                    <?php } ?>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/<?php echo $rows['image']; ?>.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4"><?php echo $rows['name']; ?></h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu "trọn gói- đẹp - rẻ "
                                </p>
                                <a class="view-more" href="#" >
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent4.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH SINH NHẬT</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh sinh nhật "trọn gói - đẹp - rẻ "
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <?php
                $i += 1;
                if ($i == 4){ $i =0; ?>
                    </div>
                    <?php } ?>
     <?php } ?>
                    <!-- <div class="row">
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent5.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU CẤP 2</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu cấp 2 " trọn gói- đẹp - rẻ " 
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent6.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU CẤP 3</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu " uy tín - chất lượng"
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent7.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU HÀ NỘI</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu " chuyên nghiệp - chất lượng cao"
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent8.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU THÁI BÌNH</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu hàng đầu tại Thái Bình
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent9.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU HƯNG YÊN</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu " chuyên nghiệp - chất lượng cao"
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent10.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU TOÀN MIỀN TRUNG</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu toàn miền trung chất lượng nhất!
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent11.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU THANH HÓA</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu " chuyên nghiệp - chất lượng cao"
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent12.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU TOÀN MIỀN BẮC</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu trọn gói tốt nhất toàn miền Bắc
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent13.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH KỶ YẾU DU LỊCH</h4>
                                <p>
                                    HC MEDIA cung cấp dịch vụ chụp ảnh kỷ yếu tour " trọn gói - đẹp - rẻ"
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent14.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH GIA ĐÌNH</h4>
                                <p>
                                    Chụp ảnh gia đình - trọn gói - giá rẻ tại Cộng Studio !!!
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent15.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH ÁO DÀI</h4>
                                <p>
                                    Chụp ảnh áo dài đẹp - chuyên nghiệp - chất lượng tại Cộng Studio!
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3" id="page-list-inside">
                            <a href="#" class="a">
                                <img class="rounded-circle" src="images/blockcontent16.jpg" width="240">
                            </a>
                            <div class="blockcontent-text">
                                <h4 class="blockcontent-text-h4">CHỤP ẢNH DÃ NGOẠI</h4>
                                <p>
                                    Chụp ảnh dã ngoại đẹp - uy tín - chất lượng cùng Cộng Studio !!!
                                </p>
                                <a class="view-more" href="#">
                                    Xem chi tiết
                                </a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <br class="clear">
        <br class="clear">
        <div class="BlockProducts" id="HomeProducts">
            <h2 class="page-list-h2">ALBUM ẢNH NỔI BẬT</h2>
            <div class="title-under_h2">
                <div class="title-img"></div>
                <p class="title-text">
                    <strong>
                        Một số album ảnh nổi bật HC MEDIA xem nhiều hơn bấm <a href="#">tại đây</a>
                    </strong>
                </p>
            </div>
            <div class="ProductList">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist1.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Chụp Ảnh Kỷ Yếu - Lớp 9A5 - THCS Đoàn Thị Điểm - Smiley Ville - Concept Bộ Đồ Thú </a>
                            </strong>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist2.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Chụp ảnh phóng sự cưới - Đăng Khoa & Hoàng Yến (DC)</a>
                            </strong>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist3.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Chụp Ảnh Sen Hồ Tây - Phương Mai</a>
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist4.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Chụp ảnh cúc họa mi - Cùng 999 bộ áo dài siêu đẹp</a>
                            </strong>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist5.jpg">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Chụp ảnh kỷ yếu cấp 2 - LỚP 9D THCS QUỲNH MAI - Ba Vì</a>
                            </strong>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card mb-4 box-shadow" id="card-list">
                            <a class="a">
                                <img class="card-img-top" src="images/productlist6.png">
                            </a>
                        </div>
                        <div class="card-body">
                            <strong>
                                <a class="card-text" href="#">Xem thêm sản phẩm & dịch vụ khác</a>
                            </strong>
                        </div>
                    </div>
                </div>  
            </div>
            <br class="clear">
            <br class="clear">
            <div class="BlockNew">
                <h2>THÔNG TIN & TIN TỨC</h2>
                <div class="NewList">
                    <div class="row">
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist1.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        CHỤP ẢNH GIA ĐÌNH -  HC MEDIA GẮN KẾT YÊU THƯƠNG
                                    </a>
                                </h3>
                                <p>
                                    CHỤP ẢNH GIA ĐÌNH - HC MEDIA GẮN KẾT YÊU THƯƠNG ✪ Gia đình là nơi duy nhất con người luôn cảm..
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist2.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        DỊCH VỤ CHỤP ẢNH ÁO DÀI TẠI HC MEDIA - NƠI NÉT ĐẸP LÀ TRUYỀN THỐNG
                                    </a>
                                </h3>
                                <p>
                                    DỊCH VỤ CHỤP ẢNH ÁO DÀI TẠI HC MEDIA - NƠI NÉT ĐẸP LÀ TRUYỀN THỐNG ✪ Nếu một ngày nàng muốn có..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist3.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        CHỤP ẢNH KỶ YẾU CẤP 3 - BỒI HỒI LƯU LẠI KÝ ỨC
                                    </a>
                                </h3>
                                <p>
                                    CHỤP ẢNH KỶ YẾU CẤP 3 - BỒI HỒI LƯU LẠI KÝ ỨC ✪ Thời gian thấm thoát thoi đưa, ấy thế mà chẳng..
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist4.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        CHỤP ẢNH KỶ YẾU HÀ NỘI - DỊCH VỤ CHỤP ẢNH UY TÍN GIỮA LÒNG THỦ ĐÔ
                                    </a>
                                </h3>
                                <p>
                                    CHỤP ẢNH KỶ YẾU HÀ NỘI - DỊCH VỤ CHỤP ẢNH UY TÍN GIỮA LÒNG THỦ ĐÔ ✪ Phố thị tấp nập, cái ồn ào..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist5.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        HC MEDIA - MỘT LẦN LƯU GIỮ, TRỌN ĐỜI KHẮC GHI
                                    </a>
                                </h3>
                                <p>
                                    HC MEDIA - MỘT LẦN LƯU GIỮ, TRỌN ĐỜI KHẮC GHI ✪ Cộng Studio đi vào hoạt động từ khá lâu, đây..
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6" id="news-list">
                            <div class="col-sm-2" id="news-img">
                                <a href="#">
                                    <img src="images/newlist6.jpg">
                                </a>
                            </div>
                            <div class="col-sm-10" id="news-content">
                                <h3>
                                    <a href="#">
                                        CHỤP ẢNH CỔ PHỤC - TỪ ĐỜI SỐNG ĐẾN ĐIỆN ẢNH
                                    </a>
                                </h3>
                                <p>
                                    CỔ PHỤC VIỆT - TỪ ĐỜI SỐNG ĐẾN ĐIỆN ẢNH ✪ Đã khi nào các bạn muốn được lội ngược quá khứ, khoác..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="view-more_right">
                        <a href="#" class="view-a">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br class="clear">
        <br class="clear">
        <div class="footer">
            <footer class="page-footer font-small teal pt-4">
                <div class="container-fluid text-center text-md-left">
                  <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">
                        <div class="footer-logo">
                            <a href="#">
                                <img src="images/logo.jpg">
                            </a>
                        </div>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-6 mb-md-0 mb-3">
                        <div class="footer-contact">
                            <ul>
                                <li>Mobile 1: 0384173088 </li>
                                <li>Mobile 2: 0904538236</li>
                                <li>Email: hcmedia@gmail.com</li>
                                <li>Địa chỉ: C15 Nguyễn Quý Đức, Thanh Xuân, Hà Nội</li>
                                <li>Địa chỉ 2: 230 Chùa Bộc, Đống Đa, Hà Nội</li>
                            </ul>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="footer-copyright text-center py-3">© 2020 HC MEDIA.
                  <a href="https://mdbootstrap.com/">HCMedia.com</a>
                </div>
            </footer>
        </div>
    </div>