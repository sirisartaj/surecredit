<?php
namespace App\Domain\Loan;
use PDO;
/**
* Repository.
*/
class LoanRepository
{
  /**
   * @var PDO The database connection
   */
  private $connection;
  /**
   * Constructor.
   *
   * @param PDO $connection The database connection
   */
  public function __construct(PDO $connection)
  {
    $this->connection = $connection;
  }
  /**
   * Get Admin Roles rows.
   *
   * @return array 
   */
  public function GetLoanById($data): array
  {   

    try {
      extract($data);
      $sql = "SELECT * FROM loans where loan_id='".$loan_id."'";
      $stmt = $this->connection->prepare($sql);  
      $stmt->execute();
      $loan = $stmt->fetch(PDO::FETCH_OBJ);
      if(!empty($loan)){
       $status = array(
         'status' =>ERR_OK,
         'message' =>"Success",
         'loan' => $loan);
         return $status;
      }else{
        $status = array('status'=>ERR_NO_DATA,
         'message'=>"No Data Found");
         return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    }
  }
  public function get_all_loans() {
    try {
      //extract($data);
      $sql = "SELECT * FROM loans ";
      $stmt = $this->connection->prepare($sql);  
       
      $stmt->execute();
      $details = $stmt->fetchAll(PDO::FETCH_OBJ);
      if(!empty($details)){
        $status = array(
                  'status' => ERR_OK,
                  'message' => "Success",
                  'loanlist' => $details);
        return $status;
      }else{
        $status = array('status'=>ERR_NO_DATA,
         'message'=>"No Data Found");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    }
  }
  public function approve_reject_user_loan($data){

    try {
      
      extract($data);
      $sql = "UPDATE loans SET admin_approved_status=:admin_approved_status, modified_by=:modified_by,modified_date=:modified_date,approved_date=:modified_date WHERE loan_id = :loan_id";
      $stmt = $this->connection->prepare($sql);  
      $stmt->bindParam(":loan_id",$loan_id);
      $stmt->bindParam(":admin_approved_status", $admin_approved_status);
      $stmt->bindParam(":modified_by",$modified_by);
      $stmt->bindParam(":modified_date",$modified_date);
     $res = $stmt->execute();
      if($res == 'true'){
        $status = array(
          "status" => "200",
          "message" => "Updated Successfully");
        return $status;
      }else{
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Updated Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function deleteuser($data) {    
    try {
      $sql = "DELETE FROM ".DBPREFIX."users WHERE user_id = :user_id";
      $stmt = $this->connection->prepare($sql);  
      $stmt->bindParam(":user_id",$userId);
      $res = $stmt->execute();
      if($res == 'true'){
        $status = array(
          "status" => ERR_OK,
          "message" => "Deleted Successfully");
        return $status;
      }else{
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Deleted Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function StoreUserLoan($data) {
    try { 
    //print_r($data);exit;     
      extract($data);
      if($loan_id){
        $sql  = "UPDATE loans SET user_id=:user_id, loantype=:loantype ,emi_start_date=:emi_start_date,admin_approved_status=:admin_approved_status,days=:days,last_instalment_payeddate=:last_instalment_payeddate,status=:status,processing_fee=:processing_fee,total_amt=:total_amt, principal_amount = :principal_amount,intrest=:intrest,applyed_date=:applyed_date, approved_date = :approved_date , modified_date = :modified_date,modified_by=:modified_by WHERE loan_id = ".$loan_id;   
      $stmt = $this->connection->prepare($sql);
      }else{
        $sql = "INSERT INTO loans SET user_id=:user_id, loantype=:loantype ,emi_start_date=:emi_start_date,admin_approved_status=:admin_approved_status,days=:days,last_instalment_payeddate=:last_instalment_payeddate,status=:status,processing_fee=:processing_fee,total_amt=:total_amt, principal_amount = :principal_amount,intrest=:intrest,applyed_date=:applyed_date, approved_date = :approved_date , modified_date = :modified_date,modified_by=:modified_by";
        $stmt = $this->connection->prepare($sql);  
      }
      $created_date = date("Y-m-d H:i:s");
      $stmt->bindParam(":user_id", $user_id); 
      $stmt->bindParam(":loantype", $loantype); 
      $stmt->bindParam(":emi_start_date", $emi_start_date);
      $stmt->bindParam(":admin_approved_status", $admin_approved_status);
      $stmt->bindParam(":days", $days);
      $stmt->bindParam(":last_instalment_payeddate", $last_instalment_payeddate);
      $stmt->bindParam(":status", $status);
      $stmt->bindParam(":processing_fee", $processing_fee);
      $stmt->bindParam(":total_amt", $total_amt);
      $stmt->bindParam(":principal_amount", $principal_amount);
      $stmt->bindParam(":intrest", $intrest);
      $stmt->bindParam(":applyed_date", $applyed_date);
      $stmt->bindParam(':approved_date',$approved_date);
      $stmt->bindParam(':modified_date',$modified_date);
      $stmt->bindParam(':modified_by',$modified_by);
      $res = $stmt->execute();
        
      if($loan_id){
        $status = array(
          "status" => ERR_OK,
          "message" => "Updated Successfully",
          "loan_id" =>$loan_id
        );
        return $status;
      }
      $loan_id = $this->connection->lastInsertId();
      if($loan_id != ''  && $loan_id != '0'){       

        $status = array(
          "status" => ERR_OK,
          "message" => "Added Successfully",
          "loan_id" =>$loan_id
        );
        return $status;
      }else{
        //print_r($res);
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Added Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }

  public function store_loan_emis($data){

    try {      
      extract($data);

    $sql = "INSERT INTO emi_loan SET loan_id=:loan_id, emi_name=:emi_name ,emi_date=:emi_date,principal_amount=:principal_amount,emi_payable_amt=:emi_payable_amt,emi_intrest=:emi_intrest,processing_fee=:processing_fee,due_date=:due_date, status = :status";
      $stmt = $this->connection->prepare($sql);  
      $created_date = date("Y-m-d H:i:s");
      $emi_payable_amt = $principal_amount+$emi_intrest+$processing_fee;
      $stmt->bindParam(":loan_id", $loan_id); 
      $stmt->bindParam(":emi_name", $emi_name); 
      $stmt->bindParam(":emi_date", $emi_date);
      $stmt->bindParam(":principal_amount", $principal_amount);
      $stmt->bindParam(":emi_payable_amt", $emi_payable_amt);
      $stmt->bindParam(":emi_intrest", $emi_intrest);
      $stmt->bindParam(":processing_fee", $processing_fee);     
      $stmt->bindParam(":due_date", $due_date);
      $stmt->bindParam(":status", $status);
      $res = $stmt->execute();
      $loan_emi_id = $this->connection->lastInsertId();
      //return $loan_emi_id;
      $status = array(
              'status' => "200",
              'message' => 'loan emis added'
          );
      return $status;
      } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    }

  }

  public function updateUser($data) 
  {
    try {
      //print_r($data);exit;
      extract($data);

      
      $sql  = "UPDATE ".DBPREFIX."_users SET user_fname=:user_fname, user_lname=:user_lname, user_gender=:user_gender, user_mobile=:user_mobile,user_email=:user_email,user_level=:user_level,user_dob=:user_dob, user_status = :user_status ,modified_date = :modified_date, modified_by = :modified_by WHERE user_id = :user_id";   
      $stmt = $this->connection->prepare($sql);
      $modified_date = date("Y-m-d H:i:s");  
      $modified_by = "1";  
      $stmt->bindParam(":user_id", $user_id); 
      $stmt->bindParam(":user_fname", $user_fname); 
      $stmt->bindParam(":user_lname", $user_lname);
      $stmt->bindParam(":user_gender", $user_gender);
      $stmt->bindParam(":user_mobile", $user_mobile);
      $stmt->bindParam(":user_email", $user_email);      
      $stmt->bindParam(":user_dob", $user_dob);
      $stmt->bindParam(":user_level", $user_level);
      $stmt->bindParam(":user_status", $user_status);
      $stmt->bindParam(":modified_date", $modified_date);
      $stmt->bindParam(":modified_by", $modified_by);
      //print_r($sql);exit;
      $res = $stmt->execute();
     /* echo " ---------user_id : ".$user_id;
      echo ",user_fname : ".$user_fname;
      echo ",user_lname : ".$user_lname;
      echo ",user_gender : ".$user_gender;
      echo ",user_mobile : ".$user_mobile;
      echo ",user_email : ".$user_email;
      echo ",user_dob : ".$user_dob;
      echo ",user_level : ".$user_level;
      echo ",user_status : ".$user_status;
      echo ",modified_date : ".$modified_date;
      echo ",modified_by : ".$modified_by;*/
      //print_r($this->connection->mysql_error());exit;
      if($res){
        //print_r($res);exit;
        $status = array(
          "status" => ERR_OK,
          "message" => "Updated Successfully");
        return $status;
      }else{
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Updated Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function updateUserStatus($data) {    
    try {
      extract($data);
      $sql = "UPDATE sg_Userdetails SET status=:status, modified_by=:modified_by WHERE User_id = :User_id";
      $stmt = $this->connection->prepare($sql);  
      $stmt->bindParam(":User_id",$UserId);
      $stmt->bindParam(":status", $status);
      $stmt->bindParam(":modified_by",$userBy);
      $res = $stmt->execute();
      if($res == 'true'){
        $status = array(
          "status" => ERR_OK,
          "message" => "Updated Successfully");
        return $status;
      }else{
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Updated Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }

  public function updateUserPassword($data) {    
    try {
      extract($data);
      $sql = "UPDATE sg_users SET user_password=:user_password,temp_password = :temp_password, modified_by=:modified_by WHERE user_id = :user_id";
      $stmt = $this->connection->prepare($sql);  
      $userBy = "1";
      $stmt->bindParam(":user_id",$user_id);
      $stmt->bindParam(":user_password", $user_password);
      $stmt->bindParam(":temp_password", $temp_password);
      $stmt->bindParam(":modified_by",$userBy);
      $res = $stmt->execute();
      if($res == 'true'){
        $status = array(
          "status" => ERR_OK,
          "message" => "Updated Successfully");
        return $status;
      }else{
        $status = array(
          "status" => ERR_NOT_MODIFIED,
          "message" => "Not Updated Successfully");
        return $status;
      }
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }



}