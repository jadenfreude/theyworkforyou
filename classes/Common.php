<?php

namespace MySociety\TheyWorkForYou;

class Common {

    public function getPopularSearches() {
        global $SEARCHLOG;
        $popular_searches = $SEARCHLOG->popular_recent(10, 2000);

        return $popular_searches;
    }
}
