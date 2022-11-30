<?php 
namespace App\Models;  
use CodeIgniter\Model;
use App\Controllers\Home;
  
class LoanModel extends Model{
    

    public function store_user_loan($data){
       
        $home = new home();
       
        $url = baseURL1.'/loan/store_user_loan';//exit;

       return $home->CallAPI('POST',$url,$data);
      
    }
    public function store_loan_emis($data){
       
        $home = new home();
       
        $url = baseURL1.'/loan/store_loan_emis';//exit;

       return $home->CallAPI('POST',$url,$data);
      
    }
    public function get_all_loans(){
       
        $home = new home();
       $data=array();
        $url = baseURL1.'/loan/get_all_loans';//exit;

       return $home->CallAPI('GET',$url,$data);
      
    }
    public function get_loan_by_id($lid){
       
        $home = new home();
       $data=array();
        $url = baseURL1.'/loan/get_loan_by_id/'.$lid;//exit;

       return $home->CallAPI('GET',$url,$data);
      
    }
    public function Approve_reject_user_loan($data){
       
        $home = new home();
      // print_r(json_encode($data));
       $url = baseURL1.'/loan/Approve_reject_user_loan';//exit;

       return $result = $home->CallAPI('POST',$url,$data);
       print_r($result);exit;
      
    }

    
}