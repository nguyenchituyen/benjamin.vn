<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Benjamin</title>
    {!! Html::style('css/bootstrap.min.css')!!}
    {!! Html::style('css/font-awesome.min.css')!!}
    {!! Html::style('css/prettyPhoto.css')!!}
    {!! Html::style('css/price-range.css')!!}
    {!! Html::style('css/animate.css')!!}
    {!! Html::style('css/main.css')!!}
    {!! Html::style('css/responsive.css')!!}

    <!--[if lt IE 9]>
    {!! Html::script('js/html5shiv.js')!!}
    {!! Html::script('js/respond.min.js')!!}
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +090 333 8011</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@benjamin.vn</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-lock"></i>Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="logo pull-left">
                        <a href="#"><img src="images/home/camera-benjamin-gia-re-3.jpg" alt="" /></a>
                    </div>
                    <div class="benjamin-search">
                        <form method="GET" onsubmit="">
                            <div class="search-key-box pull-right">
                                <input id="search_keyword" name="search_keyword" type="search" placeholder="Nhập từ khóa tìm kiếm"/>
                            </div>
                            <div class="search-box">
                                <button id="search-btn" class="search-btn" title="Tìm Kiếm" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Tài khoản</a></li>
                            <li><a href="#"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="categories-main">
                        <div class="categories-content-title">
                            <a href="#"><i class="fa fa-bars"></i> DANH MỤC SẢN PHẨM</a>
                        </div>
                        <div class="categories-list-box">
                            <ul>
                                <li><a href="#"><img src="images/danh-muc-san-pham/lap-dat-camera-tron-bo.png"><span class="mc_title"><strong>Camera trọn bộ</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/camera-giam-sat.png"><span class="mc_title"><strong>Camera giám sát</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/dau-ghi-hinh-camera-quan-sat.png"><span class="mc_title"><strong>Đầu ghi hình camera</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/phu-kien-camera.png"><span class="mc_title"><strong>Phụ kiện camera</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/camera-thiet-bi-an-ninh.png"><span class="mc_title"><strong>Thiết bị an ninh</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/may-cham-cong-gia-re.png"><span class="mc_title"><strong>Máy chấm công</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/tong-dai-bo-dam.png"><span class="mc_title"><strong>Tổng đài - Bộ đàm</strong></span></a></li>
                                <li><a href="#"><img src="images/danh-muc-san-pham/thiet-bi-van-phong.png"><span class="mc_title"><strong>Thiết bị văn phòng</strong></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="navbar-collapse channel-entrance" data-toggle="collapse">
                        <a href="#"><i class="fa fa-star-o"></i> XU HƯỚNG</a>
                        <a href="#"><i class="fa fa-tag"></i> KHUYẾN MÃI</a>
                        <a href="#"><i class="fa fa-tags"></i> BÁN CHẠY</a>
                        <a href="#"><i class="fa fa-trophy"></i> THƯƠNG HIỆU</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<footer id="footer"><!--Footer-->
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-sm-7">

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="images/home/iframe1.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="images/home/iframe2.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="images/home/iframe3.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="video-gallery text-center">
                            <a href="#">
                                <div class="iframe-img">
                                    <img src="images/home/iframe4.png" alt="" />
                                </div>
                                <div class="overlay-icon">
                                    <i class="fa fa-play-circle-o"></i>
                                </div>
                            </a>
                            <p>Circle of Hands</p>
                            <h2>24 DEC 2014</h2>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="address">
                        <img src="images/home/map.png" alt="" />
                        <p>26 Nguyễn Văn Thạnh, Long Thạnh Mỹ, Quận 9, TP HCM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="social-claim">
                        <div class="claim_header">Cam kết</div>
                        <div class="claim">Sản phẩm hàng hóa chính hãng, đa dạng, phong phú</div>
                        <div class="claim">Luôn luôn giá rẻ và khuyến mại không ngừng</div>
                        <div class="claim">Dịch vụ chăm sóc khách hàng uy tín, tận tâm</div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="social-claim2">
                        <div class="claim_header">Hỗ trợ khách hàng</div>
                        <ul>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Xem camera giám sát qua điện thoại</a></li>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Xem camera quan sát qua máy tính</a></li>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Download tài liệu</a></li>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">HD cài đặt phần mềm Teamviewer</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                    <div class="social-claim2">
                        <div class="claim_header">Thông tin công ty</div>
                        <ul>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Giới thiệu</a></li>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Tuyển dụng</a></li>
                            <li><img src="images/camera-footer/list-style.png"><a href="#">Chính sách</a></li>
                        </ul>
                        <div id="social_us">
                            <div class="social_us_header">Kết nối với chúng tôi</div>
                            <div id="f_social">
                                <a target="_blank" rel="nofollow" href="https://www.facebook.com/chituyen.nguyen.98">
                                    <img src="images/camera-footer/f_fb.png">
                                </a>
                                <a target="_blank" rel="nofollow" href="#">
                                    <img src="images/camera-footer/f_gplus.png">
                                </a>
                                <a target="_blank" rel="nofollow" href="#">
                                    <img src="images/camera-footer/f_yt.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3 hidden-md">
                    <div class="social-claim2">
                        <div class="claim_header">Tổng đài trợ giúp</div>
                        <div style="margin: 10px;">
                            <table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
                                <tbody>
                                <tr>
                                    <td><img src="images/camera-footer/tro-giup.png" style="width: 68px; height: 81px;"></td>
                                    <td style="vertical-align: middle;">
                                        <p><span style="color:#333333;"><span style="font-size:14px;">Tư vấn khách hàng</span></span></p>
                                        <p><span style="color:#ba0000;"><span style="font-size:20px;"><strong>0120 4588 241</strong></span></span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <hr style="color: #000;">
                                        <span style="color:#555555;"><span style="font-size:13px;"><img src="images/camera-footer/life_saver.png">&nbsp;Chăm sóc và hỗ trợ sau bán hàng</span></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align: center;">
                                        <span style="color:#B22222;"><strong style="font-size:16px;">0903 338 011</strong></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span style="font-size:13px;"><span style="color:#555555;"><img src="images/camera-footer/mailer.png">&nbsp;benja.vn@gmail.com</span></span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-footer">
        <div class="row">
            <div class="col-xs-12 col-xs-offset-0 col-md-10 col-md-offset-1">
                <div class="row">
                    <div class="col-md-2 hidden-xs hidden-sm">
                        <div class="f-logo">
                            <a href="#">
                                <img title="LẮP ĐẶT CAMERA TRỌN BỘ GIÁ RẺ" alt="Benjamin Camera Việt Nam tự hào Nhà cung cấp thiết bị camera giám sát giá rẻ uy tín trên toàn quốc" src="images/home/camera-benjamin-gia-re-2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="f-address">
                            <p>
                                <span style="color:#ff6600;"><strong>LẮP ĐẶT CAMERA&nbsp;DỊCH VỤ&nbsp;BENJA&nbsp;&nbsp;VIỆT NAM TẠI HÀ NỘI</strong></span>
                                <span style="color:#FF8C00;"><strong>&nbsp;</strong></span><br>
                                Địa chỉ:
                                <span style="color:#FFD700;">Số 12 Ngõ 18/46 Định Công Thượng, Q.Hoàng Mai, TP. Hà Nội</span><br>
                                Điện thoại:
                                <span style="color:#FFD700;">&nbsp;0903 338 011&nbsp;-&nbsp;0120 4588 241</span><br>
                                Website:
                                <span style="color:#FFD700;">http://benja-camera.vn</span>
                            </p>
                            <p>
                                <span style="color:#ff6600;"><strong>LẮP ĐẶT CAMERA&nbsp;BENJA&nbsp;&nbsp;CHI NHÁNH TP.HCM</strong></span>
                                <span style="color:#FF8C00;"><strong>&nbsp;</strong></span><br>
                                Địa chỉ:
                                <span style="color:#FFD700;">Số 26 Nguyễn Văn Thạnh, P.Long Thạnh Mỹ, Quận 9, TP.HCM</span><br>
                                Điện thoại:
                                <span style="color:#FFD700;">&nbsp;0903 338 011&nbsp;-&nbsp;0120 4588 241</span><br>
                                Website:
                                <span style="color:#FFD700;">http://benja-camera.vn</span>
                            </p>
                            <p>&nbsp;</p>
                            <p>
                                <span style="color:#FF8C00;">Giới thiệu dịch vụ lắp đặt camera của Benja Việt Nam</span>
                            </p>
                            <p>
                                <em>
                                    Trước nhu cầu của thị trường và mở rộng ngành dịch vụ Công ty Benja Camera Việt Nam được sáng lập hoạt động kết hợp với Tập đoàn BENJAMIN triển khai lắp đặt Internet Cáp quang – Camera giám sát tại&nbsp;khắp các tỉnh thành cả nước.
                                    "Hiện chúng tôi đang phát triển kết hợp với một số <strong>đơn vị lắp đặt camera uy tín</strong> tạo nên một thị trường dịch vụ công nghệ uy tín trên toàn quốc".
                                </em>
                            </p>
                            <p>&nbsp;</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5">
                        <div class="f-address">
                            <p>
                                <strong >
                                    <span style="color:#FF8C00;">
                                        Trụ sở&nbsp;BENJAMIN VN Inc
                                    </span>
                                </strong>
                                <br style="font-size: 14px; line-height: 22.3999996185303px;">
                                <span style="font-size: 14px; line-height: 22.3999996185303px;">
                                    Địa chỉ:
                                    <span style="color:#FFD700;">KCN Quận 9, TP.HCM</span><br>
                                    Điện thoại:
                                    <span style="color:#FFD700;">0903&nbsp;338 011</span>
                                </span>
                            </p>
                            <p>
                                <span style="color:#FF8C00;">Hiện chúng tôi có các điểm dịch vụ như: </span>
                            </p>
                            <p>
                                <a href="#">
                                    <span style="color:#cccccc;">Lắp đặt camera tại các quận huyện thuộc TP.HCM và các tỉnh thành</span>
                                    <span style="color:#cccccc;">Lắp đặt camera tại các quận huyện thuộc Hà Nội và các tỉnh thành ...</span><br>
                                    <span style="color:#cccccc;">Quý khách cần lắp đặt camera, Internet vui lòng liên hệ để được tư vấn lắp đặt. </span>
                                </a>
                            </p>
                            <p>&nbsp;</p>
                            <p style="text-align: right;">
                                <img alt="Benja camera đã đăng ký bộ công thương" src="images/home/benja-camera-thong-bao-bo-cong-thuong.png">
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left">Copyright © 2013 BENJAMIN Inc. All rights reserved.</p>
                <p class="pull-right">Designed by <span><a target="_blank" href="http://nguyenchituyen.esy.es">BENJAMIN INC</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


{!! Html::script('js/jquery.js')!!}
{!! Html::script('js/bootstrap.min.js')!!}
{!! Html::script('js/jquery.scrollUp.min.js')!!}
{!! Html::script('js/price-range.js')!!}
{!! Html::script('js/jquery.prettyPhoto.js')!!}
{!! Html::script('js/main.js')!!}
</body>
</html>