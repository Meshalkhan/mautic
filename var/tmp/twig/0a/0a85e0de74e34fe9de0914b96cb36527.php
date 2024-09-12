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

/* @bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php */
class __TwigTemplate_c87af46c64c18c1f6bde4a8a544d5dc5 extends Template
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

class OpenSSLCipher implements SymmetricCipherInterface
{
    private string \$cipher = 'AES-256-CBC';

    /**
     * @param string \$secretMessage
     * @param string \$key
     * @param string \$randomInitVector
     */
    public function encrypt(\$secretMessage, \$key, \$randomInitVector): string|bool
    {
        \$key  = pack('H*', \$key);
        \$data = \$secretMessage.\$this->getHash(\$secretMessage, \$this->getHashKey(\$key));

        return openssl_encrypt(\$data, \$this->cipher, \$key, \$options = 0, \$randomInitVector);
    }

    /**
     * @param string \$encryptedMessage
     * @param string \$key
     * @param string \$originalInitVector
     *
     * @throws InvalidDecryptionException
     */
    public function decrypt(\$encryptedMessage, \$key, \$originalInitVector): string
    {
        if (strlen(\$originalInitVector) !== \$this->getInitVectorSize()) {
            throw new InvalidDecryptionException();
        }
        \$key           = pack('H*', \$key);
        \$decrypted     = trim(openssl_decrypt(\$encryptedMessage, \$this->cipher, \$key, \$options = 0, \$originalInitVector));
        \$sha256Length  = 64;
        \$secretMessage = substr(\$decrypted, 0, -\$sha256Length);
        \$originalHash  = substr(\$decrypted, -\$sha256Length);
        \$newHash       = \$this->getHash(\$secretMessage, \$this->getHashKey(\$key));
        if (!hash_equals(\$originalHash, \$newHash)) {
            throw new InvalidDecryptionException();
        }

        return \$secretMessage;
    }

    public function getRandomInitVector(): string
    {
        return openssl_random_pseudo_bytes(\$this->getInitVectorSize());
    }

    public function isSupported(): bool
    {
        if (!extension_loaded('openssl')) {
            return false;
        }
        \$testForRandom = \$this->getRandomInitVector();

        return false !== \$testForRandom;
    }

    private function getInitVectorSize(): int|bool
    {
        return openssl_cipher_iv_length(\$this->cipher);
    }

    /**
     * @param string \$data
     * @param string \$key
     */
    private function getHash(\$data, \$key): string
    {
        return hash_hmac('sha256', \$data, \$key);
    }

    private function getHashKey(\$binaryKey): string
    {
        \$hexKey = bin2hex(\$binaryKey);

        // Get second half of hexKey version (stable but different than original key)
        return substr(\$hexKey, -32);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php";
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
        return new Source("", "@bundles/CoreBundle/Security/Cryptography/Cipher/Symmetric/OpenSSLCipher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Security\\Cryptography\\Cipher\\Symmetric\\OpenSSLCipher.php");
    }
}
