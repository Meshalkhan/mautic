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

/* @MauticCore/Helper/theme_select.html.twig */
class __TwigTemplate_11c5726cb1256791751e72120c5a14d6 extends Template
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
        // line 7
        $context["codeMode"] = "mautic_code_mode";
        // line 8
        $context["isCodeMode"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 8, $this->source); })()) == (isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 8, $this->source); })()));
        // line 9
        if ((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "  <div class=\"row\">
      <div class=\"col-md-3 theme-list\">
          <div class=\"panel panel-default ";
            // line 12
            if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 12, $this->source); })())) {
                echo "theme-selected";
            }
            echo "\">
              <div class=\"panel-body text-center\">
                  <h3>";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode"), "html", null, true);
            echo "</h3>
                  <div class=\"panel-body text-center\" style=\"height: 250px\">
                      <i class=\"fa fa-code fa-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                  </div>
                  <a href=\"#\" type=\"button\" data-theme=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 18, $this->source); })()), "html", null, true);
            echo "\" class=\"select-theme-link btn btn-default ";
            if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 18, $this->source); })())) {
                echo "hide";
            }
            echo "\" onclick=\"mQuery('#dynamic-content-tab').removeClass('hidden')\">
                      Select
                  </a>
                  <button type=\"button\" class=\"select-theme-selected btn btn-default ";
            // line 21
            if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 21, $this->source); })())) {
                echo "hide";
            }
            echo "\" disabled=\"disabled\">
                      Selected
                  </button>
              </div>
          </div>
      </div>
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["themeKey"] => $context["themeInfo"]) {
                // line 28
                echo "          ";
                $context["isSelected"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 28, $this->source); })()) === $context["themeKey"]);
                // line 29
                echo "          ";
                if ((( !(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 29, $this->source); })()) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, true, false, 29), "features", [], "any", true, true, false, 29)) || twig_in_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, false, false, 29), "features", [], "any", false, false, false, 29)))) {
                    // line 30
                    echo "            ";
                    if ($this->env->getTest('file')->getCallable()((((twig_get_attribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 30) . "/thumbnail_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })())) . ".png"))) {
                        // line 31
                        echo "                ";
                        list($context["thumbnailName"], $context["hasThumbnail"]) =                         [(("thumbnail_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 31, $this->source); })())) . ".png"), true];
                        // line 32
                        echo "            ";
                    } else {
                        // line 33
                        echo "                ";
                        $context["thumbnailName"] = "thumbnail.png";
                        // line 34
                        echo "                ";
                        $context["hasThumbnail"] = $this->env->getFunction('is_file')->getCallable()(((twig_get_attribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 34) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 34, $this->source); })())));
                        // line 35
                        echo "            ";
                    }
                    // line 36
                    echo "            ";
                    $context["thumbnailUrl"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(((((twig_get_attribute($this->env, $this->source, $context["themeInfo"], "themesLocalDir", [], "any", false, false, false, 36) . "/") . $context["themeKey"]) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 36, $this->source); })())));
                    // line 37
                    echo "            <div class=\"col-md-3 theme-list ";
                    echo ((twig_test_empty(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 37), "hidden", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 37), "hidden", [], "any", false, false, false, 37), false)) : (false)))) ? ("") : ("hide"));
                    echo "\">
                <div class=\"panel panel-default ";
                    // line 38
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 38, $this->source); })())) {
                        echo "theme-selected";
                    }
                    echo "\">
                    <div class=\"panel-body text-center\">
                        <h3>";
                    // line 40
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 40), "html", null, true);
                    echo "</h3>
                        ";
                    // line 41
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 41, $this->source); })())) {
                        // line 42
                        echo "                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#theme-";
                        echo twig_escape_filter($this->env, $context["themeKey"], "html", null, true);
                        echo "\">
                                <div style=\"background-image: url(";
                        // line 43
                        echo twig_escape_filter($this->env, (isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 43, $this->source); })()), "html", null, true);
                        echo ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 250px\"></div>
                            </a>
                        ";
                    } else {
                        // line 46
                        echo "                            <div class=\"panel-body text-center\" style=\"height: 250px\">
                                <i class=\"fa fa-file-image-o fa-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                            </div>
                        ";
                    }
                    // line 50
                    echo "                        <a href=\"#\" type=\"button\" data-theme=\"";
                    echo twig_escape_filter($this->env, $context["themeKey"], "html", null, true);
                    echo "\" class=\"select-theme-link btn btn-default ";
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 50, $this->source); })())) {
                        echo "hide";
                    }
                    echo "\" onclick=\"mQuery('#dynamic-content-tab').addClass('hidden')\">
                            Select
                        </a>
                        <button type=\"button\" class=\"select-theme-selected btn btn-default ";
                    // line 53
                    if ( !(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 53, $this->source); })())) {
                        echo "hide";
                    }
                    echo "\" disabled=\"disabled\">
                            Selected
                        </button>
                    </div>
                </div>
                ";
                    // line 58
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 58, $this->source); })())) {
                        // line 59
                        echo "                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"theme-";
                        // line 60
                        echo twig_escape_filter($this->env, $context["themeKey"], "html", null, true);
                        echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                        echo twig_escape_filter($this->env, $context["themeKey"], "html", null, true);
                        echo "\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $context["themeKey"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 65), "html", null, true);
                        echo "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div style=\"background-image: url(";
                        // line 68
                        echo twig_escape_filter($this->env, (isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 68, $this->source); })()), "html", null, true);
                        echo ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 600px\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                    }
                    // line 74
                    echo "            </div>
          ";
                }
                // line 76
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['themeKey'], $context['themeInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "      <div class=\"clearfix\"></div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Helper/theme_select.html.twig";
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
        return array (  211 => 77,  205 => 76,  201 => 74,  192 => 68,  184 => 65,  174 => 60,  171 => 59,  169 => 58,  159 => 53,  148 => 50,  142 => 46,  136 => 43,  131 => 42,  129 => 41,  125 => 40,  118 => 38,  113 => 37,  110 => 36,  107 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  92 => 30,  89 => 29,  86 => 28,  82 => 27,  71 => 21,  61 => 18,  54 => 14,  47 => 12,  43 => 10,  41 => 9,  39 => 8,  37 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Helper/theme_select.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\theme_select.html.twig");
    }
}
