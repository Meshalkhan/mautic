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

/* @bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php */
class __TwigTemplate_af2050ab786da08a4a5fdac343fe206b extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Sync;

use Mautic\\IntegrationsBundle\\Sync\\Exception\\ObjectNotFoundException;

/**
 * Holds IDs for different types of objects. Can be used for Mautic or integration objects.
 */
class ObjectIdsDAO
{
    /**
     * Expected structure:
     * [
     *      'objectA' => [12, 13],
     *      'objectB' => ['asfdaswty', 'wetegdfsd'],
     * ].
     *
     * @var array[]
     */
    private array \$objects = [];

    /**
     * Expected \$cliOptions structure:
     * [
     *      'abjectA:12',
     *      'abjectA:13',
     *      'abjectB:asfdaswty',
     *      'abjectB:wetegdfsd',
     * ]
     * Simply put, an array of object types and IDs separated by colon.
     *
     * @param string[] \$cliOptions
     */
    public static function createFromCliOptions(array \$cliOptions): self
    {
        \$objectsIdDAO = new self();

        foreach (\$cliOptions as \$cliOption) {
            if (is_string(\$cliOption) && str_contains(\$cliOption, ':')) {
                \$objectsIdDAO->addObjectId(...explode(':', \$cliOption));
            }
        }

        return \$objectsIdDAO;
    }

    public function addObjectId(string \$objectType, string \$id): void
    {
        if (!isset(\$this->objects[\$objectType])) {
            \$this->objects[\$objectType] = [];
        }

        \$this->objects[\$objectType][] = \$id;
    }

    /**
     * @return string[]
     *
     * @throws ObjectNotFoundException
     */
    public function getObjectIdsFor(string \$objectType): array
    {
        if (empty(\$this->objects[\$objectType])) {
            throw new ObjectNotFoundException(\"Object {\$objectType} doesn't have any IDs to return\");
        }

        return \$this->objects[\$objectType];
    }

    /**
     * @return string[]
     */
    public function getObjectTypes(): array
    {
        return array_keys(\$this->objects);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Sync/ObjectIdsDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Sync\\ObjectIdsDAO.php");
    }
}
