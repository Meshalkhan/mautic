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

/* @MauticForm/messenger.html.twig */
class __TwigTemplate_33772cf7130681fc683e71e74a88bcf3 extends Template
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
        <script type=\"text/javascript\">
            parent.postMessage(\"";
        // line 4
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["response"]) || array_key_exists("response", $context) ? $context["response"] : (function () { throw new RuntimeError('Variable "response" does not exist.', 4, $this->source); })()), "js"), "html", null, true);
        echo "\", '*');
        </script>
        ";
        // line 6
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AnalyticsExtension']->getCode();
        echo "
    </head>
    <body></body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/messenger.html.twig";
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
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/messenger.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\messenger.html.twig");
    }
}
