<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>메인 페이지</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
            /* font-size: 1.2rem; 글자 크기 증가 */
        }
        .square {
            width: 100%;
            padding-top: 100%; /* 1:1 Aspect Ratio */
            position: relative; /* If you want text inside of it */
        }
        .content {
            position: absolute;
            top: 0; left: 0; bottom: 0; right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        /* 환자명단 스타일 */
        .patient-list {
            background-color: #cce7ff; /* 연한 파란색 배경 */
        }

        /* 약물사전 스타일 */
        .medication {
            background-color: #d7ffd6; /* 연한 연두색 배경 */
        }

        /* 계산기 스타일 */
        .calculator {
            background-color: #d7f0ff; /* 연한 하늘색 배경 */
        }

        /* 교육자료 스타일 */
        .education {
            background-color: #fff7cc; /* 연한 노란색 배경 */
        }

    </style>
</head>
<body>

<div class="container mt-5" style="max-width: 400px;">
    <!-- 로고 -->
    <img src="<?= base_url('assets/images/hospital1.png'); ?>" class="img-fluid mb-3" alt="Hospital Logo">

    <!-- 파란색 네모박스 -->
    <div class="bg-primary p-3 rounded mb-3 d-flex justify-content-between align-items-center">
        <div>
        <h5 class="text-white mb-1 d-inline"><strong>김지현</strong></h5>
        <small class="text-light d-inline" style="font-size: 1rem;"> 간호사</small>
        <div class="text-light" style="font-size: 0.8rem;">호흡기 내과</div>
        </div>
        <img src="<?= base_url('assets/images/nurse.png'); ?>" alt="Nurse" width="70"> <!-- 아이콘 크기 증가 -->
    </div>

    <!-- 진한 파란색 수평선 -->
    <hr class="bg-dark">

    <!-- 아이콘 및 텍스트 그리드 -->
    <div class="row mt-5">
        <div class="col text-center mb-3">
            <div class="p-3 rounded patient-list">
                <i class="bi bi-person-circle"></i>
                <p class="mb-0">환자명단</p>
            </div>
        </div>
        <div class="col text-center mb-3">
            <div class="p-3 rounded medication">
                <i class="bi bi-book"></i>
                <p class="mb-0">약물사전</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col text-center mb-3">
            <div class="p-3 rounded education">
                <i class="bi bi-calculator"></i>
                <p class="mb-0">계산기</p>
            </div>
        </div>
        <div class="col text-center mb-3">
            <div class="p-3 rounded calculator">
                <i class="bi bi-journal-text"></i>
                <p class="mb-0">교육자료</p>
            </div>
        </div>
    </div>

    <!-- 건의함 버튼 -->
    <div class="text-center mt-5">
        <button class="btn btn-primary">건의함</button>
    </div>
</div>

<!-- Font Awesome (아이콘용) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</body>
</html>