# Inspector Nova Link

Direct link to the Inspector dashboard in your Laravel Nova administration panel.

![](https://app.inspector.dev/images/docs/inspector-nova-link-screen.png)

## Install

Install the latest version using composer:

```
composer require inspector-apm/inspector-nova-link
```

## Configure the Ingestion Key

Put the Inspector Ingestion Key in your environment file if you haven’t already:

```
INSPECTOR_INGESTION_KEY=[ingestion key]
```

You can obtain `INSPECTOR_API_KEY` creating a new project in your [Inspector](https://www.inspector.dev) dashboard.

## Register the tool

Register the tool in your `app/Providers/NovaServiceProvider`:

```php
public function tools()
{
    return [
        ...,
        new \Inspector\Nova\InspectorNovaLink,
    ];
}
```

## LICENSE

This package are licensed under the [MIT](LICENSE) license.
