<?php
namespace Concrete\Package\Disqus;

use Concrete\Core\Package\Package;
use BlockType;
use BlockTypeSet;

class Controller extends Package
{
    protected $pkgHandle = 'disqus';
    protected $appVersionRequired = '5.7.5';
    protected $pkgVersion = '0.1';

    public function getPackageDescription()
    {
        return t("Adds Disqus comment system to your site.");
    }

    public function getPackageName()
    {
        return t("Disqus");
    }

    public function install()
    {
        $pkg = parent::install();
        $bt = BlockType::installBlockType('disqus', $pkg);
        $btSet = BlockTypeSet::getByHandle('social');
        if (is_object($bt) && is_object($btSet)) {
            $btSet->addBlockType($bt);
        }
    }
}
