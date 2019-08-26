<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Email\Email;

class ContactController extends AppController {     
  
public function initialize()
{
    parent::initialize();
   $this->loadComponent('Contact');
   
}
   
public function index(){
  $this->Contact->index();
 }
}
?>