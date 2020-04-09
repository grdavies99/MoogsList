var mySql = require('mysql');

var con = mySql.createConnection({
    host:"localhost",
    user:"GarrettDavies",
    password: "Highjump99"
});

con.connect(function(err){
    if (err) throw err;
    else 
    console.log('Connected!');
});