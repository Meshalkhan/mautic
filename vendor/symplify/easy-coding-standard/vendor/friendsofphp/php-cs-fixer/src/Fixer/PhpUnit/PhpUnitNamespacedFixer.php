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
namespace PhpCsFixer\Fixer\PhpUnit;

use PhpCsFixer\AbstractFixer;
use PhpCsFixer\Fixer\ConfigurableFixerInterface;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use PhpCsFixer\FixerDefinition\CodeSample;
use PhpCsFixer\FixerDefinition\FixerDefinition;
use PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use PhpCsFixer\Preg;
use PhpCsFixer\Tokenizer\Analyzer\ClassyAnalyzer;
use PhpCsFixer\Tokenizer\Token;
use PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class PhpUnitNamespacedFixer extends AbstractFixer implements ConfigurableFixerInterface
{
    /**
     * @var string
     */
    private $originalClassRegEx;
    /**
     * Class Mappings.
     *
     *  * [original classname => new classname] Some classes which match the
     *    original class regular expression do not have a same-compound name-
     *    space class and need a dedicated translation table. This trans-
     *    lation table is defined in @see configure.
     *
     * @var array|string[] Class Mappings
     */
    private $classMap;
    public function getDefinition() : FixerDefinitionInterface
    {
        $codeSample = '<?php
final class MyTest extends \\PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        PHPUnit_Framework_Assert::assertTrue(true);
    }
}
';
        return new FixerDefinition('PHPUnit classes MUST be used in namespaced version, e.g. `\\PHPUnit\\Framework\\TestCase` instead of `\\PHPUnit_Framework_TestCase`.', [new CodeSample($codeSample), new CodeSample($codeSample, ['target' => \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_4_8])], "PHPUnit v6 has finally fully switched to namespaces.\n" . "You could start preparing the upgrade by switching from non-namespaced TestCase to namespaced one.\n" . 'Forward compatibility layer (`\\PHPUnit\\Framework\\TestCase` class) was backported to PHPUnit v4.8.35 and PHPUnit v5.4.0.' . "\n" . 'Extended forward compatibility layer (`PHPUnit\\Framework\\Assert`, `PHPUnit\\Framework\\BaseTestListener`, `PHPUnit\\Framework\\TestListener` classes) was introduced in v5.7.0.' . "\n", 'Risky when PHPUnit classes are overridden or not accessible, or when project has PHPUnit incompatibilities.');
    }
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_STRING);
    }
    public function isRisky() : bool
    {
        return \true;
    }
    public function configure(array $configuration) : void
    {
        parent::configure($configuration);
        if (\PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::fulfills($this->configuration['target'], \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_6_0)) {
            $this->originalClassRegEx = '/^PHPUnit_\\w+$/i';
            // @noinspection ClassConstantCanBeUsedInspection
            $this->classMap = ['PHPUnit_Extensions_PhptTestCase' => 'ECSPrefix202312\\PHPUnit\\Runner\\PhptTestCase', 'PHPUnit_Framework_Constraint' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\Constraint', 'PHPUnit_Framework_Constraint_StringMatches' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription', 'PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\JsonMatchesErrorMessageProvider', 'PHPUnit_Framework_Constraint_PCREMatch' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\RegularExpression', 'PHPUnit_Framework_Constraint_ExceptionMessageRegExp' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\ExceptionMessageRegularExpression', 'PHPUnit_Framework_Constraint_And' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\LogicalAnd', 'PHPUnit_Framework_Constraint_Or' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\LogicalOr', 'PHPUnit_Framework_Constraint_Not' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\LogicalNot', 'PHPUnit_Framework_Constraint_Xor' => 'ECSPrefix202312\\PHPUnit\\Framework\\Constraint\\LogicalXor', 'PHPUnit_Framework_Error' => 'ECSPrefix202312\\PHPUnit\\Framework\\Error\\Error', 'PHPUnit_Framework_TestSuite_DataProvider' => 'ECSPrefix202312\\PHPUnit\\Framework\\DataProviderTestSuite', 'PHPUnit_Framework_MockObject_Invocation_Static' => 'ECSPrefix202312\\PHPUnit\\Framework\\MockObject\\Invocation\\StaticInvocation', 'PHPUnit_Framework_MockObject_Invocation_Object' => 'ECSPrefix202312\\PHPUnit\\Framework\\MockObject\\Invocation\\ObjectInvocation', 'PHPUnit_Framework_MockObject_Stub_Return' => 'ECSPrefix202312\\PHPUnit\\Framework\\MockObject\\Stub\\ReturnStub', 'PHPUnit_Runner_Filter_Group_Exclude' => 'ECSPrefix202312\\PHPUnit\\Runner\\Filter\\ExcludeGroupFilterIterator', 'PHPUnit_Runner_Filter_Group_Include' => 'ECSPrefix202312\\PHPUnit\\Runner\\Filter\\IncludeGroupFilterIterator', 'PHPUnit_Runner_Filter_Test' => 'ECSPrefix202312\\PHPUnit\\Runner\\Filter\\NameFilterIterator', 'PHPUnit_Util_PHP' => 'ECSPrefix202312\\PHPUnit\\Util\\PHP\\AbstractPhpProcess', 'PHPUnit_Util_PHP_Default' => 'ECSPrefix202312\\PHPUnit\\Util\\PHP\\DefaultPhpProcess', 'PHPUnit_Util_PHP_Windows' => 'ECSPrefix202312\\PHPUnit\\Util\\PHP\\WindowsPhpProcess', 'PHPUnit_Util_Regex' => 'ECSPrefix202312\\PHPUnit\\Util\\RegularExpression', 'PHPUnit_Util_TestDox_ResultPrinter_XML' => 'ECSPrefix202312\\PHPUnit\\Util\\TestDox\\XmlResultPrinter', 'PHPUnit_Util_TestDox_ResultPrinter_HTML' => 'ECSPrefix202312\\PHPUnit\\Util\\TestDox\\HtmlResultPrinter', 'PHPUnit_Util_TestDox_ResultPrinter_Text' => 'ECSPrefix202312\\PHPUnit\\Util\\TestDox\\TextResultPrinter', 'PHPUnit_Util_TestSuiteIterator' => 'ECSPrefix202312\\PHPUnit\\Framework\\TestSuiteIterator', 'PHPUnit_Util_XML' => 'ECSPrefix202312\\PHPUnit\\Util\\Xml'];
        } elseif (\PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::fulfills($this->configuration['target'], \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_5_7)) {
            $this->originalClassRegEx = '/^PHPUnit_Framework_(TestCase|Assert|BaseTestListener|TestListener)+$/i';
            $this->classMap = [];
        } else {
            $this->originalClassRegEx = '/^PHPUnit_Framework_TestCase$/i';
            $this->classMap = [];
        }
    }
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $importedOriginalClassesMap = [];
        $currIndex = 0;
        while (\true) {
            $currIndex = $tokens->getNextTokenOfKind($currIndex, [[\T_STRING]]);
            if (null === $currIndex) {
                break;
            }
            $prevIndex = $tokens->getPrevMeaningfulToken($currIndex);
            if ($tokens[$prevIndex]->isGivenKind([\T_CONST, \T_DOUBLE_COLON])) {
                continue;
            }
            $originalClass = $tokens[$currIndex]->getContent();
            $allowedReplacementScenarios = (new ClassyAnalyzer())->isClassyInvocation($tokens, $currIndex) || $this->isImport($tokens, $currIndex);
            if (!$allowedReplacementScenarios || !Preg::match($this->originalClassRegEx, $originalClass)) {
                ++$currIndex;
                continue;
            }
            $substituteTokens = $this->generateReplacement($originalClass);
            $tokens->clearAt($currIndex);
            $tokens->insertAt($currIndex, isset($importedOriginalClassesMap[$originalClass]) ? $substituteTokens[$substituteTokens->getSize() - 1] : $substituteTokens);
            $prevIndex = $tokens->getPrevMeaningfulToken($currIndex);
            if ($tokens[$prevIndex]->isGivenKind(\T_USE)) {
                $importedOriginalClassesMap[$originalClass] = \true;
            } elseif ($tokens[$prevIndex]->isGivenKind(\T_NS_SEPARATOR)) {
                $prevIndex = $tokens->getPrevMeaningfulToken($prevIndex);
                if ($tokens[$prevIndex]->isGivenKind(\T_USE)) {
                    $importedOriginalClassesMap[$originalClass] = \true;
                }
            }
        }
    }
    protected function createConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        return new FixerConfigurationResolver([(new FixerOptionBuilder('target', 'Target version of PHPUnit.'))->setAllowedTypes(['string'])->setAllowedValues([\PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_4_8, \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_5_7, \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_6_0, \PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_NEWEST])->setDefault(\PhpCsFixer\Fixer\PhpUnit\PhpUnitTargetVersion::VERSION_NEWEST)->getOption()]);
    }
    private function generateReplacement(string $originalClassName) : Tokens
    {
        $delimiter = '_';
        $string = $originalClassName;
        $map = \array_change_key_case($this->classMap);
        if (isset($map[\strtolower($originalClassName)])) {
            $delimiter = '\\';
            $string = $map[\strtolower($originalClassName)];
        }
        $parts = \explode($delimiter, $string);
        $tokensArray = [];
        while ([] !== $parts) {
            $tokensArray[] = new Token([\T_STRING, \array_shift($parts)]);
            if ([] !== $parts) {
                $tokensArray[] = new Token([\T_NS_SEPARATOR, '\\']);
            }
        }
        return Tokens::fromArray($tokensArray);
    }
    private function isImport(Tokens $tokens, int $currIndex) : bool
    {
        $prevIndex = $tokens->getPrevMeaningfulToken($currIndex);
        if ($tokens[$prevIndex]->isGivenKind([\T_NS_SEPARATOR])) {
            $prevIndex = $tokens->getPrevMeaningfulToken($prevIndex);
        }
        return $tokens[$prevIndex]->isGivenKind([\T_USE]);
    }
}
