<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\Command\OperationCommandInterface;
use MusicPlayground\Contract\Application\Playlist\DTO\PlaylistDTO;

final readonly class CreatePlaylistCommand implements CommandWithIdInterface, OperationCommandInterface
{
    public function __construct(public string $operationId, public PlaylistDTO $playlist)
    {
    }

    public function getId(): string
    {
        return $this->playlist->source->id;
    }

    public function getOperationId(): string
    {
        return $this->operationId;
    }
}