<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'slug' => "the dark knight",
                'title' => "The Dark Knight",
                'description' => "The Dark Knight is a really cool movie that came out in 2008. It's a superhero movie about Batman, who's played by Christian Bale, and his battle against the Joker, who's played by Heath Ledger. The movie is really exciting and keeps you on the edge of your seat.

                In the movie, Batman has to protect the city of Gotham from the Joker, who wants to bring chaos and disorder to the city. Along the way, Batman questions if he's really the hero that Gotham needs and whether he should continue his vigilantism.
                
                The Dark Knight is different from other superhero movies because it's not just about fighting bad guys. It's a really deep movie that explores themes like justice, morality, and the human mind. It shows that sometimes the line between good and evil can be blurry.
                
                The cast in The Dark Knight is amazing. Christian Bale is really great as Batman and Heath Ledger's performance as the Joker is one of the best in movie history. His performance won him an Academy Award even though he passed away before the movie came out.
                
                The Dark Knight is a masterpiece because of its innovative storytelling and great direction. The movie has some really cool action scenes and stunning visuals that set a new standard for superhero movies.
                
                In conclusion, The Dark Knight is an amazing movie that changed the superhero genre. It's a deep and complex movie that explores important themes and has amazing performances. The movie is a classic and will be remembered for a long time. It shows that superhero movies can be more than just fun entertainment and can be really powerful works of art.",
                'image_path' => null,
                'user_id' => null                
            ],
            [
                'slug' => "avatar",
                'title' => "Avatar",
                'description' => "Avatar, the revolutionary film directed by James Cameron, had a significant impact on both the film industry and society as a whole. Released in 2009, the movie was a true game-changer that set a new standard for visual effects, immersive storytelling, and environmental messages.

                The story of Avatar is set in the year 2154 and follows the journey of Jake Sully, a disabled former Marine who is sent to the distant world of Pandora. On this planet, humans are mining a rare mineral called unobtainium, which is worth a fortune back on Earth. However, the planet is also home to the Na'vi, a species of blue-skinned, human-like beings who live in harmony with nature. As Sully becomes more involved with the Na'vi and their culture, he begins to see the value of preserving Pandora and its inhabitants, even if it means going against his own people.
                
                The film's message is clear: we need to respect and protect our planet and all the living creatures that inhabit it. The movie shows the devastating consequences of disregarding nature and exploiting resources for financial gain. This message resonated with audiences around the world and sparked a renewed interest in environmentalism.
                
                But Avatar's impact goes beyond its environmental themes. The movie was also a pioneer in terms of special effects and motion capture technology. The film's use of 3D technology created a fully immersive experience that transported audiences to Pandora and made them feel like they were part of the action. The motion capture technology used to bring the Na'vi to life was also groundbreaking, allowing the actors' performances to be translated into the digital realm with incredible detail and realism.
                
                Avatar's success paved the way for a new era of 3D cinema and inspired other filmmakers to push the boundaries of what was possible with special effects. The movie also inspired a new wave of interest in science fiction and fantasy storytelling, showing that these genres could be both entertaining and socially relevant.
                
                Moreover, Avatar was also influential in terms of its social impact. The movie featured a diverse cast, which was groundbreaking at the time. It also dealt with themes of colonialism, imperialism, and cultural identity, which are still relevant today. The film's portrayal of the Na'vi and their culture also resonated with indigenous communities around the world, who saw themselves represented on screen in a positive and empowering way.
                
                In conclusion, Avatar is a movie that made a significant impact on both the film industry and society as a whole. Its message about the importance of environmentalism and respecting nature is more relevant now than ever. The film's groundbreaking use of 3D technology and motion capture helped to advance the field of special effects and created a new standard for immersive storytelling. Avatar is a true masterpiece that will continue to inspire and entertain audiences for generations to come.",
                'image_path' => null,
                'user_id' => null   
            ],
            [
                'slug' => "inception",
                'title' => "Inception",
                'description' => "In 2014, Christopher Nolan made a movie called Interstellar that changed the way we think about sci-fi. The movie starred Matthew McConaughey, Anne Hathaway, and Jessica Chastain, and it was all about what happens when humans explore beyond what we know.

                In Interstellar, the Earth is in big trouble because of environmental problems, and people need to find a new place to live. So a group of astronauts, led by Cooper (played by McConaughey), go through a wormhole to look for a new planet. Along the way, they learn a lot about space and time, and they also learn about love and how important it is to stay connected to the people you care about.
                
                The movie is really interesting because it's based on real scientific theories, like wormholes and black holes. Even though it's a sci-fi movie, it feels like it could really happen. The movie looks great too, especially when it shows a black hole.
                
                The actors in Interstellar are really good too. McConaughey is great as Cooper, and the other actors, like Hathaway and Chastain, are just as good. The way the movie is put together is really smart too. The story is told in a way that keeps you guessing, and there are some twists that you don't see coming.
                
                Interstellar is a really great movie that makes you think about what it means to be human and what we can achieve when we work together. It's a movie that will stay with you long after you've seen it.",
                'image_path' => null,
                'user_id' => null
            ],
            [
                'slug' => "interstellar",
                'title' => "Intersellar",
                'description' => "In 2014, Christopher Nolan made a movie called Interstellar that changed the way we think about sci-fi. The movie starred Matthew McConaughey, Anne Hathaway, and Jessica Chastain, and it was all about what happens when humans explore beyond what we know.

                In Interstellar, the Earth is in big trouble because of environmental problems, and people need to find a new place to live. So a group of astronauts, led by Cooper (played by McConaughey), go through a wormhole to look for a new planet. Along the way, they learn a lot about space and time, and they also learn about love and how important it is to stay connected to the people you care about.
                
                The movie is really interesting because it's based on real scientific theories, like wormholes and black holes. Even though it's a sci-fi movie, it feels like it could really happen. The movie looks great too, especially when it shows a black hole.
                
                The actors in Interstellar are really good too. McConaughey is great as Cooper, and the other actors, like Hathaway and Chastain, are just as good. The way the movie is put together is really smart too. The story is told in a way that keeps you guessing, and there are some twists that you don't see coming.
                
                Interstellar is a really great movie that makes you think about what it means to be human and what we can achieve when we work together. It's a movie that will stay with you long after you've seen it.",
                'image_path' => null,
                'user_id' => null
            ],
            [
                'slug' => "the matrix",
                'title' => "The Matrix",
                'description' => "In 1999, the Wachowskis made The Matrix, an action-packed sci-fi film that changed the genre and had a big impact on pop culture. The movie stars Keanu Reeves, Laurence Fishburne, and Carrie-Anne Moss, and it's a visual and philosophical masterpiece that makes you question what's real and what isn't.

                The story is set in a future world where machines rule and humans are stuck in a simulated reality called the Matrix. Neo (Reeves), a computer programmer, gets involved with a group of rebels who think he's the chosen one who can save humanity from the Matrix. But to do that, he needs to learn the truth about himself and his abilities, and decide if he can be the hero everyone thinks he is.
                
                The Matrix explores deep ideas about life and consciousness that can be confusing, but are very thought-provoking. It makes you wonder about free will, destiny, and who we really are. The movie's cast is also amazing. Reeves is great as Neo, and Fishburne and Moss are excellent as his friends Morpheus and Trinity. Hugo Weaving plays Agent Smith, the villain, and he's unforgettable.
                
                The Matrix is unique because it combines exciting action scenes with deep thinking about life. The Wachowskis' direction is top-notch, and the movie's use of bullet time was groundbreaking. This effect slows down time during fights, making them look super cool.
                
                In summary, The Matrix is a sci-fi classic that changed action and philosophy in movies. Its great cast and complex themes make it stand out from other films. The movie has influenced lots of sci-fi movies that came after it. The Matrix makes you think deeply about the meaning of reality and human potential, and it's a must-watch for anyone who loves exciting movies that make you think.",
                'image_path' => null,
                'user_id' => null
            ],
            [
                'slug' => "the matrix",
                'title' => "The Matrix",
                'description' => "In 1999, the Wachowskis made The Matrix, an action-packed sci-fi film that changed the genre and had a big impact on pop culture. The movie stars Keanu Reeves, Laurence Fishburne, and Carrie-Anne Moss, and it's a visual and philosophical masterpiece that makes you question what's real and what isn't.

                The story is set in a future world where machines rule and humans are stuck in a simulated reality called the Matrix. Neo (Reeves), a computer programmer, gets involved with a group of rebels who think he's the chosen one who can save humanity from the Matrix. But to do that, he needs to learn the truth about himself and his abilities, and decide if he can be the hero everyone thinks he is.
                
                The Matrix explores deep ideas about life and consciousness that can be confusing, but are very thought-provoking. It makes you wonder about free will, destiny, and who we really are. The movie's cast is also amazing. Reeves is great as Neo, and Fishburne and Moss are excellent as his friends Morpheus and Trinity. Hugo Weaving plays Agent Smith, the villain, and he's unforgettable.
                
                The Matrix is unique because it combines exciting action scenes with deep thinking about life. The Wachowskis' direction is top-notch, and the movie's use of bullet time was groundbreaking. This effect slows down time during fights, making them look super cool.
                
                In summary, The Matrix is a sci-fi classic that changed action and philosophy in movies. Its great cast and complex themes make it stand out from other films. The movie has influenced lots of sci-fi movies that came after it. The Matrix makes you think deeply about the meaning of reality and human potential, and it's a must-watch for anyone who loves exciting movies that make you think.",
                'image_path' => null,
                'user_id' => null
            ],
        ]);
    }
}
