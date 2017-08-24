<?php

use Illuminate\Database\Seeder;
use App\page;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new page();
        $page->title = 'Lorem Ipsum';
        $page->content = ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis leo dignissim, pellentesque diam nec, commodo neque. Nulla hendrerit lobortis blandit. Mauris ut rutrum risus. Mauris scelerisque dapibus tellus nec ultrices. Vivamus eget congue sapien. Praesent ac rutrum dui, id euismod mauris. Integer in pharetra risus. Suspendisse sit amet neque quis quam congue pretium. Nullam pellentesque metus id diam pulvinar iaculis ut quis erat. Vivamus rhoncus facilisis mi, sit amet venenatis eros porta sed. Sed vestibulum in lacus vulputate volutpat. Morbi in tellus sagittis erat dapibus dignissim. In ac scelerisque ex. Nam et venenatis ex. Aliquam congue justo nibh, a commodo tellus sodales a. Etiam fringilla augue ut augue lacinia, sit amet aliquet justo scelerisque. ';
        $page->keywords = 'lorem ipsum, lorem, ipsum';
        $page->url = 'http://lipsum.com/feed/html';
        $page->slug = $page->slugify('Lorem Ipsum');
        $page->user_id = 1;
        $page->category_id = 1;
        $page->visit = 0;
        $page->save();
    }
}
