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

/* @bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php */
class __TwigTemplate_cb503bc18c62d7a7153c6a5b29a6deb5 extends Template
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

namespace Mautic\\LeadBundle\\Form\\DataTransformer;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Entity\\LeadFieldRepository;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @implements DataTransformerInterface<LeadField|null, int|null>
 */
class FieldToOrderTransformer implements DataTransformerInterface
{
    public function __construct(
        private LeadFieldRepository \$leadFieldRepository
    ) {
    }

    /**
     * Transforms an object to an integer (order).
     *
     * @param int|null \$order
     *
     * @return LeadField|null
     */
    public function transform(\$order)
    {
        if (!\$order) {
            return null;
        }

        return \$this->leadFieldRepository->findOneBy(['order' => \$order]);
    }

    /**
     * Transforms a integer to an object.
     *
     * @param LeadField|null \$field
     *
     * @return int|null
     */
    public function reverseTransform(\$field)
    {
        if (null === \$field) {
            return null;
        }

        return \$field->getOrder();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php";
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
        return new Source("", "@bundles/LeadBundle/Form/DataTransformer/FieldToOrderTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Form\\DataTransformer\\FieldToOrderTransformer.php");
    }
}
