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
        // factory(App\Course::class, 3)->create();
        //
        // //create a user
        // factory(App\User::class, 3)->create()->each(function ($user) {
        //
        //     //create tags for later use
        //     $tags = factory(App\Tag::class, 4)->create();
        //
        //     //create and assign levels to a user.
        //     $levels = factory(App\Level::class, 3)->make();
        //     $user->levels()->saveMany($levels);
        //
        //     foreach($levels as $level){
        //
        //         $modules = factory(App\Module::class, 3)->create()->each(function($module){
        //             $course = App\Course::find(mt_rand(1,3));
        //             $module->course()->associate($course);
        //
        //             // $introduction = factory(App\Introduction::class)->make();
        //             // $module->introduction()->save($introduction);
        //
        //             $this->call(CoursesTableSeeder::class);
        //
        //         $level->modules()->saveMany($modules);
        //
        //         foreach($modules as $module){
        //
        //             $lessons = factory(App\Lesson::class, 3)->make();
        //             $module->lessons()->saveMany($lessons);
        //
        //             foreach($lessons as $lesson){
        //
        //                 // create and assign subjects to a lesson.
        //                 $subjects = factory(App\Subject::class, 3)->make();
        //                 $lesson->subjects()->saveMany($subjects);
        //
        //                 foreach($subjects as $subject){
        //
        //                     // create and assign resources to subject.
        //                     $materials = factory(App\Material::class, 3)->make();
        //                     $subject->materials()->saveMany($materials);
        //
        //                     foreach($materials as $material){
        //                         $material->tags()->saveMany($tags);
        //                         $this->call(CourseLevelTableSeeder::class);
        //
        //                     //create and assign assignments to subject
        //                     $assignments = factory(App\Assignment::class, 3)->make();
        //                     $subject->assignments()->saveMany($assignments);
        //
        //                     foreach($assignments as $assignment){
        //
        //                         // randomize assignment done state
        //                         mt_rand(0, 1) ? $assignment->markAsDone() : null ;
        //
        //                         // create and assign answers to a assignment
        //                         $answers = factory(App\Answer::class, 3)->make();
        //                         $assignment->answers()->saveMany($answers);
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // });

        \DB::table('users')->insert(
            array (
                0 =>
                array (
                    'id' => 4,
                    'first_name' => 'Admin',
                    'last_name' => 'Doe',
                    'email' => 'admin@admin.com',
                    'email_verified_at' => '2020-06-30 20:44:16',
                    'password' => bcrypt('password'),
                    'remember_token' => 'My7naxWFJ2',
                    'created_at' => '2020-06-30 20:44:16',
                    'updated_at' => '2020-06-30 20:44:16',
                ),
            )
        );

        $this->call(CoursesTableSeeder::class);
        $this->call(CourseLevelTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(LevelModuleTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(ModuleLessonTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(LessonSubjectTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(SubjectAssignmentTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);

    }
}
