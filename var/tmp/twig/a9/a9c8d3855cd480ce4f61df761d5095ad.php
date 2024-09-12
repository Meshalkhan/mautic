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

/* @themes/fresh-fixed/js/extras.js */
class __TwigTemplate_e32091f1d1cfecefe31cf581e6fbbb51 extends Template
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
        echo "/*-- Adding Fixed Header --*/

function resizeHeaderOnScroll() {
  const distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 1,
  headerEl = document.getElementById('top');
  
  if (distanceY > shrinkOn) {
    headerEl.classList.add(\"scroll\");
  } else {
    headerEl.classList.remove(\"scroll\");
  }
}

window.addEventListener('scroll', resizeHeaderOnScroll);
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-fixed/js/extras.js";
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
        return new Source("", "@themes/fresh-fixed/js/extras.js", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-fixed\\js\\extras.js");
    }
}
