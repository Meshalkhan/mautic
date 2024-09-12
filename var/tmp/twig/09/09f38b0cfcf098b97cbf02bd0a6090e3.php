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

/* @bundles/CoreBundle/Twig/Extension/ButtonExtension.php */
class __TwigTemplate_e9f3618f36505968a54e6a25444ef271 extends Template
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

use Mautic\\CoreBundle\\Twig\\Helper\\ButtonHelper;
use Symfony\\Component\\HttpFoundation\\RequestStack;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ButtonExtension extends AbstractExtension
{
    public function __construct(
        protected ButtonHelper \$buttonHelper,
        protected RequestStack \$requestStack,
        protected UrlGeneratorInterface \$router,
        protected TranslatorInterface \$translator
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('buttonReset', [\$this, 'reset'], ['is_safe' => ['all']]),
            new TwigFunction('buttonAdd', [\$this, 'addButton'], ['is_safe' => ['all']]),
            new TwigFunction('buttonSetMenuLink', [\$this, 'setMenuLink'], ['is_safe' => ['all']]),
            new TwigFunction('buttonSetWrappingTags', [\$this, 'setWrappingTags'], ['is_safe' => ['all']]),
            new TwigFunction('buttonSetGroupType', [\$this, 'setGroupType'], ['is_safe' => ['all']]),
            new TwigFunction('buttonGetCount', [\$this, 'getButtonCount']),
            new TwigFunction('buttonsRender', [\$this, 'render'], ['is_safe' => ['all']]),
            new TwigFunction('buttonsAdd', [\$this, 'addButtons'], ['is_safe' => ['all']]),
            new TwigFunction('buttonsAddFromTemplate', [\$this, 'addButtonsFromTemplate'], ['is_safe' => ['all']]),
        ];
    }

    public function reset(string \$location, string \$groupType = ButtonHelper::TYPE_GROUP, \$item = null): void
    {
        \$this->buttonHelper->reset(
            \$this->requestStack->getCurrentRequest(),
            \$location,
            \$groupType,
            \$item
        );
    }

    /**
     * @param array<string,mixed> \$button
     */
    public function addButton(array \$button): void
    {
        \$this->buttonHelper->addButton(\$button);
    }

    public function setMenuLink(?string \$menuLink): void
    {
        \$this->buttonHelper->setMenuLink(\$menuLink);
    }

    public function setWrappingTags(?string \$wrapOpeningTag, ?string \$wrapClosingTag): void
    {
        \$this->buttonHelper->setWrappingTags(\$wrapOpeningTag, \$wrapClosingTag);
    }

    public function setGroupType(string \$groupType): void
    {
        \$this->buttonHelper->setGroupType(\$groupType);
    }

    public function getButtonCount(): int
    {
        return \$this->buttonHelper->getButtonCount();
    }

    /**
     * @param array<array<string,mixed>> \$buttons
     */
    public function addButtons(array \$buttons): void
    {
        \$this->buttonHelper->addButtons(\$buttons);
    }

    public function render(string \$dropdownHtml = '', string \$closingDropdownHtml = ''): string
    {
        return \$this->buttonHelper->renderButtons(\$dropdownHtml, \$closingDropdownHtml);
    }

    /**
     * @param array<string,bool>   \$templateButtons
     * @param array<string,string> \$query
     * @param array<string,string> \$editAttr
     * @param array<string,string> \$routeVars
     * @param mixed                \$item
     */
    public function addButtonsFromTemplate(
        array \$templateButtons,
        array \$query,
        string \$actionRoute,
        string \$indexRoute,
        string \$langVar,
        string \$nameGetter,
        array \$editAttr = [],
        array \$routeVars = [],
        \$item = null,
        ?string \$tooltip = null
    ): void {
        foreach (\$templateButtons as \$action => \$enabled) {
            if (!\$enabled) {
                continue;
            }

            \$path     = false;
            \$primary  = false;
            \$priority = 0;

            switch (\$action) {
                case 'clone':
                case 'abtest':
                    \$actionQuery = [
                        /**
                         * If the item has the getVariantParent(), it probably implements VariantEntityInterface,
                         * but that doesn't have a getId() method so we can't do \$item instanceof VariantEntityInterface here.
                         */
                        'objectId' => ('abtest' == \$action && method_exists(\$item, 'getVariantParent') && \$item->getVariantParent())
                            ? \$item->getVariantParent()->getId() : \$item->getId(),
                    ];
                    \$icon = ('clone' == \$action) ? 'file-copy-line' : 'a-b';
                    \$path = \$this->router->generate(\$actionRoute, array_merge(['objectAction' => \$action], \$actionQuery, \$query));
                    break;
                case 'close':
                    \$closeParameters = \$routeVars['close'] ?? [];
                    \$icon            = 'close-line';
                    \$path            = \$this->router->generate(\$indexRoute, \$closeParameters);
                    \$primary         = true;
                    \$priority        = 200;
                    break;
                case 'new':
                case 'edit':
                    \$actionQuery = ('edit' == \$action) ? ['objectId' => \$item->getId()] : [];
                    \$icon        = ('edit' == \$action) ? 'edit-line' : 'add-line';
                    \$path        = \$this->router->generate(\$actionRoute, array_merge(['objectAction' => \$action], \$actionQuery, \$query));
                    \$primary     = true;
                    break;
                case 'delete':
                    \$this->buttonHelper->addButton(
                        [
                            'confirm' => [
                                'message' => \$this->translator->trans(
                                    'mautic.'.\$langVar.'.form.confirmdelete',
                                    ['%name%' => \$item->\$nameGetter().' ('.\$item->getId().')']
                                ),
                                'confirmAction' => \$this->router->generate(
                                    \$actionRoute,
                                    array_merge(['objectAction' => 'delete', 'objectId' => \$item->getId()], \$query)
                                ),
                                'template' => 'delete',
                                'btnClass' => false,
                            ],
                            'priority' => -1,
                        ]
                    );
                    break;
            }

            if (\$path) {
                \$mergeAttr = (!in_array(\$action, ['edit', 'new'])) ? [] : \$editAttr;
                \$this->buttonHelper->addButton(
                    [
                        'attr' => array_merge(
                            [
                                'class'       => 'btn btn-default',
                                'href'        => \$path,
                                'data-toggle' => 'ajax',
                            ],
                            \$mergeAttr
                        ),
                        'iconClass' => 'ri-'.\$icon,
                        'btnText'   => \$this->translator->trans('mautic.core.form.'.\$action),
                        'priority'  => \$priority,
                        'primary'   => \$primary,
                        'tooltip'   => \$tooltip,
                    ]
                );
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/ButtonExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/ButtonExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\ButtonExtension.php");
    }
}
