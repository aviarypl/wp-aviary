function replaceAddresses() {
    var re = /\sat\s(aviary)\sdot\s/;
    var links = document.links;
    for (var i = 0; link = links[i]; i++) {
        if (link.protocol == "mailto:") {
            var href = unescape(link.href);
            var text = unescape(link.firstChild.nodeValue);
            link.href = href.replace(re, "@$1\.");
            link.firstChild.nodeValue = text.replace(re, "@$1\.");            
        }    
    }
}
