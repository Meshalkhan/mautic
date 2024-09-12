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

/* @MauticPlugin/Auth/postauth.html.twig */
class __TwigTemplate_f90af70eaa6006ab0342a2da85cfcf4b extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["contentOnly"] = true;
        // line 2
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticPlugin/Auth/postauth.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "social";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["data"] = json_encode((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 8, $this->source); })()));
        // line 9
        echo "<script>
function postFormHandler() {
    var opener = window.opener;
    if (opener && typeof opener.postAuthCallback == 'function') {
        opener.postAuthCallback({\$data});
    } else {
        Mautic.refreshIntegrationForm();
    }
    window.close()
}
";
        // line 19
        if (( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 19, $this->source); })())) && ("success" === (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 19, $this->source); })())))) {
            // line 20
            echo "(function() { postFormHandler(); })();
";
        }
        // line 22
        echo "</script>

";
        // line 24
        if ( !twig_test_empty((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 24, $this->source); })()))) {
            // line 25
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["alert"]) || array_key_exists("alert", $context) ? $context["alert"] : (function () { throw new RuntimeError('Variable "alert" does not exist.', 25, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 26
            echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 26, $this->source); })()));
            echo "
    </div>
";
        }
        // line 29
        echo "<div class=\"row\">
    <div class=\"col-sm-12 text-center\">
        <a class=\"btn btn-lg btn-primary\" href=\"javascript:void(0);\" onclick=\"postFormHandler();\">
            ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.integration.closewindow"), "html", null, true);
        echo "
        </a>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPlugin/Auth/postauth.html.twig";
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
        return array (  111 => 32,  106 => 29,  100 => 26,  95 => 25,  93 => 24,  89 => 22,  85 => 20,  83 => 19,  71 => 9,  69 => 8,  65 => 7,  58 => 5,  51 => 4,  46 => 2,  44 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPlugin/Auth/postauth.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Resources\\views\\Auth\\postauth.html.twig");
    }
}
