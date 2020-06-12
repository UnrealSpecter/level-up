<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class, 2)->create()->each(function ($user) {

            //create and assign lessons to a user.
            $lessons = factory(App\Lesson::class, 3)->make();
            $user->lessons()->saveMany($lessons);

            foreach($lessons as $lesson){

                //randomize is done for testing.
                $user->lessons()->updateExistingPivot($lesson->id, ['is_done' => mt_rand(0,1)]);

                // create and assign subjects to a lesson.
                $subjects = factory(App\Subject::class, 3)->make();
                $lesson->subjects()->saveMany($subjects);

                foreach($subjects as $subject){

                    //randomize completed subjects
                    $lesson->subjects()->updateExistingPivot($subject->id, ['is_done' => mt_rand(0,1)]);

                    // create and assign resources to subject.
                    $resources = factory(App\Resource::class, 3)->make();
                    $subject->resources()->saveMany($resources);

                    //create and assign assignments to subject
                    $assignments = factory(App\Assignment::class, 3)->make();
                    $subject->assignments()->saveMany($assignments);

                    foreach($assignments as $assignment){

                        // randomize completed assignments
                        $subject->assignments()->updateExistingPivot($assignment->id, ['is_done' => mt_rand(0,1)]);

                        // create and assign answers to a assignment
                        $answers = factory(App\Answer::class, 3)->make();
                        foreach($answers as $answer){
                            $answer->is_correct = mt_rand(0, 1);
                            $answer->save();
                        }
                        $assignment->answers()->saveMany($answers);
                    }
                }
            }

        });

        // $this->call(UserSeeder::class);
        // $this->call(LessonSeeder::class);
        // $this->call(SubjectSeeder::class);
        // $this->call(ResourceSeeder::class);
        // $this->call(AssignmentSeeder::class);
        // $this->call(AnswerSeeder::class);
        //
        // $this->call(UserLessonSeeder::class);
        // $this->call(UserAssignmentSeeder::class);
    }
}
