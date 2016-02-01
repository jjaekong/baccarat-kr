<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="after-service">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="/mobile">HOME</a></li>
                        <li><a href="main.php">서비스</a></li>
                        <li class="active">AFTER-SALE SERVICE</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            AFTER-SALE SERVICE <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#after-service-1" aria-controls="after-service-1" role="tab" data-toggle="tab">수선</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="after-service-1">
                            <h3>수선</h3>
                            <div>
                                <p>가장 일반적인 수선은 다음과 같습니다.</p>
                                <ul>
                                    <li>스크래치 제거</li>
                                    <li>글라스, 고블릿, 화병, 장식품 등의 이가 나간 모서리 부분 수선</li>
                                    <li>광택을 되찾기 위한 폴리싱 작업</li>
                                </ul>
                                <p>바카라는 수선 서비스를 제공하지 않습니다.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_direct.php'); ?>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>