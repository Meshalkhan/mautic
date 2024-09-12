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

/* @bundles/EmailBundle/Event/MonitoredEmailEvent.php */
class __TwigTemplate_08f31e96b1dac4ffd98186334093d27e extends Template
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

namespace Mautic\\EmailBundle\\Event;

use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Contracts\\EventDispatcher\\Event;

class MonitoredEmailEvent extends Event
{
    private array \$folders = [];

    public function __construct(
        private FormBuilderInterface \$formBuilder,
        private array \$data
    ) {
    }

    /**
     * Get the FormBuilder for monitored_mailboxes FormType.
     *
     * @return FormBuilderInterface
     */
    public function getFormBuilder()
    {
        return \$this->formBuilder;
    }

    /**
     * Insert a folder to configure.
     *
     * @param string \$default
     */
    public function addFolder(\$bundleKey, \$folderKey, \$label, \$default = ''): void
    {
        \$keyName = (\$folderKey) ? \$bundleKey.'_'.\$folderKey : \$bundleKey;

        \$this->folders[\$keyName] = [
            'label'   => \$label,
            'default' => \$default,
        ];
    }

    /**
     * Get the value set for a specific bundle/folder.
     *
     * @return string
     */
    public function getData(\$bundleKey, \$folderKey, \$default = '')
    {
        \$keyName = \$bundleKey.'_'.\$folderKey;

        return \$this->data[\$keyName] ?? \$default;
    }

    /**
     * Get array of folders.
     *
     * @return array
     */
    public function getFolders()
    {
        return \$this->folders;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Event/MonitoredEmailEvent.php";
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
        return new Source("", "@bundles/EmailBundle/Event/MonitoredEmailEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Event\\MonitoredEmailEvent.php");
    }
}
