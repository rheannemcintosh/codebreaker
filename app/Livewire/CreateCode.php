<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message;

    protected array $symbols = [
        'attach_money',
        'bedtime',
        'castle',
        'celebration',
        'cruelty_free',
        'database',
        'explore',
        'family_star',
        'fingerprint',
        'heart_broken',
        'hive',
        'local_pizza',
        'location_on',
        'mail',
        'map',
        'microbiology',
        'notifications',
        'palette',
        'park',
        'photo_camera',
        'qr_code',
        'raven',
        'shift',
        'timer',
        'traffic',
        'work'
    ];

    #[Computed(persist: true)]
    public function letters(): array
    {
        shuffle($this->symbols);

        return collect(range('a', 'z'))
            ->combine($this->symbols)
            ->toArray();
    }
    public function render()
    {
        return view('livewire.create-code');
    }
}
