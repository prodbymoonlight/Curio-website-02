<?php require_once 'head.php'; ?>

<header>
    <div id="logo">
        <img src="img/curio-logo.png" alt="" width="200px">
    </div>
    <div id="navigation">
        <!-- <button onclick="LightSwitch()">Lampje</button> -->
        <a href="">Vakken</a>
        <a href="">Rooster</a>
        <a href="">Home</a>
    </div>
</header>

<style>
    header {
        display: flex;
        flex-direction: row;
        align-items: start;
        width: 80%;
        margin: 0 auto;
        height: 125px;
    }
    header::after {
        content: '';
        position: absolute;
        width: 100%;
        height: inherit;
        left: 0;
        top: 0;
        z-index: -1;
        backdrop-filter: blur(0.2rem);

        box-shadow: 0px 2px 4px rgba(0,0,0,0.2);
        background-color: rgba(0,0,0, 0.08);

        pointer-events: none;
    }
    header > div:first-child {
        text-align: left;
        margin: auto 0;
    }
    header > div:last-child {
        text-align: center;
        margin-top: auto;
        margin-bottom: auto;
        margin-left: auto;
        margin-right: 0;
    }

    header > div {
        margin: auto;
    }

    #navigation > a,
    #navigation > button
    {
        position: relative;
        font-size: 1.1em;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        font-family: "Poppins";
        margin-left: 40px;
    }
    #navigation > button {
        background-color: transparent;
        border: none;
    }
    #navigation > button:hover {
        cursor: pointer;
    }

    #navigation > a::after, 
    #navigation > button::after 
    {
        content: '';
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 100%;
        height: 3px;
        background-color: black;

        transform-origin: left;
        transform: scaleX(0);

        mask: linear-gradient(rgba(0,0,0,0) 0%, rgba(0,0,0,1) 10%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%);

        transition: transform 0.5s;
    }    
    #navigation > a:hover::after, 
    #navigation > button:hover::after
    {
        transform: scaleX(1);
    }
</style>