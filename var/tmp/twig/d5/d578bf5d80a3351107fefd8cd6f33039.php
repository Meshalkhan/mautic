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

/* @bundles/PointBundle/PointGroupEvents.php */
class __TwigTemplate_13dc2571f5e35702c5ddf0565f132c7c extends Template
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

namespace Mautic\\PointBundle;

final class PointGroupEvents
{
    /**
     * The mautic.group_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_PRE_SAVE = 'mautic.group_pre_save';

    /**
     * The mautic.group_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_POST_SAVE = 'mautic.group_post_save';

    /**
     * The mautic.group_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_PRE_DELETE = 'mautic.group_pre_delete';

    /**
     * The mautic.group_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\ScoringCategoryEvent instance.
     *
     * @var string
     */
    public const GROUP_POST_DELETE = 'mautic.group_post_delete';

    /**
     * The mautic.group_contact_score_change event is dispatched if a group contact score changes.
     *
     * The event listener receives a Mautic\\PointBundle\\Event\\GroupScoreChangeEvent instance.
     *
     * @var string
     */
    public const SCORE_CHANGE = 'mautic.group_contact_score_change';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/PointGroupEvents.php";
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
        return new Source("", "@bundles/PointBundle/PointGroupEvents.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\PointGroupEvents.php");
    }
}
