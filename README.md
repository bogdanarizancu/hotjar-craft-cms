# 🎛️ Hotjar for Craft CMS

Lightweight, privacy-conscious plugin for effortlessly integrating Hotjar with Craft CMS.

---

## 🚀 Features

- Automatic Hotjar script injection
- Environment-aware loading (e.g. only on `production`)
- Control panel interface for easy management
- Multi-environment support (dev/staging/prod)
- Ready for seamless cookie consent integrations

---

## ✨ Changes & Donate Support

This plugin is **free for everyone**. If you find it useful, consider supporting via PayPal:
[Tips here](https://ko-fi.com/hotjarcraftcms)

---

## 📦 Installation

Install using Composer:

```bash
composer require bogdanarizancu/hotjar-craft-cms
``` 

## ⚙️ Configuration
After installation, navigate to Settings → Hotjar for Craft CMS:

Enter your Hotjar Site ID (e.g., 1234567)

Toggle plugin on/off

Select which environments should load the Hotjar script

## 💻 Requirements
Craft CMS 4.0+

PHP 8.0+

## 🧪 Local Development / Testing
To test or contribute to the plugin locally:

Clone the repository into your Craft project's root:

```bash
git clone git@github.com:bogdanarizancu/hotjar-craft-cms.git modules/hotjar
```
Add a local path repository entry in your composer.json:
```json
"repositories": [
  {
    "type": "path",
    "url": "./modules/hotjar"
  }
]
```

Require it:
```bash
composer require bogdanarizancu/hotjar-craft-cms:@dev
```
Install it from the Craft CP.

### 🧾 License
MIT © Bogdan Arizancu

### ☕ Support This Plugin

This plugin is free and open source. If you find it helpful, consider supporting its development:

👉 https://ko-fi.com/hotjarcraftcms

Your support is deeply appreciated! ❤️