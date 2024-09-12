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

/* @MauticCore/Update/schema.html.twig */
class __TwigTemplate_c7ab24dfc5896dab0f2a3068c63e077d extends Template
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
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticCore/Update/schema.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "update";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.index"), "html", null, true);
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.schema_updated");
        // line 14
        $context["class"] = "success";
        // line 16
        if ((isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 16, $this->source); })())) {
            // line 17
            $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.error_performing_migration");
            // line 18
            $context["class"] = "danger";
        } elseif (        // line 19
(isset($context["noMigrations"]) || array_key_exists("noMigrations", $context) ? $context["noMigrations"] : (function () { throw new RuntimeError('Variable "noMigrations" does not exist.', 19, $this->source); })())) {
            // line 20
            $context["message"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.update.schema_uptodate");
            // line 21
            $context["class"] = "info";
        }
        // line 23
        echo "<div class=\"panel panel-default mnb-5 bdr-t-wdh-0\">
    <div id=\"update-panel\" class=\"panel-body\">
        <div class=\"col-sm-offset-2 col-sm-8\">
            <div class=\"alert alert-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " mb-sm\">
                ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "
            </div>";
        // line 29
        if ( !(isset($context["failed"]) || array_key_exists("failed", $context) ? $context["failed"] : (function () { throw new RuntimeError('Variable "failed" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                <div class=\"text-center\">
                    <a class=\"btn btn-primary\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_dashboard_index");
            echo "\" data-toggle=\"ajax\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.go_to_dashboard"), "html", null, true);
            echo "</a>
                </div>";
        }
        // line 34
        echo "        </div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Update/schema.html.twig";
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
        return array (  108 => 34,  101 => 31,  98 => 30,  96 => 29,  92 => 27,  88 => 26,  83 => 23,  80 => 21,  78 => 20,  76 => 19,  74 => 18,  72 => 17,  70 => 16,  68 => 14,  66 => 13,  62 => 12,  55 => 10,  48 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Update/schema.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Update\\schema.html.twig");
    }
}
