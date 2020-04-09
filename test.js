// const fs = require('fs');

// let book ={
//     title :'title',
//     author : 'john Doe',
//     price : "used $39.99"
// }
// let data = JSON.stringify(book);
// fs.writeFileSync('isbn.json', data);



// const http = require('http');
// const server = http.createServer((req, res) => {
//     if(req.method === 'POST'){
//         let body = '';
//         req.on('data', chunk=>{
//             body += chunk.toString();

//         });
//         req.on('end', ()=>{
//             const request = require('request');
//             const cheerio = require('cheerio');

//             body = 'https://www.campusbooks.com/search/'+body.slice(5)+'?buysellrent=buy';
//             console.log(body);
//         request(body, (error, response, html)=>{
//             if(!error && response.statusCode == 200) {
//                 const $ = cheerio.load(html);
//                 var siteHead = $('.page-header');
//                 var bestPrice = $('.featured-merchants-price');
//                 var author = $('dl.col-xs-8').children('dt').eq(0).text();
//                 var edition = $('dl.col-xs-8').children('dt').eq(3).text();
//                 var output = siteHead.text();
//                 var priceused = bestPrice.children('a').eq(1).text();
//                 console.log('title ',output,'authors ',author, edition, ' price', priceused);
//             }
//         })
//             res.end('ok');
//         })
//     }
//     res.end(`
//         <!doctype html>
//         <html>
//         <body>
//             <form action="/test.js" method="post">
//                 <input type="text" name="isbn" /><br />
//                 <button>Save</button>
//             </form>
//         </body>
//         </html>
//     `);
// });
// server.listen(80);

var express = require('express');
var bodyParser = require('body-parser');
var app     = express();

app.use(body-bodyParser.urlencoded({extend:true}));

app.post('/test.js', function(req,res){
    res.send('you sent' + res.body.isbn);
})
app.listen(8080,function(){
    console.log('server running on port 80');
})