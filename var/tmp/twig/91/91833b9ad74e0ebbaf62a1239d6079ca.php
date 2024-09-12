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

/* @bundles/CoreBundle/Assets/json/countries.json */
class __TwigTemplate_4fe52e41f81b8c31fb1e4cff1e31bb72 extends Template
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
        yield "[
    \"Afghanistan\",
    \"Åland Islands\",
    \"Albania\",
    \"Algeria\",
    \"Andorra\",
    \"Angola\",
    \"Anguilla\",
    \"Antarctica\",
    \"Antigua and Barbuda\",
    \"Argentina\",
    \"Armenia\",
    \"Aruba\",
    \"Australia\",
    \"Austria\",
    \"Azerbaijan\",
    \"Bahamas\",
    \"Bahrain\",
    \"Bangladesh\",
    \"Barbados\",
    \"Belarus\",
    \"Belgium\",
    \"Belize\",
    \"Benin\",
    \"Bermuda\",
    \"Bhutan\",
    \"Bolivia\",
    \"Bonaire, Saint Eustatius and Saba\",
    \"Bosnia and Herzegovina\",
    \"Botswana\",
    \"Bouvet Island\",
    \"Brazil\",
    \"Brunei\",
    \"Bulgaria\",
    \"Burkina Faso\",
    \"Burundi\",
    \"Cape Verde\",
    \"Cambodia\",
    \"Cameroon\",
    \"Canada\",
    \"Cayman Islands\",
    \"Central African Republic\",
    \"Chad\",
    \"Chile\",
    \"China\",
    \"Colombia\",
    \"Comoros\",
    \"Cook Islands\",
    \"Costa Rica\",
    \"Croatia\",
    \"Cuba\",
    \"Curaçao\",
    \"Cyprus\",
    \"Czech Republic\",
    \"Denmark\",
    \"Djibouti\",
    \"Dominica\",
    \"Dominican Republic\",
    \"Democratic Republic of the Congo\",
    \"East Timor\",
    \"Ecuador\",
    \"Egypt\",
    \"El Salvador\",
    \"Equatorial Guinea\",
    \"Eritrea\",
    \"Estonia\",
    \"Eswatini\",
    \"Ethiopia\",
    \"Falkland Islands\",
    \"Fiji\",
    \"Finland\",
    \"France\",
    \"French Guiana\",
    \"French Polynesia\",
    \"Gabon\",
    \"Gambia\",
    \"Georgia\",
    \"Germany\",
    \"Ghana\",
    \"Gibraltar\",
    \"Greece\",
    \"Greenland\",
    \"Grenada\",
    \"Guadeloupe\",
    \"Guam\",
    \"Guatemala\",
    \"Guernsey\",
    \"Guinea\",
    \"Guinea Bissau\",
    \"Guyana\",
    \"Haiti\",
    \"Heard Island and McDonald Islands\",
    \"Holy See\",
    \"Honduras\",
    \"Hong Kong\",
    \"Hungary\",
    \"Iceland\",
    \"India\",
    \"Indonesia\",
    \"Iran\",
    \"Iraq\",
    \"Ireland\",
    \"Israel\",
    \"Isle of Man\",
    \"Italy\",
    \"Ivory Coast\",
    \"Jamaica\",
    \"Japan\",
    \"Jersey\",
    \"Jordan\",
    \"Kazakhstan\",
    \"Kenya\",
    \"Kiribati\",
    \"Kosovo\",
    \"Kuwait\",
    \"Kyrgyzstan\",
    \"Laos\",
    \"Latvia\",
    \"Lebanon\",
    \"Lesotho\",
    \"Liberia\",
    \"Libya\",
    \"Liechtenstein\",
    \"Lithuania\",
    \"Luxembourg\",
    \"Macao\",
    \"Macedonia\",
    \"Madagascar\",
    \"Malawi\",
    \"Malaysia\",
    \"Maldives\",
    \"Mali\",
    \"Malta\",
    \"Marshall Islands\",
    \"Martinique\",
    \"Mauritania\",
    \"Mauritius\",
    \"Mayotte\",
    \"Mexico\",
    \"Micronesia\",
    \"Moldova\",
    \"Monaco\",
    \"Mongolia\",
    \"Montenegro\",
    \"Montserrat\",
    \"Morocco\",
    \"Mozambique\",
    \"Myanmar\",
    \"Namibia\",
    \"Nauru\",
    \"Nepal\",
    \"Netherlands\",
    \"New Caledonia\",
    \"New Zealand\",
    \"Nicaragua\",
    \"Niger\",
    \"Nigeria\",
    \"Niue\",
    \"North Korea\",
    \"Northern Mariana Islands\",
    \"Norway\",
    \"Oman\",
    \"Pakistan\",
    \"Palau\",
    \"Palestine\",
    \"Panama\",
    \"Papua New Guinea\",
    \"Paraguay\",
    \"Peru\",
    \"Philippines\",
    \"Pitcairn\",
    \"Poland\",
    \"Portugal\",
    \"Puerto Rico\",
    \"Qatar\",
    \"Republic of the Congo\",
    \"Réunion\",
    \"Romania\",
    \"Russia\",
    \"Rwanda\",
    \"Saint Barthelemy\",
    \"Saint Helena, Ascension and Tristan da Cunha\",
    \"Saint Kitts and Nevis\",
    \"Saint Lucia\",
    \"Saint Martin\",
    \"Saint Pierre and Miquelon\",
    \"Saint Vincent and the Grenadines\",
    \"Samoa\",
    \"San Marino\",
    \"Sao Tome and Principe\",
    \"Saudi Arabia\",
    \"Senegal\",
    \"Serbia\",
    \"Seychelles\",
    \"Sierra Leone\",
    \"Singapore\",
    \"Slovakia\",
    \"Slovenia\",
    \"Solomon Islands\",
    \"Somalia\",
    \"South Africa\",
    \"South Georgia and the South Sandwich Islands\",
    \"South Korea\",
    \"South Sudan\",
    \"Spain\",
    \"Sri Lanka\",
    \"Svalbard and Jan Mayen\",
    \"Sudan\",
    \"Suriname\",
    \"Sweden\",
    \"Switzerland\",
    \"Syria\",
    \"Tahiti\",
    \"Taiwan\",
    \"Tajikistan\",
    \"Tanzania\",
    \"Thailand\",
    \"Togo\",
    \"Tokelau\",
    \"Tonga\",
    \"Trinidad and Tobago\",
    \"Tunisia\",
    \"Turkey\",
    \"Turkmenistan\",
    \"Turks and Caicos Islands\",
    \"Tuvalu\",
    \"United Kingdom\",
    \"United States\",
    \"Unknown\",
    \"Uganda\",
    \"Ukraine\",
    \"United Arab Emirates\",
    \"Uruguay\",
    \"Uzbekistan\",
    \"Vanuatu\",
    \"Venezuela\",
    \"Vietnam\",
    \"Virgin Islands (British)\",
    \"Virgin Islands (U.S.)\",
    \"Wallis and Futuna\",
    \"Western Sahara\",
    \"Yemen\",
    \"Yugoslavia\",
    \"Zambia\",
    \"Zimbabwe\"
]
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/json/countries.json";
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
        return new Source("", "@bundles/CoreBundle/Assets/json/countries.json", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\json\\countries.json");
    }
}
