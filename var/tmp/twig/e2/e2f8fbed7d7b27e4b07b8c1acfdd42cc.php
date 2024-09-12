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

/* @MauticCore/Sections/three-column.html.twig */
class __TwigTemplate_0eddd7277ee61e279f49cc2dc9c02cfe extends Template
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
        <table data-section=\"1\" style=\"margin: 0 auto;border-collapse: collapse !important;width: 600px;\" class=\"w320\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\">
            <tr>
                <td align=\"center\" valign=\"top\">
                    <table align=\"left\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table align=\"left\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table align=\"right\" border=\"0\" cellpadding=\"10\" cellspacing=\"0\" width=\"200\" class=\"mobile-block\">
                        <tr>
                            <td data-slot-container=\"1\" valign=\"top\" style=\"padding-left: 5px; padding-right: 5px;\">
                                <div data-slot=\"text\">
                                    <p>Lorem ipsum dolor sit amet, alterum definitiones eu est. Eos no scripta voluptatum necessitatibus, ea his case movet. Porro vivendo delicatissimi ea qui, in usu aliquam consulatu conclusionemque. Eu vel mazim periculis consequat, quo fastidii salutandi eu, et sed nibh exerci consequuntur. Cu diam efficiendi eum, pri eu delenit insolens. Usu nihil oporteat an, et stet mucius vix, ex nostro assueverit mel.</p>
                                </div>
                            </td>
                        </tr>
                    </table>
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
        return "@MauticCore/Sections/three-column.html.twig";
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
        return new Source("", "@MauticCore/Sections/three-column.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Sections\\three-column.html.twig");
    }
}
