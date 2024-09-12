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

/* @bundles/StageBundle/StageEvents.php */
class __TwigTemplate_09153ea3fc2e89ddc2b796727e47ec43 extends Template
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

namespace Mautic\\StageBundle;

/**
 * Events available for StageBundle.
 */
final class StageEvents
{
    /**
     * The mautic.stage_pre_save event is thrown right before a form is persisted.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageEvent instance.
     *
     * @var string
     */
    public const STAGE_PRE_SAVE = 'mautic.stage_pre_save';

    /**
     * The mautic.stage_post_save event is thrown right after a form is persisted.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageEvent instance.
     *
     * @var string
     */
    public const STAGE_POST_SAVE = 'mautic.stage_post_save';

    /**
     * The mautic.stage_pre_delete event is thrown before a form is deleted.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageEvent instance.
     *
     * @var string
     */
    public const STAGE_PRE_DELETE = 'mautic.stage_pre_delete';

    /**
     * The mautic.stage_post_delete event is thrown after a form is deleted.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageEvent instance.
     *
     * @var string
     */
    public const STAGE_POST_DELETE = 'mautic.stage_post_delete';

    /**
     * The mautic.stage_on_build event is thrown before displaying the stage builder form to allow adding of custom actions.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageBuilderEvent instance.
     *
     * @var string
     */
    public const STAGE_ON_BUILD = 'mautic.stage_on_build';

    /**
     * The mautic.stage_on_action event is thrown to execute a stage action.
     *
     * The event listener receives a Mautic\\StageBundle\\Event\\StageActionEvent instance.
     *
     * @var string
     */
    public const STAGE_ON_ACTION = 'mautic.stage_on_action';

    /**
     * The mautic.stage.on_campaign_batch_action event is dispatched when the campaign action triggers.
     *
     * The event listener receives a Mautic\\CampaignBundle\\Event\\PendingEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_BATCH_ACTION = 'mautic.stage.on_campaign_batch_action';

    /**
     * @deprecated; use ON_CAMPAIGN_BATCH_ACTION instead
     *
     * The mautic.stage.on_campaign_trigger_action event is fired when the campaign action triggers.
     *
     * The event listener receives a
     * Mautic\\CampaignBundle\\Event\\CampaignExecutionEvent
     *
     * @var string
     */
    public const ON_CAMPAIGN_TRIGGER_ACTION = 'mautic.stage.on_campaign_trigger_action';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/StageBundle/StageEvents.php";
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
        return new Source("", "@bundles/StageBundle/StageEvents.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\StageEvents.php");
    }
}
