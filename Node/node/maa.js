var express = require('express');
var http = require('http');
var bodyParser = require('body-parser');


var app = express();

app.set('port', process.env.PORT || 3000);
app.use(express.static('public'));

app.use(bodyParser.urlencoded({extended : false}));



app.get('/' ,function(request , response){
    response.send('HOla express');
});

app.get('/users/:userName', function(request,response){
    var name = request.params.userName;
    response.send('Hola   ' + name +'!');
});
app.post('/users', function(request,response){
    var username = request.body.username;
    response.send('Hola   ' + username +'!');
});

http.createServer(app).listen(app.get('port'),function(){
    console.log('Express server listening on port ' + app.get('port'));

}
);