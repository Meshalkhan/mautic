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

/* @bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php */
class __TwigTemplate_a156107ce02541c6ef67e24ddebca334 extends Template
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

namespace Mautic\\IntegrationsBundle\\Sync\\DAO\\Value;

class ReferenceValueDAO implements \\Stringable
{
    private ?int \$value = null;

    private ?string \$type = null;

    public function getValue(): ?int
    {
        return \$this->value;
    }

    public function setValue(int \$value): void
    {
        \$this->value = \$value;
    }

    public function getType(): ?string
    {
        return \$this->type;
    }

    public function setType(string \$type): void
    {
        \$this->type = \$type;
    }

    public function __toString(): string
    {
        return (string) \$this->value;
    }

    /** @return array<string, mixed> */
    public function __serialize(): array
    {
        return [
            'value' => \$this->value,
            'types' => \$this->type,
        ];
    }

    /** @param array<string, mixed> \$data */
    public function __unserialize(array \$data): void
    {
        \$this->value = \$data['value'] ?? null;
        \$this->type  = \$data['type'] ?? null;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php";
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
        return new Source("", "@bundles/IntegrationsBundle/Sync/DAO/Value/ReferenceValueDAO.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\Sync\\DAO\\Value\\ReferenceValueDAO.php");
    }
}
