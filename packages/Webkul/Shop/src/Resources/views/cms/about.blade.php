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
        width: 320px;
        color: #fff;
    }

    .content__text_secondary {
        color: #000;
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
            <h1 class="page-title">About Us</h1>
            <article class="content">
                <section class="content__descriptor">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box">
                    <p class="content__text">
                        We aim to be the investors we wished we had when we started out.
                        Lightning-fast, always on your side and fundamentally helpful.
                    </p>
                    <p class="content__text">
                        Our knowledge is your knowledge. Our network is your network. Your
                        problems are our problems. We don't have all the answers, but we
                        will help you find them.
                    </p>
                </section>
            </article>
        </main>
    </div>


    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">About Us</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary">
                        We aim to be the investors we wished we had when we started out.
                        Lightning-fast, always on your side and fundamentally helpful.
                    </p>
                    <p class="content__text content__text_secondary">
                        Our knowledge is your knowledge. Our network is your network. Your
                        problems are our problems. We don't have all the answers, but we
                        will help you find them.
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
                    Our mission is simple: To provide T-shirts that define personalities and make you stand out from the crowd. 
                    </p>
                    <p class="content__text content__text_secondary">
                    We empower individuals to express their unique style & confidence through our collection of cool, bold, and vibrant design t-shirts. We understand that every individual is different, which is why we offer a diverse range of categories tailored to various interests and passions. From anime-inspired graphics to designs for football lovers, we aim to offer something for everyone.
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
                    At Zwitch Originals, we go beyond off-the-shelf options. We offer customization services where we collaborate with clients to bring their visions to life.
                    </p>
                    <p class="content__text content__text_secondary">
                    Our team works closely with each customer to understand their preferences and create a bespoke artwork that reflects their style. Please refer to our terms and conditions related to customisation.
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
    <div class="container" style="background-color: #fff;">
        <main>
            <h1 class="page-title-secondary">About Us</h1>
            <article class="content">
                <section class="content__descriptor content__descriptor_secondary">
                    <h2 class="content__title">Info</h2>
                </section>
                <section class="content__text-box content__text-box_secondary">
                    <p class="content__text content__text_secondary">
                        We aim to be the investors we wished we had when we started out.
                        Lightning-fast, always on your side and fundamentally helpful.
                    </p>
                    <p class="content__text content__text_secondary">
                        Our knowledge is your knowledge. Our network is your network. Your
                        problems are our problems. We don't have all the answers, but we
                        will help you find them.
                    </p>
                </section>
            </article>
        </main>
    </div>

    <div style="background-color: #c2edfe;">

    </div>
</x-shop::layouts>
