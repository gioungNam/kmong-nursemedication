<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Services;
use App\Libraries\Authentication;
use CodeIgniter\API\ResponseTrait;

class LoginController extends Controller
{
    use ResponseTrait;
    public function index()
    {
        // Authentication 라이브러리 인스턴스 생성
        $authentication = Services::authentication();

        // 로그인 여부 체크
        if ($authentication->check()) {
            // 이미 로그인 상태인 경우 메인 페이지로 리디렉션
            return redirect()->to('/');
        }

        return view('login_page');
    }

    public function login()
    {
        $authentication = Services::authentication();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        if ($authentication->login($username, $password)) {
            return $this->respond(['status' => 'success'], 200);
        }

        return $this->respond(['status' => 'fail', 'message' => '등록된 회원이 아닙니다.'], 200);
    }
}