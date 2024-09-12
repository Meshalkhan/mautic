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

/* @MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig */
class __TwigTemplate_f38403a0c8e9b08a6545dfa663b95b04 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_config_userconfig_widget' => [$this, 'block__config_userconfig_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('_config_userconfig_widget', $context, $blocks);
    }

    public function block__config_userconfig_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "children", [], "any", false, false, false, 2);
        // line 3
        $context["fieldKeys"] = twig_get_array_keys_filter((isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 3, $this->source); })()));
        // line 4
        echo "
";
        // line 5
        if ((twig_length_filter($this->env, twig_array_filter($this->env, (isset($context["fieldKeys"]) || array_key_exists("fieldKeys", $context) ? $context["fieldKeys"] : (function () { throw new RuntimeError('Variable "fieldKeys" does not exist.', 5, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return twig_in_filter((isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 5, $this->source); })()), ["saml_idp_metadata", "saml_idp_own_certificate", "saml_idp_own_private_key", "saml_idp_own_password"]); })) > 0)) {
            // line 6
            echo "  <div class=\"panel panel-primary\">
      <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.header.saml"), "html", null, true);
            echo "</h3>
      </div>
      <div class=\"panel-body\">
          <div class=\"row\">
            ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, ($context["fields"] ?? null), "saml_idp_entity_id", [], "any", true, true, false, 12)) {
                // line 13
                echo "              <div class=\"col-md-6\">
                  ";
                // line 14
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 14, $this->source); })()), "saml_idp_entity_id", [], "any", false, false, false, 14), 'row');
                echo "
              </div>
            ";
            }
            // line 17
            echo "              <div class=\"col-md-6\">
                  ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 18, $this->source); })()), "saml_idp_metadata", [], "any", false, false, false, 18), 'row', ["fieldValue" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 18, $this->source); })()), "parameters", [], "any", false, false, false, 18), "saml_idp_metadata", [], "any", false, false, false, 18)]);
            echo "
              </div>
              <div class=\"col-md-6\">
                  ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 21, $this->source); })()), "saml_idp_default_role", [], "any", false, false, false, 21), 'row');
            echo "
              </div>
          </div>
          <hr />
          <div class=\"alert alert-info\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.form.saml.idp_attributes"), "html", null, true);
            echo "</div>
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 28, $this->source); })()), "saml_idp_email_attribute", [], "any", false, false, false, 28), 'row');
            echo "
              </div>
              <div class=\"col-md-6\">
                  ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 31, $this->source); })()), "saml_idp_username_attribute", [], "any", false, false, false, 31), 'row');
            echo "
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 36, $this->source); })()), "saml_idp_firstname_attribute", [], "any", false, false, false, 36), 'row');
            echo "
              </div>
              <div class=\"col-md-6\">
                  ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 39, $this->source); })()), "saml_idp_lastname_attribute", [], "any", false, false, false, 39), 'row');
            echo "
              </div>
          </div>
          <hr />
          <div class=\"alert alert-info\">";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.user.config.form.saml.idp.own_certificate.description"), "html", null, true);
            echo "</div>
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 46, $this->source); })()), "saml_idp_own_certificate", [], "any", false, false, false, 46), 'row', ["fieldValue" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 46, $this->source); })()), "parameters", [], "any", false, false, false, 46), "saml_idp_own_certificate", [], "any", false, false, false, 46)]);
            echo "
              </div>
              <div class=\"col-md-6\">
                  ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 49, $this->source); })()), "saml_idp_own_private_key", [], "any", false, false, false, 49), 'row', ["fieldValue" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formConfig"]) || array_key_exists("formConfig", $context) ? $context["formConfig"] : (function () { throw new RuntimeError('Variable "formConfig" does not exist.', 49, $this->source); })()), "parameters", [], "any", false, false, false, 49), "saml_idp_own_private_key", [], "any", false, false, false, 49)]);
            echo "
              </div>
          </div>
          <div class=\"row\">
              <div class=\"col-md-6\">
                  ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fields"]) || array_key_exists("fields", $context) ? $context["fields"] : (function () { throw new RuntimeError('Variable "fields" does not exist.', 54, $this->source); })()), "saml_idp_own_password", [], "any", false, false, false, 54), 'row');
            echo "
              </div>
          </div>
      </div>
  </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  145 => 54,  137 => 49,  131 => 46,  125 => 43,  118 => 39,  112 => 36,  104 => 31,  98 => 28,  92 => 25,  85 => 21,  79 => 18,  76 => 17,  70 => 14,  67 => 13,  65 => 12,  58 => 8,  54 => 6,  52 => 5,  49 => 4,  47 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticUser/FormTheme/Config/_config_userconfig_widget.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Resources\\views\\FormTheme\\Config\\_config_userconfig_widget.html.twig");
    }
}
