<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace PhpCsFixer\Fixer\Phpdoc;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\Fixer\ConfigurableFixerTrait;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
use ECSPrefix202408\Symfony\Component\OptionsResolver\Exception\InvalidOptionsException;
use ECSPrefix202408\Symfony\Component\OptionsResolver\Options;
/**
 * @implements ConfigurableFixerInterface<_AutogeneratedInputConfiguration, _AutogeneratedComputedConfiguration>
 *
 * @phpstan-type _AutogeneratedInputConfiguration array{
 *  case_sensitive?: bool,
 *  fix_annotation?: bool,
 *  fix_inline?: bool,
 *  replacements?: array<string, string>
 * }
 * @phpstan-type _AutogeneratedComputedConfiguration array{
 *  case_sensitive: bool,
 *  fix_annotation: bool,
 *  fix_inline: bool,
 *  replacements: array<string, string>
 * }
 */
final class GeneralPhpdocTagRenameFixer extends AbstractFixer implements ConfigurableFixerInterface
{
    /** @use ConfigurableFixerTrait<_AutogeneratedInputConfiguration, _AutogeneratedComputedConfiguration> */
    use ConfigurableFixerTrait;
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Renames PHPDoc tags.', [new CodeSample("<?php\n/**\n * @inheritDocs\n * {@inheritdocs}\n */\n", ['replacements' => ['inheritDocs' => 'inheritDoc']]), new CodeSample("<?php\n/**\n * @inheritDocs\n * {@inheritdocs}\n */\n", ['replacements' => ['inheritDocs' => 'inheritDoc'], 'fix_annotation' => \false]), new CodeSample("<?php\n/**\n * @inheritDocs\n * {@inheritdocs}\n */\n", ['replacements' => ['inheritDocs' => 'inheritDoc'], 'fix_inline' => \false]), new CodeSample("<?php\n/**\n * @inheritDocs\n * {@inheritdocs}\n */\n", ['replacements' => ['inheritDocs' => 'inheritDoc'], 'case_sensitive' => \true])]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before PhpdocAddMissingParamAnnotationFixer, PhpdocAlignFixer.
     * Must run after AlignMultilineCommentFixer, CommentToPhpdocFixer, PhpdocIndentFixer, PhpdocScalarFixer, PhpdocToCommentFixer, PhpdocTypesFixer.
     */
    public function getPriority() : int
    {
        // must be run before PhpdocAddMissingParamAnnotationFixer
        return 11;
    }
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_DOC_COMMENT);
    }
    protected function createConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        return new FixerConfigurationResolver([(new FixerOptionBuilder('fix_annotation', 'Whether annotation tags should be fixed.'))->setAllowedTypes(['bool'])->setDefault(\true)->getOption(), (new FixerOptionBuilder('fix_inline', 'Whether inline tags should be fixed.'))->setAllowedTypes(['bool'])->setDefault(\true)->getOption(), (new FixerOptionBuilder('replacements', 'A map of tags to replace.'))->setAllowedTypes(['array<string, string>'])->setNormalizer(static function (Options $options, array $value) : array {
            $normalizedValue = [];
            foreach ($value as $from => $to) {
                if (!\is_string($from)) {
                    throw new InvalidOptionsException('Tag to replace must be a string.');
                }
                if (!Preg::match('#^\\S+$#', $to) || \strpos($to, '*/') !== \false) {
                    throw new InvalidOptionsException(\sprintf('Tag "%s" cannot be replaced by invalid tag "%s".', $from, $to));
                }
                $from = \trim($from);
                $to = \trim($to);
                if (\false === $options['case_sensitive']) {
                    $lowercaseFrom = \strtolower($from);
                    if (isset($normalizedValue[$lowercaseFrom]) && $normalizedValue[$lowercaseFrom] !== $to) {
                        throw new InvalidOptionsException(\sprintf('Tag "%s" cannot be configured to be replaced with several different tags when case sensitivity is off.', $from));
                    }
                    $from = $lowercaseFrom;
                }
                $normalizedValue[$from] = $to;
            }
            foreach ($normalizedValue as $from => $to) {
                if (isset($normalizedValue[$to]) && $normalizedValue[$to] !== $to) {
                    throw new InvalidOptionsException(\sprintf('Cannot change tag "%1$s" to tag "%2$s", as the tag "%2$s" is configured to be replaced to "%3$s".', $from, $to, $normalizedValue[$to]));
                }
            }
            return $normalizedValue;
        })->setDefault([])->getOption(), (new FixerOptionBuilder('case_sensitive', 'Whether tags should be replaced only if they have exact same casing.'))->setAllowedTypes(['bool'])->setDefault(\false)->getOption()]);
    }
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        if (0 === \count($this->configuration['replacements'])) {
            return;
        }
        if (\true === $this->configuration['fix_annotation']) {
            $regex = \true === $this->configuration['fix_inline'] ? '/"[^"]*"(*SKIP)(*FAIL)|\\b(?<=@)(%s)\\b/' : '/"[^"]*"(*SKIP)(*FAIL)|(?<!\\{@)(?<=@)(%s)(?!\\})/';
        } else {
            $regex = '/(?<={@)(%s)(?=[ \\t}])/';
        }
        $caseInsensitive = \false === $this->configuration['case_sensitive'];
        $replacements = $this->configuration['replacements'];
        $regex = \sprintf($regex, \implode('|', \array_keys($replacements)));
        if ($caseInsensitive) {
            $regex .= 'i';
        }
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_DOC_COMMENT)) {
                continue;
            }
            $tokens[$index] = new Token([\T_DOC_COMMENT, Preg::replaceCallback($regex, static function (array $matches) use($caseInsensitive, $replacements) {
                if ($caseInsensitive) {
                    $matches[1] = \strtolower($matches[1]);
                }
                return $replacements[$matches[1]];
            }, $token->getContent())]);
        }
    }
}
