<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\LoanModel;
  
class LoanController extends Controller
{
    public function index()
    {
        $session = session();
        $data['session'] = $session;
        $rules = [
            'user_mobile'          => 'required|min_length[10]|max_length[15]',
            'user_email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[sg_users.user_email]',
            'user_password'      => 'required|min_length[4]|max_length[50]',
            'cpassword'  => 'matches[user_password]'
        ];
        $data['validation'] = '';
        echo "Hello : ".$session->get('name');
        echo view('profile',$data);
    }

    public function userApplyLoan()
    {
        //echo "hi";exit;
        return view('Loan/userApplyLoan');
    }
    public function userApplyLoanstore()
    {
        
        //print_r($this->request->getVar());exit;
        //$data = $this->request->getVar();
        $data = array(
                        'emi_start_date'=>date('Y-m-d H:i:s'),
                        'loantype'=>$this->request->getVar('loantype'),
                        'admin_approved_status'=>2,
                        'days'=>$this->request->getVar('days'),
                        'status'=>0,
                        'processing_fee'=>$this->request->getVar('processing_fee'),
                        'total_amt'=>$this->request->getVar('tpayableamt'),
                        'principal_amount'=>$this->request->getVar('loanamt_actuval'),
                        'intrest'=>$this->request->getVar('intrest'),
                        'applyed_date'=>date('Y-m-d H:i:s'),
                        'user_id'=>"1"
                        

        );
        $LoanModel = new LoanModel;
        $loan =(array) $LoanModel->store_user_loan($data);
        //print_r($loan);exit;
        $duedates = $this->request->getVar('emiduedate');
        $payableamt = $this->request->getVar('payableamt');
        $processing_fee_amt = $this->request->getVar('processing_fee_amt');
        $emi_intrest = $this->request->getVar('emi_intrest');
        $emi_principal_amount = $this->request->getVar('emi_principal_amount');
        foreach($duedates as $k=>$due){
            $data1 = array(
                        'loan_id' =>$loan['loan_id'],
                        'emi_name' =>$this->request->getVar('loantype'),
                        'emi_date' =>$due,
                        'emi_payable_amt'=>$payableamt[$k],
                        'emi_intrest'=>$emi_intrest[$k],
                        'processing_fee'=>$processing_fee_amt[$k],
                        'due_date'=>$due,
                        'status'=>'0',
                        'principal_amount'=>$emi_principal_amount[$k],
                        'user_id'=>"1"
                        );
            $loanemis = $LoanModel->store_loan_emis($data1);
        }
        if($loan){
            
            
           // print_r($loanemis);//exit;
        }
        return redirect()->to('userApplyLoan');

    }

    function user_loan_details($user_id){
        $LoanModel = new LoanModel;
        $data['list'] =(array) $LoanModel->user_loan_details($user_id);
        return view('Loan/user_loan_details' ,$data);
    }
    function get_all_loans(){
        $LoanModel = new LoanModel;
        
        $data['result'] =(array) $LoanModel->get_all_loans()->loanlist;
        //print_r($data['result']);exit;
        //loanlist
        return view('Loan/userapprovals', $data);
    }

    function get_loan_by_id($id){
        $LoanModel = new LoanModel;
        
        $data['result'] =(array) $LoanModel->get_loan_by_id($id)->loan;
       // print_r($data['result']);exit;
        //loanlist
        return view('Loan/adminloanedit', $data);
    }
    function Approve_reject_user_loan()
    {
       //helper('url');
       $LoanModel = new LoanModel();
       $data = $this->request->getVar();

       $data['modified_date'] = date('Y-m-d H:i:s');
       $data['modified_by'] = "1";
       // print_r($data);exit;
       $result =  $LoanModel->Approve_reject_user_loan($data);
      /* $result=[
                "status"=> "200",
                "message"=> "Updated Successfully"
            ];*/
      // print_r($result);exit;
       if($result){
        return json_encode(1);
       }else{
        return $result;
       }
      

      exit;
     // echo json_encode($result, JSON_PRETTY_PRINT);
        //echo json_encode($result);exit;
        
    }
}