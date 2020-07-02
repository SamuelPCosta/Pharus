// urlB64ToUint8Array is a magic function that will encode the base64 public key
// to Array buffer which is needed by the subscription option
const urlB64ToUint8Array = base64String => {
  const padding = "=".repeat((4 - (base64String.length % 4)) % 4);
  const base64 = (base64String + padding)
    .replace(/\-/g, "+")
    .replace(/_/g, "/");
  const rawData = atob(base64);
  const outputArray = new Uint8Array(rawData.length);
  for (let i = 0; i < rawData.length; ++i) {
    outputArray[i] = rawData.charCodeAt(i);
  }
  return outputArray;
};

const saveSubscription = async subscription => {
  const SERVER_URL = "http://localhost:4000/save-subscription";
  const response = await fetch(SERVER_URL, {
    method: "post",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(subscription)
  });
  return response.json();
};

self.onnotificationclick = function(event) {
//console.log('On notification click: ', event.notification.tag);
event.notification.close();

// This looks to see if the current is already open and
// focuses if it is
event.waitUntil(clients.matchAll({
  type: "window"
}).then(function(clientList) {
  for (var i = 0; i < clientList.length; i++) {
    var client = clientList[i];
    if (client.url == '/' && 'focus' in client)
      return client.focus();
  }
  if (clients.openWindow)
    return clients.openWindow('http://localhost/pharus/index');
}));
};
// const filesToCache = [
//   '/',
//   'horario.js'
// ];

  var title = 'O seu consumo hoje ultrapssou o limite!';
  var options = {
    body: 'Clique aqui para mais informações.',
    icon: 'http://localhost/pharus/assets/img/logo2.png',
    badge: 'http://localhost/pharus/assets/img/logo2.png'
  };

function ativar(hora, minuto){
  var timer = setInterval(function() {
  // const swListenerMinutos = new BroadcastChannel('swListenerMinutos');
  // swListenerMinutos.postMessage('This is From SW');
  data=new Date();
  var horaAtual = data.getHours(); 
  var minutoAtual = data.getMinutes();
  var estado = "ativada";

  console.log('Hora: '+hora)
  console.log('Minuto: '+minuto)
  if (estado=="ativada") {
    if (horaAtual==hora) {
      if(minutoAtual==minuto){
        const swListenerSound = new BroadcastChannel('swListenerSound');
        swListenerSound.postMessage('Sound');
        var notificationPromise = self.registration.showNotification(title, options);
        //start()
        //event.waitUntil(notificationPromise);
      }
    }
  }
  }, 10000);
}

self.addEventListener('message', event => {
    var hora = event.data.hora
    var minuto = event.data.minuto
    console.log(event.data.hora)
    console.log(event.data.minuto)
    ativar(hora, minuto)
    // switch (event.data.command) {
    //     case 'schedule':
    //         console.log('cogumelo')
    //         break;
    //     default:
    //         console.log('Erro')
    //         break;
    // }
});

// self.addEventListener("push", function(event) {
//   if (event.data) {
//     console.log("Push event!! ", event.data.text());
//   } else {
//     console.log("Push event but no data");
//   }
// });