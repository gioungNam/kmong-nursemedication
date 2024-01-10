<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>간호사 투약 도우미</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.4.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #ffffff;
        }
        .login-form {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
        }
        .login-title {
            font-size: 2em;
            color: #000;
        }
        .login-title span {
            color: #007bff; /* 파란색 */
        }
        .input-group-text {
            background: transparent;
            border-right: none;
        }
        .input-group .form-control {
            border-left: none;
        }

        .login-title {
            font-size: 2em;
            color: #000;
            font-weight: bold; /* 글자 굵게 */
        }
        .login-title span {
            color: #007bff; /* 파란색 */
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h1 class="login-title text-center mb-4">간호사 <span>투약 도우미</span></h1>
        <div class="d-flex justify-content-center mb-4">
            <img src="<?= base_url('assets/images/hospital2.png'); ?>" alt="로고 이미지" class="img-fluid" style="max-width: 200px; height: auto;">
        </div>
        <form id="login-form" class="mb-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                </div>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
            </div>
            <div class="input-group mb-4">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                </div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <div class="row mb-4">
                <div class="col-6">
                    <button type="button" class="btn btn-secondary btn-block">아이디 찾기</button>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-secondary btn-block">비밀번호 찾기</button>
                </div>
            </div>
            <input type="submit" value="LOGIN" class="btn btn-primary btn-block">
        </form>
        <div class="mt-3">
            <img src="<?= base_url('assets/images/hospital1.png'); ?>" alt="배너 로고 이미지" class="img-fluid">
        </div>
        
    </div>


    <script>
        $(document).ready(function() {
            $('#login-form').submit(function(e) {
                e.preventDefault();

                let username = $('#username').val();
                let password = $('#password').val();

                // 검증: 사용자 이름과 비밀번호가 비어 있는지 확인
                if (username === '') {
                    alert('사용자 이름을 입력해주세요.');
                    return;
                }
                if (password === '') {
                    alert('비밀번호를 입력해주세요.');
                    return;
                }

                $.ajax({
                    url: '<?= site_url('api/login') ?>',
                    type: 'POST',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        if (data.status === 'success') {
                            window.location.href = '/';
                        } else {
                            alert(data.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>