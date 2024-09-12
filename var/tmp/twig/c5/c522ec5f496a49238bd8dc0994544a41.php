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

/* @bundles/FormBundle/Model/ActionModel.php */
class __TwigTemplate_4fdd74e7c0288c21fbc158c2f3757631 extends Template
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

namespace Mautic\\FormBundle\\Model;

use Mautic\\CoreBundle\\Model\\FormModel as CommonFormModel;
use Mautic\\FormBundle\\Entity\\Action;
use Mautic\\FormBundle\\Form\\Type\\ActionType;
use Symfony\\Component\\Form\\FormFactoryInterface;

/**
 * @extends CommonFormModel<Action>
 */
class ActionModel extends CommonFormModel
{
    /**
     * @return \\Mautic\\FormBundle\\Entity\\ActionRepository
     */
    public function getRepository()
    {
        return \$this->em->getRepository(Action::class);
    }

    public function getPermissionBase(): string
    {
        return 'form:forms';
    }

    public function getEntity(\$id = null): ?Action
    {
        if (null === \$id) {
            return new Action();
        }

        return parent::getEntity(\$id);
    }

    /**
     * @param object \$entity
     * @param array  \$options
     */
    public function createForm(\$entity, FormFactoryInterface \$formFactory, \$action = null, \$options = []): \\Symfony\\Component\\Form\\FormInterface
    {
        if (!\$entity instanceof Action) {
            throw new \\InvalidArgumentException('Entity must be of class Action');
        }

        if (\$action) {
            \$options['action'] = \$action;
        }

        if (empty(\$options['formId']) && null !== \$entity->getForm()) {
            \$options['formId'] = \$entity->getForm()->getId();
        }

        return \$formFactory->create(ActionType::class, \$entity->convertToArray(), \$options);
    }

    /**
     * Get segments which are dependent on given segment.
     *
     * @param int \$segmentId
     */
    public function getFormsIdsWithDependenciesOnSegment(\$segmentId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'LIKE', 'value'=>'lead.changelist'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$dependents = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            foreach (\$properties as \$property) {
                if (in_array(\$segmentId, \$property)) {
                    \$dependents[] = \$entity->getForm()->getId();
                }
            }
        }

        return \$dependents;
    }

    /**
     * @return array<int, int>
     */
    public function getFormsIdsWithDependenciesOnEmail(int \$emailId): array
    {
        \$filter = [
            'force'  => [
                ['column' => 'e.type', 'expr' => 'LIKE', 'value' => 'email.send%'],
            ],
        ];
        \$entities = \$this->getEntities(
            [
                'filter'     => \$filter,
            ]
        );
        \$formIds = [];
        foreach (\$entities as \$entity) {
            \$properties = \$entity->getProperties();
            if (isset(\$properties['email']) && (int) \$properties['email'] === \$emailId) {
                \$formIds[] = \$entity->getForm()->getid();
            }
            if (isset(\$properties['useremail']['email']) && (int) \$properties['useremail']['email'] === \$emailId) {
                \$formIds[] = \$entity->getForm()->getid();
            }
        }

        return array_unique(\$formIds);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Model/ActionModel.php";
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
        return new Source("", "@bundles/FormBundle/Model/ActionModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Model\\ActionModel.php");
    }
}
