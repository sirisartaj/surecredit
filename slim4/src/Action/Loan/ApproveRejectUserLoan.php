<?php

namespace App\Action\Loan;

use App\Domain\Loan\Loan;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class ApproveRejectUserLoan
{
  private $Loan;
  public function __construct(Loan $Loan)
  {
    $this->Loan = $Loan;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response,$args
  ): ResponseInterface 
  {
     $data = $request->getBody();
     $data =(array) json_decode($data);
    $Users = $this->Loan->Approve_reject_user_loan($data);
    $response->getBody()->write((string)json_encode($Users));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}