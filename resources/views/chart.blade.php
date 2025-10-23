<!DOCTYPE html>
<html>
<head>
    <title>My A-Frame Scene</title>
    <script src="https://aframe.io/releases/0.9.0/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-charts-component/dist/aframe-charts-component.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"> </script>
</head>
<body>
    <!-- Aframe scene -->
    <a-scene embedded arjs renderer="precision: low">
        
          <!-- Aframe light -->
          <a-light type="point" intensity="1" position="-2 10 10"></a-light>
      
          <!-- Declaring chart component -->
          <a-entity charts="type: pie; dataPoints: {{ asset('/wee3d/public/data/dataLegend.json') }}; pie_radius: 1; show_legend_info: true; show_legend_position: -1 1 -3;
              show_legend_rotation: 0 35 0" position="0 1 0"></a-entity>
      <!-- Aframe camera -->
        <a-entity camera look-controls pointerLockEnabled>
            <a-cursor></a-cursor>
        </a-entity>
    </a-scene>
</body>
</html>

