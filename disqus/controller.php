<?php

namespace Concrete\Package\Disqus;

use Concrete\Core\Backup\ContentImporter;
use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $pkgHandle = 'disqus';
    protected $appVersionRequired = '5.7.5.3';
    protected $pkgVersion = '0.1';

    public function getPackageDescription()
    {
        return t("Adds disqus comment system to your site.");
    }

    public function getPackageName()
    {
        return t("Disqus");
    }
    
    public function install()
    {
        $pkg = parent::install();
        
        $ci = new ContentImporter();
        $ci->importContentFile($pkg->getPackagePath() . '/config/blocktypes.xml');
    }
}
