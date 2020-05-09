<?php

namespace App\Console\Commands;

use App\Verse;
use App\VerseOfTheDay;
use Illuminate\Console\Command;

class VerseOfTheDayCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'verse:day';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set daily Verse on HomePage';

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
     * @return mixed
     */
    public function handle()
    {
        $verse = Verse::whereRaw('length(text) < 200')->inRandomOrder()->first();

        $verseOfTheDay = new VerseOfTheDay();
        $verseOfTheDay->verse_id = $verse['id'];
        $verseOfTheDay->save();

        $this->info($verse);
    }
}
