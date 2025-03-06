<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\AlbumDTO;

final readonly class UpdateAlbumCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $artistId,
        public AlbumDTO $dto
    ) {
    }

    public function getId(): string
    {
        return $this->dto->source->id;
    }
}