<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\Playlist\DTO\PlaylistDTO;

final readonly class CreatePlaylistCommand implements CommandWithIdInterface
{
    public function __construct(public PlaylistDTO $playlist)
    {
    }

    public function getId(): string
    {
        return $this->playlist->source->id;
    }
}