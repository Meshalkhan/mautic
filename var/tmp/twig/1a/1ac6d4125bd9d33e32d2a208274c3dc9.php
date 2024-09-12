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

/* @bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php */
class __TwigTemplate_182b76cc799c289ece3da745b1d9ebee extends Template
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
use Doctrine\\DBAL\\Types\\DateTimeImmutableType;

class UTCDateTimeImmutableType extends DateTimeImmutableType
{
    /**
     * Persist the date in UTC.
     */
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform): ?string
    {
        if (\$value instanceof \\DateTimeImmutable) {
            \$value = \$value->setTimezone(new \\DateTimeZone('UTC'));
        }

        return parent::convertToDatabaseValue(\$value, \$platform);
    }

    /**
     * Convert the UTC persisted date to the current timezone (determined by date_default_timezone_get()).
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform): ?\\DateTimeImmutable
    {
        \$value = parent::convertToPHPValue(\$value, \$platform);

        if (!\$value instanceof \\DateTimeImmutable) {
            return null;
        }

        \$value = new \\DateTimeImmutable(\$value->format(\$platform->getDateTimeFormatString()), new \\DateTimeZone('UTC'));

        return \$value->setTimezone(new \\DateTimeZone(date_default_timezone_get()));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/UTCDateTimeImmutableType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Type\\UTCDateTimeImmutableType.php");
    }
}
