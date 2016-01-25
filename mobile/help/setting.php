<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="setting">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">서비스</a></li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
                <div class="filter">
                    <form action="#" method="post">
                        <select name="" class="form-control input-sm">
                            <option value="">계정 설정</option>
                            <option value="">자주 묻는 질문</option>
                            <option value="">고객관리 및 정보제공</option>
                            <option value="">수선</option>>
                            <option value="">내 계정</option>>
                            <option value="">개인정보 취급방침</option>
                            <option value="">약관</option>
                        </select>
                    </form>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>