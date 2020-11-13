<div id="Header">
        <nav class="row" id="pagemenu-search">
            <div class="logo">
                <a href="#">
                    <img class="logoimg" src="images/logokiyeufinal.png" alt="HCMedia">
                </a>
            </div> 
            <div class="topnav" id="mega">
                <ul class="main-nav" id="mytopnav">
                    <li>
                        <a href="#">
                            <span>TRANG CHỦ</span>
                        </a>
                    </li>
                    <li>
                        
                        <?php
                        
                         $sql = "SELECT*FROM categories";
                                $query = mysqli_query($conn,$sql);
                                while($rows = mysqli_fetch_assoc($query)){}
                        ?>
                        <a href="#">
                            <span><?php if($rows['level'] == 0){ echo $rows['name'];} ?></span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div col col1>
                                    <li>
                                        <a href="#"><?php if($rows['level'] == 1){ echo $rows['name'];} ?></a>
                                    </li>
                                </div>
                                

                                <!-- <div col col3>
                                    <li>
                                        <a href="#">Chụp ảnh tiệc sinh nhật</a>
                                    </li>
                                </div>
                                <div col col4>
                                    <li>
                                        <a href="#">Chụp ảnh sự kiện</a>
                                    </li>
                                </div>
                                <div col col5>
                                    <li>
                                        <a href="#">Chụp ảnh kỷ yếu tại Thái Bình</a>
                                    </li>
                                </div> -->
                                <div class="extend">
                                    <a href="#">Xem thêm</a>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span>BẢNG GIÁ</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div col col1>
                                    <li>
                                        <a href="#">Bảng giá chụp ảnh kỷ yếu</a>
                                    </li>
                                </div>
                                <div col col2>
                                    <li>
                                        <a href="#">Bảng giá chụp ảnh phóng sự cưới</a>
                                    </li>
                                </div>
                                <div col col3>
                                    <li>
                                        <a href="#">Bảng giá chụp ảnh tiệc sinh nhật</a>
                                    </li>
                                </div>
                                <div col col4>
                                    <li>
                                        <a href="#">Bảng giá chụp ảnh sự kiện</a>
                                    </li>
                                </div>
                                <div col col5>
                                    <li>
                                        <a href="#">Bảng giá chụp ảnh kỷ yếu tại Thái Bình</a>
                                    </li>
                                </div>
                                <div class="extend">
                                    <a href="#">Xem thêm</a>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span>KỶ YẾU MIỀN BẮC</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div col col1>
                                    <li>
                                        <a href="#">Kỷ yếu tại Hà Nội</a>
                                    </li>
                                </div>
                                <div col col2>
                                    <li>
                                        <a href="#">Kỷ yếu tại Hà Nam</a>
                                    </li>
                                </div>
                                <div col col3>
                                    <li>
                                        <a href="#">Kỷ yếu tại Nam Định</a>
                                    </li>
                                </div>
                                <div col col4>
                                    <li>
                                        <a href="#">Kỷ yếu tại Thái Bình</a>
                                    </li>
                                </div>
                                <div col col5>
                                    <li>
                                        <a href="#">Kỷ yếu tại Hải Phòng</a>
                                    </li>
                                </div>
                                <div class="extend">
                                    <a href="#">Xem thêm</a>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span>TOUR KỶ YẾU</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>THUÊ TRANG PHỤC</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div col col1>
                                    <li>
                                        <a href="#">Cho thuê cử nhân</a>
                                    </li>
                                </div>
                                <div col col2>
                                    <li>
                                        <a href="#">Cho thuê áo dài kỷ yếu</a>
                                    </li>
                                </div>
                                <div col col3>
                                    <li>
                                        <a href="#">Cho thuê vest kỷ yếu</a>
                                    </li>
                                </div>
                                <div col col4>
                                    <li>
                                        <a href="#">Cho thuê vest cưới</a>
                                    </li>
                                </div>
                                <div col col5>
                                    <li>
                                        <a href="#">Cho thuê quần đùi áo phông kỷ yếu</a>
                                    </li>
                                </div>
                                <div class="extend">
                                    <a href="#">Xem thêm</a>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span>GÓC TƯ VẤN</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span>LIÊN HỆ</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div col col1>
                                    <li>
                                        <a href="#">Bản đồ chỉ đường</a>
                                    </li>
                                </div>
                            </ul>
                        </div>
                    </li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </ul>
            </div> 
        </nav>
    </div>