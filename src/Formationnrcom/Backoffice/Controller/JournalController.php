<?php

namespace Formationnrcom\Backoffice\Controller;

use Rubedo\Backoffice\Controller\DataAccessController;
use Rubedo\Services\Manager;

class JournalController extends DataAccessController
{
    public function __construct()
    {
        parent::__construct();
        $this->_dataService = Manager::getService('Journaux');
    }
}