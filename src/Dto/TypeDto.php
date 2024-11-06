<?php

namespace App\Dto;

use Symfony\Component\Uid\UuidV4;
use Symfony\Component\Uid\UuidV7;
use Symfony\Component\Validator\Constraints as Assert;

final class TypeDto
{
    #[Assert\NotNull]
    #[Assert\Uuid(versions:4, message: 'This is not a valid UUIDv4.')]
    public UuidV4 $id;

    #[Assert\NotNull]
    public UuidV4 $parent;
}
