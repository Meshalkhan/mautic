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

/* @bundles/CoreBundle/Assets/css/libraries/libraries.css */
class __TwigTemplate_d5575d3a9efe269b20b6763597824f11 extends Template
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
        yield "/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
html {
  font-family: sans-serif;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background-color: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: none;
  text-decoration: underline;
  text-decoration: underline dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
mark {
  background: #ff0;
  color: #000;
}
small {
  font-size: 80%;
}
sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  box-sizing: content-box;
  height: 0;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  color: inherit;
  font: inherit;
  margin: 0;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type=\"button\"],
input[type=\"reset\"],
input[type=\"submit\"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  border: 0;
  padding: 0;
}
input {
  line-height: normal;
}
input[type=\"checkbox\"],
input[type=\"radio\"] {
  box-sizing: border-box;
  padding: 0;
}
input[type=\"number\"]::-webkit-inner-spin-button,
input[type=\"number\"]::-webkit-outer-spin-button {
  height: auto;
}
input[type=\"search\"] {
  -webkit-appearance: textfield;
  box-sizing: content-box;
}
input[type=\"search\"]::-webkit-search-cancel-button,
input[type=\"search\"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}
legend {
  border: 0;
  padding: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}
td,
th {
  padding: 0;
}
/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */
@media print {
  *,
  *:before,
  *:after {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: \" (\" attr(href) \")\";
  }
  abbr[title]:after {
    content: \" (\" attr(title) \")\";
  }
  a[href^=\"#\"]:after,
  a[href^=\"javascript:\"]:after {
    content: \"\";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  .navbar {
    display: none;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: \"Glyphicons Halflings\";
  src: url(\"../fonts/icons/glyphicons-halflings-regular.eot\");
  src: url(\"../fonts/icons/glyphicons-halflings-regular.eot?#iefix\") format(\"embedded-opentype\"), url(\"../fonts/icons/glyphicons-halflings-regular.woff2\") format(\"woff2\"), url(\"../fonts/icons/glyphicons-halflings-regular.woff\") format(\"woff\"), url(\"../fonts/icons/glyphicons-halflings-regular.ttf\") format(\"truetype\"), url(\"../fonts/icons/glyphicons-halflings-regular.svg#glyphicons_halflingsregular\") format(\"svg\");
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: \"Glyphicons Halflings\";
  font-style: normal;
  font-weight: 400;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: \"\\002a\";
}
.glyphicon-plus:before {
  content: \"\\002b\";
}
.glyphicon-euro:before,
.glyphicon-eur:before {
  content: \"\\20ac\";
}
.glyphicon-minus:before {
  content: \"\\2212\";
}
.glyphicon-cloud:before {
  content: \"\\2601\";
}
.glyphicon-envelope:before {
  content: \"\\2709\";
}
.glyphicon-pencil:before {
  content: \"\\270f\";
}
.glyphicon-glass:before {
  content: \"\\e001\";
}
.glyphicon-music:before {
  content: \"\\e002\";
}
.glyphicon-search:before {
  content: \"\\e003\";
}
.glyphicon-heart:before {
  content: \"\\e005\";
}
.glyphicon-star:before {
  content: \"\\e006\";
}
.glyphicon-star-empty:before {
  content: \"\\e007\";
}
.glyphicon-user:before {
  content: \"\\e008\";
}
.glyphicon-film:before {
  content: \"\\e009\";
}
.glyphicon-th-large:before {
  content: \"\\e010\";
}
.glyphicon-th:before {
  content: \"\\e011\";
}
.glyphicon-th-list:before {
  content: \"\\e012\";
}
.glyphicon-ok:before {
  content: \"\\e013\";
}
.glyphicon-remove:before {
  content: \"\\e014\";
}
.glyphicon-zoom-in:before {
  content: \"\\e015\";
}
.glyphicon-zoom-out:before {
  content: \"\\e016\";
}
.glyphicon-off:before {
  content: \"\\e017\";
}
.glyphicon-signal:before {
  content: \"\\e018\";
}
.glyphicon-cog:before {
  content: \"\\e019\";
}
.glyphicon-trash:before {
  content: \"\\e020\";
}
.glyphicon-home:before {
  content: \"\\e021\";
}
.glyphicon-file:before {
  content: \"\\e022\";
}
.glyphicon-time:before {
  content: \"\\e023\";
}
.glyphicon-road:before {
  content: \"\\e024\";
}
.glyphicon-download-alt:before {
  content: \"\\e025\";
}
.glyphicon-download:before {
  content: \"\\e026\";
}
.glyphicon-upload:before {
  content: \"\\e027\";
}
.glyphicon-inbox:before {
  content: \"\\e028\";
}
.glyphicon-play-circle:before {
  content: \"\\e029\";
}
.glyphicon-repeat:before {
  content: \"\\e030\";
}
.glyphicon-refresh:before {
  content: \"\\e031\";
}
.glyphicon-list-alt:before {
  content: \"\\e032\";
}
.glyphicon-lock:before {
  content: \"\\e033\";
}
.glyphicon-flag:before {
  content: \"\\e034\";
}
.glyphicon-headphones:before {
  content: \"\\e035\";
}
.glyphicon-volume-off:before {
  content: \"\\e036\";
}
.glyphicon-volume-down:before {
  content: \"\\e037\";
}
.glyphicon-volume-up:before {
  content: \"\\e038\";
}
.glyphicon-qrcode:before {
  content: \"\\e039\";
}
.glyphicon-barcode:before {
  content: \"\\e040\";
}
.glyphicon-tag:before {
  content: \"\\e041\";
}
.glyphicon-tags:before {
  content: \"\\e042\";
}
.glyphicon-book:before {
  content: \"\\e043\";
}
.glyphicon-bookmark:before {
  content: \"\\e044\";
}
.glyphicon-print:before {
  content: \"\\e045\";
}
.glyphicon-camera:before {
  content: \"\\e046\";
}
.glyphicon-font:before {
  content: \"\\e047\";
}
.glyphicon-bold:before {
  content: \"\\e048\";
}
.glyphicon-italic:before {
  content: \"\\e049\";
}
.glyphicon-text-height:before {
  content: \"\\e050\";
}
.glyphicon-text-width:before {
  content: \"\\e051\";
}
.glyphicon-align-left:before {
  content: \"\\e052\";
}
.glyphicon-align-center:before {
  content: \"\\e053\";
}
.glyphicon-align-right:before {
  content: \"\\e054\";
}
.glyphicon-align-justify:before {
  content: \"\\e055\";
}
.glyphicon-list:before {
  content: \"\\e056\";
}
.glyphicon-indent-left:before {
  content: \"\\e057\";
}
.glyphicon-indent-right:before {
  content: \"\\e058\";
}
.glyphicon-facetime-video:before {
  content: \"\\e059\";
}
.glyphicon-picture:before {
  content: \"\\e060\";
}
.glyphicon-map-marker:before {
  content: \"\\e062\";
}
.glyphicon-adjust:before {
  content: \"\\e063\";
}
.glyphicon-tint:before {
  content: \"\\e064\";
}
.glyphicon-edit:before {
  content: \"\\e065\";
}
.glyphicon-share:before {
  content: \"\\e066\";
}
.glyphicon-check:before {
  content: \"\\e067\";
}
.glyphicon-move:before {
  content: \"\\e068\";
}
.glyphicon-step-backward:before {
  content: \"\\e069\";
}
.glyphicon-fast-backward:before {
  content: \"\\e070\";
}
.glyphicon-backward:before {
  content: \"\\e071\";
}
.glyphicon-play:before {
  content: \"\\e072\";
}
.glyphicon-pause:before {
  content: \"\\e073\";
}
.glyphicon-stop:before {
  content: \"\\e074\";
}
.glyphicon-forward:before {
  content: \"\\e075\";
}
.glyphicon-fast-forward:before {
  content: \"\\e076\";
}
.glyphicon-step-forward:before {
  content: \"\\e077\";
}
.glyphicon-eject:before {
  content: \"\\e078\";
}
.glyphicon-chevron-left:before {
  content: \"\\e079\";
}
.glyphicon-chevron-right:before {
  content: \"\\e080\";
}
.glyphicon-plus-sign:before {
  content: \"\\e081\";
}
.glyphicon-minus-sign:before {
  content: \"\\e082\";
}
.glyphicon-remove-sign:before {
  content: \"\\e083\";
}
.glyphicon-ok-sign:before {
  content: \"\\e084\";
}
.glyphicon-question-sign:before {
  content: \"\\e085\";
}
.glyphicon-info-sign:before {
  content: \"\\e086\";
}
.glyphicon-screenshot:before {
  content: \"\\e087\";
}
.glyphicon-remove-circle:before {
  content: \"\\e088\";
}
.glyphicon-ok-circle:before {
  content: \"\\e089\";
}
.glyphicon-ban-circle:before {
  content: \"\\e090\";
}
.glyphicon-arrow-left:before {
  content: \"\\e091\";
}
.glyphicon-arrow-right:before {
  content: \"\\e092\";
}
.glyphicon-arrow-up:before {
  content: \"\\e093\";
}
.glyphicon-arrow-down:before {
  content: \"\\e094\";
}
.glyphicon-share-alt:before {
  content: \"\\e095\";
}
.glyphicon-resize-full:before {
  content: \"\\e096\";
}
.glyphicon-resize-small:before {
  content: \"\\e097\";
}
.glyphicon-exclamation-sign:before {
  content: \"\\e101\";
}
.glyphicon-gift:before {
  content: \"\\e102\";
}
.glyphicon-leaf:before {
  content: \"\\e103\";
}
.glyphicon-fire:before {
  content: \"\\e104\";
}
.glyphicon-eye-open:before {
  content: \"\\e105\";
}
.glyphicon-eye-close:before {
  content: \"\\e106\";
}
.glyphicon-warning-sign:before {
  content: \"\\e107\";
}
.glyphicon-plane:before {
  content: \"\\e108\";
}
.glyphicon-calendar:before {
  content: \"\\e109\";
}
.glyphicon-random:before {
  content: \"\\e110\";
}
.glyphicon-comment:before {
  content: \"\\e111\";
}
.glyphicon-magnet:before {
  content: \"\\e112\";
}
.glyphicon-chevron-up:before {
  content: \"\\e113\";
}
.glyphicon-chevron-down:before {
  content: \"\\e114\";
}
.glyphicon-retweet:before {
  content: \"\\e115\";
}
.glyphicon-shopping-cart:before {
  content: \"\\e116\";
}
.glyphicon-folder-close:before {
  content: \"\\e117\";
}
.glyphicon-folder-open:before {
  content: \"\\e118\";
}
.glyphicon-resize-vertical:before {
  content: \"\\e119\";
}
.glyphicon-resize-horizontal:before {
  content: \"\\e120\";
}
.glyphicon-hdd:before {
  content: \"\\e121\";
}
.glyphicon-bullhorn:before {
  content: \"\\e122\";
}
.glyphicon-bell:before {
  content: \"\\e123\";
}
.glyphicon-certificate:before {
  content: \"\\e124\";
}
.glyphicon-thumbs-up:before {
  content: \"\\e125\";
}
.glyphicon-thumbs-down:before {
  content: \"\\e126\";
}
.glyphicon-hand-right:before {
  content: \"\\e127\";
}
.glyphicon-hand-left:before {
  content: \"\\e128\";
}
.glyphicon-hand-up:before {
  content: \"\\e129\";
}
.glyphicon-hand-down:before {
  content: \"\\e130\";
}
.glyphicon-circle-arrow-right:before {
  content: \"\\e131\";
}
.glyphicon-circle-arrow-left:before {
  content: \"\\e132\";
}
.glyphicon-circle-arrow-up:before {
  content: \"\\e133\";
}
.glyphicon-circle-arrow-down:before {
  content: \"\\e134\";
}
.glyphicon-globe:before {
  content: \"\\e135\";
}
.glyphicon-wrench:before {
  content: \"\\e136\";
}
.glyphicon-tasks:before {
  content: \"\\e137\";
}
.glyphicon-filter:before {
  content: \"\\e138\";
}
.glyphicon-briefcase:before {
  content: \"\\e139\";
}
.glyphicon-fullscreen:before {
  content: \"\\e140\";
}
.glyphicon-dashboard:before {
  content: \"\\e141\";
}
.glyphicon-paperclip:before {
  content: \"\\e142\";
}
.glyphicon-heart-empty:before {
  content: \"\\e143\";
}
.glyphicon-link:before {
  content: \"\\e144\";
}
.glyphicon-phone:before {
  content: \"\\e145\";
}
.glyphicon-pushpin:before {
  content: \"\\e146\";
}
.glyphicon-usd:before {
  content: \"\\e148\";
}
.glyphicon-gbp:before {
  content: \"\\e149\";
}
.glyphicon-sort:before {
  content: \"\\e150\";
}
.glyphicon-sort-by-alphabet:before {
  content: \"\\e151\";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: \"\\e152\";
}
.glyphicon-sort-by-order:before {
  content: \"\\e153\";
}
.glyphicon-sort-by-order-alt:before {
  content: \"\\e154\";
}
.glyphicon-sort-by-attributes:before {
  content: \"\\e155\";
}
.glyphicon-sort-by-attributes-alt:before {
  content: \"\\e156\";
}
.glyphicon-unchecked:before {
  content: \"\\e157\";
}
.glyphicon-expand:before {
  content: \"\\e158\";
}
.glyphicon-collapse-down:before {
  content: \"\\e159\";
}
.glyphicon-collapse-up:before {
  content: \"\\e160\";
}
.glyphicon-log-in:before {
  content: \"\\e161\";
}
.glyphicon-flash:before {
  content: \"\\e162\";
}
.glyphicon-log-out:before {
  content: \"\\e163\";
}
.glyphicon-new-window:before {
  content: \"\\e164\";
}
.glyphicon-record:before {
  content: \"\\e165\";
}
.glyphicon-save:before {
  content: \"\\e166\";
}
.glyphicon-open:before {
  content: \"\\e167\";
}
.glyphicon-saved:before {
  content: \"\\e168\";
}
.glyphicon-import:before {
  content: \"\\e169\";
}
.glyphicon-export:before {
  content: \"\\e170\";
}
.glyphicon-send:before {
  content: \"\\e171\";
}
.glyphicon-floppy-disk:before {
  content: \"\\e172\";
}
.glyphicon-floppy-saved:before {
  content: \"\\e173\";
}
.glyphicon-floppy-remove:before {
  content: \"\\e174\";
}
.glyphicon-floppy-save:before {
  content: \"\\e175\";
}
.glyphicon-floppy-open:before {
  content: \"\\e176\";
}
.glyphicon-credit-card:before {
  content: \"\\e177\";
}
.glyphicon-transfer:before {
  content: \"\\e178\";
}
.glyphicon-cutlery:before {
  content: \"\\e179\";
}
.glyphicon-header:before {
  content: \"\\e180\";
}
.glyphicon-compressed:before {
  content: \"\\e181\";
}
.glyphicon-earphone:before {
  content: \"\\e182\";
}
.glyphicon-phone-alt:before {
  content: \"\\e183\";
}
.glyphicon-tower:before {
  content: \"\\e184\";
}
.glyphicon-stats:before {
  content: \"\\e185\";
}
.glyphicon-sd-video:before {
  content: \"\\e186\";
}
.glyphicon-hd-video:before {
  content: \"\\e187\";
}
.glyphicon-subtitles:before {
  content: \"\\e188\";
}
.glyphicon-sound-stereo:before {
  content: \"\\e189\";
}
.glyphicon-sound-dolby:before {
  content: \"\\e190\";
}
.glyphicon-sound-5-1:before {
  content: \"\\e191\";
}
.glyphicon-sound-6-1:before {
  content: \"\\e192\";
}
.glyphicon-sound-7-1:before {
  content: \"\\e193\";
}
.glyphicon-copyright-mark:before {
  content: \"\\e194\";
}
.glyphicon-registration-mark:before {
  content: \"\\e195\";
}
.glyphicon-cloud-download:before {
  content: \"\\e197\";
}
.glyphicon-cloud-upload:before {
  content: \"\\e198\";
}
.glyphicon-tree-conifer:before {
  content: \"\\e199\";
}
.glyphicon-tree-deciduous:before {
  content: \"\\e200\";
}
.glyphicon-cd:before {
  content: \"\\e201\";
}
.glyphicon-save-file:before {
  content: \"\\e202\";
}
.glyphicon-open-file:before {
  content: \"\\e203\";
}
.glyphicon-level-up:before {
  content: \"\\e204\";
}
.glyphicon-copy:before {
  content: \"\\e205\";
}
.glyphicon-paste:before {
  content: \"\\e206\";
}
.glyphicon-alert:before {
  content: \"\\e209\";
}
.glyphicon-equalizer:before {
  content: \"\\e210\";
}
.glyphicon-king:before {
  content: \"\\e211\";
}
.glyphicon-queen:before {
  content: \"\\e212\";
}
.glyphicon-pawn:before {
  content: \"\\e213\";
}
.glyphicon-bishop:before {
  content: \"\\e214\";
}
.glyphicon-knight:before {
  content: \"\\e215\";
}
.glyphicon-baby-formula:before {
  content: \"\\e216\";
}
.glyphicon-tent:before {
  content: \"\\26fa\";
}
.glyphicon-blackboard:before {
  content: \"\\e218\";
}
.glyphicon-bed:before {
  content: \"\\e219\";
}
.glyphicon-apple:before {
  content: \"\\f8ff\";
}
.glyphicon-erase:before {
  content: \"\\e221\";
}
.glyphicon-hourglass:before {
  content: \"\\231b\";
}
.glyphicon-lamp:before {
  content: \"\\e223\";
}
.glyphicon-duplicate:before {
  content: \"\\e224\";
}
.glyphicon-piggy-bank:before {
  content: \"\\e225\";
}
.glyphicon-scissors:before {
  content: \"\\e226\";
}
.glyphicon-bitcoin:before {
  content: \"\\e227\";
}
.glyphicon-btc:before {
  content: \"\\e227\";
}
.glyphicon-xbt:before {
  content: \"\\e227\";
}
.glyphicon-yen:before {
  content: \"\\00a5\";
}
.glyphicon-jpy:before {
  content: \"\\00a5\";
}
.glyphicon-ruble:before {
  content: \"\\20bd\";
}
.glyphicon-rub:before {
  content: \"\\20bd\";
}
.glyphicon-scale:before {
  content: \"\\e230\";
}
.glyphicon-ice-lolly:before {
  content: \"\\e231\";
}
.glyphicon-ice-lolly-tasted:before {
  content: \"\\e232\";
}
.glyphicon-education:before {
  content: \"\\e233\";
}
.glyphicon-option-horizontal:before {
  content: \"\\e234\";
}
.glyphicon-option-vertical:before {
  content: \"\\e235\";
}
.glyphicon-menu-hamburger:before {
  content: \"\\e236\";
}
.glyphicon-modal-window:before {
  content: \"\\e237\";
}
.glyphicon-oil:before {
  content: \"\\e238\";
}
.glyphicon-grain:before {
  content: \"\\e239\";
}
.glyphicon-sunglasses:before {
  content: \"\\e240\";
}
.glyphicon-text-size:before {
  content: \"\\e241\";
}
.glyphicon-text-color:before {
  content: \"\\e242\";
}
.glyphicon-text-background:before {
  content: \"\\e243\";
}
.glyphicon-object-align-top:before {
  content: \"\\e244\";
}
.glyphicon-object-align-bottom:before {
  content: \"\\e245\";
}
.glyphicon-object-align-horizontal:before {
  content: \"\\e246\";
}
.glyphicon-object-align-left:before {
  content: \"\\e247\";
}
.glyphicon-object-align-vertical:before {
  content: \"\\e248\";
}
.glyphicon-object-align-right:before {
  content: \"\\e249\";
}
.glyphicon-triangle-right:before {
  content: \"\\e250\";
}
.glyphicon-triangle-left:before {
  content: \"\\e251\";
}
.glyphicon-triangle-bottom:before {
  content: \"\\e252\";
}
.glyphicon-triangle-top:before {
  content: \"\\e253\";
}
.glyphicon-console:before {
  content: \"\\e254\";
}
.glyphicon-superscript:before {
  content: \"\\e255\";
}
.glyphicon-subscript:before {
  content: \"\\e256\";
}
.glyphicon-menu-left:before {
  content: \"\\e257\";
}
.glyphicon-menu-right:before {
  content: \"\\e258\";
}
.glyphicon-menu-down:before {
  content: \"\\e259\";
}
.glyphicon-menu-up:before {
  content: \"\\e260\";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: \"Source Sans 3\", Helvetica, Arial, sans-serif;
  font-size: 13px;
  line-height: 1.3856;
  color: #262d33;
  background-color: #f8f8f8;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #4E5D9D;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #3d497b;
  text-decoration: underline;
}
a:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 4px;
}
.img-thumbnail {
  padding: 4px;
  line-height: 1.3856;
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 3px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  display: inline-block;
  max-width: 100%;
  height: auto;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 18px;
  margin-bottom: 18px;
  border: 0;
  border-top: 1px solid #ebedf0;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
[role=\"button\"] {
  cursor: pointer;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 400;
  line-height: 1.2;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: 400;
  line-height: 1;
  color: #a0acb8;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 18px;
  margin-bottom: 9px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 9px;
  margin-bottom: 9px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 22px;
}
h2,
.h2 {
  font-size: 27px;
}
h3,
.h3 {
  font-size: 20px;
}
h4,
.h4 {
  font-size: 16px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 13px;
}
p {
  margin: 0 0 9px;
}
.lead {
  margin-bottom: 18px;
  font-size: 14px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 19.5px;
  }
}
small,
.small {
  font-size: 84%;
}
mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #a0acb8;
}
.text-primary {
  color: #4E5D9D;
}
a.text-primary:hover,
a.text-primary:focus {
  color: #3d497b;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover,
a.text-success:focus {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover,
a.text-info:focus {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover,
a.text-warning:focus {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover,
a.text-danger:focus {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #4E5D9D;
}
a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #3d497b;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 8px;
  margin: 36px 0 18px;
  border-bottom: 1px solid #ebedf0;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 9px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  list-style: none;
  margin-left: -5px;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 18px;
}
dt,
dd {
  line-height: 1.3856;
}
dt {
  font-weight: 700;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    clear: left;
    text-align: right;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 9px 18px;
  margin: 0 0 18px;
  font-size: 16.25px;
  border-left: 5px solid #ebedf0;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.3856;
  color: #a0acb8;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: \"\\2014 \\00A0\";
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #ebedf0;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: \"\";
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: \"\\00A0 \\2014\";
}
address {
  margin-bottom: 18px;
  font-style: normal;
  line-height: 1.3856;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, \"Courier New\", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 3px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 2px;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: 700;
  box-shadow: none;
}
pre {
  display: block;
  padding: 8.5px;
  margin: 0 0 9px;
  font-size: 12px;
  line-height: 1.3856;
  color: #3c4650;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 3px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
table {
  background-color: transparent;
}
table col[class*=\"col-\"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*=\"col-\"],
table th[class*=\"col-\"] {
  position: static;
  display: table-cell;
  float: none;
}
caption {
  padding-top: 8px 15px;
  padding-bottom: 8px 15px;
  color: #a0acb8;
  text-align: left;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 18px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px 15px;
  line-height: 1.3856;
  vertical-align: top;
  border-top: 1px solid #ebedf0;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ebedf0;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ebedf0;
}
.table .table {
  background-color: #f8f8f8;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px 15px;
}
.table-bordered {
  border: 1px solid #ebedf0;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ebedf0;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-of-type(odd) {
  background-color: #fafafa;
}
.table-hover > tbody > tr:hover {
  background-color: #fafafa;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #fafafa;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #ededed;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
.table-responsive {
  min-height: 0.01%;
  overflow-x: auto;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 13.5px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ebedf0;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 18px;
  font-size: 19.5px;
  line-height: inherit;
  color: #3c4650;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}
input[type=\"search\"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  appearance: none;
}
input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 4px 0 0;
  margin-top: 1px \\9;
  line-height: normal;
}
input[type=\"radio\"][disabled],
input[type=\"checkbox\"][disabled],
input[type=\"radio\"].disabled,
input[type=\"checkbox\"].disabled,
fieldset[disabled] input[type=\"radio\"],
fieldset[disabled] input[type=\"checkbox\"] {
  cursor: not-allowed;
}
input[type=\"file\"] {
  display: block;
}
input[type=\"range\"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type=\"file\"]:focus,
input[type=\"radio\"]:focus,
input[type=\"checkbox\"]:focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 13px;
  line-height: 1.3856;
  color: #596776;
}
.form-control {
  display: block;
  width: 100%;
  height: 32px;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.3856;
  color: #596776;
  background-color: #fff;
  background-image: none;
  border: 1px solid #d5d5d5;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
.form-control:focus {
  border-color: #bcbcbc;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(188, 188, 188, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(188, 188, 188, 0.6);
}
.form-control::-moz-placeholder {
  color: #999;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #999;
}
.form-control::-webkit-input-placeholder {
  color: #999;
}
.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #ebedf0;
  opacity: 1;
}
.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed;
}
textarea.form-control {
  height: auto;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type=\"date\"].form-control,
  input[type=\"time\"].form-control,
  input[type=\"datetime-local\"].form-control,
  input[type=\"month\"].form-control {
    line-height: 32px;
  }
  input[type=\"date\"].input-sm,
  input[type=\"time\"].input-sm,
  input[type=\"datetime-local\"].input-sm,
  input[type=\"month\"].input-sm,
  .input-group-sm input[type=\"date\"],
  .input-group-sm input[type=\"time\"],
  .input-group-sm input[type=\"datetime-local\"],
  .input-group-sm input[type=\"month\"] {
    line-height: 28px;
  }
  input[type=\"date\"].input-lg,
  input[type=\"time\"].input-lg,
  input[type=\"datetime-local\"].input-lg,
  input[type=\"month\"].input-lg,
  .input-group-lg input[type=\"date\"],
  .input-group-lg input[type=\"time\"],
  .input-group-lg input[type=\"datetime-local\"],
  .input-group-lg input[type=\"month\"] {
    line-height: 42px;
  }
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.radio label,
.checkbox label {
  min-height: 18px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: 400;
  cursor: pointer;
}
.radio input[type=\"radio\"],
.radio-inline input[type=\"radio\"],
.checkbox input[type=\"checkbox\"],
.checkbox-inline input[type=\"checkbox\"] {
  position: absolute;
  margin-top: 4px \\9;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: 400;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
.form-control-static {
  min-height: 31px;
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-sm {
  height: 28px;
  line-height: 28px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.form-group-sm .form-control {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.form-group-sm select.form-control {
  height: 28px;
  line-height: 28px;
}
.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto;
}
.form-group-sm .form-control-static {
  height: 28px;
  min-height: 29px;
  padding: 6px 10px;
  font-size: 11px;
  line-height: 1.456;
}
.input-lg {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-lg {
  height: 42px;
  line-height: 42px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.form-group-lg .form-control {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
.form-group-lg select.form-control {
  height: 42px;
  line-height: 42px;
}
.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto;
}
.form-group-lg .form-control-static {
  height: 42px;
  min-height: 34px;
  padding: 11px 16px;
  font-size: 16px;
  line-height: 1.25;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 40px;
}
.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 32px;
  height: 32px;
  line-height: 32px;
  text-align: center;
  pointer-events: none;
}
.input-lg + .form-control-feedback,
.input-group-lg + .form-control-feedback,
.form-group-lg .form-control + .form-control-feedback {
  width: 42px;
  height: 42px;
  line-height: 42px;
}
.input-sm + .form-control-feedback,
.input-group-sm + .form-control-feedback,
.form-group-sm .form-control + .form-control-feedback {
  width: 28px;
  height: 28px;
  line-height: 28px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label ~ .form-control-feedback {
  top: 23px;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #5d6c7c;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-static {
    display: inline-block;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type=\"radio\"],
  .form-inline .checkbox input[type=\"checkbox\"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 25px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 16px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 11px;
  }
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 600;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  padding: 6px 12px;
  font-size: 13px;
  line-height: 1.3856;
  border-radius: 3px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus,
.btn.focus {
  color: #3c4650;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=65);
  opacity: 0.65;
  -webkit-box-shadow: none;
  box-shadow: none;
}
a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none;
}
.btn-default {
  color: #3c4650;
  background-color: #fff;
  border-color: #ddd;
}
.btn-default:focus,
.btn-default.focus {
  color: #3c4650;
  background-color: #e6e6e6;
  border-color: #9d9d9d;
}
.btn-default:hover {
  color: #3c4650;
  background-color: #e6e6e6;
  border-color: #bebebe;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #3c4650;
  background-color: #e6e6e6;
  background-image: none;
  border-color: #bebebe;
}
.btn-default:active:hover,
.btn-default.active:hover,
.open > .dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open > .dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open > .dropdown-toggle.btn-default.focus {
  color: #3c4650;
  background-color: #d4d4d4;
  border-color: #9d9d9d;
}
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ddd;
}
.btn-default .badge {
  color: #fff;
  background-color: #3c4650;
}
.btn-primary {
  color: #fff;
  background-color: #4E5D9D;
  border-color: #4E5D9D;
}
.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #3d497b;
  border-color: #242b48;
}
.btn-primary:hover {
  color: #fff;
  background-color: #3d497b;
  border-color: #3a4574;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3d497b;
  background-image: none;
  border-color: #3a4574;
}
.btn-primary:active:hover,
.btn-primary.active:hover,
.open > .dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open > .dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open > .dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #313b63;
  border-color: #242b48;
}
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #4E5D9D;
  border-color: #4E5D9D;
}
.btn-primary .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #00B49C;
  border-color: #00B49C;
}
.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #008170;
  border-color: #00352e;
}
.btn-success:hover {
  color: #fff;
  background-color: #008170;
  border-color: #007767;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #008170;
  background-image: none;
  border-color: #007767;
}
.btn-success:active:hover,
.btn-success.active:hover,
.open > .dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open > .dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open > .dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #005d51;
  border-color: #00352e;
}
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #00B49C;
  border-color: #00B49C;
}
.btn-success .badge {
  color: #00B49C;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #35B4B9;
  border-color: #35B4B9;
}
.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #2a8d91;
  border-color: #195456;
}
.btn-info:hover {
  color: #fff;
  background-color: #2a8d91;
  border-color: #278689;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #2a8d91;
  background-image: none;
  border-color: #278689;
}
.btn-info:active:hover,
.btn-info.active:hover,
.open > .dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open > .dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open > .dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #227276;
  border-color: #195456;
}
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #35B4B9;
  border-color: #35B4B9;
}
.btn-info .badge {
  color: #35B4B9;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #FDB933;
  border-color: #FDB933;
}
.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #fba702;
  border-color: #af7502;
}
.btn-warning:hover {
  color: #fff;
  background-color: #fba702;
  border-color: #f0a002;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #fba702;
  background-image: none;
  border-color: #f0a002;
}
.btn-warning:active:hover,
.btn-warning.active:hover,
.open > .dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open > .dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open > .dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d78f02;
  border-color: #af7502;
}
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #FDB933;
  border-color: #FDB933;
}
.btn-warning .badge {
  color: #FDB933;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #F86B4F;
  border-color: #F86B4F;
}
.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #f6421e;
  border-color: #c02608;
}
.btn-danger:hover {
  color: #fff;
  background-color: #f6421e;
  border-color: #f63a14;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #f6421e;
  background-image: none;
  border-color: #f63a14;
}
.btn-danger:active:hover,
.btn-danger.active:hover,
.open > .dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open > .dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open > .dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #e72e09;
  border-color: #c02608;
}
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #F86B4F;
  border-color: #F86B4F;
}
.btn-danger .badge {
  color: #F86B4F;
  background-color: #fff;
}
.btn-link {
  font-weight: 400;
  color: #4E5D9D;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #3d497b;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #a0acb8;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type=\"submit\"].btn-block,
input[type=\"reset\"].btn-block,
input[type=\"button\"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-property: height, visibility;
  transition-property: height, visibility;
  -webkit-transition-duration: 0.35s;
  transition-duration: 0.35s;
  -webkit-transition-timing-function: ease;
  transition-timing-function: ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \\9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropup,
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 13px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #eaeaea;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: 400;
  line-height: 1.3856;
  color: #262d33;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #1b2024;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #4E5D9D;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #a0acb8;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 11px;
  line-height: 1.3856;
  color: #a0acb8;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: \"\";
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \\9;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn-group:last-child:not(:first-child) > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle=\"buttons\"] > .btn input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"radio\"],
[data-toggle=\"buttons\"] > .btn input[type=\"checkbox\"],
[data-toggle=\"buttons\"] > .btn-group > .btn input[type=\"checkbox\"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*=\"col-\"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group .form-control:focus {
  z-index: 3;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 42px;
  line-height: 42px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 28px;
  line-height: 28px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 13px;
  font-weight: 400;
  line-height: 1;
  color: #596776;
  text-align: center;
  background-color: #ebedf0;
  border: 1px solid #d5d5d5;
  border-radius: 3px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 11px;
  border-radius: 2px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 16px;
  border-radius: 4px;
}
.input-group-addon input[type=\"radio\"],
.input-group-addon input[type=\"checkbox\"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  z-index: 2;
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 18px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #f0f0f0;
}
.nav > li.disabled > a {
  color: #a0acb8;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #a0acb8;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #f0f0f0;
  border-color: #4E5D9D;
}
.nav .nav-divider {
  height: 1px;
  margin: 8px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ebedf0;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.3856;
  border: 1px solid transparent;
  border-radius: 3px 3px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eeeeee #eeeeee #ebedf0;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #596776;
  cursor: default;
  background-color: #f8f8f8;
  border: 1px solid #ebedf0;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 3px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 3px 3px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #f8f8f8;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 3px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #4E5D9D;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 3px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 3px 3px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #f8f8f8;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 18px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 3px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  border-top: 1px solid transparent;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  -webkit-overflow-scrolling: touch;
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 16px 15px;
  font-size: 16px;
  line-height: 18px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
.navbar-brand > img {
  display: block;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-right: 15px;
  margin-top: 8px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 3px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 8px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 18px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 18px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 16px;
    padding-bottom: 16px;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-right: -15px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  margin-top: 9px;
  margin-bottom: 9px;
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .form-control-static {
    display: inline-block;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type=\"radio\"],
  .navbar-form .checkbox input[type=\"checkbox\"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
.navbar-form .chosen-container {
  display: inline-table;
  vertical-align: middle;
  min-width: 200px;
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 9px;
  margin-bottom: 9px;
}
.navbar-btn.btn-sm {
  margin-top: 11px;
  margin-bottom: 11px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 16px;
  margin-bottom: 16px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
    float: left;
  }
  .navbar-right {
    float: right !important;
    float: right;
    margin-right: -15px;
  }
  .navbar-right ~ .navbar-right {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #cbd2d8;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #cbd2d8;
}
.navbar-inverse .navbar-nav > li > a {
  color: #cbd2d8;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #cbd2d8;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-link {
  color: #cbd2d8;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #cbd2d8;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 18px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 3px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: \"/\\00a0\";
}
.breadcrumb > .active {
  color: #a0acb8;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 18px 0;
  border-radius: 3px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.3856;
  color: #4E5D9D;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  z-index: 2;
  color: #3d497b;
  background-color: #ebedf0;
  border-color: #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 3;
  color: #3d497b;
  cursor: default;
  background-color: #ebedf0;
  border-color: #ddd;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #a0acb8;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.pager {
  padding-left: 0;
  margin: 18px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #ebedf0;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #a0acb8;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: 0.2em 0.6em 0.3em;
  font-size: 75%;
  font-weight: 700;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #a0acb8;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #8392a2;
}
.label-primary {
  background-color: #4E5D9D;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3d497b;
}
.label-success {
  background-color: #00B49C;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #008170;
}
.label-info {
  background-color: #35B4B9;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #2a8d91;
}
.label-warning {
  background-color: #FDB933;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #fba702;
}
.label-danger {
  background-color: #F86B4F;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #f6421e;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 11px;
  font-weight: 400;
  line-height: 18px;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #a0acb8;
  border-radius: 9px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge,
.btn-group-xs > .btn .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #ebedf0;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 20px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #cdd4da;
}
.container .jumbotron,
.container-fluid .jumbotron {
  padding-right: 15px;
  padding-left: 15px;
  border-radius: 4px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 59px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 18px;
  line-height: 1.3856;
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  border-radius: 3px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #4E5D9D;
}
.thumbnail .caption {
  padding: 9px;
  color: #262d33;
}
.alert {
  padding: 15px;
  margin-bottom: 18px;
  border: 1px solid transparent;
  border-radius: 3px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 18px;
  margin-bottom: 18px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0%;
  height: 100%;
  font-size: 11px;
  line-height: 18px;
  color: #fff;
  text-align: center;
  background-color: #4E5D9D;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar-success {
  background-color: #00B49C;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #35B4B9;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #FDB933;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #F86B4F;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
}
.media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media-body {
  width: 10000px;
}
.media-object {
  display: block;
}
.media-object.img-thumbnail {
  max-width: none;
}
.media-right,
.media > .pull-right {
  padding-left: 10px;
}
.media-left,
.media > .pull-left {
  padding-right: 10px;
}
.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top;
}
.media-middle {
  vertical-align: middle;
}
.media-bottom {
  vertical-align: bottom;
}
.media-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: transparent;
  border: 1px solid #ebedf0;
}
.list-group-item:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #a0acb8;
  cursor: not-allowed;
  background-color: #ebedf0;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #a0acb8;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #262d33;
  background-color: #f5f5f5;
  border-color: #ebedf0;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #ffffff;
}
a.list-group-item,
button.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
button.list-group-item {
  width: 100%;
  text-align: left;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info,
button.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 18px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 3px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 15px;
  color: inherit;
}
.panel-title > a,
.panel-title > small,
.panel-title > .small,
.panel-title > small > a,
.panel-title > .small > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ebedf0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .list-group,
.panel > .panel-collapse > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item,
.panel > .panel-collapse > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child,
.panel > .panel-collapse > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.panel > .list-group:last-child .list-group-item:last-child,
.panel > .panel-collapse > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .panel-heading + .panel-collapse > .list-group .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table caption,
.panel > .table-responsive > .table caption,
.panel > .panel-collapse > .table caption {
  padding-right: 15px;
  padding-left: 15px;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child {
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:first-child {
  border-top-left-radius: 2px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel > .table-responsive:first-child > .table:first-child > tbody:first-child > tr:first-child th:last-child {
  border-top-right-radius: 2px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child {
  border-bottom-right-radius: 2px;
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:first-child {
  border-bottom-left-radius: 2px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel > .table-responsive:last-child > .table:last-child > tfoot:last-child > tr:last-child th:last-child {
  border-bottom-right-radius: 2px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive,
.panel > .table + .panel-body,
.panel > .table-responsive + .panel-body {
  border-top: 1px solid #ebedf0;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 18px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 3px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body,
.panel-group .panel-heading + .panel-collapse > .list-group {
  border-top: 1px solid #ebedf0;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ebedf0;
}
.panel-default {
  border-color: #ebedf0;
}
.panel-default > .panel-heading {
  color: #3c4650;
  background-color: #f5f5f5;
  border-color: #ebedf0;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebedf0;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #3c4650;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebedf0;
}
.panel-primary {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #4E5D9D;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-primary > .panel-heading .badge {
  color: #4E5D9D;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-success {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading {
  color: #fff;
  background-color: #00B49C;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-success > .panel-heading .badge {
  color: #00B49C;
  background-color: #fff;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-info {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading {
  color: #fff;
  background-color: #35B4B9;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-info > .panel-heading .badge {
  color: #35B4B9;
  background-color: #fff;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-warning {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading {
  color: #fff;
  background-color: #FDB933;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-warning > .panel-heading .badge {
  color: #FDB933;
  background-color: #fff;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.panel-danger {
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading {
  color: #fff;
  background-color: #F86B4F;
  border-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: rgba(0, 0, 0, 0.03);
}
.panel-danger > .panel-heading .badge {
  color: #F86B4F;
  background-color: #fff;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: rgba(0, 0, 0, 0.03);
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 4px;
}
.well-sm {
  padding: 9px;
  border-radius: 2px;
}
.close {
  float: right;
  font-size: 19.5px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: 0.2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: 0.5;
}
button.close {
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  appearance: none;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%);
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -moz-transition: -moz-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
}
.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 4px;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  outline: 0;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.3856;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 10000;
  display: block;
  font-family: \"Source Sans 3\", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.3856;
  line-break: auto;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  font-size: 11px;
  filter: alpha(opacity=0);
  opacity: 0;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: 0.9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 3px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: \"Source Sans 3\", Helvetica, Arial, sans-serif;
  font-style: normal;
  font-weight: 400;
  line-height: 1.3856;
  line-break: auto;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  font-size: 13px;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow:after {
  content: \"\";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999999;
  border-top-color: rgba(0, 0, 0, 0.15);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: \" \";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999999;
  border-right-color: rgba(0, 0, 0, 0.15);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: \" \";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999999;
  border-bottom-color: rgba(0, 0, 0, 0.15);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: \" \";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999999;
  border-left-color: rgba(0, 0, 0, 0.15);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: \" \";
  border-right-width: 0;
  border-left-color: #fff;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 13px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 3px 3px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
@media all and (transform-3d), (-webkit-transform-3d) {
  .carousel-inner > .item {
    -webkit-transition: -webkit-transform 0.6s ease-in-out;
    -moz-transition: -moz-transform 0.6s ease-in-out;
    -o-transition: -o-transform 0.6s ease-in-out;
    transition: transform 0.6s ease-in-out;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    -moz-perspective: 1000px;
    -ms-perspective: 1000px;
    -o-perspective: 1000px;
    perspective: 1000px;
  }
  .carousel-inner > .item.next,
  .carousel-inner > .item.active.right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.prev,
  .carousel-inner > .item.active.left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    left: 0;
  }
  .carousel-inner > .item.next.left,
  .carousel-inner > .item.prev.right,
  .carousel-inner > .item.active {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: rgba(0, 0, 0, 0);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  outline: 0;
  filter: alpha(opacity=90);
  opacity: 0.9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1;
}
.carousel-control .icon-prev:before {
  content: \"\\2039\";
}
.carousel-control .icon-next:before {
  content: \"\\203a\";
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \\9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: \" \";
}
.clearfix:after,
.dl-horizontal dd:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
}
.affix {
  position: fixed;
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table !important;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table !important;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table !important;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table !important;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table !important;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
/*!
 * bootstrap-vertical-tabs - v1.1.0
 * https://dbtek.github.io/bootstrap-vertical-tabs
 * 2014-06-06
 * Copyright (c) 2014 Ä°smail Demirbilek
 * License: MIT
 */
.tabs-left,
.tabs-right {
  border-bottom: none;
  padding-top: 2px;
  box-shadow: none;
  -webkit-box-shadow: none;
}
.tabs-left {
  border-right: 1px solid #ddd;
  padding-right: 0 !important;
}
.tabs-right {
  border-left: 1px solid #ddd;
  padding-left: 0 !important;
}
.tabs-left > li,
.tabs-right > li {
  float: none;
  margin-bottom: 2px;
}
.tabs-left > li {
  margin-right: -1px;
}
.tabs-right > li {
  margin-left: -1px;
}
.tabs-left > li.active > a,
.tabs-left > li.active > a:hover,
.tabs-left > li.active > a:focus {
  border-bottom-color: #ddd;
  border-right-color: transparent;
}
.tabs-right > li.active > a,
.tabs-right > li.active > a:hover,
.tabs-right > li.active > a:focus {
  border-bottom: 1px solid #ddd;
  border-left-color: transparent;
}
.tabs-left > li > a {
  border-radius: 4px 0 0 4px;
  margin-right: 0;
  display: block;
}
.tabs-right > li > a {
  border-radius: 0 4px 4px 0;
  margin-right: 0;
}
.vertical-text {
  margin-top: 50px;
  border: none;
  position: relative;
}
.vertical-text > li {
  height: 20px;
  width: 120px;
  margin-bottom: 100px;
}
.vertical-text > li > a {
  border-bottom: 1px solid #ddd;
  border-right-color: transparent;
  text-align: center;
  border-radius: 4px 4px 0px 0px;
}
.vertical-text > li.active > a,
.vertical-text > li.active > a:hover,
.vertical-text > li.active > a:focus {
  border-bottom-color: transparent;
  border-right-color: #ddd;
  border-left-color: #ddd;
}
.vertical-text.tabs-left {
  left: -50px;
}
.vertical-text.tabs-right {
  right: -50px;
}
.vertical-text.tabs-right > li {
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.vertical-text.tabs-left > li {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
}
/* distance between stacked modals*/
/* The first modal translateZ value*/
.container {
  margin: 5em auto;
}
.modal.in {
  -webkit-perspective: 2000px;
  -moz-perspective: 2000px;
  -ms-perspective: 2000px;
  -o-perspective: 2000px;
  perspective: 2000px;
}
.modal.in .modal-dialog.aside {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -o-transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  transform: scale(0.8) rotateY(45deg) translateZ(-340px);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.modal.in .modal-dialog.aside.aside-1 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + 40px));
}
.modal.in .modal-dialog.aside.aside-2 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 2)));
}
.modal.in .modal-dialog.aside.aside-3 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 3)));
}
.modal.in .modal-dialog.aside.aside-4 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 4)));
}
.modal.in .modal-dialog.aside.aside-5 {
  -webkit-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  -ms-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  -o-transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
  transform: scale(0.8) rotateY(45deg) translateZ(calc(-340px + (40px * 5)));
}
/*
* Remix Icon v4.2.0
* https://remixicon.com
* https://github.com/Remix-Design/RemixIcon
*
* Copyright RemixIcon.com
* Released under the Apache License Version 2.0
*
* Date: 2024-02-25
*/
@font-face {
  font-family: \"remixicon\";
  src: url(\"remixicon/fonts/remixicon.woff2?t=1708865856766\") format(\"woff2\");
  font-display: swap;
}
[class^=\"ri-\"],
[class*=\" ri-\"] {
  font-family: 'remixicon' !important;
  font-style: normal;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.ri-lg {
  font-size: 1.3333em;
  line-height: 0.75em;
  vertical-align: -0.0667em;
}
.ri-xl {
  font-size: 1.5em;
  line-height: 0.6666em;
  vertical-align: -0.075em;
}
.ri-xxs {
  font-size: 0.5em;
}
.ri-xs {
  font-size: 0.75em;
}
.ri-sm {
  font-size: 0.875em;
}
.ri-1x {
  font-size: 1em;
}
.ri-2x {
  font-size: 2em;
}
.ri-3x {
  font-size: 3em;
}
.ri-4x {
  font-size: 4em;
}
.ri-5x {
  font-size: 5em;
}
.ri-6x {
  font-size: 6em;
}
.ri-7x {
  font-size: 7em;
}
.ri-8x {
  font-size: 8em;
}
.ri-9x {
  font-size: 9em;
}
.ri-10x {
  font-size: 10em;
}
.ri-fw {
  text-align: center;
  width: 1.25em;
}
.ri-24-hours-fill:before {
  content: \"\\ea01\";
}
.ri-24-hours-line:before {
  content: \"\\ea02\";
}
.ri-4k-fill:before {
  content: \"\\ea03\";
}
.ri-4k-line:before {
  content: \"\\ea04\";
}
.ri-a-b:before {
  content: \"\\ea05\";
}
.ri-account-box-fill:before {
  content: \"\\ea06\";
}
.ri-account-box-line:before {
  content: \"\\ea07\";
}
.ri-account-circle-fill:before {
  content: \"\\ea08\";
}
.ri-account-circle-line:before {
  content: \"\\ea09\";
}
.ri-account-pin-box-fill:before {
  content: \"\\ea0a\";
}
.ri-account-pin-box-line:before {
  content: \"\\ea0b\";
}
.ri-account-pin-circle-fill:before {
  content: \"\\ea0c\";
}
.ri-account-pin-circle-line:before {
  content: \"\\ea0d\";
}
.ri-add-box-fill:before {
  content: \"\\ea0e\";
}
.ri-add-box-line:before {
  content: \"\\ea0f\";
}
.ri-add-circle-fill:before {
  content: \"\\ea10\";
}
.ri-add-circle-line:before {
  content: \"\\ea11\";
}
.ri-add-fill:before {
  content: \"\\ea12\";
}
.ri-add-line:before {
  content: \"\\ea13\";
}
.ri-admin-fill:before {
  content: \"\\ea14\";
}
.ri-admin-line:before {
  content: \"\\ea15\";
}
.ri-advertisement-fill:before {
  content: \"\\ea16\";
}
.ri-advertisement-line:before {
  content: \"\\ea17\";
}
.ri-airplay-fill:before {
  content: \"\\ea18\";
}
.ri-airplay-line:before {
  content: \"\\ea19\";
}
.ri-alarm-fill:before {
  content: \"\\ea1a\";
}
.ri-alarm-line:before {
  content: \"\\ea1b\";
}
.ri-alarm-warning-fill:before {
  content: \"\\ea1c\";
}
.ri-alarm-warning-line:before {
  content: \"\\ea1d\";
}
.ri-album-fill:before {
  content: \"\\ea1e\";
}
.ri-album-line:before {
  content: \"\\ea1f\";
}
.ri-alert-fill:before {
  content: \"\\ea20\";
}
.ri-alert-line:before {
  content: \"\\ea21\";
}
.ri-aliens-fill:before {
  content: \"\\ea22\";
}
.ri-aliens-line:before {
  content: \"\\ea23\";
}
.ri-align-bottom:before {
  content: \"\\ea24\";
}
.ri-align-center:before {
  content: \"\\ea25\";
}
.ri-align-justify:before {
  content: \"\\ea26\";
}
.ri-align-left:before {
  content: \"\\ea27\";
}
.ri-align-right:before {
  content: \"\\ea28\";
}
.ri-align-top:before {
  content: \"\\ea29\";
}
.ri-align-vertically:before {
  content: \"\\ea2a\";
}
.ri-alipay-fill:before {
  content: \"\\ea2b\";
}
.ri-alipay-line:before {
  content: \"\\ea2c\";
}
.ri-amazon-fill:before {
  content: \"\\ea2d\";
}
.ri-amazon-line:before {
  content: \"\\ea2e\";
}
.ri-anchor-fill:before {
  content: \"\\ea2f\";
}
.ri-anchor-line:before {
  content: \"\\ea30\";
}
.ri-ancient-gate-fill:before {
  content: \"\\ea31\";
}
.ri-ancient-gate-line:before {
  content: \"\\ea32\";
}
.ri-ancient-pavilion-fill:before {
  content: \"\\ea33\";
}
.ri-ancient-pavilion-line:before {
  content: \"\\ea34\";
}
.ri-android-fill:before {
  content: \"\\ea35\";
}
.ri-android-line:before {
  content: \"\\ea36\";
}
.ri-angularjs-fill:before {
  content: \"\\ea37\";
}
.ri-angularjs-line:before {
  content: \"\\ea38\";
}
.ri-anticlockwise-2-fill:before {
  content: \"\\ea39\";
}
.ri-anticlockwise-2-line:before {
  content: \"\\ea3a\";
}
.ri-anticlockwise-fill:before {
  content: \"\\ea3b\";
}
.ri-anticlockwise-line:before {
  content: \"\\ea3c\";
}
.ri-app-store-fill:before {
  content: \"\\ea3d\";
}
.ri-app-store-line:before {
  content: \"\\ea3e\";
}
.ri-apple-fill:before {
  content: \"\\ea3f\";
}
.ri-apple-line:before {
  content: \"\\ea40\";
}
.ri-apps-2-fill:before {
  content: \"\\ea41\";
}
.ri-apps-2-line:before {
  content: \"\\ea42\";
}
.ri-apps-fill:before {
  content: \"\\ea43\";
}
.ri-apps-line:before {
  content: \"\\ea44\";
}
.ri-archive-drawer-fill:before {
  content: \"\\ea45\";
}
.ri-archive-drawer-line:before {
  content: \"\\ea46\";
}
.ri-archive-fill:before {
  content: \"\\ea47\";
}
.ri-archive-line:before {
  content: \"\\ea48\";
}
.ri-arrow-down-circle-fill:before {
  content: \"\\ea49\";
}
.ri-arrow-down-circle-line:before {
  content: \"\\ea4a\";
}
.ri-arrow-down-fill:before {
  content: \"\\ea4b\";
}
.ri-arrow-down-line:before {
  content: \"\\ea4c\";
}
.ri-arrow-down-s-fill:before {
  content: \"\\ea4d\";
}
.ri-arrow-down-s-line:before {
  content: \"\\ea4e\";
}
.ri-arrow-drop-down-fill:before {
  content: \"\\ea4f\";
}
.ri-arrow-drop-down-line:before {
  content: \"\\ea50\";
}
.ri-arrow-drop-left-fill:before {
  content: \"\\ea51\";
}
.ri-arrow-drop-left-line:before {
  content: \"\\ea52\";
}
.ri-arrow-drop-right-fill:before {
  content: \"\\ea53\";
}
.ri-arrow-drop-right-line:before {
  content: \"\\ea54\";
}
.ri-arrow-drop-up-fill:before {
  content: \"\\ea55\";
}
.ri-arrow-drop-up-line:before {
  content: \"\\ea56\";
}
.ri-arrow-go-back-fill:before {
  content: \"\\ea57\";
}
.ri-arrow-go-back-line:before {
  content: \"\\ea58\";
}
.ri-arrow-go-forward-fill:before {
  content: \"\\ea59\";
}
.ri-arrow-go-forward-line:before {
  content: \"\\ea5a\";
}
.ri-arrow-left-circle-fill:before {
  content: \"\\ea5b\";
}
.ri-arrow-left-circle-line:before {
  content: \"\\ea5c\";
}
.ri-arrow-left-down-fill:before {
  content: \"\\ea5d\";
}
.ri-arrow-left-down-line:before {
  content: \"\\ea5e\";
}
.ri-arrow-left-fill:before {
  content: \"\\ea5f\";
}
.ri-arrow-left-line:before {
  content: \"\\ea60\";
}
.ri-arrow-left-right-fill:before {
  content: \"\\ea61\";
}
.ri-arrow-left-right-line:before {
  content: \"\\ea62\";
}
.ri-arrow-left-s-fill:before {
  content: \"\\ea63\";
}
.ri-arrow-left-s-line:before {
  content: \"\\ea64\";
}
.ri-arrow-left-up-fill:before {
  content: \"\\ea65\";
}
.ri-arrow-left-up-line:before {
  content: \"\\ea66\";
}
.ri-arrow-right-circle-fill:before {
  content: \"\\ea67\";
}
.ri-arrow-right-circle-line:before {
  content: \"\\ea68\";
}
.ri-arrow-right-down-fill:before {
  content: \"\\ea69\";
}
.ri-arrow-right-down-line:before {
  content: \"\\ea6a\";
}
.ri-arrow-right-fill:before {
  content: \"\\ea6b\";
}
.ri-arrow-right-line:before {
  content: \"\\ea6c\";
}
.ri-arrow-right-s-fill:before {
  content: \"\\ea6d\";
}
.ri-arrow-right-s-line:before {
  content: \"\\ea6e\";
}
.ri-arrow-right-up-fill:before {
  content: \"\\ea6f\";
}
.ri-arrow-right-up-line:before {
  content: \"\\ea70\";
}
.ri-arrow-up-circle-fill:before {
  content: \"\\ea71\";
}
.ri-arrow-up-circle-line:before {
  content: \"\\ea72\";
}
.ri-arrow-up-down-fill:before {
  content: \"\\ea73\";
}
.ri-arrow-up-down-line:before {
  content: \"\\ea74\";
}
.ri-arrow-up-fill:before {
  content: \"\\ea75\";
}
.ri-arrow-up-line:before {
  content: \"\\ea76\";
}
.ri-arrow-up-s-fill:before {
  content: \"\\ea77\";
}
.ri-arrow-up-s-line:before {
  content: \"\\ea78\";
}
.ri-artboard-2-fill:before {
  content: \"\\ea79\";
}
.ri-artboard-2-line:before {
  content: \"\\ea7a\";
}
.ri-artboard-fill:before {
  content: \"\\ea7b\";
}
.ri-artboard-line:before {
  content: \"\\ea7c\";
}
.ri-article-fill:before {
  content: \"\\ea7d\";
}
.ri-article-line:before {
  content: \"\\ea7e\";
}
.ri-aspect-ratio-fill:before {
  content: \"\\ea7f\";
}
.ri-aspect-ratio-line:before {
  content: \"\\ea80\";
}
.ri-asterisk:before {
  content: \"\\ea81\";
}
.ri-at-fill:before {
  content: \"\\ea82\";
}
.ri-at-line:before {
  content: \"\\ea83\";
}
.ri-attachment-2:before {
  content: \"\\ea84\";
}
.ri-attachment-fill:before {
  content: \"\\ea85\";
}
.ri-attachment-line:before {
  content: \"\\ea86\";
}
.ri-auction-fill:before {
  content: \"\\ea87\";
}
.ri-auction-line:before {
  content: \"\\ea88\";
}
.ri-award-fill:before {
  content: \"\\ea89\";
}
.ri-award-line:before {
  content: \"\\ea8a\";
}
.ri-baidu-fill:before {
  content: \"\\ea8b\";
}
.ri-baidu-line:before {
  content: \"\\ea8c\";
}
.ri-ball-pen-fill:before {
  content: \"\\ea8d\";
}
.ri-ball-pen-line:before {
  content: \"\\ea8e\";
}
.ri-bank-card-2-fill:before {
  content: \"\\ea8f\";
}
.ri-bank-card-2-line:before {
  content: \"\\ea90\";
}
.ri-bank-card-fill:before {
  content: \"\\ea91\";
}
.ri-bank-card-line:before {
  content: \"\\ea92\";
}
.ri-bank-fill:before {
  content: \"\\ea93\";
}
.ri-bank-line:before {
  content: \"\\ea94\";
}
.ri-bar-chart-2-fill:before {
  content: \"\\ea95\";
}
.ri-bar-chart-2-line:before {
  content: \"\\ea96\";
}
.ri-bar-chart-box-fill:before {
  content: \"\\ea97\";
}
.ri-bar-chart-box-line:before {
  content: \"\\ea98\";
}
.ri-bar-chart-fill:before {
  content: \"\\ea99\";
}
.ri-bar-chart-grouped-fill:before {
  content: \"\\ea9a\";
}
.ri-bar-chart-grouped-line:before {
  content: \"\\ea9b\";
}
.ri-bar-chart-horizontal-fill:before {
  content: \"\\ea9c\";
}
.ri-bar-chart-horizontal-line:before {
  content: \"\\ea9d\";
}
.ri-bar-chart-line:before {
  content: \"\\ea9e\";
}
.ri-barcode-box-fill:before {
  content: \"\\ea9f\";
}
.ri-barcode-box-line:before {
  content: \"\\eaa0\";
}
.ri-barcode-fill:before {
  content: \"\\eaa1\";
}
.ri-barcode-line:before {
  content: \"\\eaa2\";
}
.ri-barricade-fill:before {
  content: \"\\eaa3\";
}
.ri-barricade-line:before {
  content: \"\\eaa4\";
}
.ri-base-station-fill:before {
  content: \"\\eaa5\";
}
.ri-base-station-line:before {
  content: \"\\eaa6\";
}
.ri-basketball-fill:before {
  content: \"\\eaa7\";
}
.ri-basketball-line:before {
  content: \"\\eaa8\";
}
.ri-battery-2-charge-fill:before {
  content: \"\\eaa9\";
}
.ri-battery-2-charge-line:before {
  content: \"\\eaaa\";
}
.ri-battery-2-fill:before {
  content: \"\\eaab\";
}
.ri-battery-2-line:before {
  content: \"\\eaac\";
}
.ri-battery-charge-fill:before {
  content: \"\\eaad\";
}
.ri-battery-charge-line:before {
  content: \"\\eaae\";
}
.ri-battery-fill:before {
  content: \"\\eaaf\";
}
.ri-battery-line:before {
  content: \"\\eab0\";
}
.ri-battery-low-fill:before {
  content: \"\\eab1\";
}
.ri-battery-low-line:before {
  content: \"\\eab2\";
}
.ri-battery-saver-fill:before {
  content: \"\\eab3\";
}
.ri-battery-saver-line:before {
  content: \"\\eab4\";
}
.ri-battery-share-fill:before {
  content: \"\\eab5\";
}
.ri-battery-share-line:before {
  content: \"\\eab6\";
}
.ri-bear-smile-fill:before {
  content: \"\\eab7\";
}
.ri-bear-smile-line:before {
  content: \"\\eab8\";
}
.ri-behance-fill:before {
  content: \"\\eab9\";
}
.ri-behance-line:before {
  content: \"\\eaba\";
}
.ri-bell-fill:before {
  content: \"\\eabb\";
}
.ri-bell-line:before {
  content: \"\\eabc\";
}
.ri-bike-fill:before {
  content: \"\\eabd\";
}
.ri-bike-line:before {
  content: \"\\eabe\";
}
.ri-bilibili-fill:before {
  content: \"\\eabf\";
}
.ri-bilibili-line:before {
  content: \"\\eac0\";
}
.ri-bill-fill:before {
  content: \"\\eac1\";
}
.ri-bill-line:before {
  content: \"\\eac2\";
}
.ri-billiards-fill:before {
  content: \"\\eac3\";
}
.ri-billiards-line:before {
  content: \"\\eac4\";
}
.ri-bit-coin-fill:before {
  content: \"\\eac5\";
}
.ri-bit-coin-line:before {
  content: \"\\eac6\";
}
.ri-blaze-fill:before {
  content: \"\\eac7\";
}
.ri-blaze-line:before {
  content: \"\\eac8\";
}
.ri-bluetooth-connect-fill:before {
  content: \"\\eac9\";
}
.ri-bluetooth-connect-line:before {
  content: \"\\eaca\";
}
.ri-bluetooth-fill:before {
  content: \"\\eacb\";
}
.ri-bluetooth-line:before {
  content: \"\\eacc\";
}
.ri-blur-off-fill:before {
  content: \"\\eacd\";
}
.ri-blur-off-line:before {
  content: \"\\eace\";
}
.ri-body-scan-fill:before {
  content: \"\\eacf\";
}
.ri-body-scan-line:before {
  content: \"\\ead0\";
}
.ri-bold:before {
  content: \"\\ead1\";
}
.ri-book-2-fill:before {
  content: \"\\ead2\";
}
.ri-book-2-line:before {
  content: \"\\ead3\";
}
.ri-book-3-fill:before {
  content: \"\\ead4\";
}
.ri-book-3-line:before {
  content: \"\\ead5\";
}
.ri-book-fill:before {
  content: \"\\ead6\";
}
.ri-book-line:before {
  content: \"\\ead7\";
}
.ri-book-marked-fill:before {
  content: \"\\ead8\";
}
.ri-book-marked-line:before {
  content: \"\\ead9\";
}
.ri-book-open-fill:before {
  content: \"\\eada\";
}
.ri-book-open-line:before {
  content: \"\\eadb\";
}
.ri-book-read-fill:before {
  content: \"\\eadc\";
}
.ri-book-read-line:before {
  content: \"\\eadd\";
}
.ri-booklet-fill:before {
  content: \"\\eade\";
}
.ri-booklet-line:before {
  content: \"\\eadf\";
}
.ri-bookmark-2-fill:before {
  content: \"\\eae0\";
}
.ri-bookmark-2-line:before {
  content: \"\\eae1\";
}
.ri-bookmark-3-fill:before {
  content: \"\\eae2\";
}
.ri-bookmark-3-line:before {
  content: \"\\eae3\";
}
.ri-bookmark-fill:before {
  content: \"\\eae4\";
}
.ri-bookmark-line:before {
  content: \"\\eae5\";
}
.ri-boxing-fill:before {
  content: \"\\eae6\";
}
.ri-boxing-line:before {
  content: \"\\eae7\";
}
.ri-braces-fill:before {
  content: \"\\eae8\";
}
.ri-braces-line:before {
  content: \"\\eae9\";
}
.ri-brackets-fill:before {
  content: \"\\eaea\";
}
.ri-brackets-line:before {
  content: \"\\eaeb\";
}
.ri-briefcase-2-fill:before {
  content: \"\\eaec\";
}
.ri-briefcase-2-line:before {
  content: \"\\eaed\";
}
.ri-briefcase-3-fill:before {
  content: \"\\eaee\";
}
.ri-briefcase-3-line:before {
  content: \"\\eaef\";
}
.ri-briefcase-4-fill:before {
  content: \"\\eaf0\";
}
.ri-briefcase-4-line:before {
  content: \"\\eaf1\";
}
.ri-briefcase-5-fill:before {
  content: \"\\eaf2\";
}
.ri-briefcase-5-line:before {
  content: \"\\eaf3\";
}
.ri-briefcase-fill:before {
  content: \"\\eaf4\";
}
.ri-briefcase-line:before {
  content: \"\\eaf5\";
}
.ri-bring-forward:before {
  content: \"\\eaf6\";
}
.ri-bring-to-front:before {
  content: \"\\eaf7\";
}
.ri-broadcast-fill:before {
  content: \"\\eaf8\";
}
.ri-broadcast-line:before {
  content: \"\\eaf9\";
}
.ri-brush-2-fill:before {
  content: \"\\eafa\";
}
.ri-brush-2-line:before {
  content: \"\\eafb\";
}
.ri-brush-3-fill:before {
  content: \"\\eafc\";
}
.ri-brush-3-line:before {
  content: \"\\eafd\";
}
.ri-brush-4-fill:before {
  content: \"\\eafe\";
}
.ri-brush-4-line:before {
  content: \"\\eaff\";
}
.ri-brush-fill:before {
  content: \"\\eb00\";
}
.ri-brush-line:before {
  content: \"\\eb01\";
}
.ri-bubble-chart-fill:before {
  content: \"\\eb02\";
}
.ri-bubble-chart-line:before {
  content: \"\\eb03\";
}
.ri-bug-2-fill:before {
  content: \"\\eb04\";
}
.ri-bug-2-line:before {
  content: \"\\eb05\";
}
.ri-bug-fill:before {
  content: \"\\eb06\";
}
.ri-bug-line:before {
  content: \"\\eb07\";
}
.ri-building-2-fill:before {
  content: \"\\eb08\";
}
.ri-building-2-line:before {
  content: \"\\eb09\";
}
.ri-building-3-fill:before {
  content: \"\\eb0a\";
}
.ri-building-3-line:before {
  content: \"\\eb0b\";
}
.ri-building-4-fill:before {
  content: \"\\eb0c\";
}
.ri-building-4-line:before {
  content: \"\\eb0d\";
}
.ri-building-fill:before {
  content: \"\\eb0e\";
}
.ri-building-line:before {
  content: \"\\eb0f\";
}
.ri-bus-2-fill:before {
  content: \"\\eb10\";
}
.ri-bus-2-line:before {
  content: \"\\eb11\";
}
.ri-bus-fill:before {
  content: \"\\eb12\";
}
.ri-bus-line:before {
  content: \"\\eb13\";
}
.ri-bus-wifi-fill:before {
  content: \"\\eb14\";
}
.ri-bus-wifi-line:before {
  content: \"\\eb15\";
}
.ri-cactus-fill:before {
  content: \"\\eb16\";
}
.ri-cactus-line:before {
  content: \"\\eb17\";
}
.ri-cake-2-fill:before {
  content: \"\\eb18\";
}
.ri-cake-2-line:before {
  content: \"\\eb19\";
}
.ri-cake-3-fill:before {
  content: \"\\eb1a\";
}
.ri-cake-3-line:before {
  content: \"\\eb1b\";
}
.ri-cake-fill:before {
  content: \"\\eb1c\";
}
.ri-cake-line:before {
  content: \"\\eb1d\";
}
.ri-calculator-fill:before {
  content: \"\\eb1e\";
}
.ri-calculator-line:before {
  content: \"\\eb1f\";
}
.ri-calendar-2-fill:before {
  content: \"\\eb20\";
}
.ri-calendar-2-line:before {
  content: \"\\eb21\";
}
.ri-calendar-check-fill:before {
  content: \"\\eb22\";
}
.ri-calendar-check-line:before {
  content: \"\\eb23\";
}
.ri-calendar-event-fill:before {
  content: \"\\eb24\";
}
.ri-calendar-event-line:before {
  content: \"\\eb25\";
}
.ri-calendar-fill:before {
  content: \"\\eb26\";
}
.ri-calendar-line:before {
  content: \"\\eb27\";
}
.ri-calendar-todo-fill:before {
  content: \"\\eb28\";
}
.ri-calendar-todo-line:before {
  content: \"\\eb29\";
}
.ri-camera-2-fill:before {
  content: \"\\eb2a\";
}
.ri-camera-2-line:before {
  content: \"\\eb2b\";
}
.ri-camera-3-fill:before {
  content: \"\\eb2c\";
}
.ri-camera-3-line:before {
  content: \"\\eb2d\";
}
.ri-camera-fill:before {
  content: \"\\eb2e\";
}
.ri-camera-lens-fill:before {
  content: \"\\eb2f\";
}
.ri-camera-lens-line:before {
  content: \"\\eb30\";
}
.ri-camera-line:before {
  content: \"\\eb31\";
}
.ri-camera-off-fill:before {
  content: \"\\eb32\";
}
.ri-camera-off-line:before {
  content: \"\\eb33\";
}
.ri-camera-switch-fill:before {
  content: \"\\eb34\";
}
.ri-camera-switch-line:before {
  content: \"\\eb35\";
}
.ri-capsule-fill:before {
  content: \"\\eb36\";
}
.ri-capsule-line:before {
  content: \"\\eb37\";
}
.ri-car-fill:before {
  content: \"\\eb38\";
}
.ri-car-line:before {
  content: \"\\eb39\";
}
.ri-car-washing-fill:before {
  content: \"\\eb3a\";
}
.ri-car-washing-line:before {
  content: \"\\eb3b\";
}
.ri-caravan-fill:before {
  content: \"\\eb3c\";
}
.ri-caravan-line:before {
  content: \"\\eb3d\";
}
.ri-cast-fill:before {
  content: \"\\eb3e\";
}
.ri-cast-line:before {
  content: \"\\eb3f\";
}
.ri-cellphone-fill:before {
  content: \"\\eb40\";
}
.ri-cellphone-line:before {
  content: \"\\eb41\";
}
.ri-celsius-fill:before {
  content: \"\\eb42\";
}
.ri-celsius-line:before {
  content: \"\\eb43\";
}
.ri-centos-fill:before {
  content: \"\\eb44\";
}
.ri-centos-line:before {
  content: \"\\eb45\";
}
.ri-character-recognition-fill:before {
  content: \"\\eb46\";
}
.ri-character-recognition-line:before {
  content: \"\\eb47\";
}
.ri-charging-pile-2-fill:before {
  content: \"\\eb48\";
}
.ri-charging-pile-2-line:before {
  content: \"\\eb49\";
}
.ri-charging-pile-fill:before {
  content: \"\\eb4a\";
}
.ri-charging-pile-line:before {
  content: \"\\eb4b\";
}
.ri-chat-1-fill:before {
  content: \"\\eb4c\";
}
.ri-chat-1-line:before {
  content: \"\\eb4d\";
}
.ri-chat-2-fill:before {
  content: \"\\eb4e\";
}
.ri-chat-2-line:before {
  content: \"\\eb4f\";
}
.ri-chat-3-fill:before {
  content: \"\\eb50\";
}
.ri-chat-3-line:before {
  content: \"\\eb51\";
}
.ri-chat-4-fill:before {
  content: \"\\eb52\";
}
.ri-chat-4-line:before {
  content: \"\\eb53\";
}
.ri-chat-check-fill:before {
  content: \"\\eb54\";
}
.ri-chat-check-line:before {
  content: \"\\eb55\";
}
.ri-chat-delete-fill:before {
  content: \"\\eb56\";
}
.ri-chat-delete-line:before {
  content: \"\\eb57\";
}
.ri-chat-download-fill:before {
  content: \"\\eb58\";
}
.ri-chat-download-line:before {
  content: \"\\eb59\";
}
.ri-chat-follow-up-fill:before {
  content: \"\\eb5a\";
}
.ri-chat-follow-up-line:before {
  content: \"\\eb5b\";
}
.ri-chat-forward-fill:before {
  content: \"\\eb5c\";
}
.ri-chat-forward-line:before {
  content: \"\\eb5d\";
}
.ri-chat-heart-fill:before {
  content: \"\\eb5e\";
}
.ri-chat-heart-line:before {
  content: \"\\eb5f\";
}
.ri-chat-history-fill:before {
  content: \"\\eb60\";
}
.ri-chat-history-line:before {
  content: \"\\eb61\";
}
.ri-chat-new-fill:before {
  content: \"\\eb62\";
}
.ri-chat-new-line:before {
  content: \"\\eb63\";
}
.ri-chat-off-fill:before {
  content: \"\\eb64\";
}
.ri-chat-off-line:before {
  content: \"\\eb65\";
}
.ri-chat-poll-fill:before {
  content: \"\\eb66\";
}
.ri-chat-poll-line:before {
  content: \"\\eb67\";
}
.ri-chat-private-fill:before {
  content: \"\\eb68\";
}
.ri-chat-private-line:before {
  content: \"\\eb69\";
}
.ri-chat-quote-fill:before {
  content: \"\\eb6a\";
}
.ri-chat-quote-line:before {
  content: \"\\eb6b\";
}
.ri-chat-settings-fill:before {
  content: \"\\eb6c\";
}
.ri-chat-settings-line:before {
  content: \"\\eb6d\";
}
.ri-chat-smile-2-fill:before {
  content: \"\\eb6e\";
}
.ri-chat-smile-2-line:before {
  content: \"\\eb6f\";
}
.ri-chat-smile-3-fill:before {
  content: \"\\eb70\";
}
.ri-chat-smile-3-line:before {
  content: \"\\eb71\";
}
.ri-chat-smile-fill:before {
  content: \"\\eb72\";
}
.ri-chat-smile-line:before {
  content: \"\\eb73\";
}
.ri-chat-upload-fill:before {
  content: \"\\eb74\";
}
.ri-chat-upload-line:before {
  content: \"\\eb75\";
}
.ri-chat-voice-fill:before {
  content: \"\\eb76\";
}
.ri-chat-voice-line:before {
  content: \"\\eb77\";
}
.ri-check-double-fill:before {
  content: \"\\eb78\";
}
.ri-check-double-line:before {
  content: \"\\eb79\";
}
.ri-check-fill:before {
  content: \"\\eb7a\";
}
.ri-check-line:before {
  content: \"\\eb7b\";
}
.ri-checkbox-blank-circle-fill:before {
  content: \"\\eb7c\";
}
.ri-checkbox-blank-circle-line:before {
  content: \"\\eb7d\";
}
.ri-checkbox-blank-fill:before {
  content: \"\\eb7e\";
}
.ri-checkbox-blank-line:before {
  content: \"\\eb7f\";
}
.ri-checkbox-circle-fill:before {
  content: \"\\eb80\";
}
.ri-checkbox-circle-line:before {
  content: \"\\eb81\";
}
.ri-checkbox-fill:before {
  content: \"\\eb82\";
}
.ri-checkbox-indeterminate-fill:before {
  content: \"\\eb83\";
}
.ri-checkbox-indeterminate-line:before {
  content: \"\\eb84\";
}
.ri-checkbox-line:before {
  content: \"\\eb85\";
}
.ri-checkbox-multiple-blank-fill:before {
  content: \"\\eb86\";
}
.ri-checkbox-multiple-blank-line:before {
  content: \"\\eb87\";
}
.ri-checkbox-multiple-fill:before {
  content: \"\\eb88\";
}
.ri-checkbox-multiple-line:before {
  content: \"\\eb89\";
}
.ri-china-railway-fill:before {
  content: \"\\eb8a\";
}
.ri-china-railway-line:before {
  content: \"\\eb8b\";
}
.ri-chrome-fill:before {
  content: \"\\eb8c\";
}
.ri-chrome-line:before {
  content: \"\\eb8d\";
}
.ri-clapperboard-fill:before {
  content: \"\\eb8e\";
}
.ri-clapperboard-line:before {
  content: \"\\eb8f\";
}
.ri-clipboard-fill:before {
  content: \"\\eb90\";
}
.ri-clipboard-line:before {
  content: \"\\eb91\";
}
.ri-clockwise-2-fill:before {
  content: \"\\eb92\";
}
.ri-clockwise-2-line:before {
  content: \"\\eb93\";
}
.ri-clockwise-fill:before {
  content: \"\\eb94\";
}
.ri-clockwise-line:before {
  content: \"\\eb95\";
}
.ri-close-circle-fill:before {
  content: \"\\eb96\";
}
.ri-close-circle-line:before {
  content: \"\\eb97\";
}
.ri-close-fill:before {
  content: \"\\eb98\";
}
.ri-close-line:before {
  content: \"\\eb99\";
}
.ri-closed-captioning-fill:before {
  content: \"\\eb9a\";
}
.ri-closed-captioning-line:before {
  content: \"\\eb9b\";
}
.ri-cloud-fill:before {
  content: \"\\eb9c\";
}
.ri-cloud-line:before {
  content: \"\\eb9d\";
}
.ri-cloud-off-fill:before {
  content: \"\\eb9e\";
}
.ri-cloud-off-line:before {
  content: \"\\eb9f\";
}
.ri-cloud-windy-fill:before {
  content: \"\\eba0\";
}
.ri-cloud-windy-line:before {
  content: \"\\eba1\";
}
.ri-cloudy-2-fill:before {
  content: \"\\eba2\";
}
.ri-cloudy-2-line:before {
  content: \"\\eba3\";
}
.ri-cloudy-fill:before {
  content: \"\\eba4\";
}
.ri-cloudy-line:before {
  content: \"\\eba5\";
}
.ri-code-box-fill:before {
  content: \"\\eba6\";
}
.ri-code-box-line:before {
  content: \"\\eba7\";
}
.ri-code-fill:before {
  content: \"\\eba8\";
}
.ri-code-line:before {
  content: \"\\eba9\";
}
.ri-code-s-fill:before {
  content: \"\\ebaa\";
}
.ri-code-s-line:before {
  content: \"\\ebab\";
}
.ri-code-s-slash-fill:before {
  content: \"\\ebac\";
}
.ri-code-s-slash-line:before {
  content: \"\\ebad\";
}
.ri-code-view:before {
  content: \"\\ebae\";
}
.ri-codepen-fill:before {
  content: \"\\ebaf\";
}
.ri-codepen-line:before {
  content: \"\\ebb0\";
}
.ri-coin-fill:before {
  content: \"\\ebb1\";
}
.ri-coin-line:before {
  content: \"\\ebb2\";
}
.ri-coins-fill:before {
  content: \"\\ebb3\";
}
.ri-coins-line:before {
  content: \"\\ebb4\";
}
.ri-collage-fill:before {
  content: \"\\ebb5\";
}
.ri-collage-line:before {
  content: \"\\ebb6\";
}
.ri-command-fill:before {
  content: \"\\ebb7\";
}
.ri-command-line:before {
  content: \"\\ebb8\";
}
.ri-community-fill:before {
  content: \"\\ebb9\";
}
.ri-community-line:before {
  content: \"\\ebba\";
}
.ri-compass-2-fill:before {
  content: \"\\ebbb\";
}
.ri-compass-2-line:before {
  content: \"\\ebbc\";
}
.ri-compass-3-fill:before {
  content: \"\\ebbd\";
}
.ri-compass-3-line:before {
  content: \"\\ebbe\";
}
.ri-compass-4-fill:before {
  content: \"\\ebbf\";
}
.ri-compass-4-line:before {
  content: \"\\ebc0\";
}
.ri-compass-discover-fill:before {
  content: \"\\ebc1\";
}
.ri-compass-discover-line:before {
  content: \"\\ebc2\";
}
.ri-compass-fill:before {
  content: \"\\ebc3\";
}
.ri-compass-line:before {
  content: \"\\ebc4\";
}
.ri-compasses-2-fill:before {
  content: \"\\ebc5\";
}
.ri-compasses-2-line:before {
  content: \"\\ebc6\";
}
.ri-compasses-fill:before {
  content: \"\\ebc7\";
}
.ri-compasses-line:before {
  content: \"\\ebc8\";
}
.ri-computer-fill:before {
  content: \"\\ebc9\";
}
.ri-computer-line:before {
  content: \"\\ebca\";
}
.ri-contacts-book-2-fill:before {
  content: \"\\ebcb\";
}
.ri-contacts-book-2-line:before {
  content: \"\\ebcc\";
}
.ri-contacts-book-fill:before {
  content: \"\\ebcd\";
}
.ri-contacts-book-line:before {
  content: \"\\ebce\";
}
.ri-contacts-book-upload-fill:before {
  content: \"\\ebcf\";
}
.ri-contacts-book-upload-line:before {
  content: \"\\ebd0\";
}
.ri-contacts-fill:before {
  content: \"\\ebd1\";
}
.ri-contacts-line:before {
  content: \"\\ebd2\";
}
.ri-contrast-2-fill:before {
  content: \"\\ebd3\";
}
.ri-contrast-2-line:before {
  content: \"\\ebd4\";
}
.ri-contrast-drop-2-fill:before {
  content: \"\\ebd5\";
}
.ri-contrast-drop-2-line:before {
  content: \"\\ebd6\";
}
.ri-contrast-drop-fill:before {
  content: \"\\ebd7\";
}
.ri-contrast-drop-line:before {
  content: \"\\ebd8\";
}
.ri-contrast-fill:before {
  content: \"\\ebd9\";
}
.ri-contrast-line:before {
  content: \"\\ebda\";
}
.ri-copper-coin-fill:before {
  content: \"\\ebdb\";
}
.ri-copper-coin-line:before {
  content: \"\\ebdc\";
}
.ri-copper-diamond-fill:before {
  content: \"\\ebdd\";
}
.ri-copper-diamond-line:before {
  content: \"\\ebde\";
}
.ri-copyleft-fill:before {
  content: \"\\ebdf\";
}
.ri-copyleft-line:before {
  content: \"\\ebe0\";
}
.ri-copyright-fill:before {
  content: \"\\ebe1\";
}
.ri-copyright-line:before {
  content: \"\\ebe2\";
}
.ri-coreos-fill:before {
  content: \"\\ebe3\";
}
.ri-coreos-line:before {
  content: \"\\ebe4\";
}
.ri-coupon-2-fill:before {
  content: \"\\ebe5\";
}
.ri-coupon-2-line:before {
  content: \"\\ebe6\";
}
.ri-coupon-3-fill:before {
  content: \"\\ebe7\";
}
.ri-coupon-3-line:before {
  content: \"\\ebe8\";
}
.ri-coupon-4-fill:before {
  content: \"\\ebe9\";
}
.ri-coupon-4-line:before {
  content: \"\\ebea\";
}
.ri-coupon-5-fill:before {
  content: \"\\ebeb\";
}
.ri-coupon-5-line:before {
  content: \"\\ebec\";
}
.ri-coupon-fill:before {
  content: \"\\ebed\";
}
.ri-coupon-line:before {
  content: \"\\ebee\";
}
.ri-cpu-fill:before {
  content: \"\\ebef\";
}
.ri-cpu-line:before {
  content: \"\\ebf0\";
}
.ri-creative-commons-by-fill:before {
  content: \"\\ebf1\";
}
.ri-creative-commons-by-line:before {
  content: \"\\ebf2\";
}
.ri-creative-commons-fill:before {
  content: \"\\ebf3\";
}
.ri-creative-commons-line:before {
  content: \"\\ebf4\";
}
.ri-creative-commons-nc-fill:before {
  content: \"\\ebf5\";
}
.ri-creative-commons-nc-line:before {
  content: \"\\ebf6\";
}
.ri-creative-commons-nd-fill:before {
  content: \"\\ebf7\";
}
.ri-creative-commons-nd-line:before {
  content: \"\\ebf8\";
}
.ri-creative-commons-sa-fill:before {
  content: \"\\ebf9\";
}
.ri-creative-commons-sa-line:before {
  content: \"\\ebfa\";
}
.ri-creative-commons-zero-fill:before {
  content: \"\\ebfb\";
}
.ri-creative-commons-zero-line:before {
  content: \"\\ebfc\";
}
.ri-criminal-fill:before {
  content: \"\\ebfd\";
}
.ri-criminal-line:before {
  content: \"\\ebfe\";
}
.ri-crop-2-fill:before {
  content: \"\\ebff\";
}
.ri-crop-2-line:before {
  content: \"\\ec00\";
}
.ri-crop-fill:before {
  content: \"\\ec01\";
}
.ri-crop-line:before {
  content: \"\\ec02\";
}
.ri-css3-fill:before {
  content: \"\\ec03\";
}
.ri-css3-line:before {
  content: \"\\ec04\";
}
.ri-cup-fill:before {
  content: \"\\ec05\";
}
.ri-cup-line:before {
  content: \"\\ec06\";
}
.ri-currency-fill:before {
  content: \"\\ec07\";
}
.ri-currency-line:before {
  content: \"\\ec08\";
}
.ri-cursor-fill:before {
  content: \"\\ec09\";
}
.ri-cursor-line:before {
  content: \"\\ec0a\";
}
.ri-customer-service-2-fill:before {
  content: \"\\ec0b\";
}
.ri-customer-service-2-line:before {
  content: \"\\ec0c\";
}
.ri-customer-service-fill:before {
  content: \"\\ec0d\";
}
.ri-customer-service-line:before {
  content: \"\\ec0e\";
}
.ri-dashboard-2-fill:before {
  content: \"\\ec0f\";
}
.ri-dashboard-2-line:before {
  content: \"\\ec10\";
}
.ri-dashboard-3-fill:before {
  content: \"\\ec11\";
}
.ri-dashboard-3-line:before {
  content: \"\\ec12\";
}
.ri-dashboard-fill:before {
  content: \"\\ec13\";
}
.ri-dashboard-line:before {
  content: \"\\ec14\";
}
.ri-database-2-fill:before {
  content: \"\\ec15\";
}
.ri-database-2-line:before {
  content: \"\\ec16\";
}
.ri-database-fill:before {
  content: \"\\ec17\";
}
.ri-database-line:before {
  content: \"\\ec18\";
}
.ri-delete-back-2-fill:before {
  content: \"\\ec19\";
}
.ri-delete-back-2-line:before {
  content: \"\\ec1a\";
}
.ri-delete-back-fill:before {
  content: \"\\ec1b\";
}
.ri-delete-back-line:before {
  content: \"\\ec1c\";
}
.ri-delete-bin-2-fill:before {
  content: \"\\ec1d\";
}
.ri-delete-bin-2-line:before {
  content: \"\\ec1e\";
}
.ri-delete-bin-3-fill:before {
  content: \"\\ec1f\";
}
.ri-delete-bin-3-line:before {
  content: \"\\ec20\";
}
.ri-delete-bin-4-fill:before {
  content: \"\\ec21\";
}
.ri-delete-bin-4-line:before {
  content: \"\\ec22\";
}
.ri-delete-bin-5-fill:before {
  content: \"\\ec23\";
}
.ri-delete-bin-5-line:before {
  content: \"\\ec24\";
}
.ri-delete-bin-6-fill:before {
  content: \"\\ec25\";
}
.ri-delete-bin-6-line:before {
  content: \"\\ec26\";
}
.ri-delete-bin-7-fill:before {
  content: \"\\ec27\";
}
.ri-delete-bin-7-line:before {
  content: \"\\ec28\";
}
.ri-delete-bin-fill:before {
  content: \"\\ec29\";
}
.ri-delete-bin-line:before {
  content: \"\\ec2a\";
}
.ri-delete-column:before {
  content: \"\\ec2b\";
}
.ri-delete-row:before {
  content: \"\\ec2c\";
}
.ri-device-fill:before {
  content: \"\\ec2d\";
}
.ri-device-line:before {
  content: \"\\ec2e\";
}
.ri-device-recover-fill:before {
  content: \"\\ec2f\";
}
.ri-device-recover-line:before {
  content: \"\\ec30\";
}
.ri-dingding-fill:before {
  content: \"\\ec31\";
}
.ri-dingding-line:before {
  content: \"\\ec32\";
}
.ri-direction-fill:before {
  content: \"\\ec33\";
}
.ri-direction-line:before {
  content: \"\\ec34\";
}
.ri-disc-fill:before {
  content: \"\\ec35\";
}
.ri-disc-line:before {
  content: \"\\ec36\";
}
.ri-discord-fill:before {
  content: \"\\ec37\";
}
.ri-discord-line:before {
  content: \"\\ec38\";
}
.ri-discuss-fill:before {
  content: \"\\ec39\";
}
.ri-discuss-line:before {
  content: \"\\ec3a\";
}
.ri-dislike-fill:before {
  content: \"\\ec3b\";
}
.ri-dislike-line:before {
  content: \"\\ec3c\";
}
.ri-disqus-fill:before {
  content: \"\\ec3d\";
}
.ri-disqus-line:before {
  content: \"\\ec3e\";
}
.ri-divide-fill:before {
  content: \"\\ec3f\";
}
.ri-divide-line:before {
  content: \"\\ec40\";
}
.ri-donut-chart-fill:before {
  content: \"\\ec41\";
}
.ri-donut-chart-line:before {
  content: \"\\ec42\";
}
.ri-door-closed-fill:before {
  content: \"\\ec43\";
}
.ri-door-closed-line:before {
  content: \"\\ec44\";
}
.ri-door-fill:before {
  content: \"\\ec45\";
}
.ri-door-line:before {
  content: \"\\ec46\";
}
.ri-door-lock-box-fill:before {
  content: \"\\ec47\";
}
.ri-door-lock-box-line:before {
  content: \"\\ec48\";
}
.ri-door-lock-fill:before {
  content: \"\\ec49\";
}
.ri-door-lock-line:before {
  content: \"\\ec4a\";
}
.ri-door-open-fill:before {
  content: \"\\ec4b\";
}
.ri-door-open-line:before {
  content: \"\\ec4c\";
}
.ri-dossier-fill:before {
  content: \"\\ec4d\";
}
.ri-dossier-line:before {
  content: \"\\ec4e\";
}
.ri-douban-fill:before {
  content: \"\\ec4f\";
}
.ri-douban-line:before {
  content: \"\\ec50\";
}
.ri-double-quotes-l:before {
  content: \"\\ec51\";
}
.ri-double-quotes-r:before {
  content: \"\\ec52\";
}
.ri-download-2-fill:before {
  content: \"\\ec53\";
}
.ri-download-2-line:before {
  content: \"\\ec54\";
}
.ri-download-cloud-2-fill:before {
  content: \"\\ec55\";
}
.ri-download-cloud-2-line:before {
  content: \"\\ec56\";
}
.ri-download-cloud-fill:before {
  content: \"\\ec57\";
}
.ri-download-cloud-line:before {
  content: \"\\ec58\";
}
.ri-download-fill:before {
  content: \"\\ec59\";
}
.ri-download-line:before {
  content: \"\\ec5a\";
}
.ri-draft-fill:before {
  content: \"\\ec5b\";
}
.ri-draft-line:before {
  content: \"\\ec5c\";
}
.ri-drag-drop-fill:before {
  content: \"\\ec5d\";
}
.ri-drag-drop-line:before {
  content: \"\\ec5e\";
}
.ri-drag-move-2-fill:before {
  content: \"\\ec5f\";
}
.ri-drag-move-2-line:before {
  content: \"\\ec60\";
}
.ri-drag-move-fill:before {
  content: \"\\ec61\";
}
.ri-drag-move-line:before {
  content: \"\\ec62\";
}
.ri-dribbble-fill:before {
  content: \"\\ec63\";
}
.ri-dribbble-line:before {
  content: \"\\ec64\";
}
.ri-drive-fill:before {
  content: \"\\ec65\";
}
.ri-drive-line:before {
  content: \"\\ec66\";
}
.ri-drizzle-fill:before {
  content: \"\\ec67\";
}
.ri-drizzle-line:before {
  content: \"\\ec68\";
}
.ri-drop-fill:before {
  content: \"\\ec69\";
}
.ri-drop-line:before {
  content: \"\\ec6a\";
}
.ri-dropbox-fill:before {
  content: \"\\ec6b\";
}
.ri-dropbox-line:before {
  content: \"\\ec6c\";
}
.ri-dual-sim-1-fill:before {
  content: \"\\ec6d\";
}
.ri-dual-sim-1-line:before {
  content: \"\\ec6e\";
}
.ri-dual-sim-2-fill:before {
  content: \"\\ec6f\";
}
.ri-dual-sim-2-line:before {
  content: \"\\ec70\";
}
.ri-dv-fill:before {
  content: \"\\ec71\";
}
.ri-dv-line:before {
  content: \"\\ec72\";
}
.ri-dvd-fill:before {
  content: \"\\ec73\";
}
.ri-dvd-line:before {
  content: \"\\ec74\";
}
.ri-e-bike-2-fill:before {
  content: \"\\ec75\";
}
.ri-e-bike-2-line:before {
  content: \"\\ec76\";
}
.ri-e-bike-fill:before {
  content: \"\\ec77\";
}
.ri-e-bike-line:before {
  content: \"\\ec78\";
}
.ri-earth-fill:before {
  content: \"\\ec79\";
}
.ri-earth-line:before {
  content: \"\\ec7a\";
}
.ri-earthquake-fill:before {
  content: \"\\ec7b\";
}
.ri-earthquake-line:before {
  content: \"\\ec7c\";
}
.ri-edge-fill:before {
  content: \"\\ec7d\";
}
.ri-edge-line:before {
  content: \"\\ec7e\";
}
.ri-edit-2-fill:before {
  content: \"\\ec7f\";
}
.ri-edit-2-line:before {
  content: \"\\ec80\";
}
.ri-edit-box-fill:before {
  content: \"\\ec81\";
}
.ri-edit-box-line:before {
  content: \"\\ec82\";
}
.ri-edit-circle-fill:before {
  content: \"\\ec83\";
}
.ri-edit-circle-line:before {
  content: \"\\ec84\";
}
.ri-edit-fill:before {
  content: \"\\ec85\";
}
.ri-edit-line:before {
  content: \"\\ec86\";
}
.ri-eject-fill:before {
  content: \"\\ec87\";
}
.ri-eject-line:before {
  content: \"\\ec88\";
}
.ri-emotion-2-fill:before {
  content: \"\\ec89\";
}
.ri-emotion-2-line:before {
  content: \"\\ec8a\";
}
.ri-emotion-fill:before {
  content: \"\\ec8b\";
}
.ri-emotion-happy-fill:before {
  content: \"\\ec8c\";
}
.ri-emotion-happy-line:before {
  content: \"\\ec8d\";
}
.ri-emotion-laugh-fill:before {
  content: \"\\ec8e\";
}
.ri-emotion-laugh-line:before {
  content: \"\\ec8f\";
}
.ri-emotion-line:before {
  content: \"\\ec90\";
}
.ri-emotion-normal-fill:before {
  content: \"\\ec91\";
}
.ri-emotion-normal-line:before {
  content: \"\\ec92\";
}
.ri-emotion-sad-fill:before {
  content: \"\\ec93\";
}
.ri-emotion-sad-line:before {
  content: \"\\ec94\";
}
.ri-emotion-unhappy-fill:before {
  content: \"\\ec95\";
}
.ri-emotion-unhappy-line:before {
  content: \"\\ec96\";
}
.ri-empathize-fill:before {
  content: \"\\ec97\";
}
.ri-empathize-line:before {
  content: \"\\ec98\";
}
.ri-emphasis-cn:before {
  content: \"\\ec99\";
}
.ri-emphasis:before {
  content: \"\\ec9a\";
}
.ri-english-input:before {
  content: \"\\ec9b\";
}
.ri-equalizer-fill:before {
  content: \"\\ec9c\";
}
.ri-equalizer-line:before {
  content: \"\\ec9d\";
}
.ri-eraser-fill:before {
  content: \"\\ec9e\";
}
.ri-eraser-line:before {
  content: \"\\ec9f\";
}
.ri-error-warning-fill:before {
  content: \"\\eca0\";
}
.ri-error-warning-line:before {
  content: \"\\eca1\";
}
.ri-evernote-fill:before {
  content: \"\\eca2\";
}
.ri-evernote-line:before {
  content: \"\\eca3\";
}
.ri-exchange-box-fill:before {
  content: \"\\eca4\";
}
.ri-exchange-box-line:before {
  content: \"\\eca5\";
}
.ri-exchange-cny-fill:before {
  content: \"\\eca6\";
}
.ri-exchange-cny-line:before {
  content: \"\\eca7\";
}
.ri-exchange-dollar-fill:before {
  content: \"\\eca8\";
}
.ri-exchange-dollar-line:before {
  content: \"\\eca9\";
}
.ri-exchange-fill:before {
  content: \"\\ecaa\";
}
.ri-exchange-funds-fill:before {
  content: \"\\ecab\";
}
.ri-exchange-funds-line:before {
  content: \"\\ecac\";
}
.ri-exchange-line:before {
  content: \"\\ecad\";
}
.ri-external-link-fill:before {
  content: \"\\ecae\";
}
.ri-external-link-line:before {
  content: \"\\ecaf\";
}
.ri-eye-2-fill:before {
  content: \"\\ecb0\";
}
.ri-eye-2-line:before {
  content: \"\\ecb1\";
}
.ri-eye-close-fill:before {
  content: \"\\ecb2\";
}
.ri-eye-close-line:before {
  content: \"\\ecb3\";
}
.ri-eye-fill:before {
  content: \"\\ecb4\";
}
.ri-eye-line:before {
  content: \"\\ecb5\";
}
.ri-eye-off-fill:before {
  content: \"\\ecb6\";
}
.ri-eye-off-line:before {
  content: \"\\ecb7\";
}
.ri-facebook-box-fill:before {
  content: \"\\ecb8\";
}
.ri-facebook-box-line:before {
  content: \"\\ecb9\";
}
.ri-facebook-circle-fill:before {
  content: \"\\ecba\";
}
.ri-facebook-circle-line:before {
  content: \"\\ecbb\";
}
.ri-facebook-fill:before {
  content: \"\\ecbc\";
}
.ri-facebook-line:before {
  content: \"\\ecbd\";
}
.ri-fahrenheit-fill:before {
  content: \"\\ecbe\";
}
.ri-fahrenheit-line:before {
  content: \"\\ecbf\";
}
.ri-feedback-fill:before {
  content: \"\\ecc0\";
}
.ri-feedback-line:before {
  content: \"\\ecc1\";
}
.ri-file-2-fill:before {
  content: \"\\ecc2\";
}
.ri-file-2-line:before {
  content: \"\\ecc3\";
}
.ri-file-3-fill:before {
  content: \"\\ecc4\";
}
.ri-file-3-line:before {
  content: \"\\ecc5\";
}
.ri-file-4-fill:before {
  content: \"\\ecc6\";
}
.ri-file-4-line:before {
  content: \"\\ecc7\";
}
.ri-file-add-fill:before {
  content: \"\\ecc8\";
}
.ri-file-add-line:before {
  content: \"\\ecc9\";
}
.ri-file-chart-2-fill:before {
  content: \"\\ecca\";
}
.ri-file-chart-2-line:before {
  content: \"\\eccb\";
}
.ri-file-chart-fill:before {
  content: \"\\eccc\";
}
.ri-file-chart-line:before {
  content: \"\\eccd\";
}
.ri-file-cloud-fill:before {
  content: \"\\ecce\";
}
.ri-file-cloud-line:before {
  content: \"\\eccf\";
}
.ri-file-code-fill:before {
  content: \"\\ecd0\";
}
.ri-file-code-line:before {
  content: \"\\ecd1\";
}
.ri-file-copy-2-fill:before {
  content: \"\\ecd2\";
}
.ri-file-copy-2-line:before {
  content: \"\\ecd3\";
}
.ri-file-copy-fill:before {
  content: \"\\ecd4\";
}
.ri-file-copy-line:before {
  content: \"\\ecd5\";
}
.ri-file-damage-fill:before {
  content: \"\\ecd6\";
}
.ri-file-damage-line:before {
  content: \"\\ecd7\";
}
.ri-file-download-fill:before {
  content: \"\\ecd8\";
}
.ri-file-download-line:before {
  content: \"\\ecd9\";
}
.ri-file-edit-fill:before {
  content: \"\\ecda\";
}
.ri-file-edit-line:before {
  content: \"\\ecdb\";
}
.ri-file-excel-2-fill:before {
  content: \"\\ecdc\";
}
.ri-file-excel-2-line:before {
  content: \"\\ecdd\";
}
.ri-file-excel-fill:before {
  content: \"\\ecde\";
}
.ri-file-excel-line:before {
  content: \"\\ecdf\";
}
.ri-file-fill:before {
  content: \"\\ece0\";
}
.ri-file-forbid-fill:before {
  content: \"\\ece1\";
}
.ri-file-forbid-line:before {
  content: \"\\ece2\";
}
.ri-file-gif-fill:before {
  content: \"\\ece3\";
}
.ri-file-gif-line:before {
  content: \"\\ece4\";
}
.ri-file-history-fill:before {
  content: \"\\ece5\";
}
.ri-file-history-line:before {
  content: \"\\ece6\";
}
.ri-file-hwp-fill:before {
  content: \"\\ece7\";
}
.ri-file-hwp-line:before {
  content: \"\\ece8\";
}
.ri-file-info-fill:before {
  content: \"\\ece9\";
}
.ri-file-info-line:before {
  content: \"\\ecea\";
}
.ri-file-line:before {
  content: \"\\eceb\";
}
.ri-file-list-2-fill:before {
  content: \"\\ecec\";
}
.ri-file-list-2-line:before {
  content: \"\\eced\";
}
.ri-file-list-3-fill:before {
  content: \"\\ecee\";
}
.ri-file-list-3-line:before {
  content: \"\\ecef\";
}
.ri-file-list-fill:before {
  content: \"\\ecf0\";
}
.ri-file-list-line:before {
  content: \"\\ecf1\";
}
.ri-file-lock-fill:before {
  content: \"\\ecf2\";
}
.ri-file-lock-line:before {
  content: \"\\ecf3\";
}
.ri-file-marked-fill:before {
  content: \"\\ecf4\";
}
.ri-file-marked-line:before {
  content: \"\\ecf5\";
}
.ri-file-music-fill:before {
  content: \"\\ecf6\";
}
.ri-file-music-line:before {
  content: \"\\ecf7\";
}
.ri-file-paper-2-fill:before {
  content: \"\\ecf8\";
}
.ri-file-paper-2-line:before {
  content: \"\\ecf9\";
}
.ri-file-paper-fill:before {
  content: \"\\ecfa\";
}
.ri-file-paper-line:before {
  content: \"\\ecfb\";
}
.ri-file-pdf-fill:before {
  content: \"\\ecfc\";
}
.ri-file-pdf-line:before {
  content: \"\\ecfd\";
}
.ri-file-ppt-2-fill:before {
  content: \"\\ecfe\";
}
.ri-file-ppt-2-line:before {
  content: \"\\ecff\";
}
.ri-file-ppt-fill:before {
  content: \"\\ed00\";
}
.ri-file-ppt-line:before {
  content: \"\\ed01\";
}
.ri-file-reduce-fill:before {
  content: \"\\ed02\";
}
.ri-file-reduce-line:before {
  content: \"\\ed03\";
}
.ri-file-search-fill:before {
  content: \"\\ed04\";
}
.ri-file-search-line:before {
  content: \"\\ed05\";
}
.ri-file-settings-fill:before {
  content: \"\\ed06\";
}
.ri-file-settings-line:before {
  content: \"\\ed07\";
}
.ri-file-shield-2-fill:before {
  content: \"\\ed08\";
}
.ri-file-shield-2-line:before {
  content: \"\\ed09\";
}
.ri-file-shield-fill:before {
  content: \"\\ed0a\";
}
.ri-file-shield-line:before {
  content: \"\\ed0b\";
}
.ri-file-shred-fill:before {
  content: \"\\ed0c\";
}
.ri-file-shred-line:before {
  content: \"\\ed0d\";
}
.ri-file-text-fill:before {
  content: \"\\ed0e\";
}
.ri-file-text-line:before {
  content: \"\\ed0f\";
}
.ri-file-transfer-fill:before {
  content: \"\\ed10\";
}
.ri-file-transfer-line:before {
  content: \"\\ed11\";
}
.ri-file-unknow-fill:before {
  content: \"\\ed12\";
}
.ri-file-unknow-line:before {
  content: \"\\ed13\";
}
.ri-file-upload-fill:before {
  content: \"\\ed14\";
}
.ri-file-upload-line:before {
  content: \"\\ed15\";
}
.ri-file-user-fill:before {
  content: \"\\ed16\";
}
.ri-file-user-line:before {
  content: \"\\ed17\";
}
.ri-file-warning-fill:before {
  content: \"\\ed18\";
}
.ri-file-warning-line:before {
  content: \"\\ed19\";
}
.ri-file-word-2-fill:before {
  content: \"\\ed1a\";
}
.ri-file-word-2-line:before {
  content: \"\\ed1b\";
}
.ri-file-word-fill:before {
  content: \"\\ed1c\";
}
.ri-file-word-line:before {
  content: \"\\ed1d\";
}
.ri-file-zip-fill:before {
  content: \"\\ed1e\";
}
.ri-file-zip-line:before {
  content: \"\\ed1f\";
}
.ri-film-fill:before {
  content: \"\\ed20\";
}
.ri-film-line:before {
  content: \"\\ed21\";
}
.ri-filter-2-fill:before {
  content: \"\\ed22\";
}
.ri-filter-2-line:before {
  content: \"\\ed23\";
}
.ri-filter-3-fill:before {
  content: \"\\ed24\";
}
.ri-filter-3-line:before {
  content: \"\\ed25\";
}
.ri-filter-fill:before {
  content: \"\\ed26\";
}
.ri-filter-line:before {
  content: \"\\ed27\";
}
.ri-filter-off-fill:before {
  content: \"\\ed28\";
}
.ri-filter-off-line:before {
  content: \"\\ed29\";
}
.ri-find-replace-fill:before {
  content: \"\\ed2a\";
}
.ri-find-replace-line:before {
  content: \"\\ed2b\";
}
.ri-finder-fill:before {
  content: \"\\ed2c\";
}
.ri-finder-line:before {
  content: \"\\ed2d\";
}
.ri-fingerprint-2-fill:before {
  content: \"\\ed2e\";
}
.ri-fingerprint-2-line:before {
  content: \"\\ed2f\";
}
.ri-fingerprint-fill:before {
  content: \"\\ed30\";
}
.ri-fingerprint-line:before {
  content: \"\\ed31\";
}
.ri-fire-fill:before {
  content: \"\\ed32\";
}
.ri-fire-line:before {
  content: \"\\ed33\";
}
.ri-firefox-fill:before {
  content: \"\\ed34\";
}
.ri-firefox-line:before {
  content: \"\\ed35\";
}
.ri-first-aid-kit-fill:before {
  content: \"\\ed36\";
}
.ri-first-aid-kit-line:before {
  content: \"\\ed37\";
}
.ri-flag-2-fill:before {
  content: \"\\ed38\";
}
.ri-flag-2-line:before {
  content: \"\\ed39\";
}
.ri-flag-fill:before {
  content: \"\\ed3a\";
}
.ri-flag-line:before {
  content: \"\\ed3b\";
}
.ri-flashlight-fill:before {
  content: \"\\ed3c\";
}
.ri-flashlight-line:before {
  content: \"\\ed3d\";
}
.ri-flask-fill:before {
  content: \"\\ed3e\";
}
.ri-flask-line:before {
  content: \"\\ed3f\";
}
.ri-flight-land-fill:before {
  content: \"\\ed40\";
}
.ri-flight-land-line:before {
  content: \"\\ed41\";
}
.ri-flight-takeoff-fill:before {
  content: \"\\ed42\";
}
.ri-flight-takeoff-line:before {
  content: \"\\ed43\";
}
.ri-flood-fill:before {
  content: \"\\ed44\";
}
.ri-flood-line:before {
  content: \"\\ed45\";
}
.ri-flow-chart:before {
  content: \"\\ed46\";
}
.ri-flutter-fill:before {
  content: \"\\ed47\";
}
.ri-flutter-line:before {
  content: \"\\ed48\";
}
.ri-focus-2-fill:before {
  content: \"\\ed49\";
}
.ri-focus-2-line:before {
  content: \"\\ed4a\";
}
.ri-focus-3-fill:before {
  content: \"\\ed4b\";
}
.ri-focus-3-line:before {
  content: \"\\ed4c\";
}
.ri-focus-fill:before {
  content: \"\\ed4d\";
}
.ri-focus-line:before {
  content: \"\\ed4e\";
}
.ri-foggy-fill:before {
  content: \"\\ed4f\";
}
.ri-foggy-line:before {
  content: \"\\ed50\";
}
.ri-folder-2-fill:before {
  content: \"\\ed51\";
}
.ri-folder-2-line:before {
  content: \"\\ed52\";
}
.ri-folder-3-fill:before {
  content: \"\\ed53\";
}
.ri-folder-3-line:before {
  content: \"\\ed54\";
}
.ri-folder-4-fill:before {
  content: \"\\ed55\";
}
.ri-folder-4-line:before {
  content: \"\\ed56\";
}
.ri-folder-5-fill:before {
  content: \"\\ed57\";
}
.ri-folder-5-line:before {
  content: \"\\ed58\";
}
.ri-folder-add-fill:before {
  content: \"\\ed59\";
}
.ri-folder-add-line:before {
  content: \"\\ed5a\";
}
.ri-folder-chart-2-fill:before {
  content: \"\\ed5b\";
}
.ri-folder-chart-2-line:before {
  content: \"\\ed5c\";
}
.ri-folder-chart-fill:before {
  content: \"\\ed5d\";
}
.ri-folder-chart-line:before {
  content: \"\\ed5e\";
}
.ri-folder-download-fill:before {
  content: \"\\ed5f\";
}
.ri-folder-download-line:before {
  content: \"\\ed60\";
}
.ri-folder-fill:before {
  content: \"\\ed61\";
}
.ri-folder-forbid-fill:before {
  content: \"\\ed62\";
}
.ri-folder-forbid-line:before {
  content: \"\\ed63\";
}
.ri-folder-history-fill:before {
  content: \"\\ed64\";
}
.ri-folder-history-line:before {
  content: \"\\ed65\";
}
.ri-folder-info-fill:before {
  content: \"\\ed66\";
}
.ri-folder-info-line:before {
  content: \"\\ed67\";
}
.ri-folder-keyhole-fill:before {
  content: \"\\ed68\";
}
.ri-folder-keyhole-line:before {
  content: \"\\ed69\";
}
.ri-folder-line:before {
  content: \"\\ed6a\";
}
.ri-folder-lock-fill:before {
  content: \"\\ed6b\";
}
.ri-folder-lock-line:before {
  content: \"\\ed6c\";
}
.ri-folder-music-fill:before {
  content: \"\\ed6d\";
}
.ri-folder-music-line:before {
  content: \"\\ed6e\";
}
.ri-folder-open-fill:before {
  content: \"\\ed6f\";
}
.ri-folder-open-line:before {
  content: \"\\ed70\";
}
.ri-folder-received-fill:before {
  content: \"\\ed71\";
}
.ri-folder-received-line:before {
  content: \"\\ed72\";
}
.ri-folder-reduce-fill:before {
  content: \"\\ed73\";
}
.ri-folder-reduce-line:before {
  content: \"\\ed74\";
}
.ri-folder-settings-fill:before {
  content: \"\\ed75\";
}
.ri-folder-settings-line:before {
  content: \"\\ed76\";
}
.ri-folder-shared-fill:before {
  content: \"\\ed77\";
}
.ri-folder-shared-line:before {
  content: \"\\ed78\";
}
.ri-folder-shield-2-fill:before {
  content: \"\\ed79\";
}
.ri-folder-shield-2-line:before {
  content: \"\\ed7a\";
}
.ri-folder-shield-fill:before {
  content: \"\\ed7b\";
}
.ri-folder-shield-line:before {
  content: \"\\ed7c\";
}
.ri-folder-transfer-fill:before {
  content: \"\\ed7d\";
}
.ri-folder-transfer-line:before {
  content: \"\\ed7e\";
}
.ri-folder-unknow-fill:before {
  content: \"\\ed7f\";
}
.ri-folder-unknow-line:before {
  content: \"\\ed80\";
}
.ri-folder-upload-fill:before {
  content: \"\\ed81\";
}
.ri-folder-upload-line:before {
  content: \"\\ed82\";
}
.ri-folder-user-fill:before {
  content: \"\\ed83\";
}
.ri-folder-user-line:before {
  content: \"\\ed84\";
}
.ri-folder-warning-fill:before {
  content: \"\\ed85\";
}
.ri-folder-warning-line:before {
  content: \"\\ed86\";
}
.ri-folder-zip-fill:before {
  content: \"\\ed87\";
}
.ri-folder-zip-line:before {
  content: \"\\ed88\";
}
.ri-folders-fill:before {
  content: \"\\ed89\";
}
.ri-folders-line:before {
  content: \"\\ed8a\";
}
.ri-font-color:before {
  content: \"\\ed8b\";
}
.ri-font-size-2:before {
  content: \"\\ed8c\";
}
.ri-font-size:before {
  content: \"\\ed8d\";
}
.ri-football-fill:before {
  content: \"\\ed8e\";
}
.ri-football-line:before {
  content: \"\\ed8f\";
}
.ri-footprint-fill:before {
  content: \"\\ed90\";
}
.ri-footprint-line:before {
  content: \"\\ed91\";
}
.ri-forbid-2-fill:before {
  content: \"\\ed92\";
}
.ri-forbid-2-line:before {
  content: \"\\ed93\";
}
.ri-forbid-fill:before {
  content: \"\\ed94\";
}
.ri-forbid-line:before {
  content: \"\\ed95\";
}
.ri-format-clear:before {
  content: \"\\ed96\";
}
.ri-fridge-fill:before {
  content: \"\\ed97\";
}
.ri-fridge-line:before {
  content: \"\\ed98\";
}
.ri-fullscreen-exit-fill:before {
  content: \"\\ed99\";
}
.ri-fullscreen-exit-line:before {
  content: \"\\ed9a\";
}
.ri-fullscreen-fill:before {
  content: \"\\ed9b\";
}
.ri-fullscreen-line:before {
  content: \"\\ed9c\";
}
.ri-function-fill:before {
  content: \"\\ed9d\";
}
.ri-function-line:before {
  content: \"\\ed9e\";
}
.ri-functions:before {
  content: \"\\ed9f\";
}
.ri-funds-box-fill:before {
  content: \"\\eda0\";
}
.ri-funds-box-line:before {
  content: \"\\eda1\";
}
.ri-funds-fill:before {
  content: \"\\eda2\";
}
.ri-funds-line:before {
  content: \"\\eda3\";
}
.ri-gallery-fill:before {
  content: \"\\eda4\";
}
.ri-gallery-line:before {
  content: \"\\eda5\";
}
.ri-gallery-upload-fill:before {
  content: \"\\eda6\";
}
.ri-gallery-upload-line:before {
  content: \"\\eda7\";
}
.ri-game-fill:before {
  content: \"\\eda8\";
}
.ri-game-line:before {
  content: \"\\eda9\";
}
.ri-gamepad-fill:before {
  content: \"\\edaa\";
}
.ri-gamepad-line:before {
  content: \"\\edab\";
}
.ri-gas-station-fill:before {
  content: \"\\edac\";
}
.ri-gas-station-line:before {
  content: \"\\edad\";
}
.ri-gatsby-fill:before {
  content: \"\\edae\";
}
.ri-gatsby-line:before {
  content: \"\\edaf\";
}
.ri-genderless-fill:before {
  content: \"\\edb0\";
}
.ri-genderless-line:before {
  content: \"\\edb1\";
}
.ri-ghost-2-fill:before {
  content: \"\\edb2\";
}
.ri-ghost-2-line:before {
  content: \"\\edb3\";
}
.ri-ghost-fill:before {
  content: \"\\edb4\";
}
.ri-ghost-line:before {
  content: \"\\edb5\";
}
.ri-ghost-smile-fill:before {
  content: \"\\edb6\";
}
.ri-ghost-smile-line:before {
  content: \"\\edb7\";
}
.ri-gift-2-fill:before {
  content: \"\\edb8\";
}
.ri-gift-2-line:before {
  content: \"\\edb9\";
}
.ri-gift-fill:before {
  content: \"\\edba\";
}
.ri-gift-line:before {
  content: \"\\edbb\";
}
.ri-git-branch-fill:before {
  content: \"\\edbc\";
}
.ri-git-branch-line:before {
  content: \"\\edbd\";
}
.ri-git-commit-fill:before {
  content: \"\\edbe\";
}
.ri-git-commit-line:before {
  content: \"\\edbf\";
}
.ri-git-merge-fill:before {
  content: \"\\edc0\";
}
.ri-git-merge-line:before {
  content: \"\\edc1\";
}
.ri-git-pull-request-fill:before {
  content: \"\\edc2\";
}
.ri-git-pull-request-line:before {
  content: \"\\edc3\";
}
.ri-git-repository-commits-fill:before {
  content: \"\\edc4\";
}
.ri-git-repository-commits-line:before {
  content: \"\\edc5\";
}
.ri-git-repository-fill:before {
  content: \"\\edc6\";
}
.ri-git-repository-line:before {
  content: \"\\edc7\";
}
.ri-git-repository-private-fill:before {
  content: \"\\edc8\";
}
.ri-git-repository-private-line:before {
  content: \"\\edc9\";
}
.ri-github-fill:before {
  content: \"\\edca\";
}
.ri-github-line:before {
  content: \"\\edcb\";
}
.ri-gitlab-fill:before {
  content: \"\\edcc\";
}
.ri-gitlab-line:before {
  content: \"\\edcd\";
}
.ri-global-fill:before {
  content: \"\\edce\";
}
.ri-global-line:before {
  content: \"\\edcf\";
}
.ri-globe-fill:before {
  content: \"\\edd0\";
}
.ri-globe-line:before {
  content: \"\\edd1\";
}
.ri-goblet-fill:before {
  content: \"\\edd2\";
}
.ri-goblet-line:before {
  content: \"\\edd3\";
}
.ri-google-fill:before {
  content: \"\\edd4\";
}
.ri-google-line:before {
  content: \"\\edd5\";
}
.ri-google-play-fill:before {
  content: \"\\edd6\";
}
.ri-google-play-line:before {
  content: \"\\edd7\";
}
.ri-government-fill:before {
  content: \"\\edd8\";
}
.ri-government-line:before {
  content: \"\\edd9\";
}
.ri-gps-fill:before {
  content: \"\\edda\";
}
.ri-gps-line:before {
  content: \"\\eddb\";
}
.ri-gradienter-fill:before {
  content: \"\\eddc\";
}
.ri-gradienter-line:before {
  content: \"\\eddd\";
}
.ri-grid-fill:before {
  content: \"\\edde\";
}
.ri-grid-line:before {
  content: \"\\eddf\";
}
.ri-group-2-fill:before {
  content: \"\\ede0\";
}
.ri-group-2-line:before {
  content: \"\\ede1\";
}
.ri-group-fill:before {
  content: \"\\ede2\";
}
.ri-group-line:before {
  content: \"\\ede3\";
}
.ri-guide-fill:before {
  content: \"\\ede4\";
}
.ri-guide-line:before {
  content: \"\\ede5\";
}
.ri-h-1:before {
  content: \"\\ede6\";
}
.ri-h-2:before {
  content: \"\\ede7\";
}
.ri-h-3:before {
  content: \"\\ede8\";
}
.ri-h-4:before {
  content: \"\\ede9\";
}
.ri-h-5:before {
  content: \"\\edea\";
}
.ri-h-6:before {
  content: \"\\edeb\";
}
.ri-hail-fill:before {
  content: \"\\edec\";
}
.ri-hail-line:before {
  content: \"\\eded\";
}
.ri-hammer-fill:before {
  content: \"\\edee\";
}
.ri-hammer-line:before {
  content: \"\\edef\";
}
.ri-hand-coin-fill:before {
  content: \"\\edf0\";
}
.ri-hand-coin-line:before {
  content: \"\\edf1\";
}
.ri-hand-heart-fill:before {
  content: \"\\edf2\";
}
.ri-hand-heart-line:before {
  content: \"\\edf3\";
}
.ri-hand-sanitizer-fill:before {
  content: \"\\edf4\";
}
.ri-hand-sanitizer-line:before {
  content: \"\\edf5\";
}
.ri-handbag-fill:before {
  content: \"\\edf6\";
}
.ri-handbag-line:before {
  content: \"\\edf7\";
}
.ri-hard-drive-2-fill:before {
  content: \"\\edf8\";
}
.ri-hard-drive-2-line:before {
  content: \"\\edf9\";
}
.ri-hard-drive-fill:before {
  content: \"\\edfa\";
}
.ri-hard-drive-line:before {
  content: \"\\edfb\";
}
.ri-hashtag:before {
  content: \"\\edfc\";
}
.ri-haze-2-fill:before {
  content: \"\\edfd\";
}
.ri-haze-2-line:before {
  content: \"\\edfe\";
}
.ri-haze-fill:before {
  content: \"\\edff\";
}
.ri-haze-line:before {
  content: \"\\ee00\";
}
.ri-hd-fill:before {
  content: \"\\ee01\";
}
.ri-hd-line:before {
  content: \"\\ee02\";
}
.ri-heading:before {
  content: \"\\ee03\";
}
.ri-headphone-fill:before {
  content: \"\\ee04\";
}
.ri-headphone-line:before {
  content: \"\\ee05\";
}
.ri-health-book-fill:before {
  content: \"\\ee06\";
}
.ri-health-book-line:before {
  content: \"\\ee07\";
}
.ri-heart-2-fill:before {
  content: \"\\ee08\";
}
.ri-heart-2-line:before {
  content: \"\\ee09\";
}
.ri-heart-3-fill:before {
  content: \"\\ee0a\";
}
.ri-heart-3-line:before {
  content: \"\\ee0b\";
}
.ri-heart-add-fill:before {
  content: \"\\ee0c\";
}
.ri-heart-add-line:before {
  content: \"\\ee0d\";
}
.ri-heart-fill:before {
  content: \"\\ee0e\";
}
.ri-heart-line:before {
  content: \"\\ee0f\";
}
.ri-heart-pulse-fill:before {
  content: \"\\ee10\";
}
.ri-heart-pulse-line:before {
  content: \"\\ee11\";
}
.ri-hearts-fill:before {
  content: \"\\ee12\";
}
.ri-hearts-line:before {
  content: \"\\ee13\";
}
.ri-heavy-showers-fill:before {
  content: \"\\ee14\";
}
.ri-heavy-showers-line:before {
  content: \"\\ee15\";
}
.ri-history-fill:before {
  content: \"\\ee16\";
}
.ri-history-line:before {
  content: \"\\ee17\";
}
.ri-home-2-fill:before {
  content: \"\\ee18\";
}
.ri-home-2-line:before {
  content: \"\\ee19\";
}
.ri-home-3-fill:before {
  content: \"\\ee1a\";
}
.ri-home-3-line:before {
  content: \"\\ee1b\";
}
.ri-home-4-fill:before {
  content: \"\\ee1c\";
}
.ri-home-4-line:before {
  content: \"\\ee1d\";
}
.ri-home-5-fill:before {
  content: \"\\ee1e\";
}
.ri-home-5-line:before {
  content: \"\\ee1f\";
}
.ri-home-6-fill:before {
  content: \"\\ee20\";
}
.ri-home-6-line:before {
  content: \"\\ee21\";
}
.ri-home-7-fill:before {
  content: \"\\ee22\";
}
.ri-home-7-line:before {
  content: \"\\ee23\";
}
.ri-home-8-fill:before {
  content: \"\\ee24\";
}
.ri-home-8-line:before {
  content: \"\\ee25\";
}
.ri-home-fill:before {
  content: \"\\ee26\";
}
.ri-home-gear-fill:before {
  content: \"\\ee27\";
}
.ri-home-gear-line:before {
  content: \"\\ee28\";
}
.ri-home-heart-fill:before {
  content: \"\\ee29\";
}
.ri-home-heart-line:before {
  content: \"\\ee2a\";
}
.ri-home-line:before {
  content: \"\\ee2b\";
}
.ri-home-smile-2-fill:before {
  content: \"\\ee2c\";
}
.ri-home-smile-2-line:before {
  content: \"\\ee2d\";
}
.ri-home-smile-fill:before {
  content: \"\\ee2e\";
}
.ri-home-smile-line:before {
  content: \"\\ee2f\";
}
.ri-home-wifi-fill:before {
  content: \"\\ee30\";
}
.ri-home-wifi-line:before {
  content: \"\\ee31\";
}
.ri-honor-of-kings-fill:before {
  content: \"\\ee32\";
}
.ri-honor-of-kings-line:before {
  content: \"\\ee33\";
}
.ri-honour-fill:before {
  content: \"\\ee34\";
}
.ri-honour-line:before {
  content: \"\\ee35\";
}
.ri-hospital-fill:before {
  content: \"\\ee36\";
}
.ri-hospital-line:before {
  content: \"\\ee37\";
}
.ri-hotel-bed-fill:before {
  content: \"\\ee38\";
}
.ri-hotel-bed-line:before {
  content: \"\\ee39\";
}
.ri-hotel-fill:before {
  content: \"\\ee3a\";
}
.ri-hotel-line:before {
  content: \"\\ee3b\";
}
.ri-hotspot-fill:before {
  content: \"\\ee3c\";
}
.ri-hotspot-line:before {
  content: \"\\ee3d\";
}
.ri-hq-fill:before {
  content: \"\\ee3e\";
}
.ri-hq-line:before {
  content: \"\\ee3f\";
}
.ri-html5-fill:before {
  content: \"\\ee40\";
}
.ri-html5-line:before {
  content: \"\\ee41\";
}
.ri-ie-fill:before {
  content: \"\\ee42\";
}
.ri-ie-line:before {
  content: \"\\ee43\";
}
.ri-image-2-fill:before {
  content: \"\\ee44\";
}
.ri-image-2-line:before {
  content: \"\\ee45\";
}
.ri-image-add-fill:before {
  content: \"\\ee46\";
}
.ri-image-add-line:before {
  content: \"\\ee47\";
}
.ri-image-edit-fill:before {
  content: \"\\ee48\";
}
.ri-image-edit-line:before {
  content: \"\\ee49\";
}
.ri-image-fill:before {
  content: \"\\ee4a\";
}
.ri-image-line:before {
  content: \"\\ee4b\";
}
.ri-inbox-archive-fill:before {
  content: \"\\ee4c\";
}
.ri-inbox-archive-line:before {
  content: \"\\ee4d\";
}
.ri-inbox-fill:before {
  content: \"\\ee4e\";
}
.ri-inbox-line:before {
  content: \"\\ee4f\";
}
.ri-inbox-unarchive-fill:before {
  content: \"\\ee50\";
}
.ri-inbox-unarchive-line:before {
  content: \"\\ee51\";
}
.ri-increase-decrease-fill:before {
  content: \"\\ee52\";
}
.ri-increase-decrease-line:before {
  content: \"\\ee53\";
}
.ri-indent-decrease:before {
  content: \"\\ee54\";
}
.ri-indent-increase:before {
  content: \"\\ee55\";
}
.ri-indeterminate-circle-fill:before {
  content: \"\\ee56\";
}
.ri-indeterminate-circle-line:before {
  content: \"\\ee57\";
}
.ri-information-fill:before {
  content: \"\\ee58\";
}
.ri-information-line:before {
  content: \"\\ee59\";
}
.ri-infrared-thermometer-fill:before {
  content: \"\\ee5a\";
}
.ri-infrared-thermometer-line:before {
  content: \"\\ee5b\";
}
.ri-ink-bottle-fill:before {
  content: \"\\ee5c\";
}
.ri-ink-bottle-line:before {
  content: \"\\ee5d\";
}
.ri-input-cursor-move:before {
  content: \"\\ee5e\";
}
.ri-input-method-fill:before {
  content: \"\\ee5f\";
}
.ri-input-method-line:before {
  content: \"\\ee60\";
}
.ri-insert-column-left:before {
  content: \"\\ee61\";
}
.ri-insert-column-right:before {
  content: \"\\ee62\";
}
.ri-insert-row-bottom:before {
  content: \"\\ee63\";
}
.ri-insert-row-top:before {
  content: \"\\ee64\";
}
.ri-instagram-fill:before {
  content: \"\\ee65\";
}
.ri-instagram-line:before {
  content: \"\\ee66\";
}
.ri-install-fill:before {
  content: \"\\ee67\";
}
.ri-install-line:before {
  content: \"\\ee68\";
}
.ri-invision-fill:before {
  content: \"\\ee69\";
}
.ri-invision-line:before {
  content: \"\\ee6a\";
}
.ri-italic:before {
  content: \"\\ee6b\";
}
.ri-kakao-talk-fill:before {
  content: \"\\ee6c\";
}
.ri-kakao-talk-line:before {
  content: \"\\ee6d\";
}
.ri-key-2-fill:before {
  content: \"\\ee6e\";
}
.ri-key-2-line:before {
  content: \"\\ee6f\";
}
.ri-key-fill:before {
  content: \"\\ee70\";
}
.ri-key-line:before {
  content: \"\\ee71\";
}
.ri-keyboard-box-fill:before {
  content: \"\\ee72\";
}
.ri-keyboard-box-line:before {
  content: \"\\ee73\";
}
.ri-keyboard-fill:before {
  content: \"\\ee74\";
}
.ri-keyboard-line:before {
  content: \"\\ee75\";
}
.ri-keynote-fill:before {
  content: \"\\ee76\";
}
.ri-keynote-line:before {
  content: \"\\ee77\";
}
.ri-knife-blood-fill:before {
  content: \"\\ee78\";
}
.ri-knife-blood-line:before {
  content: \"\\ee79\";
}
.ri-knife-fill:before {
  content: \"\\ee7a\";
}
.ri-knife-line:before {
  content: \"\\ee7b\";
}
.ri-landscape-fill:before {
  content: \"\\ee7c\";
}
.ri-landscape-line:before {
  content: \"\\ee7d\";
}
.ri-layout-2-fill:before {
  content: \"\\ee7e\";
}
.ri-layout-2-line:before {
  content: \"\\ee7f\";
}
.ri-layout-3-fill:before {
  content: \"\\ee80\";
}
.ri-layout-3-line:before {
  content: \"\\ee81\";
}
.ri-layout-4-fill:before {
  content: \"\\ee82\";
}
.ri-layout-4-line:before {
  content: \"\\ee83\";
}
.ri-layout-5-fill:before {
  content: \"\\ee84\";
}
.ri-layout-5-line:before {
  content: \"\\ee85\";
}
.ri-layout-6-fill:before {
  content: \"\\ee86\";
}
.ri-layout-6-line:before {
  content: \"\\ee87\";
}
.ri-layout-bottom-2-fill:before {
  content: \"\\ee88\";
}
.ri-layout-bottom-2-line:before {
  content: \"\\ee89\";
}
.ri-layout-bottom-fill:before {
  content: \"\\ee8a\";
}
.ri-layout-bottom-line:before {
  content: \"\\ee8b\";
}
.ri-layout-column-fill:before {
  content: \"\\ee8c\";
}
.ri-layout-column-line:before {
  content: \"\\ee8d\";
}
.ri-layout-fill:before {
  content: \"\\ee8e\";
}
.ri-layout-grid-fill:before {
  content: \"\\ee8f\";
}
.ri-layout-grid-line:before {
  content: \"\\ee90\";
}
.ri-layout-left-2-fill:before {
  content: \"\\ee91\";
}
.ri-layout-left-2-line:before {
  content: \"\\ee92\";
}
.ri-layout-left-fill:before {
  content: \"\\ee93\";
}
.ri-layout-left-line:before {
  content: \"\\ee94\";
}
.ri-layout-line:before {
  content: \"\\ee95\";
}
.ri-layout-masonry-fill:before {
  content: \"\\ee96\";
}
.ri-layout-masonry-line:before {
  content: \"\\ee97\";
}
.ri-layout-right-2-fill:before {
  content: \"\\ee98\";
}
.ri-layout-right-2-line:before {
  content: \"\\ee99\";
}
.ri-layout-right-fill:before {
  content: \"\\ee9a\";
}
.ri-layout-right-line:before {
  content: \"\\ee9b\";
}
.ri-layout-row-fill:before {
  content: \"\\ee9c\";
}
.ri-layout-row-line:before {
  content: \"\\ee9d\";
}
.ri-layout-top-2-fill:before {
  content: \"\\ee9e\";
}
.ri-layout-top-2-line:before {
  content: \"\\ee9f\";
}
.ri-layout-top-fill:before {
  content: \"\\eea0\";
}
.ri-layout-top-line:before {
  content: \"\\eea1\";
}
.ri-leaf-fill:before {
  content: \"\\eea2\";
}
.ri-leaf-line:before {
  content: \"\\eea3\";
}
.ri-lifebuoy-fill:before {
  content: \"\\eea4\";
}
.ri-lifebuoy-line:before {
  content: \"\\eea5\";
}
.ri-lightbulb-fill:before {
  content: \"\\eea6\";
}
.ri-lightbulb-flash-fill:before {
  content: \"\\eea7\";
}
.ri-lightbulb-flash-line:before {
  content: \"\\eea8\";
}
.ri-lightbulb-line:before {
  content: \"\\eea9\";
}
.ri-line-chart-fill:before {
  content: \"\\eeaa\";
}
.ri-line-chart-line:before {
  content: \"\\eeab\";
}
.ri-line-fill:before {
  content: \"\\eeac\";
}
.ri-line-height:before {
  content: \"\\eead\";
}
.ri-line-line:before {
  content: \"\\eeae\";
}
.ri-link-m:before {
  content: \"\\eeaf\";
}
.ri-link-unlink-m:before {
  content: \"\\eeb0\";
}
.ri-link-unlink:before {
  content: \"\\eeb1\";
}
.ri-link:before {
  content: \"\\eeb2\";
}
.ri-linkedin-box-fill:before {
  content: \"\\eeb3\";
}
.ri-linkedin-box-line:before {
  content: \"\\eeb4\";
}
.ri-linkedin-fill:before {
  content: \"\\eeb5\";
}
.ri-linkedin-line:before {
  content: \"\\eeb6\";
}
.ri-links-fill:before {
  content: \"\\eeb7\";
}
.ri-links-line:before {
  content: \"\\eeb8\";
}
.ri-list-check-2:before {
  content: \"\\eeb9\";
}
.ri-list-check:before {
  content: \"\\eeba\";
}
.ri-list-ordered:before {
  content: \"\\eebb\";
}
.ri-list-settings-fill:before {
  content: \"\\eebc\";
}
.ri-list-settings-line:before {
  content: \"\\eebd\";
}
.ri-list-unordered:before {
  content: \"\\eebe\";
}
.ri-live-fill:before {
  content: \"\\eebf\";
}
.ri-live-line:before {
  content: \"\\eec0\";
}
.ri-loader-2-fill:before {
  content: \"\\eec1\";
}
.ri-loader-2-line:before {
  content: \"\\eec2\";
}
.ri-loader-3-fill:before {
  content: \"\\eec3\";
}
.ri-loader-3-line:before {
  content: \"\\eec4\";
}
.ri-loader-4-fill:before {
  content: \"\\eec5\";
}
.ri-loader-4-line:before {
  content: \"\\eec6\";
}
.ri-loader-5-fill:before {
  content: \"\\eec7\";
}
.ri-loader-5-line:before {
  content: \"\\eec8\";
}
.ri-loader-fill:before {
  content: \"\\eec9\";
}
.ri-loader-line:before {
  content: \"\\eeca\";
}
.ri-lock-2-fill:before {
  content: \"\\eecb\";
}
.ri-lock-2-line:before {
  content: \"\\eecc\";
}
.ri-lock-fill:before {
  content: \"\\eecd\";
}
.ri-lock-line:before {
  content: \"\\eece\";
}
.ri-lock-password-fill:before {
  content: \"\\eecf\";
}
.ri-lock-password-line:before {
  content: \"\\eed0\";
}
.ri-lock-unlock-fill:before {
  content: \"\\eed1\";
}
.ri-lock-unlock-line:before {
  content: \"\\eed2\";
}
.ri-login-box-fill:before {
  content: \"\\eed3\";
}
.ri-login-box-line:before {
  content: \"\\eed4\";
}
.ri-login-circle-fill:before {
  content: \"\\eed5\";
}
.ri-login-circle-line:before {
  content: \"\\eed6\";
}
.ri-logout-box-fill:before {
  content: \"\\eed7\";
}
.ri-logout-box-line:before {
  content: \"\\eed8\";
}
.ri-logout-box-r-fill:before {
  content: \"\\eed9\";
}
.ri-logout-box-r-line:before {
  content: \"\\eeda\";
}
.ri-logout-circle-fill:before {
  content: \"\\eedb\";
}
.ri-logout-circle-line:before {
  content: \"\\eedc\";
}
.ri-logout-circle-r-fill:before {
  content: \"\\eedd\";
}
.ri-logout-circle-r-line:before {
  content: \"\\eede\";
}
.ri-luggage-cart-fill:before {
  content: \"\\eedf\";
}
.ri-luggage-cart-line:before {
  content: \"\\eee0\";
}
.ri-luggage-deposit-fill:before {
  content: \"\\eee1\";
}
.ri-luggage-deposit-line:before {
  content: \"\\eee2\";
}
.ri-lungs-fill:before {
  content: \"\\eee3\";
}
.ri-lungs-line:before {
  content: \"\\eee4\";
}
.ri-mac-fill:before {
  content: \"\\eee5\";
}
.ri-mac-line:before {
  content: \"\\eee6\";
}
.ri-macbook-fill:before {
  content: \"\\eee7\";
}
.ri-macbook-line:before {
  content: \"\\eee8\";
}
.ri-magic-fill:before {
  content: \"\\eee9\";
}
.ri-magic-line:before {
  content: \"\\eeea\";
}
.ri-mail-add-fill:before {
  content: \"\\eeeb\";
}
.ri-mail-add-line:before {
  content: \"\\eeec\";
}
.ri-mail-check-fill:before {
  content: \"\\eeed\";
}
.ri-mail-check-line:before {
  content: \"\\eeee\";
}
.ri-mail-close-fill:before {
  content: \"\\eeef\";
}
.ri-mail-close-line:before {
  content: \"\\eef0\";
}
.ri-mail-download-fill:before {
  content: \"\\eef1\";
}
.ri-mail-download-line:before {
  content: \"\\eef2\";
}
.ri-mail-fill:before {
  content: \"\\eef3\";
}
.ri-mail-forbid-fill:before {
  content: \"\\eef4\";
}
.ri-mail-forbid-line:before {
  content: \"\\eef5\";
}
.ri-mail-line:before {
  content: \"\\eef6\";
}
.ri-mail-lock-fill:before {
  content: \"\\eef7\";
}
.ri-mail-lock-line:before {
  content: \"\\eef8\";
}
.ri-mail-open-fill:before {
  content: \"\\eef9\";
}
.ri-mail-open-line:before {
  content: \"\\eefa\";
}
.ri-mail-send-fill:before {
  content: \"\\eefb\";
}
.ri-mail-send-line:before {
  content: \"\\eefc\";
}
.ri-mail-settings-fill:before {
  content: \"\\eefd\";
}
.ri-mail-settings-line:before {
  content: \"\\eefe\";
}
.ri-mail-star-fill:before {
  content: \"\\eeff\";
}
.ri-mail-star-line:before {
  content: \"\\ef00\";
}
.ri-mail-unread-fill:before {
  content: \"\\ef01\";
}
.ri-mail-unread-line:before {
  content: \"\\ef02\";
}
.ri-mail-volume-fill:before {
  content: \"\\ef03\";
}
.ri-mail-volume-line:before {
  content: \"\\ef04\";
}
.ri-map-2-fill:before {
  content: \"\\ef05\";
}
.ri-map-2-line:before {
  content: \"\\ef06\";
}
.ri-map-fill:before {
  content: \"\\ef07\";
}
.ri-map-line:before {
  content: \"\\ef08\";
}
.ri-map-pin-2-fill:before {
  content: \"\\ef09\";
}
.ri-map-pin-2-line:before {
  content: \"\\ef0a\";
}
.ri-map-pin-3-fill:before {
  content: \"\\ef0b\";
}
.ri-map-pin-3-line:before {
  content: \"\\ef0c\";
}
.ri-map-pin-4-fill:before {
  content: \"\\ef0d\";
}
.ri-map-pin-4-line:before {
  content: \"\\ef0e\";
}
.ri-map-pin-5-fill:before {
  content: \"\\ef0f\";
}
.ri-map-pin-5-line:before {
  content: \"\\ef10\";
}
.ri-map-pin-add-fill:before {
  content: \"\\ef11\";
}
.ri-map-pin-add-line:before {
  content: \"\\ef12\";
}
.ri-map-pin-fill:before {
  content: \"\\ef13\";
}
.ri-map-pin-line:before {
  content: \"\\ef14\";
}
.ri-map-pin-range-fill:before {
  content: \"\\ef15\";
}
.ri-map-pin-range-line:before {
  content: \"\\ef16\";
}
.ri-map-pin-time-fill:before {
  content: \"\\ef17\";
}
.ri-map-pin-time-line:before {
  content: \"\\ef18\";
}
.ri-map-pin-user-fill:before {
  content: \"\\ef19\";
}
.ri-map-pin-user-line:before {
  content: \"\\ef1a\";
}
.ri-mark-pen-fill:before {
  content: \"\\ef1b\";
}
.ri-mark-pen-line:before {
  content: \"\\ef1c\";
}
.ri-markdown-fill:before {
  content: \"\\ef1d\";
}
.ri-markdown-line:before {
  content: \"\\ef1e\";
}
.ri-markup-fill:before {
  content: \"\\ef1f\";
}
.ri-markup-line:before {
  content: \"\\ef20\";
}
.ri-mastercard-fill:before {
  content: \"\\ef21\";
}
.ri-mastercard-line:before {
  content: \"\\ef22\";
}
.ri-mastodon-fill:before {
  content: \"\\ef23\";
}
.ri-mastodon-line:before {
  content: \"\\ef24\";
}
.ri-medal-2-fill:before {
  content: \"\\ef25\";
}
.ri-medal-2-line:before {
  content: \"\\ef26\";
}
.ri-medal-fill:before {
  content: \"\\ef27\";
}
.ri-medal-line:before {
  content: \"\\ef28\";
}
.ri-medicine-bottle-fill:before {
  content: \"\\ef29\";
}
.ri-medicine-bottle-line:before {
  content: \"\\ef2a\";
}
.ri-medium-fill:before {
  content: \"\\ef2b\";
}
.ri-medium-line:before {
  content: \"\\ef2c\";
}
.ri-men-fill:before {
  content: \"\\ef2d\";
}
.ri-men-line:before {
  content: \"\\ef2e\";
}
.ri-mental-health-fill:before {
  content: \"\\ef2f\";
}
.ri-mental-health-line:before {
  content: \"\\ef30\";
}
.ri-menu-2-fill:before {
  content: \"\\ef31\";
}
.ri-menu-2-line:before {
  content: \"\\ef32\";
}
.ri-menu-3-fill:before {
  content: \"\\ef33\";
}
.ri-menu-3-line:before {
  content: \"\\ef34\";
}
.ri-menu-4-fill:before {
  content: \"\\ef35\";
}
.ri-menu-4-line:before {
  content: \"\\ef36\";
}
.ri-menu-5-fill:before {
  content: \"\\ef37\";
}
.ri-menu-5-line:before {
  content: \"\\ef38\";
}
.ri-menu-add-fill:before {
  content: \"\\ef39\";
}
.ri-menu-add-line:before {
  content: \"\\ef3a\";
}
.ri-menu-fill:before {
  content: \"\\ef3b\";
}
.ri-menu-fold-fill:before {
  content: \"\\ef3c\";
}
.ri-menu-fold-line:before {
  content: \"\\ef3d\";
}
.ri-menu-line:before {
  content: \"\\ef3e\";
}
.ri-menu-unfold-fill:before {
  content: \"\\ef3f\";
}
.ri-menu-unfold-line:before {
  content: \"\\ef40\";
}
.ri-merge-cells-horizontal:before {
  content: \"\\ef41\";
}
.ri-merge-cells-vertical:before {
  content: \"\\ef42\";
}
.ri-message-2-fill:before {
  content: \"\\ef43\";
}
.ri-message-2-line:before {
  content: \"\\ef44\";
}
.ri-message-3-fill:before {
  content: \"\\ef45\";
}
.ri-message-3-line:before {
  content: \"\\ef46\";
}
.ri-message-fill:before {
  content: \"\\ef47\";
}
.ri-message-line:before {
  content: \"\\ef48\";
}
.ri-messenger-fill:before {
  content: \"\\ef49\";
}
.ri-messenger-line:before {
  content: \"\\ef4a\";
}
.ri-meteor-fill:before {
  content: \"\\ef4b\";
}
.ri-meteor-line:before {
  content: \"\\ef4c\";
}
.ri-mic-2-fill:before {
  content: \"\\ef4d\";
}
.ri-mic-2-line:before {
  content: \"\\ef4e\";
}
.ri-mic-fill:before {
  content: \"\\ef4f\";
}
.ri-mic-line:before {
  content: \"\\ef50\";
}
.ri-mic-off-fill:before {
  content: \"\\ef51\";
}
.ri-mic-off-line:before {
  content: \"\\ef52\";
}
.ri-mickey-fill:before {
  content: \"\\ef53\";
}
.ri-mickey-line:before {
  content: \"\\ef54\";
}
.ri-microscope-fill:before {
  content: \"\\ef55\";
}
.ri-microscope-line:before {
  content: \"\\ef56\";
}
.ri-microsoft-fill:before {
  content: \"\\ef57\";
}
.ri-microsoft-line:before {
  content: \"\\ef58\";
}
.ri-mind-map:before {
  content: \"\\ef59\";
}
.ri-mini-program-fill:before {
  content: \"\\ef5a\";
}
.ri-mini-program-line:before {
  content: \"\\ef5b\";
}
.ri-mist-fill:before {
  content: \"\\ef5c\";
}
.ri-mist-line:before {
  content: \"\\ef5d\";
}
.ri-money-cny-box-fill:before {
  content: \"\\ef5e\";
}
.ri-money-cny-box-line:before {
  content: \"\\ef5f\";
}
.ri-money-cny-circle-fill:before {
  content: \"\\ef60\";
}
.ri-money-cny-circle-line:before {
  content: \"\\ef61\";
}
.ri-money-dollar-box-fill:before {
  content: \"\\ef62\";
}
.ri-money-dollar-box-line:before {
  content: \"\\ef63\";
}
.ri-money-dollar-circle-fill:before {
  content: \"\\ef64\";
}
.ri-money-dollar-circle-line:before {
  content: \"\\ef65\";
}
.ri-money-euro-box-fill:before {
  content: \"\\ef66\";
}
.ri-money-euro-box-line:before {
  content: \"\\ef67\";
}
.ri-money-euro-circle-fill:before {
  content: \"\\ef68\";
}
.ri-money-euro-circle-line:before {
  content: \"\\ef69\";
}
.ri-money-pound-box-fill:before {
  content: \"\\ef6a\";
}
.ri-money-pound-box-line:before {
  content: \"\\ef6b\";
}
.ri-money-pound-circle-fill:before {
  content: \"\\ef6c\";
}
.ri-money-pound-circle-line:before {
  content: \"\\ef6d\";
}
.ri-moon-clear-fill:before {
  content: \"\\ef6e\";
}
.ri-moon-clear-line:before {
  content: \"\\ef6f\";
}
.ri-moon-cloudy-fill:before {
  content: \"\\ef70\";
}
.ri-moon-cloudy-line:before {
  content: \"\\ef71\";
}
.ri-moon-fill:before {
  content: \"\\ef72\";
}
.ri-moon-foggy-fill:before {
  content: \"\\ef73\";
}
.ri-moon-foggy-line:before {
  content: \"\\ef74\";
}
.ri-moon-line:before {
  content: \"\\ef75\";
}
.ri-more-2-fill:before {
  content: \"\\ef76\";
}
.ri-more-2-line:before {
  content: \"\\ef77\";
}
.ri-more-fill:before {
  content: \"\\ef78\";
}
.ri-more-line:before {
  content: \"\\ef79\";
}
.ri-motorbike-fill:before {
  content: \"\\ef7a\";
}
.ri-motorbike-line:before {
  content: \"\\ef7b\";
}
.ri-mouse-fill:before {
  content: \"\\ef7c\";
}
.ri-mouse-line:before {
  content: \"\\ef7d\";
}
.ri-movie-2-fill:before {
  content: \"\\ef7e\";
}
.ri-movie-2-line:before {
  content: \"\\ef7f\";
}
.ri-movie-fill:before {
  content: \"\\ef80\";
}
.ri-movie-line:before {
  content: \"\\ef81\";
}
.ri-music-2-fill:before {
  content: \"\\ef82\";
}
.ri-music-2-line:before {
  content: \"\\ef83\";
}
.ri-music-fill:before {
  content: \"\\ef84\";
}
.ri-music-line:before {
  content: \"\\ef85\";
}
.ri-mv-fill:before {
  content: \"\\ef86\";
}
.ri-mv-line:before {
  content: \"\\ef87\";
}
.ri-navigation-fill:before {
  content: \"\\ef88\";
}
.ri-navigation-line:before {
  content: \"\\ef89\";
}
.ri-netease-cloud-music-fill:before {
  content: \"\\ef8a\";
}
.ri-netease-cloud-music-line:before {
  content: \"\\ef8b\";
}
.ri-netflix-fill:before {
  content: \"\\ef8c\";
}
.ri-netflix-line:before {
  content: \"\\ef8d\";
}
.ri-newspaper-fill:before {
  content: \"\\ef8e\";
}
.ri-newspaper-line:before {
  content: \"\\ef8f\";
}
.ri-node-tree:before {
  content: \"\\ef90\";
}
.ri-notification-2-fill:before {
  content: \"\\ef91\";
}
.ri-notification-2-line:before {
  content: \"\\ef92\";
}
.ri-notification-3-fill:before {
  content: \"\\ef93\";
}
.ri-notification-3-line:before {
  content: \"\\ef94\";
}
.ri-notification-4-fill:before {
  content: \"\\ef95\";
}
.ri-notification-4-line:before {
  content: \"\\ef96\";
}
.ri-notification-badge-fill:before {
  content: \"\\ef97\";
}
.ri-notification-badge-line:before {
  content: \"\\ef98\";
}
.ri-notification-fill:before {
  content: \"\\ef99\";
}
.ri-notification-line:before {
  content: \"\\ef9a\";
}
.ri-notification-off-fill:before {
  content: \"\\ef9b\";
}
.ri-notification-off-line:before {
  content: \"\\ef9c\";
}
.ri-npmjs-fill:before {
  content: \"\\ef9d\";
}
.ri-npmjs-line:before {
  content: \"\\ef9e\";
}
.ri-number-0:before {
  content: \"\\ef9f\";
}
.ri-number-1:before {
  content: \"\\efa0\";
}
.ri-number-2:before {
  content: \"\\efa1\";
}
.ri-number-3:before {
  content: \"\\efa2\";
}
.ri-number-4:before {
  content: \"\\efa3\";
}
.ri-number-5:before {
  content: \"\\efa4\";
}
.ri-number-6:before {
  content: \"\\efa5\";
}
.ri-number-7:before {
  content: \"\\efa6\";
}
.ri-number-8:before {
  content: \"\\efa7\";
}
.ri-number-9:before {
  content: \"\\efa8\";
}
.ri-numbers-fill:before {
  content: \"\\efa9\";
}
.ri-numbers-line:before {
  content: \"\\efaa\";
}
.ri-nurse-fill:before {
  content: \"\\efab\";
}
.ri-nurse-line:before {
  content: \"\\efac\";
}
.ri-oil-fill:before {
  content: \"\\efad\";
}
.ri-oil-line:before {
  content: \"\\efae\";
}
.ri-omega:before {
  content: \"\\efaf\";
}
.ri-open-arm-fill:before {
  content: \"\\efb0\";
}
.ri-open-arm-line:before {
  content: \"\\efb1\";
}
.ri-open-source-fill:before {
  content: \"\\efb2\";
}
.ri-open-source-line:before {
  content: \"\\efb3\";
}
.ri-opera-fill:before {
  content: \"\\efb4\";
}
.ri-opera-line:before {
  content: \"\\efb5\";
}
.ri-order-play-fill:before {
  content: \"\\efb6\";
}
.ri-order-play-line:before {
  content: \"\\efb7\";
}
.ri-organization-chart:before {
  content: \"\\efb8\";
}
.ri-outlet-2-fill:before {
  content: \"\\efb9\";
}
.ri-outlet-2-line:before {
  content: \"\\efba\";
}
.ri-outlet-fill:before {
  content: \"\\efbb\";
}
.ri-outlet-line:before {
  content: \"\\efbc\";
}
.ri-page-separator:before {
  content: \"\\efbd\";
}
.ri-pages-fill:before {
  content: \"\\efbe\";
}
.ri-pages-line:before {
  content: \"\\efbf\";
}
.ri-paint-brush-fill:before {
  content: \"\\efc0\";
}
.ri-paint-brush-line:before {
  content: \"\\efc1\";
}
.ri-paint-fill:before {
  content: \"\\efc2\";
}
.ri-paint-line:before {
  content: \"\\efc3\";
}
.ri-palette-fill:before {
  content: \"\\efc4\";
}
.ri-palette-line:before {
  content: \"\\efc5\";
}
.ri-pantone-fill:before {
  content: \"\\efc6\";
}
.ri-pantone-line:before {
  content: \"\\efc7\";
}
.ri-paragraph:before {
  content: \"\\efc8\";
}
.ri-parent-fill:before {
  content: \"\\efc9\";
}
.ri-parent-line:before {
  content: \"\\efca\";
}
.ri-parentheses-fill:before {
  content: \"\\efcb\";
}
.ri-parentheses-line:before {
  content: \"\\efcc\";
}
.ri-parking-box-fill:before {
  content: \"\\efcd\";
}
.ri-parking-box-line:before {
  content: \"\\efce\";
}
.ri-parking-fill:before {
  content: \"\\efcf\";
}
.ri-parking-line:before {
  content: \"\\efd0\";
}
.ri-passport-fill:before {
  content: \"\\efd1\";
}
.ri-passport-line:before {
  content: \"\\efd2\";
}
.ri-patreon-fill:before {
  content: \"\\efd3\";
}
.ri-patreon-line:before {
  content: \"\\efd4\";
}
.ri-pause-circle-fill:before {
  content: \"\\efd5\";
}
.ri-pause-circle-line:before {
  content: \"\\efd6\";
}
.ri-pause-fill:before {
  content: \"\\efd7\";
}
.ri-pause-line:before {
  content: \"\\efd8\";
}
.ri-pause-mini-fill:before {
  content: \"\\efd9\";
}
.ri-pause-mini-line:before {
  content: \"\\efda\";
}
.ri-paypal-fill:before {
  content: \"\\efdb\";
}
.ri-paypal-line:before {
  content: \"\\efdc\";
}
.ri-pen-nib-fill:before {
  content: \"\\efdd\";
}
.ri-pen-nib-line:before {
  content: \"\\efde\";
}
.ri-pencil-fill:before {
  content: \"\\efdf\";
}
.ri-pencil-line:before {
  content: \"\\efe0\";
}
.ri-pencil-ruler-2-fill:before {
  content: \"\\efe1\";
}
.ri-pencil-ruler-2-line:before {
  content: \"\\efe2\";
}
.ri-pencil-ruler-fill:before {
  content: \"\\efe3\";
}
.ri-pencil-ruler-line:before {
  content: \"\\efe4\";
}
.ri-percent-fill:before {
  content: \"\\efe5\";
}
.ri-percent-line:before {
  content: \"\\efe6\";
}
.ri-phone-camera-fill:before {
  content: \"\\efe7\";
}
.ri-phone-camera-line:before {
  content: \"\\efe8\";
}
.ri-phone-fill:before {
  content: \"\\efe9\";
}
.ri-phone-find-fill:before {
  content: \"\\efea\";
}
.ri-phone-find-line:before {
  content: \"\\efeb\";
}
.ri-phone-line:before {
  content: \"\\efec\";
}
.ri-phone-lock-fill:before {
  content: \"\\efed\";
}
.ri-phone-lock-line:before {
  content: \"\\efee\";
}
.ri-picture-in-picture-2-fill:before {
  content: \"\\efef\";
}
.ri-picture-in-picture-2-line:before {
  content: \"\\eff0\";
}
.ri-picture-in-picture-exit-fill:before {
  content: \"\\eff1\";
}
.ri-picture-in-picture-exit-line:before {
  content: \"\\eff2\";
}
.ri-picture-in-picture-fill:before {
  content: \"\\eff3\";
}
.ri-picture-in-picture-line:before {
  content: \"\\eff4\";
}
.ri-pie-chart-2-fill:before {
  content: \"\\eff5\";
}
.ri-pie-chart-2-line:before {
  content: \"\\eff6\";
}
.ri-pie-chart-box-fill:before {
  content: \"\\eff7\";
}
.ri-pie-chart-box-line:before {
  content: \"\\eff8\";
}
.ri-pie-chart-fill:before {
  content: \"\\eff9\";
}
.ri-pie-chart-line:before {
  content: \"\\effa\";
}
.ri-pin-distance-fill:before {
  content: \"\\effb\";
}
.ri-pin-distance-line:before {
  content: \"\\effc\";
}
.ri-ping-pong-fill:before {
  content: \"\\effd\";
}
.ri-ping-pong-line:before {
  content: \"\\effe\";
}
.ri-pinterest-fill:before {
  content: \"\\efff\";
}
.ri-pinterest-line:before {
  content: \"\\f000\";
}
.ri-pinyin-input:before {
  content: \"\\f001\";
}
.ri-pixelfed-fill:before {
  content: \"\\f002\";
}
.ri-pixelfed-line:before {
  content: \"\\f003\";
}
.ri-plane-fill:before {
  content: \"\\f004\";
}
.ri-plane-line:before {
  content: \"\\f005\";
}
.ri-plant-fill:before {
  content: \"\\f006\";
}
.ri-plant-line:before {
  content: \"\\f007\";
}
.ri-play-circle-fill:before {
  content: \"\\f008\";
}
.ri-play-circle-line:before {
  content: \"\\f009\";
}
.ri-play-fill:before {
  content: \"\\f00a\";
}
.ri-play-line:before {
  content: \"\\f00b\";
}
.ri-play-list-2-fill:before {
  content: \"\\f00c\";
}
.ri-play-list-2-line:before {
  content: \"\\f00d\";
}
.ri-play-list-add-fill:before {
  content: \"\\f00e\";
}
.ri-play-list-add-line:before {
  content: \"\\f00f\";
}
.ri-play-list-fill:before {
  content: \"\\f010\";
}
.ri-play-list-line:before {
  content: \"\\f011\";
}
.ri-play-mini-fill:before {
  content: \"\\f012\";
}
.ri-play-mini-line:before {
  content: \"\\f013\";
}
.ri-playstation-fill:before {
  content: \"\\f014\";
}
.ri-playstation-line:before {
  content: \"\\f015\";
}
.ri-plug-2-fill:before {
  content: \"\\f016\";
}
.ri-plug-2-line:before {
  content: \"\\f017\";
}
.ri-plug-fill:before {
  content: \"\\f018\";
}
.ri-plug-line:before {
  content: \"\\f019\";
}
.ri-polaroid-2-fill:before {
  content: \"\\f01a\";
}
.ri-polaroid-2-line:before {
  content: \"\\f01b\";
}
.ri-polaroid-fill:before {
  content: \"\\f01c\";
}
.ri-polaroid-line:before {
  content: \"\\f01d\";
}
.ri-police-car-fill:before {
  content: \"\\f01e\";
}
.ri-police-car-line:before {
  content: \"\\f01f\";
}
.ri-price-tag-2-fill:before {
  content: \"\\f020\";
}
.ri-price-tag-2-line:before {
  content: \"\\f021\";
}
.ri-price-tag-3-fill:before {
  content: \"\\f022\";
}
.ri-price-tag-3-line:before {
  content: \"\\f023\";
}
.ri-price-tag-fill:before {
  content: \"\\f024\";
}
.ri-price-tag-line:before {
  content: \"\\f025\";
}
.ri-printer-cloud-fill:before {
  content: \"\\f026\";
}
.ri-printer-cloud-line:before {
  content: \"\\f027\";
}
.ri-printer-fill:before {
  content: \"\\f028\";
}
.ri-printer-line:before {
  content: \"\\f029\";
}
.ri-product-hunt-fill:before {
  content: \"\\f02a\";
}
.ri-product-hunt-line:before {
  content: \"\\f02b\";
}
.ri-profile-fill:before {
  content: \"\\f02c\";
}
.ri-profile-line:before {
  content: \"\\f02d\";
}
.ri-projector-2-fill:before {
  content: \"\\f02e\";
}
.ri-projector-2-line:before {
  content: \"\\f02f\";
}
.ri-projector-fill:before {
  content: \"\\f030\";
}
.ri-projector-line:before {
  content: \"\\f031\";
}
.ri-psychotherapy-fill:before {
  content: \"\\f032\";
}
.ri-psychotherapy-line:before {
  content: \"\\f033\";
}
.ri-pulse-fill:before {
  content: \"\\f034\";
}
.ri-pulse-line:before {
  content: \"\\f035\";
}
.ri-pushpin-2-fill:before {
  content: \"\\f036\";
}
.ri-pushpin-2-line:before {
  content: \"\\f037\";
}
.ri-pushpin-fill:before {
  content: \"\\f038\";
}
.ri-pushpin-line:before {
  content: \"\\f039\";
}
.ri-qq-fill:before {
  content: \"\\f03a\";
}
.ri-qq-line:before {
  content: \"\\f03b\";
}
.ri-qr-code-fill:before {
  content: \"\\f03c\";
}
.ri-qr-code-line:before {
  content: \"\\f03d\";
}
.ri-qr-scan-2-fill:before {
  content: \"\\f03e\";
}
.ri-qr-scan-2-line:before {
  content: \"\\f03f\";
}
.ri-qr-scan-fill:before {
  content: \"\\f040\";
}
.ri-qr-scan-line:before {
  content: \"\\f041\";
}
.ri-question-answer-fill:before {
  content: \"\\f042\";
}
.ri-question-answer-line:before {
  content: \"\\f043\";
}
.ri-question-fill:before {
  content: \"\\f044\";
}
.ri-question-line:before {
  content: \"\\f045\";
}
.ri-question-mark:before {
  content: \"\\f046\";
}
.ri-questionnaire-fill:before {
  content: \"\\f047\";
}
.ri-questionnaire-line:before {
  content: \"\\f048\";
}
.ri-quill-pen-fill:before {
  content: \"\\f049\";
}
.ri-quill-pen-line:before {
  content: \"\\f04a\";
}
.ri-radar-fill:before {
  content: \"\\f04b\";
}
.ri-radar-line:before {
  content: \"\\f04c\";
}
.ri-radio-2-fill:before {
  content: \"\\f04d\";
}
.ri-radio-2-line:before {
  content: \"\\f04e\";
}
.ri-radio-button-fill:before {
  content: \"\\f04f\";
}
.ri-radio-button-line:before {
  content: \"\\f050\";
}
.ri-radio-fill:before {
  content: \"\\f051\";
}
.ri-radio-line:before {
  content: \"\\f052\";
}
.ri-rainbow-fill:before {
  content: \"\\f053\";
}
.ri-rainbow-line:before {
  content: \"\\f054\";
}
.ri-rainy-fill:before {
  content: \"\\f055\";
}
.ri-rainy-line:before {
  content: \"\\f056\";
}
.ri-reactjs-fill:before {
  content: \"\\f057\";
}
.ri-reactjs-line:before {
  content: \"\\f058\";
}
.ri-record-circle-fill:before {
  content: \"\\f059\";
}
.ri-record-circle-line:before {
  content: \"\\f05a\";
}
.ri-record-mail-fill:before {
  content: \"\\f05b\";
}
.ri-record-mail-line:before {
  content: \"\\f05c\";
}
.ri-recycle-fill:before {
  content: \"\\f05d\";
}
.ri-recycle-line:before {
  content: \"\\f05e\";
}
.ri-red-packet-fill:before {
  content: \"\\f05f\";
}
.ri-red-packet-line:before {
  content: \"\\f060\";
}
.ri-reddit-fill:before {
  content: \"\\f061\";
}
.ri-reddit-line:before {
  content: \"\\f062\";
}
.ri-refresh-fill:before {
  content: \"\\f063\";
}
.ri-refresh-line:before {
  content: \"\\f064\";
}
.ri-refund-2-fill:before {
  content: \"\\f065\";
}
.ri-refund-2-line:before {
  content: \"\\f066\";
}
.ri-refund-fill:before {
  content: \"\\f067\";
}
.ri-refund-line:before {
  content: \"\\f068\";
}
.ri-registered-fill:before {
  content: \"\\f069\";
}
.ri-registered-line:before {
  content: \"\\f06a\";
}
.ri-remixicon-fill:before {
  content: \"\\f06b\";
}
.ri-remixicon-line:before {
  content: \"\\f06c\";
}
.ri-remote-control-2-fill:before {
  content: \"\\f06d\";
}
.ri-remote-control-2-line:before {
  content: \"\\f06e\";
}
.ri-remote-control-fill:before {
  content: \"\\f06f\";
}
.ri-remote-control-line:before {
  content: \"\\f070\";
}
.ri-repeat-2-fill:before {
  content: \"\\f071\";
}
.ri-repeat-2-line:before {
  content: \"\\f072\";
}
.ri-repeat-fill:before {
  content: \"\\f073\";
}
.ri-repeat-line:before {
  content: \"\\f074\";
}
.ri-repeat-one-fill:before {
  content: \"\\f075\";
}
.ri-repeat-one-line:before {
  content: \"\\f076\";
}
.ri-reply-all-fill:before {
  content: \"\\f077\";
}
.ri-reply-all-line:before {
  content: \"\\f078\";
}
.ri-reply-fill:before {
  content: \"\\f079\";
}
.ri-reply-line:before {
  content: \"\\f07a\";
}
.ri-reserved-fill:before {
  content: \"\\f07b\";
}
.ri-reserved-line:before {
  content: \"\\f07c\";
}
.ri-rest-time-fill:before {
  content: \"\\f07d\";
}
.ri-rest-time-line:before {
  content: \"\\f07e\";
}
.ri-restart-fill:before {
  content: \"\\f07f\";
}
.ri-restart-line:before {
  content: \"\\f080\";
}
.ri-restaurant-2-fill:before {
  content: \"\\f081\";
}
.ri-restaurant-2-line:before {
  content: \"\\f082\";
}
.ri-restaurant-fill:before {
  content: \"\\f083\";
}
.ri-restaurant-line:before {
  content: \"\\f084\";
}
.ri-rewind-fill:before {
  content: \"\\f085\";
}
.ri-rewind-line:before {
  content: \"\\f086\";
}
.ri-rewind-mini-fill:before {
  content: \"\\f087\";
}
.ri-rewind-mini-line:before {
  content: \"\\f088\";
}
.ri-rhythm-fill:before {
  content: \"\\f089\";
}
.ri-rhythm-line:before {
  content: \"\\f08a\";
}
.ri-riding-fill:before {
  content: \"\\f08b\";
}
.ri-riding-line:before {
  content: \"\\f08c\";
}
.ri-road-map-fill:before {
  content: \"\\f08d\";
}
.ri-road-map-line:before {
  content: \"\\f08e\";
}
.ri-roadster-fill:before {
  content: \"\\f08f\";
}
.ri-roadster-line:before {
  content: \"\\f090\";
}
.ri-robot-fill:before {
  content: \"\\f091\";
}
.ri-robot-line:before {
  content: \"\\f092\";
}
.ri-rocket-2-fill:before {
  content: \"\\f093\";
}
.ri-rocket-2-line:before {
  content: \"\\f094\";
}
.ri-rocket-fill:before {
  content: \"\\f095\";
}
.ri-rocket-line:before {
  content: \"\\f096\";
}
.ri-rotate-lock-fill:before {
  content: \"\\f097\";
}
.ri-rotate-lock-line:before {
  content: \"\\f098\";
}
.ri-rounded-corner:before {
  content: \"\\f099\";
}
.ri-route-fill:before {
  content: \"\\f09a\";
}
.ri-route-line:before {
  content: \"\\f09b\";
}
.ri-router-fill:before {
  content: \"\\f09c\";
}
.ri-router-line:before {
  content: \"\\f09d\";
}
.ri-rss-fill:before {
  content: \"\\f09e\";
}
.ri-rss-line:before {
  content: \"\\f09f\";
}
.ri-ruler-2-fill:before {
  content: \"\\f0a0\";
}
.ri-ruler-2-line:before {
  content: \"\\f0a1\";
}
.ri-ruler-fill:before {
  content: \"\\f0a2\";
}
.ri-ruler-line:before {
  content: \"\\f0a3\";
}
.ri-run-fill:before {
  content: \"\\f0a4\";
}
.ri-run-line:before {
  content: \"\\f0a5\";
}
.ri-safari-fill:before {
  content: \"\\f0a6\";
}
.ri-safari-line:before {
  content: \"\\f0a7\";
}
.ri-safe-2-fill:before {
  content: \"\\f0a8\";
}
.ri-safe-2-line:before {
  content: \"\\f0a9\";
}
.ri-safe-fill:before {
  content: \"\\f0aa\";
}
.ri-safe-line:before {
  content: \"\\f0ab\";
}
.ri-sailboat-fill:before {
  content: \"\\f0ac\";
}
.ri-sailboat-line:before {
  content: \"\\f0ad\";
}
.ri-save-2-fill:before {
  content: \"\\f0ae\";
}
.ri-save-2-line:before {
  content: \"\\f0af\";
}
.ri-save-3-fill:before {
  content: \"\\f0b0\";
}
.ri-save-3-line:before {
  content: \"\\f0b1\";
}
.ri-save-fill:before {
  content: \"\\f0b2\";
}
.ri-save-line:before {
  content: \"\\f0b3\";
}
.ri-scales-2-fill:before {
  content: \"\\f0b4\";
}
.ri-scales-2-line:before {
  content: \"\\f0b5\";
}
.ri-scales-3-fill:before {
  content: \"\\f0b6\";
}
.ri-scales-3-line:before {
  content: \"\\f0b7\";
}
.ri-scales-fill:before {
  content: \"\\f0b8\";
}
.ri-scales-line:before {
  content: \"\\f0b9\";
}
.ri-scan-2-fill:before {
  content: \"\\f0ba\";
}
.ri-scan-2-line:before {
  content: \"\\f0bb\";
}
.ri-scan-fill:before {
  content: \"\\f0bc\";
}
.ri-scan-line:before {
  content: \"\\f0bd\";
}
.ri-scissors-2-fill:before {
  content: \"\\f0be\";
}
.ri-scissors-2-line:before {
  content: \"\\f0bf\";
}
.ri-scissors-cut-fill:before {
  content: \"\\f0c0\";
}
.ri-scissors-cut-line:before {
  content: \"\\f0c1\";
}
.ri-scissors-fill:before {
  content: \"\\f0c2\";
}
.ri-scissors-line:before {
  content: \"\\f0c3\";
}
.ri-screenshot-2-fill:before {
  content: \"\\f0c4\";
}
.ri-screenshot-2-line:before {
  content: \"\\f0c5\";
}
.ri-screenshot-fill:before {
  content: \"\\f0c6\";
}
.ri-screenshot-line:before {
  content: \"\\f0c7\";
}
.ri-sd-card-fill:before {
  content: \"\\f0c8\";
}
.ri-sd-card-line:before {
  content: \"\\f0c9\";
}
.ri-sd-card-mini-fill:before {
  content: \"\\f0ca\";
}
.ri-sd-card-mini-line:before {
  content: \"\\f0cb\";
}
.ri-search-2-fill:before {
  content: \"\\f0cc\";
}
.ri-search-2-line:before {
  content: \"\\f0cd\";
}
.ri-search-eye-fill:before {
  content: \"\\f0ce\";
}
.ri-search-eye-line:before {
  content: \"\\f0cf\";
}
.ri-search-fill:before {
  content: \"\\f0d0\";
}
.ri-search-line:before {
  content: \"\\f0d1\";
}
.ri-secure-payment-fill:before {
  content: \"\\f0d2\";
}
.ri-secure-payment-line:before {
  content: \"\\f0d3\";
}
.ri-seedling-fill:before {
  content: \"\\f0d4\";
}
.ri-seedling-line:before {
  content: \"\\f0d5\";
}
.ri-send-backward:before {
  content: \"\\f0d6\";
}
.ri-send-plane-2-fill:before {
  content: \"\\f0d7\";
}
.ri-send-plane-2-line:before {
  content: \"\\f0d8\";
}
.ri-send-plane-fill:before {
  content: \"\\f0d9\";
}
.ri-send-plane-line:before {
  content: \"\\f0da\";
}
.ri-send-to-back:before {
  content: \"\\f0db\";
}
.ri-sensor-fill:before {
  content: \"\\f0dc\";
}
.ri-sensor-line:before {
  content: \"\\f0dd\";
}
.ri-separator:before {
  content: \"\\f0de\";
}
.ri-server-fill:before {
  content: \"\\f0df\";
}
.ri-server-line:before {
  content: \"\\f0e0\";
}
.ri-service-fill:before {
  content: \"\\f0e1\";
}
.ri-service-line:before {
  content: \"\\f0e2\";
}
.ri-settings-2-fill:before {
  content: \"\\f0e3\";
}
.ri-settings-2-line:before {
  content: \"\\f0e4\";
}
.ri-settings-3-fill:before {
  content: \"\\f0e5\";
}
.ri-settings-3-line:before {
  content: \"\\f0e6\";
}
.ri-settings-4-fill:before {
  content: \"\\f0e7\";
}
.ri-settings-4-line:before {
  content: \"\\f0e8\";
}
.ri-settings-5-fill:before {
  content: \"\\f0e9\";
}
.ri-settings-5-line:before {
  content: \"\\f0ea\";
}
.ri-settings-6-fill:before {
  content: \"\\f0eb\";
}
.ri-settings-6-line:before {
  content: \"\\f0ec\";
}
.ri-settings-fill:before {
  content: \"\\f0ed\";
}
.ri-settings-line:before {
  content: \"\\f0ee\";
}
.ri-shape-2-fill:before {
  content: \"\\f0ef\";
}
.ri-shape-2-line:before {
  content: \"\\f0f0\";
}
.ri-shape-fill:before {
  content: \"\\f0f1\";
}
.ri-shape-line:before {
  content: \"\\f0f2\";
}
.ri-share-box-fill:before {
  content: \"\\f0f3\";
}
.ri-share-box-line:before {
  content: \"\\f0f4\";
}
.ri-share-circle-fill:before {
  content: \"\\f0f5\";
}
.ri-share-circle-line:before {
  content: \"\\f0f6\";
}
.ri-share-fill:before {
  content: \"\\f0f7\";
}
.ri-share-forward-2-fill:before {
  content: \"\\f0f8\";
}
.ri-share-forward-2-line:before {
  content: \"\\f0f9\";
}
.ri-share-forward-box-fill:before {
  content: \"\\f0fa\";
}
.ri-share-forward-box-line:before {
  content: \"\\f0fb\";
}
.ri-share-forward-fill:before {
  content: \"\\f0fc\";
}
.ri-share-forward-line:before {
  content: \"\\f0fd\";
}
.ri-share-line:before {
  content: \"\\f0fe\";
}
.ri-shield-check-fill:before {
  content: \"\\f0ff\";
}
.ri-shield-check-line:before {
  content: \"\\f100\";
}
.ri-shield-cross-fill:before {
  content: \"\\f101\";
}
.ri-shield-cross-line:before {
  content: \"\\f102\";
}
.ri-shield-fill:before {
  content: \"\\f103\";
}
.ri-shield-flash-fill:before {
  content: \"\\f104\";
}
.ri-shield-flash-line:before {
  content: \"\\f105\";
}
.ri-shield-keyhole-fill:before {
  content: \"\\f106\";
}
.ri-shield-keyhole-line:before {
  content: \"\\f107\";
}
.ri-shield-line:before {
  content: \"\\f108\";
}
.ri-shield-star-fill:before {
  content: \"\\f109\";
}
.ri-shield-star-line:before {
  content: \"\\f10a\";
}
.ri-shield-user-fill:before {
  content: \"\\f10b\";
}
.ri-shield-user-line:before {
  content: \"\\f10c\";
}
.ri-ship-2-fill:before {
  content: \"\\f10d\";
}
.ri-ship-2-line:before {
  content: \"\\f10e\";
}
.ri-ship-fill:before {
  content: \"\\f10f\";
}
.ri-ship-line:before {
  content: \"\\f110\";
}
.ri-shirt-fill:before {
  content: \"\\f111\";
}
.ri-shirt-line:before {
  content: \"\\f112\";
}
.ri-shopping-bag-2-fill:before {
  content: \"\\f113\";
}
.ri-shopping-bag-2-line:before {
  content: \"\\f114\";
}
.ri-shopping-bag-3-fill:before {
  content: \"\\f115\";
}
.ri-shopping-bag-3-line:before {
  content: \"\\f116\";
}
.ri-shopping-bag-fill:before {
  content: \"\\f117\";
}
.ri-shopping-bag-line:before {
  content: \"\\f118\";
}
.ri-shopping-basket-2-fill:before {
  content: \"\\f119\";
}
.ri-shopping-basket-2-line:before {
  content: \"\\f11a\";
}
.ri-shopping-basket-fill:before {
  content: \"\\f11b\";
}
.ri-shopping-basket-line:before {
  content: \"\\f11c\";
}
.ri-shopping-cart-2-fill:before {
  content: \"\\f11d\";
}
.ri-shopping-cart-2-line:before {
  content: \"\\f11e\";
}
.ri-shopping-cart-fill:before {
  content: \"\\f11f\";
}
.ri-shopping-cart-line:before {
  content: \"\\f120\";
}
.ri-showers-fill:before {
  content: \"\\f121\";
}
.ri-showers-line:before {
  content: \"\\f122\";
}
.ri-shuffle-fill:before {
  content: \"\\f123\";
}
.ri-shuffle-line:before {
  content: \"\\f124\";
}
.ri-shut-down-fill:before {
  content: \"\\f125\";
}
.ri-shut-down-line:before {
  content: \"\\f126\";
}
.ri-side-bar-fill:before {
  content: \"\\f127\";
}
.ri-side-bar-line:before {
  content: \"\\f128\";
}
.ri-signal-tower-fill:before {
  content: \"\\f129\";
}
.ri-signal-tower-line:before {
  content: \"\\f12a\";
}
.ri-signal-wifi-1-fill:before {
  content: \"\\f12b\";
}
.ri-signal-wifi-1-line:before {
  content: \"\\f12c\";
}
.ri-signal-wifi-2-fill:before {
  content: \"\\f12d\";
}
.ri-signal-wifi-2-line:before {
  content: \"\\f12e\";
}
.ri-signal-wifi-3-fill:before {
  content: \"\\f12f\";
}
.ri-signal-wifi-3-line:before {
  content: \"\\f130\";
}
.ri-signal-wifi-error-fill:before {
  content: \"\\f131\";
}
.ri-signal-wifi-error-line:before {
  content: \"\\f132\";
}
.ri-signal-wifi-fill:before {
  content: \"\\f133\";
}
.ri-signal-wifi-line:before {
  content: \"\\f134\";
}
.ri-signal-wifi-off-fill:before {
  content: \"\\f135\";
}
.ri-signal-wifi-off-line:before {
  content: \"\\f136\";
}
.ri-sim-card-2-fill:before {
  content: \"\\f137\";
}
.ri-sim-card-2-line:before {
  content: \"\\f138\";
}
.ri-sim-card-fill:before {
  content: \"\\f139\";
}
.ri-sim-card-line:before {
  content: \"\\f13a\";
}
.ri-single-quotes-l:before {
  content: \"\\f13b\";
}
.ri-single-quotes-r:before {
  content: \"\\f13c\";
}
.ri-sip-fill:before {
  content: \"\\f13d\";
}
.ri-sip-line:before {
  content: \"\\f13e\";
}
.ri-skip-back-fill:before {
  content: \"\\f13f\";
}
.ri-skip-back-line:before {
  content: \"\\f140\";
}
.ri-skip-back-mini-fill:before {
  content: \"\\f141\";
}
.ri-skip-back-mini-line:before {
  content: \"\\f142\";
}
.ri-skip-forward-fill:before {
  content: \"\\f143\";
}
.ri-skip-forward-line:before {
  content: \"\\f144\";
}
.ri-skip-forward-mini-fill:before {
  content: \"\\f145\";
}
.ri-skip-forward-mini-line:before {
  content: \"\\f146\";
}
.ri-skull-2-fill:before {
  content: \"\\f147\";
}
.ri-skull-2-line:before {
  content: \"\\f148\";
}
.ri-skull-fill:before {
  content: \"\\f149\";
}
.ri-skull-line:before {
  content: \"\\f14a\";
}
.ri-skype-fill:before {
  content: \"\\f14b\";
}
.ri-skype-line:before {
  content: \"\\f14c\";
}
.ri-slack-fill:before {
  content: \"\\f14d\";
}
.ri-slack-line:before {
  content: \"\\f14e\";
}
.ri-slice-fill:before {
  content: \"\\f14f\";
}
.ri-slice-line:before {
  content: \"\\f150\";
}
.ri-slideshow-2-fill:before {
  content: \"\\f151\";
}
.ri-slideshow-2-line:before {
  content: \"\\f152\";
}
.ri-slideshow-3-fill:before {
  content: \"\\f153\";
}
.ri-slideshow-3-line:before {
  content: \"\\f154\";
}
.ri-slideshow-4-fill:before {
  content: \"\\f155\";
}
.ri-slideshow-4-line:before {
  content: \"\\f156\";
}
.ri-slideshow-fill:before {
  content: \"\\f157\";
}
.ri-slideshow-line:before {
  content: \"\\f158\";
}
.ri-smartphone-fill:before {
  content: \"\\f159\";
}
.ri-smartphone-line:before {
  content: \"\\f15a\";
}
.ri-snapchat-fill:before {
  content: \"\\f15b\";
}
.ri-snapchat-line:before {
  content: \"\\f15c\";
}
.ri-snowy-fill:before {
  content: \"\\f15d\";
}
.ri-snowy-line:before {
  content: \"\\f15e\";
}
.ri-sort-asc:before {
  content: \"\\f15f\";
}
.ri-sort-desc:before {
  content: \"\\f160\";
}
.ri-sound-module-fill:before {
  content: \"\\f161\";
}
.ri-sound-module-line:before {
  content: \"\\f162\";
}
.ri-soundcloud-fill:before {
  content: \"\\f163\";
}
.ri-soundcloud-line:before {
  content: \"\\f164\";
}
.ri-space-ship-fill:before {
  content: \"\\f165\";
}
.ri-space-ship-line:before {
  content: \"\\f166\";
}
.ri-space:before {
  content: \"\\f167\";
}
.ri-spam-2-fill:before {
  content: \"\\f168\";
}
.ri-spam-2-line:before {
  content: \"\\f169\";
}
.ri-spam-3-fill:before {
  content: \"\\f16a\";
}
.ri-spam-3-line:before {
  content: \"\\f16b\";
}
.ri-spam-fill:before {
  content: \"\\f16c\";
}
.ri-spam-line:before {
  content: \"\\f16d\";
}
.ri-speaker-2-fill:before {
  content: \"\\f16e\";
}
.ri-speaker-2-line:before {
  content: \"\\f16f\";
}
.ri-speaker-3-fill:before {
  content: \"\\f170\";
}
.ri-speaker-3-line:before {
  content: \"\\f171\";
}
.ri-speaker-fill:before {
  content: \"\\f172\";
}
.ri-speaker-line:before {
  content: \"\\f173\";
}
.ri-spectrum-fill:before {
  content: \"\\f174\";
}
.ri-spectrum-line:before {
  content: \"\\f175\";
}
.ri-speed-fill:before {
  content: \"\\f176\";
}
.ri-speed-line:before {
  content: \"\\f177\";
}
.ri-speed-mini-fill:before {
  content: \"\\f178\";
}
.ri-speed-mini-line:before {
  content: \"\\f179\";
}
.ri-split-cells-horizontal:before {
  content: \"\\f17a\";
}
.ri-split-cells-vertical:before {
  content: \"\\f17b\";
}
.ri-spotify-fill:before {
  content: \"\\f17c\";
}
.ri-spotify-line:before {
  content: \"\\f17d\";
}
.ri-spy-fill:before {
  content: \"\\f17e\";
}
.ri-spy-line:before {
  content: \"\\f17f\";
}
.ri-stack-fill:before {
  content: \"\\f180\";
}
.ri-stack-line:before {
  content: \"\\f181\";
}
.ri-stack-overflow-fill:before {
  content: \"\\f182\";
}
.ri-stack-overflow-line:before {
  content: \"\\f183\";
}
.ri-stackshare-fill:before {
  content: \"\\f184\";
}
.ri-stackshare-line:before {
  content: \"\\f185\";
}
.ri-star-fill:before {
  content: \"\\f186\";
}
.ri-star-half-fill:before {
  content: \"\\f187\";
}
.ri-star-half-line:before {
  content: \"\\f188\";
}
.ri-star-half-s-fill:before {
  content: \"\\f189\";
}
.ri-star-half-s-line:before {
  content: \"\\f18a\";
}
.ri-star-line:before {
  content: \"\\f18b\";
}
.ri-star-s-fill:before {
  content: \"\\f18c\";
}
.ri-star-s-line:before {
  content: \"\\f18d\";
}
.ri-star-smile-fill:before {
  content: \"\\f18e\";
}
.ri-star-smile-line:before {
  content: \"\\f18f\";
}
.ri-steam-fill:before {
  content: \"\\f190\";
}
.ri-steam-line:before {
  content: \"\\f191\";
}
.ri-steering-2-fill:before {
  content: \"\\f192\";
}
.ri-steering-2-line:before {
  content: \"\\f193\";
}
.ri-steering-fill:before {
  content: \"\\f194\";
}
.ri-steering-line:before {
  content: \"\\f195\";
}
.ri-stethoscope-fill:before {
  content: \"\\f196\";
}
.ri-stethoscope-line:before {
  content: \"\\f197\";
}
.ri-sticky-note-2-fill:before {
  content: \"\\f198\";
}
.ri-sticky-note-2-line:before {
  content: \"\\f199\";
}
.ri-sticky-note-fill:before {
  content: \"\\f19a\";
}
.ri-sticky-note-line:before {
  content: \"\\f19b\";
}
.ri-stock-fill:before {
  content: \"\\f19c\";
}
.ri-stock-line:before {
  content: \"\\f19d\";
}
.ri-stop-circle-fill:before {
  content: \"\\f19e\";
}
.ri-stop-circle-line:before {
  content: \"\\f19f\";
}
.ri-stop-fill:before {
  content: \"\\f1a0\";
}
.ri-stop-line:before {
  content: \"\\f1a1\";
}
.ri-stop-mini-fill:before {
  content: \"\\f1a2\";
}
.ri-stop-mini-line:before {
  content: \"\\f1a3\";
}
.ri-store-2-fill:before {
  content: \"\\f1a4\";
}
.ri-store-2-line:before {
  content: \"\\f1a5\";
}
.ri-store-3-fill:before {
  content: \"\\f1a6\";
}
.ri-store-3-line:before {
  content: \"\\f1a7\";
}
.ri-store-fill:before {
  content: \"\\f1a8\";
}
.ri-store-line:before {
  content: \"\\f1a9\";
}
.ri-strikethrough-2:before {
  content: \"\\f1aa\";
}
.ri-strikethrough:before {
  content: \"\\f1ab\";
}
.ri-subscript-2:before {
  content: \"\\f1ac\";
}
.ri-subscript:before {
  content: \"\\f1ad\";
}
.ri-subtract-fill:before {
  content: \"\\f1ae\";
}
.ri-subtract-line:before {
  content: \"\\f1af\";
}
.ri-subway-fill:before {
  content: \"\\f1b0\";
}
.ri-subway-line:before {
  content: \"\\f1b1\";
}
.ri-subway-wifi-fill:before {
  content: \"\\f1b2\";
}
.ri-subway-wifi-line:before {
  content: \"\\f1b3\";
}
.ri-suitcase-2-fill:before {
  content: \"\\f1b4\";
}
.ri-suitcase-2-line:before {
  content: \"\\f1b5\";
}
.ri-suitcase-3-fill:before {
  content: \"\\f1b6\";
}
.ri-suitcase-3-line:before {
  content: \"\\f1b7\";
}
.ri-suitcase-fill:before {
  content: \"\\f1b8\";
}
.ri-suitcase-line:before {
  content: \"\\f1b9\";
}
.ri-sun-cloudy-fill:before {
  content: \"\\f1ba\";
}
.ri-sun-cloudy-line:before {
  content: \"\\f1bb\";
}
.ri-sun-fill:before {
  content: \"\\f1bc\";
}
.ri-sun-foggy-fill:before {
  content: \"\\f1bd\";
}
.ri-sun-foggy-line:before {
  content: \"\\f1be\";
}
.ri-sun-line:before {
  content: \"\\f1bf\";
}
.ri-superscript-2:before {
  content: \"\\f1c0\";
}
.ri-superscript:before {
  content: \"\\f1c1\";
}
.ri-surgical-mask-fill:before {
  content: \"\\f1c2\";
}
.ri-surgical-mask-line:before {
  content: \"\\f1c3\";
}
.ri-surround-sound-fill:before {
  content: \"\\f1c4\";
}
.ri-surround-sound-line:before {
  content: \"\\f1c5\";
}
.ri-survey-fill:before {
  content: \"\\f1c6\";
}
.ri-survey-line:before {
  content: \"\\f1c7\";
}
.ri-swap-box-fill:before {
  content: \"\\f1c8\";
}
.ri-swap-box-line:before {
  content: \"\\f1c9\";
}
.ri-swap-fill:before {
  content: \"\\f1ca\";
}
.ri-swap-line:before {
  content: \"\\f1cb\";
}
.ri-switch-fill:before {
  content: \"\\f1cc\";
}
.ri-switch-line:before {
  content: \"\\f1cd\";
}
.ri-sword-fill:before {
  content: \"\\f1ce\";
}
.ri-sword-line:before {
  content: \"\\f1cf\";
}
.ri-syringe-fill:before {
  content: \"\\f1d0\";
}
.ri-syringe-line:before {
  content: \"\\f1d1\";
}
.ri-t-box-fill:before {
  content: \"\\f1d2\";
}
.ri-t-box-line:before {
  content: \"\\f1d3\";
}
.ri-t-shirt-2-fill:before {
  content: \"\\f1d4\";
}
.ri-t-shirt-2-line:before {
  content: \"\\f1d5\";
}
.ri-t-shirt-air-fill:before {
  content: \"\\f1d6\";
}
.ri-t-shirt-air-line:before {
  content: \"\\f1d7\";
}
.ri-t-shirt-fill:before {
  content: \"\\f1d8\";
}
.ri-t-shirt-line:before {
  content: \"\\f1d9\";
}
.ri-table-2:before {
  content: \"\\f1da\";
}
.ri-table-alt-fill:before {
  content: \"\\f1db\";
}
.ri-table-alt-line:before {
  content: \"\\f1dc\";
}
.ri-table-fill:before {
  content: \"\\f1dd\";
}
.ri-table-line:before {
  content: \"\\f1de\";
}
.ri-tablet-fill:before {
  content: \"\\f1df\";
}
.ri-tablet-line:before {
  content: \"\\f1e0\";
}
.ri-takeaway-fill:before {
  content: \"\\f1e1\";
}
.ri-takeaway-line:before {
  content: \"\\f1e2\";
}
.ri-taobao-fill:before {
  content: \"\\f1e3\";
}
.ri-taobao-line:before {
  content: \"\\f1e4\";
}
.ri-tape-fill:before {
  content: \"\\f1e5\";
}
.ri-tape-line:before {
  content: \"\\f1e6\";
}
.ri-task-fill:before {
  content: \"\\f1e7\";
}
.ri-task-line:before {
  content: \"\\f1e8\";
}
.ri-taxi-fill:before {
  content: \"\\f1e9\";
}
.ri-taxi-line:before {
  content: \"\\f1ea\";
}
.ri-taxi-wifi-fill:before {
  content: \"\\f1eb\";
}
.ri-taxi-wifi-line:before {
  content: \"\\f1ec\";
}
.ri-team-fill:before {
  content: \"\\f1ed\";
}
.ri-team-line:before {
  content: \"\\f1ee\";
}
.ri-telegram-fill:before {
  content: \"\\f1ef\";
}
.ri-telegram-line:before {
  content: \"\\f1f0\";
}
.ri-temp-cold-fill:before {
  content: \"\\f1f1\";
}
.ri-temp-cold-line:before {
  content: \"\\f1f2\";
}
.ri-temp-hot-fill:before {
  content: \"\\f1f3\";
}
.ri-temp-hot-line:before {
  content: \"\\f1f4\";
}
.ri-terminal-box-fill:before {
  content: \"\\f1f5\";
}
.ri-terminal-box-line:before {
  content: \"\\f1f6\";
}
.ri-terminal-fill:before {
  content: \"\\f1f7\";
}
.ri-terminal-line:before {
  content: \"\\f1f8\";
}
.ri-terminal-window-fill:before {
  content: \"\\f1f9\";
}
.ri-terminal-window-line:before {
  content: \"\\f1fa\";
}
.ri-test-tube-fill:before {
  content: \"\\f1fb\";
}
.ri-test-tube-line:before {
  content: \"\\f1fc\";
}
.ri-text-direction-l:before {
  content: \"\\f1fd\";
}
.ri-text-direction-r:before {
  content: \"\\f1fe\";
}
.ri-text-spacing:before {
  content: \"\\f1ff\";
}
.ri-text-wrap:before {
  content: \"\\f200\";
}
.ri-text:before {
  content: \"\\f201\";
}
.ri-thermometer-fill:before {
  content: \"\\f202\";
}
.ri-thermometer-line:before {
  content: \"\\f203\";
}
.ri-thumb-down-fill:before {
  content: \"\\f204\";
}
.ri-thumb-down-line:before {
  content: \"\\f205\";
}
.ri-thumb-up-fill:before {
  content: \"\\f206\";
}
.ri-thumb-up-line:before {
  content: \"\\f207\";
}
.ri-thunderstorms-fill:before {
  content: \"\\f208\";
}
.ri-thunderstorms-line:before {
  content: \"\\f209\";
}
.ri-ticket-2-fill:before {
  content: \"\\f20a\";
}
.ri-ticket-2-line:before {
  content: \"\\f20b\";
}
.ri-ticket-fill:before {
  content: \"\\f20c\";
}
.ri-ticket-line:before {
  content: \"\\f20d\";
}
.ri-time-fill:before {
  content: \"\\f20e\";
}
.ri-time-line:before {
  content: \"\\f20f\";
}
.ri-timer-2-fill:before {
  content: \"\\f210\";
}
.ri-timer-2-line:before {
  content: \"\\f211\";
}
.ri-timer-fill:before {
  content: \"\\f212\";
}
.ri-timer-flash-fill:before {
  content: \"\\f213\";
}
.ri-timer-flash-line:before {
  content: \"\\f214\";
}
.ri-timer-line:before {
  content: \"\\f215\";
}
.ri-todo-fill:before {
  content: \"\\f216\";
}
.ri-todo-line:before {
  content: \"\\f217\";
}
.ri-toggle-fill:before {
  content: \"\\f218\";
}
.ri-toggle-line:before {
  content: \"\\f219\";
}
.ri-tools-fill:before {
  content: \"\\f21a\";
}
.ri-tools-line:before {
  content: \"\\f21b\";
}
.ri-tornado-fill:before {
  content: \"\\f21c\";
}
.ri-tornado-line:before {
  content: \"\\f21d\";
}
.ri-trademark-fill:before {
  content: \"\\f21e\";
}
.ri-trademark-line:before {
  content: \"\\f21f\";
}
.ri-traffic-light-fill:before {
  content: \"\\f220\";
}
.ri-traffic-light-line:before {
  content: \"\\f221\";
}
.ri-train-fill:before {
  content: \"\\f222\";
}
.ri-train-line:before {
  content: \"\\f223\";
}
.ri-train-wifi-fill:before {
  content: \"\\f224\";
}
.ri-train-wifi-line:before {
  content: \"\\f225\";
}
.ri-translate-2:before {
  content: \"\\f226\";
}
.ri-translate:before {
  content: \"\\f227\";
}
.ri-travesti-fill:before {
  content: \"\\f228\";
}
.ri-travesti-line:before {
  content: \"\\f229\";
}
.ri-treasure-map-fill:before {
  content: \"\\f22a\";
}
.ri-treasure-map-line:before {
  content: \"\\f22b\";
}
.ri-trello-fill:before {
  content: \"\\f22c\";
}
.ri-trello-line:before {
  content: \"\\f22d\";
}
.ri-trophy-fill:before {
  content: \"\\f22e\";
}
.ri-trophy-line:before {
  content: \"\\f22f\";
}
.ri-truck-fill:before {
  content: \"\\f230\";
}
.ri-truck-line:before {
  content: \"\\f231\";
}
.ri-tumblr-fill:before {
  content: \"\\f232\";
}
.ri-tumblr-line:before {
  content: \"\\f233\";
}
.ri-tv-2-fill:before {
  content: \"\\f234\";
}
.ri-tv-2-line:before {
  content: \"\\f235\";
}
.ri-tv-fill:before {
  content: \"\\f236\";
}
.ri-tv-line:before {
  content: \"\\f237\";
}
.ri-twitch-fill:before {
  content: \"\\f238\";
}
.ri-twitch-line:before {
  content: \"\\f239\";
}
.ri-twitter-fill:before {
  content: \"\\f23a\";
}
.ri-twitter-line:before {
  content: \"\\f23b\";
}
.ri-typhoon-fill:before {
  content: \"\\f23c\";
}
.ri-typhoon-line:before {
  content: \"\\f23d\";
}
.ri-u-disk-fill:before {
  content: \"\\f23e\";
}
.ri-u-disk-line:before {
  content: \"\\f23f\";
}
.ri-ubuntu-fill:before {
  content: \"\\f240\";
}
.ri-ubuntu-line:before {
  content: \"\\f241\";
}
.ri-umbrella-fill:before {
  content: \"\\f242\";
}
.ri-umbrella-line:before {
  content: \"\\f243\";
}
.ri-underline:before {
  content: \"\\f244\";
}
.ri-uninstall-fill:before {
  content: \"\\f245\";
}
.ri-uninstall-line:before {
  content: \"\\f246\";
}
.ri-unsplash-fill:before {
  content: \"\\f247\";
}
.ri-unsplash-line:before {
  content: \"\\f248\";
}
.ri-upload-2-fill:before {
  content: \"\\f249\";
}
.ri-upload-2-line:before {
  content: \"\\f24a\";
}
.ri-upload-cloud-2-fill:before {
  content: \"\\f24b\";
}
.ri-upload-cloud-2-line:before {
  content: \"\\f24c\";
}
.ri-upload-cloud-fill:before {
  content: \"\\f24d\";
}
.ri-upload-cloud-line:before {
  content: \"\\f24e\";
}
.ri-upload-fill:before {
  content: \"\\f24f\";
}
.ri-upload-line:before {
  content: \"\\f250\";
}
.ri-usb-fill:before {
  content: \"\\f251\";
}
.ri-usb-line:before {
  content: \"\\f252\";
}
.ri-user-2-fill:before {
  content: \"\\f253\";
}
.ri-user-2-line:before {
  content: \"\\f254\";
}
.ri-user-3-fill:before {
  content: \"\\f255\";
}
.ri-user-3-line:before {
  content: \"\\f256\";
}
.ri-user-4-fill:before {
  content: \"\\f257\";
}
.ri-user-4-line:before {
  content: \"\\f258\";
}
.ri-user-5-fill:before {
  content: \"\\f259\";
}
.ri-user-5-line:before {
  content: \"\\f25a\";
}
.ri-user-6-fill:before {
  content: \"\\f25b\";
}
.ri-user-6-line:before {
  content: \"\\f25c\";
}
.ri-user-add-fill:before {
  content: \"\\f25d\";
}
.ri-user-add-line:before {
  content: \"\\f25e\";
}
.ri-user-fill:before {
  content: \"\\f25f\";
}
.ri-user-follow-fill:before {
  content: \"\\f260\";
}
.ri-user-follow-line:before {
  content: \"\\f261\";
}
.ri-user-heart-fill:before {
  content: \"\\f262\";
}
.ri-user-heart-line:before {
  content: \"\\f263\";
}
.ri-user-line:before {
  content: \"\\f264\";
}
.ri-user-location-fill:before {
  content: \"\\f265\";
}
.ri-user-location-line:before {
  content: \"\\f266\";
}
.ri-user-received-2-fill:before {
  content: \"\\f267\";
}
.ri-user-received-2-line:before {
  content: \"\\f268\";
}
.ri-user-received-fill:before {
  content: \"\\f269\";
}
.ri-user-received-line:before {
  content: \"\\f26a\";
}
.ri-user-search-fill:before {
  content: \"\\f26b\";
}
.ri-user-search-line:before {
  content: \"\\f26c\";
}
.ri-user-settings-fill:before {
  content: \"\\f26d\";
}
.ri-user-settings-line:before {
  content: \"\\f26e\";
}
.ri-user-shared-2-fill:before {
  content: \"\\f26f\";
}
.ri-user-shared-2-line:before {
  content: \"\\f270\";
}
.ri-user-shared-fill:before {
  content: \"\\f271\";
}
.ri-user-shared-line:before {
  content: \"\\f272\";
}
.ri-user-smile-fill:before {
  content: \"\\f273\";
}
.ri-user-smile-line:before {
  content: \"\\f274\";
}
.ri-user-star-fill:before {
  content: \"\\f275\";
}
.ri-user-star-line:before {
  content: \"\\f276\";
}
.ri-user-unfollow-fill:before {
  content: \"\\f277\";
}
.ri-user-unfollow-line:before {
  content: \"\\f278\";
}
.ri-user-voice-fill:before {
  content: \"\\f279\";
}
.ri-user-voice-line:before {
  content: \"\\f27a\";
}
.ri-video-add-fill:before {
  content: \"\\f27b\";
}
.ri-video-add-line:before {
  content: \"\\f27c\";
}
.ri-video-chat-fill:before {
  content: \"\\f27d\";
}
.ri-video-chat-line:before {
  content: \"\\f27e\";
}
.ri-video-download-fill:before {
  content: \"\\f27f\";
}
.ri-video-download-line:before {
  content: \"\\f280\";
}
.ri-video-fill:before {
  content: \"\\f281\";
}
.ri-video-line:before {
  content: \"\\f282\";
}
.ri-video-upload-fill:before {
  content: \"\\f283\";
}
.ri-video-upload-line:before {
  content: \"\\f284\";
}
.ri-vidicon-2-fill:before {
  content: \"\\f285\";
}
.ri-vidicon-2-line:before {
  content: \"\\f286\";
}
.ri-vidicon-fill:before {
  content: \"\\f287\";
}
.ri-vidicon-line:before {
  content: \"\\f288\";
}
.ri-vimeo-fill:before {
  content: \"\\f289\";
}
.ri-vimeo-line:before {
  content: \"\\f28a\";
}
.ri-vip-crown-2-fill:before {
  content: \"\\f28b\";
}
.ri-vip-crown-2-line:before {
  content: \"\\f28c\";
}
.ri-vip-crown-fill:before {
  content: \"\\f28d\";
}
.ri-vip-crown-line:before {
  content: \"\\f28e\";
}
.ri-vip-diamond-fill:before {
  content: \"\\f28f\";
}
.ri-vip-diamond-line:before {
  content: \"\\f290\";
}
.ri-vip-fill:before {
  content: \"\\f291\";
}
.ri-vip-line:before {
  content: \"\\f292\";
}
.ri-virus-fill:before {
  content: \"\\f293\";
}
.ri-virus-line:before {
  content: \"\\f294\";
}
.ri-visa-fill:before {
  content: \"\\f295\";
}
.ri-visa-line:before {
  content: \"\\f296\";
}
.ri-voice-recognition-fill:before {
  content: \"\\f297\";
}
.ri-voice-recognition-line:before {
  content: \"\\f298\";
}
.ri-voiceprint-fill:before {
  content: \"\\f299\";
}
.ri-voiceprint-line:before {
  content: \"\\f29a\";
}
.ri-volume-down-fill:before {
  content: \"\\f29b\";
}
.ri-volume-down-line:before {
  content: \"\\f29c\";
}
.ri-volume-mute-fill:before {
  content: \"\\f29d\";
}
.ri-volume-mute-line:before {
  content: \"\\f29e\";
}
.ri-volume-off-vibrate-fill:before {
  content: \"\\f29f\";
}
.ri-volume-off-vibrate-line:before {
  content: \"\\f2a0\";
}
.ri-volume-up-fill:before {
  content: \"\\f2a1\";
}
.ri-volume-up-line:before {
  content: \"\\f2a2\";
}
.ri-volume-vibrate-fill:before {
  content: \"\\f2a3\";
}
.ri-volume-vibrate-line:before {
  content: \"\\f2a4\";
}
.ri-vuejs-fill:before {
  content: \"\\f2a5\";
}
.ri-vuejs-line:before {
  content: \"\\f2a6\";
}
.ri-walk-fill:before {
  content: \"\\f2a7\";
}
.ri-walk-line:before {
  content: \"\\f2a8\";
}
.ri-wallet-2-fill:before {
  content: \"\\f2a9\";
}
.ri-wallet-2-line:before {
  content: \"\\f2aa\";
}
.ri-wallet-3-fill:before {
  content: \"\\f2ab\";
}
.ri-wallet-3-line:before {
  content: \"\\f2ac\";
}
.ri-wallet-fill:before {
  content: \"\\f2ad\";
}
.ri-wallet-line:before {
  content: \"\\f2ae\";
}
.ri-water-flash-fill:before {
  content: \"\\f2af\";
}
.ri-water-flash-line:before {
  content: \"\\f2b0\";
}
.ri-webcam-fill:before {
  content: \"\\f2b1\";
}
.ri-webcam-line:before {
  content: \"\\f2b2\";
}
.ri-wechat-2-fill:before {
  content: \"\\f2b3\";
}
.ri-wechat-2-line:before {
  content: \"\\f2b4\";
}
.ri-wechat-fill:before {
  content: \"\\f2b5\";
}
.ri-wechat-line:before {
  content: \"\\f2b6\";
}
.ri-wechat-pay-fill:before {
  content: \"\\f2b7\";
}
.ri-wechat-pay-line:before {
  content: \"\\f2b8\";
}
.ri-weibo-fill:before {
  content: \"\\f2b9\";
}
.ri-weibo-line:before {
  content: \"\\f2ba\";
}
.ri-whatsapp-fill:before {
  content: \"\\f2bb\";
}
.ri-whatsapp-line:before {
  content: \"\\f2bc\";
}
.ri-wheelchair-fill:before {
  content: \"\\f2bd\";
}
.ri-wheelchair-line:before {
  content: \"\\f2be\";
}
.ri-wifi-fill:before {
  content: \"\\f2bf\";
}
.ri-wifi-line:before {
  content: \"\\f2c0\";
}
.ri-wifi-off-fill:before {
  content: \"\\f2c1\";
}
.ri-wifi-off-line:before {
  content: \"\\f2c2\";
}
.ri-window-2-fill:before {
  content: \"\\f2c3\";
}
.ri-window-2-line:before {
  content: \"\\f2c4\";
}
.ri-window-fill:before {
  content: \"\\f2c5\";
}
.ri-window-line:before {
  content: \"\\f2c6\";
}
.ri-windows-fill:before {
  content: \"\\f2c7\";
}
.ri-windows-line:before {
  content: \"\\f2c8\";
}
.ri-windy-fill:before {
  content: \"\\f2c9\";
}
.ri-windy-line:before {
  content: \"\\f2ca\";
}
.ri-wireless-charging-fill:before {
  content: \"\\f2cb\";
}
.ri-wireless-charging-line:before {
  content: \"\\f2cc\";
}
.ri-women-fill:before {
  content: \"\\f2cd\";
}
.ri-women-line:before {
  content: \"\\f2ce\";
}
.ri-wubi-input:before {
  content: \"\\f2cf\";
}
.ri-xbox-fill:before {
  content: \"\\f2d0\";
}
.ri-xbox-line:before {
  content: \"\\f2d1\";
}
.ri-xing-fill:before {
  content: \"\\f2d2\";
}
.ri-xing-line:before {
  content: \"\\f2d3\";
}
.ri-youtube-fill:before {
  content: \"\\f2d4\";
}
.ri-youtube-line:before {
  content: \"\\f2d5\";
}
.ri-zcool-fill:before {
  content: \"\\f2d6\";
}
.ri-zcool-line:before {
  content: \"\\f2d7\";
}
.ri-zhihu-fill:before {
  content: \"\\f2d8\";
}
.ri-zhihu-line:before {
  content: \"\\f2d9\";
}
.ri-zoom-in-fill:before {
  content: \"\\f2da\";
}
.ri-zoom-in-line:before {
  content: \"\\f2db\";
}
.ri-zoom-out-fill:before {
  content: \"\\f2dc\";
}
.ri-zoom-out-line:before {
  content: \"\\f2dd\";
}
.ri-zzz-fill:before {
  content: \"\\f2de\";
}
.ri-zzz-line:before {
  content: \"\\f2df\";
}
.ri-arrow-down-double-fill:before {
  content: \"\\f2e0\";
}
.ri-arrow-down-double-line:before {
  content: \"\\f2e1\";
}
.ri-arrow-left-double-fill:before {
  content: \"\\f2e2\";
}
.ri-arrow-left-double-line:before {
  content: \"\\f2e3\";
}
.ri-arrow-right-double-fill:before {
  content: \"\\f2e4\";
}
.ri-arrow-right-double-line:before {
  content: \"\\f2e5\";
}
.ri-arrow-turn-back-fill:before {
  content: \"\\f2e6\";
}
.ri-arrow-turn-back-line:before {
  content: \"\\f2e7\";
}
.ri-arrow-turn-forward-fill:before {
  content: \"\\f2e8\";
}
.ri-arrow-turn-forward-line:before {
  content: \"\\f2e9\";
}
.ri-arrow-up-double-fill:before {
  content: \"\\f2ea\";
}
.ri-arrow-up-double-line:before {
  content: \"\\f2eb\";
}
.ri-bard-fill:before {
  content: \"\\f2ec\";
}
.ri-bard-line:before {
  content: \"\\f2ed\";
}
.ri-bootstrap-fill:before {
  content: \"\\f2ee\";
}
.ri-bootstrap-line:before {
  content: \"\\f2ef\";
}
.ri-box-1-fill:before {
  content: \"\\f2f0\";
}
.ri-box-1-line:before {
  content: \"\\f2f1\";
}
.ri-box-2-fill:before {
  content: \"\\f2f2\";
}
.ri-box-2-line:before {
  content: \"\\f2f3\";
}
.ri-box-3-fill:before {
  content: \"\\f2f4\";
}
.ri-box-3-line:before {
  content: \"\\f2f5\";
}
.ri-brain-fill:before {
  content: \"\\f2f6\";
}
.ri-brain-line:before {
  content: \"\\f2f7\";
}
.ri-candle-fill:before {
  content: \"\\f2f8\";
}
.ri-candle-line:before {
  content: \"\\f2f9\";
}
.ri-cash-fill:before {
  content: \"\\f2fa\";
}
.ri-cash-line:before {
  content: \"\\f2fb\";
}
.ri-contract-left-fill:before {
  content: \"\\f2fc\";
}
.ri-contract-left-line:before {
  content: \"\\f2fd\";
}
.ri-contract-left-right-fill:before {
  content: \"\\f2fe\";
}
.ri-contract-left-right-line:before {
  content: \"\\f2ff\";
}
.ri-contract-right-fill:before {
  content: \"\\f300\";
}
.ri-contract-right-line:before {
  content: \"\\f301\";
}
.ri-contract-up-down-fill:before {
  content: \"\\f302\";
}
.ri-contract-up-down-line:before {
  content: \"\\f303\";
}
.ri-copilot-fill:before {
  content: \"\\f304\";
}
.ri-copilot-line:before {
  content: \"\\f305\";
}
.ri-corner-down-left-fill:before {
  content: \"\\f306\";
}
.ri-corner-down-left-line:before {
  content: \"\\f307\";
}
.ri-corner-down-right-fill:before {
  content: \"\\f308\";
}
.ri-corner-down-right-line:before {
  content: \"\\f309\";
}
.ri-corner-left-down-fill:before {
  content: \"\\f30a\";
}
.ri-corner-left-down-line:before {
  content: \"\\f30b\";
}
.ri-corner-left-up-fill:before {
  content: \"\\f30c\";
}
.ri-corner-left-up-line:before {
  content: \"\\f30d\";
}
.ri-corner-right-down-fill:before {
  content: \"\\f30e\";
}
.ri-corner-right-down-line:before {
  content: \"\\f30f\";
}
.ri-corner-right-up-fill:before {
  content: \"\\f310\";
}
.ri-corner-right-up-line:before {
  content: \"\\f311\";
}
.ri-corner-up-left-double-fill:before {
  content: \"\\f312\";
}
.ri-corner-up-left-double-line:before {
  content: \"\\f313\";
}
.ri-corner-up-left-fill:before {
  content: \"\\f314\";
}
.ri-corner-up-left-line:before {
  content: \"\\f315\";
}
.ri-corner-up-right-double-fill:before {
  content: \"\\f316\";
}
.ri-corner-up-right-double-line:before {
  content: \"\\f317\";
}
.ri-corner-up-right-fill:before {
  content: \"\\f318\";
}
.ri-corner-up-right-line:before {
  content: \"\\f319\";
}
.ri-cross-fill:before {
  content: \"\\f31a\";
}
.ri-cross-line:before {
  content: \"\\f31b\";
}
.ri-edge-new-fill:before {
  content: \"\\f31c\";
}
.ri-edge-new-line:before {
  content: \"\\f31d\";
}
.ri-equal-fill:before {
  content: \"\\f31e\";
}
.ri-equal-line:before {
  content: \"\\f31f\";
}
.ri-expand-left-fill:before {
  content: \"\\f320\";
}
.ri-expand-left-line:before {
  content: \"\\f321\";
}
.ri-expand-left-right-fill:before {
  content: \"\\f322\";
}
.ri-expand-left-right-line:before {
  content: \"\\f323\";
}
.ri-expand-right-fill:before {
  content: \"\\f324\";
}
.ri-expand-right-line:before {
  content: \"\\f325\";
}
.ri-expand-up-down-fill:before {
  content: \"\\f326\";
}
.ri-expand-up-down-line:before {
  content: \"\\f327\";
}
.ri-flickr-fill:before {
  content: \"\\f328\";
}
.ri-flickr-line:before {
  content: \"\\f329\";
}
.ri-forward-10-fill:before {
  content: \"\\f32a\";
}
.ri-forward-10-line:before {
  content: \"\\f32b\";
}
.ri-forward-15-fill:before {
  content: \"\\f32c\";
}
.ri-forward-15-line:before {
  content: \"\\f32d\";
}
.ri-forward-30-fill:before {
  content: \"\\f32e\";
}
.ri-forward-30-line:before {
  content: \"\\f32f\";
}
.ri-forward-5-fill:before {
  content: \"\\f330\";
}
.ri-forward-5-line:before {
  content: \"\\f331\";
}
.ri-graduation-cap-fill:before {
  content: \"\\f332\";
}
.ri-graduation-cap-line:before {
  content: \"\\f333\";
}
.ri-home-office-fill:before {
  content: \"\\f334\";
}
.ri-home-office-line:before {
  content: \"\\f335\";
}
.ri-hourglass-2-fill:before {
  content: \"\\f336\";
}
.ri-hourglass-2-line:before {
  content: \"\\f337\";
}
.ri-hourglass-fill:before {
  content: \"\\f338\";
}
.ri-hourglass-line:before {
  content: \"\\f339\";
}
.ri-javascript-fill:before {
  content: \"\\f33a\";
}
.ri-javascript-line:before {
  content: \"\\f33b\";
}
.ri-loop-left-fill:before {
  content: \"\\f33c\";
}
.ri-loop-left-line:before {
  content: \"\\f33d\";
}
.ri-loop-right-fill:before {
  content: \"\\f33e\";
}
.ri-loop-right-line:before {
  content: \"\\f33f\";
}
.ri-memories-fill:before {
  content: \"\\f340\";
}
.ri-memories-line:before {
  content: \"\\f341\";
}
.ri-meta-fill:before {
  content: \"\\f342\";
}
.ri-meta-line:before {
  content: \"\\f343\";
}
.ri-microsoft-loop-fill:before {
  content: \"\\f344\";
}
.ri-microsoft-loop-line:before {
  content: \"\\f345\";
}
.ri-nft-fill:before {
  content: \"\\f346\";
}
.ri-nft-line:before {
  content: \"\\f347\";
}
.ri-notion-fill:before {
  content: \"\\f348\";
}
.ri-notion-line:before {
  content: \"\\f349\";
}
.ri-openai-fill:before {
  content: \"\\f34a\";
}
.ri-openai-line:before {
  content: \"\\f34b\";
}
.ri-overline:before {
  content: \"\\f34c\";
}
.ri-p2p-fill:before {
  content: \"\\f34d\";
}
.ri-p2p-line:before {
  content: \"\\f34e\";
}
.ri-presentation-fill:before {
  content: \"\\f34f\";
}
.ri-presentation-line:before {
  content: \"\\f350\";
}
.ri-replay-10-fill:before {
  content: \"\\f351\";
}
.ri-replay-10-line:before {
  content: \"\\f352\";
}
.ri-replay-15-fill:before {
  content: \"\\f353\";
}
.ri-replay-15-line:before {
  content: \"\\f354\";
}
.ri-replay-30-fill:before {
  content: \"\\f355\";
}
.ri-replay-30-line:before {
  content: \"\\f356\";
}
.ri-replay-5-fill:before {
  content: \"\\f357\";
}
.ri-replay-5-line:before {
  content: \"\\f358\";
}
.ri-school-fill:before {
  content: \"\\f359\";
}
.ri-school-line:before {
  content: \"\\f35a\";
}
.ri-shining-2-fill:before {
  content: \"\\f35b\";
}
.ri-shining-2-line:before {
  content: \"\\f35c\";
}
.ri-shining-fill:before {
  content: \"\\f35d\";
}
.ri-shining-line:before {
  content: \"\\f35e\";
}
.ri-sketching:before {
  content: \"\\f35f\";
}
.ri-skip-down-fill:before {
  content: \"\\f360\";
}
.ri-skip-down-line:before {
  content: \"\\f361\";
}
.ri-skip-left-fill:before {
  content: \"\\f362\";
}
.ri-skip-left-line:before {
  content: \"\\f363\";
}
.ri-skip-right-fill:before {
  content: \"\\f364\";
}
.ri-skip-right-line:before {
  content: \"\\f365\";
}
.ri-skip-up-fill:before {
  content: \"\\f366\";
}
.ri-skip-up-line:before {
  content: \"\\f367\";
}
.ri-slow-down-fill:before {
  content: \"\\f368\";
}
.ri-slow-down-line:before {
  content: \"\\f369\";
}
.ri-sparkling-2-fill:before {
  content: \"\\f36a\";
}
.ri-sparkling-2-line:before {
  content: \"\\f36b\";
}
.ri-sparkling-fill:before {
  content: \"\\f36c\";
}
.ri-sparkling-line:before {
  content: \"\\f36d\";
}
.ri-speak-fill:before {
  content: \"\\f36e\";
}
.ri-speak-line:before {
  content: \"\\f36f\";
}
.ri-speed-up-fill:before {
  content: \"\\f370\";
}
.ri-speed-up-line:before {
  content: \"\\f371\";
}
.ri-tiktok-fill:before {
  content: \"\\f372\";
}
.ri-tiktok-line:before {
  content: \"\\f373\";
}
.ri-token-swap-fill:before {
  content: \"\\f374\";
}
.ri-token-swap-line:before {
  content: \"\\f375\";
}
.ri-unpin-fill:before {
  content: \"\\f376\";
}
.ri-unpin-line:before {
  content: \"\\f377\";
}
.ri-wechat-channels-fill:before {
  content: \"\\f378\";
}
.ri-wechat-channels-line:before {
  content: \"\\f379\";
}
.ri-wordpress-fill:before {
  content: \"\\f37a\";
}
.ri-wordpress-line:before {
  content: \"\\f37b\";
}
.ri-blender-fill:before {
  content: \"\\f37c\";
}
.ri-blender-line:before {
  content: \"\\f37d\";
}
.ri-emoji-sticker-fill:before {
  content: \"\\f37e\";
}
.ri-emoji-sticker-line:before {
  content: \"\\f37f\";
}
.ri-git-close-pull-request-fill:before {
  content: \"\\f380\";
}
.ri-git-close-pull-request-line:before {
  content: \"\\f381\";
}
.ri-instance-fill:before {
  content: \"\\f382\";
}
.ri-instance-line:before {
  content: \"\\f383\";
}
.ri-megaphone-fill:before {
  content: \"\\f384\";
}
.ri-megaphone-line:before {
  content: \"\\f385\";
}
.ri-pass-expired-fill:before {
  content: \"\\f386\";
}
.ri-pass-expired-line:before {
  content: \"\\f387\";
}
.ri-pass-pending-fill:before {
  content: \"\\f388\";
}
.ri-pass-pending-line:before {
  content: \"\\f389\";
}
.ri-pass-valid-fill:before {
  content: \"\\f38a\";
}
.ri-pass-valid-line:before {
  content: \"\\f38b\";
}
.ri-ai-generate:before {
  content: \"\\f38c\";
}
.ri-calendar-close-fill:before {
  content: \"\\f38d\";
}
.ri-calendar-close-line:before {
  content: \"\\f38e\";
}
.ri-draggable:before {
  content: \"\\f38f\";
}
.ri-font-family:before {
  content: \"\\f390\";
}
.ri-font-mono:before {
  content: \"\\f391\";
}
.ri-font-sans-serif:before {
  content: \"\\f392\";
}
.ri-font-sans:before {
  content: \"\\f393\";
}
.ri-hard-drive-3-fill:before {
  content: \"\\f394\";
}
.ri-hard-drive-3-line:before {
  content: \"\\f395\";
}
.ri-kick-fill:before {
  content: \"\\f396\";
}
.ri-kick-line:before {
  content: \"\\f397\";
}
.ri-list-check-3:before {
  content: \"\\f398\";
}
.ri-list-indefinite:before {
  content: \"\\f399\";
}
.ri-list-ordered-2:before {
  content: \"\\f39a\";
}
.ri-list-radio:before {
  content: \"\\f39b\";
}
.ri-openbase-fill:before {
  content: \"\\f39c\";
}
.ri-openbase-line:before {
  content: \"\\f39d\";
}
.ri-planet-fill:before {
  content: \"\\f39e\";
}
.ri-planet-line:before {
  content: \"\\f39f\";
}
.ri-prohibited-fill:before {
  content: \"\\f3a0\";
}
.ri-prohibited-line:before {
  content: \"\\f3a1\";
}
.ri-quote-text:before {
  content: \"\\f3a2\";
}
.ri-seo-fill:before {
  content: \"\\f3a3\";
}
.ri-seo-line:before {
  content: \"\\f3a4\";
}
.ri-slash-commands:before {
  content: \"\\f3a5\";
}
.ri-archive-2-fill:before {
  content: \"\\f3a6\";
}
.ri-archive-2-line:before {
  content: \"\\f3a7\";
}
.ri-inbox-2-fill:before {
  content: \"\\f3a8\";
}
.ri-inbox-2-line:before {
  content: \"\\f3a9\";
}
.ri-shake-hands-fill:before {
  content: \"\\f3aa\";
}
.ri-shake-hands-line:before {
  content: \"\\f3ab\";
}
.ri-supabase-fill:before {
  content: \"\\f3ac\";
}
.ri-supabase-line:before {
  content: \"\\f3ad\";
}
.ri-water-percent-fill:before {
  content: \"\\f3ae\";
}
.ri-water-percent-line:before {
  content: \"\\f3af\";
}
.ri-yuque-fill:before {
  content: \"\\f3b0\";
}
.ri-yuque-line:before {
  content: \"\\f3b1\";
}
.ri-crosshair-2-fill:before {
  content: \"\\f3b2\";
}
.ri-crosshair-2-line:before {
  content: \"\\f3b3\";
}
.ri-crosshair-fill:before {
  content: \"\\f3b4\";
}
.ri-crosshair-line:before {
  content: \"\\f3b5\";
}
.ri-file-close-fill:before {
  content: \"\\f3b6\";
}
.ri-file-close-line:before {
  content: \"\\f3b7\";
}
.ri-infinity-fill:before {
  content: \"\\f3b8\";
}
.ri-infinity-line:before {
  content: \"\\f3b9\";
}
.ri-rfid-fill:before {
  content: \"\\f3ba\";
}
.ri-rfid-line:before {
  content: \"\\f3bb\";
}
.ri-slash-commands-2:before {
  content: \"\\f3bc\";
}
.ri-user-forbid-fill:before {
  content: \"\\f3bd\";
}
.ri-user-forbid-line:before {
  content: \"\\f3be\";
}
.ri-beer-fill:before {
  content: \"\\f3bf\";
}
.ri-beer-line:before {
  content: \"\\f3c0\";
}
.ri-circle-fill:before {
  content: \"\\f3c1\";
}
.ri-circle-line:before {
  content: \"\\f3c2\";
}
.ri-dropdown-list:before {
  content: \"\\f3c3\";
}
.ri-file-image-fill:before {
  content: \"\\f3c4\";
}
.ri-file-image-line:before {
  content: \"\\f3c5\";
}
.ri-file-pdf-2-fill:before {
  content: \"\\f3c6\";
}
.ri-file-pdf-2-line:before {
  content: \"\\f3c7\";
}
.ri-file-video-fill:before {
  content: \"\\f3c8\";
}
.ri-file-video-line:before {
  content: \"\\f3c9\";
}
.ri-folder-image-fill:before {
  content: \"\\f3ca\";
}
.ri-folder-image-line:before {
  content: \"\\f3cb\";
}
.ri-folder-video-fill:before {
  content: \"\\f3cc\";
}
.ri-folder-video-line:before {
  content: \"\\f3cd\";
}
.ri-hexagon-fill:before {
  content: \"\\f3ce\";
}
.ri-hexagon-line:before {
  content: \"\\f3cf\";
}
.ri-menu-search-fill:before {
  content: \"\\f3d0\";
}
.ri-menu-search-line:before {
  content: \"\\f3d1\";
}
.ri-octagon-fill:before {
  content: \"\\f3d2\";
}
.ri-octagon-line:before {
  content: \"\\f3d3\";
}
.ri-pentagon-fill:before {
  content: \"\\f3d4\";
}
.ri-pentagon-line:before {
  content: \"\\f3d5\";
}
.ri-rectangle-fill:before {
  content: \"\\f3d6\";
}
.ri-rectangle-line:before {
  content: \"\\f3d7\";
}
.ri-robot-2-fill:before {
  content: \"\\f3d8\";
}
.ri-robot-2-line:before {
  content: \"\\f3d9\";
}
.ri-shapes-fill:before {
  content: \"\\f3da\";
}
.ri-shapes-line:before {
  content: \"\\f3db\";
}
.ri-square-fill:before {
  content: \"\\f3dc\";
}
.ri-square-line:before {
  content: \"\\f3dd\";
}
.ri-tent-fill:before {
  content: \"\\f3de\";
}
.ri-tent-line:before {
  content: \"\\f3df\";
}
.ri-threads-fill:before {
  content: \"\\f3e0\";
}
.ri-threads-line:before {
  content: \"\\f3e1\";
}
.ri-tree-fill:before {
  content: \"\\f3e2\";
}
.ri-tree-line:before {
  content: \"\\f3e3\";
}
.ri-triangle-fill:before {
  content: \"\\f3e4\";
}
.ri-triangle-line:before {
  content: \"\\f3e5\";
}
.ri-twitter-x-fill:before {
  content: \"\\f3e6\";
}
.ri-twitter-x-line:before {
  content: \"\\f3e7\";
}
.ri-verified-badge-fill:before {
  content: \"\\f3e8\";
}
.ri-verified-badge-line:before {
  content: \"\\f3e9\";
}
.ri-armchair-fill:before {
  content: \"\\f3ea\";
}
.ri-armchair-line:before {
  content: \"\\f3eb\";
}
.ri-bnb-fill:before {
  content: \"\\f3ec\";
}
.ri-bnb-line:before {
  content: \"\\f3ed\";
}
.ri-bread-fill:before {
  content: \"\\f3ee\";
}
.ri-bread-line:before {
  content: \"\\f3ef\";
}
.ri-btc-fill:before {
  content: \"\\f3f0\";
}
.ri-btc-line:before {
  content: \"\\f3f1\";
}
.ri-calendar-schedule-fill:before {
  content: \"\\f3f2\";
}
.ri-calendar-schedule-line:before {
  content: \"\\f3f3\";
}
.ri-dice-1-fill:before {
  content: \"\\f3f4\";
}
.ri-dice-1-line:before {
  content: \"\\f3f5\";
}
.ri-dice-2-fill:before {
  content: \"\\f3f6\";
}
.ri-dice-2-line:before {
  content: \"\\f3f7\";
}
.ri-dice-3-fill:before {
  content: \"\\f3f8\";
}
.ri-dice-3-line:before {
  content: \"\\f3f9\";
}
.ri-dice-4-fill:before {
  content: \"\\f3fa\";
}
.ri-dice-4-line:before {
  content: \"\\f3fb\";
}
.ri-dice-5-fill:before {
  content: \"\\f3fc\";
}
.ri-dice-5-line:before {
  content: \"\\f3fd\";
}
.ri-dice-6-fill:before {
  content: \"\\f3fe\";
}
.ri-dice-6-line:before {
  content: \"\\f3ff\";
}
.ri-dice-fill:before {
  content: \"\\f400\";
}
.ri-dice-line:before {
  content: \"\\f401\";
}
.ri-drinks-fill:before {
  content: \"\\f402\";
}
.ri-drinks-line:before {
  content: \"\\f403\";
}
.ri-equalizer-2-fill:before {
  content: \"\\f404\";
}
.ri-equalizer-2-line:before {
  content: \"\\f405\";
}
.ri-equalizer-3-fill:before {
  content: \"\\f406\";
}
.ri-equalizer-3-line:before {
  content: \"\\f407\";
}
.ri-eth-fill:before {
  content: \"\\f408\";
}
.ri-eth-line:before {
  content: \"\\f409\";
}
.ri-flower-fill:before {
  content: \"\\f40a\";
}
.ri-flower-line:before {
  content: \"\\f40b\";
}
.ri-glasses-2-fill:before {
  content: \"\\f40c\";
}
.ri-glasses-2-line:before {
  content: \"\\f40d\";
}
.ri-glasses-fill:before {
  content: \"\\f40e\";
}
.ri-glasses-line:before {
  content: \"\\f40f\";
}
.ri-goggles-fill:before {
  content: \"\\f410\";
}
.ri-goggles-line:before {
  content: \"\\f411\";
}
.ri-image-circle-fill:before {
  content: \"\\f412\";
}
.ri-image-circle-line:before {
  content: \"\\f413\";
}
.ri-info-i:before {
  content: \"\\f414\";
}
.ri-money-rupee-circle-fill:before {
  content: \"\\f415\";
}
.ri-money-rupee-circle-line:before {
  content: \"\\f416\";
}
.ri-news-fill:before {
  content: \"\\f417\";
}
.ri-news-line:before {
  content: \"\\f418\";
}
.ri-robot-3-fill:before {
  content: \"\\f419\";
}
.ri-robot-3-line:before {
  content: \"\\f41a\";
}
.ri-share-2-fill:before {
  content: \"\\f41b\";
}
.ri-share-2-line:before {
  content: \"\\f41c\";
}
.ri-sofa-fill:before {
  content: \"\\f41d\";
}
.ri-sofa-line:before {
  content: \"\\f41e\";
}
.ri-svelte-fill:before {
  content: \"\\f41f\";
}
.ri-svelte-line:before {
  content: \"\\f420\";
}
.ri-vk-fill:before {
  content: \"\\f421\";
}
.ri-vk-line:before {
  content: \"\\f422\";
}
.ri-xrp-fill:before {
  content: \"\\f423\";
}
.ri-xrp-line:before {
  content: \"\\f424\";
}
.ri-xtz-fill:before {
  content: \"\\f425\";
}
.ri-xtz-line:before {
  content: \"\\f426\";
}
.ri-archive-stack-fill:before {
  content: \"\\f427\";
}
.ri-archive-stack-line:before {
  content: \"\\f428\";
}
.ri-bowl-fill:before {
  content: \"\\f429\";
}
.ri-bowl-line:before {
  content: \"\\f42a\";
}
.ri-calendar-view:before {
  content: \"\\f42b\";
}
.ri-carousel-view:before {
  content: \"\\f42c\";
}
.ri-code-block:before {
  content: \"\\f42d\";
}
.ri-color-filter-fill:before {
  content: \"\\f42e\";
}
.ri-color-filter-line:before {
  content: \"\\f42f\";
}
.ri-contacts-book-3-fill:before {
  content: \"\\f430\";
}
.ri-contacts-book-3-line:before {
  content: \"\\f431\";
}
.ri-contract-fill:before {
  content: \"\\f432\";
}
.ri-contract-line:before {
  content: \"\\f433\";
}
.ri-drinks-2-fill:before {
  content: \"\\f434\";
}
.ri-drinks-2-line:before {
  content: \"\\f435\";
}
.ri-export-fill:before {
  content: \"\\f436\";
}
.ri-export-line:before {
  content: \"\\f437\";
}
.ri-file-check-fill:before {
  content: \"\\f438\";
}
.ri-file-check-line:before {
  content: \"\\f439\";
}
.ri-focus-mode:before {
  content: \"\\f43a\";
}
.ri-folder-6-fill:before {
  content: \"\\f43b\";
}
.ri-folder-6-line:before {
  content: \"\\f43c\";
}
.ri-folder-check-fill:before {
  content: \"\\f43d\";
}
.ri-folder-check-line:before {
  content: \"\\f43e\";
}
.ri-folder-close-fill:before {
  content: \"\\f43f\";
}
.ri-folder-close-line:before {
  content: \"\\f440\";
}
.ri-folder-cloud-fill:before {
  content: \"\\f441\";
}
.ri-folder-cloud-line:before {
  content: \"\\f442\";
}
.ri-gallery-view-2:before {
  content: \"\\f443\";
}
.ri-gallery-view:before {
  content: \"\\f444\";
}
.ri-hand:before {
  content: \"\\f445\";
}
.ri-import-fill:before {
  content: \"\\f446\";
}
.ri-import-line:before {
  content: \"\\f447\";
}
.ri-information-2-fill:before {
  content: \"\\f448\";
}
.ri-information-2-line:before {
  content: \"\\f449\";
}
.ri-kanban-view-2:before {
  content: \"\\f44a\";
}
.ri-kanban-view:before {
  content: \"\\f44b\";
}
.ri-list-view:before {
  content: \"\\f44c\";
}
.ri-lock-star-fill:before {
  content: \"\\f44d\";
}
.ri-lock-star-line:before {
  content: \"\\f44e\";
}
.ri-puzzle-2-fill:before {
  content: \"\\f44f\";
}
.ri-puzzle-2-line:before {
  content: \"\\f450\";
}
.ri-puzzle-fill:before {
  content: \"\\f451\";
}
.ri-puzzle-line:before {
  content: \"\\f452\";
}
.ri-ram-2-fill:before {
  content: \"\\f453\";
}
.ri-ram-2-line:before {
  content: \"\\f454\";
}
.ri-ram-fill:before {
  content: \"\\f455\";
}
.ri-ram-line:before {
  content: \"\\f456\";
}
.ri-receipt-fill:before {
  content: \"\\f457\";
}
.ri-receipt-line:before {
  content: \"\\f458\";
}
.ri-shadow-fill:before {
  content: \"\\f459\";
}
.ri-shadow-line:before {
  content: \"\\f45a\";
}
.ri-sidebar-fold-fill:before {
  content: \"\\f45b\";
}
.ri-sidebar-fold-line:before {
  content: \"\\f45c\";
}
.ri-sidebar-unfold-fill:before {
  content: \"\\f45d\";
}
.ri-sidebar-unfold-line:before {
  content: \"\\f45e\";
}
.ri-slideshow-view:before {
  content: \"\\f45f\";
}
.ri-sort-alphabet-asc:before {
  content: \"\\f460\";
}
.ri-sort-alphabet-desc:before {
  content: \"\\f461\";
}
.ri-sort-number-asc:before {
  content: \"\\f462\";
}
.ri-sort-number-desc:before {
  content: \"\\f463\";
}
.ri-stacked-view:before {
  content: \"\\f464\";
}
.ri-sticky-note-add-fill:before {
  content: \"\\f465\";
}
.ri-sticky-note-add-line:before {
  content: \"\\f466\";
}
.ri-swap-2-fill:before {
  content: \"\\f467\";
}
.ri-swap-2-line:before {
  content: \"\\f468\";
}
.ri-swap-3-fill:before {
  content: \"\\f469\";
}
.ri-swap-3-line:before {
  content: \"\\f46a\";
}
.ri-table-3:before {
  content: \"\\f46b\";
}
.ri-table-view:before {
  content: \"\\f46c\";
}
.ri-text-block:before {
  content: \"\\f46d\";
}
.ri-text-snippet:before {
  content: \"\\f46e\";
}
.ri-timeline-view:before {
  content: \"\\f46f\";
}
.ri-blogger-fill:before {
  content: \"\\f470\";
}
.ri-blogger-line:before {
  content: \"\\f471\";
}
.ri-chat-thread-fill:before {
  content: \"\\f472\";
}
.ri-chat-thread-line:before {
  content: \"\\f473\";
}
.ri-discount-percent-fill:before {
  content: \"\\f474\";
}
.ri-discount-percent-line:before {
  content: \"\\f475\";
}
.ri-exchange-2-fill:before {
  content: \"\\f476\";
}
.ri-exchange-2-line:before {
  content: \"\\f477\";
}
.ri-git-fork-fill:before {
  content: \"\\f478\";
}
.ri-git-fork-line:before {
  content: \"\\f479\";
}
.ri-input-field:before {
  content: \"\\f47a\";
}
.ri-progress-1-fill:before {
  content: \"\\f47b\";
}
.ri-progress-1-line:before {
  content: \"\\f47c\";
}
.ri-progress-2-fill:before {
  content: \"\\f47d\";
}
.ri-progress-2-line:before {
  content: \"\\f47e\";
}
.ri-progress-3-fill:before {
  content: \"\\f47f\";
}
.ri-progress-3-line:before {
  content: \"\\f480\";
}
.ri-progress-4-fill:before {
  content: \"\\f481\";
}
.ri-progress-4-line:before {
  content: \"\\f482\";
}
.ri-progress-5-fill:before {
  content: \"\\f483\";
}
.ri-progress-5-line:before {
  content: \"\\f484\";
}
.ri-progress-6-fill:before {
  content: \"\\f485\";
}
.ri-progress-6-line:before {
  content: \"\\f486\";
}
.ri-progress-7-fill:before {
  content: \"\\f487\";
}
.ri-progress-7-line:before {
  content: \"\\f488\";
}
.ri-progress-8-fill:before {
  content: \"\\f489\";
}
.ri-progress-8-line:before {
  content: \"\\f48a\";
}
.ri-remix-run-fill:before {
  content: \"\\f48b\";
}
.ri-remix-run-line:before {
  content: \"\\f48c\";
}
.ri-signpost-fill:before {
  content: \"\\f48d\";
}
.ri-signpost-line:before {
  content: \"\\f48e\";
}
.ri-time-zone-fill:before {
  content: \"\\f48f\";
}
.ri-time-zone-line:before {
  content: \"\\f490\";
}
.ri-arrow-down-wide-fill:before {
  content: \"\\f491\";
}
.ri-arrow-down-wide-line:before {
  content: \"\\f492\";
}
.ri-arrow-left-wide-fill:before {
  content: \"\\f493\";
}
.ri-arrow-left-wide-line:before {
  content: \"\\f494\";
}
.ri-arrow-right-wide-fill:before {
  content: \"\\f495\";
}
.ri-arrow-right-wide-line:before {
  content: \"\\f496\";
}
.ri-arrow-up-wide-fill:before {
  content: \"\\f497\";
}
.ri-arrow-up-wide-line:before {
  content: \"\\f498\";
}
.ri-bluesky-fill:before {
  content: \"\\f499\";
}
.ri-bluesky-line:before {
  content: \"\\f49a\";
}
.ri-expand-height-fill:before {
  content: \"\\f49b\";
}
.ri-expand-height-line:before {
  content: \"\\f49c\";
}
.ri-expand-width-fill:before {
  content: \"\\f49d\";
}
.ri-expand-width-line:before {
  content: \"\\f49e\";
}
.ri-forward-end-fill:before {
  content: \"\\f49f\";
}
.ri-forward-end-line:before {
  content: \"\\f4a0\";
}
.ri-forward-end-mini-fill:before {
  content: \"\\f4a1\";
}
.ri-forward-end-mini-line:before {
  content: \"\\f4a2\";
}
.ri-friendica-fill:before {
  content: \"\\f4a3\";
}
.ri-friendica-line:before {
  content: \"\\f4a4\";
}
.ri-git-pr-draft-fill:before {
  content: \"\\f4a5\";
}
.ri-git-pr-draft-line:before {
  content: \"\\f4a6\";
}
.ri-play-reverse-fill:before {
  content: \"\\f4a7\";
}
.ri-play-reverse-line:before {
  content: \"\\f4a8\";
}
.ri-play-reverse-mini-fill:before {
  content: \"\\f4a9\";
}
.ri-play-reverse-mini-line:before {
  content: \"\\f4aa\";
}
.ri-rewind-start-fill:before {
  content: \"\\f4ab\";
}
.ri-rewind-start-line:before {
  content: \"\\f4ac\";
}
.ri-rewind-start-mini-fill:before {
  content: \"\\f4ad\";
}
.ri-rewind-start-mini-line:before {
  content: \"\\f4ae\";
}
.ri-scroll-to-bottom-fill:before {
  content: \"\\f4af\";
}
.ri-scroll-to-bottom-line:before {
  content: \"\\f4b0\";
}
.ri-add-large-fill:before {
  content: \"\\f4b1\";
}
.ri-add-large-line:before {
  content: \"\\f4b2\";
}
.ri-aed-electrodes-fill:before {
  content: \"\\f4b3\";
}
.ri-aed-electrodes-line:before {
  content: \"\\f4b4\";
}
.ri-aed-fill:before {
  content: \"\\f4b5\";
}
.ri-aed-line:before {
  content: \"\\f4b6\";
}
.ri-alibaba-cloud-fill:before {
  content: \"\\f4b7\";
}
.ri-alibaba-cloud-line:before {
  content: \"\\f4b8\";
}
.ri-align-item-bottom-fill:before {
  content: \"\\f4b9\";
}
.ri-align-item-bottom-line:before {
  content: \"\\f4ba\";
}
.ri-align-item-horizontal-center-fill:before {
  content: \"\\f4bb\";
}
.ri-align-item-horizontal-center-line:before {
  content: \"\\f4bc\";
}
.ri-align-item-left-fill:before {
  content: \"\\f4bd\";
}
.ri-align-item-left-line:before {
  content: \"\\f4be\";
}
.ri-align-item-right-fill:before {
  content: \"\\f4bf\";
}
.ri-align-item-right-line:before {
  content: \"\\f4c0\";
}
.ri-align-item-top-fill:before {
  content: \"\\f4c1\";
}
.ri-align-item-top-line:before {
  content: \"\\f4c2\";
}
.ri-align-item-vertical-center-fill:before {
  content: \"\\f4c3\";
}
.ri-align-item-vertical-center-line:before {
  content: \"\\f4c4\";
}
.ri-apps-2-add-fill:before {
  content: \"\\f4c5\";
}
.ri-apps-2-add-line:before {
  content: \"\\f4c6\";
}
.ri-close-large-fill:before {
  content: \"\\f4c7\";
}
.ri-close-large-line:before {
  content: \"\\f4c8\";
}
.ri-collapse-diagonal-2-fill:before {
  content: \"\\f4c9\";
}
.ri-collapse-diagonal-2-line:before {
  content: \"\\f4ca\";
}
.ri-collapse-diagonal-fill:before {
  content: \"\\f4cb\";
}
.ri-collapse-diagonal-line:before {
  content: \"\\f4cc\";
}
.ri-dashboard-horizontal-fill:before {
  content: \"\\f4cd\";
}
.ri-dashboard-horizontal-line:before {
  content: \"\\f4ce\";
}
.ri-expand-diagonal-2-fill:before {
  content: \"\\f4cf\";
}
.ri-expand-diagonal-2-line:before {
  content: \"\\f4d0\";
}
.ri-expand-diagonal-fill:before {
  content: \"\\f4d1\";
}
.ri-expand-diagonal-line:before {
  content: \"\\f4d2\";
}
.ri-firebase-fill:before {
  content: \"\\f4d3\";
}
.ri-firebase-line:before {
  content: \"\\f4d4\";
}
.ri-flip-horizontal-2-fill:before {
  content: \"\\f4d5\";
}
.ri-flip-horizontal-2-line:before {
  content: \"\\f4d6\";
}
.ri-flip-horizontal-fill:before {
  content: \"\\f4d7\";
}
.ri-flip-horizontal-line:before {
  content: \"\\f4d8\";
}
.ri-flip-vertical-2-fill:before {
  content: \"\\f4d9\";
}
.ri-flip-vertical-2-line:before {
  content: \"\\f4da\";
}
.ri-flip-vertical-fill:before {
  content: \"\\f4db\";
}
.ri-flip-vertical-line:before {
  content: \"\\f4dc\";
}
.ri-formula:before {
  content: \"\\f4dd\";
}
.ri-function-add-fill:before {
  content: \"\\f4de\";
}
.ri-function-add-line:before {
  content: \"\\f4df\";
}
.ri-goblet-2-fill:before {
  content: \"\\f4e0\";
}
.ri-goblet-2-line:before {
  content: \"\\f4e1\";
}
.ri-golf-ball-fill:before {
  content: \"\\f4e2\";
}
.ri-golf-ball-line:before {
  content: \"\\f4e3\";
}
.ri-group-3-fill:before {
  content: \"\\f4e4\";
}
.ri-group-3-line:before {
  content: \"\\f4e5\";
}
.ri-heart-add-2-fill:before {
  content: \"\\f4e6\";
}
.ri-heart-add-2-line:before {
  content: \"\\f4e7\";
}
.ri-id-card-fill:before {
  content: \"\\f4e8\";
}
.ri-id-card-line:before {
  content: \"\\f4e9\";
}
.ri-information-off-fill:before {
  content: \"\\f4ea\";
}
.ri-information-off-line:before {
  content: \"\\f4eb\";
}
.ri-java-fill:before {
  content: \"\\f4ec\";
}
.ri-java-line:before {
  content: \"\\f4ed\";
}
.ri-layout-grid-2-fill:before {
  content: \"\\f4ee\";
}
.ri-layout-grid-2-line:before {
  content: \"\\f4ef\";
}
.ri-layout-horizontal-fill:before {
  content: \"\\f4f0\";
}
.ri-layout-horizontal-line:before {
  content: \"\\f4f1\";
}
.ri-layout-vertical-fill:before {
  content: \"\\f4f2\";
}
.ri-layout-vertical-line:before {
  content: \"\\f4f3\";
}
.ri-menu-fold-2-fill:before {
  content: \"\\f4f4\";
}
.ri-menu-fold-2-line:before {
  content: \"\\f4f5\";
}
.ri-menu-fold-3-fill:before {
  content: \"\\f4f6\";
}
.ri-menu-fold-3-line:before {
  content: \"\\f4f7\";
}
.ri-menu-fold-4-fill:before {
  content: \"\\f4f8\";
}
.ri-menu-fold-4-line:before {
  content: \"\\f4f9\";
}
.ri-menu-unfold-2-fill:before {
  content: \"\\f4fa\";
}
.ri-menu-unfold-2-line:before {
  content: \"\\f4fb\";
}
.ri-menu-unfold-3-fill:before {
  content: \"\\f4fc\";
}
.ri-menu-unfold-3-line:before {
  content: \"\\f4fd\";
}
.ri-menu-unfold-4-fill:before {
  content: \"\\f4fe\";
}
.ri-menu-unfold-4-line:before {
  content: \"\\f4ff\";
}
.ri-mobile-download-fill:before {
  content: \"\\f500\";
}
.ri-mobile-download-line:before {
  content: \"\\f501\";
}
.ri-nextjs-fill:before {
  content: \"\\f502\";
}
.ri-nextjs-line:before {
  content: \"\\f503\";
}
.ri-nodejs-fill:before {
  content: \"\\f504\";
}
.ri-nodejs-line:before {
  content: \"\\f505\";
}
.ri-pause-large-fill:before {
  content: \"\\f506\";
}
.ri-pause-large-line:before {
  content: \"\\f507\";
}
.ri-play-large-fill:before {
  content: \"\\f508\";
}
.ri-play-large-line:before {
  content: \"\\f509\";
}
.ri-play-reverse-large-fill:before {
  content: \"\\f50a\";
}
.ri-play-reverse-large-line:before {
  content: \"\\f50b\";
}
.ri-police-badge-fill:before {
  content: \"\\f50c\";
}
.ri-police-badge-line:before {
  content: \"\\f50d\";
}
.ri-prohibited-2-fill:before {
  content: \"\\f50e\";
}
.ri-prohibited-2-line:before {
  content: \"\\f50f\";
}
.ri-shopping-bag-4-fill:before {
  content: \"\\f510\";
}
.ri-shopping-bag-4-line:before {
  content: \"\\f511\";
}
.ri-snowflake-fill:before {
  content: \"\\f512\";
}
.ri-snowflake-line:before {
  content: \"\\f513\";
}
.ri-square-root:before {
  content: \"\\f514\";
}
.ri-stop-large-fill:before {
  content: \"\\f515\";
}
.ri-stop-large-line:before {
  content: \"\\f516\";
}
.ri-tailwind-css-fill:before {
  content: \"\\f517\";
}
.ri-tailwind-css-line:before {
  content: \"\\f518\";
}
.ri-tooth-fill:before {
  content: \"\\f519\";
}
.ri-tooth-line:before {
  content: \"\\f51a\";
}
.ri-video-off-fill:before {
  content: \"\\f51b\";
}
.ri-video-off-line:before {
  content: \"\\f51c\";
}
.ri-video-on-fill:before {
  content: \"\\f51d\";
}
.ri-video-on-line:before {
  content: \"\\f51e\";
}
.ri-webhook-fill:before {
  content: \"\\f51f\";
}
.ri-webhook-line:before {
  content: \"\\f520\";
}
.ri-weight-fill:before {
  content: \"\\f521\";
}
.ri-weight-line:before {
  content: \"\\f522\";
}
/*!
 *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
 *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
 */
/* FONT PATH
 * -------------------------- */
@font-face {
  font-family: 'FontAwesome';
  src: url('font-awesome/fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2');
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font: normal normal normal 14px/1 FontAwesome;
  font-size: inherit;
  text-rendering: auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
a > .fa {
  padding-right: 4px;
}
/* makes the font 33% larger relative to the icon container */
.fa-lg {
  font-size: 1.33333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.28571429em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.14285714em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.14285714em;
  width: 2.14285714em;
  top: 0.14285714em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.85714286em;
}
.fa-border {
  padding: 0.2em 0.25em 0.15em;
  border: solid 0.08em #eee;
  border-radius: 0.1em;
}
.fa-pull-left {
  float: left;
}
.fa-pull-right {
  float: right;
}
.fa.fa-pull-left {
  margin-right: 0.3em;
}
.fa.fa-pull-right {
  margin-left: 0.3em;
}
/* Deprecated as of 4.4.0 */
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: 0.3em;
}
.fa.pull-right {
  margin-left: 0.3em;
}
.fa-spin {
  -webkit-animation: fa-spin 2s infinite linear;
  animation: fa-spin 2s infinite linear;
}
.fa-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
  animation: fa-spin 1s infinite steps(8);
}
@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=1)\";
  -webkit-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2)\";
  -webkit-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=3)\";
  -webkit-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=0, mirror=1)\";
  -webkit-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=2, mirror=1)\";
  -webkit-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  transform: scale(1, -1);
}
:root .fa-rotate-90,
:root .fa-rotate-180,
:root .fa-rotate-270,
:root .fa-flip-horizontal,
:root .fa-flip-vertical {
  filter: none;
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
/* Font Awesome uses the Unicode Private Use Area (PUA) to ensure screen
   readers do not read off random characters that represent icons */
.fa-glass:before {
  content: \"\\f000\";
}
.fa-music:before {
  content: \"\\f001\";
}
.fa-search:before {
  content: \"\\f002\";
}
.fa-envelope-o:before {
  content: \"\\f003\";
}
.fa-heart:before {
  content: \"\\f004\";
}
.fa-star:before {
  content: \"\\f005\";
}
.fa-star-o:before {
  content: \"\\f006\";
}
.fa-user:before {
  content: \"\\f007\";
}
.fa-film:before {
  content: \"\\f008\";
}
.fa-th-large:before {
  content: \"\\f009\";
}
.fa-th:before {
  content: \"\\f00a\";
}
.fa-th-list:before {
  content: \"\\f00b\";
}
.fa-check:before {
  content: \"\\f00c\";
}
.fa-remove:before,
.fa-close:before,
.fa-times:before {
  content: \"\\f00d\";
}
.fa-search-plus:before {
  content: \"\\f00e\";
}
.fa-search-minus:before {
  content: \"\\f010\";
}
.fa-power-off:before {
  content: \"\\f011\";
}
.fa-signal:before {
  content: \"\\f012\";
}
.fa-gear:before,
.fa-cog:before {
  content: \"\\f013\";
}
.fa-trash-o:before {
  content: \"\\f014\";
}
.fa-home:before {
  content: \"\\f015\";
}
.fa-file-o:before {
  content: \"\\f016\";
}
.fa-clock-o:before {
  content: \"\\f017\";
}
.fa-road:before {
  content: \"\\f018\";
}
.fa-download:before {
  content: \"\\f019\";
}
.fa-arrow-circle-o-down:before {
  content: \"\\f01a\";
}
.fa-arrow-circle-o-up:before {
  content: \"\\f01b\";
}
.fa-inbox:before {
  content: \"\\f01c\";
}
.fa-play-circle-o:before {
  content: \"\\f01d\";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: \"\\f01e\";
}
.fa-refresh:before {
  content: \"\\f021\";
}
.fa-list-alt:before {
  content: \"\\f022\";
}
.fa-lock:before {
  content: \"\\f023\";
}
.fa-flag:before {
  content: \"\\f024\";
}
.fa-headphones:before {
  content: \"\\f025\";
}
.fa-volume-off:before {
  content: \"\\f026\";
}
.fa-volume-down:before {
  content: \"\\f027\";
}
.fa-volume-up:before {
  content: \"\\f028\";
}
.fa-qrcode:before {
  content: \"\\f029\";
}
.fa-barcode:before {
  content: \"\\f02a\";
}
.fa-tag:before {
  content: \"\\f02b\";
}
.fa-tags:before {
  content: \"\\f02c\";
}
.fa-book:before {
  content: \"\\f02d\";
}
.fa-bookmark:before {
  content: \"\\f02e\";
}
.fa-print:before {
  content: \"\\f02f\";
}
.fa-camera:before {
  content: \"\\f030\";
}
.fa-font:before {
  content: \"\\f031\";
}
.fa-bold:before {
  content: \"\\f032\";
}
.fa-italic:before {
  content: \"\\f033\";
}
.fa-text-height:before {
  content: \"\\f034\";
}
.fa-text-width:before {
  content: \"\\f035\";
}
.fa-align-left:before {
  content: \"\\f036\";
}
.fa-align-center:before {
  content: \"\\f037\";
}
.fa-align-right:before {
  content: \"\\f038\";
}
.fa-align-justify:before {
  content: \"\\f039\";
}
.fa-list:before {
  content: \"\\f03a\";
}
.fa-dedent:before,
.fa-outdent:before {
  content: \"\\f03b\";
}
.fa-indent:before {
  content: \"\\f03c\";
}
.fa-video-camera:before {
  content: \"\\f03d\";
}
.fa-photo:before,
.fa-image:before,
.fa-picture-o:before {
  content: \"\\f03e\";
}
.fa-pencil:before {
  content: \"\\f040\";
}
.fa-map-marker:before {
  content: \"\\f041\";
}
.fa-adjust:before {
  content: \"\\f042\";
}
.fa-tint:before {
  content: \"\\f043\";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: \"\\f044\";
}
.fa-share-square-o:before {
  content: \"\\f045\";
}
.fa-check-square-o:before {
  content: \"\\f046\";
}
.fa-arrows:before {
  content: \"\\f047\";
}
.fa-step-backward:before {
  content: \"\\f048\";
}
.fa-fast-backward:before {
  content: \"\\f049\";
}
.fa-backward:before {
  content: \"\\f04a\";
}
.fa-play:before {
  content: \"\\f04b\";
}
.fa-pause:before {
  content: \"\\f04c\";
}
.fa-stop:before {
  content: \"\\f04d\";
}
.fa-forward:before {
  content: \"\\f04e\";
}
.fa-fast-forward:before {
  content: \"\\f050\";
}
.fa-step-forward:before {
  content: \"\\f051\";
}
.fa-eject:before {
  content: \"\\f052\";
}
.fa-chevron-left:before {
  content: \"\\f053\";
}
.fa-chevron-right:before {
  content: \"\\f054\";
}
.fa-plus-circle:before {
  content: \"\\f055\";
}
.fa-minus-circle:before {
  content: \"\\f056\";
}
.fa-times-circle:before {
  content: \"\\f057\";
}
.fa-check-circle:before {
  content: \"\\f058\";
}
.fa-question-circle:before {
  content: \"\\f059\";
}
.fa-info-circle:before {
  content: \"\\f05a\";
}
.fa-crosshairs:before {
  content: \"\\f05b\";
}
.fa-times-circle-o:before {
  content: \"\\f05c\";
}
.fa-check-circle-o:before {
  content: \"\\f05d\";
}
.fa-ban:before {
  content: \"\\f05e\";
}
.fa-arrow-left:before {
  content: \"\\f060\";
}
.fa-arrow-right:before {
  content: \"\\f061\";
}
.fa-arrow-up:before {
  content: \"\\f062\";
}
.fa-arrow-down:before {
  content: \"\\f063\";
}
.fa-mail-forward:before,
.fa-share:before {
  content: \"\\f064\";
}
.fa-expand:before {
  content: \"\\f065\";
}
.fa-compress:before {
  content: \"\\f066\";
}
.fa-plus:before {
  content: \"\\f067\";
}
.fa-minus:before {
  content: \"\\f068\";
}
.fa-asterisk:before {
  content: \"\\f069\";
}
.fa-exclamation-circle:before {
  content: \"\\f06a\";
}
.fa-gift:before {
  content: \"\\f06b\";
}
.fa-leaf:before {
  content: \"\\f06c\";
}
.fa-fire:before {
  content: \"\\f06d\";
}
.fa-eye:before {
  content: \"\\f06e\";
}
.fa-eye-slash:before {
  content: \"\\f070\";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: \"\\f071\";
}
.fa-plane:before {
  content: \"\\f072\";
}
.fa-calendar:before {
  content: \"\\f073\";
}
.fa-random:before {
  content: \"\\f074\";
}
.fa-comment:before {
  content: \"\\f075\";
}
.fa-magnet:before {
  content: \"\\f076\";
}
.fa-chevron-up:before {
  content: \"\\f077\";
}
.fa-chevron-down:before {
  content: \"\\f078\";
}
.fa-retweet:before {
  content: \"\\f079\";
}
.fa-shopping-cart:before {
  content: \"\\f07a\";
}
.fa-folder:before {
  content: \"\\f07b\";
}
.fa-folder-open:before {
  content: \"\\f07c\";
}
.fa-arrows-v:before {
  content: \"\\f07d\";
}
.fa-arrows-h:before {
  content: \"\\f07e\";
}
.fa-bar-chart-o:before,
.fa-bar-chart:before {
  content: \"\\f080\";
}
.fa-twitter-square:before {
  content: \"\\f081\";
}
.fa-facebook-square:before {
  content: \"\\f082\";
}
.fa-camera-retro:before {
  content: \"\\f083\";
}
.fa-key:before {
  content: \"\\f084\";
}
.fa-gears:before,
.fa-cogs:before {
  content: \"\\f085\";
}
.fa-comments:before {
  content: \"\\f086\";
}
.fa-thumbs-o-up:before {
  content: \"\\f087\";
}
.fa-thumbs-o-down:before {
  content: \"\\f088\";
}
.fa-star-half:before {
  content: \"\\f089\";
}
.fa-heart-o:before {
  content: \"\\f08a\";
}
.fa-sign-out:before {
  content: \"\\f08b\";
}
.fa-linkedin-square:before {
  content: \"\\f08c\";
}
.fa-thumb-tack:before {
  content: \"\\f08d\";
}
.fa-external-link:before {
  content: \"\\f08e\";
}
.fa-sign-in:before {
  content: \"\\f090\";
}
.fa-trophy:before {
  content: \"\\f091\";
}
.fa-github-square:before {
  content: \"\\f092\";
}
.fa-upload:before {
  content: \"\\f093\";
}
.fa-lemon-o:before {
  content: \"\\f094\";
}
.fa-phone:before {
  content: \"\\f095\";
}
.fa-square-o:before {
  content: \"\\f096\";
}
.fa-bookmark-o:before {
  content: \"\\f097\";
}
.fa-phone-square:before {
  content: \"\\f098\";
}
.fa-twitter:before {
  content: \"\\f099\";
}
.fa-facebook-f:before,
.fa-facebook:before {
  content: \"\\f09a\";
}
.fa-github:before {
  content: \"\\f09b\";
}
.fa-unlock:before {
  content: \"\\f09c\";
}
.fa-credit-card:before {
  content: \"\\f09d\";
}
.fa-feed:before,
.fa-rss:before {
  content: \"\\f09e\";
}
.fa-hdd-o:before {
  content: \"\\f0a0\";
}
.fa-bullhorn:before {
  content: \"\\f0a1\";
}
.fa-bell:before {
  content: \"\\f0f3\";
}
.fa-certificate:before {
  content: \"\\f0a3\";
}
.fa-hand-o-right:before {
  content: \"\\f0a4\";
}
.fa-hand-o-left:before {
  content: \"\\f0a5\";
}
.fa-hand-o-up:before {
  content: \"\\f0a6\";
}
.fa-hand-o-down:before {
  content: \"\\f0a7\";
}
.fa-arrow-circle-left:before {
  content: \"\\f0a8\";
}
.fa-arrow-circle-right:before {
  content: \"\\f0a9\";
}
.fa-arrow-circle-up:before {
  content: \"\\f0aa\";
}
.fa-arrow-circle-down:before {
  content: \"\\f0ab\";
}
.fa-globe:before {
  content: \"\\f0ac\";
}
.fa-wrench:before {
  content: \"\\f0ad\";
}
.fa-tasks:before {
  content: \"\\f0ae\";
}
.fa-filter:before {
  content: \"\\f0b0\";
}
.fa-briefcase:before {
  content: \"\\f0b1\";
}
.fa-arrows-alt:before {
  content: \"\\f0b2\";
}
.fa-group:before,
.fa-users:before {
  content: \"\\f0c0\";
}
.fa-chain:before,
.fa-link:before {
  content: \"\\f0c1\";
}
.fa-cloud:before {
  content: \"\\f0c2\";
}
.fa-flask:before {
  content: \"\\f0c3\";
}
.fa-cut:before,
.fa-scissors:before {
  content: \"\\f0c4\";
}
.fa-copy:before,
.fa-files-o:before {
  content: \"\\f0c5\";
}
.fa-paperclip:before {
  content: \"\\f0c6\";
}
.fa-save:before,
.fa-floppy-o:before {
  content: \"\\f0c7\";
}
.fa-square:before {
  content: \"\\f0c8\";
}
.fa-navicon:before,
.fa-reorder:before,
.fa-bars:before {
  content: \"\\f0c9\";
}
.fa-list-ul:before {
  content: \"\\f0ca\";
}
.fa-list-ol:before {
  content: \"\\f0cb\";
}
.fa-strikethrough:before {
  content: \"\\f0cc\";
}
.fa-underline:before {
  content: \"\\f0cd\";
}
.fa-table:before {
  content: \"\\f0ce\";
}
.fa-magic:before {
  content: \"\\f0d0\";
}
.fa-truck:before {
  content: \"\\f0d1\";
}
.fa-pinterest:before {
  content: \"\\f0d2\";
}
.fa-pinterest-square:before {
  content: \"\\f0d3\";
}
.fa-google-plus-square:before {
  content: \"\\f0d4\";
}
.fa-google-plus:before {
  content: \"\\f0d5\";
}
.fa-money:before {
  content: \"\\f0d6\";
}
.fa-caret-down:before {
  content: \"\\f0d7\";
}
.fa-caret-up:before {
  content: \"\\f0d8\";
}
.fa-caret-left:before {
  content: \"\\f0d9\";
}
.fa-caret-right:before {
  content: \"\\f0da\";
}
.fa-columns:before {
  content: \"\\f0db\";
}
.fa-unsorted:before,
.fa-sort:before {
  content: \"\\f0dc\";
}
.fa-sort-down:before,
.fa-sort-desc:before {
  content: \"\\f0dd\";
}
.fa-sort-up:before,
.fa-sort-asc:before {
  content: \"\\f0de\";
}
.fa-envelope:before {
  content: \"\\f0e0\";
}
.fa-linkedin:before {
  content: \"\\f0e1\";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: \"\\f0e2\";
}
.fa-legal:before,
.fa-gavel:before {
  content: \"\\f0e3\";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: \"\\f0e4\";
}
.fa-comment-o:before {
  content: \"\\f0e5\";
}
.fa-comments-o:before {
  content: \"\\f0e6\";
}
.fa-flash:before,
.fa-bolt:before {
  content: \"\\f0e7\";
}
.fa-sitemap:before {
  content: \"\\f0e8\";
}
.fa-umbrella:before {
  content: \"\\f0e9\";
}
.fa-paste:before,
.fa-clipboard:before {
  content: \"\\f0ea\";
}
.fa-lightbulb-o:before {
  content: \"\\f0eb\";
}
.fa-exchange:before {
  content: \"\\f0ec\";
}
.fa-cloud-download:before {
  content: \"\\f0ed\";
}
.fa-cloud-upload:before {
  content: \"\\f0ee\";
}
.fa-user-md:before {
  content: \"\\f0f0\";
}
.fa-stethoscope:before {
  content: \"\\f0f1\";
}
.fa-suitcase:before {
  content: \"\\f0f2\";
}
.fa-bell-o:before {
  content: \"\\f0a2\";
}
.fa-coffee:before {
  content: \"\\f0f4\";
}
.fa-cutlery:before {
  content: \"\\f0f5\";
}
.fa-file-text-o:before {
  content: \"\\f0f6\";
}
.fa-building-o:before {
  content: \"\\f0f7\";
}
.fa-hospital-o:before {
  content: \"\\f0f8\";
}
.fa-ambulance:before {
  content: \"\\f0f9\";
}
.fa-medkit:before {
  content: \"\\f0fa\";
}
.fa-fighter-jet:before {
  content: \"\\f0fb\";
}
.fa-beer:before {
  content: \"\\f0fc\";
}
.fa-h-square:before {
  content: \"\\f0fd\";
}
.fa-plus-square:before {
  content: \"\\f0fe\";
}
.fa-angle-double-left:before {
  content: \"\\f100\";
}
.fa-angle-double-right:before {
  content: \"\\f101\";
}
.fa-angle-double-up:before {
  content: \"\\f102\";
}
.fa-angle-double-down:before {
  content: \"\\f103\";
}
.fa-angle-left:before {
  content: \"\\f104\";
}
.fa-angle-right:before {
  content: \"\\f105\";
}
.fa-angle-up:before {
  content: \"\\f106\";
}
.fa-angle-down:before {
  content: \"\\f107\";
}
.fa-desktop:before {
  content: \"\\f108\";
}
.fa-laptop:before {
  content: \"\\f109\";
}
.fa-tablet:before {
  content: \"\\f10a\";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: \"\\f10b\";
}
.fa-circle-o:before {
  content: \"\\f10c\";
}
.fa-quote-left:before {
  content: \"\\f10d\";
}
.fa-quote-right:before {
  content: \"\\f10e\";
}
.fa-spinner:before {
  content: \"\\f110\";
}
.fa-circle:before {
  content: \"\\f111\";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: \"\\f112\";
}
.fa-github-alt:before {
  content: \"\\f113\";
}
.fa-folder-o:before {
  content: \"\\f114\";
}
.fa-folder-open-o:before {
  content: \"\\f115\";
}
.fa-smile-o:before {
  content: \"\\f118\";
}
.fa-frown-o:before {
  content: \"\\f119\";
}
.fa-meh-o:before {
  content: \"\\f11a\";
}
.fa-gamepad:before {
  content: \"\\f11b\";
}
.fa-keyboard-o:before {
  content: \"\\f11c\";
}
.fa-flag-o:before {
  content: \"\\f11d\";
}
.fa-flag-checkered:before {
  content: \"\\f11e\";
}
.fa-terminal:before {
  content: \"\\f120\";
}
.fa-code:before {
  content: \"\\f121\";
}
.fa-mail-reply-all:before,
.fa-reply-all:before {
  content: \"\\f122\";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: \"\\f123\";
}
.fa-location-arrow:before {
  content: \"\\f124\";
}
.fa-crop:before {
  content: \"\\f125\";
}
.fa-code-fork:before {
  content: \"\\f126\";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: \"\\f127\";
}
.fa-question:before {
  content: \"\\f128\";
}
.fa-info:before {
  content: \"\\f129\";
}
.fa-exclamation:before {
  content: \"\\f12a\";
}
.fa-superscript:before {
  content: \"\\f12b\";
}
.fa-subscript:before {
  content: \"\\f12c\";
}
.fa-eraser:before {
  content: \"\\f12d\";
}
.fa-puzzle-piece:before {
  content: \"\\f12e\";
}
.fa-microphone:before {
  content: \"\\f130\";
}
.fa-microphone-slash:before {
  content: \"\\f131\";
}
.fa-shield:before {
  content: \"\\f132\";
}
.fa-calendar-o:before {
  content: \"\\f133\";
}
.fa-fire-extinguisher:before {
  content: \"\\f134\";
}
.fa-rocket:before {
  content: \"\\f135\";
}
.fa-maxcdn:before {
  content: \"\\f136\";
}
.fa-chevron-circle-left:before {
  content: \"\\f137\";
}
.fa-chevron-circle-right:before {
  content: \"\\f138\";
}
.fa-chevron-circle-up:before {
  content: \"\\f139\";
}
.fa-chevron-circle-down:before {
  content: \"\\f13a\";
}
.fa-html5:before {
  content: \"\\f13b\";
}
.fa-css3:before {
  content: \"\\f13c\";
}
.fa-anchor:before {
  content: \"\\f13d\";
}
.fa-unlock-alt:before {
  content: \"\\f13e\";
}
.fa-bullseye:before {
  content: \"\\f140\";
}
.fa-ellipsis-h:before {
  content: \"\\f141\";
}
.fa-ellipsis-v:before {
  content: \"\\f142\";
}
.fa-rss-square:before {
  content: \"\\f143\";
}
.fa-play-circle:before {
  content: \"\\f144\";
}
.fa-ticket:before {
  content: \"\\f145\";
}
.fa-minus-square:before {
  content: \"\\f146\";
}
.fa-minus-square-o:before {
  content: \"\\f147\";
}
.fa-level-up:before {
  content: \"\\f148\";
}
.fa-level-down:before {
  content: \"\\f149\";
}
.fa-check-square:before {
  content: \"\\f14a\";
}
.fa-pencil-square:before {
  content: \"\\f14b\";
}
.fa-external-link-square:before {
  content: \"\\f14c\";
}
.fa-share-square:before {
  content: \"\\f14d\";
}
.fa-compass:before {
  content: \"\\f14e\";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: \"\\f150\";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: \"\\f151\";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: \"\\f152\";
}
.fa-euro:before,
.fa-eur:before {
  content: \"\\f153\";
}
.fa-gbp:before {
  content: \"\\f154\";
}
.fa-dollar:before,
.fa-usd:before {
  content: \"\\f155\";
}
.fa-rupee:before,
.fa-inr:before {
  content: \"\\f156\";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: \"\\f157\";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: \"\\f158\";
}
.fa-won:before,
.fa-krw:before {
  content: \"\\f159\";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: \"\\f15a\";
}
.fa-file:before {
  content: \"\\f15b\";
}
.fa-file-text:before {
  content: \"\\f15c\";
}
.fa-sort-alpha-asc:before {
  content: \"\\f15d\";
}
.fa-sort-alpha-desc:before {
  content: \"\\f15e\";
}
.fa-sort-amount-asc:before {
  content: \"\\f160\";
}
.fa-sort-amount-desc:before {
  content: \"\\f161\";
}
.fa-sort-numeric-asc:before {
  content: \"\\f162\";
}
.fa-sort-numeric-desc:before {
  content: \"\\f163\";
}
.fa-thumbs-up:before {
  content: \"\\f164\";
}
.fa-thumbs-down:before {
  content: \"\\f165\";
}
.fa-youtube-square:before {
  content: \"\\f166\";
}
.fa-youtube:before {
  content: \"\\f167\";
}
.fa-xing:before {
  content: \"\\f168\";
}
.fa-xing-square:before {
  content: \"\\f169\";
}
.fa-youtube-play:before {
  content: \"\\f16a\";
}
.fa-dropbox:before {
  content: \"\\f16b\";
}
.fa-stack-overflow:before {
  content: \"\\f16c\";
}
.fa-instagram:before {
  content: \"\\f16d\";
}
.fa-flickr:before {
  content: \"\\f16e\";
}
.fa-adn:before {
  content: \"\\f170\";
}
.fa-bitbucket:before {
  content: \"\\f171\";
}
.fa-bitbucket-square:before {
  content: \"\\f172\";
}
.fa-tumblr:before {
  content: \"\\f173\";
}
.fa-tumblr-square:before {
  content: \"\\f174\";
}
.fa-long-arrow-down:before {
  content: \"\\f175\";
}
.fa-long-arrow-up:before {
  content: \"\\f176\";
}
.fa-long-arrow-left:before {
  content: \"\\f177\";
}
.fa-long-arrow-right:before {
  content: \"\\f178\";
}
.fa-apple:before {
  content: \"\\f179\";
}
.fa-windows:before {
  content: \"\\f17a\";
}
.fa-android:before {
  content: \"\\f17b\";
}
.fa-linux:before {
  content: \"\\f17c\";
}
.fa-dribbble:before {
  content: \"\\f17d\";
}
.fa-skype:before {
  content: \"\\f17e\";
}
.fa-foursquare:before {
  content: \"\\f180\";
}
.fa-trello:before {
  content: \"\\f181\";
}
.fa-female:before {
  content: \"\\f182\";
}
.fa-male:before {
  content: \"\\f183\";
}
.fa-gittip:before,
.fa-gratipay:before {
  content: \"\\f184\";
}
.fa-sun-o:before {
  content: \"\\f185\";
}
.fa-moon-o:before {
  content: \"\\f186\";
}
.fa-archive:before {
  content: \"\\f187\";
}
.fa-bug:before {
  content: \"\\f188\";
}
.fa-vk:before {
  content: \"\\f189\";
}
.fa-weibo:before {
  content: \"\\f18a\";
}
.fa-renren:before {
  content: \"\\f18b\";
}
.fa-pagelines:before {
  content: \"\\f18c\";
}
.fa-stack-exchange:before {
  content: \"\\f18d\";
}
.fa-arrow-circle-o-right:before {
  content: \"\\f18e\";
}
.fa-arrow-circle-o-left:before {
  content: \"\\f190\";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: \"\\f191\";
}
.fa-dot-circle-o:before {
  content: \"\\f192\";
}
.fa-wheelchair:before {
  content: \"\\f193\";
}
.fa-vimeo-square:before {
  content: \"\\f194\";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: \"\\f195\";
}
.fa-plus-square-o:before {
  content: \"\\f196\";
}
.fa-space-shuttle:before {
  content: \"\\f197\";
}
.fa-slack:before {
  content: \"\\f198\";
}
.fa-envelope-square:before {
  content: \"\\f199\";
}
.fa-wordpress:before {
  content: \"\\f19a\";
}
.fa-openid:before {
  content: \"\\f19b\";
}
.fa-institution:before,
.fa-bank:before,
.fa-university:before {
  content: \"\\f19c\";
}
.fa-mortar-board:before,
.fa-graduation-cap:before {
  content: \"\\f19d\";
}
.fa-yahoo:before {
  content: \"\\f19e\";
}
.fa-google:before {
  content: \"\\f1a0\";
}
.fa-reddit:before {
  content: \"\\f1a1\";
}
.fa-reddit-square:before {
  content: \"\\f1a2\";
}
.fa-stumbleupon-circle:before {
  content: \"\\f1a3\";
}
.fa-stumbleupon:before {
  content: \"\\f1a4\";
}
.fa-delicious:before {
  content: \"\\f1a5\";
}
.fa-digg:before {
  content: \"\\f1a6\";
}
.fa-pied-piper-pp:before {
  content: \"\\f1a7\";
}
.fa-pied-piper-alt:before {
  content: \"\\f1a8\";
}
.fa-drupal:before {
  content: \"\\f1a9\";
}
.fa-joomla:before {
  content: \"\\f1aa\";
}
.fa-language:before {
  content: \"\\f1ab\";
}
.fa-fax:before {
  content: \"\\f1ac\";
}
.fa-building:before {
  content: \"\\f1ad\";
}
.fa-child:before {
  content: \"\\f1ae\";
}
.fa-paw:before {
  content: \"\\f1b0\";
}
.fa-spoon:before {
  content: \"\\f1b1\";
}
.fa-cube:before {
  content: \"\\f1b2\";
}
.fa-cubes:before {
  content: \"\\f1b3\";
}
.fa-behance:before {
  content: \"\\f1b4\";
}
.fa-behance-square:before {
  content: \"\\f1b5\";
}
.fa-steam:before {
  content: \"\\f1b6\";
}
.fa-steam-square:before {
  content: \"\\f1b7\";
}
.fa-recycle:before {
  content: \"\\f1b8\";
}
.fa-automobile:before,
.fa-car:before {
  content: \"\\f1b9\";
}
.fa-cab:before,
.fa-taxi:before {
  content: \"\\f1ba\";
}
.fa-tree:before {
  content: \"\\f1bb\";
}
.fa-spotify:before {
  content: \"\\f1bc\";
}
.fa-deviantart:before {
  content: \"\\f1bd\";
}
.fa-soundcloud:before {
  content: \"\\f1be\";
}
.fa-database:before {
  content: \"\\f1c0\";
}
.fa-file-pdf-o:before {
  content: \"\\f1c1\";
}
.fa-file-word-o:before {
  content: \"\\f1c2\";
}
.fa-file-excel-o:before {
  content: \"\\f1c3\";
}
.fa-file-powerpoint-o:before {
  content: \"\\f1c4\";
}
.fa-file-photo-o:before,
.fa-file-picture-o:before,
.fa-file-image-o:before {
  content: \"\\f1c5\";
}
.fa-file-zip-o:before,
.fa-file-archive-o:before {
  content: \"\\f1c6\";
}
.fa-file-sound-o:before,
.fa-file-audio-o:before {
  content: \"\\f1c7\";
}
.fa-file-movie-o:before,
.fa-file-video-o:before {
  content: \"\\f1c8\";
}
.fa-file-code-o:before {
  content: \"\\f1c9\";
}
.fa-vine:before {
  content: \"\\f1ca\";
}
.fa-codepen:before {
  content: \"\\f1cb\";
}
.fa-jsfiddle:before {
  content: \"\\f1cc\";
}
.fa-life-bouy:before,
.fa-life-buoy:before,
.fa-life-saver:before,
.fa-support:before,
.fa-life-ring:before {
  content: \"\\f1cd\";
}
.fa-circle-o-notch:before {
  content: \"\\f1ce\";
}
.fa-ra:before,
.fa-resistance:before,
.fa-rebel:before {
  content: \"\\f1d0\";
}
.fa-ge:before,
.fa-empire:before {
  content: \"\\f1d1\";
}
.fa-git-square:before {
  content: \"\\f1d2\";
}
.fa-git:before {
  content: \"\\f1d3\";
}
.fa-y-combinator-square:before,
.fa-yc-square:before,
.fa-hacker-news:before {
  content: \"\\f1d4\";
}
.fa-tencent-weibo:before {
  content: \"\\f1d5\";
}
.fa-qq:before {
  content: \"\\f1d6\";
}
.fa-wechat:before,
.fa-weixin:before {
  content: \"\\f1d7\";
}
.fa-send:before,
.fa-paper-plane:before {
  content: \"\\f1d8\";
}
.fa-send-o:before,
.fa-paper-plane-o:before {
  content: \"\\f1d9\";
}
.fa-history:before {
  content: \"\\f1da\";
}
.fa-circle-thin:before {
  content: \"\\f1db\";
}
.fa-header:before {
  content: \"\\f1dc\";
}
.fa-paragraph:before {
  content: \"\\f1dd\";
}
.fa-sliders:before {
  content: \"\\f1de\";
}
.fa-share-alt:before {
  content: \"\\f1e0\";
}
.fa-share-alt-square:before {
  content: \"\\f1e1\";
}
.fa-bomb:before {
  content: \"\\f1e2\";
}
.fa-soccer-ball-o:before,
.fa-futbol-o:before {
  content: \"\\f1e3\";
}
.fa-tty:before {
  content: \"\\f1e4\";
}
.fa-binoculars:before {
  content: \"\\f1e5\";
}
.fa-plug:before {
  content: \"\\f1e6\";
}
.fa-slideshare:before {
  content: \"\\f1e7\";
}
.fa-twitch:before {
  content: \"\\f1e8\";
}
.fa-yelp:before {
  content: \"\\f1e9\";
}
.fa-newspaper-o:before {
  content: \"\\f1ea\";
}
.fa-wifi:before {
  content: \"\\f1eb\";
}
.fa-calculator:before {
  content: \"\\f1ec\";
}
.fa-paypal:before {
  content: \"\\f1ed\";
}
.fa-google-wallet:before {
  content: \"\\f1ee\";
}
.fa-cc-visa:before {
  content: \"\\f1f0\";
}
.fa-cc-mastercard:before {
  content: \"\\f1f1\";
}
.fa-cc-discover:before {
  content: \"\\f1f2\";
}
.fa-cc-amex:before {
  content: \"\\f1f3\";
}
.fa-cc-paypal:before {
  content: \"\\f1f4\";
}
.fa-cc-stripe:before {
  content: \"\\f1f5\";
}
.fa-bell-slash:before {
  content: \"\\f1f6\";
}
.fa-bell-slash-o:before {
  content: \"\\f1f7\";
}
.fa-trash:before {
  content: \"\\f1f8\";
}
.fa-copyright:before {
  content: \"\\f1f9\";
}
.fa-at:before {
  content: \"\\f1fa\";
}
.fa-eyedropper:before {
  content: \"\\f1fb\";
}
.fa-paint-brush:before {
  content: \"\\f1fc\";
}
.fa-birthday-cake:before {
  content: \"\\f1fd\";
}
.fa-area-chart:before {
  content: \"\\f1fe\";
}
.fa-pie-chart:before {
  content: \"\\f200\";
}
.fa-line-chart:before {
  content: \"\\f201\";
}
.fa-lastfm:before {
  content: \"\\f202\";
}
.fa-lastfm-square:before {
  content: \"\\f203\";
}
.fa-toggle-off:before {
  content: \"\\f204\";
}
.fa-toggle-on:before {
  content: \"\\f205\";
}
.fa-bicycle:before {
  content: \"\\f206\";
}
.fa-bus:before {
  content: \"\\f207\";
}
.fa-ioxhost:before {
  content: \"\\f208\";
}
.fa-angellist:before {
  content: \"\\f209\";
}
.fa-cc:before {
  content: \"\\f20a\";
}
.fa-shekel:before,
.fa-sheqel:before,
.fa-ils:before {
  content: \"\\f20b\";
}
.fa-meanpath:before {
  content: \"\\f20c\";
}
.fa-buysellads:before {
  content: \"\\f20d\";
}
.fa-connectdevelop:before {
  content: \"\\f20e\";
}
.fa-dashcube:before {
  content: \"\\f210\";
}
.fa-forumbee:before {
  content: \"\\f211\";
}
.fa-leanpub:before {
  content: \"\\f212\";
}
.fa-sellsy:before {
  content: \"\\f213\";
}
.fa-shirtsinbulk:before {
  content: \"\\f214\";
}
.fa-simplybuilt:before {
  content: \"\\f215\";
}
.fa-skyatlas:before {
  content: \"\\f216\";
}
.fa-cart-plus:before {
  content: \"\\f217\";
}
.fa-cart-arrow-down:before {
  content: \"\\f218\";
}
.fa-diamond:before {
  content: \"\\f219\";
}
.fa-ship:before {
  content: \"\\f21a\";
}
.fa-user-secret:before {
  content: \"\\f21b\";
}
.fa-motorcycle:before {
  content: \"\\f21c\";
}
.fa-street-view:before {
  content: \"\\f21d\";
}
.fa-heartbeat:before {
  content: \"\\f21e\";
}
.fa-venus:before {
  content: \"\\f221\";
}
.fa-mars:before {
  content: \"\\f222\";
}
.fa-mercury:before {
  content: \"\\f223\";
}
.fa-intersex:before,
.fa-transgender:before {
  content: \"\\f224\";
}
.fa-transgender-alt:before {
  content: \"\\f225\";
}
.fa-venus-double:before {
  content: \"\\f226\";
}
.fa-mars-double:before {
  content: \"\\f227\";
}
.fa-venus-mars:before {
  content: \"\\f228\";
}
.fa-mars-stroke:before {
  content: \"\\f229\";
}
.fa-mars-stroke-v:before {
  content: \"\\f22a\";
}
.fa-mars-stroke-h:before {
  content: \"\\f22b\";
}
.fa-neuter:before {
  content: \"\\f22c\";
}
.fa-genderless:before {
  content: \"\\f22d\";
}
.fa-facebook-official:before {
  content: \"\\f230\";
}
.fa-pinterest-p:before {
  content: \"\\f231\";
}
.fa-whatsapp:before {
  content: \"\\f232\";
}
.fa-server:before {
  content: \"\\f233\";
}
.fa-user-plus:before {
  content: \"\\f234\";
}
.fa-user-times:before {
  content: \"\\f235\";
}
.fa-hotel:before,
.fa-bed:before {
  content: \"\\f236\";
}
.fa-viacoin:before {
  content: \"\\f237\";
}
.fa-train:before {
  content: \"\\f238\";
}
.fa-subway:before {
  content: \"\\f239\";
}
.fa-medium:before {
  content: \"\\f23a\";
}
.fa-yc:before,
.fa-y-combinator:before {
  content: \"\\f23b\";
}
.fa-optin-monster:before {
  content: \"\\f23c\";
}
.fa-opencart:before {
  content: \"\\f23d\";
}
.fa-expeditedssl:before {
  content: \"\\f23e\";
}
.fa-battery-4:before,
.fa-battery:before,
.fa-battery-full:before {
  content: \"\\f240\";
}
.fa-battery-3:before,
.fa-battery-three-quarters:before {
  content: \"\\f241\";
}
.fa-battery-2:before,
.fa-battery-half:before {
  content: \"\\f242\";
}
.fa-battery-1:before,
.fa-battery-quarter:before {
  content: \"\\f243\";
}
.fa-battery-0:before,
.fa-battery-empty:before {
  content: \"\\f244\";
}
.fa-mouse-pointer:before {
  content: \"\\f245\";
}
.fa-i-cursor:before {
  content: \"\\f246\";
}
.fa-object-group:before {
  content: \"\\f247\";
}
.fa-object-ungroup:before {
  content: \"\\f248\";
}
.fa-sticky-note:before {
  content: \"\\f249\";
}
.fa-sticky-note-o:before {
  content: \"\\f24a\";
}
.fa-cc-jcb:before {
  content: \"\\f24b\";
}
.fa-cc-diners-club:before {
  content: \"\\f24c\";
}
.fa-clone:before {
  content: \"\\f24d\";
}
.fa-balance-scale:before {
  content: \"\\f24e\";
}
.fa-hourglass-o:before {
  content: \"\\f250\";
}
.fa-hourglass-1:before,
.fa-hourglass-start:before {
  content: \"\\f251\";
}
.fa-hourglass-2:before,
.fa-hourglass-half:before {
  content: \"\\f252\";
}
.fa-hourglass-3:before,
.fa-hourglass-end:before {
  content: \"\\f253\";
}
.fa-hourglass:before {
  content: \"\\f254\";
}
.fa-hand-grab-o:before,
.fa-hand-rock-o:before {
  content: \"\\f255\";
}
.fa-hand-stop-o:before,
.fa-hand-paper-o:before {
  content: \"\\f256\";
}
.fa-hand-scissors-o:before {
  content: \"\\f257\";
}
.fa-hand-lizard-o:before {
  content: \"\\f258\";
}
.fa-hand-spock-o:before {
  content: \"\\f259\";
}
.fa-hand-pointer-o:before {
  content: \"\\f25a\";
}
.fa-hand-peace-o:before {
  content: \"\\f25b\";
}
.fa-trademark:before {
  content: \"\\f25c\";
}
.fa-registered:before {
  content: \"\\f25d\";
}
.fa-creative-commons:before {
  content: \"\\f25e\";
}
.fa-gg:before {
  content: \"\\f260\";
}
.fa-gg-circle:before {
  content: \"\\f261\";
}
.fa-tripadvisor:before {
  content: \"\\f262\";
}
.fa-odnoklassniki:before {
  content: \"\\f263\";
}
.fa-odnoklassniki-square:before {
  content: \"\\f264\";
}
.fa-get-pocket:before {
  content: \"\\f265\";
}
.fa-wikipedia-w:before {
  content: \"\\f266\";
}
.fa-safari:before {
  content: \"\\f267\";
}
.fa-chrome:before {
  content: \"\\f268\";
}
.fa-firefox:before {
  content: \"\\f269\";
}
.fa-opera:before {
  content: \"\\f26a\";
}
.fa-internet-explorer:before {
  content: \"\\f26b\";
}
.fa-tv:before,
.fa-television:before {
  content: \"\\f26c\";
}
.fa-contao:before {
  content: \"\\f26d\";
}
.fa-500px:before {
  content: \"\\f26e\";
}
.fa-amazon:before {
  content: \"\\f270\";
}
.fa-calendar-plus-o:before {
  content: \"\\f271\";
}
.fa-calendar-minus-o:before {
  content: \"\\f272\";
}
.fa-calendar-times-o:before {
  content: \"\\f273\";
}
.fa-calendar-check-o:before {
  content: \"\\f274\";
}
.fa-industry:before {
  content: \"\\f275\";
}
.fa-map-pin:before {
  content: \"\\f276\";
}
.fa-map-signs:before {
  content: \"\\f277\";
}
.fa-map-o:before {
  content: \"\\f278\";
}
.fa-map:before {
  content: \"\\f279\";
}
.fa-commenting:before {
  content: \"\\f27a\";
}
.fa-commenting-o:before {
  content: \"\\f27b\";
}
.fa-houzz:before {
  content: \"\\f27c\";
}
.fa-vimeo:before {
  content: \"\\f27d\";
}
.fa-black-tie:before {
  content: \"\\f27e\";
}
.fa-fonticons:before {
  content: \"\\f280\";
}
.fa-reddit-alien:before {
  content: \"\\f281\";
}
.fa-edge:before {
  content: \"\\f282\";
}
.fa-credit-card-alt:before {
  content: \"\\f283\";
}
.fa-codiepie:before {
  content: \"\\f284\";
}
.fa-modx:before {
  content: \"\\f285\";
}
.fa-fort-awesome:before {
  content: \"\\f286\";
}
.fa-usb:before {
  content: \"\\f287\";
}
.fa-product-hunt:before {
  content: \"\\f288\";
}
.fa-mixcloud:before {
  content: \"\\f289\";
}
.fa-scribd:before {
  content: \"\\f28a\";
}
.fa-pause-circle:before {
  content: \"\\f28b\";
}
.fa-pause-circle-o:before {
  content: \"\\f28c\";
}
.fa-stop-circle:before {
  content: \"\\f28d\";
}
.fa-stop-circle-o:before {
  content: \"\\f28e\";
}
.fa-shopping-bag:before {
  content: \"\\f290\";
}
.fa-shopping-basket:before {
  content: \"\\f291\";
}
.fa-hashtag:before {
  content: \"\\f292\";
}
.fa-bluetooth:before {
  content: \"\\f293\";
}
.fa-bluetooth-b:before {
  content: \"\\f294\";
}
.fa-percent:before {
  content: \"\\f295\";
}
.fa-gitlab:before {
  content: \"\\f296\";
}
.fa-wpbeginner:before {
  content: \"\\f297\";
}
.fa-wpforms:before {
  content: \"\\f298\";
}
.fa-envira:before {
  content: \"\\f299\";
}
.fa-universal-access:before {
  content: \"\\f29a\";
}
.fa-wheelchair-alt:before {
  content: \"\\f29b\";
}
.fa-question-circle-o:before {
  content: \"\\f29c\";
}
.fa-blind:before {
  content: \"\\f29d\";
}
.fa-audio-description:before {
  content: \"\\f29e\";
}
.fa-volume-control-phone:before {
  content: \"\\f2a0\";
}
.fa-braille:before {
  content: \"\\f2a1\";
}
.fa-assistive-listening-systems:before {
  content: \"\\f2a2\";
}
.fa-asl-interpreting:before,
.fa-american-sign-language-interpreting:before {
  content: \"\\f2a3\";
}
.fa-deafness:before,
.fa-hard-of-hearing:before,
.fa-deaf:before {
  content: \"\\f2a4\";
}
.fa-glide:before {
  content: \"\\f2a5\";
}
.fa-glide-g:before {
  content: \"\\f2a6\";
}
.fa-signing:before,
.fa-sign-language:before {
  content: \"\\f2a7\";
}
.fa-low-vision:before {
  content: \"\\f2a8\";
}
.fa-viadeo:before {
  content: \"\\f2a9\";
}
.fa-viadeo-square:before {
  content: \"\\f2aa\";
}
.fa-snapchat:before {
  content: \"\\f2ab\";
}
.fa-snapchat-ghost:before {
  content: \"\\f2ac\";
}
.fa-snapchat-square:before {
  content: \"\\f2ad\";
}
.fa-pied-piper:before {
  content: \"\\f2ae\";
}
.fa-first-order:before {
  content: \"\\f2b0\";
}
.fa-yoast:before {
  content: \"\\f2b1\";
}
.fa-themeisle:before {
  content: \"\\f2b2\";
}
.fa-google-plus-circle:before,
.fa-google-plus-official:before {
  content: \"\\f2b3\";
}
.fa-fa:before,
.fa-font-awesome:before {
  content: \"\\f2b4\";
}
.fa-handshake-o:before {
  content: \"\\f2b5\";
}
.fa-envelope-open:before {
  content: \"\\f2b6\";
}
.fa-envelope-open-o:before {
  content: \"\\f2b7\";
}
.fa-linode:before {
  content: \"\\f2b8\";
}
.fa-address-book:before {
  content: \"\\f2b9\";
}
.fa-address-book-o:before {
  content: \"\\f2ba\";
}
.fa-vcard:before,
.fa-address-card:before {
  content: \"\\f2bb\";
}
.fa-vcard-o:before,
.fa-address-card-o:before {
  content: \"\\f2bc\";
}
.fa-user-circle:before {
  content: \"\\f2bd\";
}
.fa-user-circle-o:before {
  content: \"\\f2be\";
}
.fa-user-o:before {
  content: \"\\f2c0\";
}
.fa-id-badge:before {
  content: \"\\f2c1\";
}
.fa-drivers-license:before,
.fa-id-card:before {
  content: \"\\f2c2\";
}
.fa-drivers-license-o:before,
.fa-id-card-o:before {
  content: \"\\f2c3\";
}
.fa-quora:before {
  content: \"\\f2c4\";
}
.fa-free-code-camp:before {
  content: \"\\f2c5\";
}
.fa-telegram:before {
  content: \"\\f2c6\";
}
.fa-thermometer-4:before,
.fa-thermometer:before,
.fa-thermometer-full:before {
  content: \"\\f2c7\";
}
.fa-thermometer-3:before,
.fa-thermometer-three-quarters:before {
  content: \"\\f2c8\";
}
.fa-thermometer-2:before,
.fa-thermometer-half:before {
  content: \"\\f2c9\";
}
.fa-thermometer-1:before,
.fa-thermometer-quarter:before {
  content: \"\\f2ca\";
}
.fa-thermometer-0:before,
.fa-thermometer-empty:before {
  content: \"\\f2cb\";
}
.fa-shower:before {
  content: \"\\f2cc\";
}
.fa-bathtub:before,
.fa-s15:before,
.fa-bath:before {
  content: \"\\f2cd\";
}
.fa-podcast:before {
  content: \"\\f2ce\";
}
.fa-window-maximize:before {
  content: \"\\f2d0\";
}
.fa-window-minimize:before {
  content: \"\\f2d1\";
}
.fa-window-restore:before {
  content: \"\\f2d2\";
}
.fa-times-rectangle:before,
.fa-window-close:before {
  content: \"\\f2d3\";
}
.fa-times-rectangle-o:before,
.fa-window-close-o:before {
  content: \"\\f2d4\";
}
.fa-bandcamp:before {
  content: \"\\f2d5\";
}
.fa-grav:before {
  content: \"\\f2d6\";
}
.fa-etsy:before {
  content: \"\\f2d7\";
}
.fa-imdb:before {
  content: \"\\f2d8\";
}
.fa-ravelry:before {
  content: \"\\f2d9\";
}
.fa-eercast:before {
  content: \"\\f2da\";
}
.fa-microchip:before {
  content: \"\\f2db\";
}
.fa-snowflake-o:before {
  content: \"\\f2dc\";
}
.fa-superpowers:before {
  content: \"\\f2dd\";
}
.fa-wpexplorer:before {
  content: \"\\f2de\";
}
.fa-meetup:before {
  content: \"\\f2e0\";
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
.chosen-select {
  width: 100%;
}
.chosen-select-deselect {
  width: 100%;
}
.chosen-container {
  display: inline-block;
  font-size: 13px;
  position: relative;
  vertical-align: middle;
}
.chosen-container .group-name {
  margin-right: 2px;
}
.chosen-container .chosen-drop {
  background: #fff;
  border: 1px solid #d5d5d5;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: 0 8px 8px rgba(0, 0, 0, .25);
  box-shadow: 0 8px 8px rgba(0, 0, 0, .25);
  margin-top: -1px;
  position: absolute;
  top: 100%;
  left: -9000px;
  z-index: 1060;
}
.chosen-container.chosen-with-drop .chosen-drop {
  left: 0;
  right: 0;
}
.chosen-container .chosen-results {
  color: #596776;
  margin: 0 4px 4px 0;
  max-height: 240px;
  padding: 0 0 0 4px;
  position: relative;
  overflow-x: hidden;
  overflow-y: auto;
  -webkit-overflow-scrolling: touch;
}
.chosen-container .chosen-results li {
  display: none;
  line-height: 1.3856;
  list-style: none;
  margin: 0;
  padding: 5px 6px;
}
.chosen-container .chosen-results li em {
  background: #feffde;
  font-style: normal;
}
.chosen-container .chosen-results li.group-result {
  display: list-item;
  cursor: default;
  color: #999;
  font-weight: bold;
}
.chosen-container .chosen-results li.group-option {
  padding-left: 15px;
}
.chosen-container .chosen-results li.active-result {
  cursor: pointer;
  display: list-item;
}
.chosen-container .chosen-results li.highlighted {
  background-color: #4E5D9D;
  background-image: none;
  color: white;
}
.chosen-container .chosen-results li.highlighted em {
  background: transparent;
}
.chosen-container .chosen-results li.disabled-result {
  display: list-item;
  color: #a0acb8;
}
.chosen-container .chosen-results .no-results {
  background: #ebedf0;
  display: list-item;
}
.chosen-container .chosen-results-scroll {
  background: white;
  margin: 0 4px;
  position: absolute;
  text-align: center;
  width: 321px;
  z-index: 1;
}
.chosen-container .chosen-results-scroll span {
  display: inline-block;
  height: 1.3856;
  text-indent: -5000px;
  width: 9px;
}
.chosen-container .chosen-results-scroll-down {
  bottom: 0;
}
.chosen-container .chosen-results-scroll-down span {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -4px -3px;
}
.chosen-container .chosen-results-scroll-up span {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -22px -3px;
}
.chosen-container-single .chosen-single {
  background-color: #fff;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  border: 1px solid #d5d5d5;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  color: #596776;
  display: block;
  height: 32px;
  overflow: hidden;
  line-height: 32px;
  padding: 0 0 0 8px;
  position: relative;
  text-decoration: none;
  white-space: nowrap;
}
.chosen-container-single .chosen-single span {
  display: block;
  margin-right: 26px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.chosen-container-single .chosen-single abbr {
  background: url(\"chosen/chosen-sprite.png\") right top no-repeat;
  display: block;
  font-size: 1px;
  height: 10px;
  position: absolute;
  right: 26px;
  top: 11px;
  width: 12px;
}
.chosen-container-single .chosen-single abbr:hover {
  background-position: right -11px;
}
.chosen-container-single .chosen-single.chosen-disabled .chosen-single abbr:hover {
  background-position: right 2px;
}
.chosen-container-single .chosen-single div {
  display: block;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  width: 18px;
}
.chosen-container-single .chosen-single div b {
  background: url(\"chosen/chosen-sprite.png\") no-repeat 0 7px;
  display: block;
  height: 100%;
  width: 100%;
}
.chosen-container-single .chosen-search {
  margin: 0;
  padding: 3px 4px;
  position: relative;
  white-space: nowrap;
  z-index: 1000;
}
.chosen-container-single .chosen-search input[type=\"text\"] {
  background: url(\"chosen/chosen-sprite.png\") no-repeat 100% -20px, #fff;
  border: 1px solid #d5d5d5;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  margin: 1px 0;
  padding: 4px 20px 4px 4px;
  width: 100%;
  max-width: 100%;
}
.chosen-container-single .chosen-drop {
  margin-top: -1px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
}
.chosen-container-single-nosearch .chosen-search input {
  position: absolute;
  left: -9000px;
}
.chosen-container-multi .chosen-choices {
  background-color: #fff;
  border: 1px solid #d5d5d5;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  cursor: text;
  height: auto !important;
  height: 1%;
  margin: 0;
  overflow: hidden;
  padding: 0;
  position: relative;
}
.chosen-container-multi .chosen-choices li {
  float: left;
  list-style: none;
}
.chosen-container-multi .chosen-choices .search-field {
  margin: 0;
  padding: 0;
  white-space: nowrap;
}
.chosen-container-multi .chosen-choices .search-field input[type=\"text\"] {
  background: transparent !important;
  border: 0 !important;
  -webkit-box-shadow: none;
  box-shadow: none;
  color: #596776;
  height: 30px;
  margin: 0;
  padding: 4px;
  outline: 0;
}
.chosen-container-multi .chosen-choices .search-choice {
  -webkit-background-clip: padding-box;
  -moz-background-clip: padding;
  background-clip: padding-box;
  background-color: #ebedf0;
  border: 1px solid #d5d5d5;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
  color: #3c4650;
  cursor: default;
  line-height: 13px;
  margin: 6px 0 3px 5px;
  padding: 3px 20px 3px 5px;
  position: relative;
}
.chosen-container-multi .chosen-choices .search-choice .search-choice-close {
  background: url(\"chosen/chosen-sprite.png\") right top no-repeat;
  display: block;
  font-size: 1px;
  height: 10px;
  position: absolute;
  right: 4px;
  top: 5px;
  width: 12px;
  cursor: pointer;
}
.chosen-container-multi .chosen-choices .search-choice .search-choice-close:hover {
  background-position: right -11px;
}
.chosen-container-multi .chosen-choices .search-choice-focus {
  background: #d4d4d4;
}
.chosen-container-multi .chosen-choices .search-choice-focus .search-choice-close {
  background-position: right -11px;
}
.chosen-container-multi .chosen-results {
  margin: 0 0 0 0;
  padding: 0;
}
.chosen-container-multi .chosen-drop .result-selected {
  display: none;
}
.chosen-container-active .chosen-single {
  border: 1px solid #bcbcbc;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active.chosen-with-drop .chosen-single {
  background-color: #fff;
  border: 1px solid #bcbcbc;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active.chosen-with-drop .chosen-single div {
  background: transparent;
  border-left: none;
}
.chosen-container-active.chosen-with-drop .chosen-single div b {
  background-position: -18px 7px;
}
.chosen-container-active .chosen-choices {
  border: 1px solid #bcbcbc;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  box-shadow: 0 1px 1px rgba(0, 0, 0, .075) inset, 0 0 8px rgba(82, 168, 236, .6);
  -webkit-transition: border linear .2s, box-shadow linear .2s;
  -o-transition: border linear .2s, box-shadow linear .2s;
  transition: border linear .2s, box-shadow linear .2s;
}
.chosen-container-active .chosen-choices .search-field input[type=\"text\"] {
  color: #111 !important;
}
.chosen-container-active.chosen-with-drop .chosen-choices {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.chosen-disabled {
  cursor: default;
  opacity: 0.5 !important;
}
.chosen-disabled .chosen-single {
  cursor: default;
}
.chosen-disabled .chosen-choices .search-choice .search-choice-close {
  cursor: default;
}
.chosen-rtl {
  text-align: right;
}
.chosen-rtl .chosen-single {
  padding: 0 8px 0 0;
  overflow: visible;
}
.chosen-rtl .chosen-single span {
  margin-left: 26px;
  margin-right: 0;
  direction: rtl;
}
.chosen-rtl .chosen-single div {
  left: 7px;
  right: auto;
}
.chosen-rtl .chosen-single abbr {
  left: 26px;
  right: auto;
}
.chosen-rtl .chosen-choices .search-field input[type=\"text\"] {
  direction: rtl;
}
.chosen-rtl .chosen-choices li {
  float: right;
}
.chosen-rtl .chosen-choices .search-choice {
  margin: 6px 5px 3px 0;
  padding: 3px 5px 3px 19px;
}
.chosen-rtl .chosen-choices .search-choice .search-choice-close {
  background-position: right top;
  left: 4px;
  right: auto;
}
.chosen-rtl.chosen-container-single .chosen-results {
  margin: 0 0 4px 4px;
  padding: 0 4px 0 0;
}
.chosen-rtl .chosen-results .group-option {
  padding-left: 0;
  padding-right: 15px;
}
.chosen-rtl.chosen-container-active.chosen-with-drop .chosen-single div {
  border-right: none;
}
.chosen-rtl .chosen-search input[type=\"text\"] {
  background: url(\"chosen/chosen-sprite.png\") no-repeat -28px -20px, #fff;
  direction: rtl;
  padding: 4px 5px 4px 20px;
}
.input-group .chosen-container:last-child .chosen-single,
.input-group .chosen-container:last-child .chosen-default,
.input-group .chosen-container:last-child .chosen-choices {
  border-top-left-radius: 0px;
  border-bottom-left-radius: 0px;
}
.input-group .chosen-container:not(:last-child) .chosen-single,
.input-group .chosen-container:not(:last-child) .chosen-default,
.input-group .chosen-container:not(:last-child) .chosen-choices {
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
}
.form-inline .chosen-container {
  display: inline-table;
  vertical-align: middle;
  min-width: 200px;
}
.chosen-container .default,
.chosen-container .chosen-default {
  color: #a0acb8 !important;
}
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min-resolution: 2dppx) {
  .chosen-rtl .chosen-search input[type=\"text\"],
  .chosen-container-single .chosen-single abbr,
  .chosen-container-single .chosen-single div b,
  .chosen-container-single .chosen-search input[type=\"text\"],
  .chosen-container-multi .chosen-choices .search-choice .search-choice-close,
  .chosen-container .chosen-results-scroll-down span,
  .chosen-container .chosen-results-scroll-up span {
    background-image: url(\"chosen/chosen-sprite@2x.png\") !important;
    background-size: 52px 37px !important;
    background-repeat: no-repeat !important;
  }
}
.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: #a94442;
}
.has-error select.form-control + .chosen-container.chosen-container-single .chosen-single,
.has-error select.form-control + .chosen-container-multi .chosen-choices {
  border-color: #a94442;
}
:root {
  --timing: 0.3s ease;
  --all: all var(--timing);
  --border-interactive: #4e5e9e;
  --border-subtle: #e0e0e0;
  --border-subtle-alt: #c6c6c6;
  --border-subtle-selected: #c6c6c6;
  --border-strong: #8d8d8d;
  --border-tile: #c6c6c6;
  --border-tile-alt: #a8a8a8;
  --border-inverse: #161616;
  --border-disabled: #c6c6c6;
  --layer: #f4f4f4;
  --layer-alt: #ffffff;
  --layer-hover: #e8e8e8;
  --layer-active: #c6c6c6;
  --layer-selected: #e0e0e0;
  --layer-selected-hover: #cacaca;
  --layer-selected-inverse: #161616;
  --layer-selected-disabled: #8d8d8d;
  --icon-primary: #161616;
  --icon-secondary: #525252;
  --icon-on-color: #ffffff;
  --icon-on-color-disabled: #8d8d8d;
  --icon-interactive: #4e5e9e;
  --icon-inverse: #ffffff;
  --icon-disabled: rgba(22, 22, 22, 0.25);
}
@media (prefers-reduced-motion: reduce) {
  :root {
    --timing: 0;
  }
}
.ms-container {
  background: transparent url('multiselect/switch.png') no-repeat 50% 50%;
  /*width: 370px;*/
}
.ms-container:after {
  content: \".\";
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
  clear: both;
  min-height: 0;
  visibility: hidden;
}
.ms-container .ms-selectable,
.ms-container .ms-selection {
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
}
.ms-container .ms-selection {
  float: right;
}
.ms-container .ms-list {
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
  -moz-transition: border linear 0.2s, box-shadow linear 0.2s;
  -ms-transition: border linear 0.2s, box-shadow linear 0.2s;
  -o-transition: border linear 0.2s, box-shadow linear 0.2s;
  transition: border linear 0.2s, box-shadow linear 0.2s;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  position: relative;
  height: 200px;
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
}
.ms-container .ms-list.ms-focus {
  border-color: #4e5e9e;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), rgba(78, 94, 158, 0.6);
  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(78, 94, 158, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(78, 94, 158, 0.6);
  outline: 0;
  outline: thin dotted \\9;
}
.ms-container ul {
  margin: 0;
  list-style-type: none;
  padding: 0;
}
.ms-container .ms-optgroup-container {
  width: 100%;
}
.ms-container .ms-optgroup-label {
  margin: 0;
  padding: 5px 0px 0px 5px;
  cursor: pointer;
  color: #999;
}
.ms-container .ms-selectable li.ms-elem-selectable,
.ms-container .ms-selection li.ms-elem-selection {
  border-bottom: 1px #eee solid;
  padding: 2px 10px;
  color: #555;
  font-size: 14px;
}
.ms-container .ms-selectable li.ms-hover,
.ms-container .ms-selection li.ms-hover {
  cursor: pointer;
  color: #fff;
  text-decoration: none;
  background-color: #4e5e9e;
}
.ms-container .ms-selectable li.disabled,
.ms-container .ms-selection li.disabled {
  background-color: #eee;
  color: #aaa;
  cursor: text;
}
.ms-search {
  width: 100%;
  margin-bottom: 5px;
  height: auto;
}
.minicolors {
  position: relative;
}
.minicolors-sprite {
  background-image: url(jquery.minicolors.png);
}
.minicolors-swatch {
  position: absolute;
  vertical-align: middle;
  background-position: -80px 0;
  cursor: text;
  padding: 0;
  margin: 0;
  display: inline-block;
}
.minicolors-swatch::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  box-shadow: inset 0 0 0 1px rgba(0, 0, 0, 0.15);
  border-radius: 2px;
}
.minicolors-swatch-color {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}
.minicolors input[type=hidden] + .minicolors-swatch {
  width: 28px;
  position: static;
  cursor: pointer;
}
.minicolors input[type=hidden][disabled] + .minicolors-swatch {
  cursor: default;
}
/* Panel */
.minicolors-panel {
  position: absolute;
  width: 173px;
  background: white;
  border-radius: 2px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
  z-index: 99999;
  box-sizing: content-box;
  display: none;
  touch-action: none;
}
.minicolors-panel.minicolors-visible {
  display: block;
}
/* Panel positioning */
.minicolors-position-top .minicolors-panel {
  top: -154px;
}
.minicolors-position-right .minicolors-panel {
  right: 0;
}
.minicolors-position-bottom .minicolors-panel {
  top: auto;
}
.minicolors-position-left .minicolors-panel {
  left: 0;
}
.minicolors-with-opacity .minicolors-panel {
  width: 194px;
}
.minicolors .minicolors-grid {
  position: relative;
  top: 1px;
  left: 1px;
  /* LTR */
  width: 150px;
  height: 150px;
  margin-bottom: 2px;
  background-position: -120px 0;
  cursor: crosshair;
}
[dir=rtl] .minicolors .minicolors-grid {
  right: 1px;
}
.minicolors .minicolors-grid-inner {
  position: absolute;
  top: 0;
  left: 0;
  width: 150px;
  height: 150px;
}
.minicolors-slider-saturation .minicolors-grid {
  background-position: -420px 0;
}
.minicolors-slider-saturation .minicolors-grid-inner {
  background-position: -270px 0;
  background-image: inherit;
}
.minicolors-slider-brightness .minicolors-grid {
  background-position: -570px 0;
}
.minicolors-slider-brightness .minicolors-grid-inner {
  background-color: black;
}
.minicolors-slider-wheel .minicolors-grid {
  background-position: -720px 0;
}
.minicolors-slider,
.minicolors-opacity-slider {
  position: absolute;
  top: 1px;
  left: 152px;
  /* LTR */
  width: 20px;
  height: 150px;
  background-color: white;
  background-position: 0 0;
  cursor: row-resize;
}
[dir=rtl] .minicolors-slider,
[dir=rtl] .minicolors-opacity-slider {
  right: 152px;
}
.minicolors-slider-saturation .minicolors-slider {
  background-position: -60px 0;
}
.minicolors-slider-brightness .minicolors-slider {
  background-position: -20px 0;
}
.minicolors-slider-wheel .minicolors-slider {
  background-position: -20px 0;
}
.minicolors-opacity-slider {
  left: 173px;
  /* LTR */
  background-position: -40px 0;
  display: none;
}
[dir=rtl] .minicolors-opacity-slider {
  right: 173px;
}
.minicolors-with-opacity .minicolors-opacity-slider {
  display: block;
}
/* Pickers */
.minicolors-grid .minicolors-picker {
  position: absolute;
  top: 70px;
  left: 70px;
  width: 12px;
  height: 12px;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
  border-radius: 10px;
  margin-top: -6px;
  margin-left: -6px;
  background: none;
}
.minicolors-grid .minicolors-picker > div {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  border-radius: 8px;
  border: solid 2px white;
  box-sizing: content-box;
}
.minicolors-picker {
  position: absolute;
  top: 0;
  left: 0;
  width: 18px;
  height: 3px;
  background: white;
  box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.25);
  border-radius: 2px;
  margin-top: -2px;
  margin-left: 1px;
  box-sizing: content-box;
}
/* Swatches */
.minicolors-swatches,
.minicolors-swatches li {
  margin: 5px 0 3px 5px;
  /* LTR */
  padding: 0;
  list-style: none;
  overflow: hidden;
}
[dir=rtl] .minicolors-swatches,
[dir=rtl] .minicolors-swatches li {
  margin: 5px 5px 3px 0;
}
.minicolors-swatches .minicolors-swatch {
  position: relative;
  float: left;
  /* LTR */
  cursor: pointer;
  margin: 0 4px 0 0;
  /* LTR */
}
[dir=rtl] .minicolors-swatches .minicolors-swatch {
  float: right;
  margin: 0 0 0 4px;
}
.minicolors-with-opacity .minicolors-swatches .minicolors-swatch {
  margin-right: 7px;
  /* LTR */
}
[dir=rtl] .minicolors-with-opacity .minicolors-swatches .minicolors-swatch {
  margin-right: 0;
  margin-left: 7px;
}
.minicolors-swatch.selected {
  border-color: #000;
}
/* Inline controls */
.minicolors-inline {
  display: inline-block;
}
.minicolors-inline .minicolors-input {
  display: none !important;
}
.minicolors-inline .minicolors-panel {
  position: relative;
  top: auto;
  left: auto;
  /* LTR */
  box-shadow: none;
  z-index: auto;
  display: inline-block;
}
[dir=rtl] .minicolors-inline .minicolors-panel {
  right: auto;
}
/* Default theme */
.minicolors-theme-default .minicolors-swatch {
  top: 5px;
  left: 5px;
  /* LTR */
  width: 18px;
  height: 18px;
}
[dir=rtl] .minicolors-theme-default .minicolors-swatch {
  right: 5px;
}
.minicolors-theme-default .minicolors-swatches .minicolors-swatch {
  margin-bottom: 2px;
  top: 0;
  left: 0;
  /* LTR */
  width: 18px;
  height: 18px;
}
[dir=rtl] .minicolors-theme-default .minicolors-swatches .minicolors-swatch {
  right: 0;
}
.minicolors-theme-default.minicolors-position-right .minicolors-swatch {
  left: auto;
  /* LTR */
  right: 5px;
  /* LTR */
}
[dir=rtl] .minicolors-theme-default.minicolors-position-left .minicolors-swatch {
  right: auto;
  left: 5px;
}
.minicolors-theme-default.minicolors {
  width: auto;
  display: inline-block;
}
.minicolors-theme-default .minicolors-input {
  height: 20px;
  width: auto;
  display: inline-block;
  padding-left: 26px;
  /* LTR */
}
[dir=rtl] .minicolors-theme-default .minicolors-input {
  text-align: right;
  unicode-bidi: plaintext;
  padding-left: 1px;
  padding-right: 26px;
}
.minicolors-theme-default.minicolors-position-right .minicolors-input {
  padding-right: 26px;
  /* LTR */
  padding-left: inherit;
  /* LTR */
}
[dir=rtl] .minicolors-theme-default.minicolors-position-left .minicolors-input {
  padding-right: inherit;
  padding-left: 26px;
}
/* Bootstrap theme */
.minicolors-theme-bootstrap .minicolors-swatch {
  z-index: 2;
  top: 3px;
  left: 3px;
  /* LTR */
  width: 28px;
  height: 28px;
  border-radius: 2px;
}
[dir=rtl] .minicolors-theme-bootstrap .minicolors-swatch {
  right: 3px;
}
.minicolors-theme-bootstrap .minicolors-swatches .minicolors-swatch {
  margin-bottom: 2px;
  top: 0;
  left: 0;
  /* LTR */
  width: 20px;
  height: 20px;
}
[dir=rtl] .minicolors-theme-bootstrap .minicolors-swatches .minicolors-swatch {
  right: 0;
}
.minicolors-theme-bootstrap .minicolors-swatch-color {
  border-radius: inherit;
}
.minicolors-theme-bootstrap.minicolors-position-right > .minicolors-swatch {
  left: auto;
  /* LTR */
  right: 3px;
  /* LTR */
}
[dir=rtl] .minicolors-theme-bootstrap.minicolors-position-left > .minicolors-swatch {
  right: auto;
  left: 3px;
}
.minicolors-theme-bootstrap .minicolors-input {
  float: none;
  padding-left: 44px;
  /* LTR */
}
[dir=rtl] .minicolors-theme-bootstrap .minicolors-input {
  text-align: right;
  unicode-bidi: plaintext;
  padding-left: 12px;
  padding-right: 44px;
}
.minicolors-theme-bootstrap.minicolors-position-right .minicolors-input {
  padding-right: 44px;
  /* LTR */
  padding-left: 12px;
  /* LTR */
}
[dir=rtl] .minicolors-theme-bootstrap.minicolors-position-left .minicolors-input {
  padding-right: 12px;
  padding-left: 44px;
}
.minicolors-theme-bootstrap .minicolors-input.input-lg + .minicolors-swatch {
  top: 4px;
  left: 4px;
  /* LTR */
  width: 37px;
  height: 37px;
  border-radius: 5px;
}
[dir=rtl] .minicolors-theme-bootstrap .minicolors-input.input-lg + .minicolors-swatch {
  right: 4px;
}
.minicolors-theme-bootstrap .minicolors-input.input-sm + .minicolors-swatch {
  width: 24px;
  height: 24px;
}
.minicolors-theme-bootstrap .minicolors-input.input-xs + .minicolors-swatch {
  width: 18px;
  height: 18px;
}
.input-group .minicolors-theme-bootstrap:not(:first-child) .minicolors-input {
  border-top-left-radius: 0;
  /* LTR */
  border-bottom-left-radius: 0;
  /* LTR */
}
[dir=rtl] .input-group .minicolors-theme-bootstrap .minicolors-input {
  border-radius: 4px;
}
[dir=rtl] .input-group .minicolors-theme-bootstrap:not(:first-child) .minicolors-input {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
[dir=rtl] .input-group .minicolors-theme-bootstrap:not(:last-child) .minicolors-input {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
/* bootstrap input-group rtl override */
[dir=rtl] .input-group .form-control,
[dir=rtl] .input-group-addon,
[dir=rtl] .input-group-btn > .btn,
[dir=rtl] .input-group-btn > .btn-group > .btn,
[dir=rtl] .input-group-btn > .dropdown-toggle {
  border: 1px solid #ccc;
  border-radius: 4px;
}
[dir=rtl] .input-group .form-control:first-child,
[dir=rtl] .input-group-addon:first-child,
[dir=rtl] .input-group-btn:first-child > .btn,
[dir=rtl] .input-group-btn:first-child > .btn-group > .btn,
[dir=rtl] .input-group-btn:first-child > .dropdown-toggle,
[dir=rtl] .input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
[dir=rtl] .input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-left: 0;
}
[dir=rtl] .input-group .form-control:last-child,
[dir=rtl] .input-group-addon:last-child,
[dir=rtl] .input-group-btn:last-child > .btn,
[dir=rtl] .input-group-btn:last-child > .btn-group > .btn,
[dir=rtl] .input-group-btn:last-child > .dropdown-toggle,
[dir=rtl] .input-group-btn:first-child > .btn:not(:first-child),
[dir=rtl] .input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
/* Semantic Ui theme */
.minicolors-theme-semanticui .minicolors-swatch {
  top: 0;
  left: 0;
  /* LTR */
  padding: 18px;
}
[dir=rtl] .minicolors-theme-semanticui .minicolors-swatch {
  right: 0;
}
.minicolors-theme-semanticui input {
  text-indent: 30px;
}
.minicolors-sprite {
  background-image: url(\"data:image/png;base64,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\");
}
span.emoji-sizer {
  line-height: 1.013em;
  font-size: 1.375em;
  margin: -0.05em 0;
}
span.emoji-outer {
  display: -moz-inline-box;
  display: inline-block;
  *display: inline;
  height: 1em;
  width: 1em;
}
span.emoji-inner {
  background: url(emoji/emoji.png);
  /*background-size: 3500% !important; */
  display: -moz-inline-box;
  display: inline-block;
  text-indent: -9999px;
  width: 100%;
  height: 100%;
  vertical-align: baseline;
  *vertical-align: auto;
  *zoom: 1;
}
span.emoji-inner {
  background-size: 4100%;
}
.emojia9 {
  background-position: 0% 0% !important;
}
.emojiae {
  background-position: 0% 2.5% !important;
}
.emoji203c {
  background-position: 0% 5% !important;
}
.emoji2049 {
  background-position: 0% 7.5% !important;
}
.emoji2122 {
  background-position: 0% 10% !important;
}
.emoji2139 {
  background-position: 0% 12.5% !important;
}
.emoji2194 {
  background-position: 0% 15% !important;
}
.emoji2195 {
  background-position: 0% 17.5% !important;
}
.emoji2196 {
  background-position: 0% 20% !important;
}
.emoji2197 {
  background-position: 0% 22.5% !important;
}
.emoji2198 {
  background-position: 0% 25% !important;
}
.emoji2199 {
  background-position: 0% 27.5% !important;
}
.emoji21a9 {
  background-position: 0% 30% !important;
}
.emoji21aa {
  background-position: 0% 32.5% !important;
}
.emoji231a {
  background-position: 0% 35% !important;
}
.emoji231b {
  background-position: 0% 37.5% !important;
}
.emoji2328 {
  background-position: 0% 40% !important;
}
.emoji23e9 {
  background-position: 0% 42.5% !important;
}
.emoji23ea {
  background-position: 0% 45% !important;
}
.emoji23eb {
  background-position: 0% 47.5% !important;
}
.emoji23ec {
  background-position: 0% 50% !important;
}
.emoji23ed {
  background-position: 0% 52.5% !important;
}
.emoji23ee {
  background-position: 0% 55% !important;
}
.emoji23ef {
  background-position: 0% 57.5% !important;
}
.emoji23f0 {
  background-position: 0% 60% !important;
}
.emoji23f1 {
  background-position: 0% 62.5% !important;
}
.emoji23f2 {
  background-position: 0% 65% !important;
}
.emoji23f3 {
  background-position: 0% 67.5% !important;
}
.emoji23f8 {
  background-position: 0% 70% !important;
}
.emoji23f9 {
  background-position: 0% 72.5% !important;
}
.emoji23fa {
  background-position: 0% 75% !important;
}
.emoji24c2 {
  background-position: 0% 77.5% !important;
}
.emoji25aa {
  background-position: 0% 80% !important;
}
.emoji25ab {
  background-position: 0% 82.5% !important;
}
.emoji25b6 {
  background-position: 0% 85% !important;
}
.emoji25c0 {
  background-position: 0% 87.5% !important;
}
.emoji25fb {
  background-position: 0% 90% !important;
}
.emoji25fc {
  background-position: 0% 92.5% !important;
}
.emoji25fd {
  background-position: 0% 95% !important;
}
.emoji25fe {
  background-position: 0% 97.5% !important;
}
.emoji2600 {
  background-position: 0% 100% !important;
}
.emoji2601 {
  background-position: 2.5% 0% !important;
}
.emoji2602 {
  background-position: 2.5% 2.5% !important;
}
.emoji2603 {
  background-position: 2.5% 5% !important;
}
.emoji2604 {
  background-position: 2.5% 7.5% !important;
}
.emoji260e {
  background-position: 2.5% 10% !important;
}
.emoji2611 {
  background-position: 2.5% 12.5% !important;
}
.emoji2614 {
  background-position: 2.5% 15% !important;
}
.emoji2615 {
  background-position: 2.5% 17.5% !important;
}
.emoji2618 {
  background-position: 2.5% 20% !important;
}
.emoji261d {
  background-position: 2.5% 22.5% !important;
}
.emoji2620 {
  background-position: 2.5% 37.5% !important;
}
.emoji2622 {
  background-position: 2.5% 40% !important;
}
.emoji2623 {
  background-position: 2.5% 42.5% !important;
}
.emoji2626 {
  background-position: 2.5% 45% !important;
}
.emoji262a {
  background-position: 2.5% 47.5% !important;
}
.emoji262e {
  background-position: 2.5% 50% !important;
}
.emoji262f {
  background-position: 2.5% 52.5% !important;
}
.emoji2638 {
  background-position: 2.5% 55% !important;
}
.emoji2639 {
  background-position: 2.5% 57.5% !important;
}
.emoji263a {
  background-position: 2.5% 60% !important;
}
.emoji2648 {
  background-position: 2.5% 62.5% !important;
}
.emoji2649 {
  background-position: 2.5% 65% !important;
}
.emoji264a {
  background-position: 2.5% 67.5% !important;
}
.emoji264b {
  background-position: 2.5% 70% !important;
}
.emoji264c {
  background-position: 2.5% 72.5% !important;
}
.emoji264d {
  background-position: 2.5% 75% !important;
}
.emoji264e {
  background-position: 2.5% 77.5% !important;
}
.emoji264f {
  background-position: 2.5% 80% !important;
}
.emoji2650 {
  background-position: 2.5% 82.5% !important;
}
.emoji2651 {
  background-position: 2.5% 85% !important;
}
.emoji2652 {
  background-position: 2.5% 87.5% !important;
}
.emoji2653 {
  background-position: 2.5% 90% !important;
}
.emoji2660 {
  background-position: 2.5% 92.5% !important;
}
.emoji2663 {
  background-position: 2.5% 95% !important;
}
.emoji2665 {
  background-position: 2.5% 97.5% !important;
}
.emoji2666 {
  background-position: 2.5% 100% !important;
}
.emoji2668 {
  background-position: 5% 0% !important;
}
.emoji267b {
  background-position: 5% 2.5% !important;
}
.emoji267f {
  background-position: 5% 5% !important;
}
.emoji2692 {
  background-position: 5% 7.5% !important;
}
.emoji2693 {
  background-position: 5% 10% !important;
}
.emoji2694 {
  background-position: 5% 12.5% !important;
}
.emoji2696 {
  background-position: 5% 15% !important;
}
.emoji2697 {
  background-position: 5% 17.5% !important;
}
.emoji2699 {
  background-position: 5% 20% !important;
}
.emoji269b {
  background-position: 5% 22.5% !important;
}
.emoji269c {
  background-position: 5% 25% !important;
}
.emoji26a0 {
  background-position: 5% 27.5% !important;
}
.emoji26a1 {
  background-position: 5% 30% !important;
}
.emoji26aa {
  background-position: 5% 32.5% !important;
}
.emoji26ab {
  background-position: 5% 35% !important;
}
.emoji26b0 {
  background-position: 5% 37.5% !important;
}
.emoji26b1 {
  background-position: 5% 40% !important;
}
.emoji26bd {
  background-position: 5% 42.5% !important;
}
.emoji26be {
  background-position: 5% 45% !important;
}
.emoji26c4 {
  background-position: 5% 47.5% !important;
}
.emoji26c5 {
  background-position: 5% 50% !important;
}
.emoji26c8 {
  background-position: 5% 52.5% !important;
}
.emoji26ce {
  background-position: 5% 55% !important;
}
.emoji26cf {
  background-position: 5% 57.5% !important;
}
.emoji26d1 {
  background-position: 5% 60% !important;
}
.emoji26d3 {
  background-position: 5% 62.5% !important;
}
.emoji26d4 {
  background-position: 5% 65% !important;
}
.emoji26e9 {
  background-position: 5% 67.5% !important;
}
.emoji26ea {
  background-position: 5% 70% !important;
}
.emoji26f0 {
  background-position: 5% 72.5% !important;
}
.emoji26f1 {
  background-position: 5% 75% !important;
}
.emoji26f2 {
  background-position: 5% 77.5% !important;
}
.emoji26f3 {
  background-position: 5% 80% !important;
}
.emoji26f4 {
  background-position: 5% 82.5% !important;
}
.emoji26f5 {
  background-position: 5% 85% !important;
}
.emoji26f7 {
  background-position: 5% 87.5% !important;
}
.emoji26f8 {
  background-position: 5% 90% !important;
}
.emoji26f9 {
  background-position: 5% 92.5% !important;
}
.emoji26fa {
  background-position: 7.5% 5% !important;
}
.emoji26fd {
  background-position: 7.5% 7.5% !important;
}
.emoji2702 {
  background-position: 7.5% 10% !important;
}
.emoji2705 {
  background-position: 7.5% 12.5% !important;
}
.emoji2708 {
  background-position: 7.5% 15% !important;
}
.emoji2709 {
  background-position: 7.5% 17.5% !important;
}
.emoji270a {
  background-position: 7.5% 20% !important;
}
.emoji270b {
  background-position: 7.5% 35% !important;
}
.emoji270c {
  background-position: 7.5% 50% !important;
}
.emoji270d {
  background-position: 7.5% 65% !important;
}
.emoji270f {
  background-position: 7.5% 80% !important;
}
.emoji2712 {
  background-position: 7.5% 82.5% !important;
}
.emoji2714 {
  background-position: 7.5% 85% !important;
}
.emoji2716 {
  background-position: 7.5% 87.5% !important;
}
.emoji271d {
  background-position: 7.5% 90% !important;
}
.emoji2721 {
  background-position: 7.5% 92.5% !important;
}
.emoji2728 {
  background-position: 7.5% 95% !important;
}
.emoji2733 {
  background-position: 7.5% 97.5% !important;
}
.emoji2734 {
  background-position: 7.5% 100% !important;
}
.emoji2744 {
  background-position: 10% 0% !important;
}
.emoji2747 {
  background-position: 10% 2.5% !important;
}
.emoji274c {
  background-position: 10% 5% !important;
}
.emoji274e {
  background-position: 10% 7.5% !important;
}
.emoji2753 {
  background-position: 10% 10% !important;
}
.emoji2754 {
  background-position: 10% 12.5% !important;
}
.emoji2755 {
  background-position: 10% 15% !important;
}
.emoji2757 {
  background-position: 10% 17.5% !important;
}
.emoji2763 {
  background-position: 10% 20% !important;
}
.emoji2764 {
  background-position: 10% 22.5% !important;
}
.emoji2795 {
  background-position: 10% 25% !important;
}
.emoji2796 {
  background-position: 10% 27.5% !important;
}
.emoji2797 {
  background-position: 10% 30% !important;
}
.emoji27a1 {
  background-position: 10% 32.5% !important;
}
.emoji27b0 {
  background-position: 10% 35% !important;
}
.emoji27bf {
  background-position: 10% 37.5% !important;
}
.emoji2934 {
  background-position: 10% 40% !important;
}
.emoji2935 {
  background-position: 10% 42.5% !important;
}
.emoji2b05 {
  background-position: 10% 45% !important;
}
.emoji2b06 {
  background-position: 10% 47.5% !important;
}
.emoji2b07 {
  background-position: 10% 50% !important;
}
.emoji2b1b {
  background-position: 10% 52.5% !important;
}
.emoji2b1c {
  background-position: 10% 55% !important;
}
.emoji2b50 {
  background-position: 10% 57.5% !important;
}
.emoji2b55 {
  background-position: 10% 60% !important;
}
.emoji3030 {
  background-position: 10% 62.5% !important;
}
.emoji303d {
  background-position: 10% 65% !important;
}
.emoji3297 {
  background-position: 10% 67.5% !important;
}
.emoji3299 {
  background-position: 10% 70% !important;
}
.emoji1f004 {
  background-position: 10% 72.5% !important;
}
.emoji1f0cf {
  background-position: 10% 75% !important;
}
.emoji1f170 {
  background-position: 10% 77.5% !important;
}
.emoji1f171 {
  background-position: 10% 80% !important;
}
.emoji1f17e {
  background-position: 10% 82.5% !important;
}
.emoji1f17f {
  background-position: 10% 85% !important;
}
.emoji1f18e {
  background-position: 10% 87.5% !important;
}
.emoji1f191 {
  background-position: 10% 90% !important;
}
.emoji1f192 {
  background-position: 10% 92.5% !important;
}
.emoji1f193 {
  background-position: 10% 95% !important;
}
.emoji1f194 {
  background-position: 10% 97.5% !important;
}
.emoji1f195 {
  background-position: 10% 100% !important;
}
.emoji1f196 {
  background-position: 12.5% 0% !important;
}
.emoji1f197 {
  background-position: 12.5% 2.5% !important;
}
.emoji1f198 {
  background-position: 12.5% 5% !important;
}
.emoji1f199 {
  background-position: 12.5% 7.5% !important;
}
.emoji1f19a {
  background-position: 12.5% 10% !important;
}
.emoji1f201 {
  background-position: 12.5% 12.5% !important;
}
.emoji1f202 {
  background-position: 12.5% 15% !important;
}
.emoji1f21a {
  background-position: 12.5% 17.5% !important;
}
.emoji1f22f {
  background-position: 12.5% 20% !important;
}
.emoji1f232 {
  background-position: 12.5% 22.5% !important;
}
.emoji1f233 {
  background-position: 12.5% 25% !important;
}
.emoji1f234 {
  background-position: 12.5% 27.5% !important;
}
.emoji1f235 {
  background-position: 12.5% 30% !important;
}
.emoji1f236 {
  background-position: 12.5% 32.5% !important;
}
.emoji1f237 {
  background-position: 12.5% 35% !important;
}
.emoji1f238 {
  background-position: 12.5% 37.5% !important;
}
.emoji1f239 {
  background-position: 12.5% 40% !important;
}
.emoji1f23a {
  background-position: 12.5% 42.5% !important;
}
.emoji1f250 {
  background-position: 12.5% 45% !important;
}
.emoji1f251 {
  background-position: 12.5% 47.5% !important;
}
.emoji1f300 {
  background-position: 12.5% 50% !important;
}
.emoji1f301 {
  background-position: 12.5% 52.5% !important;
}
.emoji1f302 {
  background-position: 12.5% 55% !important;
}
.emoji1f303 {
  background-position: 12.5% 57.5% !important;
}
.emoji1f304 {
  background-position: 12.5% 60% !important;
}
.emoji1f305 {
  background-position: 12.5% 62.5% !important;
}
.emoji1f306 {
  background-position: 12.5% 65% !important;
}
.emoji1f307 {
  background-position: 12.5% 67.5% !important;
}
.emoji1f308 {
  background-position: 12.5% 70% !important;
}
.emoji1f309 {
  background-position: 12.5% 72.5% !important;
}
.emoji1f30a {
  background-position: 12.5% 75% !important;
}
.emoji1f30b {
  background-position: 12.5% 77.5% !important;
}
.emoji1f30c {
  background-position: 12.5% 80% !important;
}
.emoji1f30d {
  background-position: 12.5% 82.5% !important;
}
.emoji1f30e {
  background-position: 12.5% 85% !important;
}
.emoji1f30f {
  background-position: 12.5% 87.5% !important;
}
.emoji1f310 {
  background-position: 12.5% 90% !important;
}
.emoji1f311 {
  background-position: 12.5% 92.5% !important;
}
.emoji1f312 {
  background-position: 12.5% 95% !important;
}
.emoji1f313 {
  background-position: 12.5% 97.5% !important;
}
.emoji1f314 {
  background-position: 12.5% 100% !important;
}
.emoji1f315 {
  background-position: 15% 0% !important;
}
.emoji1f316 {
  background-position: 15% 2.5% !important;
}
.emoji1f317 {
  background-position: 15% 5% !important;
}
.emoji1f318 {
  background-position: 15% 7.5% !important;
}
.emoji1f319 {
  background-position: 15% 10% !important;
}
.emoji1f31a {
  background-position: 15% 12.5% !important;
}
.emoji1f31b {
  background-position: 15% 15% !important;
}
.emoji1f31c {
  background-position: 15% 17.5% !important;
}
.emoji1f31d {
  background-position: 15% 20% !important;
}
.emoji1f31e {
  background-position: 15% 22.5% !important;
}
.emoji1f31f {
  background-position: 15% 25% !important;
}
.emoji1f320 {
  background-position: 15% 27.5% !important;
}
.emoji1f321 {
  background-position: 15% 30% !important;
}
.emoji1f324 {
  background-position: 15% 32.5% !important;
}
.emoji1f325 {
  background-position: 15% 35% !important;
}
.emoji1f326 {
  background-position: 15% 37.5% !important;
}
.emoji1f327 {
  background-position: 15% 40% !important;
}
.emoji1f328 {
  background-position: 15% 42.5% !important;
}
.emoji1f329 {
  background-position: 15% 45% !important;
}
.emoji1f32a {
  background-position: 15% 47.5% !important;
}
.emoji1f32b {
  background-position: 15% 50% !important;
}
.emoji1f32c {
  background-position: 15% 52.5% !important;
}
.emoji1f32d {
  background-position: 15% 55% !important;
}
.emoji1f32e {
  background-position: 15% 57.5% !important;
}
.emoji1f32f {
  background-position: 15% 60% !important;
}
.emoji1f330 {
  background-position: 15% 62.5% !important;
}
.emoji1f331 {
  background-position: 15% 65% !important;
}
.emoji1f332 {
  background-position: 15% 67.5% !important;
}
.emoji1f333 {
  background-position: 15% 70% !important;
}
.emoji1f334 {
  background-position: 15% 72.5% !important;
}
.emoji1f335 {
  background-position: 15% 75% !important;
}
.emoji1f336 {
  background-position: 15% 77.5% !important;
}
.emoji1f337 {
  background-position: 15% 80% !important;
}
.emoji1f338 {
  background-position: 15% 82.5% !important;
}
.emoji1f339 {
  background-position: 15% 85% !important;
}
.emoji1f33a {
  background-position: 15% 87.5% !important;
}
.emoji1f33b {
  background-position: 15% 90% !important;
}
.emoji1f33c {
  background-position: 15% 92.5% !important;
}
.emoji1f33d {
  background-position: 15% 95% !important;
}
.emoji1f33e {
  background-position: 15% 97.5% !important;
}
.emoji1f33f {
  background-position: 15% 100% !important;
}
.emoji1f340 {
  background-position: 17.5% 0% !important;
}
.emoji1f341 {
  background-position: 17.5% 2.5% !important;
}
.emoji1f342 {
  background-position: 17.5% 5% !important;
}
.emoji1f343 {
  background-position: 17.5% 7.5% !important;
}
.emoji1f344 {
  background-position: 17.5% 10% !important;
}
.emoji1f345 {
  background-position: 17.5% 12.5% !important;
}
.emoji1f346 {
  background-position: 17.5% 15% !important;
}
.emoji1f347 {
  background-position: 17.5% 17.5% !important;
}
.emoji1f348 {
  background-position: 17.5% 20% !important;
}
.emoji1f349 {
  background-position: 17.5% 22.5% !important;
}
.emoji1f34a {
  background-position: 17.5% 25% !important;
}
.emoji1f34b {
  background-position: 17.5% 27.5% !important;
}
.emoji1f34c {
  background-position: 17.5% 30% !important;
}
.emoji1f34d {
  background-position: 17.5% 32.5% !important;
}
.emoji1f34e {
  background-position: 17.5% 35% !important;
}
.emoji1f34f {
  background-position: 17.5% 37.5% !important;
}
.emoji1f350 {
  background-position: 17.5% 40% !important;
}
.emoji1f351 {
  background-position: 17.5% 42.5% !important;
}
.emoji1f352 {
  background-position: 17.5% 45% !important;
}
.emoji1f353 {
  background-position: 17.5% 47.5% !important;
}
.emoji1f354 {
  background-position: 17.5% 50% !important;
}
.emoji1f355 {
  background-position: 17.5% 52.5% !important;
}
.emoji1f356 {
  background-position: 17.5% 55% !important;
}
.emoji1f357 {
  background-position: 17.5% 57.5% !important;
}
.emoji1f358 {
  background-position: 17.5% 60% !important;
}
.emoji1f359 {
  background-position: 17.5% 62.5% !important;
}
.emoji1f35a {
  background-position: 17.5% 65% !important;
}
.emoji1f35b {
  background-position: 17.5% 67.5% !important;
}
.emoji1f35c {
  background-position: 17.5% 70% !important;
}
.emoji1f35d {
  background-position: 17.5% 72.5% !important;
}
.emoji1f35e {
  background-position: 17.5% 75% !important;
}
.emoji1f35f {
  background-position: 17.5% 77.5% !important;
}
.emoji1f360 {
  background-position: 17.5% 80% !important;
}
.emoji1f361 {
  background-position: 17.5% 82.5% !important;
}
.emoji1f362 {
  background-position: 17.5% 85% !important;
}
.emoji1f363 {
  background-position: 17.5% 87.5% !important;
}
.emoji1f364 {
  background-position: 17.5% 90% !important;
}
.emoji1f365 {
  background-position: 17.5% 92.5% !important;
}
.emoji1f366 {
  background-position: 17.5% 95% !important;
}
.emoji1f367 {
  background-position: 17.5% 97.5% !important;
}
.emoji1f368 {
  background-position: 17.5% 100% !important;
}
.emoji1f369 {
  background-position: 20% 0% !important;
}
.emoji1f36a {
  background-position: 20% 2.5% !important;
}
.emoji1f36b {
  background-position: 20% 5% !important;
}
.emoji1f36c {
  background-position: 20% 7.5% !important;
}
.emoji1f36d {
  background-position: 20% 10% !important;
}
.emoji1f36e {
  background-position: 20% 12.5% !important;
}
.emoji1f36f {
  background-position: 20% 15% !important;
}
.emoji1f370 {
  background-position: 20% 17.5% !important;
}
.emoji1f371 {
  background-position: 20% 20% !important;
}
.emoji1f372 {
  background-position: 20% 22.5% !important;
}
.emoji1f373 {
  background-position: 20% 25% !important;
}
.emoji1f374 {
  background-position: 20% 27.5% !important;
}
.emoji1f375 {
  background-position: 20% 30% !important;
}
.emoji1f376 {
  background-position: 20% 32.5% !important;
}
.emoji1f377 {
  background-position: 20% 35% !important;
}
.emoji1f378 {
  background-position: 20% 37.5% !important;
}
.emoji1f379 {
  background-position: 20% 40% !important;
}
.emoji1f37a {
  background-position: 20% 42.5% !important;
}
.emoji1f37b {
  background-position: 20% 45% !important;
}
.emoji1f37c {
  background-position: 20% 47.5% !important;
}
.emoji1f37d {
  background-position: 20% 50% !important;
}
.emoji1f37e {
  background-position: 20% 52.5% !important;
}
.emoji1f37f {
  background-position: 20% 55% !important;
}
.emoji1f380 {
  background-position: 20% 57.5% !important;
}
.emoji1f381 {
  background-position: 20% 60% !important;
}
.emoji1f382 {
  background-position: 20% 62.5% !important;
}
.emoji1f383 {
  background-position: 20% 65% !important;
}
.emoji1f384 {
  background-position: 20% 67.5% !important;
}
.emoji1f385 {
  background-position: 20% 70% !important;
}
.emoji1f386 {
  background-position: 20% 85% !important;
}
.emoji1f387 {
  background-position: 20% 87.5% !important;
}
.emoji1f388 {
  background-position: 20% 90% !important;
}
.emoji1f389 {
  background-position: 20% 92.5% !important;
}
.emoji1f38a {
  background-position: 20% 95% !important;
}
.emoji1f38b {
  background-position: 20% 97.5% !important;
}
.emoji1f38c {
  background-position: 20% 100% !important;
}
.emoji1f38d {
  background-position: 22.5% 0% !important;
}
.emoji1f38e {
  background-position: 22.5% 2.5% !important;
}
.emoji1f38f {
  background-position: 22.5% 5% !important;
}
.emoji1f390 {
  background-position: 22.5% 7.5% !important;
}
.emoji1f391 {
  background-position: 22.5% 10% !important;
}
.emoji1f392 {
  background-position: 22.5% 12.5% !important;
}
.emoji1f393 {
  background-position: 22.5% 15% !important;
}
.emoji1f396 {
  background-position: 22.5% 17.5% !important;
}
.emoji1f397 {
  background-position: 22.5% 20% !important;
}
.emoji1f399 {
  background-position: 22.5% 22.5% !important;
}
.emoji1f39a {
  background-position: 22.5% 25% !important;
}
.emoji1f39b {
  background-position: 22.5% 27.5% !important;
}
.emoji1f39e {
  background-position: 22.5% 30% !important;
}
.emoji1f39f {
  background-position: 22.5% 32.5% !important;
}
.emoji1f3a0 {
  background-position: 22.5% 35% !important;
}
.emoji1f3a1 {
  background-position: 22.5% 37.5% !important;
}
.emoji1f3a2 {
  background-position: 22.5% 40% !important;
}
.emoji1f3a3 {
  background-position: 22.5% 42.5% !important;
}
.emoji1f3a4 {
  background-position: 22.5% 45% !important;
}
.emoji1f3a5 {
  background-position: 22.5% 47.5% !important;
}
.emoji1f3a6 {
  background-position: 22.5% 50% !important;
}
.emoji1f3a7 {
  background-position: 22.5% 52.5% !important;
}
.emoji1f3a8 {
  background-position: 22.5% 55% !important;
}
.emoji1f3a9 {
  background-position: 22.5% 57.5% !important;
}
.emoji1f3aa {
  background-position: 22.5% 60% !important;
}
.emoji1f3ab {
  background-position: 22.5% 62.5% !important;
}
.emoji1f3ac {
  background-position: 22.5% 65% !important;
}
.emoji1f3ad {
  background-position: 22.5% 67.5% !important;
}
.emoji1f3ae {
  background-position: 22.5% 70% !important;
}
.emoji1f3af {
  background-position: 22.5% 72.5% !important;
}
.emoji1f3b0 {
  background-position: 22.5% 75% !important;
}
.emoji1f3b1 {
  background-position: 22.5% 77.5% !important;
}
.emoji1f3b2 {
  background-position: 22.5% 80% !important;
}
.emoji1f3b3 {
  background-position: 22.5% 82.5% !important;
}
.emoji1f3b4 {
  background-position: 22.5% 85% !important;
}
.emoji1f3b5 {
  background-position: 22.5% 87.5% !important;
}
.emoji1f3b6 {
  background-position: 22.5% 90% !important;
}
.emoji1f3b7 {
  background-position: 22.5% 92.5% !important;
}
.emoji1f3b8 {
  background-position: 22.5% 95% !important;
}
.emoji1f3b9 {
  background-position: 22.5% 97.5% !important;
}
.emoji1f3ba {
  background-position: 22.5% 100% !important;
}
.emoji1f3bb {
  background-position: 25% 0% !important;
}
.emoji1f3bc {
  background-position: 25% 2.5% !important;
}
.emoji1f3bd {
  background-position: 25% 5% !important;
}
.emoji1f3be {
  background-position: 25% 7.5% !important;
}
.emoji1f3bf {
  background-position: 25% 10% !important;
}
.emoji1f3c0 {
  background-position: 25% 12.5% !important;
}
.emoji1f3c1 {
  background-position: 25% 15% !important;
}
.emoji1f3c2 {
  background-position: 25% 17.5% !important;
}
.emoji1f3c3 {
  background-position: 25% 20% !important;
}
.emoji1f3c4 {
  background-position: 25% 35% !important;
}
.emoji1f3c5 {
  background-position: 25% 50% !important;
}
.emoji1f3c6 {
  background-position: 25% 52.5% !important;
}
.emoji1f3c7 {
  background-position: 25% 55% !important;
}
.emoji1f3c8 {
  background-position: 25% 70% !important;
}
.emoji1f3c9 {
  background-position: 25% 72.5% !important;
}
.emoji1f3ca {
  background-position: 25% 75% !important;
}
.emoji1f3cb {
  background-position: 25% 90% !important;
}
.emoji1f3cc {
  background-position: 27.5% 2.5% !important;
}
.emoji1f3cd {
  background-position: 27.5% 5% !important;
}
.emoji1f3ce {
  background-position: 27.5% 7.5% !important;
}
.emoji1f3cf {
  background-position: 27.5% 10% !important;
}
.emoji1f3d0 {
  background-position: 27.5% 12.5% !important;
}
.emoji1f3d1 {
  background-position: 27.5% 15% !important;
}
.emoji1f3d2 {
  background-position: 27.5% 17.5% !important;
}
.emoji1f3d3 {
  background-position: 27.5% 20% !important;
}
.emoji1f3d4 {
  background-position: 27.5% 22.5% !important;
}
.emoji1f3d5 {
  background-position: 27.5% 25% !important;
}
.emoji1f3d6 {
  background-position: 27.5% 27.5% !important;
}
.emoji1f3d7 {
  background-position: 27.5% 30% !important;
}
.emoji1f3d8 {
  background-position: 27.5% 32.5% !important;
}
.emoji1f3d9 {
  background-position: 27.5% 35% !important;
}
.emoji1f3da {
  background-position: 27.5% 37.5% !important;
}
.emoji1f3db {
  background-position: 27.5% 40% !important;
}
.emoji1f3dc {
  background-position: 27.5% 42.5% !important;
}
.emoji1f3dd {
  background-position: 27.5% 45% !important;
}
.emoji1f3de {
  background-position: 27.5% 47.5% !important;
}
.emoji1f3df {
  background-position: 27.5% 50% !important;
}
.emoji1f3e0 {
  background-position: 27.5% 52.5% !important;
}
.emoji1f3e1 {
  background-position: 27.5% 55% !important;
}
.emoji1f3e2 {
  background-position: 27.5% 57.5% !important;
}
.emoji1f3e3 {
  background-position: 27.5% 60% !important;
}
.emoji1f3e4 {
  background-position: 27.5% 62.5% !important;
}
.emoji1f3e5 {
  background-position: 27.5% 65% !important;
}
.emoji1f3e6 {
  background-position: 27.5% 67.5% !important;
}
.emoji1f3e7 {
  background-position: 27.5% 70% !important;
}
.emoji1f3e8 {
  background-position: 27.5% 72.5% !important;
}
.emoji1f3e9 {
  background-position: 27.5% 75% !important;
}
.emoji1f3ea {
  background-position: 27.5% 77.5% !important;
}
.emoji1f3eb {
  background-position: 27.5% 80% !important;
}
.emoji1f3ec {
  background-position: 27.5% 82.5% !important;
}
.emoji1f3ed {
  background-position: 27.5% 85% !important;
}
.emoji1f3ee {
  background-position: 27.5% 87.5% !important;
}
.emoji1f3ef {
  background-position: 27.5% 90% !important;
}
.emoji1f3f0 {
  background-position: 27.5% 92.5% !important;
}
.emoji1f3f3 {
  background-position: 27.5% 95% !important;
}
.emoji1f3f4 {
  background-position: 27.5% 97.5% !important;
}
.emoji1f3f5 {
  background-position: 27.5% 100% !important;
}
.emoji1f3f7 {
  background-position: 30% 0% !important;
}
.emoji1f3f8 {
  background-position: 30% 2.5% !important;
}
.emoji1f3f9 {
  background-position: 30% 5% !important;
}
.emoji1f3fa {
  background-position: 30% 7.5% !important;
}
.emoji1f3fb {
  background-position: 30% 10% !important;
}
.emoji1f3fc {
  background-position: 30% 12.5% !important;
}
.emoji1f3fd {
  background-position: 30% 15% !important;
}
.emoji1f3fe {
  background-position: 30% 17.5% !important;
}
.emoji1f3ff {
  background-position: 30% 20% !important;
}
.emoji1f400 {
  background-position: 30% 22.5% !important;
}
.emoji1f401 {
  background-position: 30% 25% !important;
}
.emoji1f402 {
  background-position: 30% 27.5% !important;
}
.emoji1f403 {
  background-position: 30% 30% !important;
}
.emoji1f404 {
  background-position: 30% 32.5% !important;
}
.emoji1f405 {
  background-position: 30% 35% !important;
}
.emoji1f406 {
  background-position: 30% 37.5% !important;
}
.emoji1f407 {
  background-position: 30% 40% !important;
}
.emoji1f408 {
  background-position: 30% 42.5% !important;
}
.emoji1f409 {
  background-position: 30% 45% !important;
}
.emoji1f40a {
  background-position: 30% 47.5% !important;
}
.emoji1f40b {
  background-position: 30% 50% !important;
}
.emoji1f40c {
  background-position: 30% 52.5% !important;
}
.emoji1f40d {
  background-position: 30% 55% !important;
}
.emoji1f40e {
  background-position: 30% 57.5% !important;
}
.emoji1f40f {
  background-position: 30% 60% !important;
}
.emoji1f410 {
  background-position: 30% 62.5% !important;
}
.emoji1f411 {
  background-position: 30% 65% !important;
}
.emoji1f412 {
  background-position: 30% 67.5% !important;
}
.emoji1f413 {
  background-position: 30% 70% !important;
}
.emoji1f414 {
  background-position: 30% 72.5% !important;
}
.emoji1f415 {
  background-position: 30% 75% !important;
}
.emoji1f416 {
  background-position: 30% 77.5% !important;
}
.emoji1f417 {
  background-position: 30% 80% !important;
}
.emoji1f418 {
  background-position: 30% 82.5% !important;
}
.emoji1f419 {
  background-position: 30% 85% !important;
}
.emoji1f41a {
  background-position: 30% 87.5% !important;
}
.emoji1f41b {
  background-position: 30% 90% !important;
}
.emoji1f41c {
  background-position: 30% 92.5% !important;
}
.emoji1f41d {
  background-position: 30% 95% !important;
}
.emoji1f41e {
  background-position: 30% 97.5% !important;
}
.emoji1f41f {
  background-position: 30% 100% !important;
}
.emoji1f420 {
  background-position: 32.5% 0% !important;
}
.emoji1f421 {
  background-position: 32.5% 2.5% !important;
}
.emoji1f422 {
  background-position: 32.5% 5% !important;
}
.emoji1f423 {
  background-position: 32.5% 7.5% !important;
}
.emoji1f424 {
  background-position: 32.5% 10% !important;
}
.emoji1f425 {
  background-position: 32.5% 12.5% !important;
}
.emoji1f426 {
  background-position: 32.5% 15% !important;
}
.emoji1f427 {
  background-position: 32.5% 17.5% !important;
}
.emoji1f428 {
  background-position: 32.5% 20% !important;
}
.emoji1f429 {
  background-position: 32.5% 22.5% !important;
}
.emoji1f42a {
  background-position: 32.5% 25% !important;
}
.emoji1f42b {
  background-position: 32.5% 27.5% !important;
}
.emoji1f42c {
  background-position: 32.5% 30% !important;
}
.emoji1f42d {
  background-position: 32.5% 32.5% !important;
}
.emoji1f42e {
  background-position: 32.5% 35% !important;
}
.emoji1f42f {
  background-position: 32.5% 37.5% !important;
}
.emoji1f430 {
  background-position: 32.5% 40% !important;
}
.emoji1f431 {
  background-position: 32.5% 42.5% !important;
}
.emoji1f432 {
  background-position: 32.5% 45% !important;
}
.emoji1f433 {
  background-position: 32.5% 47.5% !important;
}
.emoji1f434 {
  background-position: 32.5% 50% !important;
}
.emoji1f435 {
  background-position: 32.5% 52.5% !important;
}
.emoji1f436 {
  background-position: 32.5% 55% !important;
}
.emoji1f437 {
  background-position: 32.5% 57.5% !important;
}
.emoji1f438 {
  background-position: 32.5% 60% !important;
}
.emoji1f439 {
  background-position: 32.5% 62.5% !important;
}
.emoji1f43a {
  background-position: 32.5% 65% !important;
}
.emoji1f43b {
  background-position: 32.5% 67.5% !important;
}
.emoji1f43c {
  background-position: 32.5% 70% !important;
}
.emoji1f43d {
  background-position: 32.5% 72.5% !important;
}
.emoji1f43e {
  background-position: 32.5% 75% !important;
}
.emoji1f43f {
  background-position: 32.5% 77.5% !important;
}
.emoji1f440 {
  background-position: 32.5% 80% !important;
}
.emoji1f441 {
  background-position: 32.5% 82.5% !important;
}
.emoji1f442 {
  background-position: 32.5% 85% !important;
}
.emoji1f443 {
  background-position: 32.5% 100% !important;
}
.emoji1f444 {
  background-position: 35% 12.5% !important;
}
.emoji1f445 {
  background-position: 35% 15% !important;
}
.emoji1f446 {
  background-position: 35% 17.5% !important;
}
.emoji1f447 {
  background-position: 35% 32.5% !important;
}
.emoji1f448 {
  background-position: 35% 47.5% !important;
}
.emoji1f449 {
  background-position: 35% 62.5% !important;
}
.emoji1f44a {
  background-position: 35% 77.5% !important;
}
.emoji1f44b {
  background-position: 35% 92.5% !important;
}
.emoji1f44c {
  background-position: 37.5% 5% !important;
}
.emoji1f44d {
  background-position: 37.5% 20% !important;
}
.emoji1f44e {
  background-position: 37.5% 35% !important;
}
.emoji1f44f {
  background-position: 37.5% 50% !important;
}
.emoji1f450 {
  background-position: 37.5% 65% !important;
}
.emoji1f451 {
  background-position: 37.5% 80% !important;
}
.emoji1f452 {
  background-position: 37.5% 82.5% !important;
}
.emoji1f453 {
  background-position: 37.5% 85% !important;
}
.emoji1f454 {
  background-position: 37.5% 87.5% !important;
}
.emoji1f455 {
  background-position: 37.5% 90% !important;
}
.emoji1f456 {
  background-position: 37.5% 92.5% !important;
}
.emoji1f457 {
  background-position: 37.5% 95% !important;
}
.emoji1f458 {
  background-position: 37.5% 97.5% !important;
}
.emoji1f459 {
  background-position: 37.5% 100% !important;
}
.emoji1f45a {
  background-position: 40% 0% !important;
}
.emoji1f45b {
  background-position: 40% 2.5% !important;
}
.emoji1f45c {
  background-position: 40% 5% !important;
}
.emoji1f45d {
  background-position: 40% 7.5% !important;
}
.emoji1f45e {
  background-position: 40% 10% !important;
}
.emoji1f45f {
  background-position: 40% 12.5% !important;
}
.emoji1f460 {
  background-position: 40% 15% !important;
}
.emoji1f461 {
  background-position: 40% 17.5% !important;
}
.emoji1f462 {
  background-position: 40% 20% !important;
}
.emoji1f463 {
  background-position: 40% 22.5% !important;
}
.emoji1f464 {
  background-position: 40% 25% !important;
}
.emoji1f465 {
  background-position: 40% 27.5% !important;
}
.emoji1f466 {
  background-position: 40% 30% !important;
}
.emoji1f467 {
  background-position: 40% 45% !important;
}
.emoji1f468 {
  background-position: 40% 60% !important;
}
.emoji1f469 {
  background-position: 40% 75% !important;
}
.emoji1f46a {
  background-position: 40% 90% !important;
}
.emoji1f46b {
  background-position: 40% 92.5% !important;
}
.emoji1f46c {
  background-position: 40% 95% !important;
}
.emoji1f46d {
  background-position: 40% 97.5% !important;
}
.emoji1f46e {
  background-position: 40% 100% !important;
}
.emoji1f46f {
  background-position: 42.5% 12.5% !important;
}
.emoji1f470 {
  background-position: 42.5% 15% !important;
}
.emoji1f471 {
  background-position: 42.5% 30% !important;
}
.emoji1f472 {
  background-position: 42.5% 45% !important;
}
.emoji1f473 {
  background-position: 42.5% 60% !important;
}
.emoji1f474 {
  background-position: 42.5% 75% !important;
}
.emoji1f475 {
  background-position: 42.5% 90% !important;
}
.emoji1f476 {
  background-position: 45% 2.5% !important;
}
.emoji1f477 {
  background-position: 45% 17.5% !important;
}
.emoji1f478 {
  background-position: 45% 32.5% !important;
}
.emoji1f479 {
  background-position: 45% 47.5% !important;
}
.emoji1f47a {
  background-position: 45% 50% !important;
}
.emoji1f47b {
  background-position: 45% 52.5% !important;
}
.emoji1f47c {
  background-position: 45% 55% !important;
}
.emoji1f47d {
  background-position: 45% 70% !important;
}
.emoji1f47e {
  background-position: 45% 72.5% !important;
}
.emoji1f47f {
  background-position: 45% 75% !important;
}
.emoji1f480 {
  background-position: 45% 77.5% !important;
}
.emoji1f481 {
  background-position: 45% 80% !important;
}
.emoji1f482 {
  background-position: 45% 95% !important;
}
.emoji1f483 {
  background-position: 47.5% 7.5% !important;
}
.emoji1f484 {
  background-position: 47.5% 22.5% !important;
}
.emoji1f485 {
  background-position: 47.5% 25% !important;
}
.emoji1f486 {
  background-position: 47.5% 40% !important;
}
.emoji1f487 {
  background-position: 47.5% 55% !important;
}
.emoji1f488 {
  background-position: 47.5% 70% !important;
}
.emoji1f489 {
  background-position: 47.5% 72.5% !important;
}
.emoji1f48a {
  background-position: 47.5% 75% !important;
}
.emoji1f48b {
  background-position: 47.5% 77.5% !important;
}
.emoji1f48c {
  background-position: 47.5% 80% !important;
}
.emoji1f48d {
  background-position: 47.5% 82.5% !important;
}
.emoji1f48e {
  background-position: 47.5% 85% !important;
}
.emoji1f48f {
  background-position: 47.5% 87.5% !important;
}
.emoji1f490 {
  background-position: 47.5% 90% !important;
}
.emoji1f491 {
  background-position: 47.5% 92.5% !important;
}
.emoji1f492 {
  background-position: 47.5% 95% !important;
}
.emoji1f493 {
  background-position: 47.5% 97.5% !important;
}
.emoji1f494 {
  background-position: 47.5% 100% !important;
}
.emoji1f495 {
  background-position: 50% 0% !important;
}
.emoji1f496 {
  background-position: 50% 2.5% !important;
}
.emoji1f497 {
  background-position: 50% 5% !important;
}
.emoji1f498 {
  background-position: 50% 7.5% !important;
}
.emoji1f499 {
  background-position: 50% 10% !important;
}
.emoji1f49a {
  background-position: 50% 12.5% !important;
}
.emoji1f49b {
  background-position: 50% 15% !important;
}
.emoji1f49c {
  background-position: 50% 17.5% !important;
}
.emoji1f49d {
  background-position: 50% 20% !important;
}
.emoji1f49e {
  background-position: 50% 22.5% !important;
}
.emoji1f49f {
  background-position: 50% 25% !important;
}
.emoji1f4a0 {
  background-position: 50% 27.5% !important;
}
.emoji1f4a1 {
  background-position: 50% 30% !important;
}
.emoji1f4a2 {
  background-position: 50% 32.5% !important;
}
.emoji1f4a3 {
  background-position: 50% 35% !important;
}
.emoji1f4a4 {
  background-position: 50% 37.5% !important;
}
.emoji1f4a5 {
  background-position: 50% 40% !important;
}
.emoji1f4a6 {
  background-position: 50% 42.5% !important;
}
.emoji1f4a7 {
  background-position: 50% 45% !important;
}
.emoji1f4a8 {
  background-position: 50% 47.5% !important;
}
.emoji1f4a9 {
  background-position: 50% 50% !important;
}
.emoji1f4aa {
  background-position: 50% 52.5% !important;
}
.emoji1f4ab {
  background-position: 50% 67.5% !important;
}
.emoji1f4ac {
  background-position: 50% 70% !important;
}
.emoji1f4ad {
  background-position: 50% 72.5% !important;
}
.emoji1f4ae {
  background-position: 50% 75% !important;
}
.emoji1f4af {
  background-position: 50% 77.5% !important;
}
.emoji1f4b0 {
  background-position: 50% 80% !important;
}
.emoji1f4b1 {
  background-position: 50% 82.5% !important;
}
.emoji1f4b2 {
  background-position: 50% 85% !important;
}
.emoji1f4b3 {
  background-position: 50% 87.5% !important;
}
.emoji1f4b4 {
  background-position: 50% 90% !important;
}
.emoji1f4b5 {
  background-position: 50% 92.5% !important;
}
.emoji1f4b6 {
  background-position: 50% 95% !important;
}
.emoji1f4b7 {
  background-position: 50% 97.5% !important;
}
.emoji1f4b8 {
  background-position: 50% 100% !important;
}
.emoji1f4b9 {
  background-position: 52.5% 0% !important;
}
.emoji1f4ba {
  background-position: 52.5% 2.5% !important;
}
.emoji1f4bb {
  background-position: 52.5% 5% !important;
}
.emoji1f4bc {
  background-position: 52.5% 7.5% !important;
}
.emoji1f4bd {
  background-position: 52.5% 10% !important;
}
.emoji1f4be {
  background-position: 52.5% 12.5% !important;
}
.emoji1f4bf {
  background-position: 52.5% 15% !important;
}
.emoji1f4c0 {
  background-position: 52.5% 17.5% !important;
}
.emoji1f4c1 {
  background-position: 52.5% 20% !important;
}
.emoji1f4c2 {
  background-position: 52.5% 22.5% !important;
}
.emoji1f4c3 {
  background-position: 52.5% 25% !important;
}
.emoji1f4c4 {
  background-position: 52.5% 27.5% !important;
}
.emoji1f4c5 {
  background-position: 52.5% 30% !important;
}
.emoji1f4c6 {
  background-position: 52.5% 32.5% !important;
}
.emoji1f4c7 {
  background-position: 52.5% 35% !important;
}
.emoji1f4c8 {
  background-position: 52.5% 37.5% !important;
}
.emoji1f4c9 {
  background-position: 52.5% 40% !important;
}
.emoji1f4ca {
  background-position: 52.5% 42.5% !important;
}
.emoji1f4cb {
  background-position: 52.5% 45% !important;
}
.emoji1f4cc {
  background-position: 52.5% 47.5% !important;
}
.emoji1f4cd {
  background-position: 52.5% 50% !important;
}
.emoji1f4ce {
  background-position: 52.5% 52.5% !important;
}
.emoji1f4cf {
  background-position: 52.5% 55% !important;
}
.emoji1f4d0 {
  background-position: 52.5% 57.5% !important;
}
.emoji1f4d1 {
  background-position: 52.5% 60% !important;
}
.emoji1f4d2 {
  background-position: 52.5% 62.5% !important;
}
.emoji1f4d3 {
  background-position: 52.5% 65% !important;
}
.emoji1f4d4 {
  background-position: 52.5% 67.5% !important;
}
.emoji1f4d5 {
  background-position: 52.5% 70% !important;
}
.emoji1f4d6 {
  background-position: 52.5% 72.5% !important;
}
.emoji1f4d7 {
  background-position: 52.5% 75% !important;
}
.emoji1f4d8 {
  background-position: 52.5% 77.5% !important;
}
.emoji1f4d9 {
  background-position: 52.5% 80% !important;
}
.emoji1f4da {
  background-position: 52.5% 82.5% !important;
}
.emoji1f4db {
  background-position: 52.5% 85% !important;
}
.emoji1f4dc {
  background-position: 52.5% 87.5% !important;
}
.emoji1f4dd {
  background-position: 52.5% 90% !important;
}
.emoji1f4de {
  background-position: 52.5% 92.5% !important;
}
.emoji1f4df {
  background-position: 52.5% 95% !important;
}
.emoji1f4e0 {
  background-position: 52.5% 97.5% !important;
}
.emoji1f4e1 {
  background-position: 52.5% 100% !important;
}
.emoji1f4e2 {
  background-position: 55% 0% !important;
}
.emoji1f4e3 {
  background-position: 55% 2.5% !important;
}
.emoji1f4e4 {
  background-position: 55% 5% !important;
}
.emoji1f4e5 {
  background-position: 55% 7.5% !important;
}
.emoji1f4e6 {
  background-position: 55% 10% !important;
}
.emoji1f4e7 {
  background-position: 55% 12.5% !important;
}
.emoji1f4e8 {
  background-position: 55% 15% !important;
}
.emoji1f4e9 {
  background-position: 55% 17.5% !important;
}
.emoji1f4ea {
  background-position: 55% 20% !important;
}
.emoji1f4eb {
  background-position: 55% 22.5% !important;
}
.emoji1f4ec {
  background-position: 55% 25% !important;
}
.emoji1f4ed {
  background-position: 55% 27.5% !important;
}
.emoji1f4ee {
  background-position: 55% 30% !important;
}
.emoji1f4ef {
  background-position: 55% 32.5% !important;
}
.emoji1f4f0 {
  background-position: 55% 35% !important;
}
.emoji1f4f1 {
  background-position: 55% 37.5% !important;
}
.emoji1f4f2 {
  background-position: 55% 40% !important;
}
.emoji1f4f3 {
  background-position: 55% 42.5% !important;
}
.emoji1f4f4 {
  background-position: 55% 45% !important;
}
.emoji1f4f5 {
  background-position: 55% 47.5% !important;
}
.emoji1f4f6 {
  background-position: 55% 50% !important;
}
.emoji1f4f7 {
  background-position: 55% 52.5% !important;
}
.emoji1f4f8 {
  background-position: 55% 55% !important;
}
.emoji1f4f9 {
  background-position: 55% 57.5% !important;
}
.emoji1f4fa {
  background-position: 55% 60% !important;
}
.emoji1f4fb {
  background-position: 55% 62.5% !important;
}
.emoji1f4fc {
  background-position: 55% 65% !important;
}
.emoji1f4fd {
  background-position: 55% 67.5% !important;
}
.emoji1f4ff {
  background-position: 55% 70% !important;
}
.emoji1f500 {
  background-position: 55% 72.5% !important;
}
.emoji1f501 {
  background-position: 55% 75% !important;
}
.emoji1f502 {
  background-position: 55% 77.5% !important;
}
.emoji1f503 {
  background-position: 55% 80% !important;
}
.emoji1f504 {
  background-position: 55% 82.5% !important;
}
.emoji1f505 {
  background-position: 55% 85% !important;
}
.emoji1f506 {
  background-position: 55% 87.5% !important;
}
.emoji1f507 {
  background-position: 55% 90% !important;
}
.emoji1f508 {
  background-position: 55% 92.5% !important;
}
.emoji1f509 {
  background-position: 55% 95% !important;
}
.emoji1f50a {
  background-position: 55% 97.5% !important;
}
.emoji1f50b {
  background-position: 55% 100% !important;
}
.emoji1f50c {
  background-position: 57.5% 0% !important;
}
.emoji1f50d {
  background-position: 57.5% 2.5% !important;
}
.emoji1f50e {
  background-position: 57.5% 5% !important;
}
.emoji1f50f {
  background-position: 57.5% 7.5% !important;
}
.emoji1f510 {
  background-position: 57.5% 10% !important;
}
.emoji1f511 {
  background-position: 57.5% 12.5% !important;
}
.emoji1f512 {
  background-position: 57.5% 15% !important;
}
.emoji1f513 {
  background-position: 57.5% 17.5% !important;
}
.emoji1f514 {
  background-position: 57.5% 20% !important;
}
.emoji1f515 {
  background-position: 57.5% 22.5% !important;
}
.emoji1f516 {
  background-position: 57.5% 25% !important;
}
.emoji1f517 {
  background-position: 57.5% 27.5% !important;
}
.emoji1f518 {
  background-position: 57.5% 30% !important;
}
.emoji1f519 {
  background-position: 57.5% 32.5% !important;
}
.emoji1f51a {
  background-position: 57.5% 35% !important;
}
.emoji1f51b {
  background-position: 57.5% 37.5% !important;
}
.emoji1f51c {
  background-position: 57.5% 40% !important;
}
.emoji1f51d {
  background-position: 57.5% 42.5% !important;
}
.emoji1f51e {
  background-position: 57.5% 45% !important;
}
.emoji1f51f {
  background-position: 57.5% 47.5% !important;
}
.emoji1f520 {
  background-position: 57.5% 50% !important;
}
.emoji1f521 {
  background-position: 57.5% 52.5% !important;
}
.emoji1f522 {
  background-position: 57.5% 55% !important;
}
.emoji1f523 {
  background-position: 57.5% 57.5% !important;
}
.emoji1f524 {
  background-position: 57.5% 60% !important;
}
.emoji1f525 {
  background-position: 57.5% 62.5% !important;
}
.emoji1f526 {
  background-position: 57.5% 65% !important;
}
.emoji1f527 {
  background-position: 57.5% 67.5% !important;
}
.emoji1f528 {
  background-position: 57.5% 70% !important;
}
.emoji1f529 {
  background-position: 57.5% 72.5% !important;
}
.emoji1f52a {
  background-position: 57.5% 75% !important;
}
.emoji1f52b {
  background-position: 57.5% 77.5% !important;
}
.emoji1f52c {
  background-position: 57.5% 80% !important;
}
.emoji1f52d {
  background-position: 57.5% 82.5% !important;
}
.emoji1f52e {
  background-position: 57.5% 85% !important;
}
.emoji1f52f {
  background-position: 57.5% 87.5% !important;
}
.emoji1f530 {
  background-position: 57.5% 90% !important;
}
.emoji1f531 {
  background-position: 57.5% 92.5% !important;
}
.emoji1f532 {
  background-position: 57.5% 95% !important;
}
.emoji1f533 {
  background-position: 57.5% 97.5% !important;
}
.emoji1f534 {
  background-position: 57.5% 100% !important;
}
.emoji1f535 {
  background-position: 60% 0% !important;
}
.emoji1f536 {
  background-position: 60% 2.5% !important;
}
.emoji1f537 {
  background-position: 60% 5% !important;
}
.emoji1f538 {
  background-position: 60% 7.5% !important;
}
.emoji1f539 {
  background-position: 60% 10% !important;
}
.emoji1f53a {
  background-position: 60% 12.5% !important;
}
.emoji1f53b {
  background-position: 60% 15% !important;
}
.emoji1f53c {
  background-position: 60% 17.5% !important;
}
.emoji1f53d {
  background-position: 60% 20% !important;
}
.emoji1f549 {
  background-position: 60% 22.5% !important;
}
.emoji1f54a {
  background-position: 60% 25% !important;
}
.emoji1f54b {
  background-position: 60% 27.5% !important;
}
.emoji1f54c {
  background-position: 60% 30% !important;
}
.emoji1f54d {
  background-position: 60% 32.5% !important;
}
.emoji1f54e {
  background-position: 60% 35% !important;
}
.emoji1f550 {
  background-position: 60% 37.5% !important;
}
.emoji1f551 {
  background-position: 60% 40% !important;
}
.emoji1f552 {
  background-position: 60% 42.5% !important;
}
.emoji1f553 {
  background-position: 60% 45% !important;
}
.emoji1f554 {
  background-position: 60% 47.5% !important;
}
.emoji1f555 {
  background-position: 60% 50% !important;
}
.emoji1f556 {
  background-position: 60% 52.5% !important;
}
.emoji1f557 {
  background-position: 60% 55% !important;
}
.emoji1f558 {
  background-position: 60% 57.5% !important;
}
.emoji1f559 {
  background-position: 60% 60% !important;
}
.emoji1f55a {
  background-position: 60% 62.5% !important;
}
.emoji1f55b {
  background-position: 60% 65% !important;
}
.emoji1f55c {
  background-position: 60% 67.5% !important;
}
.emoji1f55d {
  background-position: 60% 70% !important;
}
.emoji1f55e {
  background-position: 60% 72.5% !important;
}
.emoji1f55f {
  background-position: 60% 75% !important;
}
.emoji1f560 {
  background-position: 60% 77.5% !important;
}
.emoji1f561 {
  background-position: 60% 80% !important;
}
.emoji1f562 {
  background-position: 60% 82.5% !important;
}
.emoji1f563 {
  background-position: 60% 85% !important;
}
.emoji1f564 {
  background-position: 60% 87.5% !important;
}
.emoji1f565 {
  background-position: 60% 90% !important;
}
.emoji1f566 {
  background-position: 60% 92.5% !important;
}
.emoji1f567 {
  background-position: 60% 95% !important;
}
.emoji1f56f {
  background-position: 60% 97.5% !important;
}
.emoji1f570 {
  background-position: 60% 100% !important;
}
.emoji1f573 {
  background-position: 62.5% 0% !important;
}
.emoji1f574 {
  background-position: 62.5% 2.5% !important;
}
.emoji1f575 {
  background-position: 62.5% 5% !important;
}
.emoji1f576 {
  background-position: 62.5% 7.5% !important;
}
.emoji1f577 {
  background-position: 62.5% 10% !important;
}
.emoji1f578 {
  background-position: 62.5% 12.5% !important;
}
.emoji1f579 {
  background-position: 62.5% 15% !important;
}
.emoji1f587 {
  background-position: 62.5% 17.5% !important;
}
.emoji1f58a {
  background-position: 62.5% 20% !important;
}
.emoji1f58b {
  background-position: 62.5% 22.5% !important;
}
.emoji1f58c {
  background-position: 62.5% 25% !important;
}
.emoji1f58d {
  background-position: 62.5% 27.5% !important;
}
.emoji1f590 {
  background-position: 62.5% 30% !important;
}
.emoji1f595 {
  background-position: 62.5% 45% !important;
}
.emoji1f596 {
  background-position: 62.5% 60% !important;
}
.emoji1f5a5 {
  background-position: 62.5% 75% !important;
}
.emoji1f5a8 {
  background-position: 62.5% 77.5% !important;
}
.emoji1f5b1 {
  background-position: 62.5% 80% !important;
}
.emoji1f5b2 {
  background-position: 62.5% 82.5% !important;
}
.emoji1f5bc {
  background-position: 62.5% 85% !important;
}
.emoji1f5c2 {
  background-position: 62.5% 87.5% !important;
}
.emoji1f5c3 {
  background-position: 62.5% 90% !important;
}
.emoji1f5c4 {
  background-position: 62.5% 92.5% !important;
}
.emoji1f5d1 {
  background-position: 62.5% 95% !important;
}
.emoji1f5d2 {
  background-position: 62.5% 97.5% !important;
}
.emoji1f5d3 {
  background-position: 62.5% 100% !important;
}
.emoji1f5dc {
  background-position: 65% 0% !important;
}
.emoji1f5dd {
  background-position: 65% 2.5% !important;
}
.emoji1f5de {
  background-position: 65% 5% !important;
}
.emoji1f5e1 {
  background-position: 65% 7.5% !important;
}
.emoji1f5e3 {
  background-position: 65% 10% !important;
}
.emoji1f5e8 {
  background-position: 65% 12.5% !important;
}
.emoji1f5ef {
  background-position: 65% 15% !important;
}
.emoji1f5f3 {
  background-position: 65% 17.5% !important;
}
.emoji1f5fa {
  background-position: 65% 20% !important;
}
.emoji1f5fb {
  background-position: 65% 22.5% !important;
}
.emoji1f5fc {
  background-position: 65% 25% !important;
}
.emoji1f5fd {
  background-position: 65% 27.5% !important;
}
.emoji1f5fe {
  background-position: 65% 30% !important;
}
.emoji1f5ff {
  background-position: 65% 32.5% !important;
}
.emoji1f600 {
  background-position: 65% 35% !important;
}
.emoji1f601 {
  background-position: 65% 37.5% !important;
}
.emoji1f602 {
  background-position: 65% 40% !important;
}
.emoji1f603 {
  background-position: 65% 42.5% !important;
}
.emoji1f604 {
  background-position: 65% 45% !important;
}
.emoji1f605 {
  background-position: 65% 47.5% !important;
}
.emoji1f606 {
  background-position: 65% 50% !important;
}
.emoji1f607 {
  background-position: 65% 52.5% !important;
}
.emoji1f608 {
  background-position: 65% 55% !important;
}
.emoji1f609 {
  background-position: 65% 57.5% !important;
}
.emoji1f60a {
  background-position: 65% 60% !important;
}
.emoji1f60b {
  background-position: 65% 62.5% !important;
}
.emoji1f60c {
  background-position: 65% 65% !important;
}
.emoji1f60d {
  background-position: 65% 67.5% !important;
}
.emoji1f60e {
  background-position: 65% 70% !important;
}
.emoji1f60f {
  background-position: 65% 72.5% !important;
}
.emoji1f610 {
  background-position: 65% 75% !important;
}
.emoji1f611 {
  background-position: 65% 77.5% !important;
}
.emoji1f612 {
  background-position: 65% 80% !important;
}
.emoji1f613 {
  background-position: 65% 82.5% !important;
}
.emoji1f614 {
  background-position: 65% 85% !important;
}
.emoji1f615 {
  background-position: 65% 87.5% !important;
}
.emoji1f616 {
  background-position: 65% 90% !important;
}
.emoji1f617 {
  background-position: 65% 92.5% !important;
}
.emoji1f618 {
  background-position: 65% 95% !important;
}
.emoji1f619 {
  background-position: 65% 97.5% !important;
}
.emoji1f61a {
  background-position: 65% 100% !important;
}
.emoji1f61b {
  background-position: 67.5% 0% !important;
}
.emoji1f61c {
  background-position: 67.5% 2.5% !important;
}
.emoji1f61d {
  background-position: 67.5% 5% !important;
}
.emoji1f61e {
  background-position: 67.5% 7.5% !important;
}
.emoji1f61f {
  background-position: 67.5% 10% !important;
}
.emoji1f620 {
  background-position: 67.5% 12.5% !important;
}
.emoji1f621 {
  background-position: 67.5% 15% !important;
}
.emoji1f622 {
  background-position: 67.5% 17.5% !important;
}
.emoji1f623 {
  background-position: 67.5% 20% !important;
}
.emoji1f624 {
  background-position: 67.5% 22.5% !important;
}
.emoji1f625 {
  background-position: 67.5% 25% !important;
}
.emoji1f626 {
  background-position: 67.5% 27.5% !important;
}
.emoji1f627 {
  background-position: 67.5% 30% !important;
}
.emoji1f628 {
  background-position: 67.5% 32.5% !important;
}
.emoji1f629 {
  background-position: 67.5% 35% !important;
}
.emoji1f62a {
  background-position: 67.5% 37.5% !important;
}
.emoji1f62b {
  background-position: 67.5% 40% !important;
}
.emoji1f62c {
  background-position: 67.5% 42.5% !important;
}
.emoji1f62d {
  background-position: 67.5% 45% !important;
}
.emoji1f62e {
  background-position: 67.5% 47.5% !important;
}
.emoji1f62f {
  background-position: 67.5% 50% !important;
}
.emoji1f630 {
  background-position: 67.5% 52.5% !important;
}
.emoji1f631 {
  background-position: 67.5% 55% !important;
}
.emoji1f632 {
  background-position: 67.5% 57.5% !important;
}
.emoji1f633 {
  background-position: 67.5% 60% !important;
}
.emoji1f634 {
  background-position: 67.5% 62.5% !important;
}
.emoji1f635 {
  background-position: 67.5% 65% !important;
}
.emoji1f636 {
  background-position: 67.5% 67.5% !important;
}
.emoji1f637 {
  background-position: 67.5% 70% !important;
}
.emoji1f638 {
  background-position: 67.5% 72.5% !important;
}
.emoji1f639 {
  background-position: 67.5% 75% !important;
}
.emoji1f63a {
  background-position: 67.5% 77.5% !important;
}
.emoji1f63b {
  background-position: 67.5% 80% !important;
}
.emoji1f63c {
  background-position: 67.5% 82.5% !important;
}
.emoji1f63d {
  background-position: 67.5% 85% !important;
}
.emoji1f63e {
  background-position: 67.5% 87.5% !important;
}
.emoji1f63f {
  background-position: 67.5% 90% !important;
}
.emoji1f640 {
  background-position: 67.5% 92.5% !important;
}
.emoji1f641 {
  background-position: 67.5% 95% !important;
}
.emoji1f642 {
  background-position: 67.5% 97.5% !important;
}
.emoji1f643 {
  background-position: 67.5% 100% !important;
}
.emoji1f644 {
  background-position: 70% 0% !important;
}
.emoji1f645 {
  background-position: 70% 2.5% !important;
}
.emoji1f646 {
  background-position: 70% 17.5% !important;
}
.emoji1f647 {
  background-position: 70% 32.5% !important;
}
.emoji1f648 {
  background-position: 70% 47.5% !important;
}
.emoji1f649 {
  background-position: 70% 50% !important;
}
.emoji1f64a {
  background-position: 70% 52.5% !important;
}
.emoji1f64b {
  background-position: 70% 55% !important;
}
.emoji1f64c {
  background-position: 70% 70% !important;
}
.emoji1f64d {
  background-position: 70% 85% !important;
}
.emoji1f64e {
  background-position: 70% 100% !important;
}
.emoji1f64f {
  background-position: 72.5% 12.5% !important;
}
.emoji1f680 {
  background-position: 72.5% 27.5% !important;
}
.emoji1f681 {
  background-position: 72.5% 30% !important;
}
.emoji1f682 {
  background-position: 72.5% 32.5% !important;
}
.emoji1f683 {
  background-position: 72.5% 35% !important;
}
.emoji1f684 {
  background-position: 72.5% 37.5% !important;
}
.emoji1f685 {
  background-position: 72.5% 40% !important;
}
.emoji1f686 {
  background-position: 72.5% 42.5% !important;
}
.emoji1f687 {
  background-position: 72.5% 45% !important;
}
.emoji1f688 {
  background-position: 72.5% 47.5% !important;
}
.emoji1f689 {
  background-position: 72.5% 50% !important;
}
.emoji1f68a {
  background-position: 72.5% 52.5% !important;
}
.emoji1f68b {
  background-position: 72.5% 55% !important;
}
.emoji1f68c {
  background-position: 72.5% 57.5% !important;
}
.emoji1f68d {
  background-position: 72.5% 60% !important;
}
.emoji1f68e {
  background-position: 72.5% 62.5% !important;
}
.emoji1f68f {
  background-position: 72.5% 65% !important;
}
.emoji1f690 {
  background-position: 72.5% 67.5% !important;
}
.emoji1f691 {
  background-position: 72.5% 70% !important;
}
.emoji1f692 {
  background-position: 72.5% 72.5% !important;
}
.emoji1f693 {
  background-position: 72.5% 75% !important;
}
.emoji1f694 {
  background-position: 72.5% 77.5% !important;
}
.emoji1f695 {
  background-position: 72.5% 80% !important;
}
.emoji1f696 {
  background-position: 72.5% 82.5% !important;
}
.emoji1f697 {
  background-position: 72.5% 85% !important;
}
.emoji1f698 {
  background-position: 72.5% 87.5% !important;
}
.emoji1f699 {
  background-position: 72.5% 90% !important;
}
.emoji1f69a {
  background-position: 72.5% 92.5% !important;
}
.emoji1f69b {
  background-position: 72.5% 95% !important;
}
.emoji1f69c {
  background-position: 72.5% 97.5% !important;
}
.emoji1f69d {
  background-position: 72.5% 100% !important;
}
.emoji1f69e {
  background-position: 75% 0% !important;
}
.emoji1f69f {
  background-position: 75% 2.5% !important;
}
.emoji1f6a0 {
  background-position: 75% 5% !important;
}
.emoji1f6a1 {
  background-position: 75% 7.5% !important;
}
.emoji1f6a2 {
  background-position: 75% 10% !important;
}
.emoji1f6a3 {
  background-position: 75% 12.5% !important;
}
.emoji1f6a4 {
  background-position: 75% 27.5% !important;
}
.emoji1f6a5 {
  background-position: 75% 30% !important;
}
.emoji1f6a6 {
  background-position: 75% 32.5% !important;
}
.emoji1f6a7 {
  background-position: 75% 35% !important;
}
.emoji1f6a8 {
  background-position: 75% 37.5% !important;
}
.emoji1f6a9 {
  background-position: 75% 40% !important;
}
.emoji1f6aa {
  background-position: 75% 42.5% !important;
}
.emoji1f6ab {
  background-position: 75% 45% !important;
}
.emoji1f6ac {
  background-position: 75% 47.5% !important;
}
.emoji1f6ad {
  background-position: 75% 50% !important;
}
.emoji1f6ae {
  background-position: 75% 52.5% !important;
}
.emoji1f6af {
  background-position: 75% 55% !important;
}
.emoji1f6b0 {
  background-position: 75% 57.5% !important;
}
.emoji1f6b1 {
  background-position: 75% 60% !important;
}
.emoji1f6b2 {
  background-position: 75% 62.5% !important;
}
.emoji1f6b3 {
  background-position: 75% 65% !important;
}
.emoji1f6b4 {
  background-position: 75% 67.5% !important;
}
.emoji1f6b5 {
  background-position: 75% 82.5% !important;
}
.emoji1f6b6 {
  background-position: 75% 97.5% !important;
}
.emoji1f6b7 {
  background-position: 77.5% 10% !important;
}
.emoji1f6b8 {
  background-position: 77.5% 12.5% !important;
}
.emoji1f6b9 {
  background-position: 77.5% 15% !important;
}
.emoji1f6ba {
  background-position: 77.5% 17.5% !important;
}
.emoji1f6bb {
  background-position: 77.5% 20% !important;
}
.emoji1f6bc {
  background-position: 77.5% 22.5% !important;
}
.emoji1f6bd {
  background-position: 77.5% 25% !important;
}
.emoji1f6be {
  background-position: 77.5% 27.5% !important;
}
.emoji1f6bf {
  background-position: 77.5% 30% !important;
}
.emoji1f6c0 {
  background-position: 77.5% 32.5% !important;
}
.emoji1f6c1 {
  background-position: 77.5% 47.5% !important;
}
.emoji1f6c2 {
  background-position: 77.5% 50% !important;
}
.emoji1f6c3 {
  background-position: 77.5% 52.5% !important;
}
.emoji1f6c4 {
  background-position: 77.5% 55% !important;
}
.emoji1f6c5 {
  background-position: 77.5% 57.5% !important;
}
.emoji1f6cb {
  background-position: 77.5% 60% !important;
}
.emoji1f6cc {
  background-position: 77.5% 62.5% !important;
}
.emoji1f6cd {
  background-position: 77.5% 65% !important;
}
.emoji1f6ce {
  background-position: 77.5% 67.5% !important;
}
.emoji1f6cf {
  background-position: 77.5% 70% !important;
}
.emoji1f6d0 {
  background-position: 77.5% 72.5% !important;
}
.emoji1f6e0 {
  background-position: 77.5% 75% !important;
}
.emoji1f6e1 {
  background-position: 77.5% 77.5% !important;
}
.emoji1f6e2 {
  background-position: 77.5% 80% !important;
}
.emoji1f6e3 {
  background-position: 77.5% 82.5% !important;
}
.emoji1f6e4 {
  background-position: 77.5% 85% !important;
}
.emoji1f6e5 {
  background-position: 77.5% 87.5% !important;
}
.emoji1f6e9 {
  background-position: 77.5% 90% !important;
}
.emoji1f6eb {
  background-position: 77.5% 92.5% !important;
}
.emoji1f6ec {
  background-position: 77.5% 95% !important;
}
.emoji1f6f0 {
  background-position: 77.5% 97.5% !important;
}
.emoji1f6f3 {
  background-position: 77.5% 100% !important;
}
.emoji1f910 {
  background-position: 80% 0% !important;
}
.emoji1f911 {
  background-position: 80% 2.5% !important;
}
.emoji1f912 {
  background-position: 80% 5% !important;
}
.emoji1f913 {
  background-position: 80% 7.5% !important;
}
.emoji1f914 {
  background-position: 80% 10% !important;
}
.emoji1f915 {
  background-position: 80% 12.5% !important;
}
.emoji1f916 {
  background-position: 80% 15% !important;
}
.emoji1f917 {
  background-position: 80% 17.5% !important;
}
.emoji1f918 {
  background-position: 80% 20% !important;
}
.emoji1f980 {
  background-position: 80% 35% !important;
}
.emoji1f981 {
  background-position: 80% 37.5% !important;
}
.emoji1f982 {
  background-position: 80% 40% !important;
}
.emoji1f983 {
  background-position: 80% 42.5% !important;
}
.emoji1f984 {
  background-position: 80% 45% !important;
}
.emoji1f9c0 {
  background-position: 80% 47.5% !important;
}
.emoji2320e3 {
  background-position: 80% 50% !important;
}
.emoji2a20e3 {
  background-position: 80% 52.5% !important;
}
.emoji3020e3 {
  background-position: 80% 55% !important;
}
.emoji3120e3 {
  background-position: 80% 57.5% !important;
}
.emoji3220e3 {
  background-position: 80% 60% !important;
}
.emoji3320e3 {
  background-position: 80% 62.5% !important;
}
.emoji3420e3 {
  background-position: 80% 65% !important;
}
.emoji3520e3 {
  background-position: 80% 67.5% !important;
}
.emoji3620e3 {
  background-position: 80% 70% !important;
}
.emoji3720e3 {
  background-position: 80% 72.5% !important;
}
.emoji3820e3 {
  background-position: 80% 75% !important;
}
.emoji3920e3 {
  background-position: 80% 77.5% !important;
}
.emoji1f1e61f1e8 {
  background-position: 80% 80% !important;
}
.emoji1f1e61f1e9 {
  background-position: 80% 82.5% !important;
}
.emoji1f1e61f1ea {
  background-position: 80% 85% !important;
}
.emoji1f1e61f1eb {
  background-position: 80% 87.5% !important;
}
.emoji1f1e61f1ec {
  background-position: 80% 90% !important;
}
.emoji1f1e61f1ee {
  background-position: 80% 92.5% !important;
}
.emoji1f1e61f1f1 {
  background-position: 80% 95% !important;
}
.emoji1f1e61f1f2 {
  background-position: 80% 97.5% !important;
}
.emoji1f1e61f1f4 {
  background-position: 80% 100% !important;
}
.emoji1f1e61f1f6 {
  background-position: 82.5% 0% !important;
}
.emoji1f1e61f1f7 {
  background-position: 82.5% 2.5% !important;
}
.emoji1f1e61f1f8 {
  background-position: 82.5% 5% !important;
}
.emoji1f1e61f1f9 {
  background-position: 82.5% 7.5% !important;
}
.emoji1f1e61f1fa {
  background-position: 82.5% 10% !important;
}
.emoji1f1e61f1fc {
  background-position: 82.5% 12.5% !important;
}
.emoji1f1e61f1fd {
  background-position: 82.5% 15% !important;
}
.emoji1f1e61f1ff {
  background-position: 82.5% 17.5% !important;
}
.emoji1f1e71f1e6 {
  background-position: 82.5% 20% !important;
}
.emoji1f1e71f1e7 {
  background-position: 82.5% 22.5% !important;
}
.emoji1f1e71f1e9 {
  background-position: 82.5% 25% !important;
}
.emoji1f1e71f1ea {
  background-position: 82.5% 27.5% !important;
}
.emoji1f1e71f1eb {
  background-position: 82.5% 30% !important;
}
.emoji1f1e71f1ec {
  background-position: 82.5% 32.5% !important;
}
.emoji1f1e71f1ed {
  background-position: 82.5% 35% !important;
}
.emoji1f1e71f1ee {
  background-position: 82.5% 37.5% !important;
}
.emoji1f1e71f1ef {
  background-position: 82.5% 40% !important;
}
.emoji1f1e71f1f1 {
  background-position: 82.5% 42.5% !important;
}
.emoji1f1e71f1f2 {
  background-position: 82.5% 45% !important;
}
.emoji1f1e71f1f3 {
  background-position: 82.5% 47.5% !important;
}
.emoji1f1e71f1f4 {
  background-position: 82.5% 50% !important;
}
.emoji1f1e71f1f6 {
  background-position: 82.5% 52.5% !important;
}
.emoji1f1e71f1f7 {
  background-position: 82.5% 55% !important;
}
.emoji1f1e71f1f8 {
  background-position: 82.5% 57.5% !important;
}
.emoji1f1e71f1f9 {
  background-position: 82.5% 60% !important;
}
.emoji1f1e71f1fb {
  background-position: 82.5% 62.5% !important;
}
.emoji1f1e71f1fc {
  background-position: 82.5% 65% !important;
}
.emoji1f1e71f1fe {
  background-position: 82.5% 67.5% !important;
}
.emoji1f1e71f1ff {
  background-position: 82.5% 70% !important;
}
.emoji1f1e81f1e6 {
  background-position: 82.5% 72.5% !important;
}
.emoji1f1e81f1e8 {
  background-position: 82.5% 75% !important;
}
.emoji1f1e81f1e9 {
  background-position: 82.5% 77.5% !important;
}
.emoji1f1e81f1eb {
  background-position: 82.5% 80% !important;
}
.emoji1f1e81f1ec {
  background-position: 82.5% 82.5% !important;
}
.emoji1f1e81f1ed {
  background-position: 82.5% 85% !important;
}
.emoji1f1e81f1ee {
  background-position: 82.5% 87.5% !important;
}
.emoji1f1e81f1f0 {
  background-position: 82.5% 90% !important;
}
.emoji1f1e81f1f1 {
  background-position: 82.5% 92.5% !important;
}
.emoji1f1e81f1f2 {
  background-position: 82.5% 95% !important;
}
.emoji1f1e81f1f3 {
  background-position: 82.5% 97.5% !important;
}
.emoji1f1e81f1f4 {
  background-position: 82.5% 100% !important;
}
.emoji1f1e81f1f5 {
  background-position: 85% 0% !important;
}
.emoji1f1e81f1f7 {
  background-position: 85% 2.5% !important;
}
.emoji1f1e81f1fa {
  background-position: 85% 5% !important;
}
.emoji1f1e81f1fb {
  background-position: 85% 7.5% !important;
}
.emoji1f1e81f1fc {
  background-position: 85% 10% !important;
}
.emoji1f1e81f1fd {
  background-position: 85% 12.5% !important;
}
.emoji1f1e81f1fe {
  background-position: 85% 15% !important;
}
.emoji1f1e81f1ff {
  background-position: 85% 17.5% !important;
}
.emoji1f1e91f1ea {
  background-position: 85% 20% !important;
}
.emoji1f1e91f1ec {
  background-position: 85% 22.5% !important;
}
.emoji1f1e91f1ef {
  background-position: 85% 25% !important;
}
.emoji1f1e91f1f0 {
  background-position: 85% 27.5% !important;
}
.emoji1f1e91f1f2 {
  background-position: 85% 30% !important;
}
.emoji1f1e91f1f4 {
  background-position: 85% 32.5% !important;
}
.emoji1f1e91f1ff {
  background-position: 85% 35% !important;
}
.emoji1f1ea1f1e6 {
  background-position: 85% 37.5% !important;
}
.emoji1f1ea1f1e8 {
  background-position: 85% 40% !important;
}
.emoji1f1ea1f1ea {
  background-position: 85% 42.5% !important;
}
.emoji1f1ea1f1ec {
  background-position: 85% 45% !important;
}
.emoji1f1ea1f1ed {
  background-position: 85% 47.5% !important;
}
.emoji1f1ea1f1f7 {
  background-position: 85% 50% !important;
}
.emoji1f1ea1f1f8 {
  background-position: 85% 52.5% !important;
}
.emoji1f1ea1f1f9 {
  background-position: 85% 55% !important;
}
.emoji1f1ea1f1fa {
  background-position: 85% 57.5% !important;
}
.emoji1f1eb1f1ee {
  background-position: 85% 60% !important;
}
.emoji1f1eb1f1ef {
  background-position: 85% 62.5% !important;
}
.emoji1f1eb1f1f0 {
  background-position: 85% 65% !important;
}
.emoji1f1eb1f1f2 {
  background-position: 85% 67.5% !important;
}
.emoji1f1eb1f1f4 {
  background-position: 85% 70% !important;
}
.emoji1f1eb1f1f7 {
  background-position: 85% 72.5% !important;
}
.emoji1f1ec1f1e6 {
  background-position: 85% 75% !important;
}
.emoji1f1ec1f1e7 {
  background-position: 85% 77.5% !important;
}
.emoji1f1ec1f1e9 {
  background-position: 85% 80% !important;
}
.emoji1f1ec1f1ea {
  background-position: 85% 82.5% !important;
}
.emoji1f1ec1f1eb {
  background-position: 85% 85% !important;
}
.emoji1f1ec1f1ec {
  background-position: 85% 87.5% !important;
}
.emoji1f1ec1f1ed {
  background-position: 85% 90% !important;
}
.emoji1f1ec1f1ee {
  background-position: 85% 92.5% !important;
}
.emoji1f1ec1f1f1 {
  background-position: 85% 95% !important;
}
.emoji1f1ec1f1f2 {
  background-position: 85% 97.5% !important;
}
.emoji1f1ec1f1f3 {
  background-position: 85% 100% !important;
}
.emoji1f1ec1f1f5 {
  background-position: 87.5% 0% !important;
}
.emoji1f1ec1f1f6 {
  background-position: 87.5% 2.5% !important;
}
.emoji1f1ec1f1f7 {
  background-position: 87.5% 5% !important;
}
.emoji1f1ec1f1f8 {
  background-position: 87.5% 7.5% !important;
}
.emoji1f1ec1f1f9 {
  background-position: 87.5% 10% !important;
}
.emoji1f1ec1f1fa {
  background-position: 87.5% 12.5% !important;
}
.emoji1f1ec1f1fc {
  background-position: 87.5% 15% !important;
}
.emoji1f1ec1f1fe {
  background-position: 87.5% 17.5% !important;
}
.emoji1f1ed1f1f0 {
  background-position: 87.5% 20% !important;
}
.emoji1f1ed1f1f2 {
  background-position: 87.5% 22.5% !important;
}
.emoji1f1ed1f1f3 {
  background-position: 87.5% 25% !important;
}
.emoji1f1ed1f1f7 {
  background-position: 87.5% 27.5% !important;
}
.emoji1f1ed1f1f9 {
  background-position: 87.5% 30% !important;
}
.emoji1f1ed1f1fa {
  background-position: 87.5% 32.5% !important;
}
.emoji1f1ee1f1e8 {
  background-position: 87.5% 35% !important;
}
.emoji1f1ee1f1e9 {
  background-position: 87.5% 37.5% !important;
}
.emoji1f1ee1f1ea {
  background-position: 87.5% 40% !important;
}
.emoji1f1ee1f1f1 {
  background-position: 87.5% 42.5% !important;
}
.emoji1f1ee1f1f2 {
  background-position: 87.5% 45% !important;
}
.emoji1f1ee1f1f3 {
  background-position: 87.5% 47.5% !important;
}
.emoji1f1ee1f1f4 {
  background-position: 87.5% 50% !important;
}
.emoji1f1ee1f1f6 {
  background-position: 87.5% 52.5% !important;
}
.emoji1f1ee1f1f7 {
  background-position: 87.5% 55% !important;
}
.emoji1f1ee1f1f8 {
  background-position: 87.5% 57.5% !important;
}
.emoji1f1ee1f1f9 {
  background-position: 87.5% 60% !important;
}
.emoji1f1ef1f1ea {
  background-position: 87.5% 62.5% !important;
}
.emoji1f1ef1f1f2 {
  background-position: 87.5% 65% !important;
}
.emoji1f1ef1f1f4 {
  background-position: 87.5% 67.5% !important;
}
.emoji1f1ef1f1f5 {
  background-position: 87.5% 70% !important;
}
.emoji1f1f01f1ea {
  background-position: 87.5% 72.5% !important;
}
.emoji1f1f01f1ec {
  background-position: 87.5% 75% !important;
}
.emoji1f1f01f1ed {
  background-position: 87.5% 77.5% !important;
}
.emoji1f1f01f1ee {
  background-position: 87.5% 80% !important;
}
.emoji1f1f01f1f2 {
  background-position: 87.5% 82.5% !important;
}
.emoji1f1f01f1f3 {
  background-position: 87.5% 85% !important;
}
.emoji1f1f01f1f5 {
  background-position: 87.5% 87.5% !important;
}
.emoji1f1f01f1f7 {
  background-position: 87.5% 90% !important;
}
.emoji1f1f01f1fc {
  background-position: 87.5% 92.5% !important;
}
.emoji1f1f01f1fe {
  background-position: 87.5% 95% !important;
}
.emoji1f1f01f1ff {
  background-position: 87.5% 97.5% !important;
}
.emoji1f1f11f1e6 {
  background-position: 87.5% 100% !important;
}
.emoji1f1f11f1e7 {
  background-position: 90% 0% !important;
}
.emoji1f1f11f1e8 {
  background-position: 90% 2.5% !important;
}
.emoji1f1f11f1ee {
  background-position: 90% 5% !important;
}
.emoji1f1f11f1f0 {
  background-position: 90% 7.5% !important;
}
.emoji1f1f11f1f7 {
  background-position: 90% 10% !important;
}
.emoji1f1f11f1f8 {
  background-position: 90% 12.5% !important;
}
.emoji1f1f11f1f9 {
  background-position: 90% 15% !important;
}
.emoji1f1f11f1fa {
  background-position: 90% 17.5% !important;
}
.emoji1f1f11f1fb {
  background-position: 90% 20% !important;
}
.emoji1f1f11f1fe {
  background-position: 90% 22.5% !important;
}
.emoji1f1f21f1e6 {
  background-position: 90% 25% !important;
}
.emoji1f1f21f1e8 {
  background-position: 90% 27.5% !important;
}
.emoji1f1f21f1e9 {
  background-position: 90% 30% !important;
}
.emoji1f1f21f1ea {
  background-position: 90% 32.5% !important;
}
.emoji1f1f21f1eb {
  background-position: 90% 35% !important;
}
.emoji1f1f21f1ec {
  background-position: 90% 37.5% !important;
}
.emoji1f1f21f1ed {
  background-position: 90% 40% !important;
}
.emoji1f1f21f1f0 {
  background-position: 90% 42.5% !important;
}
.emoji1f1f21f1f1 {
  background-position: 90% 45% !important;
}
.emoji1f1f21f1f2 {
  background-position: 90% 47.5% !important;
}
.emoji1f1f21f1f3 {
  background-position: 90% 50% !important;
}
.emoji1f1f21f1f4 {
  background-position: 90% 52.5% !important;
}
.emoji1f1f21f1f5 {
  background-position: 90% 55% !important;
}
.emoji1f1f21f1f6 {
  background-position: 90% 57.5% !important;
}
.emoji1f1f21f1f7 {
  background-position: 90% 60% !important;
}
.emoji1f1f21f1f8 {
  background-position: 90% 62.5% !important;
}
.emoji1f1f21f1f9 {
  background-position: 90% 65% !important;
}
.emoji1f1f21f1fa {
  background-position: 90% 67.5% !important;
}
.emoji1f1f21f1fb {
  background-position: 90% 70% !important;
}
.emoji1f1f21f1fc {
  background-position: 90% 72.5% !important;
}
.emoji1f1f21f1fd {
  background-position: 90% 75% !important;
}
.emoji1f1f21f1fe {
  background-position: 90% 77.5% !important;
}
.emoji1f1f21f1ff {
  background-position: 90% 80% !important;
}
.emoji1f1f31f1e6 {
  background-position: 90% 82.5% !important;
}
.emoji1f1f31f1e8 {
  background-position: 90% 85% !important;
}
.emoji1f1f31f1ea {
  background-position: 90% 87.5% !important;
}
.emoji1f1f31f1eb {
  background-position: 90% 90% !important;
}
.emoji1f1f31f1ec {
  background-position: 90% 92.5% !important;
}
.emoji1f1f31f1ee {
  background-position: 90% 95% !important;
}
.emoji1f1f31f1f1 {
  background-position: 90% 97.5% !important;
}
.emoji1f1f31f1f4 {
  background-position: 90% 100% !important;
}
.emoji1f1f31f1f5 {
  background-position: 92.5% 0% !important;
}
.emoji1f1f31f1f7 {
  background-position: 92.5% 2.5% !important;
}
.emoji1f1f31f1fa {
  background-position: 92.5% 5% !important;
}
.emoji1f1f31f1ff {
  background-position: 92.5% 7.5% !important;
}
.emoji1f1f41f1f2 {
  background-position: 92.5% 10% !important;
}
.emoji1f1f51f1e6 {
  background-position: 92.5% 12.5% !important;
}
.emoji1f1f51f1ea {
  background-position: 92.5% 15% !important;
}
.emoji1f1f51f1eb {
  background-position: 92.5% 17.5% !important;
}
.emoji1f1f51f1ec {
  background-position: 92.5% 20% !important;
}
.emoji1f1f51f1ed {
  background-position: 92.5% 22.5% !important;
}
.emoji1f1f51f1f0 {
  background-position: 92.5% 25% !important;
}
.emoji1f1f51f1f1 {
  background-position: 92.5% 27.5% !important;
}
.emoji1f1f51f1f2 {
  background-position: 92.5% 30% !important;
}
.emoji1f1f51f1f3 {
  background-position: 92.5% 32.5% !important;
}
.emoji1f1f51f1f7 {
  background-position: 92.5% 35% !important;
}
.emoji1f1f51f1f8 {
  background-position: 92.5% 37.5% !important;
}
.emoji1f1f51f1f9 {
  background-position: 92.5% 40% !important;
}
.emoji1f1f51f1fc {
  background-position: 92.5% 42.5% !important;
}
.emoji1f1f51f1fe {
  background-position: 92.5% 45% !important;
}
.emoji1f1f61f1e6 {
  background-position: 92.5% 47.5% !important;
}
.emoji1f1f71f1ea {
  background-position: 92.5% 50% !important;
}
.emoji1f1f71f1f4 {
  background-position: 92.5% 52.5% !important;
}
.emoji1f1f71f1f8 {
  background-position: 92.5% 55% !important;
}
.emoji1f1f71f1fa {
  background-position: 92.5% 57.5% !important;
}
.emoji1f1f71f1fc {
  background-position: 92.5% 60% !important;
}
.emoji1f1f81f1e6 {
  background-position: 92.5% 62.5% !important;
}
.emoji1f1f81f1e7 {
  background-position: 92.5% 65% !important;
}
.emoji1f1f81f1e8 {
  background-position: 92.5% 67.5% !important;
}
.emoji1f1f81f1e9 {
  background-position: 92.5% 70% !important;
}
.emoji1f1f81f1ea {
  background-position: 92.5% 72.5% !important;
}
.emoji1f1f81f1ec {
  background-position: 92.5% 75% !important;
}
.emoji1f1f81f1ed {
  background-position: 92.5% 77.5% !important;
}
.emoji1f1f81f1ee {
  background-position: 92.5% 80% !important;
}
.emoji1f1f81f1ef {
  background-position: 92.5% 82.5% !important;
}
.emoji1f1f81f1f0 {
  background-position: 92.5% 85% !important;
}
.emoji1f1f81f1f1 {
  background-position: 92.5% 87.5% !important;
}
.emoji1f1f81f1f2 {
  background-position: 92.5% 90% !important;
}
.emoji1f1f81f1f3 {
  background-position: 92.5% 92.5% !important;
}
.emoji1f1f81f1f4 {
  background-position: 92.5% 95% !important;
}
.emoji1f1f81f1f7 {
  background-position: 92.5% 97.5% !important;
}
.emoji1f1f81f1f8 {
  background-position: 92.5% 100% !important;
}
.emoji1f1f81f1f9 {
  background-position: 95% 0% !important;
}
.emoji1f1f81f1fb {
  background-position: 95% 2.5% !important;
}
.emoji1f1f81f1fd {
  background-position: 95% 5% !important;
}
.emoji1f1f81f1fe {
  background-position: 95% 7.5% !important;
}
.emoji1f1f81f1ff {
  background-position: 95% 10% !important;
}
.emoji1f1f91f1e6 {
  background-position: 95% 12.5% !important;
}
.emoji1f1f91f1e8 {
  background-position: 95% 15% !important;
}
.emoji1f1f91f1e9 {
  background-position: 95% 17.5% !important;
}
.emoji1f1f91f1eb {
  background-position: 95% 20% !important;
}
.emoji1f1f91f1ec {
  background-position: 95% 22.5% !important;
}
.emoji1f1f91f1ed {
  background-position: 95% 25% !important;
}
.emoji1f1f91f1ef {
  background-position: 95% 27.5% !important;
}
.emoji1f1f91f1f0 {
  background-position: 95% 30% !important;
}
.emoji1f1f91f1f1 {
  background-position: 95% 32.5% !important;
}
.emoji1f1f91f1f2 {
  background-position: 95% 35% !important;
}
.emoji1f1f91f1f3 {
  background-position: 95% 37.5% !important;
}
.emoji1f1f91f1f4 {
  background-position: 95% 40% !important;
}
.emoji1f1f91f1f7 {
  background-position: 95% 42.5% !important;
}
.emoji1f1f91f1f9 {
  background-position: 95% 45% !important;
}
.emoji1f1f91f1fb {
  background-position: 95% 47.5% !important;
}
.emoji1f1f91f1fc {
  background-position: 95% 50% !important;
}
.emoji1f1f91f1ff {
  background-position: 95% 52.5% !important;
}
.emoji1f1fa1f1e6 {
  background-position: 95% 55% !important;
}
.emoji1f1fa1f1ec {
  background-position: 95% 57.5% !important;
}
.emoji1f1fa1f1f2 {
  background-position: 95% 60% !important;
}
.emoji1f1fa1f1f8 {
  background-position: 95% 62.5% !important;
}
.emoji1f1fa1f1fe {
  background-position: 95% 65% !important;
}
.emoji1f1fa1f1ff {
  background-position: 95% 67.5% !important;
}
.emoji1f1fb1f1e6 {
  background-position: 95% 70% !important;
}
.emoji1f1fb1f1e8 {
  background-position: 95% 72.5% !important;
}
.emoji1f1fb1f1ea {
  background-position: 95% 75% !important;
}
.emoji1f1fb1f1ec {
  background-position: 95% 77.5% !important;
}
.emoji1f1fb1f1ee {
  background-position: 95% 80% !important;
}
.emoji1f1fb1f1f3 {
  background-position: 95% 82.5% !important;
}
.emoji1f1fb1f1fa {
  background-position: 95% 85% !important;
}
.emoji1f1fc1f1eb {
  background-position: 95% 87.5% !important;
}
.emoji1f1fc1f1f8 {
  background-position: 95% 90% !important;
}
.emoji1f1fd1f1f0 {
  background-position: 95% 92.5% !important;
}
.emoji1f1fe1f1ea {
  background-position: 95% 95% !important;
}
.emoji1f1fe1f1f9 {
  background-position: 95% 97.5% !important;
}
.emoji1f1ff1f1e6 {
  background-position: 95% 100% !important;
}
.emoji1f1ff1f1f2 {
  background-position: 97.5% 0% !important;
}
.emoji1f1ff1f1fc {
  background-position: 97.5% 2.5% !important;
}
.emoji1f468200d1f468200d1f466 {
  background-position: 97.5% 5% !important;
}
.emoji1f468200d1f468200d1f466200d1f466 {
  background-position: 97.5% 7.5% !important;
}
.emoji1f468200d1f468200d1f467 {
  background-position: 97.5% 10% !important;
}
.emoji1f468200d1f468200d1f467200d1f466 {
  background-position: 97.5% 12.5% !important;
}
.emoji1f468200d1f468200d1f467200d1f467 {
  background-position: 97.5% 15% !important;
}
.emoji1f468200d1f469200d1f466200d1f466 {
  background-position: 97.5% 17.5% !important;
}
.emoji1f468200d1f469200d1f467 {
  background-position: 97.5% 20% !important;
}
.emoji1f468200d1f469200d1f467200d1f466 {
  background-position: 97.5% 22.5% !important;
}
.emoji1f468200d1f469200d1f467200d1f467 {
  background-position: 97.5% 25% !important;
}
.emoji1f468200d2764fe0f200d1f468 {
  background-position: 97.5% 27.5% !important;
}
.emoji1f468200d2764fe0f200d1f48b200d1f468 {
  background-position: 97.5% 30% !important;
}
.emoji1f469200d1f469200d1f466 {
  background-position: 97.5% 32.5% !important;
}
.emoji1f469200d1f469200d1f466200d1f466 {
  background-position: 97.5% 35% !important;
}
.emoji1f469200d1f469200d1f467 {
  background-position: 97.5% 37.5% !important;
}
.emoji1f469200d1f469200d1f467200d1f466 {
  background-position: 97.5% 40% !important;
}
.emoji1f469200d1f469200d1f467200d1f467 {
  background-position: 97.5% 42.5% !important;
}
.emoji1f469200d2764fe0f200d1f469 {
  background-position: 97.5% 45% !important;
}
.emoji1f469200d2764fe0f200d1f48b200d1f469 {
  background-position: 97.5% 47.5% !important;
}
/*
 * typehead.js-bootstrap3.less
 * @version 0.2.3
 * https://github.com/hyspace/typeahead.js-bootstrap3.less
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
.has-warning .twitter-typeahead .tt-input,
.has-warning .twitter-typeahead .tt-hint {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .twitter-typeahead .tt-input:focus,
.has-warning .twitter-typeahead .tt-hint:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-error .twitter-typeahead .tt-input,
.has-error .twitter-typeahead .tt-hint {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .twitter-typeahead .tt-input:focus,
.has-error .twitter-typeahead .tt-hint:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-success .twitter-typeahead .tt-input,
.has-success .twitter-typeahead .tt-hint {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .twitter-typeahead .tt-input:focus,
.has-success .twitter-typeahead .tt-hint:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.input-group .twitter-typeahead:first-child .tt-input,
.input-group .twitter-typeahead:first-child .tt-hint {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.input-group .twitter-typeahead:last-child .tt-input,
.input-group .twitter-typeahead:last-child .tt-hint {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.input-group.input-group-sm .twitter-typeahead .tt-input,
.input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: 28px;
  padding: 5px 10px;
  font-size: 11px;
  line-height: 1.456;
  border-radius: 2px;
}
select.input-group.input-group-sm .twitter-typeahead .tt-input,
select.input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: 28px;
  line-height: 28px;
}
textarea.input-group.input-group-sm .twitter-typeahead .tt-input,
textarea.input-group.input-group-sm .twitter-typeahead .tt-hint,
select[multiple].input-group.input-group-sm .twitter-typeahead .tt-input,
select[multiple].input-group.input-group-sm .twitter-typeahead .tt-hint {
  height: auto;
}
.input-group.input-group-sm .twitter-typeahead:not(:first-child):not(:last-child) .tt-input,
.input-group.input-group-sm .twitter-typeahead:not(:first-child):not(:last-child) .tt-hint {
  border-radius: 0;
}
.input-group.input-group-sm .twitter-typeahead:first-child .tt-input,
.input-group.input-group-sm .twitter-typeahead:first-child .tt-hint {
  border-top-left-radius: 2px;
  border-bottom-left-radius: 2px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.input-group-sm .twitter-typeahead:last-child .tt-input,
.input-group.input-group-sm .twitter-typeahead:last-child .tt-hint {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 2px;
  border-bottom-right-radius: 2px;
}
.input-group.input-group-lg .twitter-typeahead .tt-input,
.input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: 42px;
  padding: 10px 16px;
  font-size: 16px;
  line-height: 1.25;
  border-radius: 4px;
}
select.input-group.input-group-lg .twitter-typeahead .tt-input,
select.input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: 42px;
  line-height: 42px;
}
textarea.input-group.input-group-lg .twitter-typeahead .tt-input,
textarea.input-group.input-group-lg .twitter-typeahead .tt-hint,
select[multiple].input-group.input-group-lg .twitter-typeahead .tt-input,
select[multiple].input-group.input-group-lg .twitter-typeahead .tt-hint {
  height: auto;
}
.input-group.input-group-lg .twitter-typeahead:not(:first-child):not(:last-child) .tt-input,
.input-group.input-group-lg .twitter-typeahead:not(:first-child):not(:last-child) .tt-hint {
  border-radius: 0;
}
.input-group.input-group-lg .twitter-typeahead:first-child .tt-input,
.input-group.input-group-lg .twitter-typeahead:first-child .tt-hint {
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group.input-group-lg .twitter-typeahead:last-child .tt-input,
.input-group.input-group-lg .twitter-typeahead:last-child .tt-hint {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.twitter-typeahead {
  width: 100%;
  display: table-cell !important;
  float: left;
}
.twitter-typeahead .tt-hint {
  color: #a0acb8;
}
.twitter-typeahead .tt-input {
  z-index: 2;
}
.twitter-typeahead .tt-input[disabled],
.twitter-typeahead .tt-input[readonly],
fieldset[disabled] .twitter-typeahead .tt-input {
  cursor: not-allowed;
  background-color: #ebedf0 !important;
}
.tt-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  min-width: 160px;
  width: 100%;
  padding: 5px 0;
  margin: 2px 0 0;
  list-style: none;
  font-size: 13px;
  background-color: #fff;
  border: 1px solid #eee;
  border: 1px solid rgba(0, 0, 0, 0.06);
  border-radius: 3px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  background-clip: padding-box;
  *border-right-width: 2px;
  *border-bottom-width: 2px;
}
.tt-menu .tt-suggestion {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.3856;
  color: #262d33;
  white-space: nowrap;
}
.tt-menu .tt-suggestion.tt-cursor {
  text-decoration: none;
  outline: 0;
  background-color: #f5f5f5;
  color: #1b2024;
}
.tt-menu .tt-suggestion.tt-cursor a {
  color: #1b2024;
}
.tt-menu .tt-suggestion p {
  margin: 0;
}
.xdsoft_datetimepicker {
  box-shadow: 0 5px 15px -5px rgba(0, 0, 0, 0.506);
  background: #fff;
  border-bottom: 1px solid #bbb;
  border-left: 1px solid #ccc;
  border-right: 1px solid #ccc;
  border-top: 1px solid #ccc;
  color: #333;
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  padding: 8px;
  padding-left: 0;
  padding-top: 2px;
  position: absolute;
  z-index: 9999;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: none;
}
.xdsoft_datetimepicker.xdsoft_rtl {
  padding: 8px 0 8px 8px;
}
.xdsoft_datetimepicker iframe {
  position: absolute;
  left: 0;
  top: 0;
  width: 75px;
  height: 210px;
  background: transparent;
  border: none;
}
/*For IE8 or lower*/
.xdsoft_datetimepicker button {
  border: none !important;
}
.xdsoft_noselect {
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.xdsoft_noselect::selection {
  background: transparent;
}
.xdsoft_noselect::-moz-selection {
  background: transparent;
}
.xdsoft_datetimepicker.xdsoft_inline {
  display: inline-block;
  position: static;
  box-shadow: none;
}
.xdsoft_datetimepicker * {
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
.xdsoft_datetimepicker .xdsoft_datepicker,
.xdsoft_datetimepicker .xdsoft_timepicker {
  display: none;
}
.xdsoft_datetimepicker .xdsoft_datepicker.active,
.xdsoft_datetimepicker .xdsoft_timepicker.active {
  display: block;
}
.xdsoft_datetimepicker .xdsoft_datepicker {
  width: 224px;
  float: left;
  margin-left: 8px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_datepicker {
  float: right;
  margin-right: 8px;
  margin-left: 0;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_datepicker {
  width: 256px;
}
.xdsoft_datetimepicker .xdsoft_timepicker {
  width: 58px;
  float: left;
  text-align: center;
  margin-left: 8px;
  margin-top: 0;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker {
  float: right;
  margin-right: 8px;
  margin-left: 0;
}
.xdsoft_datetimepicker .xdsoft_datepicker.active + .xdsoft_timepicker {
  margin-top: 8px;
  margin-bottom: 3px;
}
.xdsoft_datetimepicker .xdsoft_monthpicker {
  position: relative;
  text-align: center;
}
.xdsoft_datetimepicker .xdsoft_label i,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_today_button {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0NBRjI1NjM0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0NBRjI1NjQ0M0UwMTFFNDk4NkFGMzJFQkQzQjEwRUIiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQ0FGMjU2MTQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQ0FGMjU2MjQzRTAxMUU0OTg2QUYzMkVCRDNCMTBFQiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PoNEP54AAAIOSURBVHja7Jq9TsMwEMcxrZD4WpBYeKUCe+kTMCACHZh4BFfHO/AAIHZGFhYkBBsSEqxsLCAgXKhbXYOTxh9pfJVP+qutnZ5s/5Lz2Y5I03QhWji2GIcgAokWgfCxNvcOCCGKqiSqhUp0laHOne05vdEyGMfkdxJDVjgwDlEQgYQBgx+ULJaWSXXS6r/ER5FBVR8VfGftTKcITNs+a1XpcFoExREIDF14AVIFxgQUS+h520cdud6wNkC0UBw6BCO/HoCYwBhD8QCkQ/x1mwDyD4plh4D6DDV0TAGyo4HcawLIBBSLDkHeH0Mg2yVP3l4TQMZQDDsEOl/MgHQqhMNuE0D+oBh0CIr8MAKyazBH9WyBuKxDWgbXfjNf32TZ1KWm/Ap1oSk/R53UtQ5xTh3LUlMmT8gt6g51Q9p+SobxgJQ/qmsfZhWywGFSl0yBjCLJCMgXail3b7+rumdVJ2YRss4cN+r6qAHDkPWjPjdJCF4n9RmAD/V9A/Wp4NQassDjwlB6XBiCxcJQWmZZb8THFilfy/lfrTvLghq2TqTHrRMTKNJ0sIhdo15RT+RpyWwFdY96UZ/LdQKBGjcXpcc1AlSFEfLmouD+1knuxBDUVrvOBmoOC/rEcN7OQxKVeJTCiAdUzUJhA2Oez9QTkp72OTVcxDcXY8iKNkxGAJXmJCOQwOa6dhyXsOa6XwEGAKdeb5ET3rQdAAAAAElFTkSuQmCC);
}
.xdsoft_datetimepicker .xdsoft_label i {
  opacity: 0.5;
  background-position: -92px -19px;
  display: inline-block;
  width: 9px;
  height: 20px;
  vertical-align: middle;
}
.xdsoft_datetimepicker .xdsoft_prev {
  float: left;
  background-position: -20px 0;
}
.xdsoft_datetimepicker .xdsoft_today_button {
  float: left;
  background-position: -70px 0;
  margin-left: 5px;
}
.xdsoft_datetimepicker .xdsoft_next {
  float: right;
  background-position: 0 0;
}
.xdsoft_datetimepicker .xdsoft_next,
.xdsoft_datetimepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_today_button {
  background-color: transparent;
  background-repeat: no-repeat;
  border: 0 none;
  cursor: pointer;
  display: block;
  height: 30px;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\";
  outline: medium none;
  overflow: hidden;
  padding: 0;
  position: relative;
  text-indent: 100%;
  white-space: nowrap;
  width: 20px;
  min-width: 0;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_next {
  float: none;
  background-position: -40px -15px;
  height: 15px;
  width: 30px;
  display: block;
  margin-left: 14px;
  margin-top: 7px;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_timepicker .xdsoft_next {
  float: none;
  margin-left: 0;
  margin-right: 14px;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_prev {
  background-position: -40px 0;
  margin-bottom: 7px;
  margin-top: 0;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box {
  height: 151px;
  overflow: hidden;
  border-bottom: 1px solid #ddd;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div {
  background: #f5f5f5;
  border-top: 1px solid #ddd;
  color: #666;
  font-size: 12px;
  text-align: center;
  border-collapse: collapse;
  cursor: pointer;
  border-bottom-width: 0;
  height: 25px;
  line-height: 25px;
}
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:first-child {
  border-top-width: 0;
}
.xdsoft_datetimepicker .xdsoft_today_button:hover,
.xdsoft_datetimepicker .xdsoft_next:hover,
.xdsoft_datetimepicker .xdsoft_prev:hover {
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=100)\";
}
.xdsoft_datetimepicker .xdsoft_label {
  display: inline;
  position: relative;
  z-index: 9999;
  margin: 0;
  padding: 5px 3px;
  font-size: 14px;
  line-height: 20px;
  font-weight: bold;
  background-color: #fff;
  float: left;
  width: 182px;
  text-align: center;
  cursor: pointer;
}
.xdsoft_datetimepicker .xdsoft_label:hover > span {
  text-decoration: underline;
}
.xdsoft_datetimepicker .xdsoft_label:hover i {
  opacity: 1;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select {
  border: 1px solid #ccc;
  position: absolute;
  right: 0;
  top: 30px;
  z-index: 101;
  display: none;
  background: #fff;
  max-height: 160px;
  overflow-y: hidden;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_monthselect {
  right: -7px;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select.xdsoft_yearselect {
  right: 2px;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
  color: #fff;
  background: #ff8000;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option {
  padding: 2px 10px 2px 5px;
  text-decoration: none !important;
}
.xdsoft_datetimepicker .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
  background: #33aaff;
  box-shadow: #178fe5 0 1px 3px 0 inset;
  color: #fff;
  font-weight: 700;
}
.xdsoft_datetimepicker .xdsoft_month {
  width: 100px;
  text-align: right;
}
.xdsoft_datetimepicker .xdsoft_calendar {
  clear: both;
}
.xdsoft_datetimepicker .xdsoft_year {
  width: 48px;
  margin-left: 5px;
}
.xdsoft_datetimepicker .xdsoft_calendar table {
  border-collapse: collapse;
  width: 100%;
}
.xdsoft_datetimepicker .xdsoft_calendar td > div {
  padding-right: 5px;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  height: 25px;
}
.xdsoft_datetimepicker .xdsoft_calendar td,
.xdsoft_datetimepicker .xdsoft_calendar th {
  width: 14.2857142%;
  background: #f5f5f5;
  border: 1px solid #ddd;
  color: #666;
  font-size: 12px;
  text-align: right;
  vertical-align: middle;
  padding: 0;
  border-collapse: collapse;
  cursor: pointer;
  height: 25px;
}
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_showweeks .xdsoft_calendar th {
  width: 12.5%;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  background: #f1f1f1;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_today {
  color: #33aaff;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_default {
  background: #ffe9d2;
  box-shadow: #ffb871 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_highlighted_mint {
  background: #c1ffc9;
  box-shadow: #00dd1c 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: #33aaff;
  box-shadow: #178fe5 0 1px 3px 0 inset;
  color: #fff;
  font-weight: 700;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month,
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled,
.xdsoft_datetimepicker .xdsoft_time_box > div > div.xdsoft_disabled {
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\";
  cursor: default;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_other_month.xdsoft_disabled {
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=20)\";
}
.xdsoft_datetimepicker .xdsoft_calendar td:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  color: #fff !important;
  background: #ff8000 !important;
  box-shadow: none !important;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_current.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current.xdsoft_disabled:hover {
  background: #33aaff !important;
  box-shadow: #178fe5 0 1px 3px 0 inset !important;
  color: #fff !important;
}
.xdsoft_datetimepicker .xdsoft_calendar td.xdsoft_disabled:hover,
.xdsoft_datetimepicker .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_disabled:hover {
  color: inherit\t!important;
  background: inherit !important;
  box-shadow: inherit !important;
}
.xdsoft_datetimepicker .xdsoft_calendar th {
  font-weight: 700;
  text-align: center;
  color: #999;
  cursor: default;
}
.xdsoft_datetimepicker .xdsoft_copyright {
  color: #ccc !important;
  font-size: 10px;
  clear: both;
  float: none;
  margin-left: 8px;
}
.xdsoft_datetimepicker .xdsoft_copyright a {
  color: #eee !important;
}
.xdsoft_datetimepicker .xdsoft_copyright a:hover {
  color: #aaa !important;
}
.xdsoft_time_box {
  position: relative;
  border: 1px solid #ccc;
}
.xdsoft_scrollbar > .xdsoft_scroller {
  background: #ccc !important;
  height: 20px;
  border-radius: 3px;
}
.xdsoft_scrollbar {
  position: absolute;
  width: 7px;
  right: 0;
  top: 0;
  bottom: 0;
  cursor: pointer;
}
.xdsoft_datetimepicker.xdsoft_rtl .xdsoft_scrollbar {
  left: 0;
  right: auto;
}
.xdsoft_scroller_box {
  position: relative;
}
.xdsoft_datetimepicker.xdsoft_dark {
  box-shadow: 0 5px 15px -5px rgba(255, 255, 255, 0.506);
  background: #000;
  border-bottom: 1px solid #444;
  border-left: 1px solid #333;
  border-right: 1px solid #333;
  border-top: 1px solid #333;
  color: #ccc;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box {
  border-bottom: 1px solid #222;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div {
  background: #0a0a0a;
  border-top: 1px solid #222;
  color: #999;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label {
  background-color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select {
  border: 1px solid #333;
  background: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option:hover {
  color: #000;
  background: #007fff;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label > .xdsoft_select > div > .xdsoft_option.xdsoft_current {
  background: #cc5500;
  box-shadow: #b03e00 0 1px 3px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_label i,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_prev,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_next,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_today_button {
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAAeCAYAAADaW7vzAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QUExQUUzOTA0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QUExQUUzOTE0M0UyMTFFNDlBM0FFQTJENTExRDVBODYiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpBQTFBRTM4RTQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpBQTFBRTM4RjQzRTIxMUU0OUEzQUVBMkQ1MTFENUE4NiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pp0VxGEAAAIASURBVHja7JrNSgMxEMebtgh+3MSLr1T1Xn2CHoSKB08+QmR8Bx9A8e7RixdB9CKCoNdexIugxFlJa7rNZneTbLIpM/CnNLsdMvNjM8l0mRCiQ9Ye61IKCAgZAUnH+mU3MMZaHYChBnJUDzWOFZdVfc5+ZFLbrWDeXPwbxIqrLLfaeS0hEBVGIRQCEiZoHQwtlGSByCCdYBl8g8egTTAWoKQMRBRBcZxYlhzhKegqMOageErsCHVkk3hXIFooDgHB1KkHIHVgzKB4ADJQ/A1jAFmAYhkQqA5TOBtocrKrgXwQA8gcFIuAIO8sQSA7hidvPwaQGZSaAYHOUWJABhWWw2EMIH9QagQERU4SArJXo0ZZL18uvaxejXt/Em8xjVBXmvFr1KVm/AJ10tRe2XnraNqaJvKE3KHuUbfK1E+VHB0q40/y3sdQSxY4FHWeKJCunP8UyDdqJZenT3ntVV5jIYCAh20vT7ioP8tpf6E2lfEMwERe+whV1MHjwZB7PBiCxcGQWwKZKD62lfGNnP/1poFAA60T7rF1UgcKd2id3KDeUS+oLWV8DfWAepOfq00CgQabi9zjcgJVYVD7PVzQUAUGAQkbNJTBICDhgwYTjDYD6XeW08ZKh+A4pYkzenOxXUbvZcWz7E8ykRMnIHGX1XPl+1m2vPYpL+2qdb8CDAARlKFEz/ZVkAAAAABJRU5ErkJggg==);
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  background: #0a0a0a;
  border: 1px solid #222;
  color: #999;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  background: #0e0e0e;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_today {
  color: #cc5500;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_default {
  background: #ffe9d2;
  box-shadow: #ffb871 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_highlighted_mint {
  background: #c1ffc9;
  box-shadow: #00dd1c 0 1px 4px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_default,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td.xdsoft_current,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div.xdsoft_current {
  background: #cc5500;
  box-shadow: #b03e00 0 1px 3px 0 inset;
  color: #000;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar td:hover,
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_timepicker .xdsoft_time_box > div > div:hover {
  color: #000 !important;
  background: #007fff !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_calendar th {
  color: #666;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright {
  color: #333 !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a {
  color: #111 !important;
}
.xdsoft_datetimepicker.xdsoft_dark .xdsoft_copyright a:hover {
  color: #555 !important;
}
.xdsoft_dark .xdsoft_time_box {
  border: 1px solid #333;
}
.xdsoft_dark .xdsoft_scrollbar > .xdsoft_scroller {
  background: #333 !important;
}
.xdsoft_datetimepicker .xdsoft_save_selected {
  display: block;
  border: 1px solid #dddddd !important;
  margin-top: 5px;
  width: 100%;
  color: #454551;
  font-size: 13px;
}
.xdsoft_datetimepicker .blue-gradient-button {
  font-family: \"museo-sans\", \"Book Antiqua\", sans-serif;
  font-size: 12px;
  font-weight: 300;
  color: #82878c;
  height: 28px;
  position: relative;
  padding: 4px 17px 4px 33px;
  border: 1px solid #d7d8da;
  background: -moz-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(73%, #f4f8fa));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #fff 0%, #f4f8fa 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #fff 0%, #f4f8fa 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fff', endColorstr='#f4f8fa', GradientType=0);
  /* IE6-9 */
}
.xdsoft_datetimepicker .blue-gradient-button:hover,
.xdsoft_datetimepicker .blue-gradient-button:focus,
.xdsoft_datetimepicker .blue-gradient-button:hover span,
.xdsoft_datetimepicker .blue-gradient-button:focus span {
  color: #454551;
  background: -moz-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f4f8fa), color-stop(73%, #FFF));
  /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* Opera 11.10+ */
  background: -ms-linear-gradient(top, #f4f8fa 0%, #FFF 73%);
  /* IE10+ */
  background: linear-gradient(to bottom, #f4f8fa 0%, #FFF 73%);
  /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4f8fa', endColorstr='#FFF', GradientType=0);
  /* IE6-9 */
}
svg {
  touch-action: none;
}
.jvectormap-container {
  width: 100%;
  height: 100%;
  position: relative;
  overflow: hidden;
  touch-action: none;
}
.jvectormap-tip {
  position: absolute;
  display: none;
  border: solid 1px #CDCDCD;
  border-radius: 3px;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
}
.jvectormap-zoomin,
.jvectormap-zoomout,
.jvectormap-goback {
  position: absolute;
  left: 10px;
  border-radius: 3px;
  background: #292929;
  padding: 3px;
  color: white;
  cursor: pointer;
  line-height: 10px;
  text-align: center;
  box-sizing: content-box;
}
.jvectormap-zoomin,
.jvectormap-zoomout {
  width: 10px;
  height: 10px;
}
.jvectormap-zoomin {
  top: 10px;
}
.jvectormap-zoomout {
  top: 30px;
}
.jvectormap-goback {
  bottom: 10px;
  z-index: 1000;
  padding: 6px;
}
.jvectormap-spinner {
  position: absolute;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  background: center no-repeat url(data:image/gif;base64,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);
}
.jvectormap-legend-title {
  font-weight: bold;
  font-size: 14px;
  text-align: center;
}
.jvectormap-legend-cnt {
  position: absolute;
}
.jvectormap-legend-cnt-h {
  bottom: 0;
  right: 0;
}
.jvectormap-legend-cnt-v {
  top: 0;
  right: 0;
}
.jvectormap-legend {
  background: black;
  color: white;
  border-radius: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend {
  float: left;
  margin: 0 10px 10px 0;
  padding: 3px 3px 1px 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend .jvectormap-legend-tick {
  float: left;
}
.jvectormap-legend-cnt-v .jvectormap-legend {
  margin: 10px 10px 0 0;
  padding: 3px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick {
  width: 40px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-sample {
  height: 15px;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-sample {
  height: 20px;
  width: 20px;
  display: inline-block;
  vertical-align: middle;
}
.jvectormap-legend-tick-text {
  font-size: 12px;
}
.jvectormap-legend-cnt-h .jvectormap-legend-tick-text {
  text-align: center;
}
.jvectormap-legend-cnt-v .jvectormap-legend-tick-text {
  display: inline-block;
  vertical-align: middle;
  line-height: 20px;
  padding-left: 3px;
}
.atwho-view {
  position: absolute;
  top: 0;
  left: 0;
  display: none;
  margin-top: 18px;
  background: white;
  color: black;
  border: 1px solid #DDD;
  border-radius: 3px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  min-width: 120px;
  z-index: 11110 !important;
}
.atwho-view .atwho-header {
  padding: 5px;
  margin: 5px;
  cursor: pointer;
  border-bottom: solid 1px #eaeff1;
  color: #6f8092;
  font-size: 11px;
  font-weight: bold;
}
.atwho-view .atwho-header .small {
  color: #6f8092;
  float: right;
  padding-top: 2px;
  margin-right: -5px;
  font-size: 12px;
  font-weight: normal;
}
.atwho-view .atwho-header:hover {
  cursor: default;
}
.atwho-view .cur {
  background: #3366FF;
  color: white;
}
.atwho-view .cur small {
  color: white;
}
.atwho-view strong {
  color: #3366FF;
}
.atwho-view .cur strong {
  color: white;
  font: bold;
}
.atwho-view ul {
  /* width: 100px; */
  list-style: none;
  padding: 0;
  margin: auto;
  max-height: 200px;
  overflow-y: auto;
}
.atwho-view ul li {
  display: block;
  padding: 5px 10px;
  border-bottom: 1px solid #DDD;
  cursor: pointer;
}
.atwho-view small {
  font-size: smaller;
  color: #777;
  font-weight: normal;
}
/* BASICS */
.CodeMirror {
  /* Set height, width, borders, and global font properties here */
  font-family: monospace;
  height: 300px;
  color: black;
}
/* PADDING */
.CodeMirror-lines {
  padding: 4px 0;
  /* Vertical padding around content */
}
.CodeMirror pre {
  padding: 0 4px;
  /* Horizontal padding of content */
}
.CodeMirror-scrollbar-filler,
.CodeMirror-gutter-filler {
  background-color: white;
  /* The little square between H and V scrollbars */
}
/* GUTTER */
.CodeMirror-gutters {
  border-right: 1px solid #ddd;
  background-color: #f7f7f7;
  white-space: nowrap;
}
.CodeMirror-linenumber {
  padding: 0 3px 0 5px;
  min-width: 20px;
  text-align: right;
  color: #999;
  white-space: nowrap;
}
.CodeMirror-guttermarker {
  color: black;
}
.CodeMirror-guttermarker-subtle {
  color: #999;
}
/* CURSOR */
.CodeMirror-cursor {
  border-left: 1px solid black;
  border-right: none;
  width: 0;
}
/* Shown when moving in bi-directional text */
.CodeMirror div.CodeMirror-secondarycursor {
  border-left: 1px solid silver;
}
.cm-fat-cursor .CodeMirror-cursor {
  width: auto;
  border: 0 !important;
  background: #7e7;
}
.cm-fat-cursor div.CodeMirror-cursors {
  z-index: 1;
}
.cm-animate-fat-cursor {
  width: auto;
  border: 0;
  -webkit-animation: blink 1.06s steps(1) infinite;
  -moz-animation: blink 1.06s steps(1) infinite;
  animation: blink 1.06s steps(1) infinite;
  background-color: #7e7;
}
@-moz-keyframes blink {
  50% {
    background-color: transparent;
  }
}
@-webkit-keyframes blink {
  50% {
    background-color: transparent;
  }
}
@keyframes blink {
  50% {
    background-color: transparent;
  }
}
/* Can style cursor different in overwrite (non-insert) mode */
.cm-tab {
  display: inline-block;
  text-decoration: inherit;
}
.CodeMirror-ruler {
  border-left: 1px solid #ccc;
  position: absolute;
}
/* DEFAULT THEME */
.cm-s-default .cm-header {
  color: blue;
}
.cm-s-default .cm-quote {
  color: #090;
}
.cm-negative {
  color: #d44;
}
.cm-positive {
  color: #292;
}
.cm-header,
.cm-strong {
  font-weight: bold;
}
.cm-em {
  font-style: italic;
}
.cm-link {
  text-decoration: underline;
}
.cm-strikethrough {
  text-decoration: line-through;
}
.cm-s-default .cm-keyword {
  color: #708;
}
.cm-s-default .cm-atom {
  color: #219;
}
.cm-s-default .cm-number {
  color: #164;
}
.cm-s-default .cm-def {
  color: #00f;
}
.cm-s-default .cm-variable-2 {
  color: #05a;
}
.cm-s-default .cm-variable-3 {
  color: #085;
}
.cm-s-default .cm-comment {
  color: #a50;
}
.cm-s-default .cm-string {
  color: #a11;
}
.cm-s-default .cm-string-2 {
  color: #f50;
}
.cm-s-default .cm-meta {
  color: #555;
}
.cm-s-default .cm-qualifier {
  color: #555;
}
.cm-s-default .cm-builtin {
  color: #30a;
}
.cm-s-default .cm-bracket {
  color: #997;
}
.cm-s-default .cm-tag {
  color: #170;
}
.cm-s-default .cm-attribute {
  color: #00c;
}
.cm-s-default .cm-hr {
  color: #999;
}
.cm-s-default .cm-link {
  color: #00c;
}
.cm-s-default .cm-error {
  color: #f00;
}
.cm-invalidchar {
  color: #f00;
}
.CodeMirror-composing {
  border-bottom: 2px solid;
}
/* Default styles for common addons */
div.CodeMirror span.CodeMirror-matchingbracket {
  color: #0f0;
}
div.CodeMirror span.CodeMirror-nonmatchingbracket {
  color: #f22;
}
.CodeMirror-matchingtag {
  background: rgba(255, 150, 0, 0.3);
}
.CodeMirror-activeline-background {
  background: #e8f2ff;
}
/* STOP */
/* The rest of this file contains styles related to the mechanics of
   the editor. You probably shouldn't touch them. */
.CodeMirror {
  position: relative;
  overflow: hidden;
  background: white;
}
.CodeMirror-scroll {
  overflow: scroll !important;
  /* Things will break if this is overridden */
  /* 30px is the magic margin used to hide the element's real scrollbars */
  /* See overflow: hidden in .CodeMirror */
  margin-bottom: -30px;
  margin-right: -30px;
  padding-bottom: 30px;
  height: 100%;
  outline: none;
  /* Prevent dragging from highlighting the element */
  position: relative;
}
.CodeMirror-sizer {
  position: relative;
  border-right: 30px solid transparent;
}
/* The fake, visible scrollbars. Used to force redraw during scrolling
   before actual scrolling happens, thus preventing shaking and
   flickering artifacts. */
.CodeMirror-vscrollbar,
.CodeMirror-hscrollbar,
.CodeMirror-scrollbar-filler,
.CodeMirror-gutter-filler {
  position: absolute;
  z-index: 6;
  display: none;
}
.CodeMirror-vscrollbar {
  right: 0;
  top: 0;
  overflow-x: hidden;
  overflow-y: scroll;
}
.CodeMirror-hscrollbar {
  bottom: 0;
  left: 0;
  overflow-y: hidden;
  overflow-x: scroll;
}
.CodeMirror-scrollbar-filler {
  right: 0;
  bottom: 0;
}
.CodeMirror-gutter-filler {
  left: 0;
  bottom: 0;
}
.CodeMirror-gutters {
  position: absolute;
  left: 0;
  top: 0;
  min-height: 100%;
  z-index: 3;
}
.CodeMirror-gutter {
  white-space: normal;
  height: 100%;
  display: inline-block;
  vertical-align: top;
  margin-bottom: -30px;
  /* Hack to make IE7 behave */
  *zoom: 1;
  *display: inline;
}
.CodeMirror-gutter-wrapper {
  position: absolute;
  z-index: 4;
  background: none !important;
  border: none !important;
}
.CodeMirror-gutter-background {
  position: absolute;
  top: 0;
  bottom: 0;
  z-index: 4;
}
.CodeMirror-gutter-elt {
  position: absolute;
  cursor: default;
  z-index: 4;
}
.CodeMirror-gutter-wrapper {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none;
}
.CodeMirror-lines {
  cursor: text;
  min-height: 1px;
  /* prevents collapsing before first draw */
}
.CodeMirror pre {
  /* Reset some styles that the rest of the page might have set */
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  border-width: 0;
  background: transparent;
  font-family: inherit;
  font-size: inherit;
  margin: 0;
  white-space: pre;
  word-wrap: normal;
  line-height: inherit;
  color: inherit;
  z-index: 2;
  position: relative;
  overflow: visible;
  -webkit-tap-highlight-color: transparent;
  -webkit-font-variant-ligatures: none;
  font-variant-ligatures: none;
}
.CodeMirror-wrap pre {
  word-wrap: break-word;
  white-space: pre-wrap;
  word-break: normal;
}
.CodeMirror-linebackground {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: 0;
}
.CodeMirror-linewidget {
  position: relative;
  z-index: 2;
  overflow: auto;
}
.CodeMirror-code {
  outline: none;
}
/* Force content-box sizing for the elements where we expect it */
.CodeMirror-scroll,
.CodeMirror-sizer,
.CodeMirror-gutter,
.CodeMirror-gutters,
.CodeMirror-linenumber {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.CodeMirror-measure {
  position: absolute;
  width: 100%;
  height: 0;
  overflow: hidden;
  visibility: hidden;
}
.CodeMirror-cursor {
  position: absolute;
}
.CodeMirror-measure pre {
  position: static;
}
div.CodeMirror-cursors {
  visibility: hidden;
  position: relative;
  z-index: 3;
}
div.CodeMirror-dragcursors {
  visibility: visible;
}
.CodeMirror-focused div.CodeMirror-cursors {
  visibility: visible;
}
.CodeMirror-selected {
  background: #d9d9d9;
}
.CodeMirror-focused .CodeMirror-selected {
  background: #d7d4f0;
}
.CodeMirror-crosshair {
  cursor: crosshair;
}
.CodeMirror-line::selection,
.CodeMirror-line > span::selection,
.CodeMirror-line > span > span::selection {
  background: #d7d4f0;
}
.CodeMirror-line::-moz-selection,
.CodeMirror-line > span::-moz-selection,
.CodeMirror-line > span > span::-moz-selection {
  background: #d7d4f0;
}
.cm-searching {
  background: #ffa;
  background: rgba(255, 255, 0, 0.4);
}
/* IE7 hack to prevent it from returning funny offsetTops on the spans */
.CodeMirror span {
  *vertical-align: text-bottom;
}
/* Used to force a border model for a node */
.cm-force-border {
  padding-right: 0.1px;
}
@media print {
  /* Hide the cursor when printing */
  .CodeMirror div.CodeMirror-cursors {
    visibility: hidden;
  }
}
/* See issue #2901 */
.cm-tab-wrap-hack:after {
  content: '';
}
/* Help users use markselection to safely style text background */
span.CodeMirror-selectedtext {
  background: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
:focus {
  outline: 0;
}
.fr-element,
.fr-element:focus {
  outline: 0px solid transparent;
}
.fr-box.fr-basic .fr-element {
  color: #000000;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  overflow-x: auto;
  min-height: 40px;
}
.fr-element {
  background: transparent;
  position: relative;
  z-index: 2;
  -webkit-user-select: auto;
}
.fr-element a {
  user-select: auto;
  -o-user-select: auto;
  -moz-user-select: auto;
  -khtml-user-select: auto;
  -webkit-user-select: auto;
  -ms-user-select: auto;
}
.fr-element.fr-disabled {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"false\"] {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element [contenteditable=\"true\"] {
  outline: 0px solid transparent;
}
.fr-box a.fr-floating-btn {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  height: 32px;
  width: 32px;
  background: #ffffff;
  color: #1e88e5;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s, transform 0.2s ease 0s;
  outline: none;
  left: 0;
  top: 0;
  line-height: 32px;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
  text-align: center;
  display: block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
}
.fr-box a.fr-floating-btn svg {
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
  fill: #1e88e5;
}
.fr-box a.fr-floating-btn i {
  font-size: 14px;
  line-height: 32px;
}
.fr-box a.fr-floating-btn.fr-btn + .fr-btn {
  margin-left: 10px;
}
.fr-box a.fr-floating-btn:hover {
  background: #ebebeb;
  cursor: pointer;
}
.fr-box a.fr-floating-btn:hover svg {
  fill: #1e88e5;
}
.fr-box .fr-visible a.fr-floating-btn {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
iframe.fr-iframe {
  width: 100%;
  border: none;
  position: relative;
  display: block;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-wrapper {
  position: relative;
  z-index: 1;
}
.fr-wrapper::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-wrapper .fr-placeholder {
  position: absolute;
  font-size: 12px;
  color: #aaaaaa;
  z-index: 1;
  display: none;
  top: 0;
  left: 0;
  right: 0;
  overflow: hidden;
}
.fr-wrapper.show-placeholder .fr-placeholder {
  display: block;
}
.fr-wrapper ::selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-wrapper ::-moz-selection {
  background: #b5d6fd;
  color: #000000;
}
.fr-box.fr-basic .fr-wrapper {
  background: #ffffff;
  border: 0px;
  border-top: 0;
  top: 0;
  left: 0;
}
.fr-box.fr-basic.fr-top .fr-wrapper {
  border-top: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-basic.fr-bottom .fr-wrapper {
  border-bottom: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-tooltip {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0 8px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  background: #222222;
  color: #ffffff;
  font-size: 11px;
  line-height: 22px;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  left: -3000px;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  z-index: 9997;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-tooltip.fr-visible {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-toolbar .fr-command.fr-btn,
.fr-popup .fr-command.fr-btn {
  background: transparent;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  margin: 0px 2px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  float: left;
  padding: 0;
  width: 38px;
  height: 38px;
}
.fr-toolbar .fr-command.fr-btn::-moz-focus-inner,
.fr-popup .fr-command.fr-btn::-moz-focus-inner {
  border: 0;
  padding: 0;
}
.fr-toolbar .fr-command.fr-btn.fr-btn-text,
.fr-popup .fr-command.fr-btn.fr-btn-text {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn i,
.fr-popup .fr-command.fr-btn i {
  display: block;
  font-size: 14px;
  width: 14px;
  margin: 12px 12px;
  text-align: center;
  float: none;
}
.fr-toolbar .fr-command.fr-btn span.fr-sr-only,
.fr-popup .fr-command.fr-btn span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-toolbar .fr-command.fr-btn span,
.fr-popup .fr-command.fr-btn span {
  font-size: 14px;
  display: block;
  line-height: 17px;
  min-width: 38px;
  float: left;
  text-overflow: ellipsis;
  overflow: hidden;
  white-space: nowrap;
  height: 17px;
  font-weight: bold;
  padding: 0 2px;
}
.fr-toolbar .fr-command.fr-btn img,
.fr-popup .fr-command.fr-btn img {
  margin: 12px 12px;
  width: 14px;
}
.fr-toolbar .fr-command.fr-btn.fr-active,
.fr-popup .fr-command.fr-btn.fr-active {
  color: #1e88e5;
  background: transparent;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection {
  width: auto;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-selection span,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-selection span {
  font-weight: normal;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown i,
.fr-popup .fr-command.fr-btn.fr-dropdown i,
.fr-toolbar .fr-command.fr-btn.fr-dropdown span,
.fr-popup .fr-command.fr-btn.fr-dropdown span,
.fr-toolbar .fr-command.fr-btn.fr-dropdown img,
.fr-popup .fr-command.fr-btn.fr-dropdown img {
  margin-left: 8px;
  margin-right: 16px;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active {
  color: #222222;
  background: #d6d6d6;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus {
  background: #d6d6d6 !important;
  color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:hover::after,
.fr-toolbar .fr-command.fr-btn.fr-dropdown.fr-active:focus::after,
.fr-popup .fr-command.fr-btn.fr-dropdown.fr-active:focus::after {
  border-top-color: #222222 !important;
}
.fr-toolbar .fr-command.fr-btn.fr-dropdown::after,
.fr-popup .fr-command.fr-btn.fr-dropdown::after {
  position: absolute;
  width: 0;
  height: 0;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #222222;
  right: 4px;
  top: 17px;
  content: \"\";
}
.fr-toolbar .fr-command.fr-btn.fr-disabled,
.fr-popup .fr-command.fr-btn.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-toolbar .fr-command.fr-btn.fr-disabled::after,
.fr-popup .fr-command.fr-btn.fr-disabled::after {
  border-top-color: #bdbdbd !important;
}
.fr-toolbar .fr-command.fr-btn.fr-hidden,
.fr-popup .fr-command.fr-btn.fr-hidden {
  display: none;
}
.fr-toolbar.fr-disabled .fr-btn,
.fr-popup.fr-disabled .fr-btn,
.fr-toolbar.fr-disabled .fr-btn.fr-active,
.fr-popup.fr-disabled .fr-btn.fr-active {
  color: #bdbdbd;
}
.fr-toolbar.fr-disabled .fr-btn.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-dropdown::after,
.fr-toolbar.fr-disabled .fr-btn.fr-active.fr-dropdown::after,
.fr-popup.fr-disabled .fr-btn.fr-active.fr-dropdown::after {
  border-top-color: #bdbdbd;
}
.fr-toolbar.fr-rtl .fr-command.fr-btn,
.fr-popup.fr-rtl .fr-command.fr-btn {
  float: right;
}
.fr-toolbar.fr-inline .fr-command.fr-btn {
  float: none;
}
.fr-desktop .fr-command:hover,
.fr-desktop .fr-command:focus {
  color: #222222;
  background: #ebebeb;
}
.fr-desktop .fr-command:hover::after,
.fr-desktop .fr-command:focus::after {
  border-top-color: #222222 !important;
}
.fr-desktop .fr-command.fr-selected {
  color: #222222;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-active:hover,
.fr-desktop .fr-command.fr-active:focus {
  color: #1e88e5;
  background: #ebebeb;
}
.fr-desktop .fr-command.fr-active.fr-selected {
  color: #1e88e5;
  background: #d6d6d6;
}
.fr-desktop .fr-command.fr-disabled:hover,
.fr-desktop .fr-command.fr-disabled:focus,
.fr-desktop .fr-command.fr-disabled.fr-selected {
  background: transparent;
}
.fr-desktop.fr-disabled .fr-command:hover,
.fr-desktop.fr-disabled .fr-command:focus,
.fr-desktop.fr-disabled .fr-command.fr-selected {
  background: transparent;
}
.fr-toolbar.fr-mobile .fr-command.fr-blink,
.fr-popup.fr-mobile .fr-command.fr-blink {
  background: transparent;
}
.fr-command.fr-btn + .fr-dropdown-menu {
  display: inline-block;
  position: absolute;
  right: auto;
  bottom: auto;
  height: auto;
  z-index: 3;
  -webkit-overflow-scrolling: touch;
  overflow: hidden;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper {
  background: #ffffff;
  padding: 0;
  margin: auto;
  display: inline-block;
  text-align: left;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: max-height 0.2s ease 0s;
  -moz-transition: max-height 0.2s ease 0s;
  -ms-transition: max-height 0.2s ease 0s;
  -o-transition: max-height 0.2s ease 0s;
  margin-top: 0;
  float: left;
  max-height: 0;
  height: 0;
  margin-top: 0 !important;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content {
  overflow: auto;
  position: relative;
  max-height: 275px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li {
  padding: 0;
  margin: 0;
  font-size: 15px;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a {
  padding: 0 24px;
  line-height: 200%;
  display: block;
  cursor: pointer;
  white-space: nowrap;
  color: inherit;
  text-decoration: none;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-active {
  background: #d6d6d6;
}
.fr-command.fr-btn + .fr-dropdown-menu .fr-dropdown-wrapper .fr-dropdown-content ul.fr-dropdown-list li a.fr-disabled {
  color: #bdbdbd;
  cursor: default;
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu {
  display: inline-block;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
}
.fr-command.fr-btn.fr-active + .fr-dropdown-menu .fr-dropdown-wrapper {
  height: auto;
  max-height: 275px;
}
.fr-bottom > .fr-command.fr-btn + .fr-dropdown-menu {
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-toolbar.fr-rtl .fr-dropdown-wrapper,
.fr-popup.fr-rtl .fr-dropdown-wrapper {
  text-align: right !important;
}
body.prevent-scroll {
  overflow: hidden;
  text-align: center;
}
body.prevent-scroll.fr-mobile {
  position: fixed;
  -webkit-overflow-scrolling: touch;
}
.fr-modal {
  color: #222222;
  font-family: Arial, Helvetica, sans-serif;
  position: fixed;
  overflow-x: auto;
  overflow-y: scroll;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 100%;
  z-index: 9999;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-modal .fr-modal-wrapper {
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  margin: 20px auto;
  display: inline-block;
  background: #ffffff;
  min-width: 300px;
  -webkit-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.19), 0 4px 3px 1px rgba(0, 0, 0, 0.14);
  border: 0px;
  border-top: 5px solid #222222;
  overflow: hidden;
  width: 90%;
  padding-bottom: 10px;
  position: relative;
}
@media (min-width: 768px) and (max-width: 991px) {
  .fr-modal .fr-modal-wrapper {
    margin: 30px auto;
    width: 70%;
  }
}
@media (min-width: 992px) {
  .fr-modal .fr-modal-wrapper {
    margin: 50px auto;
    width: 600px;
  }
}
.fr-modal .fr-modal-wrapper .fr-modal-head {
  background: #ffffff;
  -webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  -moz-box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 2px 2px 1px rgba(0, 0, 0, 0.14);
  border-bottom: 0px;
  overflow: hidden;
  position: absolute;
  width: 100%;
  min-height: 42px;
  z-index: 3;
  -webkit-transition: height 0.2s ease 0s;
  -moz-transition: height 0.2s ease 0s;
  -ms-transition: height 0.2s ease 0s;
  -o-transition: height 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i {
  padding: 12px;
  width: 20px;
  font-size: 16px;
  cursor: pointer;
  line-height: 18px;
  color: #222222;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-modal .fr-modal-wrapper .fr-modal-head i.fr-modal-close {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
}
.fr-modal .fr-modal-wrapper .fr-modal-head h4 {
  font-size: 18px;
  padding: 12px 10px;
  margin: 0;
  font-weight: 400;
  line-height: 18px;
  display: inline-block;
  float: left;
}
.fr-modal .fr-modal-wrapper div.fr-modal-body {
  height: 100%;
  min-height: 150px;
  overflow-y: scroll;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head i:hover {
  background: #ebebeb;
}
.fr-overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: #000000;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  z-index: 9998;
}
.fr-popup {
  position: absolute;
  display: none;
  color: #222222;
  background: #ffffff;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  margin-top: 10px;
  z-index: 9995;
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-popup .fr-input-focus {
  background: #f5f5f5;
}
.fr-popup.fr-above {
  margin-top: -10px;
  border-top: 0;
  border-bottom: 5px solid #222222;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-popup.fr-active {
  display: block;
}
.fr-popup.fr-hidden {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-popup .fr-hs {
  display: block !important;
}
.fr-popup .fr-hs.fr-hidden {
  display: none !important;
}
.fr-popup .fr-input-line {
  position: relative;
  padding: 8px 0;
}
.fr-popup .fr-input-line input[type=\"text\"],
.fr-popup .fr-input-line textarea {
  width: 100%;
  margin: 0px 0 1px 0;
  border: none;
  border-bottom: solid 1px #bdbdbd;
  color: #222222;
  font-size: 14px;
  padding: 6px 0 2px;
  background: rgba(0, 0, 0, 0);
  position: relative;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-popup .fr-input-line input[type=\"text\"]:focus,
.fr-popup .fr-input-line textarea:focus {
  border-bottom: solid 2px #1e88e5;
  margin-bottom: 0px;
}
.fr-popup .fr-input-line input + label,
.fr-popup .fr-input-line textarea + label {
  position: absolute;
  top: 0;
  left: 0;
  font-size: 12px;
  color: rgba(0, 0, 0, 0);
  -webkit-transition: color 0.2s ease 0s;
  -moz-transition: color 0.2s ease 0s;
  -ms-transition: color 0.2s ease 0s;
  -o-transition: color 0.2s ease 0s;
  z-index: 3;
  width: 100%;
  display: block;
  background: #ffffff;
}
.fr-popup .fr-input-line input.fr-not-empty:focus + label,
.fr-popup .fr-input-line textarea.fr-not-empty:focus + label {
  color: #1e88e5;
}
.fr-popup .fr-input-line input.fr-not-empty + label,
.fr-popup .fr-input-line textarea.fr-not-empty + label {
  color: #808080;
}
.fr-popup input,
.fr-popup textarea {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  outline: none;
}
.fr-popup textarea {
  resize: none;
}
.fr-popup .fr-buttons {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  padding: 0 2px;
  white-space: nowrap;
  line-height: 0;
  border-bottom: 0px;
}
.fr-popup .fr-buttons::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup .fr-buttons .fr-btn {
  display: inline-block;
  float: none;
}
.fr-popup .fr-buttons .fr-btn i {
  float: left;
}
.fr-popup .fr-buttons .fr-separator {
  display: inline-block;
  float: none;
}
.fr-popup .fr-layer {
  width: 225px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 10px;
  display: none;
}
@media (min-width: 768px) {
  .fr-popup .fr-layer {
    width: 300px;
  }
}
.fr-popup .fr-layer.fr-active {
  display: inline-block;
}
.fr-popup .fr-action-buttons {
  z-index: 7;
  height: 36px;
  text-align: right;
}
.fr-popup .fr-action-buttons button.fr-command {
  height: 36px;
  line-height: 1;
  color: #1e88e5;
  padding: 10px;
  cursor: pointer;
  text-decoration: none;
  border: none;
  background: none;
  font-size: 16px;
  outline: none;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
}
.fr-popup .fr-action-buttons button.fr-command + button {
  margin-left: 24px;
}
.fr-popup .fr-action-buttons button.fr-command:hover,
.fr-popup .fr-action-buttons button.fr-command:focus {
  background: #ebebeb;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button.fr-command:active {
  background: #d6d6d6;
  color: #1e88e5;
}
.fr-popup .fr-action-buttons button::-moz-focus-inner {
  border: 0;
}
.fr-popup .fr-checkbox {
  position: relative;
  display: inline-block;
  width: 16px;
  height: 16px;
  line-height: 1;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  vertical-align: middle;
}
.fr-popup .fr-checkbox svg {
  margin-left: 2px;
  margin-top: 2px;
  display: none;
  width: 10px;
  height: 10px;
}
.fr-popup .fr-checkbox span {
  border: solid 1px #222222;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  width: 16px;
  height: 16px;
  display: inline-block;
  position: relative;
  z-index: 1;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, border-color 0.2s ease 0s;
}
.fr-popup .fr-checkbox input {
  position: absolute;
  z-index: 2;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border: 0 none;
  cursor: pointer;
  height: 16px;
  margin: 0;
  padding: 0;
  width: 16px;
  top: 1px;
  left: 1px;
}
.fr-popup .fr-checkbox input:checked + span {
  background: #1e88e5;
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox input:checked + span svg {
  display: block;
}
.fr-popup .fr-checkbox input:focus + span {
  border-color: #1e88e5;
}
.fr-popup .fr-checkbox-line {
  font-size: 14px;
  line-height: 1.4px;
  margin-top: 10px;
}
.fr-popup .fr-checkbox-line label {
  cursor: pointer;
  margin: 0 5px;
  vertical-align: middle;
}
.fr-popup.fr-rtl {
  direction: rtl;
  text-align: right;
}
.fr-popup.fr-rtl .fr-action-buttons {
  text-align: left;
}
.fr-popup.fr-rtl .fr-input-line input + label,
.fr-popup.fr-rtl .fr-input-line textarea + label {
  left: auto;
  right: 0;
}
.fr-popup.fr-rtl .fr-buttons .fr-separator.fr-vs {
  float: right;
}
.fr-popup .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-popup.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top: 5px solid #222222;
}
.fr-text-edit-layer {
  width: 250px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  display: block !important;
}
.fr-toolbar {
  color: #222222;
  background: #ffffff;
  position: relative;
  z-index: 4;
  font-family: Arial, Helvetica, sans-serif;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  padding: 0 2px;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  text-align: left;
  border: 0px;
  border-top: 5px solid #222222;
  text-rendering: optimizelegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fr-toolbar::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-toolbar.fr-rtl {
  text-align: right;
}
.fr-toolbar.fr-inline {
  display: none;
  white-space: nowrap;
  position: absolute;
  margin-top: 10px;
}
.fr-toolbar.fr-inline .fr-arrow {
  width: 0;
  height: 0;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-bottom: 5px solid #222222;
  position: absolute;
  top: -9px;
  left: 50%;
  margin-left: -5px;
  display: inline-block;
}
.fr-toolbar.fr-inline.fr-above {
  margin-top: -10px;
  -webkit-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 -1px 3px rgba(0, 0, 0, 0.12), 0 -1px 1px 1px rgba(0, 0, 0, 0.16);
  border-bottom: 5px solid #222222;
  border-top: 0;
}
.fr-toolbar.fr-inline.fr-above .fr-arrow {
  top: auto;
  bottom: -9px;
  border-bottom: 0;
  border-top-color: inherit;
  border-top-style: solid;
  border-top-width: 5px;
}
.fr-toolbar.fr-top {
  top: 0;
  border-radius: 2px 2px 0 0;
  -moz-border-radius: 2px 2px 0 0;
  -webkit-border-radius: 2px 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-toolbar.fr-bottom {
  bottom: 0;
  border-radius: 0 0 2px 2px;
  -moz-border-radius: 0 0 2px 2px;
  -webkit-border-radius: 0 0 2px 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-separator {
  background: #ebebeb;
  display: block;
  vertical-align: top;
  float: left;
}
.fr-separator + .fr-separator {
  display: none;
}
.fr-separator.fr-vs {
  height: 34px;
  width: 1px;
  margin: 2px;
}
.fr-separator.fr-hs {
  clear: both;
  height: 1px;
  width: calc(100% - (2 * 2px));
  margin: 0 2px;
}
.fr-separator.fr-hidden {
  display: none !important;
}
.fr-rtl .fr-separator {
  float: right;
}
.fr-toolbar.fr-inline .fr-separator.fr-hs {
  float: none;
}
.fr-toolbar.fr-inline .fr-separator.fr-vs {
  float: none;
  display: inline-block;
}
.fr-visibility-helper {
  display: none;
  margin-left: 0px !important;
}
@media (min-width: 768px) {
  .fr-visibility-helper {
    margin-left: 1px !important;
  }
}
@media (min-width: 992px) {
  .fr-visibility-helper {
    margin-left: 2px !important;
  }
}
@media (min-width: 1200px) {
  .fr-visibility-helper {
    margin-left: 3px !important;
  }
}
.fr-opacity-0 {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-box {
  position: relative;
}
/**
 * Postion sticky hacks.
 */
.fr-sticky {
  position: -webkit-sticky;
  position: -moz-sticky;
  position: -ms-sticky;
  position: -o-sticky;
  position: sticky;
}
.fr-sticky-off {
  position: relative;
}
.fr-sticky-on {
  position: fixed;
}
.fr-sticky-on.fr-sticky-ios {
  position: absolute;
  left: 0;
  right: 0;
  width: auto !important;
}
.fr-sticky-dummy {
  display: none;
}
.fr-sticky-on + .fr-sticky-dummy,
.fr-sticky-box > .fr-sticky-dummy {
  display: block;
}
span.fr-sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-box .fr-counter {
  position: absolute;
  bottom: 0px;
  padding: 5px;
  right: 0px;
  color: #cccccc;
  content: attr(data-chars);
  font-size: 15px;
  font-family: \"Times New Roman\", Georgia, Serif;
  z-index: 1;
  background: #ffffff;
  border-top: solid 1px #ebebeb;
  border-left: solid 1px #ebebeb;
  border-radius: 2px 0 0 0;
  -moz-border-radius: 2px 0 0 0;
  -webkit-border-radius: 2px 0 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-rtl .fr-counter {
  left: 0px;
  right: auto;
  border-left: none;
  border-right: solid 1px #ebebeb;
  border-radius: 0 2px 0 0;
  -moz-border-radius: 0 2px 0 0;
  -webkit-border-radius: 0 2px 0 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
}
.fr-box.fr-code-view .fr-counter {
  display: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-drag-helper {
  background: #1e88e5;
  height: 2px;
  margin-top: -1px;
  -webkit-opacity: 0.2;
  -moz-opacity: 0.2;
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  z-index: 9999;
  display: none;
}
.fr-drag-helper.fr-visible {
  display: block;
}
.fr-dragging {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
body.fr-fullscreen {
  overflow: hidden;
  height: 100%;
  width: 100%;
  position: fixed;
}
.fr-box.fr-fullscreen {
  margin: 0 !important;
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9990 !important;
  width: auto !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-top {
  top: 0 !important;
}
.fr-box.fr-fullscreen .fr-toolbar.fr-bottom {
  bottom: 0 !important;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-line-breaker {
  cursor: text;
  border-top: 1px solid #1e88e5;
  position: fixed;
  z-index: 2;
  display: none;
}
.fr-line-breaker.fr-visible {
  display: block;
}
.fr-line-breaker a.fr-floating-btn {
  position: absolute;
  left: calc(50% - (32px / 2));
  top: -16px;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element .fr-video {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element .fr-video::after {
  position: absolute;
  content: '';
  z-index: 1;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  cursor: pointer;
  display: block;
  background: rgba(0, 0, 0, 0);
}
.fr-element .fr-video.fr-active > * {
  z-index: 2;
  position: relative;
}
.fr-element .fr-video > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
.fr-box .fr-video-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box .fr-video-resizer.fr-active {
  display: block;
}
.fr-box .fr-video-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-box .fr-video-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-box .fr-video-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-box .fr-video-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-box .fr-video-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-video-size-layer .fr-video-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-video-size-layer .fr-video-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-video-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-video-upload-layer:hover {
  background: #ebebeb;
}
.fr-video-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-video-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-video-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-video-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-video-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-video-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-video-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-video-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-video-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-video-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-video-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
textarea.fr-code {
  display: none;
  width: 100%;
  resize: none;
  -moz-resize: none;
  -webkit-resize: none;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border: none;
  padding: 10px;
  margin: 0px;
  font-family: \"Courier New\", monospace;
  font-size: 14px;
  background: #ffffff;
  color: #000000;
  outline: none;
}
.fr-box.fr-rtl textarea.fr-code {
  direction: rtl;
}
.fr-box .CodeMirror {
  display: none;
}
.fr-box.fr-code-view textarea.fr-code {
  display: block;
}
.fr-box.fr-code-view.fr-inline {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
}
.fr-box.fr-code-view .fr-element,
.fr-box.fr-code-view .fr-placeholder,
.fr-box.fr-code-view .fr-iframe {
  display: none;
}
.fr-box.fr-code-view .CodeMirror {
  display: block;
}
.fr-box.fr-inline.fr-code-view .fr-command.fr-btn.html-switch {
  display: block;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch {
  position: absolute;
  top: 0;
  right: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  display: none;
  background: #ffffff;
  color: #222222;
  -moz-outline: 0;
  outline: 0;
  border: 0;
  line-height: 1;
  cursor: pointer;
  text-align: left;
  padding: 12px 12px;
  -webkit-transition: background 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s;
  border-radius: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  z-index: 2;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch i {
  font-size: 14px;
  width: 14px;
  text-align: center;
}
.fr-box.fr-inline .fr-command.fr-btn.html-switch.fr-desktop:hover {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-popup .fr-emoticon {
  display: inline-block;
  font-size: 20px;
  width: 20px;
  padding: 5px;
  line-height: 1;
  cursor: default;
  font-weight: normal;
  font-family: \"Apple Color Emoji\", \"Segoe UI Emoji\", \"NotoColorEmoji\", \"Segoe UI Symbol\", \"Android Emoji\", \"EmojiSymbols\";
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-popup .fr-emoticon img {
  height: 20px;
}
.fr-popup .fr-link:focus {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element img {
  cursor: pointer;
}
.fr-image-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-image-resizer.fr-active {
  display: block;
}
.fr-image-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-image-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
.fr-image-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
.fr-image-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
.fr-image-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
.fr-image-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
.fr-image-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
.fr-image-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
.fr-image-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  .fr-image-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  .fr-image-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  .fr-image-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
.fr-image-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
.fr-image-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  text-align: center;
}
.fr-image-upload-layer:hover {
  background: #ebebeb;
}
.fr-image-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-image-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-image-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-image-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-image-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-image-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-image-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-image-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-image-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-image-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
.fr-image-size-layer .fr-image-group .fr-input-line {
  width: calc(50% - 5px);
  display: inline-block;
}
.fr-image-size-layer .fr-image-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
.fr-uploading {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-quick-insert {
  position: absolute;
  z-index: 9998;
  white-space: nowrap;
  padding-right: 5px;
  margin-left: -5px;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.fr-quick-insert.fr-on a.fr-floating-btn svg {
  -webkit-transform: rotate(135deg);
  -moz-transform: rotate(135deg);
  -ms-transform: rotate(135deg);
  -o-transform: rotate(135deg);
}
.fr-quick-insert.fr-hidden {
  display: none;
}
.fr-qi-helper {
  position: absolute;
  z-index: 3;
  padding-left: 10px;
  white-space: nowrap;
}
.fr-qi-helper a.fr-btn.fr-floating-btn {
  text-align: center;
  display: inline-block;
  color: #222222;
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -ms-transform: scale(0);
  -o-transform: scale(0);
}
.fr-qi-helper a.fr-btn.fr-floating-btn.fr-size-1 {
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-modal-head .fr-modal-head-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more {
  float: left;
  opacity: 1;
  -webkit-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -moz-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -ms-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
  -o-transition: padding 0.2s ease 0s, width 0.2s ease 0s, opacity 0.2s ease 0s;
}
.fr-modal-head .fr-modal-head-line i.fr-modal-more.fr-not-available {
  opacity: 0;
  width: 0;
  padding: 12px 0;
}
.fr-modal-head .fr-modal-tags {
  display: none;
}
.fr-modal-head .fr-modal-tags a {
  display: inline-block;
  opacity: 0;
  padding: 6px 8px;
  margin: 8px 0 8px 8px;
  text-decoration: none;
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  color: #1e88e5;
  -webkit-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, background 0.2s ease 0s;
  cursor: pointer;
}
.fr-modal-head .fr-modal-tags a:focus {
  outline: none;
}
.fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
div.fr-modal-body .fr-preloader {
  display: block;
  margin: 50px auto;
}
div.fr-modal-body div.fr-image-list {
  text-align: center;
  margin: 0 10px;
  padding: 0;
}
div.fr-modal-body div.fr-image-list::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
div.fr-modal-body div.fr-image-list .fr-list-column {
  float: left;
  width: calc((100% - 10px) / 2);
}
@media (min-width: 768px) and (max-width: 1199px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 20px) / 3);
  }
}
@media (min-width: 1200px) {
  div.fr-modal-body div.fr-image-list .fr-list-column {
    width: calc((100% - 30px) / 4);
  }
}
div.fr-modal-body div.fr-image-list .fr-list-column + .fr-list-column {
  margin-left: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container {
  position: relative;
  width: 100%;
  display: block;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  border-radius: 2px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  overflow: hidden;
}
div.fr-modal-body div.fr-image-list div.fr-image-container:first-child {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container + div {
  margin-top: 10px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::after {
  position: absolute;
  -webkit-opacity: 0.5;
  -moz-opacity: 0.5;
  opacity: 0.5;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s;
  background: #000000;
  content: \"\";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 2;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-image-deleting::before {
  content: attr(data-deleting);
  color: #ffffff;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  position: absolute;
  z-index: 3;
  font-size: 15px;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty {
  height: 95px;
  background: #cccccc;
  z-index: 1;
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-empty::after {
  position: absolute;
  margin: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: attr(data-loading);
  display: inline-block;
  height: 20px;
}
div.fr-modal-body div.fr-image-list div.fr-image-container img {
  width: 100%;
  vertical-align: middle;
  position: relative;
  z-index: 2;
  -webkit-opacity: 1;
  -moz-opacity: 1;
  opacity: 1;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  -webkit-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -moz-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -ms-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -o-transition: opacity 0.2s ease 0s, filter 0.2s ease 0s;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container.fr-mobile-selected .fr-insert-img {
  display: inline-block;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img,
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  display: none;
  top: 50%;
  border-radius: 100%;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  -moz-background-clip: padding;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  -webkit-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -moz-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -ms-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -o-transition: background 0.2s ease 0s, color 0.2s ease 0s;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  position: absolute;
  cursor: pointer;
  margin: 0;
  width: 36px;
  height: 36px;
  line-height: 36px;
  text-decoration: none;
  z-index: 3;
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img {
  background: #b8312f;
  color: #ffffff;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(25%);
  -moz-transform: translateY(-50%) translateX(25%);
  -ms-transform: translateY(-50%) translateX(25%);
  -o-transform: translateY(-50%) translateX(25%);
}
div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img {
  background: #ffffff;
  color: #1e88e5;
  left: 50%;
  -webkit-transform: translateY(-50%) translateX(-125%);
  -moz-transform: translateY(-50%) translateX(-125%);
  -ms-transform: translateY(-50%) translateX(-125%);
  -o-transform: translateY(-50%) translateX(-125%);
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a:hover {
  background: #ebebeb;
}
.fr-desktop .fr-modal-wrapper .fr-modal-head .fr-modal-tags a.fr-selected-tag {
  background: #d6d6d6;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover img {
  -webkit-opacity: 0.75;
  -moz-opacity: 0.75;
  opacity: 0.75;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-delete-img,
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container:hover .fr-insert-img {
  display: inline-block;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-delete-img:hover {
  background: #bf4644;
  color: #ffffff;
}
.fr-desktop .fr-modal-wrapper div.fr-modal-body div.fr-image-list div.fr-image-container .fr-insert-img:hover {
  background: #ebebeb;
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-popup .fr-colors-tabs {
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 1px 1px rgba(0, 0, 0, 0.16);
  margin-bottom: 5px;
  line-height: 16px;
  margin-left: -2px;
  margin-right: -2px;
}
.fr-popup .fr-colors-tabs .fr-colors-tab {
  display: inline-block;
  width: 50%;
  cursor: pointer;
  text-align: center;
  color: #222222;
  font-size: 13px;
  padding: 8px 0;
  position: relative;
}
.fr-popup .fr-colors-tabs .fr-colors-tab:hover,
.fr-popup .fr-colors-tabs .fr-colors-tab:focus {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab[data-param1=\"background\"]::after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #1e88e5;
  content: '';
  -webkit-transition: transform 0.2s ease 0s;
  -moz-transition: transform 0.2s ease 0s;
  -ms-transition: transform 0.2s ease 0s;
  -o-transition: transform 0.2s ease 0s;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab {
  color: #1e88e5;
}
.fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
}
.fr-popup .fr-separator + .fr-colors-tabs {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin-left: 2px;
  margin-right: 2px;
}
.fr-popup .fr-color-set {
  line-height: 0;
  display: none;
}
.fr-popup .fr-color-set.fr-selected-set {
  display: block;
}
.fr-popup .fr-color-set > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-color-set > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-color-set > span .fr-selected-color {
  color: #ffffff;
  font-family: FontAwesome;
  font-size: 13px;
  font-weight: 400;
  line-height: 32px;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  text-align: center;
  cursor: default;
}
.fr-popup .fr-color-set > span:hover,
.fr-popup .fr-color-set > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-rtl .fr-popup .fr-colors-tabs .fr-colors-tab.fr-selected-tab[data-param1=\"text\"] ~ [data-param1=\"background\"]::after {
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-file-upload-layer {
  border: dashed 2px #bdbdbd;
  padding: 25px 0;
  position: relative;
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 140%;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-align: center;
}
.fr-file-upload-layer:hover {
  background: #ebebeb;
}
.fr-file-upload-layer.fr-drop {
  background: #ebebeb;
  border-color: #1e88e5;
}
.fr-file-upload-layer .fr-form {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  overflow: hidden;
  margin: 0 !important;
  padding: 0 !important;
  width: 100% !important;
}
.fr-file-upload-layer .fr-form input {
  cursor: pointer;
  position: absolute;
  right: 0px;
  top: 0px;
  bottom: 0px;
  width: 500%;
  height: 100%;
  margin: 0px;
  font-size: 400px;
}
.fr-file-progress-bar-layer {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.fr-file-progress-bar-layer > h3 {
  font-size: 16px;
  margin: 10px 0;
  font-weight: normal;
}
.fr-file-progress-bar-layer > div.fr-action-buttons {
  display: none;
}
.fr-file-progress-bar-layer > div.fr-loader {
  background: #bcdbf7;
  height: 10px;
  width: 100%;
  margin-top: 20px;
  overflow: hidden;
  position: relative;
}
.fr-file-progress-bar-layer > div.fr-loader span {
  display: block;
  height: 100%;
  width: 0%;
  background: #1e88e5;
  -webkit-transition: width 0.2s ease 0s;
  -moz-transition: width 0.2s ease 0s;
  -ms-transition: width 0.2s ease 0s;
  -o-transition: width 0.2s ease 0s;
}
.fr-file-progress-bar-layer > div.fr-loader.fr-indeterminate span {
  width: 30% !important;
  position: absolute;
  top: 0;
  -webkit-animation: loading 2s linear infinite;
  -moz-animation: loading 2s linear infinite;
  -o-animation: loading 2s linear infinite;
  animation: loading 2s linear infinite;
}
.fr-file-progress-bar-layer.fr-error > div.fr-loader {
  display: none;
}
.fr-file-progress-bar-layer.fr-error > div.fr-action-buttons {
  display: block;
}
@keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-webkit-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-moz-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
@-o-keyframes loading {
  from {
    left: -25%;
  }
  to {
    left: 100%;
  }
}
/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */
.clearfix::after,
.dl-horizontal dd::after,
.form-horizontal .form-group::after,
.btn-toolbar::after,
.btn-group-vertical > .btn-group::after,
.nav::after,
.navbar::after,
.navbar-header::after,
.navbar-collapse::after,
.pager::after,
.panel-body::after,
.modal-header::after,
.modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-element table td.fr-selected-cell,
.fr-element table th.fr-selected-cell {
  border: 1px double #1e88e5;
}
.fr-element table tr {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-element table td,
.fr-element table th {
  user-select: text;
  -o-user-select: text;
  -moz-user-select: text;
  -khtml-user-select: text;
  -webkit-user-select: text;
  -ms-user-select: text;
}
.fr-element .fr-no-selection table td,
.fr-element .fr-no-selection table th {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-table-resizer {
  cursor: col-resize;
  position: fixed;
  z-index: 3;
  display: none;
}
.fr-table-resizer.fr-moving {
  z-index: 2;
}
.fr-table-resizer div {
  -webkit-opacity: 0;
  -moz-opacity: 0;
  opacity: 0;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  border-right: 1px solid #1e88e5;
}
.fr-no-selection {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
.fr-popup .fr-table-size .fr-table-size-info {
  text-align: center;
  font-size: 14px;
  padding: 8px;
}
.fr-popup .fr-table-size .fr-select-table-size {
  line-height: 0;
  padding: 0 5px 5px;
  white-space: nowrap;
}
.fr-popup .fr-table-size .fr-select-table-size > span {
  display: inline-block;
  padding: 0px 4px 4px 0;
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span > span {
  display: inline-block;
  width: 18px;
  height: 18px;
  border: 1px solid #dddddd;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover {
  background: transparent;
}
.fr-popup .fr-table-size .fr-select-table-size > span.hover > span {
  background: rgba(30, 136, 229, 0.3);
  border: solid 1px #1e88e5;
}
.fr-popup .fr-table-size .fr-select-table-size .new-line::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.fr-popup.fr-above .fr-table-size .fr-select-table-size > span {
  display: inline-block !important;
}
.fr-popup .fr-table-colors-buttons {
  margin-bottom: 5px;
}
.fr-popup .fr-table-colors {
  line-height: 0;
  display: block;
}
.fr-popup .fr-table-colors > span {
  display: inline-block;
  width: 32px;
  height: 32px;
  position: relative;
  z-index: 1;
}
.fr-popup .fr-table-colors > span > i {
  text-align: center;
  line-height: 32px;
  height: 32px;
  width: 32px;
  font-size: 13px;
  position: absolute;
  bottom: 0;
  cursor: default;
  left: 0;
}
.fr-popup .fr-table-colors > span:focus {
  outline: 1px solid #222222;
  z-index: 2;
}
.fr-popup.fr-desktop .fr-table-size .fr-select-table-size > span > span {
  width: 12px;
  height: 12px;
}
.fr-insert-helper {
  position: fixed;
  z-index: 9999;
  white-space: nowrap;
}
html body .fr-gatedvideo {
  position: relative;
  display: table;
  min-height: 140px;
}
html body .fr-gatedvideo video {
  background-color: rgba(67, 83, 147, 0.5);
}
html body .fr-gatedvideo:after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
/*!
 * froala_editor v2.2.4 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Froala Labs
 */
html body .clearfix::after,
html body .dl-horizontal dd::after,
html body .form-horizontal .form-group::after,
html body .btn-toolbar::after,
html body .btn-group-vertical > .btn-group::after,
html body .nav::after,
html body .navbar::after,
html body .navbar-header::after,
html body .navbar-collapse::after,
html body .pager::after,
html body .panel-body::after,
html body .modal-header::after,
html body .modal-footer::after {
  clear: both;
  display: block;
  content: \"\";
}
html body .fr-element .fr-gatedvideo {
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
html body .fr-element .fr-gatedvideo::after {
  content: \"\";
  position: absolute;
  background-repeat: no-repeat;
  background-position: 50% 40%;
  height: 100%;
  width: 100%;
  top: 0;
  left: 0;
  display: block;
  clear: both;
  background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
html body .fr-element .fr-gatedvideo.fr-active > * {
  z-index: 2;
  position: relative;
}
html body .fr-element .fr-gatedvideo > * {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  max-width: 100%;
  border: none;
}
html body .fr-box .fr-gatedvideo-resizer {
  position: absolute;
  border: solid 1px #1e88e5;
  display: none;
  user-select: none;
  -o-user-select: none;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
}
html body .fr-box .fr-gatedvideo-resizer.fr-active {
  display: block;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  display: block;
  position: absolute;
  background: #1e88e5;
  border: solid 1px #ffffff;
  z-index: 4;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  cursor: nw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  cursor: ne-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  cursor: sw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  cursor: se-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
  width: 12px;
  height: 12px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
  left: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
  right: -6px;
  top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
  left: -6px;
  bottom: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
  right: -6px;
  bottom: -6px;
}
@media (min-width: 1200px) {
  html body .fr-box .fr-gatedvideo-resizer .fr-handler {
    width: 10px;
    height: 10px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
    left: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
    right: -5px;
    top: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
    left: -5px;
    bottom: -5px;
  }
  html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
    right: -5px;
    bottom: -5px;
  }
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line {
  display: inline-block;
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line + .fr-input-line {
  margin-left: 10px;
}
html body .fr-gatedvideo-overlay {
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 9999;
  display: none;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/libraries.css";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/libraries.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\libraries.css");
    }
}
