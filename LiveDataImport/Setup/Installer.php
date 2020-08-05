<?php
namespace Hblab\LiveDataImport\Setup;

use Hblab\LiveDataImport\Model\Attribute;
use Hblab\LiveDataImport\Model\Swatches;
use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{

    /**
     * Setup class for product attributes
     *
     * @var Attribute
     */
    protected $attributeSetup;

    /**
     * @var Swatches;
     */
    protected $swatches;

    /**
     * @param Attribute $attributeSetup
     */
    public function __construct(
        Attribute $attributeSetup,
        Swatches $swatches
    ) {
        $this->attributeSetup = $attributeSetup;
        $this->swatches = $swatches;
    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->attributeSetup->install(['Hblab_LiveDataImport::fixtures/attributes.csv']);
        $this->swatches->install();
    }
}
