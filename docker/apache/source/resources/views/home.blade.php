@extends('layouts.base')

@section('content')
    <!-- Main Container -->


    <div class="wrap">
        <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            <li id="carousel__slide1"
                tabindex="0"
                class="carousel__slide">
                <div class="text">
                    <h2>Аэробика для похудения</h2>
                    <p>Приведите фигуру в порядок весело!</p>
                </div>
            <div class="carousel__snapper">
                <a href="#carousel__slide4"
                class="carousel__prev">Go to last slide</a>
                <a href="#carousel__slide2"
                class="carousel__next">Go to next slide</a>
            </div>
            </li>
            <li id="carousel__slide2"
                tabindex="0"
                class="carousel__slide">
                <div class="text">
                    <h2>Большой комфортный бассейн с подогревом</h2>
                    <p>Научитесь плавать под руководством опытного тренера</p>
                </div>
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide1"
                class="carousel__prev">Go to previous slide</a>
            <a href="#carousel__slide3"
                class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide3"
                tabindex="0"
                class="carousel__slide">
                <div class="text">
                    <h2>Занятия йогой для всех</h2>
                    <p>Занятия направлены на оздоровление позвоночника и поддержание физической формы</p>
                </div>
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide2"
                class="carousel__prev">Go to previous slide</a>
            <a href="#carousel__slide4"
                class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide4"
                tabindex="0"
                class="carousel__slide">
                <div class="text">
                    <h2>Стретчинг</h2>
                    <p>С нами вы улучшите растяжку и снимите стресс</p>
                </div>
            <div class="carousel__snapper"></div>
            <a href="#carousel__slide3"
                class="carousel__prev">Go to previous slide</a>
            <a href="#carousel__slide1"
                class="carousel__next">Go to first slide</a>
            </li>
        </ol>
        <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
            <li class="carousel__navigation-item">
                <a href="#carousel__slide1"
                class="carousel__navigation-button">Go to slide 1</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide2"
                class="carousel__navigation-button">Go to slide 2</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide3"
                class="carousel__navigation-button">Go to slide 3</a>
            </li>
            <li class="carousel__navigation-item">
                <a href="#carousel__slide4"
                class="carousel__navigation-button">Go to slide 4</a>
            </li>
            </ol>
        </aside>
        </section>
    </div>

        <style>


        @keyframes tonext {
          75% {
            left: 0;
          }
          95% {
            left: 100%;
          }
          98% {
            left: 100%;
          }
          99% {
            left: 0;
          }
        }

        @keyframes tostart {
          75% {
            left: 0;
          }
          95% {
            left: -300%;
          }
          98% {
            left: -300%;
          }
          99% {
            left: 0;
          }
        }

        @keyframes snap {
          96% {
            scroll-snap-align: center;
          }
          97% {
            scroll-snap-align: none;
          }
          99% {
            scroll-snap-align: none;
          }
          100% {
            scroll-snap-align: center;
          }
        }

        .wrap {
          max-width: 37.5rem;
          margin: 40px auto;
          padding: 0 1.25rem;
          font-family: 'Lato', sans-serif;
        }

        * {
          box-sizing: border-box;
          scrollbar-color: transparent transparent; /* thumb and track color */
          scrollbar-width: 0px;
        }

        *::-webkit-scrollbar {
          width: 0;
        }

        *::-webkit-scrollbar-track {
          background: transparent;
        }

        *::-webkit-scrollbar-thumb {
          background: transparent;
          border: none;
        }

        * {
          -ms-overflow-style: none;
        }

        ol, li {
          list-style: none;
          margin: 0;
          padding: 0;
        }

        .carousel {
            max-width: 37.5rem;
            margin: 0 auto;


            position: relative;
            padding-top: 75%;
            filter: drop-shadow(0 0 10px #0003);
            perspective: 100px;
        }

        .carousel__viewport {
          position: absolute;
          top: 0;
          right: 0;
          bottom: 0;
          left: 0;
          display: flex;
          overflow-x: scroll;
          counter-reset: item;
          scroll-behavior: smooth;
          scroll-snap-type: x mandatory;
        }

        .carousel__slide {
          position: relative;
          flex: 0 0 100%;
          width: 100%;
          background-size: cover;
        }
         #carousel__slide1{
            background-image: url("https://sportishka.com/uploads/posts/2021-11/thumbs/1636984991_25-sportishka-com-p-detskaya-step-aerobika-fitnes-krasivie-fot-29.jpg");
            display: flex;
         }
         #carousel__slide2{
            background-image: url("https://sportishka.com/uploads/posts/2021-12/1638471286_2-sportishka-com-p-sportivnii-bassein-krasivie-sportivnie-fot-2.jpg");
            display: flex;
         }
         #carousel__slide3{
            background-image: url("https://danceon.ru/wp-content/uploads/d/7/9/d7997dc8670b2c4aece92f1fa23fd1a9.jpeg");
            display: flex;
         }
         #carousel__slide4{
            background-image: url("https://i.pinimg.com/originals/df/dc/04/dfdc04f3212035f82163116170041757.jpg");
            display: flex;
         }
         #carousel__slide1 .text, #carousel__slide2 .text, #carousel__slide3 .text, #carousel__slide4 .text{
            color:#fff;
            width: 50%;
            text-align: center;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.8);
         }

        .carousel__slide:nth-child(even) {
          background-color: #99f;
        }

        .carousel__slide:before {
          /*content: counter(item);*/
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate3d(-50%,-40%,70px);
          color: #fff;
          font-size: 2em;
        }

        .carousel__snapper {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          scroll-snap-align: center;
        }

        @media (hover: hover) {
          .carousel__snapper {
            animation-name: tonext, snap;
            animation-timing-function: ease;
            animation-duration: 4s;
            animation-iteration-count: infinite;
          }

          .carousel__slide:last-child .carousel__snapper {
            animation-name: tostart, snap;
          }
        }

        @media (prefers-reduced-motion: reduce) {
          .carousel__snapper {
            animation-name: none;
          }
        }

        .carousel:hover .carousel__snapper,
        .carousel:focus-within .carousel__snapper {
          animation-name: none;
        }

        .carousel__navigation {
          position: absolute;
          right: 0;
          bottom: 0;
          left: 0;
          text-align: center;
        }

        .carousel__navigation-list,
        .carousel__navigation-item {
          display: inline-block;
        }

        .carousel__navigation-button {
          display: inline-block;
          width: 1.5rem;
          height: 1.5rem;
          background-color: #333;
          background-clip: content-box;
          border: 0.25rem solid transparent;
          border-radius: 50%;
          font-size: 0;
          transition: transform 0.1s;
        }

        .carousel::before,
        .carousel::after,
        .carousel__prev,
        .carousel__next {
          position: absolute;
          top: 0;
          margin-top: 37.5%;
          width: 4rem;
          height: 4rem;
          transform: translateY(-50%);
          border-radius: 50%;
          font-size: 0;
          outline: 0;
        }

        .carousel::before,
        .carousel__prev {
          left: -1rem;
        }

        .carousel::after,
        .carousel__next {
          right: -1rem;
        }

        .carousel::before,
        .carousel::after {
          content: '';
          z-index: 1;
          background-color: #333;
          background-size: 1.5rem 1.5rem;
          background-repeat: no-repeat;
          background-position: center center;
          color: #fff;
          font-size: 2.5rem;
          line-height: 4rem;
          text-align: center;
          pointer-events: none;
        }

        .carousel::before {
          background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        .carousel::after {
          background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        </style>

        <!-- Main Container -->
@endsection
