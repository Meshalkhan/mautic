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

/* @MauticCore/Default/base.html.twig */
class __TwigTemplate_742497abfd924b466c031964ffea3d20 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_content' => [$this, 'block__content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    ";
        // line 3
        echo twig_include($this->env, $context, "@MauticCore/Default/head.html.twig", ["headerTitle" => ((        $this->hasBlock("headerTitle", $context, $blocks)) ? (        $this->renderBlock("headerTitle", $context, $blocks)) : (((        // line 4
array_key_exists("headerTitle", $context)) ? (_twig_default_filter((isset($context["headerTitle"]) || array_key_exists("headerTitle", $context) ? $context["headerTitle"] : (function () { throw new RuntimeError('Variable "headerTitle" does not exist.', 4, $this->source); })()), "")) : ("")))), "pageTitle" => ((        $this->hasBlock("pageTitle", $context, $blocks)) ? (        $this->renderBlock("pageTitle", $context, $blocks)) : ("Mautic"))]);
        // line 7
        echo "
    <body class=\"header-fixed\">
        <section id=\"app-wrapper\">
            ";
        // line 10
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyOpen");
        echo "

            ";
        // line 12
        echo twig_include($this->env, $context, "@MauticCore/Notification/flashes.html.twig");
        echo "

            <aside class=\"app-sidebar sidebar-left\">
                ";
        // line 15
        echo twig_include($this->env, $context, "@MauticCore/LeftPanel/index.html.twig");
        echo "
            </aside>

            <aside class=\"app-sidebar sidebar-right\">
                ";
        // line 19
        echo twig_include($this->env, $context, "@MauticCore/RightPanel/index.html.twig");
        echo "
            </aside>

            <header id=\"app-header\" class=\"navbar\">
                ";
        // line 23
        echo twig_include($this->env, $context, "@MauticCore/Default/navbar.html.twig");
        echo "
            </header>

            <!-- start: app-footer(need to put on top of #app-content)-->
            <footer id=\"app-footer\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-xs-6 text-muted\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.copyright", ["%date%" => twig_date_format_filter($this->env, "now", "Y")], "messages");
        echo "</div>
                        <div class=\"col-xs-6 text-muted text-right small\">v";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\VersionExtension']->getVersion(), "html", null, true);
        echo "</div>
                    </div>
                </div>
            </footer>
            <!--/ end: app-footer -->

            <section id=\"app-content\">
                ";
        // line 38
        $this->displayBlock('_content', $context, $blocks);
        // line 41
        echo "            </section>

            <script>
                Mautic.onPageLoad('body');
                ";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "environment", [], "any", false, false, false, 45) === "dev")) {
            // line 46
            echo "                mQuery( document ).ajaxComplete(function(event, XMLHttpRequest, ajaxOption){
                    if(XMLHttpRequest.responseJSON && typeof XMLHttpRequest.responseJSON.ignore_wdt == 'undefined' && XMLHttpRequest.getResponseHeader('x-debug-token')) {
                        if (mQuery('[class*=\"sf-tool\"]').length) {
                            mQuery('[class*=\"sf-tool\"]').remove();
                        }

                        mQuery.get(mauticBaseUrl + '_wdt/'+XMLHttpRequest.getResponseHeader('x-debug-token'),function(data){
                            mQuery('body').append('<div class=\"sf-toolbar-reload\">'+data+'</div>');
                        });
                    }
                });
                ";
        }
        // line 58
        echo "            </script>
            ";
        // line 59
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputScripts("bodyClose");
        echo "
            ";
        // line 60
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "MauticSharedModal", "footerButtons" => true]);
        // line 63
        echo "
        </section>
    </body>
</html>
";
    }

    // line 38
    public function block__content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo "                    ";
        echo twig_include($this->env, $context, "@MauticCore/Default/output.html.twig");
        echo "
                ";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/base.html.twig";
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
        return array (  144 => 39,  140 => 38,  132 => 63,  130 => 60,  126 => 59,  123 => 58,  109 => 46,  107 => 45,  101 => 41,  99 => 38,  89 => 31,  85 => 30,  75 => 23,  68 => 19,  61 => 15,  55 => 12,  50 => 10,  45 => 7,  43 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/base.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\base.html.twig");
    }
}
