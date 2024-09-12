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

/* @MauticSocial/Tweet/_list.html.twig */
class __TwigTemplate_c572faf6fe0ec54fabe866a3a603e11f extends Template
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
        if ((twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 1, $this->source); })())) > 0)) {
            // line 2
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-hover tweet-list\" id=\"tweetTable\">
            <thead>
            <tr>
                ";
            // line 6
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["checkall" => "true", "target" => "#tweetTable", "langVar" => "mautic.social.tweets", "routeBase" => "mautic_tweet", "templateButtons" => ["delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:tweet:delete")]]);
            // line 14
            echo "

                ";
            // line 16
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "social.tweet", "orderBy" => "e.name", "text" => "mautic.core.name", "class" => "col-tweet-name", "default" => true]);
            // line 22
            echo "

                ";
            // line 24
            echo twig_include($this->env, $context, "@MauticCore/Helper/tableheader.html.twig", ["sessionVar" => "social.tweet", "orderBy" => "e.id", "text" => "mautic.core.id", "class" => "visible-md visible-lg col-asset-id"]);
            // line 29
            echo "
            </tr>
            </thead>
            <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 33, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 34
                echo "                <tr>
                    <td>
                        ";
                // line 36
                echo twig_include($this->env, $context, "@MauticCore/Helper/list_actions.html.twig", ["item" =>                 // line 37
$context["item"], "templateButtons" => ["edit" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:tweet:edit"), "delete" => $this->extensions['Mautic\CoreBundle\Twig\Extension\SecurityExtension']->isGranted("mauticSocial:tweet:delete")], "routeBase" => "mautic_tweet", "langVar" => "mautic.integration.Twitter", "nameGetter" => "getName"]);
                // line 45
                echo "
                    </td>
                    <td>
                        <div>
                            ";
                // line 49
                echo twig_include($this->env, $context, "@MauticCore/Helper/publishstatus_icon.html.twig", ["item" =>                 // line 50
$context["item"], "model" => "social.tweet"]);
                // line 52
                echo "
                            <a href=\"";
                // line 53
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tweet_action", ["objectAction" => "edit", "objectId" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" data-toggle=\"ajax\">
                                ";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 54), "html", null, true);
                echo "
                            </a>
                        </div>
                        ";
                // line 57
                if (twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 57)) {
                    // line 58
                    echo "                            <div class=\"text-muted mt-4\">
                                <small>";
                    // line 59
                    echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify(twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 59));
                    echo "</small>
                            </div>
                        ";
                }
                // line 62
                echo "                    </td>
                    <td class=\"visible-md visible-lg\">";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 63), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "            </tbody>
        </table>
    </div>
    <div class=\"panel-footer\">
        ";
            // line 70
            echo twig_include($this->env, $context, "@MauticCore/Helper/pagination.html.twig", ["totalItems" => twig_length_filter($this->env,             // line 71
(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 71, $this->source); })())), "page" =>             // line 72
(isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 72, $this->source); })()), "limit" =>             // line 73
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 73, $this->source); })()), "menuLinkId" => "mautic_tweet_index", "baseUrl" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mautic_tweet_index"), "sessionVar" => "social.tweet", "routeBase" => "tweet"]);
            // line 78
            echo "
    </div>
";
        } else {
            // line 81
            echo "    ";
            echo twig_include($this->env, $context, "@MauticCore/Helper/noresults.html.twig", ["tip" => "mautic.mautic.social.tweet.noresults.tip"]);
            echo "
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticSocial/Tweet/_list.html.twig";
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
        return array (  158 => 81,  153 => 78,  151 => 73,  150 => 72,  149 => 71,  148 => 70,  142 => 66,  125 => 63,  122 => 62,  116 => 59,  113 => 58,  111 => 57,  105 => 54,  101 => 53,  98 => 52,  96 => 50,  95 => 49,  89 => 45,  87 => 37,  86 => 36,  82 => 34,  65 => 33,  59 => 29,  57 => 24,  53 => 22,  51 => 16,  47 => 14,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticSocial/Tweet/_list.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticSocialBundle\\Resources\\views\\Tweet\\_list.html.twig");
    }
}
