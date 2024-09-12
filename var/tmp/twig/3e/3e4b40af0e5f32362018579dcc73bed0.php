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

/* @bundles/SmsBundle/Helper/SmsHelper.php */
class __TwigTemplate_5dd67621dc66392437a76d7fe742c38b extends Template
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

namespace Mautic\\SmsBundle\\Helper;

use Doctrine\\ORM\\EntityManager;
use libphonenumber\\PhoneNumberFormat;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PhoneNumberHelper;
use Mautic\\LeadBundle\\Entity\\DoNotContact as DoNotContactEntity;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\DoNotContact;
use Mautic\\LeadBundle\\Model\\LeadModel;
use Mautic\\PluginBundle\\Helper\\IntegrationHelper;
use Mautic\\SmsBundle\\Form\\Type\\ConfigType;
use Mautic\\SmsBundle\\Model\\SmsModel;

class SmsHelper
{
    public function __construct(
        protected EntityManager \$em,
        protected LeadModel \$leadModel,
        protected PhoneNumberHelper \$phoneNumberHelper,
        protected SmsModel \$smsModel,
        protected IntegrationHelper \$integrationHelper,
        private DoNotContact \$doNotContact,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function unsubscribe(\$number)
    {
        \$number = \$this->phoneNumberHelper->format(\$number, PhoneNumberFormat::E164);

        /** @var LeadRepository \$repo */
        \$repo = \$this->em->getRepository(\\Mautic\\LeadBundle\\Entity\\Lead::class);

        \$args = [
            'filter' => [
                'force' => [
                    [
                        'column' => 'mobile',
                        'expr'   => 'eq',
                        'value'  => \$number,
                    ],
                ],
            ],
        ];

        \$leads = \$repo->getEntities(\$args);

        if (!empty(\$leads)) {
            \$lead = array_shift(\$leads);
        } else {
            // Try to find the lead based on the given phone number
            \$args['filter']['force'][0]['column'] = 'phone';

            \$leads = \$repo->getEntities(\$args);

            if (!empty(\$leads)) {
                \$lead = array_shift(\$leads);
            } else {
                return false;
            }
        }

        return \$this->doNotContact->addDncForContact(\$lead->getId(), 'sms', DoNotContactEntity::UNSUBSCRIBED);
    }

    public function getDisableTrackableUrls(): bool
    {
        return \$this->coreParametersHelper->get(ConfigType::SMS_DISABLE_TRACKABLE_URLS);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Helper/SmsHelper.php";
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
        return new Source("", "@bundles/SmsBundle/Helper/SmsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Helper\\SmsHelper.php");
    }
}
