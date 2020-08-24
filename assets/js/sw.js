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

function ativar(hora, minuto){
  // read()
  var title = 'O seu consumo hoje ultrapssou o limite!';
  var options = {
    body: 'Clique aqui para mais informações. - '+hora+':'+minuto,
    icon: 'http://localhost/pharus/assets/img/logo2.png',
    badge: 'http://localhost/pharus/assets/img/badge.png'
  };
  var timer = setInterval(function() {
  // const swListenerMinutos = new BroadcastChannel('swListenerMinutos');
  // swListenerMinutos.postMessage('This is From SW');
  data=new Date();
  var horaAtual = data.getHours(); 
  var minutoAtual = data.getMinutes();
  var estado = "ativada";

  if (estado=="ativada") {
    if (horaAtual==hora) {
      if(minutoAtual==minuto){
        console.log('Hora: '+hora+' | Minuto: '+minuto)
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

function createDB(hora, minuto) {
  var req = indexedDB.deleteDatabase("horario");
  req.onsuccess = function () {
    console.log("Deleted database successfully");
  };
    request = indexedDB.open("horario", 1);
    const employeeData = [
      { id: "horario", horas: hora, minutos: minuto},
    ];
    request.onerror = function(event) {
      console.log("error: ");
    };
    request.onsuccess = function(event) {
      db = request.result;
      console.log("success: "+ db);
    };
    request.onupgradeneeded = function(event) {
      var db = event.target.result;
      var objectStore = db.createObjectStore("horario", {keyPath: "id"});
      
      for (var i in employeeData) {
         objectStore.add(employeeData[i]);
      }
    }
}

function read() {
  var request = indexedDB.open("horario", 2);
  request.onsuccess = function(event) {
    var db = request.target.result;
    console.log("success: "+ db);
  };
  request.onerror = function(event) {
    console.log("error: ");
  };
  
  
  // requestT.onsuccess = function(event) {
  //   db = requestT.result;
  //   displayData();
  //   var transaction = db.transaction(["horario"], "readwrite");
  //   var objectStore = transaction.objectStore("horario");
  //   var request = objectStore.get("horario");
  //   alert(request.result.horas);

  //   request.onerror = function(event) {
  //     alert("Unable to retrieve daa from database!");
  //   };
  //   request.onsuccess = function(event) {
  //     if(request.result) {
  //       console.log(request.result.horas);
  //     }
  //   };
  // };
  // requestT.onerror = function(event) {
  //   console.log('va pra pqp')
  //   as
  // };
}

self.addEventListener('message', event => {
    var hora = event.data.hora
    var minuto = event.data.minuto
    // console.log(event.data.hora)
    // console.log(event.data.minuto)
    //criar indexedDB com hora e minuto e escrever ativar depois dessa função, ao inves de puxar por parametros puxara do indexedDb
    //falta apenas ler os dados do indexeddb
    createDB(hora, minuto)
    // var request = db.transaction(["horario"],"readwrite").objectStore("horario").get(horario);
    // request.onsuccess = function(event){
    //     console.log("Hora : "+request.result.hora);    
    // };
    console.log('MensagemRecebida')
    ativar(hora, minuto)
    // read()
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