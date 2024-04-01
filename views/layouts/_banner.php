<style>
    body {
        font-family: Arial;
        margin: 0;
        background: rgb(35,34,34);
        background: linear-gradient(315deg, rgba(35,34,34,1) 57%, rgba(166,4,47,1) 85%);
    }

    div.header {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        background: #c4c3c3;
        padding: 20px;
        align-items: center;
    }

    .header .title {
        color: #000000;
        font-size: 23px;
        font-weight: 700;
        cursor: pointer;
    }

    .header .title span {
        color: #9F0013;
    }

    .menu {
        display: flex;
        gap: 25px;
    }

    a {
        text-decoration: none;
        display: inline;
        font-size: 20px;
        color: #000000;
        font-weight: 700;
    }

    a:hover {
        color: #9F0013;
    }

    .banner {
        width: 100%;
        background: #232222;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .img {
        width: 152px;
        height: 100px;
    }

    .text {
        font-weight: 500;
        font-size: 24px;
        color: #FFFFFF;
    }

    .container {
        width: 100%;
        display: flex;
    }

    .character-block {
        padding: 20px;
        margin-top: 50px;
        width: 100%;
        display: flex;
        border-radius: 12px;
    }

    .character-info {
        padding: 20px;
        color: #FFFFFF;
    }

    .character-info .title {
        font-size: 27px;
        text-align: center;
        margin-bottom: 32px;
    }

    .p-title {
        text-align: center;
        color: #ffffff;
    }


    .character-card {
        background: #232222;
        cursor: pointer;
        height: 370px;
        transition: transform .3s;
        width: 250px;
        border: 1px #9F0013 solid;
        margin-bottom: 20px;
    }

    .characters-block {
        margin-top: 30px;
        justify-content: center;
        display: flex;
        gap: 30px;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .comics-block {
        margin-top: 30px;
        justify-content: center;
        display: flex;
        gap: 30px;
        flex-direction: row;
        flex-wrap: wrap;
    }

    .comics-card {
        background: #232222;
        cursor: pointer;
        height: 425px;
        transition: transform .3s;
        width: 250px;
        border: 1px #9F0013 solid;
        margin-bottom: 20px;;
    }

    .comics-card a {
        margin-top: 10px;
    }

    .character-card img, .comics-card img {
        width: 250px;
        height: 250px;
    }

    .character-card p, .comics-card p {
        text-align: center;
        color: #fff;
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        line-height: 26px;
    }

    .details {
        text-align: center;
        color: #9F0013;
        margin-left: 100px;
    }

    .list-group {
        width: 100%;
        display: flex;
        flex-direction: row;
        gap: 20px;
    }

    .list {
        width: 100%;
    }

    .character-thumb img {
        border-radius: 12px;
    }
</style>

<div class="banner">
    <img src="assets/chars.png" alt="" class="img">
    <p class="text">Stay Tuned !!!</p>
    <img src="assets/avengers.png" alt="" class="img">
</div>