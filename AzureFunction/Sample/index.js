module.exports = async function (context, req) {
    context.log('JavaScript HTTP trigger function processed a request.');

    if (req.query.a || (req.body && req.body.name)) {
        if(req.query.a && req.query.b){
            var a = req.query.a;
            var b = req.query.b;
            context.res = {
                // status: 200, /* Defaults to 200 */
                body: +a / +b
            };
               
        }
        else{
            context.res ={
                status: 400,
                body: "Please add number a and number b"
            };
        }
    }
    else {
        context.res = {
            status: 400,
            body: "Please pass a name on the query string or in the request body"
        };
    }
};