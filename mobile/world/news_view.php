<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/world.css" rel="stylesheet">
</head>
<body class="world">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="news">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li class="active"><a href="#">바카라의 세계</a></li>
                    </ol>
                </div>
                <div class="filter">
                    <form action="#" method="post">
                        <select name="" class="form-control input-sm">
                            <option value="">전체 뉴스 보기</option>
                        </select>
                    </form>
                </div>
                <div class="view">
                    <div class="category"><img src="/mobile/images/ico_pencil.gif" aria-hidden="true"><strong>최신 뉴스</strong></div>
                    <h4 class="title">실크의 역사</h4>
                    <div class="details">
                        <!-- 게시판 내용(아래 태그는 삭제해 주세요) -->
                        <p><img class="img-responsive" src="/mobile/images/dummy/img_news_details.gif"></p>
                        <!-- // 게시판 내용 -->
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm btn-goto-list" href="#">목록으로 <span class="glyphicon glyphicon-menu-right
"></span></button></a>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>