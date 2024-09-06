<?php

namespace Database\Factories;

use App\Models\admin;
use App\Models\project_cat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=$this->faker->unique()->companyField;
        return [
            'admin_id'=>admin::get()->random(),
            'title'=>$title,
            'seo_url'=>str_replace(' ','-',$title),
            'seo_title'=>$title,
            'catid'=>project_cat::get('id')->random(),
            'note'=>$this->faker->text(),
            'note_more'=>$this->faker->text(),
        ];
    }
}
