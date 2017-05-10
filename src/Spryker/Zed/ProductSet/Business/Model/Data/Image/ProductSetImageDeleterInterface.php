<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductSet\Business\Model\Data\Image;

interface ProductSetImageDeleterInterface
{

    /**
     * @param int $idProductSet
     *
     * @return void
     */
    public function deleteImageSets($idProductSet);

}
