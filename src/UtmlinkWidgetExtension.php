<?php namespace Thrive\UtmlinkWidgetExtension;

use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Anomaly\DashboardModule\Widget\Extension\WidgetExtension;

use Thrive\UtmlinkWidgetExtension\Command\LoadItems;

class UtmlinkWidgetExtension extends WidgetExtension
{

    protected $provides = 'anomaly.module.dashboard::widget.utmlink_widget';

    protected function load(WidgetInterface $widget)
    {

        $this->dispatch(new LoadItems($widget));
    }    

}
