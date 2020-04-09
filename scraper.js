const request = require('request');
const cheerio = require('cheerio');

var isbn = 'https://www.campusbooks.com/search/'+'0078038197'+'?buysellrent=buy';
console.log(isbn);
request(isbn, (error, response, html)=>{
    if(!error && response.statusCode == 200) {
        const $ = cheerio.load(html);
        var siteHead = $('.page-header');
        var bestPrice = $('.featured-merchants-price');
        var author = $('dl.col-xs-8').children('dt').eq(0).text();
        var edition = $('dl.col-xs-8').children('dt').eq(3).text();
        var output = siteHead.text();
        var priceused = bestPrice.children('a').eq(1).text();
        console.log('title ',output,'authors ',author,'edition', edition, ' price', priceused);
    }
})