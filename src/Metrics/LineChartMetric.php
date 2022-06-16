<?php

namespace Leeto\MoonShine\Metrics;

class LineChartMetric extends Metric
{
    protected static string $view = 'line-chart';

    protected array $lines = [];

    protected array $colors = [];

    protected array $assets = [
        'js' => ['https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js']
    ];

    public function lines(): array
    {
        return $this->lines;
    }

    public function line(array $line, string $color = '#7843E9'): static
    {
        $this->lines[] = $line;
        $this->colors[] = $color;

        return $this;
    }

    public function color(int $index): string
    {
        return $this->colors[$index];
    }

    public function labels(): array
    {
        return collect($this->lines())
            ->collapse()
            ->mapWithKeys(function ($item, $key) {
                return $item;
            })
            ->sortKeys()
            ->keys()
            ->toArray();
    }
}