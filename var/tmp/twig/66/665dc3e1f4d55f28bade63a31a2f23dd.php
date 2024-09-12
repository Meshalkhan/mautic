<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @MauticPoint/Point/_list.html.twig */
class __TwigTemplate_9d4351e6fee7a51dcd8b018c1f3d2a27 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            yield "    <div class=\"table-responsive page-list\">
        <table class=\"table table-hover point-list\" id=\"pointTable\">
            <thead>
            <tr>
                ";
            // line 6
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#pointTable", "routeBase" => "point", "templateButtons" => ["delete" => CoreExtension::getAttribute($this->env, $this->source,             // line 11
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 11, $this->source); })()), "point:points:delete", [], "array", false, false, false, 11)]]);
            // line 13
            yield "

                ";
            // line 15
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.name", "text" => "mautic.core.name", "class" => "col-point-name", "default" => true]);
            // line 21
            yield "

                ";
            // line 23
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "cat.title", "text" => "mautic.core.category", "class" => "visible-md visible-lg col-point-category"]);
            // line 28
            yield "

                ";
            // line 30
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "pl.name", "text" => "mautic.point.thead.group", "class" => "visible-md visible-lg col-point-group"]);
            // line 35
            yield "

                ";
            // line 37
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.delta", "text" => "mautic.point.thead.delta", "class" => "visible-md visible-lg col-point-delta"]);
            // line 42
            yield "

                <th class=\"col-point-action\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.thead.action"), "html", null, true);
            yield "</th>

                ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "point", "orderBy" => "p.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-point-id"]);
            // line 51
            yield "
            </tr>
            </thead>
            <tbody>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 56
                yield "                <tr>
                    <td>
                        ";
                // line 58
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 59
$context["item"], "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,                 // line 61
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 61, $this->source); })()), "point:points:edit", [], "array", false, false, false, 61), "clone" => CoreExtension::getAttribute($this->env, $this->source,                 // line 62
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 62, $this->source); })()), "point:points:create", [], "array", false, false, false, 62), "delete" => CoreExtension::getAttribute($this->env, $this->source,                 // line 63
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 63, $this->source); })()), "point:points:delete", [], "array", false, false, false, 63)], "routeBase" => "point"]);
                // line 66
                yield "
                    </td>
                    <td>
                        <div>
                            ";
                // line 70
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" => $context["item"], "model" => "point"]);
                yield "
                            ";
                // line 71
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "point:points:edit", [], "array", false, false, false, 71)) {
                    // line 72
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_action", ["objectAction" => "edit", "objectId" => CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    yield "\" data-toggle=\"ajax\">
                                    ";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 73), "html", null, true);
                    yield "
                                </a>
                            ";
                } else {
                    // line 76
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 76), "html", null, true);
                    yield "
                            ";
                }
                // line 78
                yield "                        </div>
                        ";
                // line 79
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 79))) {
                    // line 80
                    yield "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 81
                    yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 81));
                    yield "</small>
                            </div>
                        ";
                }
                // line 84
                yield "                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 86
                $context["category"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 86);
                // line 87
                yield "                        ";
                $context["catName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 87), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.uncategorized")));
                // line 88
                yield "                        ";
                $context["color"] = (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 88, $this->source); })())) ? (("#" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 88, $this->source); })()), "color", [], "any", false, false, false, 88))) : ("inherit"));
                // line 89
                yield "                        <span style=\"white-space: nowrap;\">
                          <span class=\"label label-default pa-4\" style=\"border: 1px solid #d5d5d5; background: ";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 90, $this->source); })()), "html", null, true);
                yield ";\"> </span>
                          <span>";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["catName"]) || array_key_exists("catName", $context) ? $context["catName"] : (function () { throw new RuntimeError('Variable "catName" does not exist.', 91, $this->source); })()), "html", null, true);
                yield "</span>
                        </span>
                    </td>
                    <td class=\"visible-md visible-lg\">
                        ";
                // line 95
                $context["group"] = CoreExtension::getAttribute($this->env, $this->source, $context["item"], "group", [], "any", false, false, false, 95);
                // line 96
                yield "                        ";
                $context["groupName"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", true, true, false, 96)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["group"] ?? null), "name", [], "any", false, false, false, 96), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.point.group.form.nogroup")));
                // line 97
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["groupName"]) || array_key_exists("groupName", $context) ? $context["groupName"] : (function () { throw new RuntimeError('Variable "groupName" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "
                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "delta", [], "any", false, false, false, 99), "html", null, true);
                yield "</td>
                    <td>";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["actions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100), [], "array", false, true, false, 100), "label", [], "any", true, true, false, 100)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["actions"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "type", [], "any", false, false, false, 100), [], "array", false, true, false, 100), "label", [], "any", false, false, false, 100), "")) : (""))), "html", null, true);
                yield "</td>
                    <td class=\"visible-md visible-lg\">";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 101), "html", null, true);
                yield "</td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 108
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => Twig\Extension\CoreExtension::length($this->env->getCharset(),             // line 109
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 109, $this->source); })())), "page" =>             // line 110
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 110, $this->source); })()), "limit" =>             // line 111
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 111, $this->source); })()), "menuLinkId" => "mautic_point_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_point_index"), "sessionVar" => "point"]);
            // line 115
            yield "
    </div>
";
        } else {
            // line 118
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.point.action.noresults.tip"]);
            yield "
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticPoint/Point/_list.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  242 => 118,  237 => 115,  235 => 111,  234 => 110,  233 => 109,  232 => 108,  226 => 104,  209 => 101,  205 => 100,  201 => 99,  195 => 97,  192 => 96,  190 => 95,  183 => 91,  179 => 90,  176 => 89,  173 => 88,  170 => 87,  168 => 86,  164 => 84,  158 => 81,  155 => 80,  153 => 79,  150 => 78,  144 => 76,  138 => 73,  133 => 72,  131 => 71,  127 => 70,  121 => 66,  119 => 63,  118 => 62,  117 => 61,  116 => 59,  115 => 58,  111 => 56,  94 => 55,  88 => 51,  86 => 46,  81 => 44,  77 => 42,  75 => 37,  71 => 35,  69 => 30,  65 => 28,  63 => 23,  59 => 21,  57 => 15,  53 => 13,  51 => 11,  50 => 6,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticPoint/Point/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Point\\_list.html.twig");
    }
}
