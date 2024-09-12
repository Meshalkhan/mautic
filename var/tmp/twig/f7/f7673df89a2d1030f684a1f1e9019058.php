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

/* @bundles/FormBundle/EventListener/FormValidationSubscriber.php */
class __TwigTemplate_2f023a93abb4615c1bd0fe3e36ba9b8d extends Template
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

namespace Mautic\\FormBundle\\EventListener;

use libphonenumber\\NumberParseException;
use libphonenumber\\PhoneNumberUtil;
use Mautic\\CoreBundle\\Helper\\ArrayHelper;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\FormBundle\\Event as Events;
use Mautic\\FormBundle\\Form\\Type\\FormFieldEmailType;
use Mautic\\FormBundle\\Form\\Type\\FormFieldTelType;
use Mautic\\FormBundle\\FormEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class FormValidationSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TranslatorInterface \$translator,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::FORM_ON_BUILD    => ['onFormBuilder', 0],
            FormEvents::ON_FORM_VALIDATE => ['onFormValidate', 0],
        ];
    }

    /**
     * Add a simple email form.
     */
    public function onFormBuilder(Events\\FormBuilderEvent \$event): void
    {
        \$event->addValidator(
            'phone.validation',
            [
                'eventName' => FormEvents::ON_FORM_VALIDATE,
                'fieldType' => 'tel',
                'formType'  => FormFieldTelType::class,
            ]
        );

        if (!empty(\$this->coreParametersHelper->get('do_not_submit_emails'))) {
            \$event->addValidator(
                'email.validation',
                [
                    'eventName' => FormEvents::ON_FORM_VALIDATE,
                    'fieldType' => 'email',
                    'formType'  => FormFieldEmailType::class,
                ]
            );
        }
    }

    /**
     * Custom validation.
     */
    public function onFormValidate(Events\\ValidationEvent \$event): void
    {
        \$value = \$event->getValue();

        if (!empty(\$value)) {
            \$this->fieldTelValidation(\$event);
            \$this->fieldEmailValidation(\$event);
        }
    }

    private function fieldEmailValidation(Events\\ValidationEvent \$event): void
    {
        \$field = \$event->getField();
        \$value = \$event->getValue();
        if ('email' === \$field->getType() && !empty(\$field->getValidation()['donotsubmit'])) {
            // Check the domains using shell wildcard patterns
            \$donotSubmitFilter  = fn (\$doNotSubmitArray): bool => fnmatch(\$doNotSubmitArray, \$value, FNM_CASEFOLD);
            \$notNotSubmitEmails = \$this->coreParametersHelper->get('do_not_submit_emails');
            if (array_filter(\$notNotSubmitEmails, \$donotSubmitFilter)) {
                \$event->failedValidation(ArrayHelper::getValue('donotsubmit_validationmsg', \$field->getValidation()));
            }
        }
    }

    private function fieldTelValidation(Events\\ValidationEvent \$event): void
    {
        \$field = \$event->getField();
        \$value = \$event->getValue();

        if ('tel' === \$field->getType() && !empty(\$field->getValidation()['international'])) {
            \$phoneUtil = PhoneNumberUtil::getInstance();
            try {
                \$phoneUtil->parse(\$value, PhoneNumberUtil::UNKNOWN_REGION);
            } catch (NumberParseException) {
                if (!empty(\$field->getValidation()['international_validationmsg'])) {
                    \$event->failedValidation(\$field->getValidation()['international_validationmsg']);
                } else {
                    \$event->failedValidation(\$this->translator->trans('mautic.form.submission.phone.invalid', [], 'validators'));
                }
            }
        }
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
        return "@bundles/FormBundle/EventListener/FormValidationSubscriber.php";
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
        return new Source("", "@bundles/FormBundle/EventListener/FormValidationSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\EventListener\\FormValidationSubscriber.php");
    }
}
