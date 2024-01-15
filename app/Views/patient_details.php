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
        max-width: 500px;
    }

        .patient-table .time-cell {
        white-space: nowrap; /* 줄바꿈 방지 */
        }
        
        .container-top-padding {
        padding-top: 1rem; /* 상단 여백을 100px로 설정 */
    }   

    .patient-table tbody tr {
        cursor: pointer; /* 클릭 가능함을 나타냄 */
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
    <h5>*주호소</h5>
    <ul class="info-list">
        <li>asthma</li>
    </ul>

    <hr>
    <h5>*기저질환</h5>
    <ul class="info-list">
        <li>hypertension</li>
        <li>diabetes mellitus (DM)</li>
    </ul>

    <hr>
    <h5>*특이사항</h5>
    <ul class="info-list">
        <li>페니실린 알레르기</li>
    </ul>
    <hr>
    <h5><처방전></h5>
    <table class="table table-bordered patient-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>시간</th>
                <th>내용</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="redirectToDetails(this)">
                <td>1</td>
                <td class="time-cell">AM 8:00</td>
                <td>다이아벡스 (metformin) / 500mg 3T / PO / qd</td>
            </tr>
            <tr onclick="redirectToDetails(this)">
                <td>2</td>
                <td class="time-cell">AM 11:00</td>
                <td>Foster NEXThaler Inhaler (Beclomethasone + formoterol) / 1-2 puffs 2-4 times per day (MDIs with a spacer)</td>
            </tr>
            <tr onclick="redirectToDetails(this)">
                <td>3</td>
                <td class="time-cell">AM 11:00</td>
                <td>Lasix (Furosemide) / 80mg
/ PO / bid</td>
            </tr onclick="redirectToDetails(this)">
            <tr onclick="redirectToDetails(this)">
                <td>4</td>
                <td class="time-cell">PM 3:00</td>
                <td>0.9% N/S / 500ml / IV / qd</td>
            </tr>
        </tbody>
    </table>
</div>
<script>

function redirectToDetails(row) {
    var firstCellText = row.cells[0].textContent; // 첫 번째 셀의 텍스트
    var url = '/presdetails?no=' + firstCellText; // 쿼리 파라미터 추가
    location.href = url; // 페이지 이동
}
</script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>