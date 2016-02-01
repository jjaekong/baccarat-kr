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
                        <li class="active">내 계정</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            내 계정 <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#setting-1" aria-controls="setting-1" role="tab" data-toggle="tab">계정 만들기</a></li>
                        <li role="presentation"><a href="#setting-2" aria-controls="setting-2" role="tab" data-toggle="tab">계정 관리</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="setting-1">
                            <h3>계정 만들기</h3>
                            <div>
                                <p>간편하게 계정을 만들어 보세요. 내 계정을 클릭하거나 주문 시 이메일 주소와 비밀번호를 입력해서 로그인 하실 수 있습니다. 계정을 만들면 안전하고 편리하고 빠르게 주문을 하실 수 있습니다. 또한 주문을 추적하고 주문 확인 이메일을 받으실 수도 있습니다.</p>
                            </div>
                            <div>
                                <p><strong>계정 사용자 혜택</strong> 원하는 대로 계정을 설정하고 기본 정보를 입력하세요. 다양한 혜택을 최대한 활용해서 쇼핑을 즐기세요.</p>
                                <p><strong>뉴스 및 특별 프로모션</strong> 특별 프로모션, 신제품 안내, 기프트 제안 등 유용한 정보를 이메일로 받아보세요.</p>
                                <p><strong>주문 내역</strong> 중요한 주문 정보를 확인하고 제품을 배송받을 때까지 주문 상태를 추적할 수 있습니다.</p>
                                <p><strong>신속한 결제</strong> 청구지 및 배송지 정보를 입력할 필요가 없으므로 더욱 편리하게 원하는 제품을 구입하실 수 있어요. 이제 여유롭게 결제하세요.</p>
                                <p><strong>내 장바구니</strong> 원하는 제품을 내 장바구니에 담아두고 나중에 구매하세요.</p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="setting-2">
                            <h3>계정 관리</h3>
                            <div>
                                <p>언제든지 온라인으로 간편하게 계정 정보를 변경하실 수 있습니다. 내 계정을 클릭하셔서 내 계정 페이지로 이동합니다. 비밀번호를 잊으신 경우 여기를 클릭하세요.</p>
                            </div>
                            <div>
                                <p>고객님의 이메일 주소를 통해 간편하게 주문 정보를 수신하실 수 있습니다. 이메일 주소는 계정 ID로 사용됩니다.</p>
                                <p>고객님의 계정에는 주문 내역, 청구지 및 배송지 주소와 같은 정보가 저장됩니다. 또한 주문 상태도 추적할 수 있습니다. 비밀번호를 사용하여 타인이 고객님의 계정 정보에 접근하지 못하도록 방지합니다.</p>
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