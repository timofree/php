var express = require('express');
var app = express();
var fs = require("fs");
var bodyParser = require('body-parser');
var urlencodedParser = bodyParser.
   urlencoded({extended: false } );


app.use(express.static('public'));

 


app.get ('/list', function ( req , res) {
     fs.readFile( __dirname + "/datos.json", 
        'utf8' , function ( err , data) {
        res.end(data);


     });
   });


app.post('/add',urlencodedParser, function ( req , res) {
    var id = parseInt(req.body.identificador)
    var name = req.body.nombre
    var price = parseFloat(req.body.precio)
    var available = req.body.disponible 
    if (available == 'on') {
        available = true;
    }else{
        available = false;
    }

    fs.readFile(__dirname + "/datos.json" , 'utf8',function(err,data){
        var object = JSON.parse(data);
        object['producto' + id] = {

            "id" : id,
            "nombre" : name,
            "precio" : price,
            "disponible" : available 
        }

        var json = JSON.stringify(object,null,2);
        fs.writeFile(__dirname + "/" + "datos.json" , json);

        res.end(json);
    });
   
   });

app.get('/delete/:id',  function ( req , res) {
     fs.readFile( __dirname + "/datos.json", 
        'utf8' , function ( err , data) {
        var object = JSON.parse(data);
        delete object["producto"+req.params.id];
        var json = JSON.stringify(object,null,2);
        fs.writeFile(__dirname + "/" + "datos.json" , json);

        res.end(json);

     });
   });

app.get('/seleccion/:id' ,  function ( req , res) {
     fs.readFile( __dirname + "/datos.json", 
        'utf8' , function ( err , data) {

        var object = JSON.parse(data);
        
        var pro = object["producto"+req.params.id];
         var json = JSON.stringify(pro,null,2);
        res.end(json);
     });
   }); 






app.get('/', function(req,res){
    res.sendFile (__dirname + '/public/index.html');

});

app.listen(8081, function(){
    console.log('app listening on port 8081');
});



