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

/* @MauticLead/Import/_upload_form.html.twig */
class __TwigTemplate_e0b30cc1ff249e5eedf361e22771b83b extends Template
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
        // line 5
        $context["uploadMaxFilesize"] = twig_replace_filter($this->env->getFunction('ini_get')->getCallable()("upload_max_filesize"), ["M" => ""]);
        // line 6
        echo "<div class=\"row\">
    <div class=\"col-sm-offset-3 col-sm-6\">
        <div class=\"ml-lg mr-lg mt-md pa-lg\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <div class=\"panel-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.import.start.instructions", ["%size%" => (isset($context["uploadMaxFilesize"]) || array_key_exists("uploadMaxFilesize", $context) ? $context["uploadMaxFilesize"] : (function () { throw new RuntimeError('Variable "uploadMaxFilesize" does not exist.', 11, $this->source); })())]), "html", null, true);
        echo "</div>
                </div>
                <div class=\"panel-body\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
                    <div class=\"input-group well mt-lg\">
                        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "file", [], "any", false, false, false, 16), 'widget');
        echo "
                        <span class=\"input-group-btn\">
                            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "start", [], "any", false, false, false, 18), 'widget');
        echo "
                        </span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-3\">
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "batchlimit", [], "any", false, false, false, 24), 'row');
        echo "
                        </div>

                        <div class=\"col-xs-3\">
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "delimiter", [], "any", false, false, false, 28), 'row');
        echo "
                        </div>

                        <div class=\"col-xs-3\">
                            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "enclosure", [], "any", false, false, false, 32), 'row');
        echo "
                        </div>

                        <div class=\"col-xs-3\">
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "escape", [], "any", false, false, false, 36), 'row');
        echo "
                        </div>
                    </div>
                    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticLead/Import/_upload_form.html.twig";
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
        return array (  98 => 39,  92 => 36,  85 => 32,  78 => 28,  71 => 24,  62 => 18,  57 => 16,  52 => 14,  46 => 11,  39 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticLead/Import/_upload_form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Resources\\views\\Import\\_upload_form.html.twig");
    }
}
