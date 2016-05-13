<?php

namespace Fully\Http\Middleware;

use Closure;
use Menu;


class MenuMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
      Menu::make('live_primary', function($menu) {
            // $menu->add('Home', '/');
            // $menu->add('Sewing Machines', getLang() . '/sewing-machines/qnique');
            // $menu->add('Machine Frames', getLang() . '/machine-frames');
            // $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            // $menu->add('Automated', getLang() . '/automated/qct');
            // $menu->add('truecut', getLang() . '/');
            // $menu->add('Quilting Industry', getLang() . '/');
            // $shop = $menu->add('Shop', getLang() . '/shop', ['class' => 'sf-menu']);
            //             $shop->add('Cart', getLang() . '/shop/cart');
            //             $shop->add('Checkout', getLang() . '/shop/checkout');
            // $menu->add('Blog', getLang() . '/articles');
            // $menu->add('Contact', getLang() . '/contact');
        });

         Menu::make('disclosures', function($menu) {
            // $menu->add('Terms of Use', getLang() . '/');
            // $menu->add('Privacy Policy', getLang() . '/');
            // $menu->add('Returns', getLang() . '/');
            // $menu->add('Refunds', getLang() . '/');
            // $menu->add('Support', getLang() . '/');
            // $menu->add('Search', getLang() . '/');
            // $menu->add('Sitemap', getLang() . 'sitemap');
            // $menu->add('Blog', getLang() . 'quilting-industry/article');

        });

        Menu::make('account', function($menu) {

            // $menu->add('My Account', getLang() . '/my-account')->icon('user');
            // $menu->add('Purchase History', getLang() . '/');
            // $menu->add('Shipping Details', getLang() . '/');
            // $menu->add('Refunds', getLang() . '/');
            // $menu->add('Support', getLang() . '/');

        });

        Menu::make('shop', function($menu) {
            // $menu->add('Shop', getLang() . '/shop')->icon('cart');
            // $menu->add('Cart', getLang() . '/shop/cart');
            // $menu->add('Checkout', getLang() . '/shop/cart/checkout');
            // $menu->add('Refunds', getLang() . '/');
            // $menu->add('Support', getLang() . '/');
            // $menu->add('Search', getLang() . '/');
            // $menu->add('Sitemap', getLang() . '/');
            // $menu->add('Blog', getLang() . '/blog');

        });

        Menu::make('truecut', function($menu) {
            // $menu->add('TrueCut', getLang() . '/truecut');
            // $menu->add('TrueCut 360', getLang() . '/truecut/truecut360');
            // $menu->add('Comfort Cutter', getLang() . '/truecut/comfort-cutter/');
            // $menu->add('TrueSharp', getLang() . '/truecut/truesharp');
            // $menu->add('Rulers', getLang() . '/truecut/rulers');
            // $menu->add('Cutting Table', getLang() . '/truecut/cutting-table');
            // $menu->add('Cutting Mats', getLang() . '/truecut/cutting-mats');
            // $menu->add('Linear Sharpener', getLang() . '/truecut/linear-sharpener');
            // $menu->add('Accessories', getLang() . '/truecut/rotary-cutting-accessories');
        });

            // $menu->add('WHAT WE DO', getLang() . "/");
            // $menu->add('ABOUT US', getLang() . "/");
            // $menu->add('MANUFACTURING', getLang() . "/");
            // $menu->add('INVESTORS', getLang() . "/");
            // $menu->add('NEWS', getLang() . "/");
            // $menu->add('CAREERS', getLang() . "/");
            // $menu->add('CONTACT', getLang() . "/");

        Menu::make('homepage', function($menu) {
            // $about = $menu->add('The Grace Company', getLang() . '/about');
            //     $about->add('WHAT WE DO', getLang() . "/");
            //     $about->add('ABOUT US', getLang() . "/");
            // $menu->add('Community', getLang() . '/');
            // $menu->add('News', getLang() . '/');
            // $menu->add('FAQ\'s', getLang() . '/');
            // $menu->add('Tutorials', getLang() . '/');
            // $menu->add('MANUFACTURING', getLang() . "/");
            // $menu->add('CAREERS', getLang() . "/");
            // $menu->add('INVESTORS', getLang() . "/");
            // $menu->add('Support', getLang() . '/');

            // $menu->add('Shop Now', getLang() . '/', ['class' => 'button button-rounded button-border']);
        });

        Menu::make('qct', function($menu) {
            // $menu->add('Quilter&#39;s Creative Touch', getLang() . 'qct/qct');
            // $menu->add('Feature List', getLang() . 'qct/features');
            // $menu->add('Compare Versions', getLang() . 'qct/compare');
            // $menu->add('Specs', getLang() . 'qct/specs');
            // $menu->add('Tutorials', getLang() . 'qct/tutorials');
            // $menu->add('Support', getLang() . 'qct/support');
            // $menu->add('Get QCT Now', getLang() . 'qct/purchase', ['class' => 'button button-rounded button-border']);

        });

        Menu::make('hand', function($menu) {
            // $menu->add('Hand Quilting', getLang() . '/hand-quilting');
            // $menu->add('Z44 Frame', getLang() . '/hand-quilting/z44-frame');
            // $menu->add('Start-Right EZ3', getLang() . '/hand-quilting/start-right-ez3');
            // $menu->add('Grace Hoop 2', getLang() . '/hand-quilting/grace-hoop-2');
            // $menu->add('Lap Hoops', getLang() . '/hand-quilting/grace-lap-hoops');
            // $menu->add('GracieBee', getLang() . '/hand-quilting/graciebee');
            // $menu->add('Accessories', getLang() . '/hand-quilting/accessories');
            // $menu->add('Compare Frames', getLang() . '/hand-quilting/compare-frames');
        });

        Menu::make('machine', function($menu) {
            // $menu->add('Machine Quilting Frames', getLang() . '/machine-frames');
            // $menu->add('GQ Frame', getLang() . '/machine-frames/gq-frame');
            // $menu->add('Gracie King & Queen', getLang() . '/machine-frames/gracie-kq');
            // $menu->add('SR-2 Frame', getLang() . '/machine-frames/sr-2-frame');
            // $menu->add('Accessories', getLang() . '/machine-frames/accessories');
            // $menu->add('Compare Frames', getLang() . '/machine-frames/compare-machine-frames');

        });

        Menu::make('industry', function($menu) {
            // $menu->add('Promos', getLang() . '/');
            // $menu->add('Contests', getLang() . '/');
            // $menu->add('FAQ\'S', getLang() . '/');
            // $menu->add('Forum', getLang() . '/');
            // $menu->add('Videos', getLang() . '/');
            // $menu->add('Tutorials', getLang() . '/');
        });

        Menu::make('blog', function($menu) {
            // $menu->add('News', getLang() . '/news');
            // $menu->add('Events', getLang() . '/events');
            // $menu->add('Promos', getLang() . '/');
            // $menu->add('Contests', getLang() . '/');
            // $menu->add('Forum', getLang() . '/');
        });
       Menu::make('popular', function($menu) {
            // $menu->add('Documentation', getLang() . '/docs');
            // $menu->add('Software', getLang() . '/');
            // $menu->add('FAQ\'s', getLang() . '/');
            // $menu->add('Support Forums', getLang() . '/');
            // $menu->add('Press & News', getLang() . '/');
            // $menu->add('Blog', getLang() . '/');
            // $menu->add('Quilting Community', getLang() . '/');

        });



        return $next($request);
    }
}
