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

/* @bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php */
class __TwigTemplate_69b83717c2193975a9262c1e7427f660 extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Validator\\Constraints;

use Mautic\\CoreBundle\\Exception\\RecordNotUnpublishedException;
use Mautic\\LeadBundle\\Entity\\LeadList;
use Mautic\\LeadBundle\\Validator\\SegmentUsedInCampaignsValidator as InternalValidator;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\ConstraintValidator;

class SegmentUsedInCampaignsValidator extends ConstraintValidator
{
    public function __construct(private InternalValidator \$internalValidator)
    {
    }

    public function validate(\$segment, Constraint \$constraint): void
    {
        try {
            /** @var LeadList \$segment */
            if (\$segment->getIsPublished()) {
                return;
            }

            \$this->internalValidator->validate(\$segment);
        } catch (RecordNotUnpublishedException \$exception) {
            \$this->context->buildViolation(\$exception->getMessage())
                ->atPath('isPublished')
                ->setCode((string) Response::HTTP_UNPROCESSABLE_ENTITY)
                ->addViolation();
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php";
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
        return new Source("", "@bundles/LeadBundle/Validator/Constraints/SegmentUsedInCampaignsValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Validator\\Constraints\\SegmentUsedInCampaignsValidator.php");
    }
}
