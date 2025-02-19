<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\ArtistDTO;

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