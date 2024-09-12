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

/* @bundles/ReportBundle/Assets/css/report.css */
class __TwigTemplate_e416eab99bc9b6ae9a082161f7a9eac7 extends Template
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
        echo "/* ReportBundle */

.col-report-actions, .col-report-count {
    width: 25px;
}

#reportTable th:not(.col-report-count) {
\tmin-width: 125px;
}

.columnSelectorButtons {
\tpadding-top: 40px;
}

.columnSelectorButtons div:not(:last-child) {
\tmargin-bottom: 10px;
}

/* Fix of ChosenJS zero width */
#report_columns_chosen {
\twidth: 100% !important;
}
#ms-report_groupBy ul{
\theight: 115px;
}

#report_filters .panel {
\tmargin-bottom:0;
\tmargin-top:20px;
}

#report_filters > .in-group {
\tmargin-top:5px;
}

#report_filters .panel-heading {
\tmargin-bottom:0;
\tpadding-top:10px;
}

#report_filters .panel-heading .form-group {
\tmargin:0;
}

#report_filters > .in-group:first-child > .panel-heading {
\tdisplay:none;
}

#report_filters > .in-group:not(:first-child) {
\tmargin-top:0;
\tborder-top:0;
\tborder-top-left-radius: 0;
\tborder-top-right-radius: 0;
\tmargin-left:20px;
}

#report_filters > .in-group:not(:first-child) > .panel-heading {
\tdisplay:block;
\tpadding-left:10px;
}

#report_filters > .in-group:not(:first-child) > .panel-body > .row > div {
\tpadding-left:10px;
\tpadding-right:10px;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ReportBundle/Assets/css/report.css";
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
        return new Source("", "@bundles/ReportBundle/Assets/css/report.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ReportBundle\\Assets\\css\\report.css");
    }
}
