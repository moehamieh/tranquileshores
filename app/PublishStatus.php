<?php

namespace App;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasLabel;
use Illuminate\Contracts\Support\Htmlable;

enum PublishStatus: string implements HasLabel, HasColor
{
    case Draft = 'draft';
    case Published = 'published';

    public function getLabel(): string|Htmlable|null
    {
        return $this->name;
    }
    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Draft => 'danger',
            self::Published => 'success',
        };
    }
}
