<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\ArtistDTO;

final readonly class OnUpdateArtistFullCommand implements CommandWithIdInterface
{
    public function __construct(
        public ArtistDTO $artist,
        public array $containsAlbums
    ) {
    }

    public function getId(): string
    {
        return $this->artist->source->id;
    }
}