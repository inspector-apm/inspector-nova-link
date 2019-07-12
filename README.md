# Inspector Nova Link

Install our Laravel Nova tool to add a direct link to the Inspector dashboard in you Nova administration panel.

![](https://app.inspector.dev/images/docs/inspector-nova-link-screen.png)

## Install

Install the latest version using composer:

```sehll
composer require inspector-apm/inspector-nova-link
```

## Configure the API Key

Put the Inspector API key in your environment file:

```bash
INSPECTOR_API_KEY=[api key]
```

You can obtain `INSPECTOR_API_KEY` creating a new project in your [Inspector](https://www.inspector.dev) dashboard.

## Register the tool

Register the tool in your `app/Providers/NovaServiceProvider`:

```php
public function tools()
{
    return [
        ...,
        new \Inspector\Nova\InspectorLink,
    ];
}
```

## LICENSE

This package are licensed under the [MIT](LICENSE) license.
