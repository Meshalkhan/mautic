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

/* @MauticTagManager/Tag/details.html.twig */
class __TwigTemplate_c7e1a4c328faaea0fa9a39293741e36c extends Template
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

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
            'actions' => [$this, 'block_actions'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        $context["customButtons"] = [];
        // line 1
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticTagManager/Tag/details.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "tagmanager";
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 4, $this->source); })()), "getTag", [], "method", false, false, false, 4), "html", null, true);
        yield " ";
        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 9
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@MauticCore/Helper/page_actions.html.twig", ["item" =>         // line 10
(isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 10, $this->source); })()), "nameGetter" => "getTag", "templateButtons" => ["edit" => CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 13, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 13), "delete" => CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 14, $this->source); })()), "isGranted", ["tagManager:tagManager:delete"], "method", false, false, false, 14), "close" => CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["security"]) || array_key_exists("security", $context) ? $context["security"] : (function () { throw new RuntimeError('Variable "security" does not exist.', 15, $this->source); })()), "isGranted", ["tagManager:tagManager:edit"], "method", false, false, false, 15)], "routeBase" => "tagmanager"]);
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "    <!-- start: box layout -->
    <div class=\"box-layout\">
        <!-- left section -->
        <div class=\"col-md-12 height-auto\">
            <div>
                <!-- page detail header -->
                <!-- sms detail collapseable toggler -->
                <div class=\"pr-md pl-md pt-lg pb-lg\">
                    <div class=\"box-layout\">

                        <div class=\"col-xs-10\">
                            <div class=\"text-white dark-sm mb-0\">";
        // line 33
        yield $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 33, $this->source); })()), "getDescription", [], "method", false, false, false, 33));
        yield "</div>

                        </div>

                    </div>
                </div>
                <div class=\"collapse\" id=\"sms-details\">
                    <div class=\"pr-md pl-md pb-md\">
                        <div class=\"panel shd-none mb-0\">
                            <table class=\"table table-hover mb-0\">
                                <tbody>
                                <tr>
                                    <td width=\"20%\"><span class=\"fw-b textTitle\">";
        // line 45
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.id", [], "messages");
        yield "</span></td>
                                    <td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 46, $this->source); })()), "getId", [], "method", false, false, false, 46), "html", null, true);
        yield "</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ sms detail collapseable toggler -->
            <div>
                <div class=\"hr-expand nm\">
                <span data-toggle=\"tooltip\" title=\"Detail\">
                    <a href=\"javascript:void(0)\" class=\"arrow text-muted collapsed\" data-toggle=\"collapse\"
                       data-target=\"#sms-details\">
                        <span class=\"caret\"></span>";
        // line 60
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.details", [], "messages");
        // line 61
        yield "                    </a>
                </span>
                </div>
            </div>
        </div>

        <!--/ right section -->
        <input name=\"entityId\" id=\"entityId\" type=\"hidden\" value=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 68, $this->source); })()), "getId", [], "method", false, false, false, 68));
        yield "\" />
    </div>
    <!--/ end: box layout -->

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticTagManager/Tag/details.html.twig";
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
        return array (  164 => 68,  155 => 61,  153 => 60,  136 => 46,  132 => 45,  117 => 33,  104 => 22,  97 => 21,  92 => 15,  91 => 14,  90 => 13,  89 => 10,  88 => 9,  81 => 8,  68 => 4,  57 => 3,  52 => 1,  50 => 6,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticTagManager/Tag/details.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticTagManagerBundle\\Resources\\views\\Tag\\details.html.twig");
    }
}
