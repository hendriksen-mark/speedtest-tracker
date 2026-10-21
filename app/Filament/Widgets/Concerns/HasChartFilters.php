<?php

namespace App\Filament\Widgets\Concerns;

use Livewire\Attributes\On;

trait HasChartFilters
{
    protected function getFilters(): ?array
    {
        return [
            '24h' => __('general.last_24h'),
            'week' => __('general.last_week'),
            'month' => __('general.last_month'),
            'mtd' => __('general.mtd'),
            '90d' => __('general.90d'),
            'ytd' => __('general.ytd'),
            '365d' => __('general.365d'),
            '5y' => __('general.5y'),
            '10y' => __('general.10y'),
            'all' => __('general.all'),
        ];
    }

    public function updatedFilter($value): void
    {
        $this->dispatch('filterChanged', filter: $value);
    }

    #[On('filterChanged')]
    public function updateFilterFromEvent($filter): void
    {
        if ($this->filter !== $filter) {
            $this->filter = $filter;
        }
    }
}
