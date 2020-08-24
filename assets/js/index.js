const check = () => {
  if (!("serviceWorker" in navigator)) {
    throw new Error("No Service Worker support!");
  }
  if (!("PushManager" in window)) {
    throw new Error("No Push API Support!");
  }
};

horas = 0;
minutos = 0;

function start(freq){
  var estadoNotificacao = localStorage.getItem('estadonotificacao')
  if (estadoNotificacao=="ativada") {
   let context,
   oscillator,
   contextGain,
   x = 1,
   type = 'sine',
   frequency = freq;
   context = new AudioContext();
   oscillator = context.createOscillator();
   contextGain = context.createGain();
   oscillator.frequency.value = frequency;
   oscillator.type = type;
   oscillator.connect(contextGain);
   contextGain.connect(context.destination);
   oscillator.start(0);
   contextGain.gain.exponentialRampToValueAtTime(
     0.0002, context.currentTime + x
   )
  }
}

function tocarnota1(){
  var freq = 440
  start(freq)
}

function tocarnota2(){
  var freq = 528
  start(freq)
}

const swListenerSound = new BroadcastChannel('swListenerSound');
swListenerSound.onmessage = function(e) {
  tocarnota1()
  setTimeout(function(){tocarnota2()}, 200);
};

// const swListenerMinutos = new BroadcastChannel('swListenerMinutos');
// swListenerMinutos.onmessage = function(e) {
//   console.log(minutos);
// };

async function unregisterServiceWorker(){
  navigator.serviceWorker.getRegistrations().then(function(registrations) {
  for(let registration of registrations) {
      registration.unregister()
      var req = indexedDB.deleteDatabase("horario");
      req.onsuccess = function () {
        console.log("Deleted database successfully");
      };
  }}).catch(function(err) {
      console.log('Service Worker registration failed: ', err);
  });
};

async function registerServiceWorker(){
  // navigator.serviceWorker.getRegistrations().then( function(registrations) { for(let registration of registrations) { registration.unregister(); } }); 
  // const swRegistration = await navigator.serviceWorker.register("http://localhost/pharus/assets/js/service.js");
  // return swRegistration;
  // navigator.serviceWorker.addEventListener('message', event => {
  //     update(event.data);
  // });
  const swRegistration = navigator.serviceWorker.register('assets/js/sw.js')
    .then(sw => {
        // //Agenda uma futura notificação
        //  setTimeout(function(){ 
        //  console.log("sw was created");}, 1000);
        sw.active.postMessage({
            hora: horas,
            minuto: minutos
        });
    })
    .catch(console.log);
  return swRegistration;
};

async function delay(){
  setTimeout( function(){
    console.log("serviceWorker criado")
  }, 300);
}

const requestNotificationPermission = async () => {
  const permission = await window.Notification.requestPermission();
  // value of permission can be 'granted', 'default', 'denied'
  // granted: user has accepted the request
  // default: user has dismissed the notification permission popup by clicking on x
  // denied: user has denied the request.
  if (permission !== "granted") {
    throw new Error("Permission not granted for Notification");
  }
};

const main = async () => {
  var swUnregistration = await unregisterServiceWorker();
  for (var i = 0; i < 24; i++) {
    if(localStorage.getItem('horas')==i){
      horas = i;
    }   
  }
  for (var i = 0; i < 60; i++) {
    if(localStorage.getItem('minutos')==i){
      minutos = i;
    }   
  }
  // console.log(horas);
  // console.log(minutos);
  setTimeout(function(){ 
  check();}, 1000);
  const permission = await requestNotificationPermission();
  var delayHorario = await delay();
  var swRegistration = await registerServiceWorker();
  //setTimeout(function(){console.log("sw was created");}, 2000);
  var swRegistration2 = registerServiceWorker();
  localStorage.setItem('estadonotificacao', "ativada")
};
// main(); we will not call main in the beginning.

const mainDesativar = async () => {
  const swUnregistration = await unregisterServiceWorker();
  localStorage.setItem('estadonotificacao', "desativada")
};
// main(); we will not call main in the beginning.

const permission = async () => {
  check();
  const permission = await requestNotificationPermission();
  // navigator.serviceWorker.register('assets/js/sw.js');
};
// main(); we will not call main in the beginning.
