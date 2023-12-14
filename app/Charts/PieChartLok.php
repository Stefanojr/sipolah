<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class PieChartLok extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['Kodya', 'Sleman', 'Bantul', 'Gunung Kidul', 'Kulonprogo']);
        $this->dataset('My dataset', 'pie', [1, 2, 2, 3, 5]);
    }
}
