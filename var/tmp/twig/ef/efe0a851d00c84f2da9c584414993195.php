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

/* @bundles/CoreBundle/Twig/Extension/GravatarExtension.php */
class __TwigTemplate_d7768d2a93d20e1b2a88bbc92cc306ae extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\GravatarHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class GravatarExtension extends AbstractExtension
{
    public function __construct(
        protected GravatarHelper \$gravatarHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('gravatarGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    public function getImage(string \$email, string \$size = '250', ?string \$default = null): string
    {
        return \$this->gravatarHelper->getImage(\$email, \$size, \$default);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/GravatarExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/GravatarExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\GravatarExtension.php");
    }
}
