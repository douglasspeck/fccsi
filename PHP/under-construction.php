<?php
    echo '
    <section class="under-construction">
        <img
            sizes="(max-width: 2100px) 100vw, 2100px"
            srcset="
                IMG/working_50.jpg 50w,
                IMG/working_371.jpg 371w,
                IMG/working_584.jpg 584w,
                IMG/working_802.jpg 802,
                IMG/working_999.jpg 999w,
                IMG/working_1216.jpg 1216w,
                IMG/working_1398.jpg 1398w,
                IMG/working_1482.jpg 1482w,
                IMG/working_1594.jpg 1594w,
                IMG/working_1748.jpg 1748w,
                IMG/working_1934.jpg 1934w,
                IMG/working_2061.jpg 2061w,
                IMG/working_2100.jpg 2100w"
            src="IMG/working.jpg"
            alt="Three men working in a construction"
        />
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