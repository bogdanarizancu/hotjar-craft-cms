<?php

namespace bogdanarizancu\hotjarcraftcms;

use Craft;
use craft\base\Plugin as BasePlugin;
use bogdanarizancu\hotjarcraftcms\models\Settings;
use bogdanarizancu\hotjarcraftcms\services\HotjarService;
use yii\base\Event;
use craft\web\View;

class Plugin extends BasePlugin
{
	public bool $hasCpSettings = true;
	public static Plugin $plugin;

	public function init(): void
	{
		parent::init();
		self::$plugin = $this;

		Event::on(
			View::class,
			View::EVENT_BEFORE_RENDER_PAGE_TEMPLATE,
			fn() => HotjarService::injectScript()
		);
	}

	protected function createSettingsModel(): ?\craft\base\Model
	{
		return new Settings();
	}

	protected function settingsHtml(): ?string
	{
		return Craft::$app->view->renderTemplate(
			'hotjar-craft-cms/_settings',
			['settings' => $this->getSettings()]
		);
	}
}
