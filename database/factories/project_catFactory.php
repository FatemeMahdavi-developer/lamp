<?php

namespace Database\Factories;

use App\Models\admin;
use App\Models\project_cat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project_cat>
 */
class project_catFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=$this->faker->unique()->companyPrefix;
        $catid=project_cat::find(1) ? project_cat::get()->random() : 0;
        return [
            'admin_id'=>admin::get()->random(),
            'title'=>$title,
            'seo_url'=>str_replace(' ','-',$title),
            'seo_title'=>$title,
            'catid'=>$catid,
            'note'=>$this->faker->realText()
        ];
    }
}
