<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductSet\Dependency\Facade;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\UrlTransfer;

class ProductSetToUrlBridge implements ProductSetToUrlInterface
{
    /**
     * @var \Spryker\Zed\Url\Business\UrlFacadeInterface
     */
    protected $urlFacade;

    /**
     * @param \Spryker\Zed\Url\Business\UrlFacadeInterface $urlFacade
     */
    public function __construct($urlFacade)
    {
        $this->urlFacade = $urlFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer|string $urlTransfer String format is accepted for BC reasons.
     * @param \Generated\Shared\Transfer\LocaleTransfer|null $localeTransfer @deprecated This parameter exists for BC reasons. Use `createUrl(UrlTransfer $urlTransfer)` format instead.
     * @param string|null $resourceType @deprecated This parameter exists for BC reasons. Use `createUrl(UrlTransfer $urlTransfer)` format instead.
     * @param int|null $idResource @deprecated This parameter exists for BC reasons. Use `createUrl(UrlTransfer $urlTransfer)` format instead.
     *
     * @return \Generated\Shared\Transfer\UrlTransfer
     */
    public function createUrl($urlTransfer, LocaleTransfer $localeTransfer = null, $resourceType = null, $idResource = null)
    {
        return $this->urlFacade->createUrl($urlTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     *
     * @return \Generated\Shared\Transfer\UrlTransfer
     */
    public function updateUrl(UrlTransfer $urlTransfer)
    {
        return $this->urlFacade->updateUrl($urlTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     *
     * @return void
     */
    public function deleteUrl(UrlTransfer $urlTransfer)
    {
        $this->urlFacade->deleteUrl($urlTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer|string $urlTransfer String format is accepted for BC reasons.
     *
     * @return bool
     */
    public function hasUrl($urlTransfer)
    {
        return $this->urlFacade->hasUrl($urlTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     *
     * @return void
     */
    public function activateUrl(UrlTransfer $urlTransfer)
    {
        $this->urlFacade->activateUrl($urlTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\UrlTransfer $urlTransfer
     *
     * @return void
     */
    public function deactivateUrl(UrlTransfer $urlTransfer)
    {
        $this->urlFacade->deactivateUrl($urlTransfer);
    }
}
