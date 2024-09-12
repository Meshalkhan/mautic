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

/* @bundles/EmailBundle/Entity/CopyRepository.php */
class __TwigTemplate_7b5e7cb0002e1cfedcf5dbf71cdd25f9 extends Template
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

namespace Mautic\\EmailBundle\\Entity;

use Doctrine\\ORM\\NoResultException;
use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * @extends CommonRepository<Copy>
 */
class CopyRepository extends CommonRepository
{
    /**
     * @param string \$hash
     * @param string \$subject
     * @param string \$body
     * @param string \$bodyText
     */
    public function saveCopy(\$hash, \$subject, \$body, \$bodyText)
    {
        \$db = \$this->getEntityManager()->getConnection();

        try {
            \$db->insert(
                MAUTIC_TABLE_PREFIX.'email_copies',
                [
                    'id'           => \$hash,
                    'body'         => \$body,
                    'body_text'    => \$bodyText,
                    'subject'      => \$subject,
                    'date_created' => (new \\DateTime())->setTimezone(new \\DateTimeZone('UTC'))->format('Y-m-d H:i:s'),
                ]
            );

            return true;
        } catch (\\Exception \$e) {
            error_log(\$e);

            return false;
        }
    }

    /**
     * @param string \$string md5 hash or content
     *
     * @return array
     */
    public function findByHash(\$string, \$subject = null)
    {
        if (null !== \$subject) {
            // Combine subject with \$string and hash together
            \$string = \$subject.\$string;
        }

        // Assume that \$string is already a md5 hash if 32 characters
        \$hash = (32 !== strlen(\$string)) ? \$hash = md5(\$string) : \$string;

        \$q = \$this->createQueryBuilder(\$this->getTableAlias());
        \$q->where(
            \$q->expr()->eq(\$this->getTableAlias().'.id', ':id')
        )
            ->setParameter('id', \$hash);

        try {
            \$result = \$q->getQuery()->getSingleResult();
        } catch (NoResultException) {
            \$result = null;
        }

        return \$result;
    }

    public function getTableAlias(): string
    {
        return 'ec';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Entity/CopyRepository.php";
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
        return new Source("", "@bundles/EmailBundle/Entity/CopyRepository.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Entity\\CopyRepository.php");
    }
}
