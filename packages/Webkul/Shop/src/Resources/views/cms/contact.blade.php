{{-- SEO Meta Content --}}
@push('meta')
    {{-- <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" /> --}}
@endPush
<style>
    * {
      font-family: 'Poppins', sans-serif;
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .displayFlex {
      display: flex;
      flex-wrap: wrap;
    }

    .w-80 {
      width: 80%;
      margin: auto;
    }

    .mt-8 {
      margin-top: 10vh;
    }

    .mt-6 {
      margin-top: 6vh;
    }

    body {
      /* display: flex;
           align-items: center;
           justify-content: center; */
      min-height: 100vh;
      margin: 0;
      padding: 0;
    }

    .contactUsParent {
      /* background: linear-gradient(90deg, rgb(255, 238, 238) 0%, rgb(234, 240, 250) 51%, rgb(255, 240, 252) 79%, rgb(248, 253, 255) 100%) !important; */
      background-color: #3f9ad8;
      padding: 100px;
      /* border-radius: 20px; */
      background-image: radial-gradient(circle, rgb(255 255 255 / 16%) 10%, transparent 10%);
      background-size: 30px 30px;

    }

    .accordion {
      background-color: #fff;
      color: #444;
      cursor: pointer;
      padding: 18px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 15px;
      transition: 0.4s;
      /* border-radius: 8px; */
      /* border-bottom: 1px solid #ddd; */
      color: #1a1a1a;
      font-weight: 600;
      font-size: 18px;
    }

    /* .active {
            color: #1a1a1a;
            font-weight: 600;
            font-size: 18px;
        } */

    .panel {
      padding: 35px 18px 0 18px;
      background-color: white;
      max-height: 0px;
      overflow: hidden;
      transition: max-height 0.2s ease-out;
    }

    .sectionIContactUS {
      margin: 0 20px 0 0;
      width: 35%;
    }

    .AccordianContainer {
      display: flex;
      flex-direction: column;
      width: 50vw;
      margin: 0 20px 00px 20px;
    }

    .ContactUsPrimary {
      width: 100%;
      text-align: center;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .ContactUsPrimary h1 {
      font-size: 74px;
      color: #fff;
      font-weight: 600;
    }

    .ContactUsPrimary p {
      font-size: 16px;
      line-height: 32px;
      color: #f2f2f2;
    }

    /* .ContactUsPrimary p:nth-child(1) {
            margin-top: 24px;
        } */

    .sectionIContactUS h2,
    .sectionIIContactUS h2,
    .sectionIIIContactUS h2 {
      font-size: 18px;
    }

    .sectionIContactUS p,
    .sectionIIContactUS p,
    .sectionIIIContactUS p {
      font-size: 14px;
      color: #777;
      margin-top: 5px;
    }


    .FAQContainer {
      padding: 40px 100px;
      /* width: 100%; */
      margin: 0;
    }

    .FAQsubTitle {
      font-size: 34px;
      margin-bottom: 8px;
      font-weight: 600;
      text-align: left;
      line-height: 52px;
    }

    .FAQsubTitleDescription {
      font-size: 16px;
      line-height: 32px;
      margin-top: 10px;
      margin-bottom: 38px;
      display: block;
      /* width: 65%; */
      text-align: left;
      color: #777;
    }

    .ContactUsSubContainer {
      /* padding: 25px 45px 30px 45px; */
      /* background: #fafafa; */
      border-radius: 12px;
      /* width: 65%; */
      margin: auto;
      margin-top: 5vh;
      /* min-height: 15vh; */
      display: flex;
      /* align-items: center; */
      justify-content: center;
    }

    .emailUsCTA {
      background: #fff;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      margin-top: 25px;
      display: block;
      width: 200px;
      margin-left: auto;
      margin-right: auto;
      font-weight: 600;
    }

    .FAQSmallerTitle {
      font-size: 12px;
      text-align: left;
    }


    /* asdasd */
    .card {
      width: 275px;
      height: 275px;
      background: #fff;
      border-radius: 1em;
      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      gap: 0.4em;
      align-items: flex-start;
      padding: 1em 1.5em;
      transition: all 0.5s ease;
      box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
      margin: 15px;
    }

    .card:hover {
      background: #f1f1f1;
    }

    .card-icon svg {
      height: 2rem;
      width: 2rem;
    }

    .card-body {
      text-align: justify;
    }

    .card h2 {
      font-size: 18px;
    }

    .card p {
      font-size: 16px;
    }

    @media (max-width: 768px) {
      .AccordianContainer {
        width: 100%;
      }

      .w-80 {
        width: 100%;
      }

      .displayFlex {
        flex-direction: column;
        align-items: center;
      }

      .contactUsParent {
        padding: 20px;
      }

      .card {
        width: 300px;
        height: 300px;
      }

      .ContactUsPrimary p {
        font-size: 16px;
        line-height: 24px;
        color: #fff;
      }
    }


    /* 
        @import url("https://fonts.googleapis.com/css?family=Hind:300,400&display=swap");
* {
  box-sizing: border-box;
}
*::before, *::after {
  box-sizing: border-box;
} */
    /* 
body {
  margin: 0;
  padding: 0;
  font-family: "Hind", sans-serif;
  background: #fff;
  color: #4d5974;
  display: flex;
  min-height: 100vh;
} */

    .containerC {
      margin: 0 auto;
      padding: 0 4rem 4rem 4rem;
      width: 48rem;
    }

    .accordion .accordion-item {
      border-bottom: 1px solid #e5e5e5;
    }

    .accordion .accordion-item button[aria-expanded=true] {
      border-bottom: 1px solid #03b5d2;
    }

    .accordion button {
      position: relative;
      display: block;
      text-align: left;
      width: 100%;
      padding: 1em 0;
      color: #7288a2;
      font-size: 1.15rem;
      font-weight: 400;
      border: none;
      background: none;
      outline: none;
    }

    .accordion button:hover,
    .accordion button:focus {
      cursor: pointer;
      color: #03b5d2;
    }

    .accordion button:hover::after,
    .accordion button:focus::after {
      cursor: pointer;
      color: #03b5d2;
      border: 1px solid #03b5d2;
    }

    .accordion button .accordion-title {
      padding: 1em 1.5em 1em 0;
    }

    .accordion button .icon {
      display: inline-block;
      position: absolute;
      top: 18px;
      right: 0;
      width: 22px;
      height: 22px;
      border: 1px solid;
      border-radius: 22px;
    }

    .accordion button .icon::before {
      display: block;
      position: absolute;
      content: "";
      top: 9px;
      left: 5px;
      width: 10px;
      height: 2px;
      background: currentColor;
    }

    .accordion button .icon::after {
      display: block;
      position: absolute;
      content: "";
      top: 5px;
      left: 9px;
      width: 2px;
      height: 10px;
      background: currentColor;
    }

    .accordion button[aria-expanded=true] {
      color: #03b5d2;
    }

    .accordion button[aria-expanded=true] .icon::after {
      width: 0;
    }

    .accordion button[aria-expanded=true]+.accordion-content {
      opacity: 1;
      max-height: 9em;
      transition: all 200ms linear;
      will-change: opacity, max-height;
    }

    .accordion .accordion-content {
      opacity: 0;
      max-height: 0;
      overflow: hidden;
      transition: opacity 200ms linear, max-height 200ms linear;
      will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
      font-size: 1rem;
      font-weight: 300;
      margin: 2em 0;
    }


    body {
      font-family: "Poppins", sans-serif;
      color: #444;
      box-sizing: border-box;
      margin: 0px;
    }

    .containerC {
      max-width: 1200px;
      width: 100%;
      padding: 0px 45px;
      margin: auto;
    }

    /**Typeo CSS End**/
    .faq-title {
      text-align: center;
      font-size: 45px;
      font-weight: normal;
    }

    .faq-group {
      display: flex;
      flex-flow: row wrap;
      width: 100%;
    }

    .faq-group .faq-left {
      width: 38%;
    }

    .faq-group .faq-right {
      width: 58%;
      border-left: #ccc 1px solid;
      padding-left: 55px;
      margin-left: 4%;
    }

    .faq-group h3 {
      font-size: 18px;
      font-weight: 500;
      /* font-weight: normal; */
      margin: 55px 0 55px 0;
      color: #777;
    }

    .faq-group h3:first-child {
      margin-top: 0px;
    }

    .faq-btns {
      margin-bottom: 40px;
    }

    .faq-btn {
      width: 100%;
      display: inline-block;
      border: #000 1px solid;
      border-radius: 4px;
      text-align: center;
      margin: 10px 0;
      background-color: #fff;
      padding: 14px;
      text-decoration: none;
      color: #000;
      transition: 0.5s all;
    }

    .faq-btn:hover {
      background-color: #000;
      color: #fff;
    }

    .faq-item {
      width: 100%;
      margin: 20px 0px;
      border-bottom: #ebebeb 1px solid;
    }

    .faq-item .faq-label {
      position: relative;
      width: 100%;
      padding: 12px 26px 26px 0px;
      cursor: pointer;
      font-size: 16px;
      color: #000;
      user-select: none;
      -webkit-user-select: none;
      -moz-user-select: none;
      font-weight: 500;
    }

    .faq-item .faq-label i {
      width: 18px;
      height: 100%;
      position: absolute;
      right: 0px;
      top: -10px;
    }

    .faq-item .faq-label i:before {
      content: '';
      position: absolute;
      left: 0px;
      right: 0px;
      top: 0px;
      bottom: 0px;
      margin: auto;
      width: 18px;
      height: 2px;
      background-color: #000;
    }

    .faq-item .faq-label i:after {
      content: '';
      position: absolute;
      left: 0px;
      right: 0px;
      top: 0px;
      bottom: 0px;
      margin: auto;
      width: 2px;
      height: 18px;
      background-color: #000;
      transition: 0.5s all;
      -webkit-transition: 0.5s all;
    }

    .faq-item.faq-item-show .faq-label i:after {
      opacity: 0;
    }

    .faq-cont {
      transition: 0.3s all;
      overflow: hidden;
      height: 0px;
    }

    .faq-item.faq-item-show .faq-cont {
      display: block;
      padding-top: 0px;
      padding-bottom: 20px;
      overflow: auto;
      height: auto;
    }

    .faq-cont p {
      margin: 0px 0 20px 0;
    }

    .faq-cont p:last-child {
      margin-bottom: 0px;
      color: #777;
      font-size: 16px;
      line-height: 28px;
    }

    @media(max-width:992px) {
      .faq-group .faq-left {
        width: 100%;
      }

      .faq-group .faq-right {
        width: 100%;
        border-left: none;
        padding-left: 0;
        margin-left: 0;
      }

      .contactUsParent {
        padding: 100px 10px;
      }
    }




    /* Test */
    
.containerC {
 padding: 100px 200px 200px 200px;
}

.faq-drawer {
  margin-bottom: 30px;
}

.faq-drawer__content-wrapper {
  font-size: 1.25em;
  line-height: 1.4em;
  max-height: 0px;
  overflow: hidden;
  transition: 0.25s ease-in-out;
}

.faq-drawer__title {
  border-top: #dfdfdf 1px solid;
  cursor: pointer;
  display: block;
  font-size: 16px;
  font-weight: 500;
  padding: 30px 0 0 0;
  position: relative;
  margin-bottom: 0;
  transition: all 0.25s ease-out;
  color: #1a1a1a;
}

.faq-drawer__content p {
  font-size: 16px;
  line-height: 26px;
  margin-top: 14px;
  color: #777;
}

.faq-drawer__title::after {
  border-style: solid;
  border-width: 1px 1px 0 0;
  content: " ";
  display: inline-block;
  float: right;
  height: 10px;
  left: 2px;
  position: relative;
  right: 20px;
  top: 2px;
  transform: rotate(135deg);
  transition: 0.35s ease-in-out;
  vertical-align: top;
  width: 10px;
  border-color:#777;
}

/* OPTIONAL HOVER STATE */
.faq-drawer__title:hover { 
  color: #4E4B52  ;
}

.faq-drawer__trigger:checked
  + .faq-drawer__title
  + .faq-drawer__content-wrapper {
  max-height: 350px;
}

.faq-drawer__trigger:checked + .faq-drawer__title::after {
  transform: rotate(-45deg);
  transition: 0.25s ease-in-out;
}

input[type="checkbox"] {
  display: none;
}

@media (max-width:1440px){
  .containerC {
    padding: 100px 0px 100px 0px;
  }
}

@media only screen and (max-width: 600px) {
  .containerC {
    padding: 25px !important;
  }
  .ContactUsPrimary h1 {
    font-size:64px;
    line-height: 65px;
    margin-bottom: 14px;
    text-align: left;
  }
  .faq-group h3:first-child {
    margin-bottom:24px;
  }
  .faq-drawer__title {
    font-size:16px;
  }
  .FAQsubTitle {
    line-height:46px;
  }
}

  </style>
{{-- Page Layout --}}
<x-shop::layouts>

    <div class="displayFlex contactUsParent">
        <div class="" style="width: 100%;display:flex; justify-content:center;align-items:center;">
          <div class="ContactUsPrimary">
            <h1> Contact us</h1>
            <div style="margin-top: 0px;">
              <p style="">Feel free to reach out via email or phone if you have any questions or need assistance
                with your order.</p>
              <!-- <p style="font-weight: 600; margin-top: 10px;">Customersupport@zwitchoriginals.com</p> -->
              <a class="emailUsCTA" href="mailto:support@zwitchoriginals.com">Customer Support</a>
            </div>
          </div>
          <!-- <div class="displayFlex mt-6 ContactUsSubContainer">
                    <div class="sectionIContactUS" style="width: 30%;">
                        <h2>Customer Support</h2>
                        <p>Our dedicated support team is here for you 24/7, ready to assist with any questions or concerns you may have. Feel free to reach out to us anytime!</p>
                    </div>
                    <div class="sectionIIContactUS" style="width: 35%;">
                        <h2>Feeback and suggestions</h2>
                        <p>We value your feedback, and we are continuously working on improving our services to better meet your needs</p>
                    </div>
                    <div class="sectionIIIContactUS" style="width: 30%;">
                        <h2>Media Inquireis </h2>
                        <p>For all media-related inquiries, please reach out to us at media@zwitchoriginals.com</p>
                    </div>
                </div> -->
    
          <div class="displayFlex ContactUsSubContainer" style="flex-wrap: nowrap; display:none">
            <div class="card">
              <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection"
                  viewBox="0 0 16 16">
                  <path
                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
                  </path>
                </svg>
              </div>
              <h2>Customer Support</h2>
              <p>Our dedicated support team is here for you 24/7, ready to assist with any questions or concerns you may
                have. Feel free to reach out to us anytime!</p>
            </div>
            <div class="card">
              <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection"
                  viewBox="0 0 16 16">
                  <path
                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
                  </path>
                </svg>
              </div>
              <h2>Feeback and suggestions</h2>
              <p>We value your feedback, and we are continuously working on improving our services to better meet your needs
              </p>
            </div>
            <div class="card">
              <div class="card-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-collection"
                  viewBox="0 0 16 16">
                  <path
                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
                  </path>
                </svg>
              </div>
              <h2>Media Inquireis </h2>
              <p>For all media-related inquiries, please reach out to us at media@zwitchoriginals.com</p>
            </div>
          </div>
        </div>
      </div>
      <div class="" style="margin-top: 0vh;">
        <div class="containerC">
          <!-- <h2 class="faq-title">FAQs</h2> -->
          <div class="faq-group">
            <div class="faq-left">
              <div style="text-align:center; width: 100%;">
                <div class="" style="display: flex; flex-direction: column;">
                  <h1 class="FAQSmallerTitle"> FAQs</h1>
                  <p class="FAQsubTitle">Got questions? We've got answers!</p>
                  <p class="FAQsubTitleDescription">Explore our FAQ section to find answers to commonly asked questions and
                    discover solutions to your queries.</p>
                </div>
              </div>
            </div>
            <div class="faq-right">
              <h3>Shopping Information</h3>
              <div class="faq-main">
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer">What is ZWITCH all about?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Legend says.. It is a streetwear brand which is more than thrilled to introduce you to a world of personalized fashion, where every Garment and Design tells a unique story. Our designs are crafted out of love with a new designing approach.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-2">What sets ZWITCH apart from other streetwear brands?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We Do not offer any regular or random designs. Our designs are bold, vibrant, and unique, setting them apart from conventional and usual streetwear. Our t-shirts are crafted with premium quality materials, ensuring durability and comfort. We mean it when we say #getridoftheordinary Clang!</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-3">Where can I buy ZWITCH products?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Currently, <a href="www.zwitchoriginals.com">www.zwitchoriginals.com</a> is the only space where you can find our products.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-4" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-4">How often do you release new collections?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Get ready for weekly drops! Stay on the pulse of urban fashion and snag your favorites before they're gone – subscribe for early access and exclusive drops! 🤩</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-5" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-5">Can I find limited edition items in your collections?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We push the boundaries of street style with premium quality, limited-edition t-shirts. Our bold and vibrant designs are crafted to turn heads and ignite conversation. Don't miss your chance to own a unique piece of wearable art – subscribe to stay ahead of the drops!</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-6" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-6">Will you be adding more colors or sizes in the future?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We're always looking to expand our offerings! Stay tuned for updates on new colors and sizes.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-7" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-7">Will you be adding more Products in the future?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Why spill the beans so early? Let us surprise you. Stay Tuned..</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-8" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-8">Do you ship internationally?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Please Refer to our shipping policy <a href="https://zwitchoriginals.com/page/shipping-policy">https://zwitchoriginals.com/page/shipping-policy</a></p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-9" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-9">What is your return/exchange policy?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p><a href="https://zwitchoriginals.com/page/refund-policy">https://zwitchoriginals.com/page/refund-policy</a></p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-10" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-10">What sizes do you offer?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Currently, our t-shirts are available in sizes small, medium, large, and extra-large to accommodate a wide range of body types.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-11" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-11">Are your products sustainable/ethical?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We bring you fresh streetwear that's kind to the planet and people. Our premium t-shirts boast vibrant designs on ethically sourced materials. We believe in responsible fashion – join the movement! Join us in redefining streetwear with a commitment to responsibility. Look good, feel good, do good.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-12" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-12">What are the benefits of becoming a subscribed customer?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Good Question! You will have exclusive access to custom designs, amazing discounts, early Drops, etc.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-13" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-13">How long will the subscription last?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>All benefits associated with Zwitch Originals Exclusive are available for a year.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-14" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-14">What happens if I want to cancel my Subscription mid-way?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Our Exclusive subscription is non-refundable and non-transferable. 🥹</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-15" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-15">How can I stay updated on new releases and promotions?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Please subscribe to your newsletter, follow our social media accounts, or join a loyalty program for exclusive updates and offers.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-16" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-16">Do you have a physical store or pop-up events?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Currently, we have no physical store :) but yes, we would store up in pop cultural events in town.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-17" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-17">Can I collaborate with ZWITCH?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>If you're open to collaborations, contact ZWITCH ORIGINALS support team.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-18" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-18">How can I contact customer support?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>You can drop us a mail any part of time to <em>*EMAIL ADDRESS*</em>. We would reply back to you sooner than your Crush. OOPS!</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-19" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-19">What payment methods do you accept?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We accept all major credit cards, debit cards, and other secure online payment methods including UPI.</p>
                  </div>
                </div>
              </div>

              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-20" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-20">How do I take care of ZWITCH products?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>We include care instructions for your garments to help customers maintain the quality of their purchases.</p>
                  </div>
                </div>
              </div>

              </div>
    
              <h3>Customization FAQs</h3>
              <div class="faq-main">
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-customization" type="checkbox" />
                <label class="faq-drawer__title" for="faq-drawer-customization">Do you offer customizations for your T-shirt?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>Yes, we do offer customization services for our subscribed customers. Through personalized consultations, we discuss your specific requirements and preferences to create a bespoke design just for you.</p>
                  </div>
                </div>
              </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-request-customization" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-request-customization">How can I request customization for my T-shirt?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>After subscribing to our services, you can schedule a consultation with our design team. During this session, we'll gather information about your preferences, style, and any specific design elements you desire.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-limitations" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-limitations">Are there any limitations to the customization options?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>While we strive to accommodate our customers' preferences to the best of our ability, certain design elements or requests may have limitations based on technical feasibility and production capabilities.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-templates" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-templates">Do you offer any design templates for customization?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>We do not have any pre-made templates for customization as it is purely based on client ideas.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-process" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-process">What is the process for customizing a T-shirt?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>Once we've discussed your requirements and agreed on the design concept, our team will proceed with creating the custom artwork. You'll have the opportunity to review and provide feedback before finalizing the design.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-turnaround" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-turnaround">How long does it take to receive a customized T-shirt?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>The turnaround time for customized t-shirts varies depending on the complexity of the design and our current workload. However, we aim to complete the process within a reasonable timeframe and keep you informed throughout.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-terms" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-terms">What are the terms and conditions for customizations?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>Our terms and conditions outline important details such as payment terms, intellectual property rights, and revisions. We ensure transparency and fairness throughout the customization process.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-modify" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-modify">Can I cancel or modify my customization request?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>Depending on the stage of the design process, you may be able to cancel or modify your customization request. However, please note that restrictions may apply, so we encourage you to communicate any changes promptly.</p>
                      </div>
                    </div>
                  </div>

                  <div class="faq-drawer">
                    <input class="faq-drawer__trigger" id="faq-drawer-subscribe" type="checkbox" />
                    <label class="faq-drawer__title" for="faq-drawer-subscribe">How do I subscribe to your customization services?</label>
                    <div class="faq-drawer__content-wrapper">
                      <div class="faq-drawer__content">
                        <p>You can subscribe to our customization services through our website or by contacting our customer support team directly. Once subscribed, you'll gain access to exclusive benefits and personalized design consultations.</p>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>
        </div>
      </div>
          
      <div
        style="background: url('https://zwitchoriginals.com//storage/channel/1/t.jpg'); height: 50vh; display: flex; align-items: center; justify-content: center; flex-direction: column; background-size: cover;
            width: 90%;
            margin: auto;
            border-radius: 44px;"
        >
        <h2 style="color: white; margin-bottom: 20px;">Connect with us here</h2>
        <a href="mailto:support@zwitchoriginals.com" style="padding: 10px 20px; font-size: 16px;border-radius: 50px; border: none; font-weight: 500;background:#fff">Click
          Me</a>
      </div>
    
  </div>




      <script>
        let items = document.querySelectorAll(".faq-main .faq-item");
        items.forEach(function (t) {
          // alert()
          t.addEventListener("click", function (e) {
            items.forEach(function (e) {
              e !== t || e.classList.contains("faq-item-show")
                ? e.classList.remove("faq-item-show")
                : e.classList.add("faq-item-show");
            });
          });
        });
      </script>
</x-shop::layouts>