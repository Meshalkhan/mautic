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

/* @bundles/LeadBundle/Deduplicate/ContactDeduper.php */
class __TwigTemplate_7c594ee43adfa78f25df049e8407ef7f extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Deduplicate\\Exception\\SameContactException;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Entity\\LeadRepository;
use Mautic\\LeadBundle\\Model\\FieldModel;

class ContactDeduper
{
    use DeduperTrait;

    public function __construct(
        FieldModel \$fieldModel,
        private ContactMerger \$contactMerger,
        private LeadRepository \$leadRepository
    ) {
        \$this->fieldModel     = \$fieldModel;
    }

    /**
     * @return array<string,string>
     */
    public function getUniqueFields(string \$object): array
    {
        return \$this->fieldModel->getUniqueIdentifierFields(['object' => \$object]);
    }

    /**
     * @param string[] \$uniqueFieldAliases
     */
    public function countDuplicatedContacts(array \$uniqueFieldAliases): int
    {
        return \$this->leadRepository->getContactCountWithDuplicateValues(\$uniqueFieldAliases);
    }

    /**
     * @param string[] \$uniqueFieldAliases
     *
     * @return string[]
     */
    public function getDuplicateContactIds(array \$uniqueFieldAliases): array
    {
        return \$this->leadRepository->getDuplicatedContactIds(\$uniqueFieldAliases);
    }

    /**
     * @param string[]|int[] \$contactIds
     *
     * @return Lead[]
     */
    public function getContactsByIds(array \$contactIds): array
    {
        return \$this->leadRepository->getEntities(['ids' => \$contactIds, 'ignore_paginator' => false]);
    }

    /**
     * @param Lead[] \$contacts
     */
    public function deduplicateContactBatch(array \$contacts, bool \$newerIntoOlder, callable \$onContactProcessed = null): void
    {
        foreach (\$contacts as \$contact) {
            \$duplicates = \$this->checkForDuplicateContacts(\$contact->getProfileFields(), \$newerIntoOlder);

            \$this->mergeContacts(\$duplicates);
            \$this->detachContacts(\$duplicates);

            if (\$onContactProcessed) {
                \$onContactProcessed(\$contact);
            }
        }
    }

    /**
     * To save RAM.
     *
     * @param Lead[] \$contacts
     */
    public function detachContacts(array \$contacts): void
    {
        \$this->leadRepository->detachEntities(\$contacts);
    }

    /**
     * @param Lead[] \$duplicates
     */
    public function mergeContacts(array \$duplicates): void
    {
        if (empty(\$duplicates)) {
            return;
        }

        \$loser = reset(\$duplicates);
        while (\$winner = next(\$duplicates)) {
            try {
                \$this->contactMerger->merge(\$winner, \$loser);
            } catch (SameContactException) {
            }

            \$loser = \$winner;
        }
    }

    /**
     * @return Lead[]
     */
    public function checkForDuplicateContacts(array \$queryFields, bool \$mergeNewerIntoOlder = false)
    {
        \$duplicates = [];
        \$uniqueData = \$this->getUniqueData(\$queryFields);
        if (!empty(\$uniqueData)) {
            \$duplicates = \$this->leadRepository->getLeadsByUniqueFields(\$uniqueData);

            // By default, duplicates are ordered by newest first
            if (!\$mergeNewerIntoOlder) {
                // Reverse the array so that oldest are on \"top\" in order to merge oldest into the next until they all have been merged into the
                // the newest record
                \$duplicates = array_reverse(\$duplicates);
            }
        }

        return \$duplicates;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/ContactDeduper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/ContactDeduper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Deduplicate\\ContactDeduper.php");
    }
}
