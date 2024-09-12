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

/* @themes/sunday/composer.json */
class __TwigTemplate_bec9afa8c1cf8fec36e6bf6631ba4750 extends Template
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
  \"name\": \"mautic/theme-sunday\",
  \"description\": \"Mautic Sunday Theme\",
  \"type\": \"mautic-theme\",
  \"keywords\": [\"mautic\",\"theme\"],
  \"extra\": {
    \"install-directory-name\": \"sunday\"
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
        return "@themes/sunday/composer.json";
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
        return new Source("", "@themes/sunday/composer.json", "C:\\xampp\\htdocs\\mautic\\themes\\sunday\\composer.json");
    }
}
