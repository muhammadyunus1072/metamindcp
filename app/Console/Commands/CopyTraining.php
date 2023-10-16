<?php

namespace App\Console\Commands;

use App\Models\Training;
use App\Models\TrainingGroup;
use Illuminate\Console\Command;

class CopyTraining extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copy-training';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $trainings = Training::get();
        $trainingGroups = TrainingGroup::where('id', '>',1)->get();

        foreach($trainings as $training){
            foreach($trainingGroups as $group){
                $newTraining = new Training();
                $newTraining->training_group_id = $group->id;
                $newTraining->title = $training->title;
                $newTraining->description = $training->description;
                $newTraining->file = $training->file;
                $newTraining->save();
            }
        }
    }
}
