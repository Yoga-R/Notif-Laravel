<script src="https://www.gstatic.com/firebasejs/8.4.2/firebase-app.js"></script>

        <script src="https://www.gstatic.com/firebasejs/7.16.1/firebase-messaging.js"></script>
        <script>
            MsgElem = document.getElementById('msg');
            TokenElem = document.getElementById('token');
            NotisElem = document.getElementById('notis');
            ErrElem = document.getElementById('err');

            // TODO: Replace firebaseConfig you get from Firebase Console
            var firebaseConfig = {
                'apiKey': "AIzaSyDY0Z3WcF9nr_N6ybCm2AX3x_CuVtGhDYY",
    'authDomain': "sebarkerjatotalindo-e8ee9.firebaseapp.com",
    'projectId': "sebarkerjatotalindo-e8ee9",
    'storageBucket': "sebarkerjatotalindo-e8ee9.appspot.com",
    'messagingSenderId': "684166984687",
    'appId': "1:684166984687:web:724c98d0809b713ab83c1a",
    'measurementId': "G-BHW5JH849X"
            };
            firebase.initializeApp(firebaseConfig);

            const messaging = firebase.messaging();
            messaging
                .requestPermission()
                .then(function () {
                    MsgElem.innerHTML = 'Notification permission granted.';
                    console.log('Notification permission granted.');

                    // get the token in the form of promise
                    return messaging.getToken();
                })
                .then(function (token) {
                    TokenElem.innerHTML = 'Device token is : <br>' + token;
                })
                .catch(function (err) {
                    ErrElem.innerHTML = ErrElem.innerHTML + '; ' + err;
                    console.log('Unable to get permission to notify.', err);
                });

            let enableForegroundNotification = true;
            messaging.onMessage(function (payload) {
                console.log('Message received. ', payload);
                NotisElem.innerHTML =
                    NotisElem.innerHTML + JSON.stringify(payload);

                if (enableForegroundNotification) {
                    let notification = payload.notification;
                    navigator.serviceWorker
                        .getRegistrations()
                        .then((registration) => {
                            registration[0].showNotification(notification.title);
                        });
                }
            });
        </script>