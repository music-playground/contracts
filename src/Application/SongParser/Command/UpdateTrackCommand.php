<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\SongParser\DTO\TrackDTO;

final readonly class UpdateTrackCommand
{
    public function __construct(public TrackDTO $dto)
    {
    }
}