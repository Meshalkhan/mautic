<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLightsaml_Container_PartyService extends AppKernelProdContainer
{
    /*
     * Gets the private 'lightsaml.container.party' shared service.
     *
     * @return \LightSaml\SymfonyBridgeBundle\Bridge\Container\PartyContainer
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \LightSaml\Store\TrustOptions\CompositeTrustOptionsStore();
        $a->add(($container->services['mautic.security.saml.trust_store'] ?? $container->load('getMautic_Security_Saml_TrustStoreService')));

        return $container->privates['lightsaml.container.party'] = new \LightSaml\SymfonyBridgeBundle\Bridge\Container\PartyContainer(($container->privates['lightsaml.party.idp_entity_descriptor_store'] ?? $container->load('getLightsaml_Party_IdpEntityDescriptorStoreService')), ($container->privates['lightsaml.party.sp_entity_descriptor_store'] ?? ($container->privates['lightsaml.party.sp_entity_descriptor_store'] = new \LightSaml\Store\EntityDescriptor\CompositeEntityDescriptorStore())), $a);
    }
}
