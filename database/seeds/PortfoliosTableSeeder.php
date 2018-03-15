<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $projects = [
            [
                'title' => 'REDS',
                'rate' => 4,
                'description' => 'The REDS SaaS Web App Creator is designed as an editable template where all front-end features; texts, copy, videos, and graphics can be changed at will, giving you the distinct advantage of updating your site at any time, and keeping it always fresh in the mind of the buyers. More info by them <a href="https://global.goreds.today/about/" target=\'_blank\'>blog</a>',
                'url' => 'https://realestatedigitalsales.com',
                'tools' => '{backend:{1: "PHP LARAVEL FRAMEWORK V5.3"}, frontend:{1:"JQUERY", 2:"HTML5", 3:"CSS3", 4:"AJAX", 5:"JS"}, database:{1:"mysql", 2:"redis"}}',
                'developer_experience' => "I'm not so happy with the final design but the customer asked me to do it exactly as the sketch.  ",
                'time' => '392 hours working at <a href=\'http://www.lionmane.com/\' target=\'_blank\'>Lionmane Software</a>',
                'costumer_name' => 'REDS Ongoing Development - Harry Connor',
                'costumer_feedback' => 'Fantastic junior developer who has now progressed to more responsibility within the Lionmane Software group. Would recommend Jose to anyone who needs a steady no nonsense developer.',
                'date_start' => '1478060804',
                'date_end' => '1493699204',
                'images' => '',
                'thumbnail' => 'images/portfolio/reds/logo_old.png',
                'work_title' => 'Ongoing Development',
                'project_type' => 'Professional project'
            ],
            [
                'title' => 'VINU CORK',
                'rate' => 5,
                'description' => 'Sponsiv Digital creates disruptive digital solutions which help restaurants, retailers and suppliers sell more wine, beer and spirits. More info by them <a href="https://www.sponsiv.com/" target=\'_blank\'>page</a>',
                'url' => 'https://cork.vinumenu.com/',
                'tools' => '{backend:{1: "PHP CODEIGNITER FRAMEWORK"}, frontend:{1:"JQUERY", 2:"HTML5", 3:"SASS", 4:"AJAX", 5:"JS"}, database:{1:"mysql"}}',
                'developer_experience' => "I learn a lot with this project, I help them to migrate his current project to other server, also updated them system to upload files to a Amazon S3 bucket. In addition to other features of the system, I worked with another programmer who was in charge of the app in ios, I made changes to the api to always keep the app updated with new data entered from the system (Cork). ",
                'time' => "more than 12 months (About 1000 hours) working at <a href='http://www.lionmane.com/' target='_blank'>Lionmane Software</a>",
                'costumer_name' => 'Sponsiv Digital',
                'costumer_feedback' => '',
                'date_start' => '1490588804',
                'date_end' => '1514522991',
                'images' => '',
                'thumbnail' => 'images/portfolio/vinu/vinu.png',
                'work_title' => 'Ongoing Development',
                'project_type' => 'Professional project'

        ],
            [
                'title' => 'RENOVATION ROADMAP',
                'rate' => 5,
                'description' => 'The Renovation Roadmap™ is everything you need for a successful home remodel. The end result? A home you love. More info by them <a href="https://www.renovationroadmap.com/product/" target=\'_blank\'>page</a>',
                'url' => 'https://www.renovationroadmap.com/',
                'tools' => '{backend:{1: "WORDPRESS"}, frontend:{1:"JQUERY", 2:"HTML5", 3:"SASS", 4:"AJAX", 5:"JS"}, database:{1:"mysql"}, other:{1:"Phanteon",2:"Kinsta",3:"InfusionSoft",4:"Memberium"}}',
                'developer_experience' => "",
                'time' => "18 hours and counting working at <a href='http://www.lionmane.com/' target='_blank'>Lionmane Software</a>",
                'costumer_name' => 'Dan Katz',
                'costumer_feedback' => '',
                'date_start' => '1509510503',
                'date_end' => '1514522991',
                'images' => '',
                'thumbnail' => 'images/portfolio/rr/rr.png',
                'work_title' => 'Ongoing Development Support',
                'project_type' => 'Professional project'
            ],
            [
                'title' => 'ODOO',
                'rate' => 5,
                'description' => 'Odoo is the best management software to run a company. Millions of happy users work better with our integrated Apps. More info by them <a href="https://www.odoo.com" target=\'_blank\'>page</a>',
                'url' => '',
                'tools' => '{backend:{1: "PYTHON"}, frontend:{1:"XML"}, database:{1:"postgresql"}}',
                'developer_experience' => "I developed new characteristics and modules for this ERP MRP",
                'time' => "6 months working at <a href='http://www.velfasa.com/' target='_blank'>Velfasa</a>",
                'costumer_name' => 'VELFASA',
                'costumer_feedback' => '',
                'date_start' => '1462082027',
                'date_end' => '1475301227',
                'images' => '',
                'thumbnail' => 'images/portfolio/odoo/odoo.png',
                'work_title' => 'Ongoing Development Support',
                'project_type' => 'Professional project'
            ],
            [
                'title' => 'Patzun Estacion 22',
                'rate' => 5,
                'description' => 'I developed this system for the firefighters of my hometown, this system helps them to correctly manage their profits, expenses, losses and collections, in addition to keeping the daily control of the activities of the station. Print reports in pdf and excel. Also take pictures of bills. Screenshots in the system <a href="http://patzun-22.com/programador" target=\'_blank\'>page</a>',
                'url' => '',
                'tools' => '{backend:{1: "PHP LARAVEL FRAMEWORK V5.2"}, frontend:{1:"JQUERY", 2:"HTML5", 3:"CSS3", 4:"AJAX", 5:"JS"}, database:{1:"mysql"}}',
                'developer_experience' => "I created this project from scratch, they started using it from January 1, 2017 and until now they continue to use it and we are constantly improving the system to adapt it to other stations.",
                'time' => "3 months",
                'costumer_name' => 'Estacion 22',
                'costumer_feedback' => '',
                'date_start' => '1462082027',
                'date_end' => '1475301227',
                'images' => '',
                'thumbnail' => 'http://patzun-22.com/images/developer/combustible_view.png',
                'work_title' => 'Ongoing Development Support',
                'project_type' => 'Professional project'
            ],
            [
                'title' => 'Lionmane Software page',
                'rate' => 5,
                'description' => 'Page of the company where I currently work <a href="http://www.lionmane.com" target=\'_blank\'>page</a>',
                'url' => '',
                'tools' => '{backend:{1: "PHP LARAVEL"}, frontend:{1:"JQUERY", 2:"HTML5", 3:"CSS3", 4:"JS"}, database:{1:"mysql"}}',
                'developer_experience' => "Together with other programmers from the company, I helped create this site",
                'time' => "1 month working at <a href='http://www.velfasa.com/' target='_blank'>Velfasa</a>",
                'costumer_name' => 'Lionmane Software',
                'costumer_feedback' => '',
                'date_start' => '1462082027',
                'date_end' => '1475301227',
                'images' => '',
                'thumbnail' => 'http://lionmane.com/img/lionMane-logo.png',
                'work_title' => 'Ongoing Development Support',
                'project_type' => 'Professional project'
            ]
        ];

        foreach($projects as $project){
            DB::table('portafolios')->insert([
                $project
            ]);
        }
    }
}
