<?php

namespace peetya\taoPeter\model;

use oat\oatbox\service\ConfigurableService;
use oat\taoItems\model\event\ItemUpdatedEvent;

class SaveCounterService extends ConfigurableService
{
    /**
     * SERVICE_ID should be in the following format:
     * <extension name>/<service name>
     *
     * Then the service should be registered in the following file:
     * <extension>/config/default/<service name>.conf.php
     *
     * ... on the following way:
     * <?php
     * return new \peetya\taoPeter\model\SaveCounterService();
     */
    const SERVICE_ID = 'taoPeter/saveCounter';

    public function onItemUpdate(ItemUpdatedEvent $event)
    {
        $this->logDebug('Item has been updated');
    }
}
