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

/* @MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig */
class __TwigTemplate_5791da4ab406db1354d97792087477dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'iplookup_download_data_store_button_row' => [$this, 'block_iplookup_download_data_store_button_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('iplookup_download_data_store_button_row', $context, $blocks);
    }

    public function block_iplookup_download_data_store_button_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"row\">
    <div class=\"col-sm-6\">
        <div id=\"iplookup_fetch_button_container\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "fetch_button", [], "any", false, false, false, 5), 'widget');
        echo "
            <span class=\"fa fa-spinner fa-spin hide\"></span>
            ";
        // line 7
        if (array_key_exists("ipDataStoreLastDownloaded", $context)) {
            // line 8
            echo "              <div class=\"small text-muted\">";
            echo twig_escape_filter($this->env, (isset($context["ipDataStoreLastDownloaded"]) || array_key_exists("ipDataStoreLastDownloaded", $context) ? $context["ipDataStoreLastDownloaded"] : (function () { throw new RuntimeError('Variable "ipDataStoreLastDownloaded" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "</div>
            ";
        }
        // line 10
        echo "        </div>
        <div class=\"col-md-9 help-block\"></div>
    </div>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  63 => 10,  57 => 8,  55 => 7,  50 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/FormTheme/Config/iplookup_download_data_store_button_row.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\FormTheme\\Config\\iplookup_download_data_store_button_row.html.twig");
    }
}
