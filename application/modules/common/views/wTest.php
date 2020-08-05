<script src="<?php echo site_url('application/modules/common/assets/vendor/rabbitmq/stomp.js')?>"></script>
<h1>Rabbitmq Test</h1>
<div id="chat"></div>
<input type="text" id="msg">
<button onclick="sendMsg()">Send</button>
<script>
var client = Stomp.client('ws://localhost:15674/ws');;

client.connect("guest", "guest", onConnect, onError, "Group_01");

function onConnect() {
  var id = client.subscribe("/queue/Queues_03", function(d) {
    var node = document.createTextNode(d.body + '\n');
    document.getElementById('chat').appendChild(node);
        if(d.body == '100'){
            client.send('/queue/Queues_03', {}, 'Hello');
        }
  });
}
function onError(e) {
        console.log("STOMP ERROR", e);
      }
function sendMsg() {
  var msg = document.getElementById('msg').value;
  client.send('/queue/Queues_03', { "content-type": "text/plain" }, msg);
}
</script>
