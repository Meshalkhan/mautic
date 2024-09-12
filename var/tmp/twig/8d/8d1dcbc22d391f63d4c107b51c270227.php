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

/* @bundles/LeadBundle/Twig/Helper/DncReasonHelper.php */
class __TwigTemplate_46fe8d8ec18b8adcfc48fe288fab10b2 extends Template
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
        echo "<?php

namespace Mautic\\LeadBundle\\Twig\\Helper;

use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * Convert DNC reason ID to text.
 */
final class DncReasonHelper
{
    public function __construct(
        private TranslatorInterface \$translator
    ) {
    }

    /**
     * Convert DNC reason ID to text.
     *
     * @throws UnknownDncReasonException
     */
    public function toText(int \$reasonId): string
    {
        \$reasonKey = match (\$reasonId) {
            DoNotContact::IS_CONTACTABLE => 'mautic.lead.event.donotcontact_contactable',
            DoNotContact::UNSUBSCRIBED   => 'mautic.lead.event.donotcontact_unsubscribed',
            DoNotContact::BOUNCED        => 'mautic.lead.event.donotcontact_bounced',
            DoNotContact::MANUAL         => 'mautic.lead.event.donotcontact_manual',
            default                      => throw new UnknownDncReasonException(sprintf(\"Unknown DNC reason ID '%c'\", \$reasonId)),
        };

        return \$this->translator->trans(\$reasonKey);
    }

    /**
     * Returns the canonical name of this helper.
     *
     * @return string The canonical name
     */
    public function getName(): string
    {
        return 'lead_dnc_reason';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Twig/Helper/DncReasonHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Helper/DncReasonHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Twig\\Helper\\DncReasonHelper.php");
    }
}
