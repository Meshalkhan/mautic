<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Twig/Extension/EmojiExtension.php */
class __TwigTemplate_03b373b13fed2c419b2543130b183087 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Twig/Extension/EmojiExtension.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Twig/Extension/EmojiExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\EmojiExtension.php");
    }
}
