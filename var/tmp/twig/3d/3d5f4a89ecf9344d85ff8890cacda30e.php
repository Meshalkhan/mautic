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

/* @MauticAsset/Asset/form.html.twig */
class __TwigTemplate_143534a34242817dbe98732f8e39462f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
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
        // line 2
        $context["header"] = ((twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getId", [], "method", false, false, false, 2)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.edit", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getTitle", [], "method", false, false, false, 2)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.new")));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticAsset/Asset/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, (isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })()), "html", null, true);
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "asset";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<script>
\tmauticAssetUploadEndpoint = \"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["uploadEndpoint"]) || array_key_exists("uploadEndpoint", $context) ? $context["uploadEndpoint"] : (function () { throw new RuntimeError('Variable "uploadEndpoint" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\";
\tmauticAssetUploadMaxSize = ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["maxSize"]) || array_key_exists("maxSize", $context) ? $context["maxSize"] : (function () { throw new RuntimeError('Variable "maxSize" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ";
\tmauticAssetUploadMaxSizeError = \"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["maxSizeError"]) || array_key_exists("maxSizeError", $context) ? $context["maxSizeError"] : (function () { throw new RuntimeError('Variable "maxSizeError" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\";
\tmauticAssetUploadExtensions = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\";
\tmauticAssetUploadExtensionError = \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["extensionError"]) || array_key_exists("extensionError", $context) ? $context["extensionError"] : (function () { throw new RuntimeError('Variable "extensionError" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\";
</script>
";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-r\">
        <div class=\"pa-md\">
\t        <div class=\"row\">
\t\t        <div class=\"col-md-6\">
\t\t\t\t\t<div class=\"col-md-7 pl-0\">
\t\t\t\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "storageLocation", [], "any", false, false, false, 23), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t        <div class=\"col-md-5 text-left mt-lg";
        // line 25
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 25, $this->source); })())) {
            echo "  hide ";
        }
        echo "\" id=\"remote-button\">
\t\t\t\t\t\t";
        // line 26
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "\t\t\t\t\t\t\t<a data-toggle=\"ajaxmodal\" data-target=\"#RemoteFileModal\" data-header=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_remote");
            echo "?tmpl=modal\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
            // line 29
            echo "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t        <div id=\"storage-local\"";
        // line 32
        if ( !(isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 32, $this->source); })())) {
            echo " class=\"hide\"";
        }
        echo ">
\t\t\t\t        <div class=\"row\">
\t\t\t\t\t        <div class=\"form-group col-xs-12 \">
\t\t\t\t\t\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "tempName", [], "any", false, false, false, 35), 'label');
        echo "
\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tempName", [], "any", false, false, false, 36), 'widget');
        echo "
\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tempName", [], "any", false, false, false, 37), 'errors');
        echo "
\t\t\t\t\t\t        <div class=\"help-block mdropzone-error\"></div>
\t\t\t\t\t\t        <div class=\"mdropzone text-center\" id=\"dropzone\">
\t\t\t\t\t\t        \t<div class=\"dz-message\">
\t\t\t\t\t\t        \t\t";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.drop.file.here", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t        </div>
\t\t\t        <div id=\"storage-remote\"";
        // line 47
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 47, $this->source); })())) {
            echo " class=\"hide\"";
        }
        echo ">
\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "remotePath", [], "any", false, false, false, 48), 'row');
        echo "
\t\t\t        </div>
\t\t    \t</div>
\t\t    \t<div class=\"col-md-6\">
\t\t    \t\t<div class=\"row\">
\t\t\t\t    \t<div class=\"form-group col-xs-12 preview\">";
        // line 54
        echo twig_include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" =>         // line 55
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 55, $this->source); })()), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)])]);
        // line 59
        echo "</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "title", [], "any", false, false, false, 65), 'row');
        echo "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "alias", [], "any", false, false, false, 68), 'row');
        echo "
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
\t\t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), 'row');
        echo "
                </div>
            </div>
\t\t</div>
\t</div>
 \t<div class=\"col-md-3 height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "category", [], "any", false, false, false, 80), 'row');
        echo "
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "language", [], "any", false, false, false, 81), 'row');
        echo "
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "isPublished", [], "any", false, false, false, 82), 'row');
        echo "
\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "publishUp", [], "any", false, false, false, 83), 'row');
        echo "
\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "publishDown", [], "any", false, false, false, 84), 'row');
        echo "
\t\t\t";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "disallow", [], "any", false, false, false, 85), 'row');
        echo "
\t\t</div>
\t</div>
</div>
";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        echo "

";
        // line 91
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 91, $this->source); })())) {
            // line 92
            echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemoteFileModal", "size" => "lg", "footerButtons" => true]);
        }
        // line 98
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Asset/form.html.twig";
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
        return array (  253 => 98,  250 => 92,  248 => 91,  243 => 89,  236 => 85,  232 => 84,  228 => 83,  224 => 82,  220 => 81,  216 => 80,  206 => 73,  198 => 68,  192 => 65,  184 => 59,  182 => 57,  181 => 55,  180 => 54,  172 => 48,  166 => 47,  157 => 41,  150 => 37,  146 => 36,  142 => 35,  134 => 32,  131 => 31,  127 => 29,  125 => 28,  118 => 27,  116 => 26,  110 => 25,  105 => 23,  93 => 14,  88 => 12,  84 => 11,  80 => 10,  76 => 9,  72 => 8,  69 => 7,  65 => 6,  58 => 5,  51 => 4,  46 => 1,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Asset/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\form.html.twig");
    }
}
