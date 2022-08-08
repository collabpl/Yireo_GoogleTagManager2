<?php declare(strict_types=1);

namespace Yireo\GoogleTagManager2\Test\Integration\DataLayer\Tag;

use Magento\Framework\App\ObjectManager;
use PHPUnit\Framework\TestCase;
use Yireo\GoogleTagManager2\DataLayer\Tag\Version;

class VersionTest extends TestCase
{
    public function testIfVersionIsSemantic()
    {
        $version = ObjectManager::getInstance()->get(Version::class);
        $this->assertTrue((bool)preg_match('/^([0-9]+)\.([0-9]+)\.([0-9]+)$/', $version->addData()));
    }
}
