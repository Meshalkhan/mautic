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

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig */
class __TwigTemplate_380f8b2bb060b736205a3a1d066aca46 extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 4, $this->source); })()) . "/../../app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/themes/smoothness/jquery-ui.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 5, $this->source); })()) . "/../../media/bundles/fmelfinder/css/elfinder.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 6, $this->source); })()) . "/../../media/bundles/fmelfinder/css/theme.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
</head>
<body>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 9, $this->source); })()) . "/../../media/js/libraries.js")), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 10, $this->source); })()) . "/../../media/bundles/fmelfinder/js/elfinder.min.js")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">
    var editor = null;

    ";
        // line 15
        echo "    ";
        if (!twig_in_filter((isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 15, $this->source); })()), ["ar", "bg", "ca", "cs", "de", "en", "es", "fr", "hu", "jp", "nl", "pl", "pt_BR", "ru", "sk", "zh_CN"])) {
            // line 16
            echo "    ";
            $context["locale"] = "en";
            // line 17
            echo "    ";
        }
        // line 18
        echo "    jQuery().ready(function() {
        var \$f = jQuery('.elfinder').elfinder({
            url : '";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ef_connect", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 20, $this->source); })()), "homeFolder" => (isset($context["homeFolder"]) || array_key_exists("homeFolder", $context) ? $context["homeFolder"] : (function () { throw new RuntimeError('Variable "homeFolder" does not exist.', 20, $this->source); })())]), "html", null, true);
        echo "',
            lang : '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["locale"]) || array_key_exists("locale", $context) ? $context["locale"] : (function () { throw new RuntimeError('Variable "locale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
            i18nBaseUrl : '";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 22, $this->source); })()) . "/../../media/bundles/fmelfinder/js/i18n/")), "html", null, true);
        echo "',
            onlyMimes: ";
        // line 23
        echo (isset($context["onlyMimes"]) || array_key_exists("onlyMimes", $context) ? $context["onlyMimes"] : (function () { throw new RuntimeError('Variable "onlyMimes" does not exist.', 23, $this->source); })());
        echo ",
            getFileCallback : function(file, fm) {
                let fileUrl = file.url;
                if (file.baseUrl == '' && typeof window.opener.mauticImagesPath !== 'undefined') {
                    fileUrl = window.opener.mauticImagesPath+'/'+file.name;
                }

                const editorParam = new RegExp('(?:[\\?&]|&amp;)editor=([^&]+)', 'i');
                const editorMatch = window.location.search.match(editorParam);
                if (editorMatch && editorMatch.length > 1 && editorMatch[1] == 'ckeditor') {
                    window.opener.document.ckEditorInsertImages(editor, fileUrl);
                } else {
                    window.opener.document.fileManagerInsertImageCallback('textarea.editor', fileUrl);
                }

                window.close();
            }
        });

        ";
        // line 42
        if ((isset($context["fullscreen"]) || array_key_exists("fullscreen", $context) ? $context["fullscreen"] : (function () { throw new RuntimeError('Variable "fullscreen" does not exist.', 42, $this->source); })())) {
            // line 43
            echo "        var \$window = jQuery(window);
        \$window.resize(function(){
            var \$win_height = \$window.height();
            if( \$f.height() != \$win_height ){
                \$f.height(\$win_height).resize();
            }
        });
        \$window.resize();
        ";
        }
        // line 52
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig";
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
        return array (  127 => 52,  116 => 43,  114 => 42,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 18,  73 => 17,  70 => 16,  67 => 15,  60 => 10,  56 => 9,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\filemanager\\index.html.twig");
    }
}
