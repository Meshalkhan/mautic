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

/* @bundles/LeadBundle/Entity/CustomFieldEntityInterface.php */
class __TwigTemplate_1cc36cf1081861a3789fc90b167d6761 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

interface CustomFieldEntityInterface
{
    /**
     * @param mixed[] \$fields
     *
     * @return mixed
     */
    public function setFields(\$fields);

    /**
     * @return mixed
     */
    public function getFields();

    /**
     * @param string \$alias
     * @param mixed  \$value
     * @param string \$oldValue
     *
     * @return mixed
     */
    public function addUpdatedField(\$alias, \$value, \$oldValue = '');

    /**
     * @return mixed
     */
    public function getUpdatedFields();

    /**
     * Get a field value (should include those in updated fields).
     *
     * @param string      \$field alias
     * @param string|null \$group
     *
     * @return mixed
     */
    public function getFieldValue(\$field, \$group = null);

    /**
     * Get field details.
     *
     * @param string \$key
     * @param string \$group
     *
     * @return array|false
     */
    public function getField(\$key, \$group = null);

    /**
     * Get flat array of profile fields without groups.
     *
     * @return mixed
     */
    public function getProfileFields();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Entity/CustomFieldEntityInterface.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/CustomFieldEntityInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\CustomFieldEntityInterface.php");
    }
}
