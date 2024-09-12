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

/* @DoctrineMigrations/Collector/migrations.html.twig */
class __TwigTemplate_2e30a290f604439a62570814814ba780 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@DoctrineMigrations/Collector/migrations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 4), "unavailable_migrations_count", [], "any", true, true, false, 4)) {
            // line 5
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 5, $this->source); })()), "data", [], "any", false, false, false, 5), "unavailable_migrations_count", [], "any", false, false, false, 5);
            // line 6
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "data", [], "any", false, false, false, 6), "new_migrations", [], "any", false, false, false, 6));
            // line 7
            echo "        ";
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 7, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 7, $this->source); })()) > 0))) {
                // line 8
                echo "            ";
                $context["executed_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 8, $this->source); })()), "data", [], "any", false, false, false, 8), "executed_migrations", [], "any", false, false, false, 8));
                // line 9
                echo "            ";
                $context["available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "data", [], "any", false, false, false, 9), "available_migrations_count", [], "any", false, false, false, 9);
                // line 10
                echo "            ";
                $context["status_color"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 10, $this->source); })()) > 0)) ? ("yellow") : (""));
                // line 11
                echo "            ";
                $context["status_color"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 11, $this->source); })()) > 0)) ? ("red") : ((isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 11, $this->source); })())));
                // line 12
                echo "
            ";
                // line 13
                ob_start(function () { return ''; });
                // line 14
                echo "                ";
                if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 14, $this->source); })()) < 3)) {
                    // line 15
                    echo "                    ";
                    echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                    echo "
                ";
                } else {
                    // line 17
                    echo "                    ";
                    echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                    echo "
                ";
                }
                // line 19
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 20
                echo twig_escape_filter($this->env, ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 20, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 20, $this->source); })())), "html", null, true);
                echo "</span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 22
                echo "
            ";
                // line 23
                ob_start(function () { return ''; });
                // line 24
                echo "                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Current Migration</b>
                        <span>";
                // line 27
                ((((isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 27, $this->source); })()) > 0)) ? (print (twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "data", [], "any", false, false, false, 27), "executed_migrations", [], "any", false, false, false, 27)), "version", [], "any", false, false, false, 27), "\\")), "html", null, true))) : (print ("n/a")));
                echo "</span>
                    </div>
                </div>

                <div class=\"sf-toolbar-info-group\">
                    <div class=\"sf-toolbar-info-piece\">
                        <span class=\"sf-toolbar-header\">
                            <b>Database Migrations</b>
                        </span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Executed</b>
                        <span class=\"sf-toolbar-status\">";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["executed_migrations"]) || array_key_exists("executed_migrations", $context) ? $context["executed_migrations"] : (function () { throw new RuntimeError('Variable "executed_migrations" does not exist.', 39, $this->source); })()), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Unavailable</b>
                        <span class=\"sf-toolbar-status ";
                // line 43
                echo ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 43, $this->source); })()) > 0)) ? ("sf-toolbar-status-yellow") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 43, $this->source); })()), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>Available</b>
                        <span class=\"sf-toolbar-status\">";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["available_migrations"]) || array_key_exists("available_migrations", $context) ? $context["available_migrations"] : (function () { throw new RuntimeError('Variable "available_migrations" does not exist.', 47, $this->source); })()), "html", null, true);
                echo "</span>
                    </div>
                    <div class=\"sf-toolbar-info-piece\">
                        <b>New</b>
                        <span class=\"sf-toolbar-status ";
                // line 51
                echo ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 51, $this->source); })()) > 0)) ? ("sf-toolbar-status-red") : (""));
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 51, $this->source); })()), "html", null, true);
                echo "</span>
                    </div>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 55
                echo "
            ";
                // line 56
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 56, $this->source); })()), "status" => (isset($context["status_color"]) || array_key_exists("status_color", $context) ? $context["status_color"] : (function () { throw new RuntimeError('Variable "status_color" does not exist.', 56, $this->source); })())]);
                echo "
        ";
            }
            // line 58
            echo "    ";
        }
    }

    // line 61
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 62), "unavailable_migrations_count", [], "any", true, true, false, 62)) {
            // line 63
            echo "        ";
            $context["unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "data", [], "any", false, false, false, 63), "unavailable_migrations_count", [], "any", false, false, false, 63);
            // line 64
            echo "        ";
            $context["new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 64, $this->source); })()), "data", [], "any", false, false, false, 64), "new_migrations", [], "any", false, false, false, 64));
            // line 65
            echo "        ";
            $context["label"] = ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 65, $this->source); })()) > 0)) ? ("label-status-warning") : (""));
            // line 66
            echo "        ";
            $context["label"] = ((((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 66, $this->source); })()) > 0)) ? ("label-status-error") : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 66, $this->source); })())));
            // line 67
            echo "        <span class=\"label ";
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "\">
            <span class=\"icon\">
                ";
            // line 69
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 69, $this->source); })()) < 3)) {
                // line 70
                echo "                    ";
                echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon.svg");
                echo "
                ";
            } else {
                // line 72
                echo "                    ";
                echo twig_include($this->env, $context, "@DoctrineMigrations/Collector/icon-v3.svg");
                echo "
                ";
            }
            // line 74
            echo "            </span>

            <strong>Migrations</strong>
            ";
            // line 77
            if ((((isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 77, $this->source); })()) > 0) || ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 77, $this->source); })()) > 0))) {
                // line 78
                echo "                <span class=\"count\">
                    <span>";
                // line 79
                echo twig_escape_filter($this->env, ((isset($context["new_migrations"]) || array_key_exists("new_migrations", $context) ? $context["new_migrations"] : (function () { throw new RuntimeError('Variable "new_migrations" does not exist.', 79, $this->source); })()) + (isset($context["unavailable_migrations"]) || array_key_exists("unavailable_migrations", $context) ? $context["unavailable_migrations"] : (function () { throw new RuntimeError('Variable "unavailable_migrations" does not exist.', 79, $this->source); })())), "html", null, true);
                echo "</span>
                </span>
            ";
            }
            // line 82
            echo "        </span>
    ";
        }
    }

    // line 86
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 87
        echo "    ";
        $context["num_executed_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "data", [], "any", false, false, false, 87), "executed_migrations", [], "any", false, false, false, 87));
        // line 88
        echo "    ";
        $context["num_unavailable_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 88, $this->source); })()), "data", [], "any", false, false, false, 88), "unavailable_migrations_count", [], "any", false, false, false, 88);
        // line 89
        echo "    ";
        $context["num_available_migrations"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "data", [], "any", false, false, false, 89), "available_migrations_count", [], "any", false, false, false, 89);
        // line 90
        echo "    ";
        $context["num_new_migrations"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "data", [], "any", false, false, false, 90), "new_migrations", [], "any", false, false, false, 90));
        // line 91
        echo "
    <h2>Doctrine Migrations</h2>
    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 95
        echo twig_escape_filter($this->env, (isset($context["num_executed_migrations"]) || array_key_exists("num_executed_migrations", $context) ? $context["num_executed_migrations"] : (function () { throw new RuntimeError('Variable "num_executed_migrations" does not exist.', 95, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"label\">Executed</span>
        </div>

        ";
        // line 99
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 99, $this->source); })()) >= 3)) {
            // line 100
            echo "            <div class=\"metric-group\">
        ";
        }
        // line 102
        echo "
        <div class=\"metric\">
            <span class=\"value\">";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 104, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"label\">Unavailable</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 108
        echo twig_escape_filter($this->env, (isset($context["num_available_migrations"]) || array_key_exists("num_available_migrations", $context) ? $context["num_available_migrations"] : (function () { throw new RuntimeError('Variable "num_available_migrations" does not exist.', 108, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"label\">Available</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "</span>
            <span class=\"label\">New</span>
        </div>

        ";
        // line 116
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 116, $this->source); })()) >= 3)) {
            // line 117
            echo "            </div> ";
            // line 118
            echo "        ";
        }
        // line 119
        echo "    </div>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">
                Migrations
                <span class=\"badge ";
        // line 125
        echo ((((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 125, $this->source); })()) > 0)) ? ("status-error") : (((((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 125, $this->source); })()) > 0)) ? ("status-warning") : (""))));
        echo "\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, ((((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 126, $this->source); })()) > 0)) ? ((isset($context["num_new_migrations"]) || array_key_exists("num_new_migrations", $context) ? $context["num_new_migrations"] : (function () { throw new RuntimeError('Variable "num_new_migrations" does not exist.', 126, $this->source); })())) : (((((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 126, $this->source); })()) > 0)) ? ((isset($context["num_unavailable_migrations"]) || array_key_exists("num_unavailable_migrations", $context) ? $context["num_unavailable_migrations"] : (function () { throw new RuntimeError('Variable "num_unavailable_migrations" does not exist.', 126, $this->source); })())) : ((isset($context["num_executed_migrations"]) || array_key_exists("num_executed_migrations", $context) ? $context["num_executed_migrations"] : (function () { throw new RuntimeError('Variable "num_executed_migrations" does not exist.', 126, $this->source); })()))))), "html", null, true);
        echo "
                </span>
            </h3>

            <div class=\"tab-content\">
                ";
        // line 131
        echo twig_call_macro($macros["_self"], "macro_render_migration_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 131, $this->source); })())], 131, $context, $this->getSourceContext());
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Configuration</h3>

            <div class=\"tab-content\">
                ";
        // line 139
        echo twig_call_macro($macros["_self"], "macro_render_configuration_details", [(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 139, $this->source); })()), (isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 139, $this->source); })())], 139, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 145
    public function macro_render_migration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 146
            echo "    <table>
        <thead>
        <tr>
            <th class=\"colored font-normal\">Version</th>
            <th class=\"colored font-normal\">Description</th>
            <th class=\"colored font-normal\">Status</th>
            <th class=\"colored font-normal\">Executed at</th>
            <th class=\"colored font-normal text-right\">Execution time</th>
        </tr>
        </thead>
        ";
            // line 156
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "data", [], "any", false, false, false, 156), "new_migrations", [], "any", false, false, false, 156));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 157
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_render_migration", [$context["migration"]], 157, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "
        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "data", [], "any", false, false, false, 160), "executed_migrations", [], "any", false, false, false, 160)));
            foreach ($context['_seq'] as $context["_key"] => $context["migration"]) {
                // line 161
                echo "            ";
                echo twig_call_macro($macros["_self"], "macro_render_migration", [$context["migration"]], 161, $context, $this->getSourceContext());
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['migration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 166
    public function macro_render_configuration_details($__collector__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "collector" => $__collector__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 167
            echo "    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Storage</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Type</td>
            <td class=\"font-normal\">";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 175, $this->source); })()), "data", [], "any", false, false, false, 175), "storage", [], "any", false, false, false, 175), "html", null, true);
            echo "</td>
        </tr>
        ";
            // line 177
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 177), "table", [], "any", true, true, false, 177)) {
                // line 178
                echo "            <tr>
                <td class=\"font-normal\">Table Name</td>
                <td class=\"font-normal\">";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 180, $this->source); })()), "data", [], "any", false, false, false, 180), "table", [], "any", false, false, false, 180), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            // line 183
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "data", [], "any", false, true, false, 183), "column", [], "any", true, true, false, 183)) {
                // line 184
                echo "            <tr>
                <td class=\"font-normal\">Column Name</td>
                <td class=\"font-normal\">";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "data", [], "any", false, false, false, 186), "column", [], "any", false, false, false, 186), "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            // line 189
            echo "    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Database</th>
        </tr>
        </thead>
        <tr>
            <td class=\"font-normal\">Driver</td>
            <td class=\"font-normal\">";
            // line 199
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "data", [], "any", false, false, false, 199), "driver", [], "any", false, false, false, 199), "html", null, true);
            echo "</td>
        </tr>
        <tr>
            <td class=\"font-normal\">Name</td>
            <td class=\"font-normal\">";
            // line 203
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 203, $this->source); })()), "data", [], "any", false, false, false, 203), "name", [], "any", false, false, false, 203), "html", null, true);
            echo "</td>
        </tr>
    </table>

    <table>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"colored font-normal\">Migration Namespaces</th>
        </tr>
        </thead>
        ";
            // line 213
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 213, $this->source); })()), "data", [], "any", false, false, false, 213), "namespaces", [], "any", false, false, false, 213));
            foreach ($context['_seq'] as $context["namespace"] => $context["directory"]) {
                // line 214
                echo "            <tr>
                <td class=\"font-normal\">";
                // line 215
                echo twig_escape_filter($this->env, $context["namespace"], "html", null, true);
                echo "</td>
                <td class=\"font-normal\">";
                // line 216
                echo twig_escape_filter($this->env, $context["directory"], "html", null, true);
                echo "</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['namespace'], $context['directory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 219
            echo "    </table>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 222
    public function macro_render_migration($__migration__ = null, $__profiler_markup_version__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "migration" => $__migration__,
            "profiler_markup_version" => $__profiler_markup_version__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 223
            echo "    <tr>
        <td class=\"font-normal\">
            ";
            // line 225
            if (twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 225, $this->source); })()), "file", [], "any", false, false, false, 225)) {
                // line 226
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "file", [], "any", false, false, false, 226), 1), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "file", [], "any", false, false, false, 226), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 226, $this->source); })()), "version", [], "any", false, false, false, 226), "html", null, true);
                echo "</a>
            ";
            } else {
                // line 228
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 228, $this->source); })()), "version", [], "any", false, false, false, 228), "html", null, true);
                echo "
            ";
            }
            // line 230
            echo "        </td>
        <td class=\"font-normal\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 231, $this->source); })()), "description", [], "any", false, false, false, 231), "html", null, true);
            echo "</td>
        <td class=\"font-normal align-right\">
            ";
            // line 233
            if (twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 233, $this->source); })()), "is_new", [], "any", false, false, false, 233)) {
                // line 234
                echo "                <span class=\"";
                echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 234, $this->source); })()) >= 3)) ? ("badge badge-error") : ("label status-error"));
                echo "\">NOT EXECUTED</span>
            ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 235
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 235, $this->source); })()), "is_unavailable", [], "any", false, false, false, 235)) {
                // line 236
                echo "                <span class=\"";
                echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 236, $this->source); })()) >= 3)) ? ("badge badge-warning") : ("label status-warning"));
                echo "\">UNAVAILABLE</span>
            ";
            } else {
                // line 238
                echo "                <span class=\"";
                echo ((((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new RuntimeError('Variable "profiler_markup_version" does not exist.', 238, $this->source); })()) >= 3)) ? ("badge badge-success") : ("label status-success"));
                echo "\">EXECUTED</span>
            ";
            }
            // line 240
            echo "        </td>
        <td class=\"font-normal\">";
            // line 241
            ((twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 241, $this->source); })()), "executed_at", [], "any", false, false, false, 241)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 241, $this->source); })()), "executed_at", [], "any", false, false, false, 241), "M j, Y H:i"), "html", null, true))) : (print ("n/a")));
            echo "</td>
        <td class=\"font-normal text-right\">
            ";
            // line 243
            if ((null === twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 243, $this->source); })()), "execution_time", [], "any", false, false, false, 243))) {
                // line 244
                echo "                n/a
            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 245
(isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 245, $this->source); })()), "execution_time", [], "any", false, false, false, 245) < 1)) {
                // line 246
                echo "                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 246, $this->source); })()), "execution_time", [], "any", false, false, false, 246) * 1000), 0), "html", null, true);
                echo " ms
            ";
            } else {
                // line 248
                echo "                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["migration"]) || array_key_exists("migration", $context) ? $context["migration"] : (function () { throw new RuntimeError('Variable "migration" does not exist.', 248, $this->source); })()), "execution_time", [], "any", false, false, false, 248), 2), "html", null, true);
                echo " seconds
            ";
            }
            // line 250
            echo "        </td>
    </tr>
";

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
        return "@DoctrineMigrations/Collector/migrations.html.twig";
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
        return array (  614 => 250,  608 => 248,  602 => 246,  600 => 245,  597 => 244,  595 => 243,  590 => 241,  587 => 240,  581 => 238,  575 => 236,  573 => 235,  568 => 234,  566 => 233,  561 => 231,  558 => 230,  552 => 228,  542 => 226,  540 => 225,  536 => 223,  522 => 222,  512 => 219,  503 => 216,  499 => 215,  496 => 214,  492 => 213,  479 => 203,  472 => 199,  460 => 189,  454 => 186,  450 => 184,  447 => 183,  441 => 180,  437 => 178,  435 => 177,  430 => 175,  420 => 167,  407 => 166,  397 => 163,  388 => 161,  384 => 160,  381 => 159,  372 => 157,  368 => 156,  356 => 146,  343 => 145,  334 => 139,  323 => 131,  315 => 126,  311 => 125,  303 => 119,  300 => 118,  298 => 117,  296 => 116,  289 => 112,  282 => 108,  275 => 104,  271 => 102,  267 => 100,  265 => 99,  258 => 95,  252 => 91,  249 => 90,  246 => 89,  243 => 88,  240 => 87,  236 => 86,  230 => 82,  224 => 79,  221 => 78,  219 => 77,  214 => 74,  208 => 72,  202 => 70,  200 => 69,  194 => 67,  191 => 66,  188 => 65,  185 => 64,  182 => 63,  179 => 62,  175 => 61,  170 => 58,  165 => 56,  162 => 55,  153 => 51,  146 => 47,  137 => 43,  130 => 39,  115 => 27,  110 => 24,  108 => 23,  105 => 22,  100 => 20,  97 => 19,  91 => 17,  85 => 15,  82 => 14,  80 => 13,  77 => 12,  74 => 11,  71 => 10,  68 => 9,  65 => 8,  62 => 7,  59 => 6,  56 => 5,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@DoctrineMigrations/Collector/migrations.html.twig", "C:\\xampp\\htdocs\\mautic\\vendor\\doctrine\\doctrine-migrations-bundle\\Resources\\views\\Collector\\migrations.html.twig");
    }
}
