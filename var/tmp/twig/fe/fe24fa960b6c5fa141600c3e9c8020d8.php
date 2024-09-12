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

/* @bundles/PointBundle/Event/GroupScoreChangeEvent.php */
class __TwigTemplate_0af80e05c8fd78d6279d5438dde6b6d5 extends Template
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

namespace Mautic\\PointBundle\\Event;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PointBundle\\Entity\\GroupContactScore;

final class GroupScoreChangeEvent
{
    public function __construct(
        private GroupContactScore \$groupContactScore,
        private int \$oldScore,
        private int \$newScore
    ) {
    }

    public function getGroupContactScore(): GroupContactScore
    {
        return \$this->groupContactScore;
    }

    public function getContact(): Lead
    {
        return \$this->groupContactScore->getContact();
    }

    public function getNewScore(): int
    {
        return \$this->newScore;
    }

    public function getOldScore(): int
    {
        return \$this->oldScore;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Event/GroupScoreChangeEvent.php";
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
        return new Source("", "@bundles/PointBundle/Event/GroupScoreChangeEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Event\\GroupScoreChangeEvent.php");
    }
}
