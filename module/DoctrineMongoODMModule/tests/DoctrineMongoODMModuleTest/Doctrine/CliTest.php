<?php
/* THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
 */
namespace DoctrineMongoODMModuleTest\Doctrine;

use DoctrineMongoODMModuleTest\ServiceManagerFactory;
use PHPUnit\Framework\TestCase;

/**
 * Tests used to verify that command line functionality is active
 *
 * @license MIT
 * @link    http://www.doctrine-project.org/
 * @author  Adam Homsi <adam.homsi@gmail.com>
 */
class CliTest extends TestCase
{
    /**
     * @var \Symfony\Component\Console\Application
     */
    protected $cli;

    /**
     * @var \Doctrine\ODM\MongoDB\DocumentManager
     */
    protected $documentManager;

    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        $serviceManager     = ServiceManagerFactory::getServiceManager();

        /* @var $sharedEventManager \Laminas\EventManager\SharedEventManagerInterface */
        $sharedEventManager = $serviceManager->get('SharedEventManager');

        /* @var $application \Laminas\Mvc\Application */
        $application        = $serviceManager->get('Application');
        $invocations        = 0;

        $sharedEventManager = $application->getEventManager()->getSharedManager();

        $sharedEventManager->attach(
            'doctrine',
            'loadCli.post',
            function () use (&$invocations) {
                $invocations += 1;
            }
        );

        $application->bootstrap();
        $this->documentManager = $serviceManager->get('doctrine.documentmanager.odm_default');
        $this->cli           = $serviceManager->get('doctrine.cli');

        $this->assertSame(1, $invocations);
    }

    public function testValidHelpers()
    {
        $helperSet = $this->cli->getHelperSet();

        /* @var $dmHelper \Doctrine\ODM\MongoDB\Tools\Console\Helper\DocumentManagerHelper */
        $dmHelper = $helperSet->get('dm');

        $this->assertInstanceOf('\Doctrine\ODM\MongoDB\Tools\Console\Helper\DocumentManagerHelper', $dmHelper);
        $this->assertSame($this->documentManager, $dmHelper->getDocumentManager());
    }

    public function testValidCommands()
    {
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateDocumentsCommand',
            $this->cli->get('odm:generate:documents')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateHydratorsCommand',
            $this->cli->get('odm:generate:hydrators')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\GeneratePersistentCollectionsCommand',
            $this->cli->get('odm:generate:persistent-collections')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateProxiesCommand',
            $this->cli->get('odm:generate:proxies')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\GenerateRepositoriesCommand',
            $this->cli->get('odm:generate:repositories')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\QueryCommand',
            $this->cli->get('odm:query')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\CreateCommand',
            $this->cli->get('odm:schema:create')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\UpdateCommand',
            $this->cli->get('odm:schema:update')
        );
        $this->assertInstanceOf(
            'Doctrine\ODM\MongoDB\Tools\Console\Command\Schema\DropCommand',
            $this->cli->get('odm:schema:drop')
        );
    }
}
