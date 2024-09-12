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

/* @bundles/CoreBundle/Helper/ProgressBarHelper.php */
class __TwigTemplate_fede6e9a57070d6da3ac01336944cc00 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\Console\\Helper\\ProgressBar;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Component\\Console\\Output\\StreamOutput;

class ProgressBarHelper
{
    /**
     * Avoid printing progress bar to stderr
     * https://github.com/symfony/symfony/issues/18744.
     *
     * @param int \$maxCount
     */
    public static function init(OutputInterface \$output, \$maxCount = 0): ProgressBar
    {
        \$output = \$output instanceof StreamOutput ? new StreamOutput(\$output->getStream()) : \$output;

        return new ProgressBar(\$output, \$maxCount);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/ProgressBarHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/ProgressBarHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\ProgressBarHelper.php");
    }
}
