<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Doctrine/Type/GeneratedType.php */
class __TwigTemplate_c185d323076dd2b2205ba0de9c3f99d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

declare(strict_types=1);

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\Type;

/**
 * Type that creates a read-only generated (virtual) column.
 */
class GeneratedType extends Type
{
    /**
     * @var string
     */
    public const GENERATED = 'generated';

    public function getSQLDeclaration(array \$fieldDeclaration, AbstractPlatform \$platform): string
    {
        // Must be defined in `columnDefinition` option when adding the column in the subscriber
        return '';
    }

    /**
     * @param mixed \$value
     *
     * @return mixed
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        return \$value;
    }

    /**
     * @param mixed \$value
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::GENERATED;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Type/GeneratedType.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/GeneratedType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Type\\GeneratedType.php");
    }
}
