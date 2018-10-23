<?php

namespace App\Http\Controllers;

class rssController extends Controller
{
   function feed(){
       
    // create new feed
    $feed = \App::make("feed");

    // multiple feeds are supported
    // if you are using caching you should set different cache keys for your feeds

    // cache the feed for 60 minutes (second parameter is optional)
    $feed->setCache(1, 'laravelFeedKey');

    // check if there is cached feed and build new only if is not
    if (!$feed->isCached())
    {
       // creating rss feed with our most recent 20 posts
       $posts = \DB::table('noticias')->orderBy('created_at', 'desc')->take(20)->get();

       // set your feed's title, description, link, pubdate and language
       $feed->title = 'RSS BioCubaFarma';
       $feed->description = 'Nuestras últimas noticias';
       $feed->logo = 'http://yoursite.tld/logo.jpg';
       $feed->link = url('feed');
       $feed->setDateFormat('datetime'); // 'datetime', 'timestamp' or 'carbon'
       $feed->pubdate = $posts[0]->created_at;
       $feed->lang = 'en';
       $feed->setShortening(false); // true or false
       $feed->setTextLimit(500); // maximum length of description text

       foreach ($posts as $post)
       {
           // set item's title, author, url, pubdate, description, content, enclosure (optional)*
           $feed->add($post->titulo, "", \URL::to('/noticias?id='.$post->id), $post->created_at, $post->subtitulo, $post->cuerpo);
       }

    }

    // first param is the feed format
    // optional: second param is cache duration (value of 0 turns off caching)
    // optional: you can set custom cache key with 3rd param as string
    return $feed->render('rss');

    // to return your feed as a string set second param to -1
    // $xml = $feed->render('atom', -1);

   }
}
