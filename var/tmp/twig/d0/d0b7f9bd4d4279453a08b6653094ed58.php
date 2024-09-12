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

/* @bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php */
class __TwigTemplate_7c7cd8115cc0eb01a655249f65a9290a extends Template
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

namespace Mautic\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric;

use Mautic\\CoreBundle\\Security\\Exception\\Cryptography\\Symmetric\\InvalidDecryptionException;

/**
 * Interface SymmetricCipherInterface.
 */
interface SymmetricCipherInterface
{
    /**
     * @param string \$secretMessage
     * @param string \$key
     * @param string \$randomInitVector
     *
     * @return string
     */
    public function encrypt(\$secretMessage, \$key, \$randomInitVector);

    /**
     * @param string \$encryptedMessage
     * @param string \$key
     * @param string \$originalInitVector
     *
     * @return string
     *
     * @throws InvalidDecryptionException
     */
    public function decrypt(\$encryptedMessage, \$key, \$originalInitVector);

    /**
     * @return string
     */
    public function getRandomInitVector();

    /**
     * @return bool
     */
    public function isSupported();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/SymmetricCipherInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\SymmetricCipherInterface.php");
    }
}
