<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticAsset/Asset/form.html.twig */
class __TwigTemplate_17f3d1483c5e249ea6823d25c665f056 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

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

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 2
        $context["header"] = ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getId", [], "method", false, false, false, 2)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.edit", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 2, $this->source); })()), "getTitle", [], "method", false, false, false, 2)])) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.menu.new")));
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticAsset/Asset/form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["header"]) || array_key_exists("header", $context) ? $context["header"] : (function () { throw new RuntimeError('Variable "header" does not exist.', 4, $this->source); })()), "html", null, true);
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "asset";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "<script>
\tmauticAssetUploadEndpoint = \"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["uploadEndpoint"]) || array_key_exists("uploadEndpoint", $context) ? $context["uploadEndpoint"] : (function () { throw new RuntimeError('Variable "uploadEndpoint" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadMaxSize = ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxSize"]) || array_key_exists("maxSize", $context) ? $context["maxSize"] : (function () { throw new RuntimeError('Variable "maxSize" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ";
\tmauticAssetUploadMaxSizeError = \"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxSizeError"]) || array_key_exists("maxSizeError", $context) ? $context["maxSizeError"] : (function () { throw new RuntimeError('Variable "maxSizeError" does not exist.', 10, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadExtensions = \"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extensions"]) || array_key_exists("extensions", $context) ? $context["extensions"] : (function () { throw new RuntimeError('Variable "extensions" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\";
\tmauticAssetUploadExtensionError = \"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["extensionError"]) || array_key_exists("extensionError", $context) ? $context["extensionError"] : (function () { throw new RuntimeError('Variable "extensionError" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\";
</script>
";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        yield "
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "storageLocation", [], "any", false, false, false, 23), 'row');
        yield "
\t\t\t\t\t</div>
\t\t\t        <div class=\"col-md-5 text-left mt-lg";
        // line 25
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 25, $this->source); })())) {
            yield "  hide ";
        }
        yield "\" id=\"remote-button\">
\t\t\t\t\t\t";
        // line 26
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 26, $this->source); })())) {
            // line 27
            yield "\t\t\t\t\t\t\t<a data-toggle=\"ajaxmodal\" data-target=\"#RemoteFileModal\" data-header=\"";
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
            yield "\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_asset_remote");
            yield "?tmpl=modal\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t";
            // line 28
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
            // line 29
            yield "\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 31
        yield "\t\t\t\t\t</div>
\t\t\t        <div id=\"storage-local\"";
        // line 32
        if ( !(isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 32, $this->source); })())) {
            yield " class=\"hide\"";
        }
        yield ">
\t\t\t\t        <div class=\"row\">
\t\t\t\t\t        <div class=\"form-group col-xs-12 \">
\t\t\t\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "tempName", [], "any", false, false, false, 35), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tempName", [], "any", false, false, false, 36), 'widget');
        yield "
\t\t\t\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tempName", [], "any", false, false, false, 37), 'errors');
        yield "
\t\t\t\t\t\t        <div class=\"help-block mdropzone-error\"></div>
\t\t\t\t\t\t        <div class=\"mdropzone text-center\" id=\"dropzone\">
\t\t\t\t\t\t        \t<div class=\"dz-message\">
\t\t\t\t\t\t        \t\t";
        // line 41
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.drop.file.here", [], "messages");
        yield "</h4>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t        </div>
\t\t\t\t\t        </div>
\t\t\t\t        </div>
\t\t\t        </div>
\t\t\t        <div id=\"storage-remote\"";
        // line 47
        if ((isset($context["startOnLocal"]) || array_key_exists("startOnLocal", $context) ? $context["startOnLocal"] : (function () { throw new RuntimeError('Variable "startOnLocal" does not exist.', 47, $this->source); })())) {
            yield " class=\"hide\"";
        }
        yield ">
\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "remotePath", [], "any", false, false, false, 48), 'row');
        yield "
\t\t\t        </div>
\t\t    \t</div>
\t\t    \t<div class=\"col-md-6\">
\t\t    \t\t<div class=\"row\">
\t\t\t\t    \t<div class=\"form-group col-xs-12 preview\">";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticAsset/Asset/preview.html.twig", ["activeAsset" =>         // line 55
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 55, $this->source); })()), "assetDownloadUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_asset_action", ["objectAction" => "preview", "objectId" => CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 57, $this->source); })()), "getId", [], "method", false, false, false, 57)])]);
        // line 59
        yield "</div>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </div>
\t\t    <div class=\"row\">
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "title", [], "any", false, false, false, 65), 'row');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "alias", [], "any", false, false, false, 68), 'row');
        yield "
\t\t\t\t</div>
\t\t\t</div>
            <div class=\"row\">
                <div class=\"col-xs-12\">
\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "description", [], "any", false, false, false, 73), 'row');
        yield "
                </div>
            </div>
\t\t</div>
\t</div>
 \t<div class=\"col-md-3 height-auto\">
\t\t<div class=\"pr-lg pl-lg pt-md pb-md\">
\t\t\t";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "category", [], "any", false, false, false, 80), 'row');
        yield "
\t\t\t";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "language", [], "any", false, false, false, 81), 'row');
        yield "
\t\t\t";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "isPublished", [], "any", false, false, false, 82), 'row');
        yield "
\t\t\t";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "publishUp", [], "any", false, false, false, 83), 'row');
        yield "
\t\t\t";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "publishDown", [], "any", false, false, false, 84), 'row');
        yield "
\t\t\t";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "disallow", [], "any", false, false, false, 85), 'row');
        yield "
\t\t</div>
\t</div>
</div>
";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        yield "

";
        // line 91
        if ((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 91, $this->source); })())) {
            // line 92
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "RemoteFileModal", "size" => "lg", "footerButtons" => true]);
        }
        // line 98
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticAsset/Asset/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  269 => 98,  266 => 92,  264 => 91,  259 => 89,  252 => 85,  248 => 84,  244 => 83,  240 => 82,  236 => 81,  232 => 80,  222 => 73,  214 => 68,  208 => 65,  200 => 59,  198 => 57,  197 => 55,  196 => 54,  188 => 48,  182 => 47,  173 => 41,  166 => 37,  162 => 36,  158 => 35,  150 => 32,  147 => 31,  143 => 29,  141 => 28,  134 => 27,  132 => 26,  126 => 25,  121 => 23,  109 => 14,  104 => 12,  100 => 11,  96 => 10,  92 => 9,  88 => 8,  85 => 7,  78 => 6,  67 => 5,  56 => 4,  51 => 1,  49 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticAsset/Asset/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\form.html.twig");
    }
}
