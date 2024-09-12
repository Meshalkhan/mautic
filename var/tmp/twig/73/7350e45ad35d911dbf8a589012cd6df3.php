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

/* @MauticCore/Theme/list.html.twig */
class __TwigTemplate_3d1da2d7c80958f88904e1b3361ba3f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Theme/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Theme/index.html.twig", "@MauticCore/Theme/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if (twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 5, $this->source); })()))) {
            // line 6
            echo "        <div class=\"table-responsive\">
            <table class=\"table table-hover theme-list\" id=\"themeTable\">
                <thead>
                    <tr>
                        ";
            // line 10
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#themeTable", "langVar" => "core.theme", "routeBase" => "themes", "templateButtons" => ["delete" => twig_get_attribute($this->env, $this->source,             // line 16
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 16, $this->source); })()), "core:themes:delete", [], "array", false, false, false, 16)]]);
            // line 18
            echo "

                        ";
            // line 20
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.title"]);
            // line 22
            echo "

                        ";
            // line 24
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.author"]);
            // line 26
            echo "

                        ";
            // line 28
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["text" => "mautic.core.features"]);
            // line 30
            echo "

                    </tr>
                </thead>
                <tbody>
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 35, $this->source); })()));
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
            foreach ($context['_seq'] as $context["k"] => $context["item"]) {
                // line 36
                echo "                        ";
                $context["thumbnailUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . $context["k"]) . "/thumbnail.png"));
                // line 37
                echo "                        ";
                $context["hasThumbnail"] = $this->env->getTest('file')->getCallable()((twig_get_attribute($this->env, $this->source, $context["item"], "dir", [], "array", false, false, false, 37) . "/thumbnail.png"));
                // line 38
                echo "                        ";
                $context["visibilityButton"] = [];
                // line 39
                echo "                        ";
                $context["visibilityCss"] = "";
                // line 40
                echo "
                        ";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["item"], "visibility", [], "any", true, true, false, 41)) {
                    // line 42
                    echo "                            ";
                    $context["btnText"] = "mautic.core.theme.hide";
                    // line 43
                    echo "                            ";
                    $context["iconClass"] = "ri-eye-off-line";
                    // line 44
                    echo "                            ";
                    $context["message"] = "mautic.core.theme.form.confirm.hide";
                    // line 45
                    echo "                            ";
                    $context["confirmBtnClass"] = "";
                    // line 46
                    echo "
                            ";
                    // line 47
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "visibility", [], "any", false, true, false, 47), "hidden", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "visibility", [], "any", false, true, false, 47), "hidden", [], "any", false, false, false, 47), false)) : (false))) {
                        // line 48
                        echo "                                ";
                        $context["btnText"] = "mautic.core.theme.unhide";
                        // line 49
                        echo "                                ";
                        $context["iconClass"] = "ri-eye-line";
                        // line 50
                        echo "                                ";
                        $context["message"] = "mautic.core.theme.form.confirm.unhide";
                        // line 51
                        echo "                                ";
                        $context["confirmBtnClass"] = "btn btn-success";
                        // line 52
                        echo "                                ";
                        $context["visibilityCss"] = "disabled-row";
                        // line 53
                        echo "                            ";
                    }
                    // line 54
                    echo "
                            ";
                    // line 55
                    $context["visibilityButton"] = ["attr" => ["data-toggle" => "confirmation", "href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_themes_action", ["objectAction" => "visibility", "objectId" =>                     // line 58
$context["k"]]), "data-message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 59
(isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 59, $this->source); })()), ["%theme%" => (((twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 59) . " (") . $context["k"]) . ")")]), "data-confirm-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 60
(isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 60, $this->source); })())), "data-confirm-callback" => "executeAction", "data-cancel-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "data-confirm-btn-class" =>                     // line 63
(isset($context["confirmBtnClass"]) || array_key_exists("confirmBtnClass", $context) ? $context["confirmBtnClass"] : (function () { throw new RuntimeError('Variable "confirmBtnClass" does not exist.', 63, $this->source); })())], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(                    // line 65
(isset($context["btnText"]) || array_key_exists("btnText", $context) ? $context["btnText"] : (function () { throw new RuntimeError('Variable "btnText" does not exist.', 65, $this->source); })())), "iconClass" =>                     // line 66
(isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 66, $this->source); })()), "priority" =>  -1];
                    // line 69
                    echo "                        ";
                }
                // line 70
                echo "
                        <tr>
                            <td>
                                ";
                // line 73
                $context["item"] = twig_array_merge($context["item"], ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "any", false, false, false, 73)]);
                // line 74
                echo "                                ";
                $context["previewButtonSettings"] = ["attr" => ["data-toggle" => "modal", "data-target" => ("#theme-" .                 // line 77
$context["k"])], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.asset.asset.preview"), "iconClass" => "ri-image-line"];
                // line 82
                echo "                                ";
                $context["previewButton"] = (((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 82, $this->source); })())) ? ((isset($context["previewButtonSettings"]) || array_key_exists("previewButtonSettings", $context) ? $context["previewButtonSettings"] : (function () { throw new RuntimeError('Variable "previewButtonSettings" does not exist.', 82, $this->source); })())) : ([]));
                // line 83
                echo "                                ";
                $context["deleteButton"] = ["delete" => twig_get_attribute($this->env, $this->source,                 // line 84
(isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 84, $this->source); })()), "core:themes:delete", [], "array", false, false, false, 84)];
                // line 86
                echo "                                ";
                $context["templateButtons"] = ((!twig_in_filter($context["k"], (isset($context["defaultThemes"]) || array_key_exists("defaultThemes", $context) ? $context["defaultThemes"] : (function () { throw new RuntimeError('Variable "defaultThemes" does not exist.', 86, $this->source); })()))) ? ((isset($context["deleteButton"]) || array_key_exists("deleteButton", $context) ? $context["deleteButton"] : (function () { throw new RuntimeError('Variable "deleteButton" does not exist.', 86, $this->source); })())) : ([]));
                // line 87
                echo "
                                ";
                // line 88
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 90
$context["item"], "templateButtons" =>                 // line 91
(isset($context["templateButtons"]) || array_key_exists("templateButtons", $context) ? $context["templateButtons"] : (function () { throw new RuntimeError('Variable "templateButtons" does not exist.', 91, $this->source); })()), "routeBase" => "themes", "langVar" => "core.theme", "customButtons" => [["attr" => ["href" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_themes_action", ["objectAction" => "download", "objectId" =>                 // line 99
$context["k"]]), "data-toggle" => "0"], "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.download"), "iconClass" => "ri-download-line"],                 // line 106
(isset($context["previewButton"]) || array_key_exists("previewButton", $context) ? $context["previewButton"] : (function () { throw new RuntimeError('Variable "previewButton" does not exist.', 106, $this->source); })()),                 // line 107
(isset($context["visibilityButton"]) || array_key_exists("visibilityButton", $context) ? $context["visibilityButton"] : (function () { throw new RuntimeError('Variable "visibilityButton" does not exist.', 107, $this->source); })())]]);
                // line 110
                echo "

                                ";
                // line 112
                if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 112, $this->source); })())) {
                    // line 113
                    echo "                                <!-- Modal -->
                                <div class=\"modal fade\" id=\"theme-";
                    // line 114
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\">
                                    <div class=\"modal-dialog\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header\">
                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                    <span aria-hidden=\"true\">&times;</span></button>
                                                <h4 class=\"modal-title\" id=\"";
                    // line 120
                    echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 120));
                    echo "</h4>
                                            </div>
                                            <div class=\"modal-body\">
                                                <div style=\"background-image: url(";
                    // line 123
                    echo twig_escape_filter($this->env, (isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 123, $this->source); })()), "html", null, true);
                    echo ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 600px\"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
                }
                // line 129
                echo "                            </td>
                            <td class=\"";
                // line 130
                echo twig_escape_filter($this->env, (isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 130, $this->source); })()), "html", null, true);
                echo "\">
                                <div>
                                    ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "array", false, false, false, 132));
                echo " (";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "key", [], "array", false, false, false, 132));
                echo ")
                                </div>
                            </td>
                            <td class=\"";
                // line 135
                echo twig_escape_filter($this->env, (isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 135, $this->source); })()), "html", null, true);
                echo "\">
                                <div>
                                    ";
                // line 137
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 137), "authorUrl", [], "array", true, true, false, 137) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 137), "authorUrl", [], "array", false, false, false, 137))) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 137), "author", [], "array", true, true, false, 137))) {
                    // line 138
                    echo "                                        <a href=\"";
                    echo twig_escape_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::url(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 138), "authorUrl", [], "array", false, false, false, 138)), "html", null, true);
                    echo "\" target=\"_blank\">
                                            ";
                    // line 139
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 139), "author", [], "array", false, false, false, 139));
                    echo "
                                        </a>
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 141
$context["item"], "config", [], "array", false, true, false, 141), "author", [], "array", true, true, false, 141) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 141), "author", [], "array", false, false, false, 141)))) {
                    // line 142
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 142), "author", [], "array", false, false, false, 142));
                    echo "
                                    ";
                }
                // line 144
                echo "                                </div>
                            </td>
                            <td class=\"visible-md visible-lg ";
                // line 146
                echo twig_escape_filter($this->env, (isset($context["visibilityCss"]) || array_key_exists("visibilityCss", $context) ? $context["visibilityCss"] : (function () { throw new RuntimeError('Variable "visibilityCss" does not exist.', 146, $this->source); })()), "html", null, true);
                echo "\">
                                    ";
                // line 147
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 147), "builder", [], "array", false, false, false, 147));
                foreach ($context['_seq'] as $context["_key"] => $context["builder"]) {
                    // line 148
                    echo "                                    <span style=\"white-space: nowrap;\">
                                        <span class=\"label label-primary pa-4\">";
                    // line 149
                    echo twig_escape_filter($this->env, $context["builder"], "html", null, true);
                    echo "</span>
                                    </span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['builder'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 152
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, true, false, 152), "features", [], "array", true, true, false, 152) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 152), "features", [], "array", false, false, false, 152)))) {
                    // line 153
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "config", [], "array", false, false, false, 153), "features", [], "array", false, false, false, 153));
                    foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                        // line 154
                        echo "                                        <span style=\"white-space: nowrap;\">
                                            <span class=\"label label-default pa-4\">
                                                ";
                        // line 156
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(("mautic.core.theme.feature." . twig_escape_filter($this->env, $context["feature"]))), "html", null, true);
                        echo "
                                            </span>
                                        </span>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 160
                    echo "                                ";
                }
                // line 161
                echo "                            </td>
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
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "                </tbody>
            </table>
        </div>
    ";
        } else {
            // line 168
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.theme.noresults.tip"]);
            // line 171
            echo "
    ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Theme/list.html.twig";
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
        return array (  355 => 171,  352 => 168,  346 => 164,  330 => 161,  327 => 160,  317 => 156,  313 => 154,  308 => 153,  305 => 152,  296 => 149,  293 => 148,  289 => 147,  285 => 146,  281 => 144,  275 => 142,  273 => 141,  268 => 139,  263 => 138,  261 => 137,  256 => 135,  248 => 132,  243 => 130,  240 => 129,  231 => 123,  223 => 120,  212 => 114,  209 => 113,  207 => 112,  203 => 110,  201 => 107,  200 => 106,  199 => 99,  198 => 91,  197 => 90,  196 => 88,  193 => 87,  190 => 86,  188 => 84,  186 => 83,  183 => 82,  181 => 77,  179 => 74,  177 => 73,  172 => 70,  169 => 69,  167 => 66,  166 => 65,  165 => 63,  164 => 60,  163 => 59,  162 => 58,  161 => 55,  158 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  143 => 49,  140 => 48,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  121 => 41,  118 => 40,  115 => 39,  112 => 38,  109 => 37,  106 => 36,  89 => 35,  82 => 30,  80 => 28,  76 => 26,  74 => 24,  70 => 22,  68 => 20,  64 => 18,  62 => 16,  61 => 10,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Theme/list.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Theme\\list.html.twig");
    }
}
