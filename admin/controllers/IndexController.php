<?php

namespace SMWebManager\Modules\Admin\Controllers;

class IndexController extends ControllerBase
{

    public function indexAction()
    {

    }
    
    public function loginAction()
    {
        $user = false;
    
        if ($this->request->isPost())
        {
            //if ($this->security->checkToken()) 
            //{
                $login = $this->request->getPost('login');
                $password = $this->request->getPost('password');
                
                
                
                if ($this->config->user->$login->password == $password)
                {
                    // authenticated via config
                
                    if ($this->config->user->$login->role == 'USER_ROLE_SUPERADMIN')
                    {
                        // user has perms to acces everything
                        $user = array(
                                    'name' => $login, 
                                    'role' => 'USER_ROLE_SUPERADMIN'
                                );
                        
                        
                                          
                    }
                    else 
                    {
                        $this->flashsession->warning("You don't have permissions to access admin panel.");
                    }
                
                }
                else 
                {
                    $this->flashsession->warning("Login / Password incorrect !");
                }
                if ($user !== false) 
                {
                
                    $this->_registerSession($user);
                    $this->response->redirect(array("for" => "admin-index"));  
                }
                
                
                
            //}
            //else
            //{
            //    $this->flashsession->error("invalid csrf token");
            //}
            
            
        }
        
        
    }
    
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect(array("for" => "index"));
        $this->flashsession->success("Logged off successfully");
        
    }
    
    public function notfoundAction()
    {
        
    }
    protected function _registerSession($user)
    {
        $this->session->set(
            "auth",
            array(
                "name"   => $user['name'],
                "role" => $user['role']
            )
        );
    }

}

