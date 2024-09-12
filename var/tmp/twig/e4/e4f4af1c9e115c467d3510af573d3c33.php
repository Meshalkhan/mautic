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

/* @bundles/CampaignBundle/Command/WriteCountTrait.php */
class __TwigTemplate_a72b963a27890f885913d60fc75ea184 extends Template
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

namespace Mautic\\CampaignBundle\\Command;

use Mautic\\CampaignBundle\\Executioner\\Result\\Counter;
use Symfony\\Component\\Console\\Output\\OutputInterface;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

trait WriteCountTrait
{
    private function writeCounts(OutputInterface \$output, TranslatorInterface \$translator, Counter \$counter): void
    {
        \$output->writeln('');
        \$output->writeln(
            '<comment>'.\$translator->trans(
                'mautic.campaign.trigger.events_executed',
                ['%count%' => \$counter->getTotalExecuted()]
            )
            .'</comment>'
        );
        \$output->writeln(
            '<comment>'.\$translator->trans(
                'mautic.campaign.trigger.events_scheduled',
                ['%count%' => \$counter->getTotalScheduled()]
            )
            .'</comment>'
        );
        \$output->writeln('');
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Command/WriteCountTrait.php";
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
        return new Source("", "@bundles/CampaignBundle/Command/WriteCountTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Command\\WriteCountTrait.php");
    }
}
