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

/* @MauticForm/form.html.twig */
class __TwigTemplate_387123ebc2492b71d2a8c199ec1cabbe extends Template
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
        echo "<html>
    <head>
        <title>";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</title>
        ";
        // line 4
        echo (isset($context["metaRobots"]) || array_key_exists("metaRobots", $context) ? $context["metaRobots"] : (function () { throw new RuntimeError('Variable "metaRobots" does not exist.', 4, $this->source); })());
        echo "
        ";
        // line 5
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AnalyticsExtension']->getCode();
        echo "
        ";
        // line 6
        if ((array_key_exists("stylesheets", $context) && is_iterable((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 6, $this->source); })())))) {
            // line 7
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) || array_key_exists("stylesheets", $context) ? $context["stylesheets"] : (function () { throw new RuntimeError('Variable "stylesheets" does not exist.', 7, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
                // line 8
                echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
                echo twig_escape_filter($this->env, $context["css"], "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        ";
        }
        // line 11
        echo "    </head>
    <body>
        ";
        // line 13
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 13, $this->source); })());
        echo "
    </body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  76 => 13,  72 => 11,  69 => 10,  60 => 8,  55 => 7,  53 => 6,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\form.html.twig");
    }
}
