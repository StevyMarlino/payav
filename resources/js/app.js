require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
    apiKey: "AIzaSyCE0i8_6hlYvpNt1uAcJg-f60yX8oDOq0I",
    authDomain: "payav-409fb.firebaseapp.com",
    projectId: "payav-409fb",
    storageBucket: "payav-409fb.appspot.com",
    messagingSenderId: "821216723961",
    appId: "1:821216723961:web:333c7bd684cfb523e77328",
    measurementId: "G-GXHN16YHMW"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
