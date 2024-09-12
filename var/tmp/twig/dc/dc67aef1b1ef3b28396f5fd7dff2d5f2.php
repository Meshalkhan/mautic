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

/* @MauticAsset/Asset/preview.html.twig */
class __TwigTemplate_5cc9a00e06210a69b3c612f45e1ddcfa extends Template
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
        echo "<h5 class=\"fw-sb mb-xs\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.asset.preview", [], "messages");
        echo "</h5>
<div class=\"text-center\">
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 3, $this->source); })()), "isImage", [], "method", false, false, false, 3)) {
            // line 4
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, ((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 4, $this->source); })()) . "?stream=1"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 4, $this->source); })()), "getTitle", [], "method", false, false, false, 4));
            echo "\" class=\"img-thumbnail\" />
    ";
        } elseif (("pdf" == twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 5, $this->source); })()), "getFileType", [], "method", false, false, false, 5)))) {
            // line 6
            echo "        <iframe src=\"";
            echo twig_escape_filter($this->env, ((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 6, $this->source); })()) . "?stream=1"), "html", null, true);
            echo "#view=FitH\" class=\"col-sm-12\"></iframe>
    ";
        } elseif (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "getMime", [], "method", false, false, false, 7)) && is_string($__internal_compile_1 = "video") && str_starts_with($__internal_compile_0, $__internal_compile_1)) || twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 7, $this->source); })()), "getExtension", [], "method", false, false, false, 7), ["mpg", "mpeg", "mp4", "webm"]))) {
            // line 8
            echo "        <video src=\"";
            echo twig_escape_filter($this->env, ((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 8, $this->source); })()) . "?stream=1"), "html", null, true);
            echo "\" controls>
            ";
            // line 9
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.no_video_support", [], "messages");
            // line 10
            echo "        </video>
    ";
        } elseif (((is_string($__internal_compile_2 = twig_get_attribute($this->env, $this->source,         // line 11
(isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 11, $this->source); })()), "getMime", [], "method", false, false, false, 11)) && is_string($__internal_compile_3 = "audio") && str_starts_with($__internal_compile_2, $__internal_compile_3)) || twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 11, $this->source); })()), "getExtension", [], "method", false, false, false, 11), ["mp3", "ogg", "wav"]))) {
            // line 12
            echo "        <audio controls>
            <source src=\"";
            // line 13
            echo twig_escape_filter($this->env, ((isset($context["assetDownloadUrl"]) || array_key_exists("assetDownloadUrl", $context) ? $context["assetDownloadUrl"] : (function () { throw new RuntimeError('Variable "assetDownloadUrl" does not exist.', 13, $this->source); })()) . "?stream=1"), "html", null, true);
            echo "\" type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 13, $this->source); })()), "getMime", [], "method", false, false, false, 13), "html", null, true);
            echo "\">
            ";
            // line 14
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.no_audio_support", [], "messages");
            // line 15
            echo "        </audio>
    ";
        } else {
            // line 17
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activeAsset"]) || array_key_exists("activeAsset", $context) ? $context["activeAsset"] : (function () { throw new RuntimeError('Variable "activeAsset" does not exist.', 17, $this->source); })()), "getIconClass", [], "method", false, false, false, 17), "html", null, true);
            echo " fa-5x\"></i>
    ";
        }
        // line 19
        echo "</div>
<div class=\"clearfix\"></div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Asset/preview.html.twig";
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
        return array (  94 => 19,  88 => 17,  84 => 15,  82 => 14,  76 => 13,  73 => 12,  71 => 11,  68 => 10,  66 => 9,  61 => 8,  59 => 7,  54 => 6,  52 => 5,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Asset/preview.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Asset\\preview.html.twig");
    }
}
