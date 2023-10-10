<?php

namespace Inspector\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Tool;

class InspectorNovaLink extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        //Nova::script('cloud-service-links', __DIR__.'/../dist/js/tool.js');
        //Nova::style('cloud-service-links', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function menu(Request $request)
    {
        return MenuSection::make('Inspector')
            ->externalLink('https://app.inspector.dev/project-lookup/'.config('inspector.key'))
            ->icon('desktop-computer');
    }
}
