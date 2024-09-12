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

/* @bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php */
class __TwigTemplate_158edc64d461fbe0822dc95bbb6b91d5 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Helper\\InputHelper;
use Mautic\\EmailBundle\\Model\\EmailModel;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\FormFactoryInterface;
use Symfony\\Component\\HttpFoundation\\Request;

trait VariantAjaxControllerTrait
{
    /**
     * @param string \$modelName
     * @param string \$abSettingsFormName
     * @param string \$abSettingsFormBlockPrefix
     * @param string \$parentFormName
     * @param string \$abFormTemplate
     * @param array  \$formThemes
     *
     * @return mixed
     */
    private function getAbTestForm(Request \$request, FormFactoryInterface \$formFactory, \$modelName, \$abSettingsFormName, \$abSettingsFormBlockPrefix, \$parentFormName, \$abFormTemplate, \$formThemes = [])
    {
        \$dataArray = [
            'success' => 0,
            'html'    => '',
        ];
        \$type = InputHelper::clean(\$request->request->get('abKey'));
        \$id   = (int) \$request->request->get('id');

        if (!empty(\$type)) {
            // get the HTML for the form
            \$model  = \$this->getModel(\$modelName);
            if (!\$model instanceof EmailModel && !\$model instanceof PageModel) {
                throw new \\InvalidArgumentException('Model should be either email or page model.');
            }
            \$entity = \$model->getEntity(\$id);

            \$abTestComponents = \$model->getBuilderComponents(\$entity, 'abTestWinnerCriteria');
            \$abTestSettings   = \$abTestComponents['criteria'];

            if (isset(\$abTestSettings[\$type])) {
                \$html     = '';
                \$formType = (!empty(\$abTestSettings[\$type]['formType'])) ? \$abTestSettings[\$type]['formType'] : '';
                if (!empty(\$formType)) {
                    \$formOptions = (!empty(\$abTestSettings[\$type]['formTypeOptions'])) ? \$abTestSettings[\$type]['formTypeOptions'] : [];
                    \$form        = \$formFactory->create(
                        \$abSettingsFormName,
                        [],
                        ['formType' => \$formType, 'formTypeOptions' => \$formOptions]
                    );
                    \$html = \$this->renderView(
                        \$abFormTemplate,
                        [
                            'form' => \$this->setFormTheme(\$form, \$formThemes),
                        ]
                    );
                }

                \$html = str_replace(
                    [
                        \"{\$abSettingsFormBlockPrefix}[\",
                        \"{\$abSettingsFormBlockPrefix}_\",
                        \$abSettingsFormBlockPrefix,
                    ],
                    [
                        \"{\$parentFormName}[variantSettings][\",
                        \"{\$parentFormName}_variantSettings_\",
                        \$parentFormName,
                    ],
                    \$html
                );
                \$dataArray['html']    = \$html;
                \$dataArray['success'] = 1;
            }
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/VariantAjaxControllerTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\VariantAjaxControllerTrait.php");
    }
}
