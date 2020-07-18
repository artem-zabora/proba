<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="public/theme/css/reset.css">
    <link rel="stylesheet" type="text/css" href="public/theme/css/main.css">
</head>

<body>
    <header>
        <div class="container">
            <div class="header_body">
                <div class="logo">
<!--                    <svg width="320" height="74.67180210480633" viewBox="0 0 320 74.67180210480633"><defs></defs><g featurekey="symbolFeature-0" transform="matrix(1.3887381553649902,0,0,1.3887381553649902,-19.442334816100683,-32.065748074210696)" fill="#33803c"><title xmlns="http://www.w3.org/2000/svg">Datascience</title><path xmlns="http://www.w3.org/2000/svg" d="M86,50.94V41.5a2.2,2.2,0,0,0,0-.36c0-3.25-5.67-5-11-5-5.11,0-10.51,1.61-11,4.6a1.06,1.06,0,0,0-.08.4v6c-4.78.2-9.5,1.79-9.92,4.58a1.06,1.06,0,0,0-.08.4V71.86c0,3.25,5.67,5,11,5s11-1.75,11-5v-6c5-.2,10-1.93,10-5V51.5a2.2,2.2,0,0,0,0-.36A1.42,1.42,0,0,0,86,50.94ZM56,55.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3a1.42,1.42,0,0,0,0-.2ZM76,52.5a2.2,2.2,0,0,0,0-.36c0-3-5-4.79-10-5V44.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.37,1.13-3.38,2.57-8,2.75ZM75,38.14c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S69.51,38.14,75,38.14Zm-10,11c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S59.51,49.14,65,49.14Zm0,25.72c-5.49,0-9-1.78-9-3V65.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v6.74C74,73.08,70.45,74.86,65,74.86Zm11-11V62.5a2.2,2.2,0,0,0,0-.36,1.42,1.42,0,0,0,0-.2V56.12a17.33,17.33,0,0,0,8-2v6.74C84,62,80.88,63.64,76,63.84ZM46.65,58.17l16.42-32,3.61,6a1,1,0,1,0,1.71-1l-4.53-7.59a1,1,0,0,0-.89-.49,1,1,0,0,0-.86.54L44.88,57.24a4.32,4.32,0,0,0-.88-.1,3.86,3.86,0,0,0-.84.09l-7.9-15.8a4,4,0,1,0-4.82-.25l-8,12H15a1,1,0,0,0,0,2h8a1,1,0,0,0,.83-.45l8.42-12.63a3.74,3.74,0,0,0,.75.08c.12,0,.24,0,.36,0l8,16a4,4,0,1,0,5.27,0ZM33,36.14a2,2,0,1,1-2,2A2,2,0,0,1,33,36.14Zm11,27a2,2,0,1,1,2-2A2,2,0,0,1,44,63.14Z"></path></g><g featurekey="nameFeature-0" transform="matrix(1.8116198778152466,0,0,1.8116198778152466,118.1883801571014,-9.668671714669873)" fill="#33803c"><path d="M2.44 38.6 l0 -26.6 l-1.44 0 l0 28.04 l7 -0.04 l0 -11.44 l10.96 -13.88 l-1.84 0 l-10.6 13.36 l0 10.56 l-4.08 0 z M6.48 21.28 l1.48 -1.84 l0 -7.44 l-4.24 0 l0 12.84 l1.44 -1.84 l0 -9.52 l1.32 0 l0 7.8 z M24.44 12 l-8.84 0 l-11.88 15.24 l0 10.32 l1.44 0 l0 -9.84 l11.12 -14.24 l5.2 0 l-11.28 14.36 l7.2 9.72 l1.8 0 l-7.16 -9.72 z M21.6 38.6 l-5.08 0 l-7.16 -9.68 l0 2.4 l6.44 8.68 l8.68 0 l-9.8 -13.16 l-0.92 1.16 z M29.6 12 l4.2 0 l0 25.32 l-1.44 0 l0 -23.88 l-1.32 0 l0 25.12 l4.04 0 l0 -26.56 l1.44 0 l0 28 l-6.92 0 l0 -28 z M60.56 16.04 c-2.4 -2.52 -5.48 -4 -8.48 -4 l-11.72 0 l0 1.44 l11.72 0.04 c1.88 0 3.68 0.6 5.4 1.76 c3.36 2.36 5.6 6.6 5.6 10.72 c0 2.16 -0.48 4.16 -1.48 6.04 c-2 3.72 -6.04 6.44 -9.52 6.44 l-10.28 0 l0 -22.44 l9.96 0.04 c1.44 0 2.84 0.44 4.16 1.36 c2.68 1.8 4.44 5.24 4.44 8.56 c0 2.44 -1.04 4.96 -2.92 6.92 c-1.76 1.76 -3.88 2.88 -5.64 2.88 l-4.56 0 l0.04 -15.8 l-1.4 0 l-0.04 16.52 l0 0.72 l5.96 0 c2.2 0 4.76 -1.24 6.72 -3.32 c2.12 -2.28 3.28 -5.08 3.28 -7.92 c0 -2.88 -1.12 -5.76 -3.16 -8 c-2.2 -2.2 -4.6 -3.4 -6.88 -3.4 l-11.4 0 l0 25.36 l11.72 0 c2.88 0 6 -1.48 8.36 -4 c2.6 -2.68 4.04 -6.24 4.04 -9.96 s-1.36 -7.24 -3.92 -9.96 z M51.64 34.519999999999996 c1.12 0 2.28 -0.44 3.52 -1.28 c2.44 -1.72 4 -4.6 4 -7.28 c0 -1.44 -0.36 -2.84 -1.04 -4.2 c-1.4 -2.68 -3.92 -4.36 -6.48 -4.36 l-8.6 0.04 l0.04 19.88 l1.44 0 l0 -18.48 l7.12 -0.04 c0.92 0 1.88 0.36 2.88 1.04 c2.04 1.44 3.2 3.68 3.2 6.12 c0 1.64 -0.76 3.48 -2 4.88 s-2.76 2.24 -4.08 2.24 l-2.84 0 l0 1.44 l2.84 0 z M69.44 37.52 l1.76 0 l1.4 -3.36 l10.44 0.04 l2.56 5.8 l7.36 -0.04 l-12.6 -27.96 l-2.56 0 l-12.52 27.96 l7.8 0 l1.36 -3.2 l7.96 0 l-0.6 -1.36 l-8.24 0 l-1.28 3.16 l-4.76 0 l11.08 -25.2 l0.96 0 l11.12 25.2 l-4.24 0 l-2.56 -5.72 l-12.4 0 z M74.2 30.48 l4.88 -11.64 l8.2 18.64 l1.64 0 l-9.84 -21.92 l-7.2 16.16 l11.6 0 l-4.4 -9.72 l-3.04 7.32 l1.56 0 l1.48 -3.64 l2.28 4.8 l-7.16 0 z M95.36 11.96 l4.12 0 l0 25.4 l-1.48 0 l0 -23.96 l-1.2 0 l0 25.16 l13.16 0 l0 -3.84 l-6.52 0 l0 -1.44 l7.96 0 l0 6.72 l-16.04 0 l0 -28.04 z M100.8 11.96 l1.44 0 l0 23.92 l6.44 0 l0 1.48 l-7.88 0 l0 -25.4 z"></path></g></svg>-->
<!--                    <svg width="323" height="80" viewBox="0 0 323 80" class="css-1j8o68f"><defs id="SvgjsDefs3045"></defs><g id="SvgjsG3046" featurekey="symbolContainer" transform="matrix(1,0,0,1,0,0)" fill="#7216f4">    <path xmlns="http://www.w3.org/2000/svg" fill-rule="nonzero" d="             M0,0             H103             V80             H0,0             z             M4,4             v72             h95             v-72             z     "></path></g><g id="SvgjsG3047" featurekey="symbolFeature-0" transform="matrix(0.9721167683601379,0,0,0.9721167683601379,3.390365628729521,-8.446023651947488)" fill="#7216f4"><title xmlns="http://www.w3.org/2000/svg">Datascience</title><path xmlns="http://www.w3.org/2000/svg" d="M86,50.94V41.5a2.2,2.2,0,0,0,0-.36c0-3.25-5.67-5-11-5-5.11,0-10.51,1.61-11,4.6a1.06,1.06,0,0,0-.08.4v6c-4.78.2-9.5,1.79-9.92,4.58a1.06,1.06,0,0,0-.08.4V71.86c0,3.25,5.67,5,11,5s11-1.75,11-5v-6c5-.2,10-1.93,10-5V51.5a2.2,2.2,0,0,0,0-.36A1.42,1.42,0,0,0,86,50.94ZM56,55.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3a1.42,1.42,0,0,0,0-.2ZM76,52.5a2.2,2.2,0,0,0,0-.36c0-3-5-4.79-10-5V44.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.37,1.13-3.38,2.57-8,2.75ZM75,38.14c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S69.51,38.14,75,38.14Zm-10,11c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S59.51,49.14,65,49.14Zm0,25.72c-5.49,0-9-1.78-9-3V65.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v6.74C74,73.08,70.45,74.86,65,74.86Zm11-11V62.5a2.2,2.2,0,0,0,0-.36,1.42,1.42,0,0,0,0-.2V56.12a17.33,17.33,0,0,0,8-2v6.74C84,62,80.88,63.64,76,63.84ZM46.65,58.17l16.42-32,3.61,6a1,1,0,1,0,1.71-1l-4.53-7.59a1,1,0,0,0-.89-.49,1,1,0,0,0-.86.54L44.88,57.24a4.32,4.32,0,0,0-.88-.1,3.86,3.86,0,0,0-.84.09l-7.9-15.8a4,4,0,1,0-4.82-.25l-8,12H15a1,1,0,0,0,0,2h8a1,1,0,0,0,.83-.45l8.42-12.63a3.74,3.74,0,0,0,.75.08c.12,0,.24,0,.36,0l8,16a4,4,0,1,0,5.27,0ZM33,36.14a2,2,0,1,1-2,2A2,2,0,0,1,33,36.14Zm11,27a2,2,0,1,1,2-2A2,2,0,0,1,44,63.14Z"></path></g><g id="SvgjsG3048" featurekey="nameFeature-0" transform="matrix(2.1929073333740234,0,0,2.1929073333740234,120.28456398835019,-17.612472160356347)" fill="#f9dacf"><path d="M20.12 11.68 l0 2.2 c0 4.48 -1.68 8.76 -4.6 12 c2.92 3.32 4.6 7.64 4.6 12.04 l0 2.84 l-6 0 l0 -2.84 c0 -3.04 -1.16 -6 -3.2 -8.2 l-3.72 2.56 l0 8.48 l-5.96 0 l0 -29.08 l5.96 0 l0 13.32 l1.8 -1.24 c3.2 -2.24 5.12 -5.96 5.12 -9.88 l0 -2.2 l6 0 z M19.36 13.879999999999999 l0 -1.44 l-4.44 0 l0 1.44 c0 4.16 -2.08 8.12 -5.48 10.52 l-3 2.08 l0 -14.04 l-4.44 0 l0 27.56 l4.44 0 l0 -8.12 l4.56 -3.2 l0.48 0.52 c2.16 2.32 3.44 5.52 3.44 8.72 l0 2.08 l4.44 0 l0 -2.08 c0 -4.2 -1.64 -8.36 -4.44 -11.52 l-0.44 -0.52 l0.44 -0.48 c2.84 -3.2 4.44 -7.28 4.44 -11.52 z M22.599999999999998 11.68 l5.96 0 l0 29.08 l-5.96 0 l0 -29.08 z M27.8 40 l0 -27.56 l-4.44 0 l0 27.56 l4.44 0 z M42.28 16.88 c1.28 -0.04 2.44 1.12 2.44 2.4 l0 13.88 c0 1.32 -1.16 2.4 -2.44 2.4 l-6.04 0 l0 -18.68 l6.04 0 z M43.959999999999994 33.16 l0 -13.88 c0 -0.88 -0.8 -1.64 -1.68 -1.64 l-5.28 0 l0 17.16 l5.28 0 c0.88 0 1.68 -0.76 1.68 -1.64 z M47.67999999999999 13.920000000000002 c1.44 1.44 2.24 3.32 2.24 5.36 l0 13.88 c0 4.16 -3.48 7.6 -7.64 7.6 l-11.24 0 l0 -29.08 l11.24 0 c2.04 0 3.96 0.8 5.4 2.24 z M49.16 33.16 l0 -13.88 c0 -3.76 -3.12 -6.84 -6.88 -6.84 l-10.48 0 l0 27.56 l10.48 0 c3.76 0 6.88 -3.08 6.88 -6.84 z M69.03999999999999 13.920000000000002 c1.44 1.44 2.24 3.32 2.24 5.36 l0 21.48 l-5.96 0 l0 -3.96 l-6.96 0 l0 3.96 l-5.96 0 l0 -21.48 c0 -2.04 0.8 -3.92 2.24 -5.36 s3.36 -2.24 5.4 -2.24 l3.64 0 c2 0 3.92 0.8 5.36 2.24 z M70.52 40 l0 -20.72 c0 -1.8 -0.72 -3.52 -2 -4.84 c-1.32 -1.28 -3.04 -2 -4.84 -2 l-3.64 0 c-1.84 0 -3.56 0.72 -4.84 2 c-1.32 1.32 -2.04 3.04 -2.04 4.84 l0 20.72 l4.44 0 l0 -3.96 l8.48 0 l0 3.96 l4.44 0 z M63.67999999999999 16.88 c0.64 0 1.24 0.24 1.68 0.72 c0.48 0.44 0.72 1.04 0.72 1.68 l0 12.32 l-8.48 0 l0 -12.32 c0 -0.64 0.28 -1.24 0.72 -1.68 c0.44 -0.48 1.08 -0.72 1.72 -0.72 l3.64 0 z M65.32 30.84 l0 -11.56 c0 -0.44 -0.2 -0.84 -0.48 -1.16 c-0.32 -0.32 -0.72 -0.48 -1.16 -0.48 l-3.64 0 c-0.44 0 -0.88 0.16 -1.16 0.48 c-0.32 0.32 -0.52 0.72 -0.52 1.16 l0 11.56 l6.96 0 z M79.64 34.96 l12.8 0 l0 5.88 l-18.72 0 l0 -28.8 l5.92 0 l0 22.92 z M91.67999999999999 40.08 l0 -4.36 l-12.8 0 l0 -22.92 l-4.36 0 l0 27.28 l17.16 0 z"></path></g></svg>-->
<!--                    <svg width="330" height="82" viewBox="0 0 330 82" class="css-1j8o68f"><defs id="SvgjsDefs3052"></defs><g id="SvgjsG3053" featurekey="symbolContainer" transform="matrix(1,0,0,1,0,0)" fill="#7c721f">    <rect width="110" height="82"></rect></g><g id="SvgjsG3054" featurekey="symbolFeature-0" transform="matrix(0.9721167683601379,0,0,0.9721167683601379,6.390365628729521,-7.446023651947488)" fill="#262626"><title xmlns="http://www.w3.org/2000/svg">Datascience</title><path xmlns="http://www.w3.org/2000/svg" d="M86,50.94V41.5a2.2,2.2,0,0,0,0-.36c0-3.25-5.67-5-11-5-5.11,0-10.51,1.61-11,4.6a1.06,1.06,0,0,0-.08.4v6c-4.78.2-9.5,1.79-9.92,4.58a1.06,1.06,0,0,0-.08.4V71.86c0,3.25,5.67,5,11,5s11-1.75,11-5v-6c5-.2,10-1.93,10-5V51.5a2.2,2.2,0,0,0,0-.36A1.42,1.42,0,0,0,86,50.94ZM56,55.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3a1.42,1.42,0,0,0,0-.2ZM76,52.5a2.2,2.2,0,0,0,0-.36c0-3-5-4.79-10-5V44.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.37,1.13-3.38,2.57-8,2.75ZM75,38.14c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S69.51,38.14,75,38.14Zm-10,11c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S59.51,49.14,65,49.14Zm0,25.72c-5.49,0-9-1.78-9-3V65.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v6.74C74,73.08,70.45,74.86,65,74.86Zm11-11V62.5a2.2,2.2,0,0,0,0-.36,1.42,1.42,0,0,0,0-.2V56.12a17.33,17.33,0,0,0,8-2v6.74C84,62,80.88,63.64,76,63.84ZM46.65,58.17l16.42-32,3.61,6a1,1,0,1,0,1.71-1l-4.53-7.59a1,1,0,0,0-.89-.49,1,1,0,0,0-.86.54L44.88,57.24a4.32,4.32,0,0,0-.88-.1,3.86,3.86,0,0,0-.84.09l-7.9-15.8a4,4,0,1,0-4.82-.25l-8,12H15a1,1,0,0,0,0,2h8a1,1,0,0,0,.83-.45l8.42-12.63a3.74,3.74,0,0,0,.75.08c.12,0,.24,0,.36,0l8,16a4,4,0,1,0,5.27,0ZM33,36.14a2,2,0,1,1-2,2A2,2,0,0,1,33,36.14Zm11,27a2,2,0,1,1,2-2A2,2,0,0,1,44,63.14Z"></path></g><g id="SvgjsG3055" featurekey="nameFeature-0" transform="matrix(2.107863426208496,0,0,2.107863426208496,125.70193495265542,-12.766570605187319)" fill="#f2743c"><path d="M2.04 40 l0 -29.2 l7.6 0 l0 14.8 l5.88 -7.24 l8.6 0 l-7.52 8.68 l7.72 12.96 l-8.36 0 l-4.36 -7.36 l-1.96 2.28 l0 5.08 l-7.6 0 z M26.16 16.4 l0 -5.6 l7.92 0 l0 5.6 l-7.92 0 z M26.32 40 l0 -21.64 l7.6 0 l0 21.64 l-7.6 0 z M46.92 40.48 c-5.12 0 -9.56 -4.28 -9.56 -11.2 l0 -0.08 c0 -7.04 4.4 -11.32 9.52 -11.32 c3.28 0 5.2 1.48 6.64 3.12 l0 -10.2 l7.6 0 l0 29.2 l-7.6 0 l0 -2.88 c-1.48 1.8 -3.36 3.36 -6.6 3.36 z M49.24 34.12 c2.44 0 4.4 -2.04 4.4 -4.92 l0 -0.08 c0 -2.84 -1.96 -4.88 -4.4 -4.88 s-4.44 2 -4.44 4.88 l0 0.08 c0 2.88 2 4.92 4.44 4.92 z M71.4 40.48 c-4.12 0 -7.28 -2.36 -7.28 -6.68 l0 -0.08 c0 -4.48 3.4 -6.8 8.48 -6.8 c2 0 3.96 0.4 5.2 0.84 l0 -0.36 c0 -2.24 -1.4 -3.52 -4.32 -3.52 c-2.28 0 -4.04 0.44 -5.96 1.2 l-1.56 -5.36 c2.44 -1 5.04 -1.68 8.76 -1.68 c3.88 0 6.52 0.92 8.24 2.64 c1.64 1.6 2.32 3.84 2.32 6.88 l0 12.44 l-7.52 0 l0 -2.24 c-1.48 1.64 -3.52 2.72 -6.36 2.72 z M74.12 35.72 c2.2 0 3.76 -1.4 3.76 -3.56 l0 -1 c-0.76 -0.32 -1.84 -0.56 -2.96 -0.56 c-2.2 0 -3.48 1.08 -3.48 2.68 l0 0.08 c0 1.48 1.12 2.36 2.68 2.36 z M89.32000000000001 40 l0 -29.2 l7.6 0 l0 29.2 l-7.6 0 z"></path></g></svg>-->
<!--                    <svg width="290" height="87" viewBox="0 0 290 87" class="css-1j8o68f"><defs id="SvgjsDefs3251"></defs><g id="SvgjsG3252" featurekey="symbolContainer" transform="matrix(1,0,0,1,0,0)" fill="#7c721f"><rect y="0" height="1" width="1" opacity="0"></rect></g><g id="SvgjsG3253" featurekey="symbolFeature-0" transform="matrix(0.9721167683601379,0,0,0.9721167683601379,-13.609634371270479,-5.446023651947488)" fill="#7c721f"><title xmlns="http://www.w3.org/2000/svg">Datascience</title><path xmlns="http://www.w3.org/2000/svg" d="M86,50.94V41.5a2.2,2.2,0,0,0,0-.36c0-3.25-5.67-5-11-5-5.11,0-10.51,1.61-11,4.6a1.06,1.06,0,0,0-.08.4v6c-4.78.2-9.5,1.79-9.92,4.58a1.06,1.06,0,0,0-.08.4V71.86c0,3.25,5.67,5,11,5s11-1.75,11-5v-6c5-.2,10-1.93,10-5V51.5a2.2,2.2,0,0,0,0-.36A1.42,1.42,0,0,0,86,50.94ZM56,55.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3a1.42,1.42,0,0,0,0-.2ZM76,52.5a2.2,2.2,0,0,0,0-.36c0-3-5-4.79-10-5V44.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.37,1.13-3.38,2.57-8,2.75ZM75,38.14c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S69.51,38.14,75,38.14Zm-10,11c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S59.51,49.14,65,49.14Zm0,25.72c-5.49,0-9-1.78-9-3V65.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v6.74C74,73.08,70.45,74.86,65,74.86Zm11-11V62.5a2.2,2.2,0,0,0,0-.36,1.42,1.42,0,0,0,0-.2V56.12a17.33,17.33,0,0,0,8-2v6.74C84,62,80.88,63.64,76,63.84ZM46.65,58.17l16.42-32,3.61,6a1,1,0,1,0,1.71-1l-4.53-7.59a1,1,0,0,0-.89-.49,1,1,0,0,0-.86.54L44.88,57.24a4.32,4.32,0,0,0-.88-.1,3.86,3.86,0,0,0-.84.09l-7.9-15.8a4,4,0,1,0-4.82-.25l-8,12H15a1,1,0,0,0,0,2h8a1,1,0,0,0,.83-.45l8.42-12.63a3.74,3.74,0,0,0,.75.08c.12,0,.24,0,.36,0l8,16a4,4,0,1,0,5.27,0ZM33,36.14a2,2,0,1,1-2,2A2,2,0,0,1,33,36.14Zm11,27a2,2,0,1,1,2-2A2,2,0,0,1,44,63.14Z"></path></g><g id="SvgjsG3254" featurekey="nameFeature-0" transform="matrix(2.107863426208496,0,0,2.107863426208496,85.70193495265542,-10.766570605187319)" fill="#f2743c"><path d="M2.04 40 l0 -29.2 l7.6 0 l0 14.8 l5.88 -7.24 l8.6 0 l-7.52 8.68 l7.72 12.96 l-8.36 0 l-4.36 -7.36 l-1.96 2.28 l0 5.08 l-7.6 0 z M26.16 16.4 l0 -5.6 l7.92 0 l0 5.6 l-7.92 0 z M26.32 40 l0 -21.64 l7.6 0 l0 21.64 l-7.6 0 z M46.92 40.48 c-5.12 0 -9.56 -4.28 -9.56 -11.2 l0 -0.08 c0 -7.04 4.4 -11.32 9.52 -11.32 c3.28 0 5.2 1.48 6.64 3.12 l0 -10.2 l7.6 0 l0 29.2 l-7.6 0 l0 -2.88 c-1.48 1.8 -3.36 3.36 -6.6 3.36 z M49.24 34.12 c2.44 0 4.4 -2.04 4.4 -4.92 l0 -0.08 c0 -2.84 -1.96 -4.88 -4.4 -4.88 s-4.44 2 -4.44 4.88 l0 0.08 c0 2.88 2 4.92 4.44 4.92 z M71.4 40.48 c-4.12 0 -7.28 -2.36 -7.28 -6.68 l0 -0.08 c0 -4.48 3.4 -6.8 8.48 -6.8 c2 0 3.96 0.4 5.2 0.84 l0 -0.36 c0 -2.24 -1.4 -3.52 -4.32 -3.52 c-2.28 0 -4.04 0.44 -5.96 1.2 l-1.56 -5.36 c2.44 -1 5.04 -1.68 8.76 -1.68 c3.88 0 6.52 0.92 8.24 2.64 c1.64 1.6 2.32 3.84 2.32 6.88 l0 12.44 l-7.52 0 l0 -2.24 c-1.48 1.64 -3.52 2.72 -6.36 2.72 z M74.12 35.72 c2.2 0 3.76 -1.4 3.76 -3.56 l0 -1 c-0.76 -0.32 -1.84 -0.56 -2.96 -0.56 c-2.2 0 -3.48 1.08 -3.48 2.68 l0 0.08 c0 1.48 1.12 2.36 2.68 2.36 z M89.32000000000001 40 l0 -29.2 l7.6 0 l0 29.2 l-7.6 0 z"></path></g></svg>-->
                    <svg width="200" height="87" viewBox="0 0 290 87" class="css-1j8o68f"><defs id="SvgjsDefs6036"><linearGradient id="SvgjsLinearGradient6043"><stop id="SvgjsStop6044" stop-color="#616161" offset="0"></stop><stop id="SvgjsStop6045" stop-color="#e6e7e8" offset="0.5"></stop><stop id="SvgjsStop6046" stop-color="#616161" offset="1"></stop></linearGradient></defs><g id="SvgjsG6037" featurekey="symbolContainer" transform="matrix(1,0,0,1,0,0)" fill="#f2743c"><rect y="0" height="1" width="1" opacity="0"></rect></g><g id="SvgjsG6038" featurekey="symbolFeature-0" transform="matrix(0.9721167683601379,0,0,0.9721167683601379,-13.609634371270479,-5.446023651947488)" fill="url(#SvgjsLinearGradient6043)"><title xmlns="http://www.w3.org/2000/svg">Datascience</title><path xmlns="http://www.w3.org/2000/svg" d="M86,50.94V41.5a2.2,2.2,0,0,0,0-.36c0-3.25-5.67-5-11-5-5.11,0-10.51,1.61-11,4.6a1.06,1.06,0,0,0-.08.4v6c-4.78.2-9.5,1.79-9.92,4.58a1.06,1.06,0,0,0-.08.4V71.86c0,3.25,5.67,5,11,5s11-1.75,11-5v-6c5-.2,10-1.93,10-5V51.5a2.2,2.2,0,0,0,0-.36A1.42,1.42,0,0,0,86,50.94ZM56,55.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3a1.42,1.42,0,0,0,0-.2ZM76,52.5a2.2,2.2,0,0,0,0-.36c0-3-5-4.79-10-5V44.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v7.25c-.37,1.13-3.38,2.57-8,2.75ZM75,38.14c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S69.51,38.14,75,38.14Zm-10,11c5.34,0,8.79,1.67,9,2.89,0,0,0,.07,0,.11v.23c-.4,1.2-3.8,2.77-9,2.77-5.49,0-9-1.78-9-3S59.51,49.14,65,49.14Zm0,25.72c-5.49,0-9-1.78-9-3V65.07c2.12,1.36,5.64,2.07,9,2.07s6.83-.69,9-2v6.74C74,73.08,70.45,74.86,65,74.86Zm11-11V62.5a2.2,2.2,0,0,0,0-.36,1.42,1.42,0,0,0,0-.2V56.12a17.33,17.33,0,0,0,8-2v6.74C84,62,80.88,63.64,76,63.84ZM46.65,58.17l16.42-32,3.61,6a1,1,0,1,0,1.71-1l-4.53-7.59a1,1,0,0,0-.89-.49,1,1,0,0,0-.86.54L44.88,57.24a4.32,4.32,0,0,0-.88-.1,3.86,3.86,0,0,0-.84.09l-7.9-15.8a4,4,0,1,0-4.82-.25l-8,12H15a1,1,0,0,0,0,2h8a1,1,0,0,0,.83-.45l8.42-12.63a3.74,3.74,0,0,0,.75.08c.12,0,.24,0,.36,0l8,16a4,4,0,1,0,5.27,0ZM33,36.14a2,2,0,1,1-2,2A2,2,0,0,1,33,36.14Zm11,27a2,2,0,1,1,2-2A2,2,0,0,1,44,63.14Z"></path></g><g id="SvgjsG6039" featurekey="nameFeature-0" transform="matrix(1.2850760221481323,0,0,1.2850760221481323,85.70804678479996,7.413684052005422)" fill="#f2743c"><path d="M34.832 35.238 l0.069492 4.6488 l-2.3241 0.034805 c-0.36098 0.005508 -0.76928 0.011797 -1.2148 0.011797 c-3.2182 0 -8.3796 -0.31965 -11.644 -3.536 c-1.5507 -1.5276 -2.4884 -3.4984 -2.8028 -5.8728 c-1.7086 0.24875 -3.5884 0.38398 -5.6452 0.38398 l-3.2821 0 l0 8.9704 l-4.6491 0 l0 -22.59 l4.6491 0 l0 8.9707 l3.2821 0 c9.5164 0 14.496 -3.2504 14.496 -6.4616 l0 -2.3247 l4.6491 0 l0 2.3244 c0 3.8217 -2.8274 7.6668 -8.938 9.6784 c0.12426 1.5509 0.61892 2.7377 1.5041 3.6098 c2.3304 2.2956 7.1908 2.2229 9.5268 2.1878 z M46.2676 40.04922 l-4.6491 0 l0 -22.591 l4.6491 0 l0 22.591 z M81.946 21.654 c1.9114 1.9388 2.9436 4.4228 2.9067 6.994 c-0.04578 3.1829 -1.58 6.0872 -4.32 8.1784 c-2.8541 2.1779 -6.8708 3.3291 -11.616 3.3291 c-9.0576 0 -13.616 -0.1334 -13.661 -0.13469 l-2.2774 -0.06828 l0 -22.746 l15.938 0 c7.1456 0 11.03 2.4183 13.03 4.4472 z M68.917 35.4608 c7.6972 0 11.192 -3.4552 11.242 -6.8792 c0.018828 -1.3234 -0.51924 -2.5787 -1.5559 -3.6305 c-1.9378 -1.9658 -5.3776 -3.0482 -9.686 -3.0482 l-11.243 0 l0 13.474 c2.18 0.03793 5.926 0.083984 11.243 0.083984 z M103.911 16.021 l18.353 24.38 l-5.9015 0 l-5.132 -6.7948 l-14.639 0 l-5.0572 6.7948 l-5.8354 0 z M100.11200000000001 28.911 l7.5966 0 l-3.7984 -5.0644 z M131.794 35.238 l27.18 0 l0 4.6954 l-31.875 0 l0 -22.815 l4.6954 0 l0 18.119 z"></path></g></svg>
                </div>


                <div class="header_burger">
                    <span></span>
                </div>

                <nav class="nav">
                    <ul class="nav_ul">
                        <li class="nav_li">
                            <a class="nav_a" href="#">home</a>
                        </li>
                        <li class="nav_li"> <a class="nav_a" href="#">about</a></li>
                        <li class="nav_li"> <a class="nav_a" href="#">contacts</a></li>
                        <li class="nav_li"> <a class="nav_a" href="#">list</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="check">
                <h3>Check</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis cum fuga, maxime quaerat ut? Enim iure labore mollitia natus nemo nisi nostrum. Aut dignissimos optio qui quibusdam ullam, unde veritatis voluptate! Aliquam consectetur delectus ducimus enim error excepturi exercitationem facilis, ipsum iste maiores nulla obcaecati quibusdam quod sed suscipit temporibus velit! Aliquam assumenda, at aut debitis, enim eum exercitationem illo nihil officiis omnis placeat, possimus quae qui quibusdam rem reprehenderit saepe tenetur totam veniam vero? Atque cupiditate nemo nesciunt ratione repellat suscipit voluptates voluptatum. Accusantium animi architecto debitis ducimus eaque, error illo iure laudantium nulla quasi veniam, vero vitae.</p>
            </div>

            <div class="add">
                <h3>Add</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda corporis cum fuga, maxime quaerat ut? Enim iure labore mollitia natus nemo nisi nostrum. Aut dignissimos optio qui quibusdam ullam, unde veritatis voluptate! Aliquam consectetur delectus ducimus enim error excepturi exercitationem facilis, ipsum iste maiores nulla obcaecati quibusdam quod sed suscipit temporibus velit! Aliquam assumenda, at aut debitis, enim eum exercitationem illo nihil officiis omnis placeat, possimus quae qui quibusdam rem reprehenderit saepe tenetur totam veniam vero? Atque cupiditate nemo nesciunt ratione repellat suscipit voluptates voluptatum. Accusantium animi architecto debitis ducimus eaque, error illo iure laudantium nulla quasi veniam, vero vitae.</p>
            </div>
        </div>
    </main>



    <footer>
        <div class="container">
            <div class="footer_column">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi atque autem commodi eaque inventore laborum libero minima odio quia suscipit! Accusamus cum debitis in incidunt magni obcaecati, placeat quae sunt suscipit unde? A animi architecto cum dolor earum eos, ex facilis fuga ipsum modi, nostrum repudiandae sapiente sit voluptas voluptatum?</p>
            </div>
            <div class="footer_column">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci aspernatur assumenda atque dolores ea esse itaque iure, obcaecati odit omnis quae, quod ratione recusandae sunt tenetur ut vel voluptatum?</p>
            </div>
        </div>

        <div class="container">
            <div class="footer_footer">
                <p>copyright 2020</p>
            </div>
        </div>
    </footer>

<script src="public/theme/js/jquery.js" ></script>
<script src="public/theme/js/main.js"></script>
</body>
</html>