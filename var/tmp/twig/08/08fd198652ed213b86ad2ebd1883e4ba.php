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

/* @MauticCore/Sections/one-column.html.twig */
class __TwigTemplate_c932b546f8301835cef2088967318e7a extends Template
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
        echo "<div data-section-wrapper=\"1\">
    <center>
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" class=\"w320\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
                <td data-slot-container=\"1\" valign=\"top\" class=\"mobile-block\" style=\"padding-left: 5px; padding-right: 5px;\">
                    <div data-slot=\"text\">
                        <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                        <p>ripidis mea id, ut mel zril tractatos inciderint. Id eam hinc omnes, est eu labore mnesarchum, prima deserunt erroribus no nam. Hinc liber epicurei at vel, ius eirmod conclusionemque an, ad nec lorem possit. Id mollis commune principes qui.</p>
                    </div>
                </td>
            </tr>
        </table>
    </center>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Sections/one-column.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Sections/one-column.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Sections\\one-column.html.twig");
    }
}
