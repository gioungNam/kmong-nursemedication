<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>약물 계산기</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        
        body {
            background-color: #ffffff;
        }
        .container {
            max-width: 600px;
        }
        .calculate-btn {
            background-color: blue;
            color: white;
            border-radius: 5px;
        }
        .calculate-btn:hover {
            background-color: darkblue;
        }
        .input-group-text {
            width: auto;
        }
        .custom-select {
        width: 100px; /* 또는 원하는 너비로 설정 */
        }

        .section-title {
        font-weight: bold; /* 굵은 글씨 */
        font-size: 1.1rem; /* 큰 글씨 크기 */
        }

        .form-label {
            font-weight: bold;
            font-size: 0.9rem;
        }
      
        .formula-box {
        border: 1px solid #87CEEB; /* 푸른색 계열의 테두리 색상 */
        border-radius: 5px;
        }

        .formula-text {
            font-size: clamp(0.5rem, calc(0.5rem + 1vw), 1rem);
            max-width: 100%; /* 박스 너비를 초과하지 않도록 설정 */
        }
    </style>
</head>
<body>
<div class="container my-5">
    <!-- 메인 페이지 아이콘 -->
    <div class="mb-4">
        <a href="/"><i class="bi bi-house-door-fill"></i> 메인 페이지</a>
    </div>

    <!-- 제목 -->
    <h2 class="text-center mb-3">약물 계산기</h2>
    <hr>

    <!-- 첫 번째 영역: 분당 방울수 계산 -->
    <div class="my-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <span class="section-title">분당 방울수 (gtt)</span>
        <button class="calculate-btn" onclick="calculateDropsPerMinute()">계산하기</button>
    </div>
    <div class="p-3 mb-3 formula-box">
        <p class="mb-0 text-center formula-text">총 주입량(cc) x cc당 방울수(drop/cc) / 총 주입시간(min)</p>
    </div>
    <div class="mb-3">
        <label class="form-label">총 주입량</label>
        <input type="text" id="volume" class="form-control" placeholder="cc">
    </div>
    <div class="mb-3">
        <label class="form-label">cc당 방울수</label>
        <input type="text" id="drop-factor" class="form-control" placeholder="drop/cc">
    </div>
    <div class="mb-3">
        <label class="form-label">총 주입시간</label>
        <div class="input-group">
            <input type="text" id="time" class="form-control" placeholder="">
            <select id="time-unit" class="custom-select">
                <option value="min" selected>min</option>
                <option value="hr">hr</option>
            </select>
        </div>
    </div>
    <input id="drops-result" type="text" class="form-control" placeholder="결과값" disabled>
</div>

    <!-- 두 번째 영역: 투어 용량 계산 -->
    <div class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <span class="section-title">투여 용량 (ml)</span>
            <button class="calculate-btn" onclick="calculateDrugDose()">계산하기</button>
        </div>
        <div class="p-3 mb-3 formula-box">
            <p class="mb-0 text-center formula-text">처방된 약 용량(mg) / 약 용량(mg) x 용약의 양(ml)</p>
        </div>
    <div class="mb-3">
        <label class="form-label">처방된 약 용량</label>
        <div class="input-group">
        <input type="text" id="prescribed-dose" class="form-control" placeholder="">
        <select id="prescribed-dose-unit" class="custom-select">
                <option value="mg" selected>mg</option>
                <option value="mcg">mcg</option>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">약 용량</label>
        <div class="input-group">
            <input type="text" id="drug-dose" class="form-control" placeholder="">
            <select id="drug-dose-unit" class="custom-select">
                <option value="mg" selected>mg</option>
                <option value="mcg">mcg</option>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">용약의 양</label>
        <div class="input-group">
        <input type="text" id="drug-volume" class="form-control" placeholder="">
            <select id="drug-volume-unit" class="custom-select">
                <option value="ml" selected>ml</option>
                <option value="L">L</option>
            </select>
        </div>
    </div>
        <input id="dose-result" type="text" class="form-control" placeholder="결과값" disabled>
    </div>
</div>

<script>
    function convertUnits(value, unit) {
        switch (unit) {
            case 'hr':
                return value * 60; // 시간을 분으로 변환
            case 'mcg':
                return value / 1000; // 마이크로그램을 밀리그램으로 변환
            case 'L':
                return value * 1000; // 리터를 밀리리터로 변환
            default:
                return value; // 변환 없음
        }
    }

    function calculateDropsPerMinute() {
        var volume = parseFloat(document.getElementById("volume").value);
        var dropFactor = parseFloat(document.getElementById("drop-factor").value);
        var time = parseFloat(document.getElementById("time").value);
        
        // 입력값 검사
        if (!volume || !dropFactor || !time) {
            alert("모든 입력값을 입력해주세요.");
            return;
        }
        
        var timeUnit = document.getElementById("time-unit").value;

   
        var confirmMessage = "입력값이 맞습니까? \n" + 
        volume + " (cc) X " + dropFactor + " (drop/cc) / " + time + " (" + timeUnit + ")";
    
        if (confirm(confirmMessage)) {
            var result = (parseFloat(volume) * parseFloat(dropFactor)) / convertUnits(parseFloat(time), timeUnit);
            document.getElementById("drops-result").value = result.toFixed(2) + ' (gtt)';
        }
    }

    function calculateDrugDose() {
        var prescribedDose = parseFloat(document.getElementById("prescribed-dose").value);
        var drugDose = parseFloat(document.getElementById("drug-dose").value);
        var drugVolume = parseFloat(document.getElementById("drug-volume").value);

        // 입력값 검사
        if (!prescribedDose || !drugDose || !drugVolume) {
            alert("모든 입력값을 입력해주세요.");
            return;
        }

        var prescribedDoseUnit = document.getElementById("prescribed-dose-unit").value;
        var drugDoseUnit = document.getElementById("drug-dose-unit").value;
        var drugVolumeUnit = document.getElementById("drug-volume-unit").value;

        var confirmMessage = "입력값이 맞습니까? \n" + 
        prescribedDose + " (" + prescribedDoseUnit + ") / " + 
        drugDose + " (" + drugDoseUnit + ") X " + 
        drugVolume + " (" + drugVolumeUnit + ")";
    
    if (confirm(confirmMessage)) {
        var result = (convertUnits(parseFloat(prescribedDose), prescribedDoseUnit) / 
                      convertUnits(parseFloat(drugDose), drugDoseUnit)) * 
                      convertUnits(parseFloat(drugVolume), drugVolumeUnit);
        document.getElementById("dose-result").value = result.toFixed(2) + ' (ml)';
    }
    }
</script>

<!-- Bootstrap JS and Popper.js (for Dropdowns, Tooltips, etc.) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>