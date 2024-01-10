<?php
namespace App\Libraries;

use CodeIgniter\Session\Session;

class Authentication
{
    protected $session;

    public function __construct(Session $session)
    {
        // CodeIgniter의 세션 인스턴스를 사용합니다.
        $this->session = $session;
    }

    public function login($username, $password)
    {
        // 고정된 사용자 이름과 비밀번호
        $validUsername = 'kmunur';
        $validPassword = '0000';


        // 사용자 이름과 비밀번호가 유효한 경우
        if ($username === $validUsername && $password === $validPassword) {
            $this->session->set('isLoggedIn', true);
            return true;
        }

        return false;
    }

    public function logout()
    {
        $this->session->remove('isLoggedIn');
        $this->session->destroy();
    }

    public function check()
    {
        return  $this->session->get('isLoggedIn') !== null;
    }
}