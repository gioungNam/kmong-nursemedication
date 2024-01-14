<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>약물 주입 도구</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .info-btn {
            background-color: #007bff; /* 안드로이드 기본 버튼색 */
            color: white;
            border-radius: 5px;
        }
        .info-btn:hover {
            background-color: #0056b3;
        }
        .tool-table th, .tool-table td {
            text-align: center;
        }
        .tool-table td {
        font-size: clamp(1rem, 1vw, 1.2rem); /* 최소 0.8rem, 최대 1.2rem */
        }

        @media (max-width: 400px) {
            .tool-table td {
                font-size: 0.8rem; /* 작은 화면에서의 글자 크기 */
            }
        }
        .tool-table .tool-name {
            background-color: #f8f9fa; /* 옅은 회색 배경색 */
        }
        .tool-table .last-row {
        white-space: normal; /* 줄바꿈 허용 */
        }

        .container {
            max-width: 600px;
        }

        .tool-table {
        width: 100%; /* 테이블 전체 너비 */
        table-layout: fixed; /* 테이블 레이아웃 고정 */
        }
        .tool-table th, .tool-table td {
            text-align: center;
            width: 33.33%; /* 각 셀의 너비 (3열이므로 100% / 3) */
        }

        .logo-image {
        max-width: 400px; /* 로고 이미지의 최대 너비 */
        width: 100%; /* 화면 너비에 맞춰 조절 */
        height: auto; /* 이미지 비율 유지 */
        display: block; /* 블록 레벨 요소로 설정 */
        margin: auto; /* 중앙 정렬 */
    }
    </style>
</head>
<body>
<div class="container my-5">

    <!-- 메인 페이지 아이콘 -->
    <div class="mb-4">
        <a href="/"><i class="bi bi-house-door-fill"></i> 메인 페이지</a>
    </div>

    <h2 class="text-center mb-3">약물 주입 도구</h2>
    <hr>

    <table class="table table-bordered tool-table">
        <thead>
            <tr>
                <th>이름</th>
                <th>기본 세팅</th>
                <th>상세</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="tool-name"><b>Infusion pump</b>
                <br> <!-- 줄바꿈 -->
                <img src="assets/images/infusion_pump.png" alt="Infusion pump 이미지" class="img-fluid"></td>
                <td>ml/hr로 Setting</td>
                <td><button class="info-btn" onclick="openInfo('https://www.youtube.com/watch?si=fsCvAQh1izkgrsU_&v=4-kMaQ5m4Ok&feature=youtu.be')">정보</button></td>
            </tr>
            <tr>
                <td class="tool-name"><b>Syringe pump</b>
                <br> <!-- 줄바꿈 -->
                <img src="assets/images/syringe_pump.png" alt="Infusion pump 이미지" class="img-fluid"></td>
                <td class="contents">ml/hr로 Setting</td>
                <td><button class="info-btn" onclick="openInfo('https://www.youtube.com/watch?v=cj_fQ-nu_s0')">정보</button></td>
            </tr>
            <tr>
                <td class="tool-name"><b>Dorsi flow</b>
                <br> <!-- 줄바꿈 -->
                <img src="assets/images/dorsiflow.jpg" alt="Infusion pump 이미지" class="img-fluid"></td>
                <td>눈금에 맞춰 m/hr로 setting</td>
                <td><button class="info-btn" onclick="openInfo('https://www.youtube.com/watch?v=M1pJZKKC6hM')">정보</button></td>
            </tr>
            <tr>
                <td class="tool-name"><b>수액 세트</b>
                <br> <!-- 줄바꿈 -->
                <img src="assets/images/suack.jpg" alt="Infusion pump 이미지" class="img-fluid"></td>
                <td class="last-row">clamp를 조절해서 gtt/min<br>
                    -> 분당 방울 수<br>
                    ->몇 초에 한 방울인지 계산<br>
                    해서 setting</td>
                <td><button class="info-btn" onclick="openInfo('https://www.youtube.com/watch?v=8ZIrwWGdATQ')">정보</button></td>
            </tr>
        </tbody>
    </table>

    <!-- 로고 이미지 -->
    <img src="assets/images/hospital1.png" alt="로고 이미지" class="img-fluid mt-5 logo-image">
</div>

<script>
function openInfo(url) {
    window.open(url, '_blank');
}
</script>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>