<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

final readonly class UpdateFullPlaylistCommand
{
    public function __construct(
        public string $id,
        public string $name,
        public ?string $coverId,
        public ?string $description
    ) {
    }
}