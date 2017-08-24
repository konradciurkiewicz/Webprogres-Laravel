<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\PageType;
class PageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pagetype = new PageType();
        $pagetype->name = 'Wizytówka';
        $pagetype->slug = 'wizytowka';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Sklep internetowy';
        $pagetype->slug = 'sklep-internetowy';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Forum';
        $pagetype->slug = 'forum';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Blog';
        $pagetype->slug = 'blog';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Serwis informacyjny';
        $pagetype->slug = 'serwis-informacyjny';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Gra';
        $pagetype->slug = 'gra';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Aplikacja użytkowa';
        $pagetype->slug = 'aplikacja-uzytkowa';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'System obsługi klienta';
        $pagetype->slug = 'system-oblugi-klienta';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'System zarządzania projektami';
        $pagetype->slug = 'system-zarzadzania-projektami';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Aplikacja z filmami lub muzyką';
        $pagetype->slug = 'aplikacja-z-filmami-muzyka';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Hosting plików';
        $pagetype->slug = 'hosting-plikow';
        $pagetype->save();
        $pagetype = new PageType();
        $pagetype->name = 'Inne';
        $pagetype->slug = 'inne';
        $pagetype->save();

    }
}
