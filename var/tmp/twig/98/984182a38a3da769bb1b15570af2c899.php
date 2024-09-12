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

/* @MauticWebhook/FormTheme/Config/_config_webhookconfig_widget.html.twig */
class __TwigTemplate_3e2780990284d091ae3283f69d2d3f10 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_webhookconfig_widget' => [$this, 'block__config_webhookconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_webhookconfig_widget', $context, $blocks);
    }

    public function block__config_webhookconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.webhookconfig"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "children", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 8
            echo "            <div class=\"row\">
                <div class=\"col-md-6\">
                    ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
            echo "
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticWebhook/FormTheme/Config/_config_webhookconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  73 => 14,  63 => 10,  59 => 8,  55 => 7,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticWebhook/FormTheme/Config/_config_webhookconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\WebhookBundle\\Resources\\views\\FormTheme\\Config\\_config_webhookconfig_widget.html.twig");
    }
}
