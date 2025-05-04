<?php

namespace MusicPlayground\Contract\Application\Playlist\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\Command\OperationCommandInterface;
use MusicPlayground\Contract\Application\Playlist\DTO\PlaylistSourceDTO;

final readonly class OnCreatedPlaylistCommand implements CommandWithIdInterface, OperationCommandInterface
{
    public function __construct(
        public string $operationId,
        public string $id,
        public PlaylistSourceDTO $source
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getOperationId(): string
    {
        return $this->operationId;
    }
}