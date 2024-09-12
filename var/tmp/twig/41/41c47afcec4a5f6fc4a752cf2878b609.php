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

/* @bundles/CoreBundle/Twig/Extension/MautibotExtension.php */
class __TwigTemplate_771a4e208ffda297f19198a94d73b742 extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\MautibotHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class MautibotExtension extends AbstractExtension
{
    public function __construct(
        protected MautibotHelper \$mautibotHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('mautibotGetImage', [\$this, 'getImage'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @param string \$image One of openMouth | smile | wave
     */
    public function getImage(string \$image): string
    {
        return \$this->mautibotHelper->getImage(\$image);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/MautibotExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/MautibotExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\MautibotExtension.php");
    }
}
