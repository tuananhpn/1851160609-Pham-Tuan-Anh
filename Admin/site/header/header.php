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
                            include_once("function.php");
                        ?>
                        <a href="#">
                            <span>ALBUM</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul> <?php $rows = getAlbum(1); foreach ($rows as $row) { ?>
                                <div col class="extend">
                                    <li>
                                        <a href="#">
                                        <?php 
                                            echo $row['name'];
                                        ?>
                                        </a>
                                    </li>
                                </div>
                                <?php } ?>
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
                            <ul> <?php $rows = getAlbum(2); foreach ($rows as $row) { ?>
                                <div col class="extend">
                                    <li>
                                        <a href="#">
                                        <?php 
                                            echo $row['name'];
                                        ?>
                                        </a>
                                    </li>
                                </div>
                                <?php } ?>
                                <div class="extend">
                                    <a href="#">Xem thêm</a>
                                </div>
                            </ul>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <span>KỶ YẾU MIỀN BẮC</span>
                        </a>
                        <div class="container-11 nonSub">
                            <ul>
                                <div>
                                    <li>
                                        <a href="#">Kỷ yếu tại Hà Nội</a>
                                    </li>
                                </div>
                                <div >
                                    <li>
                                        <a href="#">Kỷ yếu tại Hà Nam</a>
                                    </li>
                                </div>
                                <div >
                                    <li>
                                        <a href="#">Kỷ yếu tại Nam Định</a>
                                    </li>
                                </div>
                                <div >
                                    <li>
                                        <a href="#">Kỷ yếu tại Thái Bình</a>
                                    </li>
                                </div>
                                <div>
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