<?php
	class user extends CI_Model{
        
        public function insertmsg($msg){
           $data= $this->db->insert('sms',$msg);
           return $data;
        }


	}