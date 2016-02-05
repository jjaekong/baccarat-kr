<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/store.css" rel="stylesheet">
</head>
<body class="store">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="view">
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
                <section>
                    <header>
                        <h3>메종 바카라 서울</h3>
                        <ul>
                            <li>쥬얼리</li>
                            <li>데코레이션</li>
                            <li>바 &amp; 테이블웨어</li>
                        </ul>
                    </header>
                    <div class="map">
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="address">
                                <dl>
                                    <dt>주소</dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="contact">
                                <dl>
                                    <dt>연락처</dt>
                                    <dd></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="business">
                    </div>
                </section>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>