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

/* @MauticCore/Helper/theme_select.html.twig */
class __TwigTemplate_455b75c3c04710c3c7a49187be475498 extends Template
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
        // line 7
        $context["codeMode"] = "mautic_code_mode";
        // line 8
        $context["isCodeMode"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 8, $this->source); })()) == (isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 8, $this->source); })()));
        // line 9
        if ((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 9, $this->source); })())) {
            // line 10
            yield "  <div class=\"row\">
      <div class=\"col-md-3 theme-list\">
          <div class=\"panel panel-default ";
            // line 12
            if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 12, $this->source); })())) {
                yield "theme-selected";
            }
            yield "\">
              <div class=\"panel-body text-center\">
                  <h3>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.code.mode"), "html", null, true);
            yield "</h3>
                  <div class=\"panel-body text-center\" style=\"height: 250px\">
                      <i class=\"fa fa-code fa-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                  </div>
                  <a href=\"#\" type=\"button\" data-theme=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["codeMode"]) || array_key_exists("codeMode", $context) ? $context["codeMode"] : (function () { throw new RuntimeError('Variable "codeMode" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\" class=\"select-theme-link btn btn-default ";
            if ((isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 18, $this->source); })())) {
                yield "hide";
            }
            yield "\" onclick=\"mQuery('#dynamic-content-tab').removeClass('hidden')\">
                      Select
                  </a>
                  <button type=\"button\" class=\"select-theme-selected btn btn-default ";
            // line 21
            if ( !(isset($context["isCodeMode"]) || array_key_exists("isCodeMode", $context) ? $context["isCodeMode"] : (function () { throw new RuntimeError('Variable "isCodeMode" does not exist.', 21, $this->source); })())) {
                yield "hide";
            }
            yield "\" disabled=\"disabled\">
                      Selected
                  </button>
              </div>
          </div>
      </div>
      ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["themeKey"] => $context["themeInfo"]) {
                // line 28
                yield "          ";
                $context["isSelected"] = ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 28, $this->source); })()) === $context["themeKey"]);
                // line 29
                yield "          ";
                if ((( !(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 29, $this->source); })()) ||  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, true, false, 29), "features", [], "any", true, true, false, 29)) || CoreExtension::inFilter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 29, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "config", [], "any", false, false, false, 29), "features", [], "any", false, false, false, 29)))) {
                    // line 30
                    yield "            ";
                    if ($this->env->getTest('file')->getCallable()((((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 30) . "/thumbnail_") . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 30, $this->source); })())) . ".png"))) {
                        // line 31
                        yield "                ";
                        [$context["thumbnailName"], $context["hasThumbnail"]] =                         [(("thumbnail_" . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 31, $this->source); })())) . ".png"), true];
                        // line 32
                        yield "            ";
                    } else {
                        // line 33
                        yield "                ";
                        $context["thumbnailName"] = "thumbnail.png";
                        // line 34
                        yield "                ";
                        $context["hasThumbnail"] = $this->env->getFunction('is_file')->getCallable()(((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "dir", [], "any", false, false, false, 34) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 34, $this->source); })())));
                        // line 35
                        yield "            ";
                    }
                    // line 36
                    yield "            ";
                    $context["thumbnailUrl"] = $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl(((((CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "themesLocalDir", [], "any", false, false, false, 36) . "/") . $context["themeKey"]) . "/") . (isset($context["thumbnailName"]) || array_key_exists("thumbnailName", $context) ? $context["thumbnailName"] : (function () { throw new RuntimeError('Variable "thumbnailName" does not exist.', 36, $this->source); })())));
                    // line 37
                    yield "            <div class=\"col-md-3 theme-list ";
                    yield ((Twig\Extension\CoreExtension::testEmpty(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 37), "hidden", [], "any", true, true, false, 37)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "visibility", [], "any", false, true, false, 37), "hidden", [], "any", false, false, false, 37), false)) : (false)))) ? ("") : ("hide"));
                    yield "\">
                <div class=\"panel panel-default ";
                    // line 38
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 38, $this->source); })())) {
                        yield "theme-selected";
                    }
                    yield "\">
                    <div class=\"panel-body text-center\">
                        <h3>";
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 40), "html", null, true);
                    yield "</h3>
                        ";
                    // line 41
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 41, $this->source); })())) {
                        // line 42
                        yield "                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#theme-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">
                                <div style=\"background-image: url(";
                        // line 43
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 43, $this->source); })()), "html", null, true);
                        yield ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 250px\"></div>
                            </a>
                        ";
                    } else {
                        // line 46
                        yield "                            <div class=\"panel-body text-center\" style=\"height: 250px\">
                                <i class=\"fa fa-file-image-o fa-5x text-muted\" aria-hidden=\"true\" style=\"padding-top: 75px; color: #E4E4E4;\"></i>
                            </div>
                        ";
                    }
                    // line 50
                    yield "                        <a href=\"#\" type=\"button\" data-theme=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                    yield "\" class=\"select-theme-link btn btn-default ";
                    if ((isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 50, $this->source); })())) {
                        yield "hide";
                    }
                    yield "\" onclick=\"mQuery('#dynamic-content-tab').addClass('hidden')\">
                            Select
                        </a>
                        <button type=\"button\" class=\"select-theme-selected btn btn-default ";
                    // line 53
                    if ( !(isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 53, $this->source); })())) {
                        yield "hide";
                    }
                    yield "\" disabled=\"disabled\">
                            Selected
                        </button>
                    </div>
                </div>
                ";
                    // line 58
                    if ((isset($context["hasThumbnail"]) || array_key_exists("hasThumbnail", $context) ? $context["hasThumbnail"] : (function () { throw new RuntimeError('Variable "hasThumbnail" does not exist.', 58, $this->source); })())) {
                        // line 59
                        yield "                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"theme-";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">
                        <div class=\"modal-dialog\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                                    <h4 class=\"modal-title\" id=\"";
                        // line 65
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["themeKey"], "html", null, true);
                        yield "\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["themeInfo"], "name", [], "any", false, false, false, 65), "html", null, true);
                        yield "</h4>
                                </div>
                                <div class=\"modal-body\">
                                    <div style=\"background-image: url(";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["thumbnailUrl"]) || array_key_exists("thumbnailUrl", $context) ? $context["thumbnailUrl"] : (function () { throw new RuntimeError('Variable "thumbnailUrl" does not exist.', 68, $this->source); })()), "html", null, true);
                        yield ");background-repeat:no-repeat;background-size:contain; background-position:center; width: 100%; height: 600px\"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
                    }
                    // line 74
                    yield "            </div>
          ";
                }
                // line 76
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['themeKey'], $context['themeInfo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "      <div class=\"clearfix\"></div>
  </div>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticCore/Helper/theme_select.html.twig";
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
        return array (  216 => 77,  210 => 76,  206 => 74,  197 => 68,  189 => 65,  179 => 60,  176 => 59,  174 => 58,  164 => 53,  153 => 50,  147 => 46,  141 => 43,  136 => 42,  134 => 41,  130 => 40,  123 => 38,  118 => 37,  115 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  94 => 29,  91 => 28,  87 => 27,  76 => 21,  66 => 18,  59 => 14,  52 => 12,  48 => 10,  46 => 9,  44 => 8,  42 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticCore/Helper/theme_select.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Helper\\theme_select.html.twig");
    }
}
