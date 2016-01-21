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
                <div class="carousel slide" data-ride="carousel">
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
                    <a class="left carousel-control" href="#" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">이전</span>
                    </a>
                    <a class="right carousel-control" href="#" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">다음</span>
                    </a>
                </div>
                <div class="title">
                    <h2>LOUXOR 룩소르 실크 트윌 스카프</h2>
                    <p>실크 트윌 사각 스카프 140x140 cm</p>
                </div>
                <div class="details">
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
                    <form action="#" method="post">
                    </form>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>