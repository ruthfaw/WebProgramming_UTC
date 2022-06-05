<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookstoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //TABLE : categories

        DB::table('categories')->insert([
            'category'=>'Adventure'
        ]);

        DB::table('categories')->insert([
            'category'=>'Art'
        ]);

        DB::table('categories')->insert([
            'category'=>'Biography'
        ]);

        DB::table('categories')->insert([
            'category'=>'Cooking'
        ]);

        DB::table('categories')->insert([
            'category'=>'Encyclopedia'
        ]);

        DB::table('categories')->insert([
            'category'=>'Fantasy'
        ]);

        DB::table('categories')->insert([
            'category'=>'Horror'
        ]);

        DB::table('categories')->insert([
            'category'=>'Mystery'
        ]);

        DB::table('categories')->insert([
            'category'=>'Romance'
        ]);

        DB::table('categories')->insert([
            'category'=>'Sport'
        ]);

        DB::table('categories')->insert([
            'category'=>'Thriller'
        ]);

        DB::table('categories')->insert([
            'category'=>'Travel'
        ]);


        //TABLE : books

        //Genre : Adventure
        DB::table('books')->insert([
            'category_id'=>'1',
            'title'=>'The Count of Monte Christo'
        ]);

        DB::table('books')->insert([
            'category_id'=>'1',
            'title'=>'The Jungle Book'
        ]);

        DB::table('books')->insert([
            'category_id'=>'1',
            'title'=>'Treasure Island'
        ]);

        //Genre : Art
        DB::table('books')->insert([
            'category_id'=>'2',
            'title'=>'Odd Apples'
        ]);

        DB::table('books')->insert([
            'category_id'=>'2',
            'title'=>'The Book of Symbols'
        ]);

        //Genre : Biography
        DB::table('books')->insert([
            'category_id'=>'3',
            'title'=>'A Beautiful Mind'
        ]);

        DB::table('books')->insert([
            'category_id'=>'3',
            'title'=>'Alexander Hamilton'
        ]);

        //Genre : Cooking
        DB::table('books')->insert([
            'category_id'=>'4',
            'title'=>'The Art of Simple Food'
        ]);

        DB::table('books')->insert([
            'category_id'=>'4',
            'title'=>'Joy of Cooking'
        ]);

        //Genre : Encyclopedia
        DB::table('books')->insert([
            'category_id'=>'5',
            'title'=>'Britannica'
        ]);

        //Genre : Fantasy
        DB::table('books')->insert([
            'category_id'=>'6',
            'title'=>'Mary Poppins'
        ]);

        DB::table('books')->insert([
            'category_id'=>'6',
            'title'=>'One Thousand and One Nights'
        ]);

        DB::table('books')->insert([
            'category_id'=>'6',
            'title'=>'Ozma of Oz'
        ]);

        //Genre : Horror -> No Data

        //Genre : Mystery
        DB::table('books')->insert([
            'category_id'=>'8',
            'title'=>'Five Little Pigs'
        ]);

        DB::table('books')->insert([
            'category_id'=>'8',
            'title'=>'Gone Girl'
        ]);

        //Genre : Romance
        DB::table('books')->insert([
            'category_id'=>'9',
            'title'=>'Indigo'
        ]);

        DB::table('books')->insert([
            'category_id'=>'9',
            'title'=>'Pride and Prejudice'
        ]);

        //Genre : Sport -> No Data

        //Genre : Thriller
        DB::table('books')->insert([
            'category_id'=>'11',
            'title'=>'Into the Dark'
        ]);

        DB::table('books')->insert([
            'category_id'=>'11',
            'title'=>'Out of Her Depth'
        ]);

        //Genre : Travel
        DB::table('books')->insert([
            'category_id'=>'12',
            'title'=>'The Rings of Saturn'
        ]);

        
        //TABLE : details

        //The Count of Monte Christo
        DB::table('details')->insert([
            'book_id'=>1,
            'author'=>'Alexandre Dumas',
            'publisher'=>'Penguin Classics',
            'year'=>2003,
            'description'=>'Dantes, a sailor, is slandered for betrayal by his best friend, Fernand, who intends to take his lover, Mercedes. After languishing in prison for 13 years, he is determined to escape and seek revenge.'
        ]);

        // The Jungle Book
        DB::table('details')->insert([
            'book_id'=>'2',
            'author'=>'Rudyard Kipling',
            'publisher'=>'Macmillan',
            'year'=>1894,
            'description'=>'After tiger Shere Khan\'s threat forces him to flee the jungle, Mowgli the jungle boy, embarks on an exciting adventure journey with the help of the panther Bagheera, and the feisty bear Baloo.'
        ]);

        //Treasure Island
        DB::table('details')->insert([
            'book_id'=>'3',
            'author'=>'Robert Louis Stevenson',
            'publisher'=>'Cassell and Company',
            'year'=>1883,
            'description'=>'The adventures of Jim Hawkins and his search for the buried treasure of an evil pirate, Captain Flint'
        ]);

        //Odd Apples
        DB::table('details')->insert([
            'book_id'=>'4',
            'author'=>'William Mullan',
            'publisher'=>'Hatje Cantz',
            'year'=>2018,
            'description'=>'“Odd Apples” is a collaboration between photographer William Mullan and designer Andrea Trabucco-Campos. Beginning with the release of a limited 32-page book in 2018, their “Odd Apples” project developed into an acclaimed photo series, featured in The New York Times, NY Magazine, The Guardian and i-D Magazine.'
        ]);

        //The Book of Symbols
        DB::table('details')->insert([
            'book_id'=>'5',
            'author'=>'Ami Ronnberg',
            'publisher'=>'Taschen America, LLC',
            'year'=>2010,
            'description'=>'The Book of Symbols combines original and incisive essays about particular symbols with representative images from all parts of the world and all eras of history. The highly readable texts and over 800 beautiful full-color images come together in a unique way to convey hidden dimensions of meaning.'
        ]);

        //A Beautiful Mind
        DB::table('details')->insert([
            'book_id'=>'6',
            'author'=>'Sylvia Nasar',
            'publisher'=>'Simon & Schuster',
            'year'=>1998,
            'description'=>'John Nash was brilliant but his antisocial behavior was off-putting to some. Even the colleagues who found him annoying couldn\'t deny he was going to make a name for himself, though. Tragically, just as his career was taking off, his behavior became more erratic and obsessive. His world came crashing down after his diagnosis with paranoid schizophrenia.'
        ]);

        //Alexander Hamilton
        DB::table('details')->insert([
            'book_id'=>'7',
            'author'=>'Ron Chernow',
            'publisher'=>'Penguin Press',
            'year'=>2004,
            'description'=>'The story starts from Hamilton\'s troubled childhood as an illegitimate orphan in the Caribbean to his political, literary and military careers in America, his fierce arguments with opponents, turbulent love life and tragic early death, this is the story of a gifted and difficult man whose legacy resonates into the present.'
        ]);

        //The Art of Simple Food
        DB::table('details')->insert([
            'book_id'=>'8',
            'author'=>'Alice Waters',
            'publisher'=>'Clarkson Potter',
            'year'=>2007,
            'description'=>'The Art of Simple Food is an indispensable resource for home cooks. Here you will find Alice\'s philosophy on everything from stocking your kitchen, to mastering fundamentals and preparing delicious, seasonal inspired meals all year long.'
        ]);

        //Joy of Cooking
        DB::table('details')->insert([
            'book_id'=>'9',
            'author'=>'Irma S. Rombaeur',
            'publisher'=>'Scribner',
            'year'=>2019,
            'description'=>'In the nearly ninety years since Irma S. Rombauer self-published the first three thousand copies of Joy of Cooking in 1931, it has become the kitchen bible, with more than 20 million copies in print. This new edition of Joy has been thoroughly revised and expanded by Irma\'s great-grandson John Becker and his wife, Megan Scott.'
        ]);

        //Britannica
        DB::table('details')->insert([
            'book_id'=>'10',
            'author'=>'Andrew Bell',
            'publisher'=>'Edinburgh',
            'year'=>1768,
            'description'=>'The Encyclopædia Britannica relies upon both outside experts and its own editors with various subject-area proficiencies to write its entries. Those entries are then fact-checked, edited, and copyedited by Britannica editors, a process intended to ensure that the articles meet Britannica\'s long-held standards for readability and accuracy. '
        ]);

        //Mary Poppins
        DB::table('details')->insert([
            'book_id'=>'11',
            'author'=>'Pamela Lyndon Travers',
            'publisher'=>'HMH Books',
            'year'=>2015,
            'description'=>'It all starts when Mary Poppins is blown by the east wind onto the doorstep of the Banks house. She becomes a most unusual nanny to Jane, Michael, and the twins. Who else but Mary Poppins can slide up banisters, pull an entire armchair out of an empty carpetbag, and make a dose of medicine taste like delicious lime-juice cordial? A day with Mary Poppins is a day of magic and make-believe come to life!.'
        ]);

        //One Thousand and One Nights
        DB::table('details')->insert([
            'book_id'=>'12',
            'author'=>'Hanan Al-Shayk',
            'publisher'=>'Bloomsbury Publishing PLC',
            'year'=> 2013,
            'description'=>'One Thousan and One Night is a collection of Middle Eastern folk tales compiled in Arabic during the Islamic Golden Age.'
        ]);

        //Ozma of Oz
        DB::table('details')->insert([
            'book_id'=>'13',
            'author'=>'Lyman Frank Baum',
            'publisher'=>'Reilly & Britton',
            'year'=> 1907,
            'description'=>'Blown overboard while sailing with her uncle, Dorothy finds herself in the fairy realm of Ev. She sets out with her friends to rescue the Queen of Ev and her ten children, who have been imprisoned by the cruel Nome King. But even Ozma, the wise Ruler of Oz, is no match for the clever king, and it\'s up to Dorothy to save everyone from terrible danger. But will the Nome King\'s enchantments be too much even for the plucky little girl from Kansas?'
        ]);

        //Five Little Pigs
        DB::table('details')->insert([
            'book_id'=>'14',
            'author'=>'Agatha Christie',
            'publisher'=>'Dodd, Mead and Company',
            'year'=> 1942,
            'description'=>'The book features detective Hercule Poirot investigating five people about a murder committed sixteen years earlier. Caroline Crale died in prison after being wrongfully convicted of murdering her husband, Amyas Crale, by poisoning him. In her final letter from prison, she claims to be innocent of the murder. Her daughter Carla Lemarchant asks Poirot to investigate this cold case, based on the memories of the people closest to the couple.'
        ]);
        
        //Gone Girl
        DB::table('details')->insert([
            'book_id'=>'15',
            'author'=>'Gillian Flynn',
            'publisher'=>'Crown Publishing Group',
            'year'=> 2012,
            'description'=>'On the morning of their fifth anniversary, Nick Dunne\'s wife, Amy, disappears from their North Carthage, Missouri home. A few years before, they moved there from New York to take care of Nick\'s mother, who was dying of cancer. An investigation is done by the police, and Nick become the main suspect of that incident '
        ]);

        //Indigo
        DB::table('details')->insert([
            'book_id'=>'16',
            'author'=>'Amy L Boukair',
            'publisher'=>'CreateSpace Independent Publishing Platform',
            'year'=> 2014,
            'description'=>'Maya Bennett thought she was an average widow with a "normal" life. That is, until she meets Indigo - a man with an unbelievable story that she can\'t help but believe. He\'s a man on a mission to save her and her son from an evil she couldn\'t have imagined in her wildest dreams. In the process she learns that while time may heal old wounds, it can also cut the deepest of them all…'
        ]);

        //Pride and Prejudice
        DB::table('details')->insert([
            'book_id'=>'17',
            'author'=>'Jane Austen',
            'publisher'=>'Book on Demand Ltd.',
            'year'=> 2014,
            'description'=>'The story follows the main character, Elizabeth Bennet, as she deals with issues of manners, upbringing, morality, education, and marriage in the society of the landed gentry of the British Regency. Elizabeth is the second of five daughters of a country gentleman living near the fictional town of Meryton in Hertfordshire, near London.'
        ]);

        //Into the Dark
        DB::table('details')->insert([
            'book_id'=>'18',
            'author'=>'Claudia Gray',
            'publisher'=>'Harper',
            'year'=> 2013,
            'description'=>'Can a stranger share your memories?

            That\'s the question that haunts Brenna Spector when she first sees footage of missing webcam performer Lula Belle. Naked but hidden in shadow, the "performance artist" shares her deepest, darkest secrets with her unseen male audience... secrets that, to Brenna, are chillingly familiar.'
        ]);

        //Out of Her Depth
        DB::table('details')->insert([
            'book_id'=>'19',
            'author'=>'Lizzy Barber',
            'publisher'=>'MIRA',
            'year'=> 2022,
            'description'=>'In the lush green hills beyond Florence sits the Villa Medici—a graceful pensione surrounded by manicured gardens. Rachel, a college student from an unfashionable London suburb, can\'t believe her luck in landing a summer job here. Especially when she\'s drawn into a circle of privileged young sophisticates, including her glamorous coworker Diana, who promises to help Rachel win the affections of handsome, confident Sebastian.

            But as champagne flows and rivalries fester in the Tuscan countryside, Rachel realizes that Diana has motivations of her own. Adrift in a world of backstabbing and bed-hopping, lavish parties and easy betrayal, Rachel feels the stakes rising along with the temperature until, one night, something snaps. Someone dies. And nothing will ever be the same…'
        ]);

        //The Rings of Saturn
        DB::table('details')->insert([
            'book_id'=>'20',
            'author'=>'W.G. Sebald',
            'publisher'=>'New Directions',
            'year'=> 2016,
            'description'=>'The Rings of Saturn, with its curious archive of photographs, records a walking tour of the eastern coast of England. '
        ]);
    }
}
