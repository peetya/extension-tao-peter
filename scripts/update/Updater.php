<?php

namespace peetya\taoPeter\scripts\update;

use oat\tao\scripts\update\OntologyUpdater;

/**
 * to run the update script, run the following command in your root folder:
 * php tao/scripts/taoUpdate.php
 */
class Updater extends \common_ext_ExtensionUpdater
{
    public function update($initialVersion)
    {
        if ($this->isVersion('0.1.0')) {
            OntologyUpdater::syncModels();

            $this->setVersion('0.2.0');
        }
    }
}