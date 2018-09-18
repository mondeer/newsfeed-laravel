<?php

namespace imond\Http\Controllers;

use Illuminate\Http\Request;
use MediaWiki;

class WikiCtrl extends Controller
{
    public function wikiGrab(Request $request) {
      $keyword = $request->input('keyword');
      $page = (new MediaWiki('https://wikinews.org/w/api.php'))->preview($keyword);

      return view('wiki')->with('page', $page);
    }
}
