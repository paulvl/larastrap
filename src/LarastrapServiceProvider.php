<?php

namespace Paulvl\Larastrap;

use Illuminate\Support\ServiceProvider;
use Collective\Html\FormFacade as Form;
use Collective\Html\HtmlFacade as Html;

class LarastrapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'larastrap');

        Form::component('fhOpen', 'larastrap::form-horizontal.open', ['attributes' => []]);
        Form::component('fhClose', 'larastrap::form-horizontal.close', []);
        Form::component('fhText', 'larastrap::form-horizontal.text', ['name', 'label', 'value' => null, 'attributes' => [], 'size' => [4,6]]);
        Form::component('fhPassword', 'larastrap::form-horizontal.password', ['name', 'label', 'attributes' => [], 'size' => [4,6]]);
        Form::component('fhSelect', 'larastrap::form-horizontal.select', ['name', 'label', 'value' => [], 'selected' => null, 'attributes' => [], 'size' => [4,6]]);
        Form::component('fhSubmit', 'larastrap::form-horizontal.submit', ['text' => 'Submit', 'class' => 'default', 'icon' => 'check', 'size' => [4,6]]);
        Form::component('fhDateTime', 'larastrap::form-horizontal.datetime', ['name', 'label', 'id' => null, 'value' => null, 'attributes' => [], 'size' => [4,6]]);

        /*
         * Custom components...
         */
        Html::component('customPageTitle', 'larastrap::custom.page-title', ['title' => 'Page title']);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}