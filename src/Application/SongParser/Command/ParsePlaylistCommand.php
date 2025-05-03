<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use Symfony\Component\Uid\UuidV4;

final readonly class ParsePlaylistCommand implements CommandWithIdInterface
{
    public string $operationId;

    public function __construct(
        public string $playlistId
    ) {
        $this->operationId = UuidV4::v4()->toString();
    }

    public function getId(): string
    {
        return $this->playlistId;
    }
}