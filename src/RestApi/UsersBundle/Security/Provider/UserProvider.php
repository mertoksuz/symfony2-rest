<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace RestApi\UsersBundle\Security\Provider;

use FOS\UserBundle\Security\UserProvider as FOSProvider;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use FOS\UserBundle\Model\UserManagerInterface;

class UserProvider extends FOSProvider
{

    /**
     * Constructor.
     *
     * @param UserManagerInterface $userManager
     */
    public function __construct(UserManagerInterface $userManager)
    {
        parent::__construct($userManager);
    }

    /**
     * {@inheritDoc}
     */
    public function loadUserByUsername($username)
    {
        $user = $this->findUser($username);
        if (!$user || $user->getDeleted()) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        return $user;
    }
}
