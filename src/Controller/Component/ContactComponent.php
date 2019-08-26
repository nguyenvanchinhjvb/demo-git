<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Mailer\Email;
class ContactComponent extends Component
{
    public function index()
    {
        $email = new Email('default');
        $email
            ->from(['nguyenvanchinh.jvb@gmail.com' => 'Nguyen Van Chinh'])
            ->to('nguyenchinh97tx@gmail.com')
            ->subject('About')
            ->send('My message');
    }
}
 ?>
