<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/UserBundle/Security/SAML/Store/IdStore.php */
class __TwigTemplate_0cc7fddac9cad8e59616dd9fa5fcdf91 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\UserBundle\\Security\\SAML\\Store;

use Doctrine\\Persistence\\ObjectManager;
use LightSaml\\Provider\\TimeProvider\\TimeProviderInterface;
use LightSaml\\Store\\Id\\IdStoreInterface;
use Mautic\\UserBundle\\Entity\\IdEntry;

class IdStore implements IdStoreInterface
{
    public function __construct(
        private ObjectManager \$manager,
        private TimeProviderInterface \$timeProvider
    ) {
    }

    /**
     * @param string \$entityId
     * @param string \$id
     */
    public function set(\$entityId, \$id, \\DateTime \$expiryTime): void
    {
        \$idEntry = \$this->manager->find(IdEntry::class, ['entityId' => \$entityId, 'id' => \$id]);
        if (null == \$idEntry) {
            \$idEntry = new IdEntry();
        }
        \$idEntry->setEntityId(\$entityId)
            ->setId(\$id)
            ->setExpiryTime(\$expiryTime);
        \$this->manager->persist(\$idEntry);
        \$this->manager->flush();
    }

    /**
     * @param string \$entityId
     * @param string \$id
     */
    public function has(\$entityId, \$id): bool
    {
        /** @var IdEntry \$idEntry */
        \$idEntry = \$this->manager->find(IdEntry::class, ['entityId' => \$entityId, 'id' => \$id]);
        if (null == \$idEntry) {
            return false;
        }

        if (\$idEntry->getExpiryTime()->getTimestamp() < \$this->timeProvider->getTimestamp()) {
            return false;
        }

        return true;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Security/SAML/Store/IdStore.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/IdStore.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Security\\SAML\\Store\\IdStore.php");
    }
}
