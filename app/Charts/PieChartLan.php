<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class PieChartLan extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['1 Bulan', '2 Bulan', '3 Bulan', '4 Bulan']);
        $this->dataset('My dataset', 'pie', [3, 2, 1, 2]);
    }
}
