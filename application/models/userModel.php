<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class userModel extends CI_Model {

    public function isAdmin($username, $password) 
    {
        $this->db->where('username', 'admin');
        $admin = $this->db->get('tbl_users')->result_array()['0'];
        if ($admin['level_id'] == 1) {
            $_SESSION['username'] = $admin['username'];
            return true;
        }
    }

    public function isUser($username, $password) 
    {
        $this->db->where('username', $username);
        $user = $this->db->get('tbl_users')->result_array()['0'];
        if ($user['level_id'] == 2) {
            $_SESSION['username'] = $user['username'];
            return true;
        }
    }

    public function isLogin() 
    {
        if (isset($_SESSION['username'])) {
            if ($_SESSION['username'] != '') {
                return true;
            }
        }
        return false;
    }
}
