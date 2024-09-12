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

/* @bundles/CoreBundle/Twig/Extension/SlotExtension.php */
class __TwigTemplate_b3c125333661a3102f6b5be3b8390d4a extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Twig\\Helper\\SlotsHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class SlotExtension extends AbstractExtension
{
    public function __construct(
        protected SlotsHelper \$helper
    ) {
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('slot', [\$this, 'getSlot'], ['is_safe' => ['html']]),
            new TwigFunction('slotHasContent', [\$this, 'slotHasContent'], ['is_safe' => ['html']]),
        ];
    }

    public function getName(): string
    {
        return 'slot';
    }

    public function getSlot(string \$name, string \$default = ''): string|bool
    {
        ob_start();

        \$this->helper->output(\$name, \$default);

        return ob_get_clean();
    }

    /**
     * @param string|array<string, mixed> \$name
     */
    public function slotHasContent(\$name): bool
    {
        return \$this->helper->hasContent(\$name);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/SlotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/SlotExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\SlotExtension.php");
    }
}
