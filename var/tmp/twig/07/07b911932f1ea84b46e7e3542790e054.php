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

/* @bundles/CoreBundle/Twig/Extension/EmojiExtension.php */
class __TwigTemplate_9c5a2ba116e2d73af0d0b6acc9658df0 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Helper\\EmojiHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class EmojiExtension extends AbstractExtension
{
    public function __construct(
        protected EmojiHelper \$emojiHelper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('emoji_to_html', [\$this, 'toHtml'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * Convert to html.
     *
     * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
     */
    public function toHtml(string \$text, string \$from = 'emoji'): string
    {
        return \$this->emojiHelper->toHtml(\$text, \$from);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/EmojiExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/EmojiExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\EmojiExtension.php");
    }
}
