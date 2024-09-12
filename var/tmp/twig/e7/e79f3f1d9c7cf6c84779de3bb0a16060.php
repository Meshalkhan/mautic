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

/* @bundles/ReportBundle/Controller/ScheduleController.php */
class __TwigTemplate_49c0033d91eef2d560b47d06d7f77892 extends Template
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

namespace Mautic\\ReportBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Service\\FlashBag;
use Mautic\\ReportBundle\\Scheduler\\Date\\DateBuilder;
use Symfony\\Component\\HttpFoundation\\JsonResponse;

class ScheduleController extends CommonAjaxController
{
    public function indexAction(DateBuilder \$dateBuilder, \$isScheduled, \$scheduleUnit, \$scheduleDay, \$scheduleMonthFrequency): JsonResponse
    {
        \$dates = \$dateBuilder->getPreviewDays(\$isScheduled, \$scheduleUnit, \$scheduleDay, \$scheduleMonthFrequency);

        \$html = \$this->render(
            '@MauticReport/Schedule/index.html.twig',
            [
                'dates' => \$dates,
            ]
        )->getContent();

        return \$this->sendJsonResponse(
            [
                'html' => \$html,
            ]
        );
    }

    /**
     * Sets report to schedule NOW if possible.
     *
     * @param int \$reportId
     */
    public function nowAction(\$reportId): JsonResponse
    {
        /** @var \\Mautic\\ReportBundle\\Model\\ReportModel \$model */
        \$model = \$this->getModel('report');

        /** @var \\Mautic\\ReportBundle\\Entity\\Report \$report */
        \$report = \$model->getEntity(\$reportId);

        /** @var \\Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions \$security */
        \$security = \$this->security;

        if (empty(\$report)) {
            \$this->addFlashMessage('mautic.report.notfound', ['%id%' => \$reportId], FlashBag::LEVEL_ERROR, 'messages');

            return \$this->flushFlash();
        }

        if (!\$security->hasEntityAccess('report:reports:viewown', 'report:reports:viewother', \$report->getCreatedBy())) {
            \$this->addFlashMessage('mautic.core.error.accessdenied', [], FlashBag::LEVEL_ERROR);

            return \$this->flushFlash();
        }

        if (\$report->isScheduled()) {
            \$this->addFlashMessage('mautic.report.scheduled.already', ['%id%' => \$reportId], FlashBag::LEVEL_ERROR);

            return \$this->flushFlash();
        }

        \$report->setAsScheduledNow(\$this->user->getEmail());
        \$model->saveEntity(\$report);

        \$this->addFlashMessage(
            'mautic.report.scheduled.to.now',
            ['%id%' => \$reportId, '%email%' => \$this->user->getEmail()]
        );

        return \$this->flushFlash();
    }

    private function flushFlash(): JsonResponse
    {
        return new JsonResponse(['flashes' => \$this->getFlashContent()]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Controller/ScheduleController.php";
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
        return new Source("", "@bundles/ReportBundle/Controller/ScheduleController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Controller\\ScheduleController.php");
    }
}
