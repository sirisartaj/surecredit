<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {
 

  $app->post('/loan/store_user_loan', \App\Action\Loan\StoreUserLoan::class);
  $app->post('/loan/store_loan_emis', \App\Action\Loan\storeLoanEmis::class);
  $app->get('/loan/get_all_loans', \App\Action\Loan\GetAllLoans::class);
  $app->get('/loan/get_loan_by_id/{loan_id}', \App\Action\Loan\GetLoanById::class);
  //loan/Approve_reject_user_loan
  $app->post('/loan/Approve_reject_user_loan', \App\Action\Loan\ApproveRejectUserLoan::class);


 /* //Admin roles and privileges
  $app->get('/roles/getroles', \App\Action\Roles\GetRoles::class);
  $app->post('/roles/addrole', \App\Action\Roles\AddRole::class);
  $app->get('/roles/getrole/{roleId}', \App\Action\Roles\GetRole::class);

  

  $app->post('/roles/updaterole', \App\Action\Roles\UpdateRole::class);
  $app->delete('/deleteadminrole/{roleId}', \App\Action\DeleteAdminRole::class);*/
   
};