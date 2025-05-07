<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;

final readonly class UpdateFullPlaylistCommand implements CommandWithIdInterface
{
    public function __construct(
        public string $id,
        public string $name,
        public ?string $coverId,
        public ?string $description
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }
}