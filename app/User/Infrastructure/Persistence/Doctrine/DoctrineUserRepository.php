<?php
declare(strict_types=1);

namespace Teamo\User\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityRepository;
use Teamo\User\Domain\Model\User\User;
use Teamo\User\Domain\Model\User\UserId;
use Teamo\User\Domain\Model\User\UserRepository;

class DoctrineUserRepository extends EntityRepository implements UserRepository
{
    public function add(User $user)
    {
        $this->getEntityManager()->persist($user);
    }

    public function remove(User $user)
    {
        $this->getEntityManager()->remove($user);
    }

    public function ofId(UserId $userId): User
    {
        $user = $this->find($userId);

        if (null === $user) {
            throw new \InvalidArgumentException('Invalid user id');
        }

        return $user;
    }
}
