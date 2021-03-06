<?php
declare(strict_types=1);

namespace Teamo\Project\Infrastructure\Persistence\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\GuidType;
use Teamo\Project\Domain\Model\Team\TeamMemberId;

class DoctrineTeamMemberId extends GuidType
{
    public function getName()
    {
        return 'TeamMemberId';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        return $value ? $value->id() : null;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        return $value ? new TeamMemberId($value) : null;
    }
}
