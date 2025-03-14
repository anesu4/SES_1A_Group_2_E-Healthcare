@include('layouts.app')

<style>
/**
    * ALL the UI design credit goes to:
    * https://www.sketchappsources.com/free-source/2676-calendar-template-sketch-freebie-resource.html
    */


   /* WRAPPER */

   .wrapper {
     display: grid;
     grid-template-rows: 70px 1fr 70px;
     grid-template-columns: 1fr;
     grid-template-areas: "sidebar"
                          "content";
     width: 100vw; /* unnecessary, but let's keep things consistent */
     height: 100vh;
   }

   @media screen and (min-width: 850px) {
     .wrapper {
       grid-template-columns: 200px 5fr;
       grid-template-rows: 1fr;
       grid-template-areas: "sidebar content";
     }
   }



   /* SIDEBAR */

   main {
     grid-area: content;
     padding: 48px;
   }

   sidebar {
     grid-area: sidebar;
     display: grid;
     grid-template-columns: 1fr 3fr 1fr;
     grid-template-rows: 3fr 1fr;
     grid-template-areas: "logo menu avatar"
                          "copyright menu avatar";
   }
   .logo {
     display: flex;
     align-items: center;
     justify-content: center;
   }
   .copyright {
     text-align: center;
   }
   .avatar {
     grid-area: avatar;
     display: flex;
     align-items: center;
     flex-direction: row-reverse;
   }
   .avatar__name {
     flex: 1;
     text-align: right;
     margin-right: 1em;
   }
   .avatar__img > img {
     display: block;
   }

   .copyright {
     grid-area: copyright;
   }
   .menu {
     grid-area: menu;
     display: flex;
     align-items: center;
     justify-content: space-evenly;
   }
   .logo {
     grid-area: logo;
   }
   .menu__text {
     display: none;
   }

   @media screen and (min-width: 850px) {
     sidebar {
       grid-template-areas: "logo"
                            "avatar"
                            "menu"
                            "copyright";
       grid-template-columns: 1fr;
       grid-template-rows: 50px auto 1fr 50px;
     }

     .menu {
       flex-direction: column;
       align-items: normal;
       justify-content: flex-start;
     }
     .menu__text {
       display: inline-block;
     }
     .avatar {
       flex-direction: column;
     }
     .avatar__name {
       margin: 1em 0;
     }
     .avatar__img > img {
       border-radius: 50%;
     }
   }




   /* MAIN */

   .toolbar{
     display: flex;
     justify-content: space-between;
     align-items: center;
     margin-bottom: 24px;
   }
   .calendar{}

   .calendar__week,
   .calendar__header {
     display: grid;
     grid-template-columns: repeat(7, 1fr);
   }
   .calendar__week {
     grid-auto-rows: 100px;
     text-align: right;
   }

   .calendar__header {
     grid-auto-rows: 50px;
     align-items: center;
     text-align: center;
   }

   .calendar__day {
     padding: 16px;
   }




   /* COSMETIC STYLING */

   :root {
     --red: #ED5454;
   }

   body {
     font-family: Montserrat;
     font-weight: 100;
     color: #A8B2B9;
   }

   sidebar {
     background-color: white;
     box-shadow: 5px 0px 20px rgba(0, 0, 0, 0.2);
   }

   main {
     background-color: #FCFBFC;
   }

   .avatar__name {
     font-size: 0.8rem;
   }

   .menu__item {
     text-transform: uppercase;
     font-size: 0.7rem;
     font-weight: 500;
     padding: 16px 16px 16px 14px;
     border-left: 4px solid transparent;
     color: inherit;
     text-decoration: none;
     transition: color ease 0.3s;
   }

   .menu__item--active .menu__icon {
     color: var(--red);
   }
   .menu__item--active .menu__text {
     color: black;
   }

   .menu__item:hover {
     color: black;
   }


   .menu__icon {
     font-size: 1.3rem;
   }

   @media screen and (min-width: 850px) {
     .menu__icon {
       font-size: 0.9rem;
       padding-right: 16px;
     }
     .menu__item--active {
       border-left: 4px solid var(--red);
       box-shadow: inset 10px 0px 17px -13px var(--red);
     }
   }

   .copyright {
     font-size: 0.7rem;
     font-weight: 400;
   }

   .calendar {
     background-color: white;
     border: 1px solid #e1e1e1;
   }

   .calendar__header > div {
     text-transform: uppercase;
     font-size: 0.8em;
     font-weight: bold;
   }

   .calendar__day {
     border-right: 1px solid #e1e1e1;
     border-top: 1px solid #e1e1e1;
   }

   .calendar__day:last-child {
     border-right: 0;
   }

   .toggle{
     display: grid;
     grid-template-columns: 1fr 1fr;

     text-align: center;
     font-size: 0.9em;
   }
   .toggle__option{
     padding: 16px;
     border: 1px solid #e1e1e1;
     border-radius: 8px;
     text-transform: capitalize;
     cursor: pointer;
   }
   .toggle__option:first-child {
       border-top-right-radius: 0;
       border-bottom-right-radius: 0;
   }
   .toggle__option:last-child {
       border-left: 0;
       border-top-left-radius: 0;
       border-bottom-left-radius: 0;
   }
   .toggle__option--selected{
     border-color: white;
     background-color: white;
     color: var(--red);
     font-weight: 500;
     box-shadow: 1px 2px 30px -5px var(--red);
   }
</style>

<html>
    <div class="wrapper">
        <main>
          <div class="toolbar">
            <div class="toggle">
              <div class="toggle__option">week</div>
              <div class="toggle__option toggle__option--selected">month</div>
            </div>
            <div class="current-month">June 2016</div>
            <div class="search-input">
              <input type="text" value="What are you looking for?">
              <i class="fa fa-search"></i>
            </div>
          </div>
          <div class="calendar">
            <div class="calendar__header">
              <div>mon</div>
              <div>tue</div>
              <div>wed</div>
              <div>thu</div>
              <div>fri</div>
              <div>sat</div>
              <div>sun</div>
            </div>
            <div class="calendar__week">
              <div class="calendar__day day">1</div>
              <div class="calendar__day day">2</div>
              <div class="calendar__day day">3</div>
              <div class="calendar__day day">4</div>
              <div class="calendar__day day">5</div>
              <div class="calendar__day day">6</div>
              <div class="calendar__day day">7</div>
            </div>
            <div class="calendar__week">
              <div class="calendar__day day">8</div>
              <div class="calendar__day day">9</div>
              <div class="calendar__day day">10</div>
              <div class="calendar__day day">11</div>
              <div class="calendar__day day">12</div>
              <div class="calendar__day day">13</div>
              <div class="calendar__day day">14</div>
            </div>
            <div class="calendar__week">
              <div class="calendar__day day">15</div>
              <div class="calendar__day day">16</div>
              <div class="calendar__day day">17</div>
              <div class="calendar__day day">18</div>
              <div class="calendar__day day">19</div>
              <div class="calendar__day day">20</div>
              <div class="calendar__day day">21</div>
            </div>
            <div class="calendar__week">
              <div class="calendar__day day">22</div>
              <div class="calendar__day day">23</div>
              <div class="calendar__day day">24</div>
              <div class="calendar__day day">25</div>
              <div class="calendar__day day">26</div>
              <div class="calendar__day day">27</div>
              <div class="calendar__day day">28</div>
            </div>
            <div class="calendar__week">
              <div class="calendar__day day">29</div>
              <div class="calendar__day day">30</div>
              <div class="calendar__day day">31</div>
              <div class="calendar__day day">1</div>
              <div class="calendar__day day">2</div>
              <div class="calendar__day day">3</div>
              <div class="calendar__day day">4</div>
            </div>
          </div>
        </main>
        <sidebar>
          <div class="logo">logo</div>
          <div class="avatar">
            <div class="avatar__img">
              <img src="https://picsum.photos/70" alt="avatar">
            </div>
            <div class="avatar__name">John Smith</div>
          </div>
          <nav class="menu">
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-home"></i>
              <span class="menu__text">overview</span>
            </a>
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-envelope"></i>
              <span class="menu__text">messages</span>
            </a>
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-list"></i>
              <span class="menu__text">workout</span>
            </a>
            <a class="menu__item menu__item--active" href="#">
              <i class="menu__icon fa fa-calendar"></i>
              <span class="menu__text">calendar</span>
            </a>
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-bar-chart"></i>
              <span class="menu__text">goals</span>
            </a>
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-trophy"></i>
              <span class="menu__text">achivements</span>
            </a>
            <a class="menu__item" href="#">
              <i class="menu__icon fa fa-sliders"></i>
              <span class="menu__text">measurements</span>
            </a>
          </nav>
          <div class="copyright">copyright &copy; 2018</div>
        </sidebar>
    </div>
</html>
