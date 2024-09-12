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

/* @MauticNotification/MobileNotification/list_graph.html.twig */
class __TwigTemplate_6fd9bfb6c85d90aa7ab29c71e5629ec7 extends Template
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
            ";
        // line 8
        if ((isset($context["showVariants"]) || array_key_exists("showVariants", $context) ? $context["showVariants"] : (function () { throw new RuntimeError('Variable "showVariants" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "            <div class=\"text-right small\">
                <span>
                    ";
            // line 11
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 11, $this->source); })())) {
                // line 12
                echo "                      <span data-chart=\"variant\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.variant"), "html", null, true);
                echo "</span>
                    ";
            } else {
                // line 14
                echo "                      <a data-chart=\"variant\" href=\"javascript:void(0)\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.variant"), "html", null, true);
                echo "</a>
                    ";
            }
            // line 16
            echo "                </span>
                </span> | </span>
                <span>
                    ";
            // line 19
            if ((isset($context["isVariant"]) || array_key_exists("isVariant", $context) ? $context["isVariant"] : (function () { throw new RuntimeError('Variable "isVariant" does not exist.', 19, $this->source); })())) {
                // line 20
                echo "                      <a data-chart=\"all\" href=\"javascript:void(0)\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.all"), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 22
                echo "                      <span data-chart=\"all\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.variant.graph.all"), "html", null, true);
                echo "</span>
                    ";
            }
            // line 24
            echo "                </span>
            </div>
            ";
        }
        // line 27
        echo "            <div class=\"panel\">
                <div class=\"panel-body box-layout\">
                    <div class=\"col-xs-4 va-m\">
                        <h5 class=\"text-white dark-md fw-sb mb-xs\">
                            <span class=\"ri-mail-line\"></span>
                            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.notification.lead.list.comparison"), "html", null, true);
        echo "
                        </h5>
                    </div>
                    <div class=\"col-xs-8 va-m\" id=\"legend\"></div>
                </div>
                <div class=\"pt-0 pl-15 pb-10 pr-15\">
                    <div>
                        <canvas id=\"list-compare-chart\" height=\"300\"></canvas>
                    </div>
                </div>
                <div id=\"list-compare-chart-data\" class=\"hide\">";
        // line 42
        echo json_encode((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 42, $this->source); })()));
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
        return "@MauticNotification/MobileNotification/list_graph.html.twig";
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
        return array (  106 => 42,  93 => 32,  86 => 27,  81 => 24,  75 => 22,  69 => 20,  67 => 19,  62 => 16,  56 => 14,  50 => 12,  48 => 11,  44 => 9,  42 => 8,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticNotification/MobileNotification/list_graph.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Resources\\views\\MobileNotification\\list_graph.html.twig");
    }
}
