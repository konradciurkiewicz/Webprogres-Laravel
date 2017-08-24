<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\page;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calculatePageRank()
    {
        $pageCount = Page::all()-> last();
        echo "<table>";
        for($i=1; $i<=$pageCount->id; $i++)
        {
            $page = Page::where('id', '=', "$i")->first();

            if(isset($page->title)){
                echo "<tr>";
                echo "<td>".$page->title."</td>";
                $pageRank = 0;
                $titleCount=abs(75-strlen($page->title));
                echo "<td>".$titleCount."</td>";
                $titlePoints= 100-($titleCount*1.3);
                    echo "<td>".$titlePoints."</td>";

                $contentPoints = strlen($page->title)*2;

                echo "<td>".$contentPoints."</td>";

                $visitPoins = $page->visit/5;
                echo "<td>".$visitPoins."</td>";

                $emailPoints = 0;
                if($page->email!=NULL)
                {
                    $emailPoints = 20;
                }
                echo "<td>".$emailPoints."</td>";

                $kodPoints = 0;
                if($page->kod!=NULL)
                {
                    $kodPoints = 10;
                }
                echo "<td>".$kodPoints."</td>";

                $ulicaPoints = 0;
                if($page->ulica!=NULL)
                {
                    $ulicaPoints = 10;
                }
                echo "<td>".$ulicaPoints."</td>";

                $miastoPoints = 0;
                if($page->miasto!=NULL)
                {
                    $miastoPoints = 10;
                }
                echo "<td>".$miastoPoints."</td>";

                $phonePoints = 0;
                if($page->phone!=NULL)
                {
                    $phonePoints = 10;
                }
                echo "<td>".$phonePoints."</td>";

                $pageRank=$titlePoints+$contentPoints+$visitPoins+$emailPoints+$kodPoints+$ulicaPoints+$miastoPoints+$phonePoints;
                echo "<td>".$pageRank."</td>";

                echo "</tr>";

                $page->page_rank=$pageRank;
                $page->save();
            }
        }
        echo "</table>";
    }

}
