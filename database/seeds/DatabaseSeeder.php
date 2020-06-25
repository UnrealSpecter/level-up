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
        factory(App\Course::class, 3)->create();

        //create a user
        factory(App\User::class, 1)->create()->each(function ($user) {

            //create tags for later use
            $tags = factory(App\Tag::class, 2)->create();

            //create and assign levels to a user.
            $levels = factory(App\Level::class, 3)->make();
            $user->levels()->saveMany($levels);

            foreach($levels as $level){

                $modules = factory(App\Module::class, 3)->create()->each(function($module){
                    $course = App\Course::find(mt_rand(1,3));
                    $module->course()->associate($course);
                });

                $level->modules()->saveMany($modules);

                foreach($modules as $module){

                    $lessons = factory(App\Lesson::class, 3)->make();
                    $module->lessons()->saveMany($lessons);

                    foreach($lessons as $lesson){

                        // create and assign subjects to a lesson.
                        $subjects = factory(App\Subject::class, 3)->make();
                        $lesson->subjects()->saveMany($subjects);

                        foreach($subjects as $subject){

                            // create and assign resources to subject.
                            $materials = factory(App\Material::class, 3)->make();
                            $subject->materials()->saveMany($materials);

                            foreach($materials as $material){
                                $material->tags()->saveMany($tags);
                            }

                            //create and assign assignments to subject
                            $assignments = factory(App\Assignment::class, 3)->make();
                            $subject->assignments()->saveMany($assignments);

                            foreach($assignments as $assignment){

                                // create and assign answers to a assignment
                                $answers = factory(App\Answer::class, 3)->make();
                                foreach($answers as $answer){
                                    $assignment->answers()->updateExistingPivot($answer->id, ['is_done' => 1]);
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
        // $this->call(UserLessonSeeder::class);
        // $this->call(UserAssignmentSeeder::class);
    }
}
