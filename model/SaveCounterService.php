<?php

namespace peetya\taoPeter\model;

use oat\generis\model\OntologyAwareTrait;
use oat\oatbox\service\ConfigurableService;
use oat\taoItems\model\event\ItemUpdatedEvent;

class SaveCounterService extends ConfigurableService
{
    use OntologyAwareTrait;

    const SERVICE_ID = 'taoPeter/saveCounter';
    const PROPERTY_COUNT = 'http://www.tao.lu/Ontologies/TAOItem.rdf#ItemCount';

    public function onItemUpdate(ItemUpdatedEvent $event)
    {
        $item     = $this->getResource($event->getItemUri());
        $property = $this->getProperty(self::PROPERTY_COUNT);
        $value    = (string) $item->getOnePropertyValue($property);

        $this->logDebug('Item has been updated with the following value: ' . $value);

        $value = (integer) $value;
        $value++;

        $item->editPropertyValues($property, $value);
    }
}
