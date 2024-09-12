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

/* @bundles/CoreBundle/Event/IconEvent.php */
class __TwigTemplate_750c599ada5ab8d6674d8904474396b6 extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Contracts\\EventDispatcher\\Event;

class IconEvent extends Event
{
    /**
     * @var array
     */
    protected \$icons = [];

    public function __construct(
        protected CorePermissions \$security
    ) {
    }

    /**
     * @return CorePermissions
     */
    public function getSecurity()
    {
        return \$this->security;
    }

    /**
     * @param string \$type
     * @param string \$icon
     */
    public function addIcon(\$type, \$icon): void
    {
        \$this->icons[\$type] = \$icon;
    }

    /**
     * Return the icons.
     *
     * @return array
     */
    public function getIcons()
    {
        return \$this->icons;
    }

    public function setIcons(array \$icons): void
    {
        \$this->icons = \$icons;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/IconEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/IconEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\IconEvent.php");
    }
}
