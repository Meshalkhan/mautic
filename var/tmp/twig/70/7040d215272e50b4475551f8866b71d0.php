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

/* @bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite.png */
class __TwigTemplate_efe69a59d6b37c2a6e5ea6c2927b3ddb extends Template
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
        yield "�PNG

\000\000\000
IHDR\000\000\0004\000\000\000%\000\000\000
���\000\000MIDATx��ֿkq��S��B�T��O\"�@�VȒI�`�
E��E%�b~��\"n:8A�@ P�Aqq�J\$p(z�O�
��+�k}��w��Ᾱ\$�S���Ld�E�Q�\000YoA}\"U�cA�[�*LԆ�\"t��1� ��!wAj���L^3+�':iP�;��G��lL�uD6�^���}ʠ,����z&����#��1FȥzAo�A�&1F�]�/(C�{)�����\$A�R��A��އ���E!F��yف���2h��;����O�0@6��i����>��*걠�b���A�80Q&f?}�Z��X�#���M�&���kP�;��dc\"�#�Qނz&����#xʠ7�1B�\"�,�xgA��Y�c�f�y��ZW5��A��#����Q{�v{�]��lC�g�[=w�U����Xr��8����6n�ZW�1�����P��mOAo<��j�V4��i�=ס��^q>�-7A,���������71U����z�~��S�.�a�� Ɩ� ]^7��?�w�3�-����4��Ч&�%\\i�#�~APv�Q5(L�?��\\zO\\\000\000\000\000IEND�B`�";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite.png";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/chosen/chosen-sprite.png", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\chosen\\chosen-sprite.png");
    }
}
