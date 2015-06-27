<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three LTD <support@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Manager;

use NotifyMeHQ\Contracts\ManagerInterface;

class NotifyMeManager implements ManagerInterface
{
    /**
     * The active connection instances.
     *
     * @var \NotifyMeHQ\Contracts\GatewayInterface[]
     */
    protected $connections = [];

    /**
     * Get a connection instance.
     *
     * @param string|null $name
     *
     * @return \NotifyMeHQ\Contracts\GatewayInterface
     */
    public function connection($name = null)
    {
        // TODO
    }

    /**
     * Reconnect to the given connection.
     *
     * @param string|null $name
     *
     * @return \NotifyMeHQ\Contracts\GatewayInterface
     */
    public function reconnect($name = null)
    {
        // TODO
    }

    /**
     * Disconnect from the given connection.
     *
     * @param string|null $name
     *
     * @return void
     */
    public function disconnect($name = null)
    {
        // TODO
    }

    /**
     * Get the configuration for a connection.
     *
     * @param string $name
     *
     * @return array
     */
    public function getConnectionConfig($name)
    {
        // TODO
    }

    /**
     * Get the default connection name.
     *
     * @return string
     */
    public function getDefaultConnection()
    {
        // TODO
    }

    /**
     * Set the default connection name.
     *
     * @param string $name
     *
     * @return void
     */
    public function setDefaultConnection($name)
    {
        // TODO
    }

    /**
     * Return all of the created connections.
     *
     * @return \NotifyMeHQ\Contracts\GatewayInterface[]
     */
    public function getConnections()
    {
        return $this->connections;
    }
}
