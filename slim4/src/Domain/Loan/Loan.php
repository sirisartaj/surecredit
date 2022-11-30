<?php
namespace App\Domain\Loan;

use App\Domain\Loan\LoanRepository;
use App\Exception\ValidationException;
use App\Utilities\ImageUpload;

/**
 * Service.
 */
final class Loan
{
  /**
   * @var LoanRepository
   */
  private $repository;
  /**
   * The constructor.
   *
   * @param LoanRepository $repository The repository
   */
  public function __construct(LoanRepository $repository)
  {
    $this->repository = $repository;
  }
  public function getLoan(): array
  {        
    $Loan = $this->repository->getLoan();
    return $Loan;
  }
  public function getLoans($data): array 
  {
    $Loan = (array) $this->repository->getLoans($data);
    return $Loan;
  }
  
  public function StoreUserLoan($data) : array 
  {
    try {
      extract($data);

      $res = $this->repository->StoreUserLoan($data);
      return $res;
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function storeLoanEmis($data) : array 
  {
    try {
      extract($data);

      $res = $this->repository->store_loan_emis($data);
      return $res;
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function get_all_loans() : array 
  {
    try {
     // extract($data);

      $res = $this->repository->get_all_loans();
      return $res;
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function updateUser($data) : array 
  {
    try {
      //print_r($data);echo "in userco";exit;
      extract($data);

      /*if(isset($user_avatar)&&!empty($user_avatar)){
        $filedir = UPLOADPATH."Loan/"; 
        $randName = rand(10101010, 9090909090);
        $newName = "User_". $randName;
        $ext = substr($user_avatar['name'], strrpos($user_avatar['name'], '.') + 1);
        $ImageUpload = new ImageUpload;
        $ImageUpload->File = $user_avatar;
        $ImageUpload->method = 1;
        $ImageUpload->SavePath = $filedir;
        $ImageUpload->NewWidth = '100';
        $ImageUpload->NewHeight = '100';
        $ImageUpload->NewName = $newName;
        $ImageUpload->OverWrite = true;
        $err = $ImageUpload->UploadFile();
        $user_avatar = $newName.".".strtolower($ext);
      }*/
      //$data['user_avatar'] = $user_avatar;
      $res = $this->repository->updateUser($data);
      return $res;
    } catch(PDOException $e) {
      $status = array(
              'status' => "500",
              'message' => $e->getMessage()
          );
      return $status;
    } 
  }
  public function updateUserStatus($data) {
    $User = $this->repository->updateUserStatus($data);
    return $User;
  }
  public function Approve_reject_user_loan($data) {
   // print_r($data);exit;
    $User = $this->repository->approve_reject_user_loan($data);
    return $User;
  }
  public function updateUserPassword($data) {
    $User = $this->repository->updateUserPassword($data);
    return $User;
  }
  public function GetLoanById($data) {
    //print_r($data);exit;
    $User = $this->repository->GetLoanById($data);
    return $User;
  }
}