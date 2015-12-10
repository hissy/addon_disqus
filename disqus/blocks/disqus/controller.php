<?php
namespace Concrete\Package\Disqus\Block\Disqus;

use Concrete\Core\Block\BlockController;
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
    protected $btCacheBlockOutputForRegisteredUsers = false;
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
        $data['domain'] = isset($data['domain']) ? trim($data['domain']) : '';
        parent::save($data);
    }
}
