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

        $this->call(ActionEventsTableSeeder::class);
        $this->call(AnswersTableSeeder::class);
        $this->call(AssignmentsTableSeeder::class);
        $this->call(CompetenceLevelTableSeeder::class);
        $this->call(CompetencesTableSeeder::class);
        $this->call(CourseLevelTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(LessonSubjectTableSeeder::class);
        $this->call(LessonsTableSeeder::class);
        $this->call(LevelModuleTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
        $this->call(MaterialTagTableSeeder::class);
        $this->call(MaterialsTableSeeder::class);
        $this->call(ModuleLessonTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(NovaPendingTrixAttachmentsTableSeeder::class);
        $this->call(NovaTrixAttachmentsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(SubjectAssignmentTableSeeder::class);
        $this->call(SubjectsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(UserLevelTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
