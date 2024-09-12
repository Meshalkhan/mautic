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

/* @bundles/EmailBundle/Mailer/Message/MauticMessage.php */
class __TwigTemplate_e1abcd854331ca990313e3b6f7ab9b32 extends Template
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

namespace Mautic\\EmailBundle\\Mailer\\Message;

use Symfony\\Component\\Mime\\Email;

class MauticMessage extends Email
{
    /**
     * @var array<string, array<string, string>>
     */
    protected \$metadata = [];

    protected ?string \$leadIdHash = null;

    /**
     * @param array<string, string> \$metadata
     */
    public function addMetadata(string \$email, array \$metadata): void
    {
        \$this->metadata[\$email] = \$metadata;
    }

    /**
     * Get the metadata.
     *
     * @return array<string, array<string, string>>
     */
    public function getMetadata(): array
    {
        return \$this->metadata;
    }

    /**
     * Clears the metadata.
     */
    public function clearMetadata(): void
    {
        \$this->metadata = [];
    }

    public function updateLeadIdHash(?string \$hash): void
    {
        \$this->leadIdHash = \$hash;
    }

    public function getLeadIdHash(): ?string
    {
        return \$this->leadIdHash;
    }

    /**
     * @return array<mixed>
     */
    public function __serialize(): array
    {
        if (empty(\$this->leadIdHash)) {
            \$this->leadIdHash = '';
        }

        return [\$this->metadata, \$this->leadIdHash, parent::__serialize()];
    }

    /**
     * @param array<mixed> \$data
     */
    public function __unserialize(array \$data): void
    {
        [\$this->metadata, \$this->leadIdHash, \$parentData] = \$data;

        parent::__unserialize(\$parentData);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Mailer/Message/MauticMessage.php";
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
        return new Source("", "@bundles/EmailBundle/Mailer/Message/MauticMessage.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Mailer\\Message\\MauticMessage.php");
    }
}
