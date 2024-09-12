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

/* @MauticCore/Helper/noresults.html.twig */
class __TwigTemplate_7606db819f306dc729dd87283626075f extends Template
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
        $context["header"] = ((array_key_exists("header", $context)) ? ((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 1, $this->source); })())) : ("mautic.core.noresults.header"));
        // line 2
        $context["message"] = ((array_key_exists("message", $context)) ? ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 2, $this->source); })())) : ("mautic.core.noresults"));
        // line 3
        echo "<div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\" style=\"white-space: normal;\">
    <h4>";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })())), "html", null, true);
        echo "</h4>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 5, $this->source); })())), "html", null, true);
        echo "</p>
</div>

";
        // line 8
        if (array_key_exists("tip", $context)) {
            // line 9
            echo "    <div class=\"well well col-md-6 col-md-offset-3\">
        <div class=\"row\">
            <div class=\"mautibot-image col-xs-3 text-center\">
                <img class=\"img-responsive\" style=\"max-height: 125px; margin-left: auto; margin-right: auto;\" src=\"";
            // line 12
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
            echo "\" />
            </div>
            <div class=\"col-xs-9\">
                <h4><i class=\"fa fa-quote-left\"></i> ";
            // line 15
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.noresults.tip", [], "messages");
            echo " <i class=\"fa fa-quote-right\"></i></h4>
                <p class=\"mt-md\">";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["tip"]) || array_key_exists("tip", $context) ? $context["tip"] : (function () { throw new RuntimeError('Variable "tip" does not exist.', 16, $this->source); })())), "html", null, true);
            echo "</p>
            </div>
        </div>
    </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/noresults.html.twig";
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
        return array (  71 => 16,  67 => 15,  61 => 12,  56 => 9,  54 => 8,  48 => 5,  44 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/noresults.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\noresults.html.twig");
    }
}
