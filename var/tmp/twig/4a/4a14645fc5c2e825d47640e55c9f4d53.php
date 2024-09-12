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

/* @FMElfinder/Elfinder/helper/_summernote.html.twig */
class __TwigTemplate_d3d461473129a70a41188e5021b2dac2 extends Template
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
        echo "<script type=\"text/javascript\">
    function elFinderBrowser(){
            window.open(
                \"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("elfinder", ["instance" => (isset($context["instance"]) || array_key_exists("instance", $context) ? $context["instance"] : (function () { throw new RuntimeError('Variable "instance" does not exist.', 4, $this->source); })())]), "html", null, true);
        echo "\",
                \"\",
                \"width=";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 6, $this->source); })()), "html", null, true);
        echo ", height=";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 6, $this->source); })()), "html", null, true);
        echo ", resizable=yes, scrollbars=no, status=no, toolbar=no\"
            );
            return false;
        }
</script>

";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_summernote.html.twig";
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
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@FMElfinder/Elfinder/helper/_summernote.html.twig", "C:\\xampp\\htdocs\\mautic\\vendor\\helios-ag\\fm-elfinder-bundle\\src\\Resources\\views\\Elfinder\\helper\\_summernote.html.twig");
    }
}
