<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\TrackDTO;

final readonly class UpdateTrackCommand implements CommandWithIdInterface
{
    public function __construct(public TrackDTO $dto)
    {
    }

    public function getId(): string
    {
        return $this->dto->source->id;
    }
}