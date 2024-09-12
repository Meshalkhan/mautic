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

/* @MauticAsset/Remote/browse.html.twig */
class __TwigTemplate_2e431cb6a01d24bd79ca0296da083320 extends Template
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
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 4
        return $this->loadTemplate((((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 4, $this->source); })())) ? ("@MauticCore/Default/content.html.twig") : ("@MauticCore/Default/raw_output.html.twig")), "@MauticAsset/Remote/browse.html.twig", 4);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["isIndex"] = ((((isset($context["tmpl"]) || array_key_exists("tmpl", $context) ? $context["tmpl"] : (function () { throw new RuntimeError('Variable "tmpl" does not exist.', 1, $this->source); })()) == "index")) ? (true) : (false));
        // line 2
        $context["tmpl"] = "list";
        // line 4
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_mauticContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "asset";
    }

    // line 6
    public function block_headerTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.file.browse", [], "messages");
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "    ";
        if ((isset($context["isIndex"]) || array_key_exists("isIndex", $context) ? $context["isIndex"] : (function () { throw new RuntimeError('Variable "isIndex" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div class=\"panel panel-default bdr-t-wdh-0 mb-0\">
            <div class=\"page-list\">
                ";
            // line 12
            $this->displayBlock("mainContent", $context, $blocks);
            echo "        
            </div>
        </div>
    ";
        } else {
            // line 16
            echo "        ";
            $this->displayBlock("mainContent", $context, $blocks);
            echo "
    ";
        }
    }

    // line 22
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        if (twig_length_filter($this->env, (isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "    <!-- start: box layout -->
    <div class=\"box-layout\">
                <!-- step container -->
        <div class=\"col-md-3\">
            <div class=\"pt-md pr-md pb-md\">
                <ul class=\"list-group list-group-tabs\">
                    ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["integrations"]) || array_key_exists("integrations", $context) ? $context["integrations"] : (function () { throw new RuntimeError('Variable "integrations" does not exist.', 30, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["integration"]) {
                // line 31
                echo "                        <li class=\"list-group-item";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 31) === 0)) {
                    echo " active";
                }
                echo "\" id=\"tab";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["integration"], "getName", [], "method", false, false, false, 31), "html", null, true);
                echo "\">
                            <a href=\"javascript: void(0);\" class=\"steps\" onclick=\"Mautic.updateRemoteBrowser('";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["integration"], "getName", [], "method", false, false, false, 32), "html", null, true);
                echo "');\">
                                ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["integration"], "getDisplayName", [], "method", false, false, false, 33), "html", null, true);
                echo "
                            </a>
                        </li>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['integration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                </ul>
            </div>
        </div>
        <!--/ step container -->

        <!-- container -->
        <div class=\"col-md-9 bdr-l\">
            <div id=\"remoteFileBrowser\">
                <div class=\"alert alert-warning col-md-6 col-md-offset-3 mt-md\">
                    <p>";
            // line 46
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.asset.remote.select_service", [], "messages");
            echo "</p>
                </div>
            </div>
        </div>
        <!--/ end: container -->
    </div>
    <!--/ end: box layout -->
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticAsset/Remote/browse.html.twig";
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
        return array (  166 => 46,  155 => 37,  137 => 33,  133 => 32,  124 => 31,  107 => 30,  99 => 24,  97 => 23,  93 => 22,  85 => 16,  78 => 12,  74 => 10,  71 => 9,  67 => 8,  60 => 6,  53 => 5,  49 => 4,  47 => 2,  45 => 1,  38 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticAsset/Remote/browse.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Resources\\views\\Remote\\browse.html.twig");
    }
}
