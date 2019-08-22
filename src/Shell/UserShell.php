<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Shell;

use Cake\Console\ConsoleOptionParser;
use Cake\Console\Shell;
use Cake\Log\Log;
use Psy\Shell as PsyShell;

/**
 * Simple console wrapper around Psy\Shell.
 */
class UserShell extends Shell
{
    public function initialize()
    {
        parent::initialize();
        $this->loadModel('Users');
    }

    public function show()
    {
        if (empty($this->args[0])) {
            // Use error() before CakePHP 3.2
            return $this->abort('Please enter a username.');
        }
        $user = $this->Users->findByUsername($this->args[0])->first();
        $this->out(print_r($user, true));
    }
}