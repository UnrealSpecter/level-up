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

        //create a module
        //create a lesson
        $courses = factory(App\Course::class, 3)->make();
        //create a user
        factory(App\User::class, 1)->create()->each(function ($user) {

            //create and assign levels to a user.
            $levels = factory(App\Level::class, 3)->make();
            $user->levels()->saveMany($levels);

            foreach($levels as $level){

                //randomize is done for testing
                $user->levels()->updateExistingPivot($level->id, ['is_done' => mt_rand(0,1)]);

                $modules = factory(App\Module::class, 3)->create()->each(function($module){
                    $course = App\Course::find(mt_rand(1,3));
                    $module->course()->associate($course);
                });

                $level->modules()->saveMany($modules);

                foreach($modules as $module){

                    $level->modules()->updateExistingPivot($module->id, ['is_done' => mt_rand(0,1)]);

                    $lessons = factory(App\Lesson::class, 3)->make();
                    $module->lessons()->saveMany($lessons);

                    foreach($lessons as $lesson){

                        //randomize is done for testing.
                        $module->lessons()->updateExistingPivot($lesson->id, ['is_done' => mt_rand(0,1)]);

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
