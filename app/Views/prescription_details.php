<?php
// URL의 'no' 쿼리 파라미터 읽기
$no = isset($_GET['no']) ? $_GET['no'] : 1;

// 약물 정보 배열
$prescriptions = array(
    '1' => array('type' => '혈당 강하제', '약물명' => '다이아벡스(Metformin)', 'use' => '2형 당뇨병', '상호작용' => '알코올, cimetidine은 S/E인 젖산 산증 강화', 'A/E' => 'N/V, 위장장애', '주의사항' => "식후 복용, 10세 미만 복용 금지, <span style='color: red; font-weight: bold;'>간 및 신기능 이상환자 금지, x-ray나 요오드가 포함 된 혈액주사를 맞고 스캔을 하는 경우 금기</span>", 'img' => array(base_url('assets/images/diavex.png'))),
    '2' => array('type' => '기관지 확장제', '약물명' => '흡입용 글루코코티코이드', 'use' => '천식, 중증 만성폐쇄성 폐질환 환자의 증상치료', '상호작용' => 'X', 'A/E' => '구강칸디다증, 두통, 떨림(fine tremor), 빈맥, 비강자극, 기침, 발성장애', '주의사항' => "구강인두 칸디다증의 위험을 최소화 하기 위해 <span style='color: red; font-weight: bold;'>흡입 후 양치를 하거나 물로 입을 헹군다.</span> 감염에 취약해질 수 있으므로 많은 사람이 모이는 곳이나 감염자와의 접촉을 삼간다", 'img' => array(base_url('assets/images/foster_nexthaler_2.png'), base_url('assets/images/foster_nexthaler.png')), 'how' => '똑바로 서거나 앉은 자세에서 흡입<br><br> 
    1) 용량 표시창을 통해 남아있는 복용량을 확인한다(1~120) <br><br>
    2) 흡입기를 똑바로 세워서 단단히 잡은 후 커버를 딸깍 소리가 날 때까지 연다.<br><br>
    3) 흡입구를 입안에 물고, 빠르고 깊게 약물을 흡입한 후 약 510초간 숨을 참았다가 천천히 숨을 내뱉게 교육한다.
    주의) 흡입 시 흡입기의 공기가 드나드는 곳을 손으로 막지 않도록 한다.<br><br>
    4) 흡입기를 똑바로 세워서 뚜껑을 완전히 닫는다. <br><br>
    5) 흡입 후 물로 입을 헹구거나가 글을 하거나 양치질을 하도록 한다.'),
    '3' => array('type' => '이뇨제', '약물명' => 'Furosemide [Lasix] (경구: 정제)', 'use' => '고혈압(본태성, 신성 등), 심성부종(울혈성심부전), 신성부종, 간성부종(복수), 말초혈관성부종', '상호작용' => '아미노글리코사이드계 항생제, ACE억제제, 안지오텐신 ll 수용체 길항제, 테르페나딘, 클로랄하이드레이트, 시스플라틴, 리튬, 리스페리돈 등', 'A/E' => '- 탈수<br>- 저나트륨혈증<br>- 저혈압<br>- 저칼륨혈증<br>- 귀독성(가역적 또는 영구적 청력 손상 유발 가능성)<br>- 고요산혈증<br>- 저마그네슘혈증<br>- 저칼슘혈증', '주의사항' => "- 설폰아미드계 약물(예, 설폰아미
    드계 항생제, 설폰요소제)에 알러
    지가 있는 환자는 이 약과 교차 과
    민반응이 나타날 수 있다.<br><br>
    - <span style='color: red; font-weight: bold;'>어지러움이 나타날 수 있으므로</span>
    앉거나 누운 자세에서 일어날 때는
    천천히 움직여야 하고 운전이나 위
    험한 기계조작에 주의한다.<br><br>
    - 취침 직전에 이 약을 복용할 경우
    야간 뇨로 불편할 수 있으므로 가능
    한 오전에 복용하며, 2회 이상 복용
    시는 마지막 복용량은 이른 저녁에
    복용한다.<br><br>
    - 저마그네슘혈증으로 인한 근육약
    화, 떨림 유발 가능성 있으므로 <span style='color: red; font-weight: bold;'>근육 경련이나 극심한 무력감이 나타
    나면 의사에게 알린다.</span><br><br>
    - <span style='color: red; font-weight: bold;'>임산부, 수유부는 주의</span>해야 하며
    미리 의사에게 알린다", 'img' => array(base_url('assets/images/tab.png'), base_url('assets/images/lasix.png'))),
    '4' => array('type'=> '수액', '약물명' => '0.9% Normal Saline', 'use' => '출혈, 탈수', '상호작용' => 'X', 'A/E' => '고나트륨혈증, 산염기불균형', '주의사항' => "cl-가 정상범위에 비해 많은 양이 들어가있기 때문에 <span style='color: red; font-weight: bold;'>다량의 수액이 필요한 수술, 화상 환자에게 투여 금지</span>", 'img' => array(base_url('assets/images/suack.png')))
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


        .bold-text {
        font-weight: bold; /* 굵은 글씨체 */
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
    <h5 class="mb-3 bold-text">5 Rights</h5>
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
    <h5 class="mb-3 bold-text"><?= $currentPrescription['type']; ?></h5>
    <div class="row">
    <?php foreach ($currentPrescription['img'] as $img): ?>
        <?php if ($img): ?>
            <div class="col-md-<?= count($currentPrescription['img']) > 1 ? 6 : 12 ?> text-center">
                <img src="<?= $img ?>" alt="약물 이미지" class="img-fluid">
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
    </div>
    <table class="table patient-table mt-3">
        <tbody>
        <tr>
            <td class="bg-light time-cell bold-text">약물명</td>
            <td><?= $currentPrescription['약물명']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell bold-text">use</td>
            <td><?= $currentPrescription['use']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell bold-text">상호작용</td>
            <td><?= $currentPrescription['상호작용']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell bold-text">A/E</td>
            <td><?= $currentPrescription['A/E']; ?></td>
        </tr>
        <tr>
            <td class="bg-light time-cell bold-text line-space">주의사항</td>
            <td><?= $currentPrescription['주의사항']; ?></td>
        </tr>
        <?php if (!empty($currentPrescription['how'])): ?>
            <tr>
                <td class="bg-light time-cell bold-text">사용방법</td>
                <td><?= $currentPrescription['how']; ?></td>
            </tr>
        <?php endif; ?>
        <tr>
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