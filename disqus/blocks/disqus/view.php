<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="disqus_thread"></div>
<script>
var disqus_config = function () {
this.page.url = '<?php echo h($url) ?>';
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//<?php echo h($host) ?>/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>