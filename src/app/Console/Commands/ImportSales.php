<?php

namespace App\Console\Commands;

use App\Imports\SalesImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:sales';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import the sales xls';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     */
    public function handle()
    {
        $this->output->title('Starting import');
        (new SalesImport)->withOutput($this->output)->import(storage_path('exports/SALES.xlsx'));
        $this->output->success('Import successful');
    }
}
