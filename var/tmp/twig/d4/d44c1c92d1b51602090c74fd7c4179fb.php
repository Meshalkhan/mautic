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

/* @bundles/FormBundle/EventListener/PageSubscriber.php */
class __TwigTemplate_466506b5a1b3b8b61aa07b3ef7061fcb extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use Mautic\\CoreBundle\\Helper\\BuilderTokenHelperFactory;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\FormEvents;
use Mautic\\FormBundle\\Model\\FormModel;
use Mautic\\PageBundle\\Event\\PageBuilderEvent;
use Mautic\\PageBundle\\Event\\PageDisplayEvent;
use Mautic\\PageBundle\\PageEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class PageSubscriber implements EventSubscriberInterface
{
    private string \$formRegex = '{form=(.*?)}';

    public function __construct(
        private FormModel \$formModel,
        private BuilderTokenHelperFactory \$builderTokenHelperFactory,
        private TranslatorInterface \$translator,
        private CorePermissions \$security
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PageEvents::PAGE_ON_DISPLAY => ['onPageDisplay', 0],
            PageEvents::PAGE_ON_BUILD   => ['onPageBuild', 0],
        ];
    }

    /**
     * Add forms to available page tokens.
     */
    public function onPageBuild(PageBuilderEvent \$event): void
    {
        if (\$event->abTestWinnerCriteriaRequested()) {
            // add AB Test Winner Criteria
            \$formSubmissions = [
                'group'    => 'mautic.form.abtest.criteria',
                'label'    => 'mautic.form.abtest.criteria.submissions',
                'event'    => FormEvents::ON_DETERMINE_SUBMISSION_RATE_WINNER,
            ];
            \$event->addAbTestWinnerCriteria('form.submissions', \$formSubmissions);
        }

        if (\$event->tokensRequested(\$this->formRegex)) {
            \$tokenHelper = \$this->builderTokenHelperFactory->getBuilderTokenHelper('form');
            \$event->addTokensFromHelper(\$tokenHelper, \$this->formRegex, 'name');
        }
    }

    public function onPageDisplay(PageDisplayEvent \$event): void
    {
        \$content = \$event->getContent();
        \$page    = \$event->getPage();
        \$regex   = '/'.\$this->formRegex.'/i';

        preg_match_all(\$regex, \$content, \$matches);

        if (count(\$matches[0])) {
            foreach (\$matches[1] as \$id) {
                \$form = \$this->formModel->getEntity(\$id);
                if (null !== \$form
                    && (
                        \$form->isPublished(false)
                        || \$this->security->hasEntityAccess(
                            'form:forms:viewown', 'form:forms:viewother', \$form->getCreatedBy()
                        )
                    )
                ) {
                    \$formHtml = (\$form->isPublished()) ? \$this->formModel->getContent(\$form) :
                        '<div class=\"mauticform-error\">'.
                        \$this->translator->trans('mautic.form.form.pagetoken.notpublished').
                        '</div>';

                    // add the hidden page input
                    \$pageInput = \"\\n<input type=\\\"hidden\\\" name=\\\"mauticform[mauticpage]\\\" value=\\\"{\$page->getId()}\\\" />\\n\";
                    \$formHtml  = preg_replace('#</form>#', \$pageInput.'</form>', \$formHtml);

                    // pouplate get parameters
                    \$this->formModel->populateValuesWithGetParameters(\$form, \$formHtml);
                    \$content = str_replace('{form='.\$id.'}', \$formHtml, \$content);
                } else {
                    \$content = str_replace('{form='.\$id.'}', '', \$content);
                }
            }
        }
        \$event->setContent(\$content);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/EventListener/PageSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/PageSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\EventListener\\PageSubscriber.php");
    }
}
