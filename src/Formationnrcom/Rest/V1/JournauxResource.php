<?php
namespace Formationnrcom\Rest\V1;

use Rubedo\Services\Manager;
use RubedoAPI\Entities\API\Definition\FilterDefinitionEntity;
use RubedoAPI\Entities\API\Definition\VerbDefinitionEntity;
use RubedoAPI\Rest\V1\AbstractResource;


class JournauxResource extends AbstractResource {
    function __construct()
    {
        parent::__construct();
        $this->define();
    }

    protected function define()
    {
        $this
            ->definition
            ->setName('Journaux')
            ->setDescription('Description')
            ->editVerb('get', function(VerbDefinitionEntity &$entity) {
                $entity
                    ->setDescription('Get des journaux')
                    ->addOutputFilter(
                        (new FilterDefinitionEntity())
                            ->setDescription('Journaux')
                            ->setKey('journaux')
                            ->setRequired()
                    );
            });
    }

    public function getAction($params)
    {
        $data=Manager::getService("Journaux")->getList();
        return [
            "success"=>true,
            "journaux"=>$data["data"]
        ];
    }



} 