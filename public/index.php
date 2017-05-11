<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amMap examples</title>

        <link rel="stylesheet" href="../ammap/ammap.css" type="text/css">
        <script src="../ammap/ammap.js" type="text/javascript"></script>
        <!-- map file should be included after ammap.js -->
        <script src="../ammap/maps/js/worldLow.js" type="text/javascript"></script>

        <script>
            // svg path for target icon
            var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";
            // svg path for plane icon
            var planeSVG = "M19.671,8.11l-2.777,2.777l-3.837-0.861c0.362-0.505,0.916-1.683,0.464-2.135c-0.518-0.517-1.979,0.278-2.305,0.604l-0.913,0.913L7.614,8.804l-2.021,2.021l2.232,1.061l-0.082,0.082l1.701,1.701l0.688-0.687l3.164,1.504L9.571,18.21H6.413l-1.137,1.138l3.6,0.948l1.83,1.83l0.947,3.598l1.137-1.137V21.43l3.725-3.725l1.504,3.164l-0.687,0.687l1.702,1.701l0.081-0.081l1.062,2.231l2.02-2.02l-0.604-2.689l0.912-0.912c0.326-0.326,1.121-1.789,0.604-2.306c-0.452-0.452-1.63,0.101-2.135,0.464l-0.861-3.838l2.777-2.777c0.947-0.947,3.599-4.862,2.62-5.839C24.533,4.512,20.618,7.163,19.671,8.11z";

            AmCharts.makeChart("mapdiv", {
                type: "map",


                dataProvider: {
                    map: "worldLow",
                    linkToObject: "master1000",
                    images: [
                        {
                            id: "grandslam",
                            lines: [
                            {
                                latitudes: [-37.813628, 48.856614],
                                longitudes: [144.963058, 2.352222],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }, {
                                latitudes: [48.856614, 51.507351],
                                longitudes: [2.352222, -0.127758],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }, {
                                latitudes: [51.507351, 40.712784],
                                longitudes: [-0.127758, -74.005941],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }],
                            images: [
                            {
                                svgPath: targetSVG,
                                title: "London",
                                latitude: 51.507351,
                                longitude: -0.127758,
                                color: "#fc2ffc",
                                scale:1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Melbourne",
                                latitude: -37.813628,
                                longitude: 144.963058,
                                color: "#fc2ffc",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Paris",
                                latitude: 48.856614,
                                longitude: 2.352222,
                                color: "#fc2ffc",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "New York",
                                latitude: 40.712784,
                                longitude: -74.005941,
                                color: "#fc2ffc",
                                scale: 1.2
                            }]
                        },
                        {
                            id: "master1000",
                            images: [
                            {
                                svgPath: targetSVG,
                                title: "Indian Wells",
                                latitude: 33.7176,
                                longitude: -116.3408,
                                color: "#a06e35",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Miami",
                                latitude: 25.7617,
                                longitude: -80.1918,
                                color: "#db7400",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Monte Carlo",
                                latitude: 43.7401,
                                longitude: 7.4266,
                                color: "#26774c",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Madrid",
                                latitude: 40.4168,
                                longitude: -3.7036,
                                color: "#1d4975",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Rome",
                                latitude: 41.9028,
                                longitude: 12.4964,
                                color: "#fc2e2e",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Toronto",
                                latitude: 43.6532,
                                longitude: -79.3832,
                                color: "#4c0606",
                                scale: 1
                            },
                            ],
                        },
                        {
                            id: "all",
                            images: [
                            {
                                svgPath: targetSVG,
                                title: "Indian Wells",
                                latitude: 33.7176,
                                longitude: -116.3408,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Miami",
                                latitude: 25.7617,
                                longitude: -80.1918,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Monte Carlo",
                                latitude: 43.7401,
                                longitude: 7.4266,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Madrid",
                                latitude: 40.4168,
                                longitude: -3.7036,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Rome",
                                latitude: 41.9028,
                                longitude: 12.4964,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Toronto",
                                latitude: 43.6532,
                                longitude: -79.3832,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Cincinnati",
                                latitude: 39.1031,
                                longitude: -84.512,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Shanghai",
                                latitude: 31.2304,
                                longitude: 21.4737,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Paris",
                                latitude: 48.8566,
                                longitude: 2.3522,
                                color: "#5c5c3d",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "London",
                                latitude: 51.507351,
                                longitude: -0.127758,
                                color: "#fc2ffc",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Melbourne",
                                latitude: -37.813628,
                                longitude: 144.963058,
                                color: "#fc2ffc",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "Paris",
                                latitude: 48.856614,
                                longitude: 2.352222,
                                color: "#fc2ffc",
                                scale: 1
                            },
                            {
                                svgPath: targetSVG,
                                title: "<font size=2px>Grand Slam</font><br><font size=5px>US Open</font><hr><br>New York<br>28 July",
                                latitude: 40.712784,
                                longitude: -74.005941,
                                color: "#fc2ffc",
                                scale: 1.2
                            }],
                            lines: [
                            {
                                latitudes: [33.7176, 25.7617],
                                longitudes: [-116.3408, -80.1918],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [25.7617, 43.7401],
                                longitudes: [-80.1918, 7.4266],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [43.7401, 40.4168],
                                longitudes: [7.4266, -3.7036],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [40.4168, 41.9028],
                                longitudes: [-3.7036, 12.4964],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [41.9028, 43.6532],
                                longitudes: [12.4964, -79.3832],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [43.6532, 39.1031],
                                longitudes: [-79.3832, -84.512],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [39.1031, 31.2304],
                                longitudes: [-84.512, 21.4737],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [31.2304, 48.8566],
                                longitudes: [21.4737, 2.3522],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#5c5c3d",
                                arc: 0,
                                color: "#5c5c3d",
                                alpha: 0.6,
                                thickness: 2
                            },
                            {
                                latitudes: [-37.813628, 48.856614],
                                longitudes: [144.963058, 2.352222],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }, {
                                latitudes: [48.856614, 51.507351],
                                longitudes: [2.352222, -0.127758],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }, {
                                latitudes: [51.507351, 40.712784],
                                longitudes: [-0.127758, -74.005941],
                                arrow: "end",
                                arrowSize: 12,
                                arrowAlpha: 0.7,
                                arrowColor: "#fc2ffc",
                                arc: 0,
                                color: "#fc2ffc",
                                alpha: 0.6,
                                thickness: 2
                            }],
                        }
                    ]
                },

                areasSettings: {
                    unlistedAreasColor: "#8dd9ef"
                },

                imagesSettings: {
                    color: "#CC0000",
                    rollOverColor: "#00FF00",
                    selectedColor: "#FF0000"
                },

                backgroundZoomsToTop: true,
                linesAboveImages: true
            });
        </script>
    </head>

    <body>
        <div id="mapdiv" style="width: 100%; background-color:#eeeeee; height: 500px;"></div>
    </body>

</html>

