<?php

namespace Container6Xelxe8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_Provider_Dao_MainService extends AppKernelProdContainer
{
    /*
     * Gets the private 'security.authentication.provider.dao.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider
     *
     * @deprecated Since symfony/security-bundle 5.3: The "security.authentication.provider.dao.main" service is deprecated, use the new authenticator system instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/security-bundle', '5.3', 'The "security.authentication.provider.dao.main" service is deprecated, use the new authenticator system instead.');

        $a = ($container->services['mautic.user.provider'] ?? $container->getMautic_User_ProviderService());

        if (isset($container->privates['security.authentication.provider.dao.main'])) {
            return $container->privates['security.authentication.provider.dao.main'];
        }

        return $container->privates['security.authentication.provider.dao.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider($a, ($container->privates['security.user_checker'] ?? ($container->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\InMemoryUserChecker())), 'main', ($container->privates['security.password_hasher_factory'] ?? $container->getSecurity_PasswordHasherFactoryService()), true);
    }
}
