<?php

namespace MusicPlayground\Contract\Application\SongParser\Command;

use MusicPlayground\Contract\Application\Command\CommandWithIdInterface;
use MusicPlayground\Contract\Application\SongParser\DTO\ArtistSourceDTO;

final readonly class OnUpdateArtistCommand implements CommandWithIdInterface
{
    public function __construct(public ArtistSourceDTO $source)
    {
    }

    public function getId(): string
    {
        return $this->source->id;
    }
}