<?php
/**
 * Rubedo -- ECM solution
 * Copyright (c) 2014, WebTales (http://www.webtales.fr/).
 * All rights reserved.
 * licensing@webtales.fr
 *
 * Open Source License
 * ------------------------------------------------------------------------------------------
 * Rubedo is licensed under the terms of the Open Source GPL 3.0 license.
 *
 * @category   Rubedo
 * @package    Rubedo
 * @copyright  Copyright (c) 2012-2014 WebTales (http://www.webtales.fr)
 * @license    http://www.gnu.org/licenses/gpl.html Open Source GPL 3.0 license
 */

namespace Formationnrcom\Collection;
use Rubedo\Collection\AbstractCollection;
use Rubedo\Services\Manager;
use Zend\EventManager\EventInterface;

class Journaux extends AbstractCollection
{
    public function __construct()
    {
        $this->_collectionName = 'Journaux';
        parent::__construct();
    }
    public function syncContentCreate(EventInterface $e){
        $data = $e->getParam('data', array());
        $content = Manager::getService("Contents")->findById($data['id'], true, false);
        $this->create(["titre"=>$content["text"]]);
    }
}
