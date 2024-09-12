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

/* @MauticApi/Client/authorized.html.twig */
class __TwigTemplate_870b4d426ff464ec850fe5fdc03582c3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<table class=\"table table-hover\">
    <thead>
        <tr>
            <th style=\"width: 50px;\"></th>
            <th>";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.core.name"), "html", null, true);
        echo "</th>
        </tr>
    </thead>
    <tbody>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
            // line 11
            echo "        <tr>
            <td>";
            // line 13
            echo twig_include($this->env, $context, "@MauticCore/Helper/confirm.html.twig", ["btnClass" => "btn btn-danger btn-xs", "message" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.confirmrevoke", ["%name%" => twig_get_attribute($this->env, $this->source,             // line 15
$context["k"], "getName", [], "method", false, false, false, 15)]), "confirmText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.revoke"), "confirmAction" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_client_action", ["objectAction" => "revoke", "objectId" => twig_get_attribute($this->env, $this->source,             // line 17
$context["k"], "getId", [], "method", false, false, false, 17)]), "iconClass" => "ri-delete-bin-line", "btnText" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.api.client.form.revoke")]);
            // line 21
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["k"], "getName", [], "method", false, false, false, 22), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
</table>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticApi/Client/authorized.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  102 => 25,  85 => 22,  82 => 21,  80 => 17,  79 => 15,  78 => 13,  75 => 11,  58 => 10,  51 => 6,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticApi/Client/authorized.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Resources\\views\\Client\\authorized.html.twig");
    }
}
