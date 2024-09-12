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

/* @bundles/LeadBundle/Assets/css/lead.css */
class __TwigTemplate_7ddd86f07e8359a58567c7aa7a2dd79b extends Template
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
        yield "/* LeadBundle */

.col-leadfield-id, .col-leadlist-id, .col-lead-id {
    width: 75px;
}

.col-leadfield-statusicons, .col-leadlist-leadcount {
    width: 100px;
}

.col-leadfield-orderhandle {
    width: 25px;
}

.col-leadfield-type {
    width: 125px;
}

.leadfield-list .fa-asterisk:hover, .leadfield-list .fa-eye:hover, .leadfield-list .fa-lock:hover, .leadfield-list .fa-list:hover {
    color: #7D5B71;
}

.leadlist-filter a {
    text-decoration: none;
}

.leadlist-filter:hover {
    background-color: #ecf0f1;
}

.leadlist-filter {
    height: 40px;
    border-bottom: 1px solid #cccccc;
    overflow: hidden;
}

.leadlist-filter-name {
    font-size: 1.1em;
}

.available-filters .rounded-corners {
    height: 300px;
    overflow: auto;
}

.selected-filters .rounded-corners {
    height: 300px;
    overflow: auto;
}

.selected-filters .in-group {
    margin-left:20px;
}


.selected-filters .glue-select {
    margin-top:2px;
}

.selected-filters .panel {
    margin-bottom:0;
    margin-top:20px;
}

.selected-filters .panel.in-group {
    margin-top:0;
    border-top:0;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.col-leadpoints-date {
    width: 175px;
}

.col-leadpoints-delta {
    width: 75px;
}

.panel-foursquare .panel-heading {
    background: #0072b1;
    color: #FFFFFF;
}

.panel-facebook .panel-heading {
    background: #3b5998;
    color: #FFFFFF;
}

.panel-linkedin .panel-heding {
    background: #007bb6;
    color: #FFFFFF;
}

.panel-twitter .panel-heading {
    background: #00aced;
    color: #FFFFFF;
}

.panel-instagram .panel-heading {
    background: #517fa4;
    color: #FFFFFF;
}

.btn-leadnote-add {
    margin-left: 0 !important;
    border-bottom-left-radius: 2px !important;
    border-top-left-radius: 2px !important;
}

ul.tag-cloud li {
    list-style-type: none;
    float:left;
    margin: 0 10px;
    height: 35px;
}

#social-container div.tab-pane {
    height: 250px;
    overflow-y: auto;
    overflow-x: hidden;
}

.card.highlight {
    background-color: #faf2cc;
    border: 3px solid #4e5d9d !important;
}

.lead-avatar-panel {
    position: relative;
}

.lead-avatar-panel .avatar-collapser a.arrow {
    position: absolute;
    top:0;
    right: 0px;
    margin: 0 3px 0 0;
    padding: 0 10px;
}

.lead-avatar-panel .img-responsive {
    min-width: 100%;
}

.lead-merge-options {
    position: relative;
}

.contact-cards .panel-body {
    max-height: 150px;
}

.contact-cards .img {
    max-height: 115px;
}

#lead_merge_lead_to_merge_chosen .chosen-search {
    display:none;
}

.history-search{
    overflow: visible!important;
    min-height: 95px;
}

.timeline-icon {
    width: 50px;
    text-align: center;
}

.timeline-featured td, .timeline-featured th {
    background: rgba(78, 94, 158, 0.1 );
}

#contact-timeline td {
    overflow-wrap: break-word;
    word-wrap: break-word;
    -ms-word-break: break-all;
    word-break: break-all;
    -ms-hyphens: auto;
    -moz-hyphens: auto;
    -webkit-hyphens: auto;
    hyphens: auto;
}

#contact-timeline .dl-horizontal dt {
    width: auto;
    text-align: left;
    margin-right: 10px;
}

#contact-timeline .dl-horizontal dd {
    margin-left: 0px;
}

#contact-timeline tr.timeline-row-highlighted {
    background-color: #fafafa;
}

#contact-timeline tr.timeline-details img {
    max-height: 200px;
}

.frequency{
    width: 65px!important;
}

.contact{
    display: inline !important;
}

.frequency-table, .frequency-table td{
    border-bottom: none!important;
    border-top: none!important;
}

.frequency-values {
    padding-left: 10px;
    padding-top: 27px;
    padding-bottom: 15px;
}

.frequency-select {
    width:125px !important;
    float: right;
    padding-right: 5px;
}

.frequency-label {
    padding: 8px;
 }

.frequency-date {
    width: 100px;
    float:left;
}

.panel-companies .primary {
    color: #fdb933;
}

.building::before {
    content: \"\\f1ad\";
    font-family: \"FontAwesome\";
    padding-right: 3px;
}

.user::before {
    content: \"\\f007\";
    font-family: \"FontAwesome\";
    padding-right: 3px;
}

#leads-container .spinner {
    text-align: center;
    line-height: 250px;
    font-size: 24px;
}

.segment-node {
    border: grey solid 1px;
    border-radius: 6px;
    text-align: center;
    margin: 20px;
    flex: 1 200px;
    flex-grow: 0;
    flex-shrink: 0;
    flex-basis: 200px;
    flex-flow: column wrap;
    padding: 10px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
}

.segment-node.has-message {
    border: red solid 4px;
}

.segment-level {
    display: flex;
    align-items: stretch;
    justify-content: center;
}

.lead-stats-title {
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 10px;
    padding-bottom: 8px;
    border-bottom: 1px solid #eee;
    font-size: 14px;
}

.lead-stats {
    display: flex;
    justify-content: space-between;
    padding: 20px 15px;
}

.lead-stats .lead-stats-name {
    display: block;
    color: #8393a2;
}
.lead-stats .lead-stats-val {
    display: block;
    font-size: 21px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/LeadBundle/Assets/css/lead.css";
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
        return new Source("", "@bundles/LeadBundle/Assets/css/lead.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Assets\\css\\lead.css");
    }
}
