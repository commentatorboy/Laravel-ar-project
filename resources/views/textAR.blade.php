<!DOCTYPE html>
<html>
<head>
    <title>My A-Frame Scene</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="https://unpkg.com/aframe-charts-component/dist/aframe-charts-component.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"> </script>
  <style>#arjsDebugUIContainer{display:none}</style>
</head>
<body>
   <!-- Det eneste der virker er vive eksemplet: https://webvr.donmccurdy.com/-->
    <!-- Aframe scene -->
    <a-scene embedded arjs renderer="precision: low">
           	<a-marker preset='hiro' type='pattern' >

           <!-- Aframe light -->
         <!-- <a-light type="point" intensity="1" position="-2 10 10"></a-light> -->

          <!-- Declaring chart component -->
      	 <!--	<a-entity charts="type: pie; dataPoints: {{ asset('/wee3d/public/data/dataLegend.json') }}; pie_radius: 1; show_legend_info: true; show_legend_position: -6 0 -3;
              show_legend_rotation: 0 35 0" position="-6 -1 0"></a-entity> -->
          <!-- <a-entity charts="type: pie; dataPoints: {{ asset('/wee3d/public/data/dataLegend.json') }}; pie_radius: 1; show_legend_info: true; show_legend_position: -1 1 -3;
              show_legend_rotation: 0 35 0" position="0 1 0"></a-entity>-->
          <a-entity rotation="-10 0 0" position="0 3 0"
            geometry="primitive: plane; width: 4; height: auto"
            material="color: blue"
            text="value: OH WOW YOU DID IT!!!"></a-entity> 
      
          <a-entity
            geometry="primitive: plane; width: 4; height: auto"
            material="color: blue"
            text="value: I can many everything interactive! Try and look up"></a-entity> 
		</a-marker>
          <!-- Aframe camera -->
       <!-- for no markers <a-entity position='-6 -1 8' camera look-controls> -->
      <a-entity camera look-controls>
        </a-entity>

    </a-scene>
</body>
</html>

