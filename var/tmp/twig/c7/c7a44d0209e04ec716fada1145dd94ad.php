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

/* @MauticTagManager/Tag/list.html.twig */
class __TwigTemplate_e5ab904352d9e3f41db75d05f79c2170 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticTagManager/Tag/list.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 9
        if ( !array_key_exists("nameGetter", $context)) {
            // line 10
            $context["nameGetter"] = "getTag";
        }
        // line 13
        $context["listCommand"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.tag.searchcommand.list");
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.tagmanager.tag.header.index", [], "messages");
    }

    // line 6
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "tags";
    }

    // line 15
    public function block_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo twig_include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["templateButtons" => ["new" => twig_get_attribute($this->env, $this->source,         // line 20
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 20, $this->source); })()), "isGranted", ["tagManager:tagManager:create"], "method", false, false, false, 20)], "routeBase" => "tagmanager", "langVar" => "tag.list"]);
    }

    // line 28
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 29
        echo "    <div class=\"panel panel-default bdr-t-wdh-0\">
        <div class=\"page-list\">";
        // line 31
        echo twig_include($this->env, $context, "@MauticCore/Helper/list_toolbar.html.twig", ["searchValue" =>         // line 32
(isset($context["searchValue"]) || array_key_exists("searchValue", $context) ? $context["searchValue"] : (function () { throw new RuntimeError('Variable "searchValue" does not exist.', 32, $this->source); })()), "searchHelp" => "mautic.lead.list.help.searchcommands", "action" =>         // line 34
(isset($context["currentRoute"]) || array_key_exists("currentRoute", $context) ? $context["currentRoute"] : (function () { throw new RuntimeError('Variable "currentRoute" does not exist.', 34, $this->source); })())]);
        // line 36
        if ((array_key_exists("items", $context) &&  !twig_test_empty((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 36, $this->source); })())))) {
            // line 37
            echo "                <div class=\"table-responsive\">
                    <table class=\"table table-hover\" id=\"tagsTable\">
                        <thead>
                        <tr>
                            ";
            // line 41
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#tagsTable", "langVar" => "tagmanager.tag", "routeBase" => "tagmanager", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 49
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 49, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 49)]]);
            // line 51
            echo "
                            ";
            // line 52
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.tag", "text" => "mautic.core.name", "class" => "col-tag-name"]);
            // line 60
            echo "

                            ";
            // line 62
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "text" => "mautic.lead.list.thead.leadcount", "class" => "visible-md visible-lg col-tag-leadcount"]);
            // line 69
            echo "

                            ";
            // line 71
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "tags", "orderBy" => "lt.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-tag-id"]);
            // line 79
            echo "
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 83, $this->source); })()));
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
                // line 84
                echo "                            <tr>
                                <td>";
                // line 86
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 87
$context["item"], "templateButtons" => ["edit" => twig_get_attribute($this->env, $this->source,                 // line 89
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 89, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 89), "delete" => twig_get_attribute($this->env, $this->source,                 // line 90
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 90, $this->source); })()), "tagManager:tagManager:delete", [], "array", false, false, false, 90)], "routeBase" => "tagmanager", "langVar" => "tagmanager.tag", "nameGetter" =>                 // line 94
(isset($context["nameGetter"]) || array_key_exists("nameGetter", $context) ? $context["nameGetter"] : (function () { throw new RuntimeError('Variable "nameGetter" does not exist.', 94, $this->source); })()), "custom" => [["attr" => ["data-toggle" => "ajax", "href" => ""], "icon" => "ri-team-line", "label" => "mautic.lead.list.view_contacts"]]]);
                // line 106
                echo "</td>
                                <td>
                                    <div>
                                        ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 109, $this->source); })()), "tagManager:tagManager:edit", [], "array", false, false, false, 109)) {
                    // line 110
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source,                     // line 112
$context["item"], "getId", [], "method", false, false, false, 112)]), "html", null, true);
                    // line 113
                    echo "\" data-toggle=\"ajax\">
                                                ";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 114), "html", null, true);
                    echo "
                                            </a>
                                        ";
                } else {
                    // line 117
                    echo "                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getTag", [], "method", false, false, false, 117), "html", null, true);
                    echo "
                                        ";
                }
                // line 119
                echo "                                    </div>
                                    ";
                // line 120
                $context["description"] = twig_get_attribute($this->env, $this->source, $context["item"], "getDescription", [], "method", false, false, false, 120);
                // line 121
                echo "                                    ";
                if ((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 121, $this->source); })())) {
                    // line 122
                    echo "                                        <div class=\"text-muted mt-4\">
                                            <small>";
                    // line 123
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 123, $this->source); })()));
                    echo "</small>
                                        </div>
                                    ";
                }
                // line 126
                echo "                                </td>
                                <td class=\"visible-md visible-lg\">
                                    <a class=\"label label-primary\" href=\"";
                // line 128
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_contact_index", ["search" => ((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.tagmanager.lead.searchcommand.list") . ":\"") . twig_get_attribute($this->env, $this->source,                 // line 129
$context["item"], "getTag", [], "method", false, false, false, 129)) . "\"")]), "html", null, true);
                // line 130
                echo "\" data-toggle=\"ajax\"";
                echo (((0 == twig_get_attribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 130, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 130), [], "array", false, false, false, 130))) ? ("disabled=disabled") : (""));
                echo ">";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.lead.list.viewleads_count", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["tagsCount"]) || array_key_exists("tagsCount", $context) ? $context["tagsCount"] : (function () { throw new RuntimeError('Variable "tagsCount" does not exist.', 131, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 131), [], "array", false, false, false, 131)]), "html", null, true);
                // line 132
                echo "</a>
                                </td>
                                <td class=\"visible-md visible-lg\">";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getId", [], "method", false, false, false, 134), "html", null, true);
                echo "</td>
                            </tr>
                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                        </tbody>
                    </table>
                    <div class=\"panel-footer\">";
            // line 140
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 141
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 141, $this->source); })())), "page" =>             // line 142
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 142, $this->source); })()), "limit" =>             // line 143
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tagmanager_index"), "sessionVar" => "tagmanager"]);
            // line 147
            echo "</div>
                </div>
            ";
        } else {
            // line 150
            echo "                ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig");
            echo "
            ";
        }
        // line 152
        echo "        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticTagManager/Tag/list.html.twig";
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
        return array (  251 => 152,  245 => 150,  240 => 147,  238 => 143,  237 => 142,  236 => 141,  235 => 140,  231 => 137,  214 => 134,  210 => 132,  208 => 131,  204 => 130,  202 => 129,  201 => 128,  197 => 126,  191 => 123,  188 => 122,  185 => 121,  183 => 120,  180 => 119,  174 => 117,  168 => 114,  165 => 113,  163 => 112,  161 => 110,  159 => 109,  154 => 106,  152 => 94,  151 => 90,  150 => 89,  149 => 87,  148 => 86,  145 => 84,  128 => 83,  122 => 79,  120 => 71,  116 => 69,  114 => 62,  110 => 60,  108 => 52,  105 => 51,  103 => 49,  102 => 41,  96 => 37,  94 => 36,  92 => 34,  91 => 32,  90 => 31,  87 => 29,  83 => 28,  79 => 20,  78 => 16,  74 => 15,  67 => 6,  60 => 5,  56 => 4,  54 => 13,  51 => 10,  49 => 9,  47 => 2,  45 => 1,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticTagManager/Tag/list.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticTagManagerBundle\\Resources\\views\\Tag\\list.html.twig");
    }
}
