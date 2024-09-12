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

/* @MauticFullContact/FullContact/batchLookup.html.twig */
class __TwigTemplate_8e84d4f89062eec0202654dd37b64145 extends Template
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
        // line 6
        echo "<div class=\"alert alert-info\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.fullcontact.submit_items"), "html", null, true);
        echo "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lookupItems"]) || array_key_exists("lookupItems", $context) ? $context["lookupItems"] : (function () { throw new RuntimeError('Variable "lookupItems" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
</div>

<script>
    (function () {
        var ids = Mautic.getCheckedListIds(false, true);
        if (mQuery('#fullcontact_batch_lookup_ids').length) {
            mQuery('#fullcontact_batch_lookup_ids').val(ids);
        }
    })();
</script>
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFullContact/FullContact/batchLookup.html.twig";
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
        return array (  70 => 23,  57 => 12,  48 => 10,  44 => 9,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFullContact/FullContact/batchLookup.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFullContactBundle\\Resources\\views\\FullContact\\batchLookup.html.twig");
    }
}
