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

/* @MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig */
class __TwigTemplate_24b74582c1bf7a59bb48a3c58ae0ea29 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_emailconfig_widget' => [$this, 'block__config_emailconfig_widget'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('_config_emailconfig_widget', $context, $blocks);
    }

    public function block__config_emailconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "children", [], "any", false, false, false, 10);
        // line 11
        $context["fieldKeys"] = twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 11, $this->source); })()));
        // line 12
        echo "
";
        // line 13
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), ["@MauticEmail/FormTheme/Config/monitored_email_widget.html.twig", "@MauticEmail/FormTheme/Config/monitored_mailboxes_widget.html.twig"], true);
        // line 17
        echo "
";
        // line 18
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 18, $this->source); })()), function ($__k__) use ($context, $macros) { $context["k"] = $__k__; return twig_in_filter((isset($context["k"]) || array_key_exists("k", $context) ? $context["k"] : (function () { throw new RuntimeError('Variable "k" does not exist.', 18, $this->source); })()), ["mailer_from_name", "mailer_from_email", "mailer_reply_to_email"]); })) > 0)) {
            // line 19
            echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.mail"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
            <div class=\"row\">
                ";
            // line 25
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 25, $this->source); })()), "mailer_from_name"], 25, $context, $this->getSourceContext());
            echo "
                ";
            // line 26
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 26, $this->source); })()), "mailer_from_email"], 26, $context, $this->getSourceContext());
            echo "
            </div>
            <div class=\"row\">
                ";
            // line 29
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 29, $this->source); })()), "mailer_reply_to_email"], 29, $context, $this->getSourceContext());
            echo "
                ";
            // line 30
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 30, $this->source); })()), "mailer_return_path"], 30, $context, $this->getSourceContext());
            echo "
            </div>
            <div class=\"row\">
                ";
            // line 33
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 33, $this->source); })()), "mailer_is_owner"], 33, $context, $this->getSourceContext());
            echo "
                ";
            // line 34
            echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 34, $this->source); })()), "mailer_custom_headers"], 34, $context, $this->getSourceContext());
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 39
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.dsn"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 45, $this->source); })()), "mailer_dsn", [], "any", false, false, false, 45), 'row');
        echo "
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.config.tab.frequency_rules"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 56, $this->source); })()), "email_frequency_number", [], "any", false, false, false, 56), 'row');
        echo "
            </div>
            <div class=\"col-md-12\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 59, $this->source); })()), "email_frequency_time", [], "any", false, false, false, 59), 'row');
        echo "
            </div>
        </div>
    </div>
</div>

";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "monitored_email", [], "any", true, true, false, 65)) {
            // line 66
            echo "    <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">
            <h3 class=\"panel-title\">";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.monitored_email"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
            ";
            // line 71
            if ($this->env->getTest('function')->getCallable()("imap_open")) {
                // line 72
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "monitored_email", [], "any", false, false, false, 72), 'widget');
                echo "
            ";
            } else {
                // line 74
                echo "                <div class=\"alert alert-info\">";
                echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.imap_extension_missing"));
                echo "</div>
            ";
            }
            // line 76
            echo "        </div>
    </div>
";
        }
        // line 79
        echo "
<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.message"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            ";
        // line 86
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 86, $this->source); })()), "webview_text"], 86, $context, $this->getSourceContext());
        echo "
            ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 87, $this->source); })()), "default_signature_text"], 87, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 90
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 90, $this->source); })()), "mailer_append_tracking_pixel"], 90, $context, $this->getSourceContext());
        echo "
            ";
        // line 91
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 91, $this->source); })()), "mailer_convert_embed_images"], 91, $context, $this->getSourceContext());
        echo "
            ";
        // line 92
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 92, $this->source); })()), "disable_trackable_urls"], 92, $context, $this->getSourceContext());
        echo "
            ";
        // line 93
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 93, $this->source); })()), "minify_email_html"], 93, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>

<div class=\"panel panel-primary\">
    <div class=\"panel-heading\">
        <h3 class=\"panel-title\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.config.header.unsubscribe"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"panel-body\">
        <div class=\"row\">
            ";
        // line 104
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 104, $this->source); })()), "unsubscribe_text"], 104, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 107
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 107, $this->source); })()), "unsubscribe_message"], 107, $context, $this->getSourceContext());
        echo "
            ";
        // line 108
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 108, $this->source); })()), "resubscribe_message"], 108, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 111
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 111, $this->source); })()), "show_contact_preferences"], 111, $context, $this->getSourceContext());
        echo "
            ";
        // line 112
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 112, $this->source); })()), "show_contact_segments"], 112, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 115
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 115, $this->source); })()), "show_contact_frequency"], 115, $context, $this->getSourceContext());
        echo "
            ";
        // line 116
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 116, $this->source); })()), "show_contact_pause_dates"], 116, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"row\">
            ";
        // line 119
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 119, $this->source); })()), "show_contact_categories"], 119, $context, $this->getSourceContext());
        echo "
            ";
        // line 120
        echo twig_call_macro($macros["_self"], "macro_row_if_exists", [(isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 120, $this->source); })()), "show_contact_preferred_channels"], 120, $context, $this->getSourceContext());
        echo "
        </div>
    </div>
</div>
";
    }

    // line 1
    public function macro_row_if_exists($__form__ = null, $__field__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "field" => $__field__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 2
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 2, $this->source); })()), [], "array", true, true, false, 2)) {
                // line 3
                echo "    <div class=\"col-md-6\">
      ";
                // line 4
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), [], "array", false, false, false, 4), 'row');
                echo "
    </div>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig";
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
        return array (  300 => 4,  297 => 3,  294 => 2,  280 => 1,  271 => 120,  267 => 119,  261 => 116,  257 => 115,  251 => 112,  247 => 111,  241 => 108,  237 => 107,  231 => 104,  224 => 100,  214 => 93,  210 => 92,  206 => 91,  202 => 90,  196 => 87,  192 => 86,  185 => 82,  180 => 79,  175 => 76,  169 => 74,  163 => 72,  161 => 71,  155 => 68,  151 => 66,  149 => 65,  140 => 59,  134 => 56,  126 => 51,  117 => 45,  111 => 42,  106 => 39,  98 => 34,  94 => 33,  88 => 30,  84 => 29,  78 => 26,  74 => 25,  67 => 21,  63 => 19,  61 => 18,  58 => 17,  56 => 13,  53 => 12,  51 => 11,  49 => 10,  42 => 9,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/FormTheme/Config/_config_emailconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\FormTheme\\Config\\_config_emailconfig_widget.html.twig");
    }
}
