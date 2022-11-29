<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UserModel;
  
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

   
}