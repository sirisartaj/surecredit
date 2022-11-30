<?php
namespace App\Action\Loan;

use App\Domain\Loan\Loan;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

final class GetLoanById
{
  private $Loan;
  public function __construct(Loan $Loan)
  {
    $this->Loan = $Loan;
  }
  public function __invoke(
      ServerRequestInterface $request, 
      ResponseInterface $response, $args
  ): ResponseInterface 
  {
    
    $loan = $this->Loan->GetLoanById($args);
    $response->getBody()->write((string)json_encode($loan));
    return $response
          ->withHeader('Content-Type', 'application/json');
  }
}