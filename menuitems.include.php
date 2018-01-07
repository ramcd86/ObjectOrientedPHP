<?php

/** 
 * Package Name: PIXEL PIZZA, WEBELEVATE 6.0 ASSIGNMENT 1.
 * Author: ROSS MCDERMOTT
 * Required Package Files: footer.temp.html, header.temp.html, menu.temp.html, style.css, evaulator.js, burger.class.php, extras.class.php, fries.class.php, pizza.class.php, menu.class.php, index.php, menuitems.include.php, order.php, order_action.php, background.jpg, pgbh.png, pplogo.svg.
*/


// Include dependencies.

include ('menu.class.php');


// Functions to build menu item objects.

function pixelBurger() {
    $order = new Menu();
    $order->pixelBurger();
}

function extraLifePixelBurger() {
    $order = new Menu();
    $order->extraLifePixelBurger();
}

function theBigByte() {
    $order = new Menu();
    $order->theBigByte();
}

function theTexasDownload() {
    $order = new Menu();
    $order->theTexasDownload();
}

function cDOSCheesePizza() {
    $order = new Menu();
    $order->cDOSCheesePizza();
}

function pepperoniParserPizza() {
    $order = new Menu();
    $order->pepperoniParserPizza();
}

function hawaiiZonePizza() {
    $order = new Menu();
    $order->hawaiiZonePizza();
}

function vegetablePizza() {
    $order = new Menu();
    $order->vegetablePizza();
}

function pixelFries() {
    $order = new Menu();
    $order->pixelFries();
}

function polygonFries() {
    $order = new Menu();
    $order->polygonFries();
}

function terminalTacoFries() {
    $order = new Menu();
    $order->terminalTacoFries();
}

function cDOSCheeseFries() {
    $order = new Menu();
    $order->cDOSCheeseFries();
}

function pixelCola() {
    $order = new Menu();
    $order->pixelCola();
}

function pixelOrange() {
    $order = new Menu();
    $order->pixelOrange();
}

function pixelIceCream() {
    $order = new Menu();
    $order->pixelIceCream();
}

function pixelCookies() {
    $order = new Menu();
    $order->pixelCookies();
}

?>