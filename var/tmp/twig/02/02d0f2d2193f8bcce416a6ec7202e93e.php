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

/* @Marketplace/Package/remove.html.twig */
class __TwigTemplate_6a4eb78ed32c7afd65c7caf726386959 extends Template
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
        echo "<div class=\"text-center\" id=\"marketplace-removal-in-progress\">
    <p>";
        // line 2
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.in.progress", ["%packagename%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 2, $this->source); })()), "packageBase", [], "any", false, false, false, 2), "getHumanPackageName", [], "method", false, false, false, 2)]));
        echo "</p>
    <div class=\"spinner\">
        <i class=\"fa fa-spin fa-spinner\"></i>
    </div>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-failed\">
    <p>";
        // line 8
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.failed", ["%packagename%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 8, $this->source); })()), "packageBase", [], "any", false, false, false, 8), "getHumanPackageName", [], "method", false, false, false, 8)]));
        echo "</p>
    <textarea class=\"form-control\" readonly id=\"marketplace-removal-failed-details\"></textarea>
</div>
<div style=\"display: none\" class=\"text-center\" id=\"marketplace-removal-success\">
    <p>";
        // line 12
        echo $this->env->getRuntime('Exercise\HTMLPurifierBundle\Twig\HTMLPurifierRuntime')->purify($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("marketplace.package.remove.html.success", ["%packagename%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 12, $this->source); })()), "packageBase", [], "any", false, false, false, 12), "getHumanPackageName", [], "method", false, false, false, 12)]));
        echo "</p>
    <p><a class=\"btn btn-primary\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_constant("Mautic\\MarketplaceBundle\\Service\\RouteProvider::ROUTE_LIST"));
        echo "\">
    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("marketplace.package.remove.html.success.continue", [], "messages");
        echo "</a></p>
</div>

<script>
    const removePackageResetView = () => {
        mQuery('#marketplace-removal-in-progress').show();
        mQuery('#marketplace-removal-success').hide();
        mQuery('#marketplace-removal-failed').hide();
    }

    removePackageResetView();

    Mautic.Marketplace.removePackage(
        '";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 27, $this->source); })()), "packageBase", [], "any", false, false, false, 27), "getVendorName", [], "method", false, false, false, 27));
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["packageDetail"]) || array_key_exists("packageDetail", $context) ? $context["packageDetail"] : (function () { throw new RuntimeError('Variable "packageDetail" does not exist.', 28, $this->source); })()), "packageBase", [], "any", false, false, false, 28), "getPackageName", [], "method", false, false, false, 28));
        echo "',
        (response) => {
            if (response.success) {
                mQuery('#marketplace-removal-in-progress').hide();
                mQuery('#marketplace-removal-success').show();
            } else if (response.redirect) {
                window.location = response.redirect;
            }
        },
        (request, textStatus, errorThrown) => {
            let error;

            try {
                const res = JSON.parse(request.responseText);
                if (res.error) {
                    error = res.error;
                } else {
                    error = res.errors[0].message ?? 'Unknown error';
                }
            } catch (e) {
                error = 'An unknown error occurred. Please check the logs for more details.';
                console.error(request.responseText);
                console.error(e);
            }
            
            mQuery('#marketplace-removal-in-progress').hide();
            mQuery('#marketplace-removal-failed').show();
            mQuery('#marketplace-removal-failed-details').text(error);
        }
    );
</script>";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@Marketplace/Package/remove.html.twig";
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
        return array (  84 => 28,  80 => 27,  64 => 14,  60 => 13,  56 => 12,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Marketplace/Package/remove.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MarketplaceBundle\\Resources\\views\\Package\\remove.html.twig");
    }
}
