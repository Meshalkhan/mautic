<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosOauthServer_Authorize_FormService extends AppKernelProdContainer
{
    /*
     * Gets the private 'fos_oauth_server.authorize.form' shared service.
     *
     * @return \Symfony\Component\Form\Form
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['fos_oauth_server.authorize.form'] = ($container->services['.container.private.form.factory'] ?? $container->get_Container_Private_Form_FactoryService())->createNamed('fos_oauth_server_authorize_form', 'FOS\\OAuthServerBundle\\Form\\Type\\AuthorizeFormType', NULL, ['validation_groups' => $container->parameters['fos_oauth_server.authorize.form.validation_groups']]);
    }
}
