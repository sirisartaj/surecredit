<?php
namespace App\Action\Loan;

use App\Domain\Loan\Loan;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GetAllLoans
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
    
    $loan = $this->loan->get_all_loans();
    $response->getBody()->write((string)json_encode($loan));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}