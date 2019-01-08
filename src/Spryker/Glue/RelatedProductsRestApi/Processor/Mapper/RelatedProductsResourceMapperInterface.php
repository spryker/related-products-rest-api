<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\RelatedProductsRestApi\Processor\Mapper;

use Generated\Shared\Transfer\RestRelatedProductsAttributesTransfer;

interface RelatedProductsResourceMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductViewTransfer[] $productViewTransfers
     *
     * @return \Generated\Shared\Transfer\RestRelatedProductsAttributesTransfer
     */
    public function mapRelatedProductsTransferToRestRelatedProductsAttributesTransfer(array $productViewTransfers): RestRelatedProductsAttributesTransfer;
}
