<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\AlbumSourceDTO;
use MusicPlayground\Contract\Application\SongParser\DTO\ArtistSourceDTO;

final readonly class OnUpdateAlbumCommand implements CommandWithIdInterface
{
    public function __construct(
        public AlbumSourceDTO $source,
        public ArtistSourceDTO $artistSource,
        public bool $isNew,
        /** @var array<string> */
        public array $containsTracks
    ) {
    }

    public function getId(): string
    {
        return $this->source->id;
    }
}