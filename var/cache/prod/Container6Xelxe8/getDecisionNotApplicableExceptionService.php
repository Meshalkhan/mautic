<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDecisionNotApplicableExceptionService extends AppKernelProdContainer
{
    /*
     * Gets the public 'Mautic\CampaignBundle\Executioner\Exception\DecisionNotApplicableException' shared autowired service.
     *
     * @return \Mautic\CampaignBundle\Executioner\Exception\DecisionNotApplicableException
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Mautic\\CampaignBundle\\Executioner\\Exception\\DecisionNotApplicableException'] = new \Mautic\CampaignBundle\Executioner\Exception\DecisionNotApplicableException();
    }
}
