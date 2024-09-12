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

/* @MauticTagManager/Tag/details.html.twig */
class __TwigTemplate_04bd1719752c22ec13be06b3a858f041 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        $context["customButtons"] = [];
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticTagManager/Tag/details.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "tagmanager";
    }

    // line 4
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 4, $this->source); })()), "getTag", [], "method", false, false, false, 4), "html", null, true);
        echo " ";
    }

    // line 8
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 10
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 10, $this->source); })()), "nameGetter" => "getTag", "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,         // line 13
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 13, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 13), "delete" => twig_get_attribute($this->env, $this->source,         // line 14
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 14, $this->source); })()), "isGranted", ["tagManager:tagManager:delete"], "method", false, false, false, 14), "close" => twig_get_attribute($this->env, $this->source,         // line 15
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 15, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 15)], "routeBase" => "tagmanager"]);
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-12 height-auto\">
            <div>
                <!-- page detail header -->
                <!-- sms detail collapseable toggler -->
                <div class=\"pr-md pl-md pt-lg pb-lg\">
                    <div class=\"box-layout\">

                        <div class=\"col-xs-10\">
                            <div class=\"text-white dark-sm mb-0\">";
        // line 33
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 33, $this->source); })()), "getDescription", [], "method", false, false, false, 33));
        echo "</div>

                        </div>

                    </div>
                </div>
                <div class=\"collapse\" id=\"sms-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>
                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
        echo "</span></td>
                                    <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 46, $this->source); })()), "getId", [], "method", false, false, false, 46), "html", null, true);
        echo "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ sms detail collapseable toggler -->
            <div>
                <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#sms-details\">
                        <span class=\"caret\"></span>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        // line 61
        echo "                    </a>
                </span>
                </div>
            </div>
        </div>

        <!--/ right section -->
        <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 68, $this->source); })()), "getId", [], "method", false, false, false, 68));
        echo "\" />
    </div>
    <!--/ end: box layout -->

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticTagManager/Tag/details.html.twig";
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
        return array (  144 => 68,  135 => 61,  133 => 60,  116 => 46,  112 => 45,  97 => 33,  84 => 22,  80 => 21,  76 => 15,  75 => 14,  74 => 13,  73 => 10,  72 => 9,  68 => 8,  59 => 4,  52 => 3,  47 => 1,  45 => 6,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticTagManager/Tag/details.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticTagManagerBundle\\Resources\\views\\Tag\\details.html.twig");
    }
}
