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

/* @themes/brienz/composer.json */
class __TwigTemplate_add506a8b657c5106e18f70562dd3d96 extends Template
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
  \"name\": \"mautic/theme-brienz\",
  \"description\": \"Mautic Brienz Theme\",
  \"type\": \"mautic-theme\",
  \"keywords\": [\"mautic\",\"theme\"],
  \"extra\": {
    \"install-directory-name\": \"brienz\"
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
        return "@themes/brienz/composer.json";
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
        return new Source("", "@themes/brienz/composer.json", "C:\\xampp\\htdocs\\mautic\\themes\\brienz\\composer.json");
    }
}
