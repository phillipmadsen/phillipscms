<?php

namespace Fully\Http\Controllers;

use Fully\Repositories\Page\PageInterface;
use Fully\Repositories\Page\PageRepository as Page;
use Illuminate\Support\Facades\DB;
use Request;
/**
 * Class PageController.
 *
 * @author Phillip Madsen <contact@affordableprogrammer.com>
 */
class PageController extends Controller
{
    protected $page;

    public function __construct(PageInterface $page)
    {
        $this->page = $page;
    }

    /**
     * Display page.
     *
     * @param $slug
     *
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {


        $page = $this->page->getBySlug($slug, true);

        if (Request::ajax()) {
            $sections = $view->renderSections();

            return $sections['content'];

        }

        if ($page === null) {
            return Response::view('errors.missing', array(), 404);
        }

        return view('frontend.page.show', compact('page'));
    }

    // public function get_index()
    // {
    //     $view = View::make('page');

    //     if (Request::ajax()) {
    //         $sections = $view->renderSections(); // returns an associative array of 'content', 'head' and 'footer'

    //         return $sections['content']; // this will only return whats in the content section

    //     }

    //     // just a regular request so return the whole view

    //     return $view;
    // }

    // if(Request::ajax()) {
    //   // do something AJAXy, like present the sound
    // } else {
    //   // present a full HTML page, because the user navigated directly to this URL
    // }

    // MACHINE FRAMES
    public function machine()
    {return view('frontend.pages.machine-frames.machine');}
    public function gqframe()
    {return view('frontend.pages.machine-frames.gq-frame');}
    public function compareMachineFrames()
    {return view('frontend.pages.machine-frames.compare-machine-frames');}
    public function comparison()
    {return view('frontend.pages.machine-frames.comparison');}
    public function accessories()
    {return view('frontend.pages.machine-frames.accessories');}
    public function graciekq()
    {return view('frontend.pages.machine-frames.gracie-kq');}
    public function sr2frame()
    {return view('frontend.pages.machine-frames.sr-2-frame');}

    // QNIQUE
    public function qnique()
    {return view('frontend.pages.qnique.qnique');}
    public function qniquefeatures()
    {return view('frontend.pages.qnique.features');}
    public function qniquespecs()
    {return view('frontend.pages.qnique.specs');}
    public function qniqueaccessories()
    {return view('frontend.pages.qnique.accessories');}

    // ECOMMERCE
    public function shop()
    {return view('frontend.shop');}

    public function cart()
    {return view('frontend.shop.cart');}
    public function newuser()
    {return view('frontend.newuser');}

    // AUTOMATION
    public function qct()
    {return view('frontend.pages.qct.qct');}
    public function qctpurchase()
    {return view('frontend.pages.qct.purchase');}
    public function qctfeatures()
    {return view('frontend.pages.qct.features');}
    public function qctspecs()
    {return view('frontend.pages.qct.specs');}
    public function qctsupport()
    {return view('frontend.pages.qct.support');}
    public function qctcompare()
    {return view('frontend.pages.qct.compare');}
    public function qcttutorials()
    {return view('frontend.pages.qct.tutorials');}

    // HAND QUILTING
    public function handquilting()
    {return view('frontend.pages.hand-quilting.handquilting');}
    public function z44frame()
    {return view('frontend.pages.hand-quilting.z44-frame');}
    public function startrightez3()
    {return view('frontend.pages.hand-quilting.start-right-ez3');}
    public function gracehoop2()
    {return view('frontend.pages.hand-quilting.grace-hoop-2');}
    public function gracelaphoops()
    {return view('frontend.pages.hand-quilting.grace-lap-hoops');}
    public function graciebee()
    {return view('frontend.pages.hand-quilting.graciebee');}
    public function handaccessories()
    {return view('frontend.pages.hand-quilting.accessories');}
    public function comparehandframes()
    {return view('frontend.pages.hand-quilting.compare-frames');}

    // TRUECUT
    public function truecut()
    {return view('frontend.pages.truecut.truecut');}
    public function comfort()
    {return view('frontend.pages.truecut.comfort-cutter');}

    public function htmlsitemap()
    {

        return view('frontend.pages.htmlsitemap');
    }

}
