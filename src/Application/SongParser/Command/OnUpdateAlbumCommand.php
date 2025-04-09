<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\AlbumSourceDTO;

final readonly class OnUpdateAlbumCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $albumId,
        public AlbumSourceDTO $source,
        /** @var array<string> */
        public array $containsTracks
    ) {
    }

    public function getId(): string
    {
        return $this->source->id;
    }
}