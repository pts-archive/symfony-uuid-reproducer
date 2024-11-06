<?php

namespace App\Dto;

use Symfony\Component\Uid\UuidV4;
use Symfony\Component\Uid\UuidV7;
use Symfony\Component\Validator\Constraints as Assert;

final class ArrayDto
{
    /**
     * @var UuidV4[]
     */
    #[Assert\NotNull]
    #[Assert\All(new Assert\Uuid(versions: 4))]
    public array $ids;

    /**
     * @var UuidV4[]
     */
    #[Assert\NotNull]
    public array $parents;
}
