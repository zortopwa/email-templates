<?php

namespace Hblab\LiveDataImport\Setup\Patch\Data;

use Hblab\LiveDataImport\Setup\Installer;
use Magento\Framework\Setup;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;

/**
 * Class InsertAttributeData
 * @package Hblab\LiveDataImport\Setup\Patch\Data
 */
class InsertAttributeData implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var Setup\SampleData\Executor
     */
    protected $executor;

    /**
     * @var Installer
     */
    protected $installer;

    /**
     * InstallCatalogSampleData constructor.
     * @param Setup\SampleData\Executor $executor
     * @param Installer $installer
     */
    public function __construct(
        Setup\SampleData\Executor $executor,
        Installer $installer
    ) {
        $this->executor = $executor;
        $this->installer = $installer;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->executor->exec($this->installer);
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public static function getVersion()
    {
        return '1.0.0';
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}
