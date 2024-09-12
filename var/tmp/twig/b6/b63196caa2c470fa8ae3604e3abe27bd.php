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

/* @themes/aurora/composer.json */
class __TwigTemplate_13cfab6f6670114eba2aa86b449ec533 extends Template
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
        echo "{
  \"name\": \"mautic/theme-aurora\",
  \"description\": \"Mautic Aurora Theme\",
  \"type\": \"mautic-theme\",
  \"keywords\": [\"mautic\",\"theme\"],
  \"extra\": {
    \"install-directory-name\": \"aurora\"
  },
  \"minimum-stability\": \"dev\",
  \"require\": {
    \"mautic/core-lib\": \"^5.0\"
  }
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/aurora/composer.json";
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
        return new Source("", "@themes/aurora/composer.json", "C:\\xampp\\htdocs\\mautic\\themes\\aurora\\composer.json");
    }
}
