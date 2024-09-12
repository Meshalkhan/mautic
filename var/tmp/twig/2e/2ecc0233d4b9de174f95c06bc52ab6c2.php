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

/* @bundles/ChannelBundle/Model/FrequencyActionModel.php */
class __TwigTemplate_953880935582d44032a11f451edc4907 extends Template
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

namespace Mautic\\ChannelBundle\\Model;

use Mautic\\LeadBundle\\Entity\\FrequencyRule;
use Mautic\\LeadBundle\\Entity\\FrequencyRuleRepository;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Model\\LeadModel;

class FrequencyActionModel
{
    public function __construct(
        private LeadModel \$contactModel,
        private FrequencyRuleRepository \$frequencyRuleRepository
    ) {
    }

    /**
     * Update channels.
     *
     * @param string \$preferredChannel
     */
    public function update(array \$contactIds, array \$params, \$preferredChannel): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->updateFrequencyRules(\$contact, \$params, \$preferredChannel);
        }
    }

    /**
     * @param string \$preferredChannel
     */
    private function updateFrequencyRules(Lead \$contact, array \$params, \$preferredChannel): void
    {
        \$frequencyRules = \$contact->getFrequencyRules()->toArray();
        \$channels       = \$this->contactModel->getPreferenceChannels();

        foreach (\$channels as \$channel) {
            if (is_null(\$preferredChannel)) {
                \$preferredChannel = \$channel;
            }

            \$frequencyRule = \$frequencyRules[\$channel] ?? new FrequencyRule();
            \$frequencyRule->setChannel(\$channel);
            \$frequencyRule->setLead(\$contact);

            if (!\$frequencyRule->getDateAdded()) {
                \$frequencyRule->setDateAdded(new \\DateTime());
            }

            if (!empty(\$params['frequency_number_'.\$channel]) && !empty(\$params['frequency_time_'.\$channel])) {
                \$frequencyRule->setFrequencyNumber(\$params['frequency_number_'.\$channel]);
                \$frequencyRule->setFrequencyTime(\$params['frequency_time_'.\$channel]);
            } else {
                \$frequencyRule->setFrequencyNumber(null);
                \$frequencyRule->setFrequencyTime(null);
            }

            if (!empty(\$params['contact_pause_start_date_'.\$channel])) {
                \$frequencyRule->setPauseFromDate(new \\DateTime(\$params['contact_pause_start_date_'.\$channel]));
            }

            if (!empty(\$params['contact_pause_end_date_'.\$channel])) {
                \$frequencyRule->setPauseToDate(new \\DateTime(\$params['contact_pause_end_date_'.\$channel]));
            }

            \$frequencyRule->setPreferredChannel(\$preferredChannel === \$channel);

            \$contact->addFrequencyRule(\$frequencyRule);

            \$this->frequencyRuleRepository->saveEntity(\$frequencyRule);
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
        return "@bundles/ChannelBundle/Model/FrequencyActionModel.php";
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
        return new Source("", "@bundles/ChannelBundle/Model/FrequencyActionModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Model\\FrequencyActionModel.php");
    }
}
