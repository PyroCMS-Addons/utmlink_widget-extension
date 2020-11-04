<?php 

namespace Thrive\UtmlinkWidgetExtension\Command;

use Anomaly\ConfigurationModule\Configuration\Contract\ConfigurationRepositoryInterface;
use Anomaly\DashboardModule\Widget\Contract\WidgetInterface;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Foundation\Bus\DispatchesJobs;


class LoadItems
{

    use DispatchesJobs;

    /**
     * The widget instance.
     *
     * @var WidgetInterface
     */
    protected $widget;


    public function __construct(WidgetInterface $widget)
    {
        $this->widget = $widget;
    }


    public function handle(ConfigurationRepositoryInterface $configuration)
    {
       
        $config = $this->getConfigurationData($configuration);

      
        $this->widget->addData('config',  $config);

    }


    private function getConfigurationData(ConfigurationRepositoryInterface $configuration)
    {

        $default_utm = $configuration->value(
            'thrive.extension.utmlink_widget::default_utm',
            $this->widget->getId(),
            false
        );

        $config = [
            'default_utm' => $default_utm,
        ];

        
        return $config;
    }
}

