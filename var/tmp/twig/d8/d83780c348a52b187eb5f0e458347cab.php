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

/* @bundles/InstallBundle/Assets/install/install.js */
class __TwigTemplate_401dd31f6dd7cefbfc14f6c147fc83b2 extends Template
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
        echo "var MauticLang = {};
var MauticInstaller = {
    showWaitMessage: function(event) {
        event.preventDefault();

        if (mQuery('#waitMessage').length) {
            mQuery('#stepNavigation').addClass('hide');
            mQuery('#waitMessage').removeClass('hide');
        }

        mQuery('.btn-next').prop('disabled', true);
        mQuery('.btn-next').html('<i class=\\\"fa fa-spin fa-spinner fa-fw\\\"></i>Please wait...');

        setTimeout(function () {
            mQuery('form').submit();
        }, 10);
    },

    toggleBackupPrefix: function() {
        if (mQuery('#install_doctrine_step_backup_tables_0').prop('checked')) {
        mQuery('#backupPrefix').addClass('hide');
        } else {
        mQuery('#backupPrefix').removeClass('hide');
        }
    }
};";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Assets/install/install.js";
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
        return new Source("", "@bundles/InstallBundle/Assets/install/install.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Assets\\install\\install.js");
    }
}
