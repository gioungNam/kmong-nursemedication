<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>환자 상세 정보</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .info-list {
            list-style: none; /* 기본 목록 스타일 제거 */
            padding-left: 1rem; /* 패딩 제거 */
        }
        .info-list li {
            margin-bottom: 10px; /* 목록 아이템 간 간격 */
        }
        .info-list li:before {
            content: '\2022'; /* 중간 점 */
            color: black; /* 색상 */
            font-weight: bold; /* 굵기 */
            display: inline-block; 
            width: 1em; /* 고정 너비 */
            margin-left: -1em; /* 왼쪽으로 이동 */
        }

        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
<div class="container my-5">
    <h2 class="text-center mb-3">12345/나환자</h2>
    <hr>

    <div class="row mb-4">
        <div class="col-md-4 text-center">
            <i class="bi bi-person-circle" style="font-size: 5rem;"></i>
        </div>
        <div class="col-md-8">
            <ul class="info-list">
                <li>성별: F</li>
                <li>나이: 66</li>
                <li>병명: 천식</li>
                <li>호흡기내과</li>
                <li>4-3 호</li>
            </ul>
        </div>
    </div>

    <hr>
    <h5>주호소</h5>
    <ul class="info-list">
        <li>asthma</li>
    </ul>

    <hr>
    <h5>기저질환</h5>
    <ul class="info-list">
        <li>hypertension</li>
        <li>diabetes mellitus (DM)</li>
    </ul>

    <hr>
    <h5>특이사항</h5>
    <ul class="info-list">
        <li>페니실린 알레르기</li>
    </ul>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>