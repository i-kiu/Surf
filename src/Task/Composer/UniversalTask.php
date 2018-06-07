<?php
namespace TYPO3\Surf\Task\Composer;

/*
 * This file is part of TYPO3 Surf.
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

use TYPO3\Surf\Domain\Model\Application;
use TYPO3\Surf\Domain\Model\Deployment;
use TYPO3\Surf\Domain\Model\Node;

/**
 * Installs the composer packages based on a composer.json file in the projects root folder
 */
class UniversalTask extends AbstractComposerTask
{
    /**
     * Arguments for the command
     *
     * @var array
     */
    protected $arguments = [
        '--no-ansi',
        '--no-interaction'
    ];

    /**
     * @param Node $node
     * @param Application $application
     * @param Deployment $deployment
     * @param array $options
     * @throws \TYPO3\Surf\Exception\InvalidConfigurationException
     * @throws \TYPO3\Surf\Exception\TaskExecutionException
     */
    public function execute(Node $node, Application $application, Deployment $deployment, array $options = [])
    {
        if (!isset($options['command'])) {
            throw new InvalidConfigurationException('Missing "command" option for ' . static::class, 1528352763);
        }
        $this->command = escapeshellarg($options['command']);
        unset($options['command']);

        if (isset($options['arguments'])) {
            $this->arguments = array_map('escapeshellarg', (array)$options['arguments']);
        }
        unset($options['arguments']);

        parent::execute($node, $application, $deployment, $options);
    }
}
