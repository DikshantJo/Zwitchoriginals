{{-- SEO Meta Content --}}
@push('meta')
    {{-- <meta name="title" content="{{ $page->meta_title }}" />

    <meta name="description" content="{{ $page->meta_description }}" />

    <meta name="keywords" content="{{ $page->meta_keywords }}" /> --}}
@endPush
<style>
    @import url("https://fonts.googleapis.com/css2?family=Anton&family=Montserrat:wght@300;400&display=swap");

    *,
    *::after,
    *::before {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    *::selection {
        color: #dfdfdf;
        background-color: #000;
    }

    html {
        font-size: 62.5%;
    }

    body {
        min-height: 100vh;
        font-family: "Montserrat", sans-serif;
        font-size: 1.5rem;
        line-height: 1.5;
        font-weight: 300;
        color: #000;
        /* background-color: #dfdfdf; */
    }

    .container {
        max-width: 90%;
        margin: 0 auto;
        padding: 6rem 6rem 6rem 6rem;
        background: #3f9ad8;
        border-radius: 24px;
        background-image: radial-gradient(circle, rgb(255 255 255 / 16%) 10%, transparent 10%);
    }

    .nav {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        padding: 8rem 0 6rem 0;
    }

    @media only screen and (max-width: 580px) {
        .nav {
            padding-bottom: 2rem;
        }
    }

    .nav__list {
        display: flex;
        gap: 16rem;
        list-style: none;
    }

    @media only screen and (max-width: 920px) {
        .nav__list {
            gap: 6rem;
        }
    }

    @media only screen and (max-width: 580px) {
        .nav__list {
            gap: 4rem;
        }
    }

    .nav__link {
        text-decoration: none;
        color: #000;
        transition: color 0.2s ease;
    }

    .nav__link:hover {
        color: #949494;
    }

    .nav__link--active {
        color: #616161;
    }

    .nav__link--active:hover {
        color: #616161;
    }

    @media only screen and (max-width: 580px) {
        .nav__copy {
            display: none;
        }
    }

    .page-title {
        margin-bottom: 8rem;
        font-family: 'Poppins', sans-serif;
        font-size: 16rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: -0.4px;
        line-height: 16rem;
        color: #fff;
    }

    .page-title-secondary {
        margin-bottom: 0rem;
        font-family: 'Poppins', sans-serif;
        font-size: 6rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: -0.4px;
        line-height: 10rem;
        color: #1a1a1a;
    }

    @media only screen and (max-width: 760px) {
        .page-title {
            margin-bottom: 6rem;
            font-size: 8rem;
        }
    }

    @media only screen and (max-width: 580px) {
        .page-title {
            margin-bottom: 4rem;
            font-size: 7rem;
        }
    }

    @media only screen and (max-width: 370px) {
        .page-title {
            margin-bottom: 0;
            font-size: 5rem;
        }
    }

    .content {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    @media only screen and (max-width: 760px) {
        .content {
            flex-direction: column;
            justify-content: flex-start;
            align-items: stretch;
        }
    }

    .content__descriptor {
        width: 14%;
        border-top: 1px solid #fff;
        padding-top: 4rem;
        color: #fff;
    }

    .content__descriptor_secondary {
        width: 14%;
        border-top: 1px solid #000;
        padding-top: 4rem;
        color: #000;
    }

    @media only screen and (max-width: 760px) {
        .content__descriptor {
            width: 100%;
            padding: 2rem 0;
            border-top: none;
        }
    }

    .content__title {
        font-size: 1.5rem;
        font-weight: 700;
    }

    .content__text-box {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-end;
        gap: 2rem;
        width: 50%;
        border-top: 1px solid #fff;
        border-bottom: 1px solid #fff;
        margin-right: 10rem;
        padding: 4rem 0;
    }

    .content__text-box_secondary {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-end;
        gap: 2rem;
        width: 50%;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        margin-right: 10rem;
        padding: 4rem 0;
    }

    @media only screen and (max-width: 920px) {
        .content__text-box {
            margin-right: 0;
        }
    }

    @media only screen and (max-width: 760px) {
        .content__text-box {
            width: 100%;
            padding: 2rem 0;
        }
    }

    @media only screen and (max-width: 580px) {
        .content__text-box {
            border-bottom: none;
        }
    }

    .content__text {
        width: 520px;
        color: #fff;
    }

    .content__text_secondary {
        color: #000;
    }

    :root {
    --red: hsl(0, 78%, 62%);
    --cyan: hsl(180, 62%, 55%);
    --orange: hsl(34, 97%, 64%);
    --blue: hsl(212, 86%, 64%);
    --varyDarkBlue: hsl(234, 12%, 34%);
    --grayishBlue: hsl(229, 6%, 66%);
    --veryLightGray: hsl(0, 0%, 98%);
    --weight1: 200;
    --weight2: 400;
    --weight3: 600;
}

.attribution { 
    font-size: 11px; text-align: center; 
}
.attribution a { 
    color: hsl(228, 45%, 44%); 
}

h1:first-of-type {
    font-weight: var(--weight1);
    color: var(--varyDarkBlue);
}

h1:last-of-type {
    color: var(--varyDarkBlue);
}

@media (max-width: 400px) {
    h1 {
        font-size: 1.5rem;
    }
}

.header {
    text-align: center;
    line-height: 0.8;
    margin-bottom: 50px;
    margin-top: 100px;
}

.header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
}

.box p {
    color: var(--grayishBlue);
}

.box {
    border-radius: 5px;
    box-shadow: 0px 30px 40px -20px var(--grayishBlue);
    padding: 30px;
    margin: 20px;  
}

img {
    float: right;
}

@media (max-width: 450px) {
    .box {
        height: 200px;
    }
}

@media (max-width: 950px) and (min-width: 450px) {
    .box {
        text-align: center;
        height: 180px;
    }
}

.cyan {
    border-top: 3px solid var(--cyan);
}
.red {
    border-top: 3px solid var(--red);
}
.blue {
    border-top: 3px solid var(--blue);
}
.orange {
    border-top: 3px solid var(--orange);
}

h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
}
img, video {
    width: 50px;
    height: 50px;
    margin-top: 25px;
}

@media (min-width: 950px) {
    .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .box-down {
        position: relative;
        top: 150px;
    }
    .box {
        width: 20%;
        border-radius: 16px;
    }
    .header p {
        width: 45%;
    }
    .box h2 {
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 16px;
    }
    
}

.header h1 {
    font-size:24px;
    margin: 16px 0;
    font-weight: 600;
    margin-bottom: 20px;
}

    @media only screen and (max-width: 580px) {
        .content__text {
            width: 100%;
        }
        .container {
            padding: 10px !important;
        }
        .page-title-secondary {
            font-size:24px;
        }
    }
</style>
{{-- Page Layout --}}
<x-shop::layouts>

    <div class="container" style="margin-top: 45px;">
        <main>
            <h1 class="page-title" style='color:#fff'>Zwitch Originals</h1>
            <article class="content">
                <section class="content__descriptor">
                    <h2 class="content__title">About us</h2>
                </section>
                <section class="content__text-box">
                    <p class="content__text">
                        Welcome to Zwitch Originals, where streetwear meets individuality. 
                        We're more than thrilled to introduce you to a world of personalized fashion, where every garment tells a unique story.
                    </p>
                    <p class="content__text">
                        As an emerging apparel brand, we specialize in crafting limited edition, high-quality T-shirts adorned with one-of-a-kind, modern, and captivating designs.
                        Our journey begins with a passion for creativity, a commitment to quality, and a vision to redefine casual wear.
                    </p>
                </section>
            </article>
        </main>
    </div>


    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">Our Vision:</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Vision</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary">
                        Our vision is to ignite individuality and creativity through our streetwear brand, crafting apparel that merges urban edge with timeless style. At Zwitch Originals, we believe that clothing is not just a garment; it should reflect your personality.
                    </p>
                    <p class="content__text content__text_secondary">
                    We aim to empower our community to express themselves fearlessly, embrace diversity, and make a bold statement wherever they go. That's why we meticulously design artwork that resonates with each customer's unique identity. Whether you're an anime enthusiast, a music lover, an artist, or a sports fanatic, we have a design that speaks to you.
                    </p>
                </section>
            </article>
        </main>
    </div>

    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">Our Mission:</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary">
                        Our mission is simple: To provide T-shirts that define personalities and make you stand out from the crowd. We empower individuals to express their unique style & confidence through our collection of cool, bold, and vibrant design t-shirts.
                    </p>
                    <p class="content__text content__text_secondary">
                    We understand that every individual is different, which is why we offer a diverse range of categories tailored to various interests and passions. From anime-inspired graphics to designs for football lovers, we aim to offer something for everyone.
                    </p>
                </section>
            </article>
        </main>
    </div>
    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">Customization:</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary">
                        At Zwitch Originals, we go beyond off-the-shelf options. We offer customization services where we collaborate with clients to bring their visions to life. Our team works closely with each customer to understand their preferences and create a bespoke artwork that reflects their style. Please refer to our terms and conditions related to customisation.
                    </p>
                </section>
            </article>
        </main>
    </div>
    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">Our Promise:</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary"> 
                        We aspire to be the premier customization apparel brand pan India. 
                    </p>
                    <p class="content__text content__text_secondary">
                        Our goal is to provide a diverse, trendy, and effortlessly cool T-shirt collection that caters to every occupation and passion. With Zwitch Originals, you can say goodbye to ordinary T-shirts and hello to individuality.
                    </p>
                </section>
            </article>
        </main>
    </div>

    <div class="header">
        <h1>Stylish, Seamless Shopping</h1>
        <h1>Empowered by Innovation</h1>
        <p>Our cutting-edge tools harness vast product insights, ensuring your shopping journey is seamless and satisfying.</p>
    </div>
    <div class="row1-container">
        <div class="box box-down cyan">
            <h2>Free shipping</h2>
            <p>Enjoy complimentary shipping on all orders, no minimum purchase required.</p>
            <img src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
        </div>

        <div class="box red">
            <h2>Quality products</h2>
            <p>Discover top-notch products crafted with precision and care for unparalleled quality.</p>
            <img src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
        </div>

        <div class="box box-down blue">
            <h2>Sustainable practise</h2>
            <p>Embrace eco-friendly practices with our sustainable approach to production and sourcing.</p>
            <img src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
        </div>
    </div>
    <div class="row2-container">
        <div class="box orange">
            <h2>24/7 support</h2>
            <p>Get round-the-clock assistance from our dedicated support team, available whenever you need help.</p>
            <img src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
        </div>
    </div>

    <div style="background-color: #c2edfe;">

    </div>
</x-shop::layouts>
