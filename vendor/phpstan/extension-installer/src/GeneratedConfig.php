<?php declare(strict_types = 1);

namespace PHPStan\ExtensionInstaller;

/**
 * This class is generated by phpstan/extension-installer.
 * @internal
 */
final class GeneratedConfig
{

	public const EXTENSIONS = array (
  'composer/composer' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/composer/composer',
    'relative_install_path' => '../../../composer/composer',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'phpstan/rules.neon',
      ),
    ),
    'version' => '2.7.9',
    'phpstanVersionConstraint' => NULL,
  ),
  'composer/pcre' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/composer/pcre',
    'relative_install_path' => '../../../composer/pcre',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
      ),
    ),
    'version' => '3.3.1',
    'phpstanVersionConstraint' => NULL,
  ),
  'phpstan/phpstan-deprecation-rules' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/phpstan/phpstan-deprecation-rules',
    'relative_install_path' => '../../phpstan-deprecation-rules',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'rules.neon',
      ),
    ),
    'version' => '1.2.1',
    'phpstanVersionConstraint' => '>=1.12.0.0-dev, <2.0.0.0-dev',
  ),
  'phpstan/phpstan-doctrine' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/phpstan/phpstan-doctrine',
    'relative_install_path' => '../../phpstan-doctrine',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.5.3',
    'phpstanVersionConstraint' => '>=1.11.7.0-dev, <2.0.0.0-dev',
  ),
  'phpstan/phpstan-phpunit' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/phpstan/phpstan-phpunit',
    'relative_install_path' => '../../phpstan-phpunit',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.4.0',
    'phpstanVersionConstraint' => '>=1.11.0.0-dev, <2.0.0.0-dev',
  ),
  'phpstan/phpstan-symfony' => 
  array (
    'install_path' => 'C:\\xampp\\htdocs\\mautic\\vendor/phpstan/phpstan-symfony',
    'relative_install_path' => '../../phpstan-symfony',
    'extra' => 
    array (
      'includes' => 
      array (
        0 => 'extension.neon',
        1 => 'rules.neon',
      ),
    ),
    'version' => '1.4.9',
    'phpstanVersionConstraint' => '>=1.12.0.0-dev, <2.0.0.0-dev',
  ),
);

	public const NOT_INSTALLED = array (
);

	/** @var string|null */
	public const PHPSTAN_VERSION_CONSTRAINT = '>=1.12.0.0-dev, <2.0.0.0-dev';

	private function __construct()
	{
	}

}
