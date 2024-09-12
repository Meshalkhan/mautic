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

/* @MauticCore/Default/script.html.twig */
class __TwigTemplate_f4727953879a11846e13088f69863298 extends Template
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
        $context["mautic_content"] = ((array_key_exists("mauticContent", $context)) ? ((isset($context["mauticContent"]) || array_key_exists("mauticContent", $context) ? $context["mauticContent"] : (function () { throw new RuntimeError('Variable "mauticContent" does not exist.', 1, $this->source); })())) : (""));
        // line 2
        echo "
";
        // line 3
        $context["editor_fonts"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\ContentExtension']->sortEditorFonts($this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("editor_fonts"));
        // line 4
        echo "
<script>
    var mauticBasePath                  = '";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "getBasePath", [], "method", false, false, false, 6), "html", null, true);
        echo "';
    var mauticBaseUrl                   = \"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_base_index");
        echo "\";
    var mauticAjaxUrl                   = \"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_core_ajax");
        echo "\";
    var mauticAjaxCsrf                  = '";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->getCsrfToken("mautic_ajax_post"), "html", null, true);
        echo "';
    var mauticSessionLifetime           = \"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getFunction('ini_get')->getCallable()("session.gc_maxlifetime"), "html", null, true);
        echo "\";
    var mauticImagesPath                = '";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getImagesPath(), "html", null, true);
        echo "';
    var mauticAssetPrefix               = '";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetPrefix(true), "html", null, true);
        echo "';
    var mauticContent                   = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["mautic_content"]) || array_key_exists("mautic_content", $context) ? $context["mautic_content"] : (function () { throw new RuntimeError('Variable "mautic_content" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "';
    var mauticEnv                       = '";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "environment", [], "any", false, false, false, 14), "html", null, true);
        echo "';
    var mauticLang                      = ";
        // line 15
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\TranslatorExtension']->getJsLang();
        echo ";
    var mauticLocale                    = '";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "getLocale", [], "method", false, false, false, 16), "html", null, true);
        echo "';
    var mauticEditorFonts               = ";
        // line 17
        echo json_encode((isset($context["editor_fonts"]) || array_key_exists("editor_fonts", $context) ? $context["editor_fonts"] : (function () { throw new RuntimeError('Variable "editor_fonts" does not exist.', 17, $this->source); })()));
        echo ";
    var mauticContactExportInBackground = ";
        // line 18
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("contact_export_in_background")), "html", null, true);
        echo ";
    var mauticFroalaEnabled = ";
        // line 19
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->extensions['Mautic\CoreBundle\Twig\Extension\ConfigExtension']->get("load_froala_assets")), "html", null, true);
        echo ";
</script>
";
        // line 21
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->outputSystemScripts(true);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Default/script.html.twig";
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
        return array (  105 => 21,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  48 => 6,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Default/script.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Default\\script.html.twig");
    }
}
