<?php
// URL의 'no' 쿼리 파라미터 읽기
$no = isset($_GET['no']) ? $_GET['no'] : 1;

// 약물 정보 배열
$prescriptions = array(
    '1' => array('약물명' => '다이아벡스(Metformin)', 'use' => '2형 당뇨병', '상호작용' => '알코올, cimetidine은 S/E인 젖산 산증 강화', 'A/E' => 'N/V, 위장장애', '주의사항' => "식후 복용, 10세 미만 복용 금지\n, <span style='color: red; font-weight: bold;'>간 및 신기능 이상환자 금지\n, x-ray나 요
    오드가 포함 된 혈액주사를 맞고 스캔
    을 하는 경우 금기</span>.", 'img' => base_url('assets/images/diavex.png')),
    '2' => array('약물명' => '', 'use' => '', '상호작용' => '', 'A/E' => '', '주의사항' => ''),
    '3' => array('약물명' => '', 'use' => '', '상호작용' => '', 'A/E' => '', '주의사항' => ''),
    '4' => array('약물명' => '', 'use' => '', '상호작용' => '', 'A/E' => '', '주의사항' => '')
);


// 현재 처방 정보
$currentPrescription = empty($prescriptions[$no]) ? $prescriptions['1'] : $prescriptions[$no];
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>처방 상세 정보</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style> 
        .container {
        max-width: 500px;
    }

    .info-btn {
            background-color: #007bff; /* 파란색 */
            color: white;
            border: none;
            border-radius: 5px; /* 모서리 약간 깎임 */
            margin-bottom: 10px; /* 버튼 사이 간격 */
        }

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

    .container-top-padding {
        padding-top: 1rem; /* 상단 여백을 100px로 설정 */
    }   

    .patient-table .time-cell {
        white-space: nowrap; /* 줄바꿈 방지 */
        }
    </style>
</head>
<body>
<div class="navbar navbar-light bg-light fixed-top">
    <div class="container text-center">
        <span class="navbar-brand mb-0 h1 w-100">12345/나환자 정보</span>
    </div>
</div>

<div class="container my-5 container-top-padding">
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
    <h5 class="mb-3">5 Rights</h5>
    <div>
        <input type="checkbox" id="right-medication" name="rights">
        <label for="right-medication">정확한 약</label>
    </div>
    <div>
        <input type="checkbox" id="right-dose" name="rights">
        <label for="right-dose">정확한 용량</label>
        <button class="info-btn ml-3" onclick="location.href='drugcalc';">계산기</button> <!-- '계산기' 버튼 -->
    </div>
    <div>
        <input type="checkbox" id="right-medication" name="rights">
        <label for="right-medication">정확한 대상자</label>
    </div>
    <div>
        <input type="checkbox" id="right-medication" name="rights">
        <label for="right-medication">정확한 경로</label>
    </div>
    <div>
        <input type="checkbox" id="right-medication" name="rights">
        <label for="right-medication">정확한 시간</label>
    </div>

    <hr>
    <h5 class="mb-3">약물 분류</h5>
    <img src="<?= ($currentPrescription['img'])??'' ?>" alt="약물 이미지" class="img-fluid">
    <table class="table patient-table">
        <tbody>
        <tr>
            <td class="bg-light time-cell">약물명</td>
            <td><?= $currentPrescription['약물명']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell">use</td>
            <td><?= $currentPrescription['use']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell">상호작용</td>
            <td><?= $currentPrescription['상호작용']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell">A/E</td>
            <td><?= $currentPrescription['A/E']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell">주의사항</td>
            <td><?= $currentPrescription['주의사항']; ?></td>
        </tr>
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>