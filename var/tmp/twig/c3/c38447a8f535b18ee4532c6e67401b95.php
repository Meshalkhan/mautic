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

/* @MauticUser/Profile/index.html.twig */
class __TwigTemplate_79d73223a0a9635bde08fb96dbd7caf7 extends Template
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
            'headerTitle' => [$this, 'block_headerTitle'],
            'mauticContent' => [$this, 'block_mauticContent'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/Profile/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_headerTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_mauticContent(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "user";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 7
        yield "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 13, $this->source); })()), "getId", [], "method", false, false, false, 13)) {
            // line 14
            yield "            <div class=\"media\">
                <div class=\"pull-left\">
                    <img class=\"img-rounded img-bordered media-object\" src=\"";
            // line 16
            yield $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 16, $this->source); })()), "getEmail", [], "method", false, false, false, 16));
            yield "\" alt=\"\" width=\"65px\">
                </div>
                <div class=\"media-body\">
                    <h4>";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19), "html", null, true);
            yield "</h4>
                    <h5>";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 20, $this->source); })()), "getPosition", [], "method", false, false, false, 20), "html", null, true);
            yield "</h5>
                </div>
            </div>
            <hr />
            ";
        }
        // line 25
        yield "
            <ul class=\"list-group list-group-tabs\">
                <li class=\"list-group-item active\">
                    <a href=\"#profile\" class=\"steps\" data-toggle=\"tab\">
                        ";
        // line 29
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.details", [], "messages");
        // line 30
        yield "                    </a>
                </li>

                ";
        // line 33
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "apiAccess", [], "array", false, false, false, 33)) {
            // line 34
            yield "                <li class=\"list-group-item\">
                    <a href=\"#clients\" class=\"steps\" data-toggle=\"tab\">
                        ";
            // line 36
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.authorizedclients", [], "messages");
            // line 37
            yield "                    </a>
                </li>
                ";
        }
        // line 40
        yield "            </ul>
        </div>
    </div>
    <!--/ step container -->

    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-l\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade in active bdr-rds-0 bdr-w-0\" id=\"profile\">
                ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 49, $this->source); })()), 'form_start');
        yield "
                <div class=\"pa-md bg-light-xs bdr-b\">
                    <h4 class=\"fw-sb\">";
        // line 51
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.details", [], "messages");
        yield "</h4>
                </div>
                <div class=\"pa-md\">
                    <div class=\"col-md-6\">
                        <h3 id=\"personal-info\" class=\"pt-20\">";
        // line 55
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.get_to_know_you", [], "messages");
        yield "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 56
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.personalize.interface.helper", [], "messages");
        yield "</div>
                        ";
        // line 57
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "editName", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "firstName", [], "any", false, false, false, 57), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "firstName_unbound", [], "any", false, false, false, 57), 'row')));
        yield "
                        ";
        // line 58
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "editName", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 58, $this->source); })()), "lastName", [], "any", false, false, false, 58), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 58, $this->source); })()), "lastName_unbound", [], "any", false, false, false, 58), 'row')));
        yield "
                        ";
        // line 59
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 59, $this->source); })()), "editPosition", [], "any", false, false, false, 59)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 59, $this->source); })()), "position", [], "any", false, false, false, 59), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 59, $this->source); })()), "position_unbound", [], "any", false, false, false, 59), 'row')));
        yield "
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 60, $this->source); })()), "signature", [], "any", false, false, false, 60), 'row');
        yield "

                        <h3 id=\"locale\" class=\"pt-20\">";
        // line 62
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.locale", [], "messages");
        yield "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 63
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.region.preferences.helper", [], "messages");
        yield "</div>
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 64, $this->source); })()), "timezone", [], "any", false, false, false, 64), 'row');
        yield "
                        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 65, $this->source); })()), "locale", [], "any", false, false, false, 65), 'row');
        yield "
                    </div>
                    <div class=\"col-md-6\">
                        <h3 id=\"security\" class=\"pt-20\">";
        // line 68
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.account_data_security", [], "messages");
        yield "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 69
        yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.account.security.helper", [], "messages");
        yield "</div>
                        ";
        // line 70
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "editUsername", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "username_unbound", [], "any", false, false, false, 70), 'row')));
        yield "
                        ";
        // line 71
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "editEmail", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "email_unbound", [], "any", false, false, false, 71), 'row')));
        yield "
                        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), "password", [], "any", false, false, false, 72), 'row');
        yield "
                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), "confirm", [], "any", false, false, false, 73), 'row');
        yield "
                    </div>
                </div>
                ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 76, $this->source); })()), 'form_end');
        yield "
            </div>

            ";
        // line 79
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["permissions"] ?? null), "apiAccess", [], "any", true, true, false, 79) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 79, $this->source); })()), "apiAccess", [], "any", false, false, false, 79))) {
            // line 80
            yield "                <div class=\"tab-pane fade bdr-rds-0 bdr-w-0\" id=\"clients\">
                    <div class=\"pa-md bg-light-xs bdr-b\">
                        <h4 class=\"fw-sb\">";
            // line 82
            yield $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.authorizedclients", [], "messages");
            yield "</h4>
                    </div>
                    <div class=\"pa-md\">
                        ";
            // line 85
            yield (isset($context["authorizedClients"]) || array_key_exists("authorizedClients", $context) ? $context["authorizedClients"] : (function () { throw new RuntimeError('Variable "authorizedClients" does not exist.', 85, $this->source); })());
            yield "
                    </div>
                </div>
            ";
        }
        // line 89
        yield "        </div>
    </div>
    <!--/ end: container -->
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@MauticUser/Profile/index.html.twig";
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
        return array (  257 => 89,  250 => 85,  244 => 82,  240 => 80,  238 => 79,  232 => 76,  226 => 73,  222 => 72,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  200 => 65,  196 => 64,  192 => 63,  188 => 62,  183 => 60,  179 => 59,  175 => 58,  171 => 57,  167 => 56,  163 => 55,  156 => 51,  151 => 49,  140 => 40,  135 => 37,  133 => 36,  129 => 34,  127 => 33,  122 => 30,  120 => 29,  114 => 25,  106 => 20,  102 => 19,  96 => 16,  92 => 14,  90 => 13,  82 => 7,  75 => 6,  64 => 4,  53 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@MauticUser/Profile/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Profile\\index.html.twig");
    }
}
