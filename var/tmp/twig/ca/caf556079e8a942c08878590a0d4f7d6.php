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

/* @MauticNotification/MobileNotification/template_graph.html.twig */
class __TwigTemplate_cef1b74921c2e5a45d432dd8937f69a4 extends Template
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
        // line 5
        echo "<div class=\"pa-md\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.stats"), "html", null, true);
        echo "
                        </h5>
                    </div>
                    <div class=\"col-xs-6 va-m\" id=\"legend\"></div>
                    <div class=\"col-xs-2 va-m\">
                        ";
        // line 18
        echo twig_include($this->env, $context, "@MauticCore/Helper/graph_dateselect.html.twig", ["callback" => "updateNotificationStatsChart"]);
        echo "
                    </div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"stat-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"stat-chart-data\" class=\"hide\">";
        // line 26
        echo json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 26, $this->source); })()));
        echo "</div>
            </div>
        </div>
    </div>
</div>
<!--/ some stats -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticNotification/MobileNotification/template_graph.html.twig";
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
        return array (  66 => 26,  55 => 18,  47 => 13,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/MobileNotification/template_graph.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\MobileNotification\\template_graph.html.twig");
    }
}
