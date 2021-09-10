<?php
    echo '
    <section class="under-construction">
        <img src="IMG/working.jpg" alt="Three men working in a construction">
        <h1 class="title">Perdão pelo transtorno, <br>o site está sendo reformado.</h1>
    </section>';

    echo '
    <style>
        .under-construction {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            height: 60vh;
            margin: 0;
            padding: 0;
            position: absolute;
            top: calc(50% - 35vh);
            left: 20%;
        }
        
        .under-construction img {
            display: block;
            width: 70%;
        }

        footer {
            position: absolute !important;
            bottom: 0;
            left: 0;
            right: 0;
        }

        @media only screen and (orientation: portrait){
            .under-construction {
                left: 10%;
            }

            .under-construction img {
                width: 100%;
            }
        }
    </style>';
?>