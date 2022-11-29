<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\App;

return function (App $app) {
 
  //Admin roles and privileges
  $app->get('/roles/getroles', \App\Action\Roles\GetRoles::class);
  $app->post('/roles/addrole', \App\Action\Roles\AddRole::class);
  $app->get('/roles/getrole/{roleId}', \App\Action\Roles\GetRole::class);
  $app->post('/addadminrole', \App\Action\AddAdminRole::class);
  $app->post('/roles/updaterole', \App\Action\Roles\UpdateRole::class);
  $app->delete('/deleteadminrole/{roleId}', \App\Action\DeleteAdminRole::class);
   
};