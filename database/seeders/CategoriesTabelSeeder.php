<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'categoryName' => 'Architecture and engineering',
            'categoryDescription' => 'People in the architecture and planning fields are responsible for designing new structures or creating aesthetically pleasing, practical and structurally sound environments. Many positions require an undergraduate or graduate degree.'
        ]);

        Category::create([
            'categoryName' => 'Arts, culture and entertainment',
            'categoryDescription' => "This career field is dedicated to enriching people's lives through culture and the sharing of arts and self-expression. There are formal educational programs for these fields, but these careers also include self-taught people who have natural talent."
        ]);

        Category::create([
            'categoryName' => 'Business, management and administration',
            'categoryDescription' => 'The business, management and administration career fields are best for business-minded individuals with a penchant for communication. They work to execute various processes necessary for the functioning of businesses. It usually involves working in an office environment.'
        ]);

        Category::create([
            'categoryName' => 'IT & Communications',
            'categoryDescription' => 'The communications career field is about mastering the art of delivering a targeted message to diverse groups of people.'
        ]);

        Category::create([
            'categoryName' => 'Community and social services',
            'categoryDescription' => 'The community and social services career field include jobs that offer tangible support to people and communities to enrich the lives of people. Based in ideals of social justice and equality, this career path is for people who want to improve social systems and services. Often, people go in this field because there is a specific group of people they wish to advocate for or help.'
        ]);

        Category::create([
            'categoryName' => 'Architecture and engineering',
            'categoryDescription' => 'People in the architecture and planning fields are responsible for designing new structures or creating aesthetically pleasing, practical and structurally sound environments. Many positions require an undergraduate or graduate degree.'
        ]);

        Category::create([
            'categoryName' => 'Education',
            'categoryDescription' => 'The education field is dedicated to the art of skillfully disseminating knowledge and information to people. The most obvious job in this field are teachers, but it is not just limited to teaching. There are also management, administrative and board member jobs, for example.'
        ]);

        Category::create([
            'categoryName' => 'Science and technology',
            'categoryDescription' => 'Science and technology is a diverse career field that generally involves scientific research and the development of innovative technologies that benefit humanity. Scientific professions often involved some degree of mathematics or computer science knowledge.'
        ]);

        Category::create([
            'categoryName' => 'Installation, repair and maintenance',
            'categoryDescription' => 'The installation, repair and maintenance career field is dedicated to helping customers operate specialized machinery. Workers in this field have a vast knowledge of their trade. They help to install, maintain, troubleshoot and repair a variety of different objects in the modern world.'
        ]);

        Category::create([
            'categoryName' => 'Farming, fishing and forestry',
            'categoryDescription' => 'The farming, fishing and forestry career fields are ideal for people who enjoy the outdoors. Providing food for people, this career field is an essential part of society. These professions work directly with ecosystems and manage them in various ways. People get the opportunity to be close to wildlife and nature. It includes the growing and harvesting of plants and animals for human consumption.'
        ]);

        Category::create([
            'categoryName' => 'Government',
            'categoryDescription' => 'The government career field comprises jobs where you work directly with government institutions on a federal, state or local level. It is a diverse career field with a variety of different occupations. Sometimes, people who seek to advance in this profession pursue an education in political sciences.'
        ]);

        Category::create([
            'categoryName' => 'Health and medicine',
            'categoryDescription' => 'This career profession involves healthcare services that provide care for people. They are an essential part of our society. This professional field often requires specialized training and certification.'
        ]);

        Category::create([
            'categoryName' => 'Law and public policy',
            'categoryDescription' => 'Within the law and public policy field, occupations include criminal justice, public policy advocacy and political lobbying. This career field comprises all the employment sectors. You can find a job working for the government, nonprofits, think tanks and large for-profit companies.'
        ]);

        Category::create([
            'categoryName' => 'Sales',
            'categoryDescription' => 'Choosing a career path in sales involves working to sell items or services to individuals and businesses. People require in-depth knowledge of what they are selling. This field is customer service oriented and it often helps to have good interpersonal skills.'
        ]);

        Category::create([
            'categoryName' => 'Software and Design',
            'categoryDescription' => 'Software design is the process of envisioning and defining software solutions to one or more sets of problems. One of the main components of software design is the software requirements analysis (SRA). SRA is a part of the software development process that lists specifications used in software engineering.'
        ]);
    }
}
