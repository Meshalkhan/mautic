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

/* @bundles/LeadBundle/Segment/Query/QueryException.php */
class __TwigTemplate_a71b13c8121c86570437c51d627b0252 extends Template
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

namespace Mautic\\LeadBundle\\Segment\\Query;

/**
 * @since 2.1.4
 */
class QueryException extends \\Doctrine\\DBAL\\Exception
{
    public static function unknownAlias(\$alias, \$registeredAliases): self
    {
        return new self(\"The given alias '\".\$alias.\"' is not part of \".
            'any FROM or JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
    }

    public static function nonUniqueAlias(\$alias, \$registeredAliases): self
    {
        return new self(\"The given alias '\".\$alias.\"' is not unique \".
            'in FROM and JOIN clause table. The currently registered '.
            'aliases are: '.implode(', ', \$registeredAliases).'.');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/Query/QueryException.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/Query/QueryException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\Query\\QueryException.php");
    }
}
