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
                        <li><a href="/mobile">HOME</a></li>
                        <li><a href="main.php">서비스</a></li>
                        <li class="active">계정 설정</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            계정 설정 <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#setting-1" aria-controls="setting-1" role="tab" data-toggle="tab">계정 만들기</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="setting-1">
                            <form action="#" method="post">
                                <fieldset>
                                    <legend>이름</legend>
                                    <div class="form-group">
                                        <label class="control-label">호칭</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="" value=""> Mrs
                                            </label>
                                            <label>
                                                <input type="radio" name="" value=""> Mr
                                            </label>
                                            <label>
                                                <input type="radio" name="" value=""> Ms
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="first-name">이름</label>
                                        <input type="text" class="form-control input-sm" id="first-name" name="">
                                        <span class="error-block">이름을 입력해 주세요.</span>
                                    </div>
                                    <div class="form-group required">
                                        <label for="last-name">성</label>
                                        <input type="text" class="form-control input-sm" id="last-name" name="">
                                        <span class="error-block">성을 입력해 주세요.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="company">회사명</label>
                                        <input type="text" class="form-control input-sm" id="company" name="">
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <legend>이메일 로그인 정보</legend>
                                    <div class="form-group required">
                                        <label for="email">이메일</label>
                                        <input type="email" class="form-control input-sm" id="email" name="">
                                        <span class="error-block">이메일을 입력해 주세요.</span>
                                    </div>
                                    <div class="form-group required">
                                        <label for="re-email">이메일 재입력</label>
                                        <input type="email" class="form-control input-sm" id="re-email" name="">
                                        <span class="error-block">이메일이 일치하지 않습니다.</span>
                                    </div>
                                    <div class="form-group required">
                                        <label for="password">비밀번호</label>
                                        <input type="password" class="form-control input-sm" id="password" name="" maxlength="20">
                                        <span class="help-block">비밀번호는 5~20자로 입력하세요.</span>
                                    </div>
                                    <div class="form-group required">
                                        <label for="re-password">비밀번호 재입력</label>
                                        <input type="password" class="form-control input-sm" id="re-password" name="" maxlength="20">
                                        <span class="error-block">비밀번호가 일치하지 않습니다.</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="find-question">비밀번호 찾기 질문</label>
                                        <input type="text" class="form-control input-sm" id="find-question" name="">
                                    </div>
                                    <div class="form-group required">
                                        <label for="find-answer">비밀번호 찾기 답변</label>
                                        <input type="text" class="form-control input-sm" id="find-answer" name="">
                                        <span class="error-block">비밀번호 찾기 답변을 입력해 주세요.</span>
                                    </div>
                                    <div class="check">
                                        <label>
                                            <input type="checkbox"> 바카라 이메일 리스트에 등록해 주세요. 바카라는 개인정보를 제3자와 공유하거나 판매하지 않습니다. <a href="privacy.php" target="_blank">개인정보 보호정책</a>
                                        </label>
                                    </div>
                                </fieldset>
                                <div class="btn-area">
                                    <p>
                                        <button type="submit" class="btn btn-default btn-sm btn-primary">전송</button>
                                    </p>
                                </div>
                            </form>
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