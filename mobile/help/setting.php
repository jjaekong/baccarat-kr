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
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            계정 설정 <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">계정 설정</a></li>
                            <li><a href="#">자주 묻는 질문</a></li>
                            <li><a href="#">고객관리 및 정보제공</a></li>
                            <li><a href="#">수선</a></li>
                            <li><a href="#">내 계정</a></li>
                            <li><a href="#">개인정보 취급방침</a></li>
                            <li><a href="#">약관</a></li>
                        </ul>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
                        <li role="presentation" class="active"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">profile</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">1</div>
                        <div role="tabpanel" class="tab-pane" id="profile">2</div>
                        <div role="tabpanel" class="tab-pane" id="messages">3</div>
                        <div role="tabpanel" class="tab-pane" id="settings">4</div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>