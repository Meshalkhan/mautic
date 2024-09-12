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

/* @bundles/CoreBundle/Predis/Command/Unlink.php */
class __TwigTemplate_da01559dfa4581f8977adb745c513d83 extends Template
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

namespace Mautic\\CoreBundle\\Predis\\Command;

use Predis\\Command\\Command;
use Predis\\Command\\PrefixableCommandInterface;

class Unlink extends Command implements PrefixableCommandInterface
{
    public const ID = 'UNLINK';

    public function getId(): string
    {
        return self::ID;
    }

    /**
     * @param mixed[] \$arguments
     *
     * @return mixed[]
     */
    protected function filterArguments(array \$arguments): array
    {
        return self::normalizeArguments(\$arguments);
    }

    public function prefixKeys(\$prefix): void
    {
        if (\$arguments = \$this->getArguments()) {
            foreach (\$arguments as &\$key) {
                \$key = \"\$prefix\$key\";
            }

            \$this->setRawArguments(\$arguments);
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
        return "@bundles/CoreBundle/Predis/Command/Unlink.php";
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
        return new Source("", "@bundles/CoreBundle/Predis/Command/Unlink.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Predis\\Command\\Unlink.php");
    }
}
