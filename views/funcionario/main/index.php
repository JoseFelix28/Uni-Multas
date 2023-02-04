<!------------ stilos ------->
<link rel="stylesheet" href="<?php echo constant('URL'); ?>libraries/jquery.jqplot/jquery.jqplot.css">
<link rel="stylesheet" href="<?php echo constant('URL'); ?>libraries/jquery.jqplot/jquery.jqplot.min.css">

<!------------ librerias ------->
<script type="text/javascript" const url=location.href;  src="libraries/jquery.jqplot/excanvas.js"></script>
<script type="text/javascript" const url=location.href;  src="libraries/jquery.jqplot/jquery.jqplot.min.js"></script>
<script type="text/javascript" const url=location.href; src="libraries/jquery.jqplot/jquery.min.js"></script>
<script type="text/javascript" const url=location.href; src="libraries/jquery.jqplot/jquery.jqplot.js"></script>



<!-- Main -->


<div id="main-container">
    <div class="multas-container">
        <h1>Dashboard</h1>
                <div id="chart1">

                </div>
    </div>
</div>
<script type="text/javascript" const url=location.href;>
$(document).ready(function () {
    var s1 = [[2002, 112000], [2003, 122000], [2004, 104000], [2005, 99000], [2006, 121000], 
    [2007, 148000], [2008, 114000], [2009, 133000], [2010, 161000], [2011, 173000]];
    var s2 = [[2002, 10200], [2003, 10800], [2004, 11200], [2005, 11800], [2006, 12400], 
    [2007, 12800], [2008, 13200], [2009, 12600], [2010, 13100]];
 
    plot1 = $.jqplot("chart1", [s2, s1], {
        // Turns on animatino for all series in this plot.
        animate: true,
        // Will animate plot on calls to plot1.replot({resetAxes:true})
        animateReplot: true,
        cursor: {
            show: true,
            zoom: true,
            looseZoom: true,
            showTooltip: false
        },
        series:[
            {
                pointLabels: {
                    show: true
                },
                renderer: $.jqplot.BarRenderer,
                showHighlight: false,
                yaxis: 'y2axis',
                rendererOptions: {
                    // Speed up the animation a little bit.
                    // This is a number of milliseconds.  
                    // Default for bar series is 3000.  
                    animation: {
                        speed: 2500
                    },
                    barWidth: 15,
                    barPadding: -15,
                    barMargin: 0,
                    highlightMouseOver: false
                }
            }, 
            {
                rendererOptions: {
                    // speed up the animation a little bit.
                    // This is a number of milliseconds.
                    // Default for a line series is 2500.
                    animation: {
                        speed: 2000
                    }
                }
            }
        ],
        axesDefaults: {
            pad: 0
        },
        axes: {
            // These options will set up the x axis like a category axis.
            xaxis: {
                tickInterval: 1,
                drawMajorGridlines: false,
                drawMinorGridlines: true,
                drawMajorTickMarks: false,
                rendererOptions: {
                tickInset: 0.5,
                minorTicks: 1
            }
            },
            yaxis: {
                tickOptions: {
                    formatString: "$%'d"
                },
                rendererOptions: {
                    forceTickAt0: true
                }
            },
            y2axis: {
                tickOptions: {
                    formatString: "$%'d"
                },
                rendererOptions: {
                    // align the ticks on the y2 axis with the y axis.
                    alignTicks: true,
                    forceTickAt0: true
                }
            }
        },
        highlighter: {
            show: true, 
            showLabel: true, 
            tooltipAxes: 'y',
            sizeAdjust: 7.5 , tooltipLocation : 'ne'
        }
    });
   
});
</script>

<script type="text/javascript" const url=location.href; src="jqplot/jquery.min.js"></script>
<script type="text/javascript" const url=location.href; src="jqplot/jquery.jqplot.js"></script>
<script type="text/javascript" const url=location.href; src="jqplot/plugins/jqplot.barRenderer.js"></script>
<script type="text/javascript" const url=location.href; src="jqplot/plugins/jqplot.highlighter.js"></script>
<script type="text/javascript" const url=location.href; src="jqplot/plugins/jqplot.cursor.js"></script>
<script type="text/javascript" const url=location.href; src="jqplot/plugins/jqplot.pointLabels.js"></script>
