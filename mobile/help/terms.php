<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="terms">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="/mobile">HOME</a></li>
                        <li><a href="main.php">서비스</a></li>
                        <li class="active">약관</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            약관 <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#terms-1" aria-controls="terms-1" role="tab" data-toggle="tab">판매 약정</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="terms-1">
                            <h3>판매 약정</h3>
                            <div>
                                <p><strong>바카라</strong> : 11 place des Etats-Unis - 75116 Paris.</p>
                                <p><strong>출판 책임자</strong> : 다니엘라 리카르디(Daniela Riccardi)</p>
                            </div>
                            <div>
                                <p>본 사이트는 고급 크리스탈 제품을 제작 및 판매하는 바카라 컴퍼니(Baccarat Company)에 의해 구축되었습니다. 공식 사이트 외에 인터넷에 유통되는 모든 바카라 제품 관련 정보 및 바카라 상표는 바카라 컴퍼니의 동의 없이 무단으로 사용되는 정보 및 상표입니다. 바카라 제품은 선별된 유통 네트워크 내 공식 판매점 및 바카라 본사를 통해서만 판매됩니다. 모든 바카라 제품 및 상표에 대한 지적재산권은 바카라가 단독으로 소유합니다. 본 네트워크만이 바카라 제품 및 상표에 관한 정보를 유통하고 배포하도록 허용되어 있습니다. 바카라의 사전 서면 동의 없이는 본 사이트에 게재된 어떠한 내용의 판매, 광고, 판촉, 기타 전체 또는 부분의 복제도 금지됩니다. 본 조항의 규정을 위반하는 경우 바카라는 상기 권리의 침해를 막기 위한 모든 법적 조치를 취할 수 있습니다. 바카라 제품은 공식 판매점 네트워크를 통해서만 판매되며 바카라의 명시적인 사전 동의가 없는 한 인터넷 상에서 판매할 수 없습니다.</p>
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