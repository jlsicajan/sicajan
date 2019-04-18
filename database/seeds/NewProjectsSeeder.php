<?php

use Illuminate\Database\Seeder;

class NewProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            [
                'title' => 'Seller Widgets',
                'rate' => 4,
                'description' => 'I worked with a company that requested constant maintenance to the project<br> <br>When they deliver me the project has no style, implement bootstrap in the system and new features using Flask with postgresql<br>',
                'url' => 'Internal',
                'tools' => '{backend: ["Python Flask framework", "WordPress"], frontend:["JQUERY", "HTML5", "CSS3", "AJAX", "JS", "HIGHCHARTS", "BOOTSTRAP"], database:["postgresql"]}',
                'developer_experience' => "I really enjoyed worked with this project, I learned a lot from both parts(Flask and WordPress), I always happy to learn new things and to have new challenges.",
                'time' => '1 month',
                'costumer_name' => 'Seller Widgets',
                'costumer_feedback' => '',
                'date_start' => '',
                'date_end' => '',
                'images' => '',
                'thumbnail' => 'images/portfolio/seller_widgets/main.png',
                'work_title' => 'Ongoing Development',
                'project_type' => 'Professional project'
            ]
        ];

        foreach ($projects as $project) {
            DB::table('portafolios')->insert([
                $project
            ]);
        }
    }
}
