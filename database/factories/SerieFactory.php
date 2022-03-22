<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SerieFactory extends Factory
{
    
    public function definition()
    {
        $title =$this->faker->sentence($nbWords=6,$variableNbWords=true);

        return [
            'author_id'=> \App\Models\User::factory(),
            'title'=> $title,
            'content'=> $this->faker->paragraph($nbSentences =10, $variableNbSentences =true),
            'acteurs'=> $this->faker->paragraph($nbSentences =10, $variableNbSentences =true),
            'url'=>str_replace(' ','-', $title),            
            'tags'=>$this->faker->words($nb = 3, $asText = true),
            'status'=>'published',
        ];
    }
}
