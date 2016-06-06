<?php

class PostTableSeeder extends Seeder {

    public function run() {

        $post = new Post();
        $post->title = 'Vanilla Lorem: the Original Lorem';
        $post->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'The Yummy Post: Cupcake Lorem';
        $post->content = 'Cupcake ipsum dolor sit amet gummies. Cake chocolate sweet ice cream oat cake biscuit bear claw dessert. Jujubes marzipan toffee apple pie pastry dragée jujubes marshmallow. Dragée chocolate gingerbread liquorice chocolate bar jujubes. Sweet chocolate bar jelly-o chocolate cake candy carrot cake cotton candy macaroon marzipan. Sweet roll biscuit sweet gummies topping sesame snaps tootsie roll sugar plum pie. Sweet muffin croissant chocolate cake chupa chups. Donut croissant gummies donut powder ice cream. Chupa chups halvah apple pie topping jelly beans donut candy canes donut. Bonbon cake gummi bears cheesecake tart topping powder liquorice gummi bears.';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'Walk the Post-arrr: Pirate Lorem';
        $post->content = 'American Main hail-shot Plate Fleet nipper galleon Sea Legs crow\'s nest rigging scourge of the seven seas tender. Hands piracy Shiver me timbers lateen sail chase guns plunder jolly boat draught salmagundi jury mast. Spanker galleon keelhaul handsomely take a caulk fire in the hole black jack Chain Shot clipper code of conduct. No prey, no pay coffer sutler pinnace topmast squiffy Sail ho list main sheet careen. Corsair Jack Tar spike bilged on her anchor Jolly Roger cutlass knave wherry tender Letter of Marque. Plunder barque lass come about Nelsons folly transom keel holystone draught topmast. Lee strike colors spike Cat o\'nine tails execution dock draught tender starboard long boat Yellow Jack. Squiffy nipper Privateer hulk quarter barkadeer skysail plunder warp topmast. Bring a spring upon her cable jib piracy Sail ho strike colors brigantine capstan plunder snow yardarm';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'Braaaainnnzzz: Zombie Lorem';
        $post->content = 'Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia? De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium.';
        $post->user_id = User::first()->id;
        $post->save();

        $post = new Post();
        $post->title = 'It Was Aliens!: Ancient Aliens Lorem';
        $post->content = 'Ancient alien technology pre-colonial aerodynamics, the answer is a resounding YES... Anti-gravity targeted mutation von Daniken helicopter heiroglyph, alien legendary times Sumerian texts von Daniken. Sky people pre-colonial aerodynamics Nazca lines DNA manipulation Annunaki, legendary times kachina doll Nazca lines ancient alien theorists, Puma Punku SETI electromagnetic legendary times petroglyph.';
        $post->user_id = User::first()->id;
        $post->save();
    }
}
?>
