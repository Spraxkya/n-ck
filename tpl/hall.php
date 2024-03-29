<!DOCTYPE html>
<html>
<head>
    <title>Näcks Hall</title>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <link rel="icon" href="https://xn--nck-qla.com/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../tpl/styles/huset/hall.css?19" />
    <link rel="stylesheet" type="text/css" href="../tpl/styles/universal.css?19" />
</head>
<body>
    <div id="loading-screenHuset">
        <img id="loadLogo" src="../tpl/images/nack_original.svg" alt="">
        <span id="randomTip">Look for the clickable objects!</span>
    </div>
    <main id="cContainer">
        <div id="chatContainer">
            <p id="conversation"></p>
        </div>
        <img id="bckI"  class="bck" src="../tpl/images/huset/hall/hall.jpg" alt="">
        <img id="tillbaka" onclick="window.location.assign('../');" src="../tpl/images/huset/pil_rod.png" alt="">
        <svg id="doNotEnter-door" class="big-doorway" viewBox="0 0 229 497" width="11.927083333333333333333333333333%" height="53.041622198505869797225186766275%" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <filter id="shadowDoNotEnter">
                    
                    <feGaussianBlur stdDeviation="20" result="offset-blur" /> <!-- Shadow Blur Yes-->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood id="tranSvg1" flood-color="#d64b4b" flood-opacity="0" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="1" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
                <filter id="startDo">
                     <!-- Shadow Offset -->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood flood-color="#ff0000" flood-opacity="1" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="0" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
            </defs>
            <g id="doNotEnter">
                <path fill-rule="evenodd"
                d="M0.000,497.000 C0.545,495.927 1.211,494.922 2.000,494.000 C3.784,491.913 6.576,489.787 10.000,489.000 C14.511,487.963 16.575,490.009 21.000,489.000 C22.223,488.721 25.280,487.085 28.000,485.000 C30.026,483.447 31.536,481.531 34.000,480.000 C36.434,478.488 39.170,477.463 42.000,477.000 C44.888,476.527 47.611,476.665 49.000,477.000 C52.925,477.947 54.076,480.046 58.000,481.000 C59.601,481.389 62.094,481.525 65.000,481.000 C69.686,480.154 73.841,477.609 77.000,474.000 C79.067,473.939 81.040,473.937 83.000,474.000 C85.522,474.081 87.991,474.235 91.000,473.000 C91.764,472.686 92.758,472.141 93.729,471.518 C96.653,469.645 97.919,467.361 101.000,466.000 C103.394,464.942 105.113,465.294 107.512,464.554 C109.501,463.941 111.668,462.854 114.000,461.000 C114.408,460.676 116.777,458.044 119.000,457.000 C121.600,455.779 123.636,456.141 127.000,456.000 C131.057,455.830 134.818,454.719 136.000,454.000 C138.128,452.706 139.441,450.662 141.524,448.267 C143.142,446.408 144.950,444.640 146.000,444.000 C149.702,441.743 153.331,441.948 157.000,442.000 C165.450,442.119 172.043,440.723 174.000,439.000 C174.595,438.476 175.614,437.519 177.000,437.000 C178.937,436.275 180.715,436.512 183.000,437.000 C185.733,437.584 187.698,438.187 190.000,438.000 C191.710,437.861 193.200,437.410 194.000,437.000 C195.770,436.094 196.372,434.911 198.000,434.000 C200.253,432.738 202.487,432.919 204.000,433.000 C206.573,433.138 209.264,433.223 211.000,433.000 C213.666,432.658 216.430,431.417 218.000,431.000 C220.243,430.404 222.573,430.073 225.000,430.000 C226.333,307.333 227.667,184.667 229.000,62.000 C152.667,41.333 76.333,20.667 0.000,0.000 C0.000,165.667 0.000,331.333 0.000,497.000 Z" 
                />
            </g>
        </svg> 
        <svg id="profile-door" class="big-doorway" version="1.0" xmlns="http://www.w3.org/2000/svg" width="8.7%" height="37%" viewBox="0 0 167.000000 351.000000" preserveAspectRatio="none">
            <defs>
                    <filter id="shadowProfile">
                        
                        <feGaussianBlur stdDeviation="110" result="offset-blur" /> <!-- Shadow Blur -->
                        <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                        <!-- Invert the drop shadow to create an inner shadow -->
                        <feFlood id="tranSvg3" flood-color="#d64b4b" flood-opacity="0" result="color" /> <!-- Color & Opacity -->
                        <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                        <!-- Clip color inside shadow -->
                        <feComponentTransfer in="shadow" result="shadow">
                            <!-- Shadow Opacity -->
                            <feFuncA type="linear" slope="1" />
                        </feComponentTransfer>
                        <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                        <!-- Put shadow over original object -->
                    </filter>
                    <filter id="startProfile">
                         <!-- Shadow Offset -->
                        <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                        <!-- Invert the drop shadow to create an inner shadow -->
                        <feFlood flood-color="#ff0000" flood-opacity="1" result="color" /> <!-- Color & Opacity -->
                        <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                        <!-- Clip color inside shadow -->
                        <feComponentTransfer in="shadow" result="shadow">
                            <!-- Shadow Opacity -->
                            <feFuncA type="linear" slope="0" />
                        </feComponentTransfer>
                        <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                        <!-- Put shadow over original object -->
                    </filter>
                </defs>
                <g id="profile" transform="translate(0.000000,351.000000) scale(0.100000,-0.100000)"
                fill="#000000" stroke="none">
                <path d="M105 3439 c-2 -8 -9 -500 -15 -1094 -5 -594 -13 -1360 -16 -1702 -6
                -550 -5 -623 8 -628 8 -3 321 85 694 196 373 111 690 202 704 203 l25 1 0
                1319 0 1318 -670 194 c-369 107 -682 197 -697 200 -19 4 -29 2 -33 -7z"/>
                </g>
        </svg>
        <div id="vernisage-container">
            <h1 id="vernisage-title"></h1>
        </div>
        <a id="arrow1" class="flicker" href="./paintings"></a>
        <a id="arrow2" class="flicker" href="./paintings"></a>
        <a id="arrow3" class="flicker" href="./paintings"></a>
        <a id="arrow4" class="flicker" href="./paintings"></a>
        <a id="arrow5" class="flicker" href="./paintings"></a>
        <svg id="stone-door" class="big-doorway" viewBox="0 0 160.98 355" width="8.3854%" height="37.88687%" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <defs>
                <filter id="shadowStone">
                    <feGaussianBlur stdDeviation="20" result="offset-blur" /> <!-- Shadow Blur -->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood id="tranSvg2" flood-color="#d64b4b" flood-opacity="0" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="1" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
                <filter id="startStone">
                     <!-- Shadow Offset -->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood flood-color="#ff0000" flood-opacity="1" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="0" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
            </defs>
            <g id="stoneDoor">
                <path fill-rule="evenodd"
                d="M152.000,0.000 C114.000,13.333 76.000,26.667 38.000,40.000 C38.333,58.667 38.667,77.333 39.000,96.000 C37.982,96.990 36.996,97.976 36.000,99.000 C28.808,106.394 22.739,113.809 19.000,120.000 C15.095,126.467 14.927,131.273 10.000,137.000 C6.818,140.699 3.762,142.924 2.000,148.000 C0.078,153.537 1.307,157.785 2.000,163.000 C3.048,170.886 0.642,175.161 2.000,183.000 C3.311,190.570 6.522,194.294 7.000,202.000 C7.221,205.560 6.838,207.790 8.000,211.000 C8.340,211.938 8.884,213.389 9.000,215.000 C9.172,217.374 8.429,218.896 8.000,221.000 C7.279,224.537 8.597,227.026 9.000,231.000 C9.339,234.340 8.712,236.655 9.000,240.000 C9.323,243.754 10.521,248.621 13.000,254.000 C17.575,263.928 25.001,271.210 29.000,275.000 C35.023,280.708 42.663,287.959 47.000,292.000 C47.000,298.000 47.000,304.000 47.000,310.000 C45.000,310.000 43.000,310.000 41.000,310.000 C58.030,316.860 74.846,323.455 92.000,330.000 C114.717,338.668 137.078,346.889 160.000,355.000 C160.000,351.333 160.000,347.667 160.000,344.000 C159.000,343.667 158.000,343.333 157.000,343.000 C156.837,341.335 156.837,339.664 157.000,338.000 C157.166,336.302 157.501,334.631 158.000,333.000 C159.000,333.000 160.000,333.000 161.000,333.000 C160.433,299.601 159.769,266.395 159.000,233.000 C157.204,154.986 154.891,77.982 152.000,0.000 Z"
                />
            </g>
        </svg>
        <svg id="boutique-door" class="big-doorway" version="1.0" xmlns="http://www.w3.org/2000/svg" width="8.3%" height="59%" viewBox="0 0 180.000000 537.000000" preserveAspectRatio="none">
            <defs>
                <filter id="shadowBout">
                    
                    <feGaussianBlur stdDeviation="110" result="offset-blur" /> <!-- Shadow Blur -->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood id="tranSvg4" flood-color="#d64b4b" flood-opacity="0" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="1" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
                <filter id="startBout">
                     <!-- Shadow Offset -->
                    <feComposite operator="out" in="SourceGraphic" in2="offset-blur" result="inverse" />
                    <!-- Invert the drop shadow to create an inner shadow -->
                    <feFlood flood-color="#ff0000" flood-opacity="1" result="color" /> <!-- Color & Opacity -->
                    <feComposite operator="in" in="color" in2="inverse" result="shadow" />
                    <!-- Clip color inside shadow -->
                    <feComponentTransfer in="shadow" result="shadow">
                        <!-- Shadow Opacity -->
                        <feFuncA type="linear" slope="0" />
                    </feComponentTransfer>
                    <!--<feComposite operator="over" in="shadow" in2="SourceGraphic"/>-->
                    <!-- Put shadow over original object -->
                </filter>
            </defs>
            <g id="boutDoor" transform="translate(0.000000,537.000000) scale(0.100000,-0.100000)"
            fill="#000000" stroke="none">
            <path d="M990 5000 c-437 -143 -817 -265 -845 -272 -27 -6 -54 -15 -59 -19
            -10 -8 -8 -3911 2 -3921 4 -4 297 -124 652 -268 355 -144 733 -298 840 -342
            107 -44 201 -82 208 -85 9 -4 12 516 12 2581 0 1422 -3 2586 -7 2586 -5 -1
            -366 -118 -803 -260z"/>
            </g>
        </svg>
    </main>
    <script type="text/javascript" src="../tpl/scripts/universal.js" async></script>
    <script type="text/javascript" src="../tpl/scripts/huset/hall.js" async></script>
</body>
</html>