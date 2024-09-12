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

/* @bundles/LeadBundle/Field/BackgroundService.php */
class __TwigTemplate_f93ce3b659dc6575153d4352e2930575 extends Template
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

namespace Mautic\\LeadBundle\\Field;

use Doctrine\\DBAL\\Exception\\DriverException;
use Doctrine\\DBAL\\Schema\\SchemaException;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\Field\\Dispatcher\\FieldColumnBackgroundJobDispatcher;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnCreateException;
use Mautic\\LeadBundle\\Field\\Exception\\AbortColumnUpdateException;
use Mautic\\LeadBundle\\Field\\Exception\\ColumnAlreadyCreatedException;
use Mautic\\LeadBundle\\Field\\Exception\\CustomFieldLimitException;
use Mautic\\LeadBundle\\Field\\Exception\\LeadFieldWasNotFoundException;
use Mautic\\LeadBundle\\Field\\Notification\\CustomFieldNotification;
use Mautic\\LeadBundle\\Model\\FieldModel;

class BackgroundService
{
    public function __construct(
        private FieldModel \$fieldModel,
        private CustomFieldColumn \$customFieldColumn,
        private LeadFieldSaver \$leadFieldSaver,
        private FieldColumnBackgroundJobDispatcher \$fieldColumnBackgroundJobDispatcher,
        private CustomFieldNotification \$customFieldNotification
    ) {
    }

    /**
     * @throws AbortColumnCreateException
     * @throws ColumnAlreadyCreatedException
     * @throws CustomFieldLimitException
     * @throws LeadFieldWasNotFoundException
     * @throws \\Doctrine\\DBAL\\Exception
     * @throws DriverException
     * @throws SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function addColumn(int \$leadFieldId, ?int \$userId): void
    {
        \$leadField = \$this->fieldModel->getEntity(\$leadFieldId);
        if (null === \$leadField) {
            throw new LeadFieldWasNotFoundException('LeadField entity was not found');
        }

        if (!\$leadField->getColumnIsNotCreated()) {
            \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
            throw new ColumnAlreadyCreatedException('Column was already created');
        }

        try {
            \$this->fieldColumnBackgroundJobDispatcher->dispatchPreAddColumnEvent(\$leadField);
        } catch (NoListenerException \$e) {
        }

        try {
            \$this->customFieldColumn->processCreateLeadColumn(\$leadField, false);
        } catch (DriverException|SchemaException|\\Mautic\\CoreBundle\\Exception\\SchemaException \$e) {
            \$this->customFieldNotification->customFieldCannotBeCreated(\$leadField, \$userId);
            throw \$e;
        } catch (CustomFieldLimitException \$e) {
            \$this->customFieldNotification->customFieldLimitWasHit(\$leadField, \$userId);
            throw \$e;
        }

        \$leadField->setColumnWasCreated();
        \$this->leadFieldSaver->saveLeadFieldEntity(\$leadField, false);

        \$this->customFieldNotification->customFieldWasCreated(\$leadField, \$userId);
    }

    /**
     * @throws AbortColumnUpdateException
     * @throws DriverException
     * @throws LeadFieldWasNotFoundException
     * @throws SchemaException
     * @throws \\Mautic\\CoreBundle\\Exception\\SchemaException
     */
    public function updateColumn(int \$leadFieldId, int \$userId): void
    {
        \$leadField = \$this->fieldModel->getEntity(\$leadFieldId);
        if (null === \$leadField) {
            throw new LeadFieldWasNotFoundException('LeadField entity was not found');
        }

        try {
            \$this->fieldColumnBackgroundJobDispatcher->dispatchPreUpdateColumnEvent(\$leadField);
        } catch (NoListenerException) {
        }

        \$this->customFieldColumn->processUpdateLeadColumn(\$leadField);
        \$this->customFieldNotification->customFieldWasUpdated(\$leadField, \$userId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/BackgroundService.php";
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
        return new Source("", "@bundles/LeadBundle/Field/BackgroundService.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\BackgroundService.php");
    }
}
