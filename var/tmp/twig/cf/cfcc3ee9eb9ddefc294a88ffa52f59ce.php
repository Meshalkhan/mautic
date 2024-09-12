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

/* @bundles/CoreBundle/Assets/js/libraries/froala/languages/he.js */
class __TwigTemplate_e77f8b4fce7da2ef7e68bce66e30d9a8 extends Template
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
        echo "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

/**
 * Hebrew
 */

\$.FE.LANGUAGE['he'] = {
  translation: {
    // Place holder
    \"Type something\": \"\\u05d4\\u05e7\\u05dc\\u05d3 \\u05db\\u05d0\\u05df\",

    // Basic formatting
    \"Bold\": \"\\u05de\\u05d5\\u05d3\\u05d2\\u05e9\",
    \"Italic\": \"\\u05de\\u05d5\\u05d8\\u05d4\",
    \"Underline\": \"\\u05e7\\u05d5 \\u05ea\\u05d7\\u05ea\\u05d9\",
    \"Strikethrough\": \"\\u05e7\\u05d5 \\u05d0\\u05de\\u05e6\\u05e2\\u05d9\",

    // Main buttons
    \"Insert\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea\",
    \"Delete\": \"\\u05de\\u05d7\\u05d9\\u05e7\\u05d4\",
    \"Cancel\": \"\\u05d1\\u05d9\\u05d8\\u05d5\\u05dc\",
    \"OK\": \"\\u05d1\\u05e6\\u05e2\",
    \"Back\": \"\\u05d1\\u05d7\\u05d6\\u05e8\\u05d4\",
    \"Remove\": \"\\u05d4\\u05e1\\u05e8\",
    \"More\": \"\\u05d9\\u05d5\\u05ea\\u05e8\",
    \"Update\": \"\\u05e2\\u05d3\\u05db\\u05d5\\u05df\",
    \"Style\": \"\\u05e1\\u05d2\\u05e0\\u05d5\\u05df\",

    // Font
    \"Font Family\": \"\\u05d2\\u05d5\\u05e4\\u05df\",
    \"Font Size\": \"\\u05d2\\u05d5\\u05d3\\u05dc \\u05d4\\u05d2\\u05d5\\u05e4\\u05df\",

    // Colors
    \"Colors\": \"\\u05e6\\u05d1\\u05e2\\u05d9\\u05dd\",
    \"Background\": \"\\u05e8\\u05e7\\u05e2\",
    \"Text\": \"\\u05d4\\u05d8\\u05e1\\u05d8\",

    // Paragraphs
    \"Paragraph Format\": \"\\u05e4\\u05d5\\u05e8\\u05de\\u05d8\",
    \"Normal\": \"\\u05e8\\u05d2\\u05d9\\u05dc\",
    \"Code\": \"\\u05e7\\u05d5\\u05d3\",
    \"Heading 1\": \"1 \\u05db\\u05d5\\u05ea\\u05e8\\u05ea\",
    \"Heading 2\": \"2 \\u05db\\u05d5\\u05ea\\u05e8\\u05ea\",
    \"Heading 3\": \"3 \\u05db\\u05d5\\u05ea\\u05e8\\u05ea\",
    \"Heading 4\": \"4 \\u05db\\u05d5\\u05ea\\u05e8\\u05ea\",

    // Style
    \"Paragraph Style\": \"\\u05e1\\u05d2\\u05e0\\u05d5\\u05df \\u05e4\\u05e1\\u05e7\\u05d4\",
    \"Inline Style\": \"\\u05e1\\u05d2\\u05e0\\u05d5\\u05df \\u05de\\u05d5\\u05d1\\u05e0\\u05d4\",

    // Alignment
    \"Align\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8\",
    \"Align Left\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8 \\u05dc\\u05e9\\u05de\\u05d0\\u05dc\",
    \"Align Center\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8 \\u05dc\\u05de\\u05e8\\u05db\\u05d6\",
    \"Align Right\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8 \\u05dc\\u05d9\\u05de\\u05d9\\u05df\",
    \"Align Justify\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8 \\u05de\\u05dc\\u05d0\",
    \"None\": \"\\u05d0\\u05e3 \\u05d0\\u05d7\\u05d3\",

    // Lists
    \"Ordered List\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e8\\u05e9\\u05d9\\u05de\\u05d4 \\u05de\\u05de\\u05d5\\u05e1\\u05e4\\u05e8\\u05ea\",
    \"Unordered List\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e8\\u05e9\\u05d9\\u05de\\u05d4\",

    // Indent
    \"Decrease Indent\": \"\\u05d4\\u05e7\\u05d8\\u05e0\\u05ea \\u05db\\u05e0\\u05d9\\u05e1\\u05d4\",
    \"Increase Indent\": \"\\u05d4\\u05d2\\u05d3\\u05dc\\u05ea \\u05db\\u05e0\\u05d9\\u05e1\\u05d4\",

    // Links
    \"Insert Link\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e7\\u05d9\\u05e9\\u05d5\\u05e8\",
    \"Open in new tab\": \"\\u05dc\\u05e4\\u05ea\\u05d5\\u05d7 \\u05d1\\u05d8\\u05d0\\u05d1 \\u05d7\\u05d3\\u05e9\",
    \"Open Link\": \"\\u05e7\\u05d9\\u05e9\\u05d5\\u05e8 \\u05e4\\u05ea\\u05d5\\u05d7\",
    \"Edit Link\": \"\\u05e7\\u05d9\\u05e9\\u05d5\\u05e8 \\u05e2\\u05e8\\u05d9\\u05db\\u05d4\",
    \"Unlink\": \"\\u05d4\\u05e1\\u05e8\\u05ea \\u05d4\\u05e7\\u05d9\\u05e9\\u05d5\\u05e8\",
    \"Choose Link\": \"\\u05dc\\u05d1\\u05d7\\u05d5\\u05e8 \\u05e7\\u05d9\\u05e9\\u05d5\\u05e8\",

    // Images
    \"Insert Image\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05ea\\u05de\\u05d5\\u05e0\\u05d4\",
    \"Upload Image\": \"\\u05ea\\u05de\\u05d5\\u05e0\\u05ea \\u05d4\\u05e2\\u05dc\\u05d0\\u05d4\",
    \"By URL\": \"URL \\u05e2\\u05dc \\u05d9\\u05d3\\u05d9\",
    \"Browse\": \"\\u05dc\\u05d2\\u05dc\\u05d5\\u05e9\",
    \"Drop image\": \"\\u05e9\\u05d7\\u05e8\\u05e8 \\u05d0\\u05ea \\u05d4\\u05ea\\u05de\\u05d5\\u05e0\\u05d4 \\u05db\\u05d0\\u05df\",
    \"or click\": \"\\u05d0\\u05d5 \\u05dc\\u05d7\\u05e5\",
    \"Manage Images\": \"\\u05e0\\u05d9\\u05d4\\u05d5\\u05dc \\u05d4\\u05ea\\u05de\\u05d5\\u05e0\\u05d5\\u05ea\",
    \"Loading\": \"\\u05d8\\u05e2\\u05d9\\u05e0\\u05d4\",
    \"Deleting\": \"\\u05de\\u05d7\\u05d9\\u05e7\\u05d4\",
    \"Tags\": \"\\u05ea\\u05d2\\u05d9\\u05dd\",
    \"Are you sure? Image will be deleted.\": \"\\u05d4\\u05d0\\u05dd \\u05d0\\u05ea\\u05d4 \\u05d1\\u05d8\\u05d5\\u05d7\\u003f \\u05d4\\u05ea\\u05de\\u05d5\\u05e0\\u05d4 \\u05ea\\u05de\\u05d7\\u05e7\\u002e\",
    \"Replace\": \"\\u05dc\\u05d4\\u05d7\\u05dc\\u05d9\\u05e3\",
    \"Uploading\": \"\\u05d4\\u05e2\\u05dc\\u05d0\\u05d4\",
    \"Loading image\": \"\\u05ea\\u05de\\u05d5\\u05e0\\u05ea \\u05d8\\u05e2\\u05d9\\u05e0\\u05d4\",
    \"Display\": \"\\u05ea\\u05e6\\u05d5\\u05d2\\u05d4\",
    \"Inline\": \"\\u05d1\\u05e9\\u05d5\\u05e8\\u05d4\",
    \"Break Text\": \"\\u05d8\\u05e7\\u05e1\\u05d8 \\u05d4\\u05e4\\u05e1\\u05e7\\u05d4\",
    \"Alternate Text\": \"\\u05d8\\u05e7\\u05e1\\u05d8 \\u05d7\\u05dc\\u05d5\\u05e4\\u05d9\",
    \"Change Size\": \"\\u05d2\\u05d5\\u05d3\\u05dc \\u05e9\\u05d9\\u05e0\\u05d5\\u05d9\",
    \"Width\": \"\\u05e8\\u05d5\\u05d7\\u05d1\",
    \"Height\": \"\\u05d2\\u05d5\\u05d1\\u05d4\",
    \"Something went wrong. Please try again.\": \"\\u05de\\u05e9\\u05d4\\u05d5 \\u05d4\\u05e9\\u05ea\\u05d1\\u05e9. \\u05d1\\u05d1\\u05e7\\u05e9\\u05d4 \\u05e0\\u05e1\\u05d4 \\u05e9\\u05d5\\u05d1.\",

    // Video
    \"Insert Video\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05d5\\u05d9\\u05d3\\u05d9\\u05d0\\u05d5\",
    \"Embedded Code\": \"\\u05e7\\u05d5\\u05d3 \\u05de\\u05d5\\u05d8\\u05d1\\u05e2\",

    // Tables
    \"Insert Table\": \"\\u05d4\\u05db\\u05e0\\u05e1 \\u05d8\\u05d1\\u05dc\\u05d4\",
    \"Table Header\": \"\\u05db\\u05d5\\u05ea\\u05e8\\u05ea \\u05d8\\u05d1\\u05dc\\u05d4\",
    \"Remove Table\": \"\\u05d4\\u05e1\\u05e8 \\u05e9\\u05d5\\u05dc\\u05d7\\u05df\",
    \"Table Style\": \"\\u05e1\\u05d2\\u05e0\\u05d5\\u05df \\u05d8\\u05d1\\u05dc\\u05d4\",
    \"Horizontal Align\": \"\\u05d0\\u05d5\\u05e4\\u05e7\\u05d9\\u05ea \\u05dc\\u05d9\\u05d9\\u05e9\\u05e8\",
    \"Row\": \"\\u05e9\\u05d5\\u05e8\\u05d4\",
    \"Insert row above\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e9\\u05d5\\u05e8\\u05d4 \\u05dc\\u05e4\\u05e0\\u05d9\",
    \"Insert row below\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e9\\u05d5\\u05e8\\u05d4 \\u05d0\\u05d7\\u05e8\\u05d9\",
    \"Delete row\": \"\\u05de\\u05d7\\u05d9\\u05e7\\u05ea \\u05e9\\u05d5\\u05e8\\u05d4\",
    \"Column\": \"\\u05d8\\u05d5\\u05e8\",
    \"Insert column before\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05d8\\u05d5\\u05e8 \\u05dc\\u05e4\\u05e0\\u05d9\",
    \"Insert column after\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05d8\\u05d5\\u05e8 \\u05d0\\u05d7\\u05e8\\u05d9\",
    \"Delete column\": \"\\u05de\\u05d7\\u05d9\\u05e7\\u05ea \\u05d8\\u05d5\\u05e8\",
    \"Cell\": \"\\u05ea\\u05d0\",
    \"Merge cells\": \"\\u05de\\u05d6\\u05d2 \\u05ea\\u05d0\\u05d9\\u05dd\",
    \"Horizontal split\": \"\\u05e4\\u05e6\\u05dc \\u05d0\\u05d5\\u05e4\\u05e7\\u05d9\",
    \"Vertical split\": \"\\u05e4\\u05e6\\u05dc \\u05d0\\u05e0\\u05db\\u05d9\",
    \"Cell Background\": \"\\u05e8\\u05e7\\u05e2 \\u05ea\\u05d0\",
    \"Vertical Align\": \"\\u05d9\\u05d9\\u05e9\\u05d5\\u05e8 \\u05d0\\u05e0\\u05db\\u05d9\",
    \"Top\": \"\\u05e2\\u05b6\\u05dc\\u05b4\\u05d9\\u05d5\\u05b9\\u05df\",
    \"Middle\": \"\\u05ea\\u05b4\\u05d9\\u05db\\u05d5\\u05b9\\u05e0\\u05b4\\u05d9\",
    \"Bottom\": \"\\u05ea\\u05d7\\u05ea\\u05d5\\u05df\",
    \"Align Top\": \"\\u05dc\\u05d9\\u05d9\\u05e9\\u05e8 \\u05e2\\u05b6\\u05dc\\u05b4\\u05d9\\u05d5\\u05b9\\u05df\",
    \"Align Middle\": \"\\u05dc\\u05d9\\u05d9\\u05e9\\u05e8 \\u05ea\\u05b4\\u05d9\\u05db\\u05d5\\u05b9\\u05e0\\u05b4\\u05d9\",
    \"Align Bottom\": \"\\u05dc\\u05d9\\u05d9\\u05e9\\u05e8 \\u05ea\\u05d7\\u05ea\\u05d5\\u05df\",
    \"Cell Style\": \"\\u05e1\\u05d2\\u05e0\\u05d5\\u05df \\u05ea\\u05d0\",

    // Files
    \"Upload File\": \"\\u05d4\\u05e2\\u05dc\\u05d0\\u05ea \\u05e7\\u05d5\\u05d1\\u05e5\",
    \"Drop file\": \"\\u05d6\\u05e8\\u05d5\\u05e7 \\u05e7\\u05d5\\u05d1\\u05e5 \\u05db\\u05d0\\u05df\",

    // Emoticons
    \"Emoticons\": \"\\u05e1\\u05de\\u05d9\\u05d9\\u05dc\\u05d9\\u05dd\",
    \"Grinning face\": \"\\u05d7\\u05d9\\u05d9\\u05da \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Grinning face with smiling eyes\": \"\\u05d7\\u05d9\\u05d9\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05de\\u05d7\\u05d9\\u05d9\\u05db\\u05d5\\u05ea\",
    \"Face with tears of joy\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05d3\\u05de\\u05e2\\u05d5\\u05ea \\u05e9\\u05dc \\u05e9\\u05de\\u05d7\\u05d4\",
    \"Smiling face with open mouth\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7\",
    \"Smiling face with open mouth and smiling eyes\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7 \\u05d5\\u05de\\u05d7\\u05d9\\u05d9\\u05da \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd\",
    \"Smiling face with open mouth and cold sweat\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7 \\u05d5\\u05d6\\u05d9\\u05e2\\u05d4 \\u05e7\\u05e8\\u05d4\",
    \"Smiling face with open mouth and tightly-closed eyes\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7 \\u05d5\\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05d1\\u05d7\\u05d5\\u05d6\\u05e7\\u05d4\\u002d\\u05e1\\u05d2\\u05d5\\u05e8\\u05d5\\u05ea\",
    \"Smiling face with halo\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05d4\\u05d9\\u05dc\\u05d4\",
    \"Smiling face with horns\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e7\\u05e8\\u05e0\\u05d5\\u05ea\",
    \"Winking face\": \"\\u05e7\\u05e8\\u05d9\\u05e6\\u05d4 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Smiling face with smiling eyes\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05de\\u05d7\\u05d9\\u05d9\\u05db\\u05d5\\u05ea\",
    \"Face savoring delicious food\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05ea\\u05e2\\u05e0\\u05d2 \\u05d0\\u05d5\\u05db\\u05dc \\u05d8\\u05e2\\u05d9\\u05dd\",
    \"Relieved face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e9\\u05dc \\u05d4\\u05e7\\u05dc\\u05d4\",
    \"Smiling face with heart-shaped eyes\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05d1\\u05e6\\u05d5\\u05e8\\u05ea \\u05dc\\u05d1\",
    \"Smiling face with sunglasses\": \"\\u05d7\\u05d9\\u05d5\\u05da \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05de\\u05e9\\u05e7\\u05e4\\u05d9 \\u05e9\\u05de\\u05e9\",
    \"Smirking face\": \"\\u05d4\\u05d9\\u05d0 \\u05d7\\u05d9\\u05d9\\u05db\\u05d4 \\u05d7\\u05d9\\u05d5\\u05da \\u05e0\\u05d1\\u05d6\\u05d4 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Neutral face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e0\\u05d9\\u05d8\\u05e8\\u05dc\\u05d9\",
    \"Expressionless face\": \"\\u05d1\\u05e4\\u05e0\\u05d9\\u05dd \\u05d7\\u05ea\\u05d5\\u05dd\",
    \"Unamused face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05dc\\u05d0 \\u05de\\u05e9\\u05d5\\u05e2\\u05e9\\u05e2\\u05d9\\u05dd\",
    \"Face with cold sweat\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05d6\\u05d9\\u05e2\\u05d4 \\u05e7\\u05e8\\u05d4\",
    \"Pensive face\": \"\\u05d1\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d4\\u05d5\\u05e8\\u05d4\\u05e8\",
    \"Confused face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d1\\u05d5\\u05dc\\u05d1\\u05dc\\u05d9\\u05dd\",
    \"Confounded face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d1\\u05d5\\u05dc\\u05d1\\u05dc\",
    \"Kissing face\": \"\\u05e0\\u05e9\\u05d9\\u05e7\\u05d5\\u05ea \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Face throwing a kiss\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05dc\\u05d6\\u05e8\\u05d5\\u05e7 \\u05e0\\u05e9\\u05d9\\u05e7\\u05d4\",
    \"Kissing face with smiling eyes\": \"\\u05e0\\u05e9\\u05d9\\u05e7\\u05d5\\u05ea \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05de\\u05d7\\u05d9\\u05d9\\u05db\\u05d5\\u05ea\",
    \"Kissing face with closed eyes\": \"\\u05e0\\u05e9\\u05d9\\u05e7\\u05d5\\u05ea \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05e1\\u05d2\\u05d5\\u05e8\\u05d5\\u05ea\",
    \"Face with stuck out tongue\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05dc\\u05e9\\u05d5\\u05df \\u05d1\\u05dc\\u05d8\\u05d5\",
    \"Face with stuck out tongue and winking eye\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05dc\\u05e9\\u05d5\\u05df \\u05ea\\u05e7\\u05d5\\u05e2\\u05d4 \\u05d4\\u05d7\\u05d5\\u05e6\\u05d4 \\u05d5\\u05e2\\u05d9\\u05df \\u05e7\\u05d5\\u05e8\\u05e6\\u05ea\",
    \"Face with stuck out tongue and tightly-closed eyes\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05dc\\u05e9\\u05d5\\u05df \\u05ea\\u05e7\\u05d5\\u05e2\\u05d4 \\u05d4\\u05d7\\u05d5\\u05e6\\u05d4 \\u05d5\\u05e2\\u05d9\\u05e0\\u05d9\\u05d9\\u05dd \\u05d1\\u05d7\\u05d5\\u05d6\\u05e7\\u05d4\\u002d\\u05e1\\u05d2\\u05d5\\u05e8\\u05d5\\u05ea\",
    \"Disappointed face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d0\\u05d5\\u05db\\u05d6\\u05d1\\u05d9\\u05dd\",
    \"Worried face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d5\\u05d3\\u05d0\\u05d2\\u05d9\\u05dd\",
    \"Angry face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05db\\u05d5\\u05e2\\u05e1\\u05d9\\u05dd\",
    \"Pouting face\": \"\\u05de\\u05e9\\u05d5\\u05e8\\u05d1\\u05d1 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Crying face\": \"\\u05d1\\u05db\\u05d9 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Persevering face\": \"\\u05d4\\u05ea\\u05de\\u05d3\\u05ea \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Face with look of triumph\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05de\\u05d1\\u05d8 \\u05e9\\u05dc \\u05e0\\u05e6\\u05d7\\u05d5\\u05df\",
    \"Disappointed but relieved face\": \"\\u05de\\u05d0\\u05d5\\u05db\\u05d6\\u05d1 \\u05d0\\u05d1\\u05dc \\u05d4\\u05d5\\u05e7\\u05dc \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Frowning face with open mouth\": \"\\u05e7\\u05de\\u05d8 \\u05d0\\u05ea \\u05de\\u05e6\\u05d7 \\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7\",
    \"Anguished face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05de\\u05d9\\u05d5\\u05e1\\u05e8\\u05d9\\u05dd\",
    \"Fearful face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e9\\u05d7\\u05e9\\u05e9\\u05d5\",
    \"Weary face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05d5\\u05d9\\u05e8\\u05d9\",
    \"Sleepy face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e9\\u05dc \\u05e1\\u05dc\\u05d9\\u05e4\\u05d9\",
    \"Tired face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05d9\\u05d9\\u05e4\\u05d9\\u05dd\",
    \"Grimacing face\": \"\\u05d4\\u05d5\\u05d0 \\u05d4\\u05e2\\u05d5\\u05d5\\u05d4 \\u05d0\\u05ea \\u05e4\\u05e0\\u05d9 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Loudly crying face\": \"\\u05d1\\u05e7\\u05d5\\u05dc \\u05e8\\u05dd \\u05d1\\u05d5\\u05db\\u05d4 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Face with open mouth\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7\",
    \"Hushed face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e9\\u05d5\\u05e7\\u05d8\\u05d9\\u05dd\",
    \"Face with open mouth and cold sweat\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05e4\\u05d4 \\u05e4\\u05ea\\u05d5\\u05d7 \\u05d5\\u05d6\\u05d9\\u05e2\\u05d4 \\u05e7\\u05e8\\u05d4\\u0022\",
    \"Face screaming in fear\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e6\\u05d5\\u05e8\\u05d7\\u05d9\\u05dd \\u05d1\\u05e4\\u05d7\\u05d3\",
    \"Astonished face\": \"\\u05e4\\u05e0\\u05d9\\u05d5 \\u05e0\\u05d3\\u05d4\\u05de\\u05d5\\u05ea\",
    \"Flushed face\": \"\\u05e4\\u05e0\\u05d9\\u05d5 \\u05e1\\u05de\\u05d5\\u05e7\\u05d5\\u05ea\",
    \"Sleeping face\": \"\\u05e9\\u05d9\\u05e0\\u05d4 \\u05e4\\u05e0\\u05d9\\u05dd\",
    \"Dizzy face\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e9\\u05dc \\u05d3\\u05d9\\u05d6\\u05d9\",
    \"Face without mouth\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05dc\\u05dc\\u05d0 \\u05e4\\u05d4\",
    \"Face with medical mask\": \"\\u05e4\\u05e0\\u05d9\\u05dd \\u05e2\\u05dd \\u05de\\u05e1\\u05db\\u05d4 \\u05e8\\u05e4\\u05d5\\u05d0\\u05d9\\u05ea\",

    // Line breaker
    \"Break\": \"\\u05d4\\u05e4\\u05e1\\u05e7\\u05d4\",

    // Math
    \"Subscript\": \"\\u05db\\u05ea\\u05d1 \\u05ea\\u05d7\\u05ea\\u05d9\",
    \"Superscript\": \"\\u05e2\\u05d9\\u05dc\\u05d9\",

    // Full screen
    \"Fullscreen\": \"\\u05de\\u05e1\\u05da \\u05de\\u05dc\\u05d0\",

    // Horizontal line
    \"Insert Horizontal Line\": \"\\u05d4\\u05d5\\u05e1\\u05e4\\u05ea \\u05e7\\u05d5 \\u05d0\\u05d5\\u05e4\\u05e7\\u05d9\",

    // Clear formatting
    \"Clear Formatting\": \"\\u05dc\\u05d4\\u05e1\\u05d9\\u05e8 \\u05e2\\u05d9\\u05e6\\u05d5\\u05d1\",

    // Undo, redo
    \"Undo\": \"\\u05d1\\u05d9\\u05d8\\u05d5\\u05dc\",
    \"Redo\": \"\\u05d1\\u05e6\\u05e2 \\u05e9\\u05d5\\u05d1\",

    // Select all
    \"Select All\": \"\\u05d1\\u05d7\\u05e8 \\u05d4\\u05db\\u05dc\",

    // Code view
    \"Code View\": \"\\u05ea\\u05e6\\u05d5\\u05d2\\u05ea \\u05e7\\u05d5\\u05d3\",

    // Quote
    \"Quote\": \"\\u05e6\\u05d9\\u05d8\\u05d5\\u05d8\",
    \"Increase\": \"\\u05dc\\u05d4\\u05d2\\u05d1\\u05d9\\u05e8\",
    \"Decrease\": \"\\u05d9\\u05e8\\u05d9\\u05d3\\u05d4\",

    // Quick Insert
    \"Quick Insert\": \"\\u05db\\u05e0\\u05e1 \\u05de\\u05d4\\u05d9\\u05e8\"
  },
  direction: \"rtl\"
};
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/froala/languages/he.js";
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
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/froala/languages/he.js", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\js\\libraries\\froala\\languages\\he.js");
    }
}
