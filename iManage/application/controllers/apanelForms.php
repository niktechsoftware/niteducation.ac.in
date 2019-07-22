<?php
class ApanelForms extends CI_Controller{
	
    public function saveBatch(){
        $expense_type = $this->input->post("expense_type");
        $data = array(
            "eName" => $expense_type
        );
        $this->db->insert("expense",$data);
        redirect(base_url()."apanel/expenseList");
    }
    public function expense_type(){
        $id=  $this->uri->segment(4);
        echo $id;exit();
        $expense = $this->input->post("batch");
        $data = array(
            "eName" =>$expense
        )
    }
}
	?>