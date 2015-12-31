<?php
namespace Concrete\Package\Disqus\Block\Disqus;

use Concrete\Core\Block\BlockController;
use Concrete\Core\Url\Url;
use Page;

class Controller extends BlockController
{
    protected $btTable = 'btDisqusComment';
    protected $btInterfaceWidth = "350";
    protected $btInterfaceHeight = "350";
    protected $btWrapperClass = 'ccm-ui';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = false; // We will be able to change it true after #3196 merge
    protected $btCacheBlockOutputLifetime = 0; //until manually updated or cleared

    public function getBlockTypeDescription()
    {
        return t('Add Disqus comment thred on the page.');
    }

    public function getBlockTypeName()
    {
        return t('Disqus Comment');
    }

    public function view()
    {
        $page = Page::getCurrentPage();
        $this->set('page', $page);

        $url = $page->getCollectionLink(true);
        $this->set('url', $url);
    }

    public function save($data)
    {
        if (isset($data['host'])) {
            $url = Url::createFromUrl($data['host']);
            $host = $url->getHost();
            $data['host'] = (string) $host;
        }
        parent::save($data);
    }
}
