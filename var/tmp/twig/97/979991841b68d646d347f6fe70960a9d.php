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

/* @MauticSms/Sms/template_graph.html.twig */
class __TwigTemplate_a1b70e75fdc0f844be05831bbc5a74c1 extends Template
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
        echo "<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.sms.stats"), "html", null, true);
        echo "
                        </h5>
                    </div>
                    <div class=\"col-xs-6 va-m\" id=\"legend\"></div>
                    <div class=\"col-xs-2 va-m\">";
        // line 14
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.htm.twig", ["mescallbacksage" => "updateSmsStatsChart"]);
        // line 15
        echo "</div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"stat-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"stat-chart-data\" class=\"hide\">";
        // line 22
        echo json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 22, $this->source); })()));
        echo "</div>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSms/Sms/template_graph.html.twig";
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
        return array (  65 => 22,  56 => 15,  54 => 14,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSms/Sms/template_graph.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Resources\\views\\Sms\\template_graph.html.twig");
    }
}
