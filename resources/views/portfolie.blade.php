<!DOCTYPE html>
<html>
<head>
    <title>My A-Frame Scene</title>
    <script src="https://aframe.io/releases/0.8.2/aframe.min.js"></script>
    <script src="https://cdn.rawgit.com/jeromeetienne/AR.js/1.6.2/aframe/build/aframe-ar.js"> </script>
    <script src="https://unpkg.com/aframe-animation-component@^5.1.2/dist/aframe-animation-component.min.js"></script>

</head>
<body>
    <!--
       Aframe scene
       branding med firmaet..... screenshot eller "hvad kan jeg gøre for dig QR scanner." 
    -->
    <a-scene embedded arjs renderer="precision: low">
      <a-assets>
        <img  id="img-scoutpocket" src="{{ asset('/wee3d/public/img/scoutpocket.png') }}">
        <img  id="img-lazzaweb" src="{{ asset('/wee3d/public/img/lazzaweb.png') }}">
        <img  id="img-bnicer" src="{{ asset('/wee3d/public/img/bnicer.png') }}">
      </a-assets>
      <!-- click on them to change the picture (like a slide show) or use swipe?-->
      <a-marker>
          <!-- Aframe light -->
          <a-light type="point" intensity="1" position="-2 10 10"></a-light>

          <a-image position="0 0 0" id="first-image" rotation="-90 0 0" width="3" height="1.5" src="#img-scoutpocket">
            <a-entity position="0 1 0" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: scoutpocket.dk; width: 2; "></a-entity>        
          </a-image>

          <a-image id="second-image" position="4 5 0" rotation="0 -90 90" width="3" height="1.5" src="#img-lazzaweb">
            <a-entity position="0 1 0" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: lazzaweb.dk; width: 2; "></a-entity>       
          </a-image>

          <a-image id="third-image" position="0 10 0" rotation="90 180 0" width="3" height="1.5" src="#img-bnicer">
            <a-entity position="0 1 0" geometry="primitive: plane; width: auto; height: auto" material="color: #eee"
                text="color: blue; align: center; value: bnicer.dk; width: 2; "></a-entity>          
          </a-image>
          </a-marker>
      <!-- Aframe camera -->
        <a-entity camera look-controls wasd-controls="fly: true" >
          <a-cursor></a-cursor>
        </a-entity>
        
    </a-scene>
    <script>
        var el = document.querySelector('#first-image');


    </script>
</body>
</html>

