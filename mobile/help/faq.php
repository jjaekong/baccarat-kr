<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="faq">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="/mobile">HOME</a></li>
                        <li><a href="main.php">서비스</a></li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            FAQ <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#faq-1" aria-controls="faq-1" role="tab" data-toggle="tab">FAQ</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="faq-1">
                            <h3>자주 묻는 질문</h3>
                            <div>
                                <h4>글라스(또는 디캔터, 주전자, 화병)에 하얀 물때가 생겼어요. 물때를 지우려면 어떻게 해야하나요?</h4>
                                <p>하얀 물때는 칼슘 침전물이나 크리스탈 표면 열화로 인해 생깁니다. 칼슘 침전물이 원인인 경우에는 강한 디스켈링 처리를 통해 물때를 제거하는 것이 좋습니다. 표면 열화가 원인인 경우에는 바카라 부티크로 연락해주시면 수선업체를 알선해 드립니다.</p>
                            </div>
                            <div>
                                <h4>바카라 크리스탈 글라스를 식기세척기로 세척해도 되나요?</h4>
                                <p>가능합니다. 순한 식기세척기용 세제를 사용하실 것을 권장합니다.</p>
                            </div>
                            <div>
                                <h4>현재 보유하고 있는 바카라 크리스탈 제품의 시가를 알아보고 싶습니다. 방법을 알려주세요.</h4>
                                <p>해당 제품이 현재 미국 내 매장이나 온라인을 통해 판매되는 제품인 경우에 한하여 바카라 고객 센터 또는 바카라 부티크를 통해 확인하실 수 있습니다. 제품명이나 참조번호를 모르실 경우 웹사이트 내 카탈로그를 참조하시거나 가까운 바카라 매장을 방문해 주세요.</p>
                            </div>
                            <div>
                                <h4>바카라 글라스 세트의 제품이 손상되었습니다. 수선이 가능한가요?</h4>
                                <p>바카라는 수선 서비스를 제공하지 않습니다.</p>
                            </div>
                            <div>
                                <h4>바카라 제품을 선물 받았는데 다른 제품으로 교환하려면 어떻게 해야하나요?</h4>
                                <p>제품 및 포장을 가지고 바카라 부티크를 방문하시면 됩니다. 제품과 포장 모두 손상되지 않은 상태여야 합니다.</p>
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