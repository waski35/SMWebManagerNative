<?php


include '../models/AdminLog.php';
include '../models/ConnectionLog.php';
include '../models/SmRank.php';
include '../models/DestroyLog.php';
include '../models/Log.php';
include '../models/Sector.php';
include '../models/ServerStatus.php';
include '../models/Bounty.php';
include '../models/Kills.php';
include '../models/Vote.php';
include '../models/Player.php';
include '../models/ChatLog.php';


class AdminController 
{
    public function indexAction()
    {
        
            $destroyLogs = DestroyLog::find('all','','',10);
            
            
            $lastAdmin = Player::find('all',"RANK = 'Admiral'",'','');
            
            $dateMonthAgo = date('Y-m-d', strtotime('-30 days'));
            $dateToday = date('Y-m-d');
            $votesLastMonth = Vote::find('all',"TIME > '".$dateMonthAgo."'",'','');
                
           
            
            $playersLastMonth = Player::find('all',"LASTUPDATE > '".$dateMonthAgo."'",'','');
                      
            $ret = array();
            $ret['destroylog'] = $destroyLogs;
            $ret['lastadmin'] = $lastAdmin[0]['NAME'];
            $ret['votes'] = count($votesLastMonth);
            $ret['playersCount'] = count($playersLastMonth);
            $ret['uptime'] = '100% - test value';
            
            return $ret;
            
       
    }

    public function ServerManageAction($do_action)
    {
       
        $lastServerStatus = ServerStatus::find('all','',"TIME DESC",1);
            
        
        $shadow_path = $config['path_to_shadow'];
            if ($do_action == 'stop')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Stopped' || $lastServerStatus[0]['STATUS'] != 'Kill')
                {
                    // perform kill
                    exec($shadow_path."/shadow.dtsd stop");
                }
            }
            else if ($do_action == 'restart')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Stopped' || $lastServerStatus[0]['STATUS'] != 'Kill')
                {
                    // perform restart
                    exec($shadow_path."/shadow.dtsd restart");
                    
                }
            }
            else if ($do_action == 'start')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Starting')
                {
                    // perform start
                    exec($shadow_path."/shadow.dtsd start");
                    
                }
                
            }
            else if ($do_action == 'backupuni')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Starting')
                {
                    // perform backup of universe
                    exec($shadow_path."/shadow.dtsd universebackup");
                    
                }
            }
            else if ($do_action == 'updatesrv')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Starting')
                {
                    // perform update server binaries
                    exec($shadow_path."/shadow.dtsd download");
                }
            }
            else if ($do_action == 'updateshdw')
            {
                if ($lastServerStatus[0]['STATUS'] != 'Starting')
                {
                    // perform update shadow
                    exec($shadow_path."/shadow.dtsd updateshadow");
                    
                }
            }
            
            
            
            
            
            
            
            $ret['serverstatus'] = $lastServerStatus[0];
            
            return $ret;
            
    }
    
    public function ServerSettingsAction()
    {
        $shadow = $config['path_to_shadow'];
        $instance_name = $config['SM_SRV_instance_name'];
        $instance_port = $config['SM_SRV_instance_port'];
        $instance_host = $config['SM_SRV_instance_host'];
        
        $ret['shadow'] = $shadow;
        $ret['instance_name'] = $instance_name;
        $ret['instance_port'] = $instance_port;
        $ret['instance_host'] = $instance_host;
        return $ret;
        
    }
    
    
    public function connectionsAjaxAction()
    {
        $post_var = $_POST;
        include '../models/dtresponse_ConnectionLog.php';
            
       
    }

    
    public function destroylogAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = DestroyLog::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }
    
    
    public function logsAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = Log::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
                    
        
    }    
    
   
    
    public function sectorsAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = Sector::find();
            
         //   $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }    
    
    
    public function serverstatusAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = ServerStatus::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }    
    
    
          
    
    public function smranksAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = SmRank::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }

           
    
    public function adminlogsAjaxAction()
    {
        $post_var = $_POST;
        include '../models/dtresponse_AdminLog.php';
        
    }        
    
           
    
    public function chatlogsAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = ChatLog::find();
            
        //    $this->view->adminlogs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
            
        }
        
    }       
    
    
    
    
    public function bountiesAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = Bounty::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }     
    
        
    public function killsAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = Kills::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }  
    
        
    public function votesAjaxAction()
    {
        if ($this->request->isAjax()) {
            $logs = Vote::find();
            
        //    $this->view->logs = $logs;
            $dataTables = new \DataTables\DataTable();
            $dataTables->fromResultSet($logs)->sendResponse();
        }
        
    }        
    
    
    
    
    
}

