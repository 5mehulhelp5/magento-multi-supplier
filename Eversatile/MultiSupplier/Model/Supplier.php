<?php

namespace Eversatile\MultiSupplier\Model;

use Magento\Framework\Model\AbstractModel;

class Supplier extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Eversatile\MultiSupplier\Model\ResourceModel\Supplier::class);
    }
}
