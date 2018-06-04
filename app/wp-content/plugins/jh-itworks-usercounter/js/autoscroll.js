
// NOT WORKING!! SAME FUNCTION HARDCODED IN BOSS THEME/CHILD BOSS THEME.. content-blog.php

// if query string in URL contains scroll=nnn, then scroll position will be restored 
setScroll = function () {
    console.log(1)
    // get query string parameter with "?"
    var search = window.location.search,
        matches;
    // if query string exists
    if (search) {
        // find scroll parameter in query string
        matches = /scroll=(\d+)/.exec(search);
        // jump to the scroll position if scroll parameter exists
        if (matches) {
            window.scrollTo(0, matches[1]);
        }
    }
};

// function appends scroll parameter to the URL or returns scroll value
myScroll = function (url) {
    var scroll, q;
    // Netscape compliant
    if (typeof(window.pageYOffset) === 'number') {
        scroll = window.pageYOffset;
    }
    // DOM compliant
    else if (document.body && document.body.scrollTop) {
        scroll = document.body.scrollTop;
    }
    // IE6 standards compliant mode
    else if (document.documentElement && document.documentElement.scrollTop) {
        scroll = document.documentElement.scrollTop;
    }
    // needed for IE6 (when vertical scroll bar is on the top)
    else {
        scroll = 0;
    }
    // if input parameter does not exist then return scroll value
    if (url === undefined) {
        return scroll;
    }
    // else append scroll parameter to the URL
    else {
        // set "?" or "&" before scroll parameter
        q = url.indexOf('?') === -1 ? '?' : '&';
        // refresh page with scroll position parameter
        window.location.href = url + q + 'scroll=' + scroll;
    }
};
(function(){
    // window.addEventListener("load", setScroll, false);
    
    setScroll();
})();