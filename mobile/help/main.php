<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="/mobile/">HOME</a></li>
                        <li class="active">서비스</li>
                    </ol>
                </div>
                <div class="help-menu">
                    <ul>
                        <li><a href="setting.php">계정 설정 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="faq.php">FAQ <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="customer.php">고객관리 및 정보제공 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="after.php">AFTER-SALE SERVICE <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="account.php">내 계정 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="privacy.php">개인정보 취급방침 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                        <li><a href="terms.php">약관 <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                    </ul>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>