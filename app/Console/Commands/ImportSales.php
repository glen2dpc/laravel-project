<?php

namespace App\Console\Commands;

use App\Imports\SalesImport;
use Illuminate\Console\Command;

class ImportSales extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sales:import';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importa el sales_data.csv';

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
     * @return int
     */
    public function handle()
    {

        $path = storage_path('/app/database/sales_data.csv');

        //(new SalesImport)->import($path, null, \Maatwebsite\Excel\Excel::CSV);

        \Maatwebsite\Excel\Facades\Excel::import(new SalesImport, $path);

    }
}
