<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/PointBundle/Controller/Api/PointGroupsApiController.php */
class __TwigTemplate_76aacf465579dd9a3908ae25a50cee77 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

declare(strict_types=1);

namespace Mautic\\PointBundle\\Controller\\Api;

use Doctrine\\Persistence\\ManagerRegistry;
use Mautic\\ApiBundle\\Controller\\CommonApiController;
use Mautic\\ApiBundle\\Helper\\EntityResultHelper;
use Mautic\\CoreBundle\\Factory\\MauticFactory;
use Mautic\\CoreBundle\\Factory\\ModelFactory;
use Mautic\\CoreBundle\\Helper\\AppVersion;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\CoreBundle\\Helper\\IpLookupHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PointBundle\\Entity\\Group;
use Mautic\\PointBundle\\Model\\PointGroupModel;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Routing\\RouterInterface;

/**
 * @extends CommonApiController<Group>
 */
class PointGroupsApiController extends CommonApiController
{
    /**
     * @var PointGroupModel
     */
    protected \$model;

    /** @phpstan-ignore-next-line the parent class uses the deprecated MauticFactory */
    public function __construct(CorePermissions \$security, Translator \$translator, EntityResultHelper \$entityResultHelper, RouterInterface \$router, FormFactoryInterface \$formFactory, AppVersion \$appVersion, RequestStack \$requestStack, ManagerRegistry \$doctrine, ModelFactory \$modelFactory, EventDispatcherInterface \$dispatcher, CoreParametersHelper \$coreParametersHelper, MauticFactory \$factory, PointGroupModel \$pointGroupModel, private LeadModel \$leadModel)
    {
        \$this->model            = \$pointGroupModel;
        \$this->entityClass      = Group::class;
        \$this->entityNameOne    = 'pointGroup';
        \$this->entityNameMulti  = 'pointGroups';
        \$this->serializerGroups = ['pointGroupDetails', 'pointGroupList', 'publishDetails'];

        parent::__construct(\$security, \$translator, \$entityResultHelper, \$router, \$formFactory, \$appVersion, \$requestStack, \$doctrine, \$modelFactory, \$dispatcher, \$coreParametersHelper, \$factory);
    }

    public function getContactPointGroupsAction(int \$contactId): Response
    {
        \$contact = \$this->leadModel->getEntity(\$contactId);

        if (null === \$contact) {
            return \$this->notFound(\$this->translator->trans('mautic.lead.event.api.lead.not.found'));
        }

        if (!\$this->checkEntityAccess(\$contact)) {
            return \$this->accessDenied();
        }

        \$groupScores = \$contact->getGroupScores();
        \$view        = \$this->view(
            [
                'total'       => count(\$groupScores),
                'groupScores' => \$groupScores,
            ],
            Response::HTTP_OK
        );

        \$context = \$view->getContext()->setGroups(['groupContactScoreDetails', 'pointGroupDetails']);
        \$view->setContext(\$context);

        return \$this->handleView(\$view);
    }

    public function getContactPointGroupAction(int \$contactId, int \$groupId): Response
    {
        \$contact = \$this->leadModel->getEntity(\$contactId);

        if (null === \$contact) {
            return \$this->notFound(\$this->translator->trans('mautic.lead.event.api.lead.not.found'));
        }

        if (!\$this->checkEntityAccess(\$contact)) {
            return \$this->accessDenied();
        }

        \$pointGroup = \$this->model->getEntity(\$groupId);
        if (null === \$pointGroup) {
            return \$this->notFound(\$this->translator->trans('mautic.lead.event.api.point.group.not.found'));
        }

        \$groupScore  = \$contact->getGroupScore(\$pointGroup);
        \$view        = \$this->view(
            [
                'groupScore' => \$groupScore,
            ],
            Response::HTTP_OK
        );

        \$context = \$view->getContext()->setGroups(['groupContactScoreDetails', 'pointGroupDetails']);
        \$view->setContext(\$context);

        return \$this->handleView(\$view);
    }

    public function adjustGroupPointsAction(Request \$request, IpLookupHelper \$ipLookupHelper, int \$contactId, int \$groupId, string \$operator, int \$value): Response
    {
        \$contact = \$this->leadModel->getEntity(\$contactId);

        if (null === \$contact) {
            return \$this->notFound(\$this->translator->trans('mautic.lead.event.api.lead.not.found'));
        }

        if (!\$this->checkEntityAccess(\$contact)) {
            return \$this->accessDenied();
        }

        \$pointGroup = \$this->model->getEntity(\$groupId);
        if (null === \$pointGroup) {
            return \$this->notFound(\$this->translator->trans('mautic.lead.event.api.point.group.not.found'));
        }

        if (!PointGroupModel::isAllowedPointOperation(\$operator)) {
            return \$this->badRequest(\$this->translator->trans('mautic.lead.event.api.operation.not.allowed'));
        }

        \$oldScore    = \$contact->getGroupScore(\$pointGroup)?->getScore();
        \$contact     = \$this->model->adjustPoints(\$contact, \$pointGroup, \$value, \$operator);
        \$newScore    = \$contact->getGroupScore(\$pointGroup)->getScore();
        \$delta       = \$newScore - (\$oldScore ?? 0);

        \$eventName  = InputHelper::clean(\$request->request->get('eventName', \$this->translator->trans('mautic.point.event.manual_change')));
        \$actionName = InputHelper::clean(\$request->request->get('actionName', \$this->translator->trans('mautic.lead.event.api')));
        \$contact->addPointsChangeLogEntry(
            type: 'API',
            name: \$eventName,
            action: \$actionName,
            pointChanges: \$delta,
            ip: \$ipLookupHelper->getIpAddress(),
            group: \$pointGroup
        );
        \$this->leadModel->saveEntity(\$contact, false);

        \$view    = \$this->view(['groupScore' => \$contact->getGroupScore(\$pointGroup)], Response::HTTP_OK);
        \$context = \$view->getContext()->setGroups(['groupContactScoreDetails', 'pointGroupDetails']);
        \$view->setContext(\$context);

        return \$this->handleView(\$view);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PointBundle/Controller/Api/PointGroupsApiController.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/PointBundle/Controller/Api/PointGroupsApiController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Controller\\Api\\PointGroupsApiController.php");
    }
}
