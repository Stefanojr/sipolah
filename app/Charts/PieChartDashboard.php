<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class PieChartDashboard extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->labels(['Organik', 'An-organik']);
        $this->dataset('My dataset', 'pie', [1, 2]);
    }
}
