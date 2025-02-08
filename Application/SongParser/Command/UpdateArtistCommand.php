<?php

namespace MusicPlayground\Contract\Application\DTO;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;

final readonly class UpdateArtistCommand implements CommandWithIdInterface
{
    public function __construct(public ArtistDTO $dto)
    {
    }

    public function getId(): string
    {
        return $this->dto->source->id;
    }
}