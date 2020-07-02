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

function start(){
   let context,
   oscillator,
   contextGain,
   x = 1,
   type = 'sine',
   frequency = 440.0;
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

const swListenerSound = new BroadcastChannel('swListenerSound');
swListenerSound.onmessage = function(e) {
  start()
};

// const swListenerMinutos = new BroadcastChannel('swListenerMinutos');
// swListenerMinutos.onmessage = function(e) {
//   console.log(minutos);
// };

async function unregisterServiceWorker(){
  navigator.serviceWorker.getRegistrations().then(function(registrations) {
  for(let registration of registrations) {
      registration.unregister()
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
        //Agenda uma futura notificação
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
  var swRegistration = await registerServiceWorker();
  var delayHorario = await delay();
  var swRegistration2 = await registerServiceWorker();
};
// main(); we will not call main in the beginning.

const mainDesativar = async () => {
  const swUnregistration = await unregisterServiceWorker();
};
// main(); we will not call main in the beginning.

const permission = async () => {
  check();
  const permission = await requestNotificationPermission();
  // navigator.serviceWorker.register('assets/js/sw.js');
};
// main(); we will not call main in the beginning.
