<?php
namespace bogdanarizancu\hotjarcraftcms\models;

use craft\base\Model;

class Settings extends Model
{
	public string $hotjarId = '';
	public bool $enabled = true;
	public array $environments = ['production'];

	public function rules(): array
	{
		return [
			[['hotjarId'], 'string'],
			[['enabled'], 'boolean'],
			[['environments'], 'safe'],
		];
	}
}
