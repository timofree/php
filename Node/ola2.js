var http = require('http');
var fs = require('fs');
var url = require('url');
http.createServer( function (request, response) {
    var pathname = url.parse(request.url).pathname;
    console.log("petición: " + pathname + " received.");
   

    if("" == pathname || "/" == pathname){
        pathname = "/index.html";
    }

    else if(pathname == "/hola.html"){
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write("<img src='http://images.iimg.in/c/563bf327ae798ef7208b4567-4-501-0-1446769449/google/packaging-design-packaging-design-india-for-maa-juice-icarus.img?crop=1'>"); // para escribir en un html
      // pathname = "/adios.html"; // para pasarle otro path i que carge otra pagina.


    }
     else if(pathname == "/adios.html"){
        response.writeHead(200, {'Content-Type': 'text/html'});
        response.write("adios");   
    }
    fs.readFile(pathname.substr(1), function (err, data) {
        if (err) {
            console.log(err);
            // HTTP Status: 404 : NOT FOUND
            // Content Type: text/plain
            response.writeHead(404, {'Content-Type': 'text/html'});
        }else{
            // HTTP Status: 200 : OK
            // Content Type: text/plain
            response.writeHead(200, {'Content-Type': 'text/html'});
            response.write(data.toString());
        }
        response.end();
    });
}).listen(8081);
console.log('Server running at http://127.0.0.1:8081/');