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

/* @MauticSocial/Monitoring/form.html.twig */
class __TwigTemplate_09581e438877ac2359eb71a5389a9edc extends Template
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
            'modal' => [$this, 'block_modal'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "@MauticCore/Default/content.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MauticCore/Default/content.html.twig", "@MauticSocial/Monitoring/form.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "monitoring";
    }

    // line 10
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)) {
            // line 12
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.monitoring.menu.edit", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12))]), "html", null, true);
            echo "
  ";
        } else {
            // line 14
            echo "    ";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.social.monitoring.menu.new"), "html", null, true);
            echo "
  ";
        }
    }

    // line 18
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        echo twig_include($this->env, $context, "@MauticCore/Helper/modal.html.twig", ["id" => "formComponentModal", "header" => false, "footerButtons" => true]);
        // line 23
        echo "
";
    }

    // line 26
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "  ";
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->includeScript("plugins/MauticSocialBundle/Assets/js/social.js");
        echo "

  ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
  <!-- start: box layout -->
  <div class=\"box-layout\">
      <!-- container -->
      <div class=\"col-md-9 height-auto bdr-r\">
          <div class=\"pa-md\">
              <div class=\"row\">
                  <div class=\"col-md-12\">
                      <div class=\"row\">
                          <div class=\"col-md-6\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "title", [], "any", false, false, false, 38), 'row');
        echo "</div>
                          <div class=\"col-md-6\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "networkType", [], "any", false, false, false, 39), 'row');
        echo "</div>
                      </div>
                      <div id=\"properties-container\">
                          <div class=\"row\">
                          ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "properties", [], "any", true, true, false, 43)) {
            // line 44
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "properties", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 45
                echo "                                <div class=\"col-md-6\">
                                    ";
                // line 46
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                          ";
        }
        // line 50
        echo "                          </div>
                      </div>
                      ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'row');
        echo "
                  </div>
              </div>
          </div>
      </div>
      <div class=\"col-md-3 height-auto\">
          <div class=\"pr-lg pl-lg pt-md pb-md\">
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "isPublished", [], "any", false, false, false, 59), 'row');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "publishUp", [], "any", false, false, false, 60), 'row');
        echo "
              ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "publishDown", [], "any", false, false, false, 61), 'row');
        echo "
              ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "category", [], "any", false, false, false, 62), 'row');
        echo "
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "lists", [], "any", false, false, false, 63), 'row');
        echo "
          </div>
      </div>
  </div>
  ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Monitoring/form.html.twig";
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
        return array (  181 => 67,  174 => 63,  170 => 62,  166 => 61,  162 => 60,  158 => 59,  148 => 52,  144 => 50,  141 => 49,  132 => 46,  129 => 45,  124 => 44,  122 => 43,  115 => 39,  111 => 38,  99 => 29,  93 => 27,  89 => 26,  84 => 23,  81 => 19,  77 => 18,  69 => 14,  63 => 12,  60 => 11,  56 => 10,  49 => 8,  38 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Monitoring/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Monitoring\\form.html.twig");
    }
}
