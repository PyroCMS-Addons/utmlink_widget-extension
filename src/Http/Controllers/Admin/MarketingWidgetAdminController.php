<?php namespace Thrive\UtmlinkWidgetExtension\Http\Controllers\Admin;

use Anomaly\ConfigurationModule\Configuration\Contract\ConfigurationRepositoryInterface;
use Anomaly\DashboardModule\Dashboard\Contract\DashboardInterface;
use Anomaly\Streams\Platform\Http\Controller\AdminController;

class MarketingWidgetAdminController extends AdminController
{
   

    public function __construct()
    {
    
    }


    public function index(ConfigurationRepositoryInterface $configuration)
    {
   
        return redirect('/admin');

    }


}