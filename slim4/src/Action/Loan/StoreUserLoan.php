<?php
namespace App\Action\Loan;

use App\Domain\Loan\Loan;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class StoreUserLoan
{
  private $Loan;
  public function __construct(Loan $loan)
  {
    $this->loan = $loan;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response
  ): ResponseInterface 
  {
    $data = $request->getBody();
    $data =(array) json_decode($data);

   // print_r($data);exit;
    $loan = $this->loan->StoreUserLoan($data);
    $response->getBody()->write((string)json_encode($loan));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}