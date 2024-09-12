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

/* @MauticOutlook/Integration/form.html.twig */
class __TwigTemplate_10839a64808ab8689e6734365a01db29 extends Template
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
        echo "<div class=\"well well-sm\" style=\"margin-bottom:0 !important;\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.outlook.url"), "html", null, true);
        echo "</p>
    <div class=\"alert alert-warning\">
        ";
        // line 4
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.outlook.public_info"));
        echo "
    </div>
    <input type=\"text\" readonly=\"readonly\" onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["mauticUrl"]) || array_key_exists("mauticUrl", $context) ? $context["mauticUrl"] : (function () { throw new RuntimeError('Variable "mauticUrl" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticOutlook/Integration/form.html.twig";
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
        return array (  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticOutlook/Integration/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticOutlookBundle\\Resources\\views\\Integration\\form.html.twig");
    }
}
