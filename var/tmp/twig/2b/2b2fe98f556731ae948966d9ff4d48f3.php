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

/* @MauticEmail/Send/form.html.twig */
class __TwigTemplate_f55cdb8b5775a57e588e593d9b3b6bd4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'mauticContent' => [$this, 'block_mauticContent'],
            'headerTitle' => [$this, 'block_headerTitle'],
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
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticEmail/Send/form.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "emailSend";
    }

    // line 5
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.list", ["%name%" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5)]));
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6\">
            <div class=\"ml-lg mr-lg mt-md pa-lg\">
                <div class=\"panel panel-info\">
                    <div class=\"panel-body\">
                        ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
                        <div class=\"col-xs-offset-1 col-xs-10 col-lg-offset-2 col-lg-8\">
                            <div class=\"well mt-lg\">
                                <div class=\"input-group\">
                                <span class=\"input-group-btn text-center\">";
        // line 18
        echo twig_include($this->env, $context, "@MauticCore/Helper/confirm.html.twig", ["message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.form.confirmsend", ["%name%" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 19, $this->source); })()), "getName", [], "method", false, false, false, 19)]), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "confirmCallback" => "submitSendForm", "iconClass" => "fa fa-send-o", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send"), "btnClass" => ("btn btn-primary btn-send" . ((        // line 24
(isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 24, $this->source); })())) ? ("") : (" disabled")))]);
        // line 26
        echo "</span>
                                </div>
                                <div class=\"text-center\">
                                <span class=\"label label-primary mt-lg\">
                                    ";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.email.send.pending", ["%count%" => (isset($context["pending"]) || array_key_exists("pending", $context) ? $context["pending"] : (function () { throw new RuntimeError('Variable "pending" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "
                                </span>
                                    <div class=\"mt-sm\">
                                        <a class=\"text-danger mt-md\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_email_action", ["objectAction" => "view", "objectId" => twig_get_attribute($this->env, $this->source, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 33, $this->source); })()), "getId", [], "method", false, false, false, 33)]), "html", null, true);
        echo "\" data-toggle=\"ajax\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.form.cancel"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticEmail/Send/form.html.twig";
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
        return array (  106 => 38,  96 => 33,  90 => 30,  84 => 26,  82 => 24,  81 => 19,  80 => 18,  73 => 13,  66 => 8,  62 => 7,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticEmail/Send/form.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Resources\\views\\Send\\form.html.twig");
    }
}
