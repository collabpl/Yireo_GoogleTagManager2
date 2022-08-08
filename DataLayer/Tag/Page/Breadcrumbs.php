<?php declare(strict_types=1);

namespace Yireo\GoogleTagManager2\DataLayer\Tag\Page;

use Yireo\GoogleTagManager2\DataLayer\Tag\AddTagInterface;
use Magento\Catalog\Helper\Data as CatalogHelper;

class Breadcrumbs implements AddTagInterface
{
    private CatalogHelper $catalogHelper;

    public function __construct(
        CatalogHelper $catalogHelper
    ) {
        $this->catalogHelper = $catalogHelper;
    }

    public function addData(): array
    {
        $data = [];
        $breadcrumbs = $this->catalogHelper->getBreadcrumbPath();
        foreach ($breadcrumbs as $breadcrumb) {
            if (is_array($breadcrumb) && isset($breadcrumb['label'])) {
                $data[] = $breadcrumb['label'];
            }
        }

        return $data;
    }
}
