<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>환자명단</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .patient-table th, .patient-table td {
            text-align: center;
            vertical-align: middle;
        }
        .patient-table thead {
            background-color: #f8f9fa; /* 회색 배경 */
        }
        .info-btn, .medication-btn {
            border: none;
            border-radius: 5px; /* 모서리 약간 깎임 */
            margin-bottom: 10px; /* 버튼 사이 간격 */
        }
        .info-btn {
            background-color: #007bff; /* 파란색 */
            color: white;
        }
        .medication-btn {
            background-color: #ffc107; /* 노란색 */
            color: black;
        }

        .container {
            max-width: 600px;
        }
        @media (max-width: 400px) {
        .patient-table {
            font-size: 0.8rem; /* 모바일 화면에서의 작은 글자 크기 */
        }
    }
    </style>
</head>
<body>
<div class="container my-5">

    <!-- 메인 페이지 아이콘 -->
    <div class="mb-4">
        <a href="/"><i class="bi bi-house-door-fill"></i> 메인 페이지</a>
    </div>

    <h2 class="text-center mb-3">환자명단</h2>
    <hr>

    <table class="table table-bordered patient-table">
        <thead>
            <tr>
                <th>사진</th>
                <th>등록번호/이름</th>
                <th>환자 정보</th>
                <th>상세</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><i class="bi bi-person-circle"></i></td>
                <td>12345/나환자</td>
                <td>F/66/천식</td>
                <td>
                    <button class="info-btn" onclick="location.href='patientinfo';">정보</button><br>
                    <button class="medication-btn">투약</button>
                </td>
            </tr>
            <tr>
                <td><i class="bi bi-person-circle"></i></td>
                <td>23456/강환자</td>
                <td>M/54/기관지염</td>
                <td>
                    <button class="info-btn">정보</button><br>
                    <button class="medication-btn">투약</button>
                </td>
            </tr>
            <tr>
                <td><i class="bi bi-person-circle"></i></td>
                <td>34567/박환자</td>
                <td>M/33/폐렴</td>
                <td>
                    <button class="info-btn">정보</button><br>
                    <button class="medication-btn">투약</button>
                </td>
            </tr>
            <tr>
                <td><i class="bi bi-person-circle"></i></td>
                <td>45678/이환자</td>
                <td>F/71/결핵</td>
                <td>
                    <button class="info-btn">정보</button><br>
                    <button class="medication-btn">투약</button>
                </td>
            </tr>
            <tr>
                <td><i class="bi bi-person-circle"></i></td>
                <td>56789/김환자</td>
                <td>F/33/기흉</td>
                <td>
                    <button class="info-btn">정보</button><br>
                    <button class="medication-btn">투약</button>
                </td>
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