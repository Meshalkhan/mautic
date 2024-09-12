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

/* @MauticForm/Builder/_script.html.twig */
class __TwigTemplate_ab115c3aba746c8c3d82ed5731a50ab6 extends Template
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
        $context["src"] = ((("dev" == twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "environment", [], "any", false, false, false, 1))) ? ("app/assets/js/mautic-form-src.js") : ("media/js/mautic-form.js"));
        // line 2
        $context["scriptSrc"] = twig_replace_filter($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["src"]) || array_key_exists("src", $context) ? $context["src"] : (function () { throw new RuntimeError('Variable "src" does not exist.', 2, $this->source); })()), null, null, true), ["/index.php" => ""]);
        // line 5
        echo "
<script type=\"text/javascript\">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["scriptSrc"]) || array_key_exists("scriptSrc", $context) ? $context["scriptSrc"] : (function () { throw new RuntimeError('Variable "scriptSrc" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = '";
        // line 18
        echo twig_escape_filter($this->env, twig_replace_filter($this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getBaseUrl(), ["/index.php" => ""]), "html", null, true);
        echo "';
        var MauticLang   = {
            'submittingMessage': \"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.form.submission.pleasewait", [], "messages", twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "getLanguage", [], "method", false, false, false, 20)), "html", null, true);
        echo "\"
        }
    }else if (typeof MauticSDK != 'undefined') {
        MauticSDK.onLoad();
    }
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticForm/Builder/_script.html.twig";
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
        return array (  64 => 20,  59 => 18,  51 => 13,  41 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticForm/Builder/_script.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Resources\\views\\Builder\\_script.html.twig");
    }
}
