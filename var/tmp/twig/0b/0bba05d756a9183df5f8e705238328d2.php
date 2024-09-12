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

/* @bundles/CoreBundle/Doctrine/Type/ArrayType.php */
class __TwigTemplate_eb8e9f3c572fa5914b730609cea96da4 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\Type;

use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Types\\ConversionException;

/**
 * Type that maps a PHP array to a clob SQL type.
 *
 * @since 2.0
 */
class ArrayType extends \\Doctrine\\DBAL\\Types\\ArrayType
{
    public function convertToDatabaseValue(\$value, AbstractPlatform \$platform)
    {
        if (!is_array(\$value)) {
            return (null === \$value) ? 'N;' : 'a:0:{}';
        }

        \$serialized = serialize(\$value);

        if (str_contains(\$serialized, chr(0))) {
            \$serialized = str_replace(\"\\0\", '__NULL_BYTE__', \$serialized);
            throw new ConversionException('Serialized array includes null-byte. This cannot be saved as a text. Please check if you not provided object with protected or private members. Serialized Array: '.\$serialized);
        }

        return \$serialized;
    }

    /**
     * @param mixed \$value
     *
     * @return array
     */
    public function convertToPHPValue(\$value, AbstractPlatform \$platform)
    {
        try {
            \$value = parent::convertToPHPValue(\$value, \$platform);
            if (!is_array(\$value) || (1 > count(\$value))) {
                return \$value;
            }

            foreach (\$value as \$key => \$element) {
                if (!is_object(\$element)) {
                    continue;
                }

                \$reflectionObject     = new \\ReflectionObject(\$element);
                \$reflectionProperties = \$reflectionObject->getProperties(\\ReflectionProperty::IS_PROTECTED | \\ReflectionProperty::IS_PRIVATE);

                // Let's check if \$value contains objects with private or protected members.
                // If it contains such objects we have to remove them from \$array.
                // This will \"heal\" the database. There must be no null bytes.
                if (0 < count(\$reflectionProperties)) {
                    unset(\$value[\$key]);
                }
            }

            return \$value;
        } catch (ConversionException|\\ErrorException) {
            return [];
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
        return "@bundles/CoreBundle/Doctrine/Type/ArrayType.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/Type/ArrayType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\Type\\ArrayType.php");
    }
}
