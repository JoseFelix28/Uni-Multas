<div class="section-history">
    <div class="">
        <p class="history-text">HISTORIAL</p>

    </div>

<div class="container-history">

<div class="box-history">
    <h2>Touch (condition)</h2>
    <p class="info">This module will only be loaded if this device supports touch events.</p>
    <div data-module="view/vanillaJS" data-condition="touch">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>GPS (condition)</h2>
    <p class="info">This module will only be loaded if this device supports GPS.</p>
    <div data-module="view/vanillaJS" data-condition="gps">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>!3G (condition)</h2>
    <p class="info">This module will only be loaded if NO cell connection (2G/3G/4G) was detected.</p>
    <div data-module="view/vanillaJS" data-condition="!cell">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>WIFI (extend)</h2>
    <p class="info">The extended version of this module will be loaded if WIFI was detected, otherwise the default version.</p>
    <div data-module="view/vanillaJS" data-extend="wifi">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>Large (extend)</h2>
    <p class="info">The extended version of this Backbone View will be loaded for <code>large</code> screens (e.g. <code>min-width: 1200px</code>), otherwise the default version.</p>
    <div data-module="view/backboneView" data-extend="large">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>Media query (matchMedia)</h2>
    <p class="info">This module will only be loaded if media query applies: <code>screen and (max-width:1200px)</code>.</p>
    <div data-module="view/vanillaJS" data-matchMedia="screen and (max-width:1200px)">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>Element query (matchMediaElement)</h2>
    <p class="info">This module will only be loaded if element query applies: <code>(min-width:800px)</code>.</p>
    <div data-module="view/vanillaJS" data-matchMediaElement="(min-width:800px)">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>Maria</h2>
    <p class="info">This module is built with Maria.</p>
    <div data-module="view/mariaView">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>

<div class="box-history">
    <h2>Flight</h2>
    <p class="info">This module is built with Flight.</p>
    <div data-module="view/flightView">
        <p>Fallback content (no module was loaded).</p>
    </div>
</div>
</div>

</div>