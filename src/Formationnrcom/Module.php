<?php
namespace Formationnrcom;

use Rubedo\Services\Manager;
use Zend\Mvc\MvcEvent;
use Rubedo\Collection\WorkflowAbstractCollection;


class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../../config/module.config.php';
    }
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $eventManager->attach(array(
            WorkflowAbstractCollection::POST_PUBLISH_COLLECTION
        ), array(
            Manager::getService('Journaux'),
            'syncContentCreate'
        ), 1);
    }
}