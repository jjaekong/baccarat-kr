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
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>