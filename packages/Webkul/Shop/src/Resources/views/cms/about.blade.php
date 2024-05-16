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
        /* background-image: url(data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='487' height='243.5' viewBox='0 0 1600 800' style='&%2310; opacity: .45;&%2310;'%3E%3Cpath fill='%23fdb9a0' d='M1102.5 734.8c2.5-1.2 24.8-8.6 25.6-7.5.5.7-3.9 23.8-4.6 24.5-.2.3-16-12.3-21-17zm123.8-505.7c0-.1-4.9-9.4-7-14.2-.1-.3-.3-1.1-.4-1.6-.1-.4-.3-.7-.6-.9-.3-.2-.6-.1-.8.1l-13.1 12.3c-.2.2-.3.5-.4.8 0 .3 0 .7.2 1 .1.1 1.4 2.5 2.1 3.6 2.4 3.7 6.5 12.1 6.5 12.2.2.3.4.5.7.6.3 0 .5-.1.7-.3 0 0 1.8-2.5 2.7-3.6 1.5-1.6 3-3.2 4.6-4.7 1.2-1.2 1.6-1.4 2.1-1.6.5-.3 1.1-.5 2.5-1.9.4-.5.5-1.3.2-1.8zM33 770.3c0-.7-.5-1.2-1.2-1.2-.1 0-.3 0-.4.1-1.6.2-14.3.1-22.2 0-.3 0-.6.1-.9.4-.2.2-.4.5-.4.9 0 .2 0 4.9.1 5.9l.4 13.6c0 .3.2.6.4.9.2.2.5.3.8.3h.1c7.3-.7 14.7-.9 22-.6.3 0 .7-.1.9-.3.2-.2.4-.6.4-.9-.1-6.1-.1-13.2 0-19.1z' style='&%2310;'/%3E%3Cpath fill='%23fee272' d='M171.1 383.4c1.3-2.5 14.3-22 15.6-21.6.8.3 11.5 21.2 11.5 22.1-.1.3-20.3.1-27.1-.5zm425.3 328.4c-.1-.1-6.7-8.2-9.7-12.5-.2-.3-.5-1-.7-1.5-.2-.4-.4-.7-.7-.8-.3-.1-.6 0-.8.3L574 712c-.2.2-.2.5-.2.9 0 .3.2.7.4.9.1.1 1.8 2.2 2.8 3.1 3.1 3.1 8.8 10.5 8.9 10.6.2.3.5.4.8.4.3 0 .5-.2.6-.5 0 0 1.2-2.8 2-4.1 1.1-1.9 2.3-3.7 3.5-5.5.9-1.4 1.3-1.7 1.7-2 .5-.4 1-.7 2.1-2.4.3-.3.2-1.1-.2-1.6zm131.1-531.9c.6.2 1.3-.2 1.4-.8v-.4c.2-1.4 2.8-12.6 4.5-19.5.1-.3 0-.6-.2-.8-.2-.3-.5-.4-.8-.5-.2 0-4.7-1.1-5.7-1.3l-13.4-2.7c-.3-.1-.7 0-.9.2-.2.2-.4.4-.5.6v.1c-.8 6.5-2.2 13.1-3.9 19.4-.1.3 0 .6.2.9.2.3.5.4.8.5 5.8 1.3 12.7 2.9 18.5 4.3zm1-1.8c-.1-.1-.2-.2-.4-.2.2 0 .3.1.4.2z'/%3E%3Cg fill='%23eac5e7'%3E%3Cpath d='M699.6 472.7c-1.5 0-2.8-.8-3.5-2.3-.8-1.9 0-4.2 1.9-5 3.7-1.6 6.8-4.7 8.4-8.5 1.6-3.8 1.7-8.1.2-11.9-.3-.9-.8-1.8-1.2-2.8-.8-1.7-1.8-3.7-2.3-5.9-.9-4.1-.2-8.6 2-12.8 1.7-3.1 4.1-6.1 7.6-9.1 1.6-1.4 4-1.2 5.3.4 1.4 1.6 1.2 4-.4 5.3-2.8 2.5-4.7 4.7-5.9 7-1.4 2.6-1.9 5.3-1.3 7.6.3 1.4 1 2.8 1.7 4.3l1.5 3.3c2.1 5.6 2 12-.3 17.6-2.3 5.5-6.8 10.1-12.3 12.5-.4.2-.9.3-1.4.3zm40.8-51.3c1.5-.2 3 .5 3.8 1.9 1.1 1.8.4 4.2-1.4 5.3-3.7 2.1-6.4 5.6-7.6 9.5-1.2 4-.8 8.4 1.1 12.1.4.9 1 1.7 1.6 2.7 1 1.7 2.2 3.5 3 5.7 1.4 4 1.2 8.7-.6 13.2-1.4 3.4-3.5 6.6-6.8 10.1-1.5 1.6-3.9 1.7-5.5.2-1.6-1.4-1.7-3.9-.2-5.4 2.6-2.8 4.3-5.3 5.3-7.7 1.1-2.8 1.3-5.6.5-7.9-.5-1.3-1.3-2.7-2.2-4.1-.6-1-1.3-2.1-1.9-3.2-2.8-5.4-3.4-11.9-1.7-17.8 1.8-5.9 5.8-11 11.2-14 .4-.4.9-.6 1.4-.6zM261.3 590.9c5.7 6.8 9 15.7 9.4 22.4.5 7.3-2.4 16.4-10.2 20.4-3 1.5-6.7 2.2-11.2 2.2-7.9-.1-12.9-2.9-15.4-8.4-2.1-4.7-2.3-11.4 1.8-15.9 3.2-3.5 7.8-4.1 11.2-1.6 1.2.9 1.5 2.7.6 3.9-.9 1.2-2.7 1.5-3.9.6-1.8-1.3-3.6.6-3.8.8-2.4 2.6-2.1 7-.8 9.9 1.5 3.4 4.7 5 10.4 5.1 3.6 0 6.4-.5 8.6-1.6 4.7-2.4 7.7-8.6 7.2-15-.5-7.3-5.3-18.2-13-23.9-4.2-3.1-8.5-4.1-12.9-3.1-3.1.7-6.2 2.4-9.7 5-6.6 5.1-11.7 11.8-14.2 19-2.7 7.7-2.1 15.8 1.9 23.9.7 1.4.1 3.1-1.3 3.7-1.4.7-3.1.1-3.7-1.3-4.6-9.4-5.4-19.2-2.2-28.2 2.9-8.2 8.6-15.9 16.1-21.6 4.1-3.1 8-5.1 11.8-6 6-1.4 12 0 17.5 4 2.1 1.7 4.1 3.6 5.8 5.7z'/%3E%3Ccircle cx='1013.7' cy='153.9' r='7.1'/%3E%3Ccircle cx='1024.3' cy='132.1' r='7.1'/%3E%3Ccircle cx='1037.3' cy='148.9' r='7.1'/%3E%3Cpath d='M1508.7 297.2c-4.8-5.4-9.7-10.8-14.8-16.2 5.6-5.6 11.1-11.5 15.6-18.2 1.2-1.7.7-4.1-1-5.2-1.7-1.2-4.1-.7-5.2 1-4.2 6.2-9.1 11.6-14.5 16.9-4.8-5-9.7-10-14.7-14.9-1.5-1.5-3.9-1.5-5.3 0-1.5 1.5-1.5 3.9 0 5.3 4.9 4.8 9.7 9.8 14.5 14.8-1.1 1.1-2.3 2.2-3.5 3.2-4.1 3.8-8.4 7.8-12.4 12-1.4 1.5-1.4 3.8 0 5.3 1.5 1.4 3.9 1.4 5.3-.1 3.9-4 8.1-7.9 12.1-11.7 1.2-1.1 2.3-2.2 3.5-3.3 4.9 5.3 9.8 10.6 14.6 15.9l.2.2c1.4 1.4 3.7 1.5 5.2.2 1.7-1.2 1.8-3.6.4-5.2zM327.6 248.6l-.4-2.6c-1.5-11.1-2.2-23.2-2.3-37 0-5.5 0-11.5.2-18.5v-2.3c0-5 0-11.2 3.9-13.5 2.2-1.3 5.1-1 8.5.9 5.7 3.1 13.2 8.7 17.5 14.9 5.5 7.8 7.3 16.9 5 25.7-3.2 12.3-15 31-30 32.1l-2.4.3zm4.5-69.4c-.2 0-.3 0-.4.1-.1.1-.7.5-1.1 2.7-.3 1.9-.3 4.2-.3 6.3v2.4c-.2 6.9-.2 12.8-.2 18.3.1 12.5.7 23.5 2 33.7 11-2.7 20.4-18.1 23-27.8 1.9-7.2.4-14.8-4.2-21.3-3.9-5.5-10.9-10.6-15.9-13.3-1.4-.8-2.4-1.1-2.9-1.1zM516.3 60.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm522.6 327.8c-.1 0-.2 0-.4-.1-2.4-.7-4-.9-6.7-.7-.7 0-1.3-.5-1.4-1.2 0-.7.5-1.3 1.2-1.4 3.1-.2 4.9 0 7.6.8.7.2 1.1.9.9 1.6-.2.6-.7 1-1.2 1zm-10.2 9.7c-.5 0-1-.3-1.2-.8-.8-2.1-1.2-4.3-1.3-6.6 0-.7.5-1.3 1.2-1.3s1.3.5 1.3 1.2c.1 2 .5 3.9 1.1 5.8.2.7-.1 1.4-.8 1.6 0 .1-.2.1-.3.1zm-12-6.1c-.4 0-.8-.2-1-.5-.4-.6-.3-1.4.2-1.8 1.8-1.4 3.7-2.6 5.8-3.6.6-.3 1.4 0 1.7.6.3.6 0 1.4-.6 1.7-1.9.9-3.7 2-5.3 3.3-.2.2-.5.3-.8.3zm6.4-9.1c-.5 0-.9-.3-1.2-.7-.5-1-1.2-1.9-2.4-3.4-.3-.4-.7-.9-1.1-1.4-.4-.6-.3-1.4.2-1.8.6-.4 1.4-.3 1.8.2.4.5.8 1 1.1 1.4 1.3 1.6 2.1 2.6 2.7 3.9.3.6 0 1.4-.6 1.7-.1.1-.3.1-.5.1zm6.2-.3c-.3 0-.5-.1-.8-.2-.6-.4-.7-1.2-.3-1.8 1.2-1.7 2.3-3.4 3.3-5.2.3-.6 1.1-.9 1.7-.5.6.3.9 1.1.5 1.7-1 1.9-2.2 3.8-3.5 5.6-.2.2-.5.4-.9.4zm310 196.4c-1.4 0-2.9-.2-4.5-.7-8.4-2.7-16.6-12.7-18.7-20-.4-1.4-.7-2.9-.9-4.4-8.1 3.3-15.5 10.6-15.4 21 0 1.5-1.2 2.7-2.7 2.8-1.5 0-2.7-1.2-2.7-2.7-.1-6.7 2.4-12.9 7-18 3.6-4 8.4-7.1 13.7-8.8.5-6.5 3.1-12.9 7.4-17.4 7-7.4 18.2-8.9 27.3-10.1l.7-.1c1.5-.2 2.9.9 3.1 2.3.2 1.5-.9 2.9-2.3 3.1l-.7.1c-8.6 1.2-18.4 2.5-24 8.4-3 3.2-5 7.7-5.7 12.4 7.9-1 17.7 1.3 24.3 5.7 4.3 2.9 7.1 7.8 7.2 12.7.2 4.3-1.7 8.3-5.2 11.1-2.4 1.6-5 2.6-7.9 2.6zm-18.7-26.7c.1 1.5.4 3 .8 4.4 1.7 5.8 8.7 14.2 15.1 16.3 2.8.9 5.1.5 7.2-1.1 2.7-2.1 3.2-4.8 3.1-6.6-.1-3.2-2-6.4-4.8-8.3-5.7-3.9-14.7-5.8-21.4-4.7z'/%3E%3C/g%3E%3C/svg%3E); */
        /* background-image: radial-gradient(circle at 5% 0%, #3f9ad829 15%, transparent 35%), radial-gradient(circle at 0% 0%, rgba(144, 222, 251, 0.32) 9%, transparent 16%), radial-gradient(circle at 100% 50%, #3f9ad829 5%, transparent 30%), radial-gradient(circle at 100% 50%, rgba(144, 222, 251, 0.25) 8%, transparent 20%), radial-gradient(circle at 5% 81%, #3f9ad829 11%, transparent 24%), radial-gradient(circle at 0% 84%, #3f9ad829 2.5%, transparent 14%); */
        /* background-color: #dfdfdf; */
        background-repeat: no-repeat;
        background-size: 100%;
    }

    .containerC {
        max-width: 90%;
        margin: 45px auto;
        padding: 6rem 6rem 6rem 6rem;
        background: #3f9ad8;
        border-radius: 24px;
        /* background-image: radial-gradient(circle, rgb(255 255 255 / 16%) 10%, transparent 10%); */
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
        /* color: #1a1a1a !important; */
        /* transform: skew(0deg, 5deg); */
        text-shadow: 4px 3px 4px #0000004a;
        font-weight: 500;
        text-align:left;
    }

    .page-title-secondary {
        margin-bottom: 1rem;
        font-family: 'Poppins', sans-serif;
        font-size: 4rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: -0.4px;
        line-height: 10rem;
        color: #1a1a1a;
        margin-bottom: 20px;
        text-align:left;
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
        color: #fff;
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
        border-top: 1px solid #777;
        border-bottom: 1px solid #777;
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
        color: #777;
        font-size: 16px;
        line-height: 28px;
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
.box img,.box video {
    width: 50px;
    height: 50px;
    margin-top: 15px;
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
        .page-title {
            line-height: inherit;
            font-weight: 600 !important;
            margin-bottom: 0 !important;
            font-size:450px !important;
        }
    }

    .testDivContainer {
       background-image:radial-gradient(circle at 5% 0%, #3f9ad829 15%, transparent 35%), radial-gradient(circle at 0% 0%, rgba(144, 222, 251, 0.32) 9%, transparent 16%), radial-gradient(circle at 100% 50%, #3f9ad829 5%, transparent 30%), radial-gradient(circle at 100% 50%, rgba(144, 222, 251, 0.25) 8%, transparent 20%), radial-gradient(circle at 5% 81%, #3f9ad829 11%, transparent 24%), radial-gradient(circle at 0% 84%, #3f9ad829 2.5%, transparent 14%);
    }


    

    /* Popup box BEGIN */

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

.box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
}

.button {
  font-size: 1em;
  padding: 10px;
  color: #fff;
  border: 2px solid #06D85F;
  border-radius: 20px/50px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}
.button:hover {
  background: #06D85F;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

.hbspt-form {
    width: 100%;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}


</style>
{{-- Page Layout --}}
<x-shop::layouts>

    <div class='testDivContainer' style=''>
        <div class="containerC" style=" max-width:85%">
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


        <div class="container" style="background-color: #transparent">
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

        <div class="container" style="background-color: #transparent">
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
        <div class="container" style="background-color: #transparent">
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
        <div class="container" style="background-color: #transparent">
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
    </div>



    <div class="box">
	    <a class="button" href="#popup1">Let me Pop up</a>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h2>Here i am</h2>
            <a class="close" href="#">&times;</a>
            <div class="content">
            <script charset="utf-8" type="text/javascript" src="//js-eu1.hsforms.net/forms/embed/v2.js"></script>
<script>
  hbspt.forms.create({
    region: "eu1",
    portalId: "144669902",
    formId: "39db11a8-dbfc-48b0-9b11-7cac6a4ae26f"
  });
</script>
            </div>
        </div>
    </div>


    <!-- <div class="header">
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

    </div> -->
</x-shop::layouts>
