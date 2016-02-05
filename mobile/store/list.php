<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/store.css" rel="stylesheet">
</head>
<body class="store">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="list">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="/mobile">HOME</a></li>
                        <li class="active">매장찾기</li>
                    </ol>
                </div>
                <div class="overview">
                    <figure>
                        <img class="img-responsive" src="/mobile/images/img_overview_store.jpg" alt="">
                    </figure>
                </div>
                <div class="search">
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="view-type">
                                    <h4>보기</h4>
                                    <ul>
                                        <li class="active"><a href="#"><span class="glyphicon glyphicon-map-marker"></span> 지도</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-menu-hamburger"></span> 목록</a></li>
                                    </ul>
                                </div>
                                <div class="location">
                                    <button type="button" class="btn btn-default btn-sm btn-block">현재 위치 보기</button>
                                    <p class="or">또는</p>
                                    <div class="form-group">
                                        <select class="form-control input-sm" name="">
                                            <option value="#">대한민국</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-sm" type="text" name="" placeholder="서울시, 강남구 ...">
                                    </div>
                                    <p class="btn-area">
                                        <button type="button" class="btn btn-default btn-sm">검색</button>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="category">
                                    <h4><span class="glyphicon glyphicon-triangle-bottom"></span> 제품 카테고리로 검색</h4>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                주얼리
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                데코레이션
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                바&amp;테이블웨어
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                조명
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                모든 제품 보기
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="store-type">
                                    <h4><span class="glyphicon glyphicon-triangle-bottom"></span> 매장 유형으로 검색</h4>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                바카라 부티크
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                백화점
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                쇼룸
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                공식 매장
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                레스토랑 B 바
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                바카라 박물관
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <section class="result-map">
                    <header>
                        <h3>"프랑스, 스트라스부르"에 대한 검색결과</h3>
                        <small>3개의 매장</small>
                    </header>
                    <div class="map">
                    </div>
                </section>
                <section class="result-list">
                    <header>
                        <h3>바카라 부티크</h3>
                    </header>
                    <div class="item">
                        <h4><i>1</i> <a href="#">메종 바카라 서울</a></h4>
                        <img class="flag" src="/mobile/images/img_boutique_flag.png" alt="Boutique">
                        <div class="row">
                            <div class="col-xs-4">
                                <figure>
                                    <img class="img-responsive" src="/mobile/images/dummy/img_result_figure.jpg">
                                </figure>
                            </div>
                            <div class="col-xs-8">
                                <div class="details">
                                    <dl class="addr">
                                        <dt>주소</dt>
                                        <dd><address>서울시 용산구 소월로 70</address></dd>
                                    </dl>
                                    <ul class="category">
                                        <li>쥬얼리</li>
                                        <li>데코레이션</li>
                                        <li>바&amp;테이블웨어</li>
                                    </ul>
                                    <dl class="contact">
                                        <dt>연락처</dt>
                                        <dd>Tel 02-3448-3778</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="menu">
                                    <ul>
                                        <li><a href="#">Find on map</a></li>
                                        <li><a href="#">See detailed record</a></li>
                                        <li><a href="#">Calculate your itinerary</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <h4><i>1</i> <a href="#">메종 바카라 서울</a></h4>
                        <img class="flag" src="/mobile/images/img_boutique_flag.png" alt="Boutique">
                        <div class="row">
                            <div class="col-xs-4">
                                <figure>
                                    <img class="img-responsive" src="/mobile/images/dummy/img_result_figure.jpg">
                                </figure>
                            </div>
                            <div class="col-xs-8">
                                <div class="details">
                                    <dl class="addr">
                                        <dt>주소</dt>
                                        <dd><address>서울시 용산구 소월로 70</address></dd>
                                    </dl>
                                    <ul class="category">
                                        <li>쥬얼리</li>
                                        <li>데코레이션</li>
                                        <li>바&amp;테이블웨어</li>
                                    </ul>
                                    <dl class="contact">
                                        <dt>연락처</dt>
                                        <dd>Tel 02-3448-3778</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="menu">
                                    <ul>
                                        <li><a href="#">Find on map</a></li>
                                        <li><a href="#">See detailed record</a></li>
                                        <li><a href="#">Calculate your itinerary</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
    <script>
        (function($) {
            $(document).on('click', '.search .view-type a', function() {
                console.log( $(this).parent().index() );
                if ( $(this).parent().hasClass('active') ) {
                    return false;
                }
                var clickedIndex = $(this).parent().index();
                $('.search .view-type ul li').removeClass('active');
                if (clickedIndex == 0) {
                    $('.result-map').show();
                }
                else if (clickedIndex == 1) {
                    $('.result-map').hide();
                }
                $(this).parent().addClass('active');
                return false;
            });
        })(jQuery);
    </script>
</body>
</html>