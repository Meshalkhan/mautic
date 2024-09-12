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

/* @MauticClearbit/Integration/form.html.twig */
class __TwigTemplate_fe1f345b33672a68f0e5c5135f97887e extends Template
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
    <p>
        ";
        // line 3
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.clearbit.webhook_info"));
        echo "
    </p>
    <div class=\"alert alert-warning\">
        ";
        // line 6
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.clearbit.public_info"));
        echo "
    </div>
    <input type=\"text\" readonly=\"\" onclick=\"this.setSelectionRange(0, this.value.length);\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["mauticUrl"]) || array_key_exists("mauticUrl", $context) ? $context["mauticUrl"] : (function () { throw new RuntimeError('Variable "mauticUrl" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticClearbit/Integration/form.html.twig";
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
        return array (  52 => 8,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticClearbit/Integration/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticClearbitBundle\\Resources\\views\\Integration\\form.html.twig");
    }
}
