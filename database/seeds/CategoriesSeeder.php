<?php

use Illuminate\Database\Seeder;
use App\Categories;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Categories();
        $category->name = 'Motoryzacja';
        $category->slug = 'motoryzacja';
        $category->save();
        $category = new Categories();
        $category->name = 'Sztuka i rozrywka';
        $category->slug = 'sztuka-i-rozrywka';
        $category->save();
        $category = new Categories();
        $category->name = 'Uroda i fitness';
        $category->slug = 'uroda-i-fitness';
        $category->save();
        $category = new Categories();
        $category->name = 'Komputery i elektronika';
        $category->slug = 'komputery-i-elektronika';
        $category->save();
        $category = new Categories();
        $category->name = 'Książki i literatura';
        $category->slug = 'ksiazki-i-literatura';
        $category->save();
        $category = new Categories();
        $category->name = 'Finanse';
        $category->slug = 'finanse';
        $category->save();
        $category = new Categories();
        $category->name = 'Gry';
        $category->slug = 'gry';
        $category->save();
        $category = new Categories();
        $category->name = 'Hobby i wypoczynek';
        $category->slug = 'hobby-i-wypoczynek';
        $category->save();
        $category = new Categories();
        $category->name = 'Wiadomości';
        $category->slug = 'wiadomosci';
        $category->save();
        $category = new Categories();
        $category->name = 'Społeczności online';
        $category->slug = 'spolecznasci-online';
        $category->save();
        $category = new Categories();
        $category->name = 'Zwierzęta';
        $category->slug = 'zwierzeta';
        $category->save();
        $category = new Categories();
        $category->name = 'Nieruchomości';
        $category->slug = 'nieruchomosci';
        $category->save();
        $category = new Categories();
        $category->name = 'Referencje';
        $category->slug = 'referencje';
        $category->save();
        $category = new Categories();
        $category->name = 'Nauka';
        $category->slug = 'nauka';
        $category->save();
        $category = new Categories();
        $category->name = 'Zakupy';
        $category->slug = 'zakupy';
        $category->save();
        $category = new Categories();
        $category->name = 'Sport';
        $category->slug = 'sport';
        $category->save();
        $category = new Categories();
        $category->name = 'Podróże';
        $category->slug = 'podroze';
        $category->save();
        $category = new Categories();
        $category->name = 'Inne';
        $category->slug = 'inne';
        $category->save();
    }
}
