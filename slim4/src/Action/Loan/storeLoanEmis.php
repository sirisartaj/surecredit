<?php
namespace App\Action\Loan;

use App\Domain\Loan\Loan;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class storeLoanEmis
{
  private $Loan;
  public function __construct(Loan $Loan)
  {
    $this->Loan = $Loan;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response
  ): ResponseInterface 
  {
      
     $data = $request->getBody();
     $data =(array) json_decode($data);

    //print_r($data);exit;
    
    $Loan = $this->Loan->storeLoanEmis($data);
    $response->getBody()->write((string)json_encode($Loan));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}