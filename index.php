<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats</title>
    <link rel="icon" href="https://i.pinimg.com/236x/5a/06/67/5a06671e223b2ac8c5d61c5035e8c60e.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-orange-100">
    <?php
    $cats_apis = [
        [
            'id'  => ' 1' ,
            'name'  => ' Abyssinian Cat(Aby)' ,
            'image'  => ' https://cats.com/wp-content/uploads/2020/10/Abyssinian-young-cat-sitting-at-tower-768x512.jpg' ,
            'about'  => [
                'orgin'  => ' Ethiopia' ,
                'life-span'  => ' (14-17+)years' ,
                'group'  => ' Medium-sized short-haired' 
            ],
            ' history'  => ' Abyssinians are one of the oldest cat breeds in existence. The most recent genetic research suggests the breed originated in Southeast Asia, somewhere on the coast of the Indian Ocean. This breed retains many hallmarks of the appearance of felis lybica, a wildcat that contributed its DNA to all domestic cats in existence today.' ,
        ],

        [
            ' id'  => ' 2' ,
            ' name'  => ' Aegean Cat' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/the-aegan.jpg' ,
            ' about'  => [
                ' orgin'  => ' Greece' ,
                ' life-span'  => ' (9-12)years' ,
                ' group'  => ' Medium-sized short-haired' ,
            ],
            ' history'  => ' Aegean cats have a history that dates back thousands of years. They are believed to have originated in the Cycladic Islands.Archaeological evidence suggests that these cats may have been domesticated about 10,000 years ago on the island of Cyprus, which is just off the coast of Greece. If its true that ancient people shared their lives with these felines, they are truly one of the oldest cat breeds in existence today.' ,
        ],

        [
            ' id'  => ' 3' ,
            ' name'  => ' Asian Semi-Longhair Cat(Tiffany cat)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Asian-semi-longhair-cat-compressed-1-768x420.jpg' ,
            ' about'  => [
                ' orgin'  => ' United Kingdom' ,
                ' life-span'  => ' (12-16)years' ,
                ' group'  => ' Medium to large sized medium to long hair' 
            ],
            ' history'  => ' The first Asian semi-longhair cats were the result of an unintentional breeding between the Burmese and the chinchilla Persian. The Burmilla cat breed comes from the same cross, however it displays a silver shaded shorthair coat.' ,
        ],

        [
            ' id'  => ' 4' ,
            ' name'  => ' Bengal Cat(Leopardette)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Bengal-cat-compressed-1-768x420.jpg' ,
            ' about'  => [
                ' orgin'  => ' United States' ,
                ' life-span'  => ' (12-20)years' ,
                ' group'  => ' Large shorthair' 
            ],
            ' history'  => ' Cat fanciers began experimenting with Asian Leopard cat hybridization more than 200 years ago, but the Bengal cat we know and love today didnt emerge until the 1960s, when Dr. Willard Centerwall of Loma Linda University began hybridizing Asian Leopard cats to see whether they would pass their immunity to feline leukemia on to hybrid offspring. While immunity wasnt passed on, something great did result from those early experiments: the beginnings of a future new cat breed.' ,
        ],

        [
            ' id'  => ' 5' ,
            ' name'  => ' Australian Mist Cat(Spotted Mist)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Cat-Sitting-on-Couch-768x511.jpg' ,
            ' about'  => [
                ' orgin'  => ' Australia' ,
                ' life-span'  => ' (12-16)years' ,
                ' group'  => ' Medium-sized short-haired' 
            ],
            ' history'  => ' The Australian Mist cat was created in Australia in the 1970s by Dr. Truda Straede using Burmese, Abyssinians, and domestic short-haired cats. The cats unique coat colors and spotted patterns led to its original name: the Spotted Mist. As the breed continue to evolve, marbled coat patterns emerged, leading to an official name change in 1998 to Australian Mist.' ,
        ],

        [
            ' id'  => ' 6' ,
            ' name'  => ' Brazilian Shorthair Cat(Pelo Curto Brasileiro)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Brazilian-Shorthair-catss.jpg' ,
            ' about'  => [
                ' orgin'  => ' Brazil' ,
                ' life-span'  => ' (14-20)years' ,
                ' group'  => ' Medium-to-large shorthair' 
            ],
            ' history'  => ' We have Paulo Samuel Ruschi to thank for developing this breed, encouraging the friendly personality of Brazils street cats while standardizing the most desirable traits of cats found throughout the Iberian Peninsula. He is also the founder of Brazils Cat Federation and Rio de Janeiros Cat Club.' ,

        ],

        [
            ' id'  => ' 7' ,
            ' name'  => ' Donskoy Cat(Don Hairless)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Donskoy-or-Don-Sphynx-cat.jpg' ,
            ' about'  => [
                ' orgin'  => ' Russia' ,
                ' life-span'  => ' (12-15)years' ,
                ' group'  => ' Medium-sized hairless' 
            ],
            ' history'  => ' The first foundation member of this rare cat breed was first encountered in Russia in 1987 when a professor named Elena Kovaleva rescued a kitten that was being mistreated by a group of boys.' ,
        ],

        [
            ' id'  => ' 8' ,
            ' name'  => ' Exotic Shorthair Cat(Shorthaired Persian)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Exotic-Shorthair-cat.jpg' ,
            ' about'  => [
                ' orgin'  => ' United States' ,
                ' life-span'  => ' (12-16)years' ,
                ' group'  => ' Small to medium-sized shorthair' 
            ],
            ' history'  => ' The Exotic Shorthair is a relatively new cat breed. Sometimes called a Persian in a petticoat, this lovable cat was developed in the 1950s, when cat breeder Carolyn Bussey attempted to create a brown Persian by crossing a Persian cat with a Burmese. Although the resulting kittens were black in color, they were absolutely adorable and Bussey knew that she was on to something.' ,
        ],

        [
            ' id'  => ' 9' ,
            ' name'  => ' Kurilian Bobtail Cat(Kuril Islands Bobtail)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Kurilian-Bobtail-cat.jpg' ,
            ' about'  => [
                ' orgin'  => ' Russia' ,
                ' life-span'  => ' (14-20)years' ,
                ' group'  => ' Medium to large short-haired and long-haired' 
            ],
            ' history'  => ' The Kurilian Bobtail is native to the Kuril Islands, which give it its name. The breed is also native to Russias Kamchatka Peninsula and Sakhalin Island, which are located in the same geographic region.' ,

        ],

        [
            ' id'  => ' 10' ,
            ' name'  => ' Burmese Cat(American Burmese)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/beautiful-kitten-sitting-on-a-blanket-768x512.jpg' ,
            ' about'  => [
                ' orgin'  => ' Burma/Myanmar' ,
                ' life-span'  => ' (12-16)years' ,
                ' group'  => ' Medium-sized short-haired' 
            ],
            ' history'  => ' The Burmese cat has an intriguing history. The breeds story begins with a chocolate-colored cat named Wong Mau.Dr. Joseph Thompson of  San Francisco brought Wong Mau home with him after a trip to Burma in 1930. Wong Mau was small with a more compact body than that of the Siamese, with a shorter tail, a rounded head, short muzzle, and round, widely spaced eyes.' ,

        ],

        [
            ' id'  => ' 11' ,
            ' name'  => ' Manx Cat(Stubbin)' ,
            ' image'  => ' https://cats.com/wp-content/uploads/2020/10/Manx-cat-compressed-1-768x420.jpg' ,
            ' about'  => [
                ' orgin'  => ' Isle of Man' ,
                ' life-span'  => ' (12-16)years' ,
                ' group'  => ' Medium-sized short-haired' 
            ],
            ' history'  => ' The Manx cat originated on the Isle of Man, located in the Irish Sea. There, members of the breed were originally referred to as stubbin cats, a term that some locals continue to use today.' ,
        ]

    ];

    ?>
    <div>
        <div>
            <h1 class="text-orange-200 text-3xl  font-extrabold text-center rounded-xl  bg-black pt-5 pb-5 ">Cats</h1>
            <h1 class="font-bold text-2xl p-4   ">Did you know....</h1>
            <p class="font-bold text-2xl pl-8  ">
                Cats are among the most highly specialized of the flesh-eating mammals.Their brains are large and well developed.
                The cats teeth are adapted to three functions: stabbing (canines), anchoring (canines), and cutting (molars).
                There is a remarkable mechanism for retracting the cats claws when they are not in use.
                Cats have excellent vision and hearing, with ears that can turn like satellite dishes.
                Cats are believed to be the only mammals who dont taste sweetness.
            </p>
        </div>

        <h1 class="mt-10 pl-3 text-4xl font-extrabold">SOME OF BREEDS : </h1>
        <div class="rounded-black ring-4-orange-300 m-4 p-2">
            <p><?= $cats_apis['name']; ?></p>

        </div>
    </div>

</body>

</html>