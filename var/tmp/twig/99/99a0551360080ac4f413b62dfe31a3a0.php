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

/* @MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig */
class __TwigTemplate_9d102d8c9506b01ec9d0c97e749bcb70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_trackingconfig_widget' => [$this, 'block__config_trackingconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_trackingconfig_widget', $context, $blocks);
    }

    public function block__config_trackingconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"form-group\">
            <p>";
        // line 8
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.pagetracking.info"));
        echo "</p>
            <pre>&lt;script&gt;
    (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
        w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
        m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
    })(window,document,'script','";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("mautic_js");
        echo "','mt');

    mt('send', 'pageview');
&lt;/script&gt;</pre>
        </div>
        <div class=\"row\">
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "children", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 20
            echo "                ";
            if (twig_in_filter($context["name"], ["anonymize_ip", "track_contact_by_ip", "track_by_tracking_url", "do_not_track_404_anonymous"])) {
                // line 21
                echo "                    <div class=\"col-md-6\">
                        ";
                // line 22
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                        ";
                // line 23
                if (($context["name"] == "anonymize_ip")) {
                    // line 24
                    echo "                            <div class=\"anonymize_ip_address hide text-danger\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.page.config.form.anonymize_ip.warning"), "html", null, true);
                    echo "</div>
                        ";
                }
                // line 26
                echo "                    </div>
                ";
            }
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.facebook.pixel"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "facebook_pixel_id", [], "any", false, false, false, 37), 'row');
        echo "
        <div class=\"row\">
            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "children", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 40
            echo "                ";
            if (twig_in_filter($context["name"], ["facebook_pixel_trackingpage_enabled", "facebook_pixel_landingpage_enabled"])) {
                // line 41
                echo "                    <div class=\"col-md-6\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "</div>
                ";
            }
            // line 43
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
</div>
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.tracking.google.analytics"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "google_analytics_id", [], "any", false, false, false, 52), 'row');
        echo "
        <div class=\"row\">
            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "children", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["name"] => $context["f"]) {
            // line 55
            echo "                ";
            if (twig_in_filter($context["name"], ["google_analytics_trackingpage_enabled", "google_analytics_landingpage_enabled", "google_analytics_anonymize_ip"])) {
                // line 56
                echo "                    <div class=\"col-md-6\">
                        ";
                // line 57
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                echo "
                    </div>
                ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
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
        return "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  182 => 61,  176 => 60,  170 => 57,  167 => 56,  164 => 55,  160 => 54,  155 => 52,  149 => 49,  142 => 44,  136 => 43,  130 => 41,  127 => 40,  123 => 39,  118 => 37,  112 => 34,  105 => 29,  99 => 28,  95 => 26,  89 => 24,  87 => 23,  83 => 22,  80 => 21,  77 => 20,  73 => 19,  64 => 13,  56 => 8,  49 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPage/FormTheme/Config/_config_trackingconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Resources\\views\\FormTheme\\Config\\_config_trackingconfig_widget.html.twig");
    }
}
