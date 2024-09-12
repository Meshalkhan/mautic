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

/* @MauticUser/Profile/index.html.twig */
class __TwigTemplate_cda1fa883bbc06240d15478350783437 extends Template
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
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticUser/Profile/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.settings", [], "messages");
    }

    // line 4
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "user";
    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<!-- start: box layout -->
<div class=\"box-layout\">
    <!-- step container -->
    <div class=\"col-md-3 height-auto\">
        <div class=\"pr-lg pl-lg pt-md pb-md\">
            ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 13, $this->source); })()), "getId", [], "method", false, false, false, 13)) {
            // line 14
            echo "            <div class=\"media\">
                <div class=\"pull-left\">
                    <img class=\"img-rounded img-bordered media-object\" src=\"";
            // line 16
            echo $this->extensions['Mautic\CoreBundle\Twig\Extension\GravatarExtension']->getImage(twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 16, $this->source); })()), "getEmail", [], "method", false, false, false, 16));
            echo "\" alt=\"\" width=\"65px\">
                </div>
                <div class=\"media-body\">
                    <h4>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19), "html", null, true);
            echo "</h4>
                    <h5>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["me"]) || array_key_exists("me", $context) ? $context["me"] : (function () { throw new RuntimeError('Variable "me" does not exist.', 20, $this->source); })()), "getPosition", [], "method", false, false, false, 20), "html", null, true);
            echo "</h5>
                </div>
            </div>
            <hr />
            ";
        }
        // line 25
        echo "
            <ul class=\"list-group list-group-tabs\">
                <li class=\"list-group-item active\">
                    <a href=\"#profile\" class=\"steps\" data-toggle=\"tab\">
                        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.details", [], "messages");
        // line 30
        echo "                    </a>
                </li>

                ";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 33, $this->source); })()), "apiAccess", [], "array", false, false, false, 33)) {
            // line 34
            echo "                <li class=\"list-group-item\">
                    <a href=\"#clients\" class=\"steps\" data-toggle=\"tab\">
                        ";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.authorizedclients", [], "messages");
            // line 37
            echo "                    </a>
                </li>
                ";
        }
        // line 40
        echo "            </ul>
        </div>
    </div>
    <!--/ step container -->

    <!-- container -->
    <div class=\"col-md-9 height-auto bdr-l\">
        <div class=\"tab-content\">
            <div class=\"tab-pane fade in active bdr-rds-0 bdr-w-0\" id=\"profile\">
                ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 49, $this->source); })()), 'form_start');
        echo "
                <div class=\"pa-md bg-light-xs bdr-b\">
                    <h4 class=\"fw-sb\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.details", [], "messages");
        echo "</h4>
                </div>
                <div class=\"pa-md\">
                    <div class=\"col-md-6\">
                        <h3 id=\"personal-info\" class=\"pt-20\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.get_to_know_you", [], "messages");
        echo "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.personalize.interface.helper", [], "messages");
        echo "</div>
                        ";
        // line 57
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 57, $this->source); })()), "editName", [], "any", false, false, false, 57)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "firstName", [], "any", false, false, false, 57), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 57, $this->source); })()), "firstName_unbound", [], "any", false, false, false, 57), 'row')));
        echo "
                        ";
        // line 58
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 58, $this->source); })()), "editName", [], "any", false, false, false, 58)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 58, $this->source); })()), "lastName", [], "any", false, false, false, 58), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 58, $this->source); })()), "lastName_unbound", [], "any", false, false, false, 58), 'row')));
        echo "
                        ";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 59, $this->source); })()), "editPosition", [], "any", false, false, false, 59)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 59, $this->source); })()), "position", [], "any", false, false, false, 59), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 59, $this->source); })()), "position_unbound", [], "any", false, false, false, 59), 'row')));
        echo "
                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 60, $this->source); })()), "signature", [], "any", false, false, false, 60), 'row');
        echo "

                        <h3 id=\"locale\" class=\"pt-20\">";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.locale", [], "messages");
        echo "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.region.preferences.helper", [], "messages");
        echo "</div>
                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 64, $this->source); })()), "timezone", [], "any", false, false, false, 64), 'row');
        echo "
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 65, $this->source); })()), "locale", [], "any", false, false, false, 65), 'row');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        <h3 id=\"security\" class=\"pt-20\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.title.account_data_security", [], "messages");
        echo "</h3>
                        <div class=\"text-muted small description pb-20\">";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.config.account.security.helper", [], "messages");
        echo "</div>
                        ";
        // line 70
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 70, $this->source); })()), "editUsername", [], "any", false, false, false, 70)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "username", [], "any", false, false, false, 70), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 70, $this->source); })()), "username_unbound", [], "any", false, false, false, 70), 'row')));
        echo "
                        ";
        // line 71
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 71, $this->source); })()), "editEmail", [], "any", false, false, false, 71)) ? ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'row')) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 71, $this->source); })()), "email_unbound", [], "any", false, false, false, 71), 'row')));
        echo "
                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 72, $this->source); })()), "plainPassword", [], "any", false, false, false, 72), "password", [], "any", false, false, false, 72), 'row');
        echo "
                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 73, $this->source); })()), "plainPassword", [], "any", false, false, false, 73), "confirm", [], "any", false, false, false, 73), 'row');
        echo "
                    </div>
                </div>
                ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userForm"]) || array_key_exists("userForm", $context) ? $context["userForm"] : (function () { throw new RuntimeError('Variable "userForm" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
            </div>

            ";
        // line 79
        if ((twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "apiAccess", [], "any", true, true, false, 79) && twig_get_attribute($this->env, $this->source, (isset($context["permissions"]) || array_key_exists("permissions", $context) ? $context["permissions"] : (function () { throw new RuntimeError('Variable "permissions" does not exist.', 79, $this->source); })()), "apiAccess", [], "any", false, false, false, 79))) {
            // line 80
            echo "                <div class=\"tab-pane fade bdr-rds-0 bdr-w-0\" id=\"clients\">
                    <div class=\"pa-md bg-light-xs bdr-b\">
                        <h4 class=\"fw-sb\">";
            // line 82
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.user.account.header.authorizedclients", [], "messages");
            echo "</h4>
                    </div>
                    <div class=\"pa-md\">
                        ";
            // line 85
            echo (isset($context["authorizedClients"]) || array_key_exists("authorizedClients", $context) ? $context["authorizedClients"] : (function () { throw new RuntimeError('Variable "authorizedClients" does not exist.', 85, $this->source); })());
            echo "
                    </div>
                </div>
            ";
        }
        // line 89
        echo "        </div>
    </div>
    <!--/ end: container -->
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/Profile/index.html.twig";
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
        return array (  241 => 89,  234 => 85,  228 => 82,  224 => 80,  222 => 79,  216 => 76,  210 => 73,  206 => 72,  202 => 71,  198 => 70,  194 => 69,  190 => 68,  184 => 65,  180 => 64,  176 => 63,  172 => 62,  167 => 60,  163 => 59,  159 => 58,  155 => 57,  151 => 56,  147 => 55,  140 => 51,  135 => 49,  124 => 40,  119 => 37,  117 => 36,  113 => 34,  111 => 33,  106 => 30,  104 => 29,  98 => 25,  90 => 20,  86 => 19,  80 => 16,  76 => 14,  74 => 13,  66 => 7,  62 => 6,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/Profile/index.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\Profile\\index.html.twig");
    }
}
