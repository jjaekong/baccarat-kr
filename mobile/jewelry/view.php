<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/jewelry.css" rel="stylesheet">
</head>
<body class="jewelry">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="view">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">주얼리</a></li>
                        <li class="active">스카프</li>
                    </ol>
                </div>
                <div id="jewelry-figures" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="/mobile/images/dummy/img_jewelry_3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="/mobile/images/dummy/img_jewelry_2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="/mobile/images/dummy/img_jewelry_2.jpg" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#jewelry-figures" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                        <span class="sr-only">이전</span>
                    </a>
                    <a class="right carousel-control" href="#jewelry-figures" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                        <span class="sr-only">다음</span>
                    </a>
                </div>
                <div class="title">
                    <h2>LOUXOR 룩소르 실크 트윌 스카프</h2>
                    <p>실크 트윌 사각 스카프 140x140 cm</p>
                </div>
                <div class="summary">
                    <dl>
                        <dt>가격</dt>
                        <dd>123,456원</dd>
                    </dl>
                    <span>2809297</span>
                    <p>
                        룩소르 실크 트윌 사각 스카프는 다양한 컬러와 그래픽적인 모티브가 특징이며, 바카라 크리스탈의 컷팅을 상기시킨다.<br>
                        하우스의 아카이브에서 영감을 받은 특별한 액세서리이다.
                    </p>
                </div>
                <div class="options">
                    <form action="#" method="post" class="form-horizontal">
                        <div class="form-group form-group-sm">
                            <label class="col-xs-3 control-label" for="color">색상</label>
                            <div class="col-xs-9">
                                <select class="form-control input-sm" id="color">
                                    <option value="#">색상</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label class="col-xs-3 control-label" for="size">사이즈</label>
                            <div class="col-xs-9">
                                <select class="form-control input-sm" id="size">
                                    <option value="#">사이즈</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group form-group-sm">
                            <label class="col-xs-3 control-label" for="quantity">수량</label>
                            <div class="col-xs-9">
                                <select class="form-control input-sm" id="quantity">
                                    <option value="#">수량</option>
                                </select>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="submit" class="btn btn-default btn-block btn-sm">쇼핑리스트에 담기 <span class="glyphicon glyphicon-menu-right
"></span></button>
                        </div>
                    </form>
                    <div class="link-group">
                        <div class="row">
                            <div class="col-xs-6"><a href="#">위시 리스트에 담기</a></div>
                            <div class="col-xs-6"><a href="#">선물 리스트에 담기</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notes">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-4">
                            <p class="sns">
                                <a href="#"><img src="/mobile/images/ico_twitter.gif" alt="트위터"></a>
                                <a href="#"><img src="/mobile/images/ico_facebook.gif" alt="페이스북"></a>
                                <a href="#"><img src="/mobile/images/ico_pinterest.gif" alt="핀터레스트"></a>
                            </p>
                        </div>
                        <div class="col-xs-4"><a href="#" data-toggle="modal" data-target="#size-info">사이즈 정보</a></div>
                        <div class="col-xs-4"><a href="#" data-toggle="modal" data-target="#delivery-info">배송 및 교환</a></div>
                    </div>
                </div>
                <div id="size-info" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">사이즈 정보</h4>
                            </div>
                            <div class="modal-body">
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                                <p>사이즈 정보에 관련된 페이지 입니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="delivery-info" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">배송 및 교환</h4>
                            </div>
                            <div class="modal-body">
                                <p>배송 및 교환에 관련된 정보입니다. 배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.배송 및 교환에 관련된 정보입니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="collection">
                    <h4>같은 컬렉션 제품<span></span></h4>
                    <div id="related-figures" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a class="related-item">
                                            <figure>
                                                <img class="img-responsive" src="/mobile/images/dummy/img_jewelry_1.jpg" alt="">
                                            </figure>
                                            <h5>LOUXOR 룩소르 실크 트윌 스카프</h5>
                                            <small>레드</small>
                                            <p><strong>&#36;375.00</strong></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#related-figures" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                            <span class="sr-only">이전</span>
                        </a>
                        <a class="right carousel-control" href="#related-figures" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                            <span class="sr-only">다음</span>
                        </a>
                    </div>
                </div>
                <div class="designer">
                    <div class="figure">
                        <figure>
                            <img class="img-responsive" src="/mobile/images/dummy/img_designer.jpg">
                            <figcaption>바카라 샘플 텍스트</figcaption>
                        </figure>
                    </div>
                    <div class="details">
                        아코어(Harcourt) 컬렉션은 1841년 프랑스 루이-필립 왕의 의뢰로 제작되었으며, 지금까지 명성을 이어오고 있다.
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>