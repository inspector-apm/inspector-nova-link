# Inspector Nova Link

Direct link to the Inspector dashboard in your Laravel Nova administration panel.

![](https://app.inspector.dev/images/docs/inspector-nova-link-screen.png)

## Install

Install the latest version using composer:

```sehll
composer require inspector-apm/inspector-nova-link
```

## Configure the Ingestion Key

Put the Inspector Ingestion Key in your environment file if you haven’t already:

```bash
INSPECTOR_INGESTION_KEY=xxxxxxxxxxxxxxxxxxxxxx
```

You can obtain `INSPECTOR_INGESTION_KEY` creating a new application in your [Inspector](https://app.inspector.dev) dashboard.

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

This package is licensed under the [MIT](LICENSE) license.
