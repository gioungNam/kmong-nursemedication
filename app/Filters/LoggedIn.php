<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LoggedIn implements FilterInterface  
{  
    public function before(RequestInterface $request, $arguments = null)  
    {  
        if (!service('authentication')->check()) {  // authentication 서비스를 사용하여 로그인 상태 확인
            return redirect()->to(site_url('login'));  
        } 
    }  
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)  
    {  
    }  
} 