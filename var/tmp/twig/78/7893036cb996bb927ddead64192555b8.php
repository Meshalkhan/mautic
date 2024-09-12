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

/* @MauticClearbit/Clearbit/batchLookup.html.twig */
class __TwigTemplate_b56017641e24c25603825402f936b3ba extends Template
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
        // line 1
        echo "<div class=\"alert alert-info\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mautic.plugin.clearbit.submit_items"), "html", null, true);
        echo "</div>
<div style=\"margin-top: 10px\">
    <ul class=\"list-group\" style=\"max-height: 400px;overflow-y: auto\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lookupItems"]) || array_key_exists("lookupItems", $context) ? $context["lookupItems"] : (function () { throw new RuntimeError('Variable "lookupItems" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "            <li class=\"list-group-item\">";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>
</div>

<script>
    (function () {
        var ids = Mautic.getCheckedListIds(false, true);
        if (mQuery('#clearbit_batch_lookup_ids').length) {
            mQuery('#clearbit_batch_lookup_ids').val(ids);
        }
    })();
</script>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form');
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticClearbit/Clearbit/batchLookup.html.twig";
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
        return array (  70 => 18,  57 => 7,  48 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticClearbit/Clearbit/batchLookup.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticClearbitBundle\\Resources\\views\\Clearbit\\batchLookup.html.twig");
    }
}
