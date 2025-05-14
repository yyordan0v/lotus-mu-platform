<?php

use App\Actions\Guild\GetGuildProfile;
use App\Models\Game\Guild;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component {
    public ?string $name = null;

    public function mount(?string $name = null): void
    {
        $this->name = $name;
    }

    #[Computed]
    public function profile(): ?Guild
    {
        return app(GetGuildProfile::class)->handle($this->name);
    }
}; ?>

<flux:main container>
    <flux:card class="max-w-2xl mx-auto space-y-8">
        @if($this->profile)
            <x-profile.guild.information :guild="$this->profile"/>
            <x-profile.guild.members :guild="$this->profile"/>
        @else
            <flux:text>{{ __('Guild not found or has been deleted.') }}</flux:text>
        @endif
    </flux:card>
</flux:main>
