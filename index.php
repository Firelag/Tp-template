<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Beach Football</title>
</head>

<body>

    <header>
        <nav>
            <img src="./assets/logo.png" alt="">
            <ul>
                <li>
                    <a href="">Discover</a>
                    <a href="">Features</a>
                    <a href="">How it works</a>
                </li>
            </ul>
            <button>Login</button>

        </nav>
    </header>
    <section class="section1">
        <div class="txt">
            <h3>Make New Friends over</h3>
            <h2>Beach Football</h2>
            <p>Challenge your friends and play together a game
                of Beach Football at your nearest beach.</p>
            <form>
                <select name="users" onchange="showUser(this.value)">
                    <option value="">Select beach arenas:</option>
                    <option value="1">Costa del Sol, El Salvador</option>
                    <option value="2">Nazaré, Portugal</option>
                    <option value="3">Figueira da Foz, Portugal</option>
                    <option value="4">Alajuela, Costa Rica</option>
                    <option value="5">Saly, Senegal</option>
                    <option value="6">Virginia Beach, USA</option>
                    <option value="7">Rio de Janeiro, Brazil</option>
                    <option value="8">Chisinau, Moldova</option>
                    <option value="9">Figueira da Foz, Portugal</option>
                    <option value="10">Dubai, UAE</option>


                </select>
            </form>
            <br>
            <div id="txtHint"></div>
            <p><b>Popular Beach Arenas:</b> Virginia, California, Texas</p>
        </div>
        <div class="image">
            <img src="./assets/tree.png" alt="">
        </div>






    </section>






    <script src="./script.js"></script>
</body>

</html>