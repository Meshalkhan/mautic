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

/* @MauticCore/Helper/form_selecttype.html.twig */
class __TwigTemplate_5200712bbe66e379b99af0032d5fbc4d extends Template
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
        echo "<script>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mauticLang"]) || array_key_exists("mauticLang", $context) ? $context["mauticLang"] : (function () { throw new RuntimeError('Variable "mauticLang" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["string"]) {
            // line 3
            echo "    mauticLang.";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " = \"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["string"]), "html", null, true);
            echo "\";
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['string'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</script>
<div class=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "-type-modal-backdrop\" style=\"width: 100%; height: 100%; position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: #000000; opacity: 0.9; z-index: 9000\"></div>

<div class=\"modal fade in ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "-type-modal\" style=\"display: block; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a href=\"javascript: void(0);\" onclick=\"Mautic.closeModalAndRedirect('.";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["typePrefix"]) || array_key_exists("typePrefix", $context) ? $context["typePrefix"] : (function () { throw new RuntimeError('Variable "typePrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "-type-modal', '";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["cancelUrl"]) || array_key_exists("cancelUrl", $context) ? $context["cancelUrl"] : (function () { throw new RuntimeError('Variable "cancelUrl" does not exist.', 12, $this->source); })()));
        echo "');\" class=\"close\">
                    <span aria-hidden=\"true\">&times;</span>
                </a>
                <h4 class=\"modal-title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "</h4>
                <div class=\"modal-loading-bar\"></div>
            </div>
            <div class=\"modal-body form-select-modal\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-success\">
                            <div class=\"panel-heading\">
                                <div class=\"col-xs-8 col-sm-10 np\">
                                    <h3 class=\"panel-title\">";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneHeader"]) || array_key_exists("typeOneHeader", $context) ? $context["typeOneHeader"] : (function () { throw new RuntimeError('Variable "typeOneHeader" does not exist.', 24, $this->source); })())), "html", null, true);
        echo "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                                    <i class=\"hidden-xs fa ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["typeOneIconClass"]) || array_key_exists("typeOneIconClass", $context) ? $context["typeOneIconClass"] : (function () { throw new RuntimeError('Variable "typeOneIconClass" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " fa-lg\"></i>
                                    <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-primary\" onclick=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\">
                                        ";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 34
        if ((array_key_exists("typeOneDescription", $context) &&  !twig_test_empty((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 34, $this->source); })())))) {
            // line 35
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeOneDescription"]) || array_key_exists("typeOneDescription", $context) ? $context["typeOneDescription"] : (function () { throw new RuntimeError('Variable "typeOneDescription" does not exist.', 35, $this->source); })())), "html", null, true);
            echo "
                                ";
        }
        // line 37
        echo "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeOneDifferences"]) || array_key_exists("typeOneDifferences", $context) ? $context["typeOneDifferences"] : (function () { throw new RuntimeError('Variable "typeOneDifferences" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 39
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['difference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                <button class=\"btn btn-lg btn-default btn-nospin text-success\" onclick=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["typeOneOnClick"]) || array_key_exists("typeOneOnClick", $context) ? $context["typeOneOnClick"] : (function () { throw new RuntimeError('Variable "typeOneOnClick" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "\">
                                    ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"panel panel-primary\">
                            <div class=\"panel-heading\">
                                <div class=\"col-xs-8 col-sm-10 np\">
                                    <h3 class=\"panel-title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoHeader"]) || array_key_exists("typeTwoHeader", $context) ? $context["typeTwoHeader"] : (function () { throw new RuntimeError('Variable "typeTwoHeader" does not exist.', 54, $this->source); })())), "html", null, true);
        echo "</h3>
                                </div>
                                <div class=\"col-xs-4 col-sm-2 pl-0 pr-0 pt-10 pb-10 text-right\">
                                    <i class=\"hidden-xs fa ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["typeTwoIconClass"]) || array_key_exists("typeTwoIconClass", $context) ? $context["typeTwoIconClass"] : (function () { throw new RuntimeError('Variable "typeTwoIconClass" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " fa-lg\"></i>
                                    <button class=\"visible-xs pull-right btn btn-sm btn-default btn-nospin text-primary\" onclick=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\">
                                        ";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                            <div class=\"panel-body\">
                                ";
        // line 64
        if ((array_key_exists("typeTwoDescription", $context) &&  !twig_test_empty((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 64, $this->source); })())))) {
            // line 65
            echo "                                    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["typeTwoDescription"]) || array_key_exists("typeTwoDescription", $context) ? $context["typeTwoDescription"] : (function () { throw new RuntimeError('Variable "typeTwoDescription" does not exist.', 65, $this->source); })())), "html", null, true);
            echo "
                                ";
        }
        // line 67
        echo "                                <ul class=\"ds-list-group ds-list-check\">
                                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typeTwoDifferences"]) || array_key_exists("typeTwoDifferences", $context) ? $context["typeTwoDifferences"] : (function () { throw new RuntimeError('Variable "typeTwoDifferences" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["difference"]) {
            // line 69
            echo "                                        <li>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["difference"]), "html", null, true);
            echo "</li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['difference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "                                </ul>
                            </div>
                            <div class=\"hidden-xs panel-footer text-center\">
                                <button class=\"btn btn-lg btn-default btn-nospin text-primary\" onclick=\"";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["typeTwoOnClick"]) || array_key_exists("typeTwoOnClick", $context) ? $context["typeTwoOnClick"] : (function () { throw new RuntimeError('Variable "typeTwoOnClick" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "\">
                                    ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.select"), "html", null, true);
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
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
        return "@MauticCore/Helper/form_selecttype.html.twig";
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
        return array (  212 => 75,  208 => 74,  203 => 71,  194 => 69,  190 => 68,  187 => 67,  181 => 65,  179 => 64,  171 => 59,  167 => 58,  163 => 57,  157 => 54,  145 => 45,  141 => 44,  136 => 41,  127 => 39,  123 => 38,  120 => 37,  114 => 35,  112 => 34,  104 => 29,  100 => 28,  96 => 27,  90 => 24,  78 => 15,  70 => 12,  63 => 8,  58 => 6,  55 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/form_selecttype.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\form_selecttype.html.twig");
    }
}
