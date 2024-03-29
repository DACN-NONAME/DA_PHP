<!-- ==========Banner-Section========== -->
<section class="banner-section">
    <div class="banner-bg bg_img bg-fixed" data-background="./assets/images/banner/banner01.jpg"></div>
    <div class="container">
        <div class="banner-content">
            <h1 class="title  cd-headline clip"><span class="d-block">đặt vé </span> xem
                <span class="color-theme cd-words-wrapper p-0 m-0">
                    <b class="is-visible">Phim</b>
                </span> hot
                <span class="d-block">ngay hôm nay</span>
            </h1>
            <p>Tiện lợi, nhanh chóng!</p>
        </div>
    </div>
</section>
<!-- ==========Banner-Section========== -->

<!-- ==========Ticket-Search========== -->
<section class="search-ticket-section padding-top pt-lg-0">
    <div class="container">
        <div class="search-tab bg_img" data-background="./assets/images/ticket/ticket-bg01.jpg">
            <div class="row align-items-center mb--20">
                <div class="col-lg-6 mb-20">
                    <div class="search-ticket-header">
                        <h6 class="category">welcome to NoName</h6>
                        <!--<h3 class="title">what are you looking for</h3>-->
                    </div>
                </div>
                <div class="col-lg-6 mb-20">
                    <ul class="tab-menu ticket-tab-menu">
                        <li class="active">
                            <div class="tab-thumb">
                                <img src="./assets/images/ticket/ticket-tab01.png" alt="ticket">
                            </div>
                            <span>movie</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-area">
                <div class="tab-item active">
                    <form class="ticket-search-form" action="films.html" method="GET">
                        <div class="form-group large">
                            <input type="text" placeholder="Tìm phim" name="keyword">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Ticket-Search========== -->

<!-- ==========Movie-Main-Section========== -->
<section class="movie-section padding-top padding-bottom bg-two">
    <div class="container">
        <div class="row flex-wrap-reverse justify-content-center">
            <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                <div class="widget-1 widget-facility">
                    <div class="widget-1-body">
                        <ul>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="./assets/images/sidebar/icons/sidebar01.png" alt="sidebar"></span>
                                    <span class="cate">24X7 Care</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="./assets/images/sidebar/icons/sidebar02.png" alt="sidebar"></span>
                                    <span class="cate">100% Assurance</span>
                                </a>
                            </li>
                            <li>
                                <a href="#0">
                                    <span class="img"><img src="./assets/images/sidebar/icons/sidebar03.png" alt="sidebar"></span>
                                    <span class="cate">Our Promise</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="./assets/images/sidebar/banner/banner01.jpg" alt="banner" />
                        </a>
                    </div>
                </div>
                <div class="widget-1 widget-banner">
                    <div class="widget-1-body">
                        <a href="#0">
                            <img src="./assets/images/sidebar/banner/banner03.jpg" alt="banner" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="article-section padding-bottom">
                    <div class="section-header-1">
                        <h2 class="title">Phim</h2>
                        <a class="view-all" href="films.html">Xem tất cả</a>
                    </div>
                    <div class="row mb-30-none justify-content-center">
                        <?php
                        $film = new Film();
                        foreach ($film->GetFilms() as $k => $v) {
                        ?>
                            <div class="col-sm-6 col-lg-4">
                                <div class="movie-grid">
                                    <div class="movie-thumb c-thumb">
                                        <a href="film-detail.html?id=<?php echo $v['id']; ?>">
                                            <img src="<?php echo $v['poster']; ?>" alt="movie" height="357px" width="255px" />
                                        </a>
                                    </div>
                                    <div class="movie-content bg-one">
                                        <h5 class="title m-0" style="font-size: 18px;">
                                            <a href="film-detail.html?id=<?php echo $v['id']; ?>"><?php echo $v['name']; ?></a>
                                        </h5>
                                        <ul class="movie-rating-percent">
                                            <li>
                                                <div class="thumb">
                                                    <img src="./assets/images/movie/tomato.png" alt="movie" />
                                                </div>
                                                <span class="content"><?php echo $v['duration']; ?> phút</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==========Movie-Main-Section========== -->
<jsp:include page="footer.jsp" />