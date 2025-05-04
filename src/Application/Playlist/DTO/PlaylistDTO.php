<?php

namespace MusicPlayground\Contract\Application\Playlist\DTO;

final readonly class PlaylistDTO
{
    public function __construct(
        public string $name,
        public PlaylistSourceDTO $source,
        public ?string $cover,
        public ?string $description
    ) {
    }
}