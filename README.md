This is an experimental DDEV + websocket demo from https://stackoverflow.com/questions/74206517/ddev-how-to-etablish-websocket-connections and http://socketo.me/docs/hello-world 


To use:
* Check it out
* `ddev start` (websocket server starts automatically)
* call https://ddev-websocket-demo.ddev.site 

**Example Javascript call on browsers console:**
>var conn = new WebSocket('wss://ddev-websocket-demo:3001');
  conn.onopen = function(e) {
  console.log("Connection established!");
  };
conn.onmessage = function(e) {
console.log(e.data);
};

You will see the console message "Connection established!" when the websocket connection in successful. Check also your ddev terminal and see the connection message here.
You can start sending messages to other connected browsers:
>conn.send('Hello World!');