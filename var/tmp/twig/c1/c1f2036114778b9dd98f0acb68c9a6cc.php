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

/* @bundles/IntegrationsBundle/DTO/Note.php */
class __TwigTemplate_e9019d64fa1b37eaa7f8f80fa852d7f3 extends Template
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

namespace Mautic\\IntegrationsBundle\\DTO;

final class Note
{
    public const TYPE_WARNING = 'warning';

    public const TYPE_INFO    = 'info';

    private string \$type;

    public function __construct(
        private string \$note,
        string \$type
    ) {
        if (!in_array(\$type, [self::TYPE_INFO, self::TYPE_WARNING])) {
            throw new \\InvalidArgumentException(sprintf('Type value can be either \"%s\" or \"%s\".', self::TYPE_INFO, self::TYPE_WARNING));
        }

        \$this->type = \$type;
    }

    public function getNote(): string
    {
        return \$this->note;
    }

    public function getType(): string
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/IntegrationsBundle/DTO/Note.php";
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
        return new Source("", "@bundles/IntegrationsBundle/DTO/Note.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\IntegrationsBundle\\DTO\\Note.php");
    }
}
