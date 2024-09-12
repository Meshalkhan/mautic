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

/* @bundles/FormBundle/Enum/ConditionalFieldEnum.php */
class __TwigTemplate_7c32f3ff7984654c4591d5aa8856bdca extends Template
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

namespace Mautic\\FormBundle\\Enum;

class ConditionalFieldEnum
{
    /**
     * @var string[]
     */
    private static array \$conditionalFieldTypes = ['select', 'country', 'checkboxgrp', 'radiogrp'];

    /**
     * @return string[]
     */
    public static function getConditionalFieldTypes(): array
    {
        return self::\$conditionalFieldTypes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Enum/ConditionalFieldEnum.php";
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
        return new Source("", "@bundles/FormBundle/Enum/ConditionalFieldEnum.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Enum\\ConditionalFieldEnum.php");
    }
}
