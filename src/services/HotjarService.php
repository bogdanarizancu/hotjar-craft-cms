<?php
namespace bogdanarizancu\hotjarcraftcms\services;

use Craft;
use craft\base\Component;
use bogdanarizancu\hotjarcraftcms\HotjarCraftCms;

class HotjarService extends Component
{
	public static function injectScript(): void
	{
		$settings = HotjarCraftCms::getInstance()->getSettings();
		$env = Craft::$app->env;

		if (!$settings->enabled || !in_array($env, $settings->environments)) {
			return;
		}

		$hotjarId = $settings->hotjarId;
		if (!$hotjarId) {
			return;
		}

		Craft::$app->view->registerHeadHtml(<<<SCRIPT
<script>
(function(h,o,t,j,a,r){
    h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
    h._hjSettings={hjid:$hotjarId,hjsv:6};
    a=o.getElementsByTagName('head')[0];
    r=o.createElement('script');r.async=1;
    r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
    a.appendChild(r);
})(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
SCRIPT);
	}
}
